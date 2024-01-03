<?php

namespace App\Repositories\Front;

use App\Models\Admin\PlayListingFloorCampaign;
use App\Models\CuratorCampaign;
use App\Models\InfluencerCampaign;
use App\Models\SongFeatureArtist;
use App\Models\SongGenre;
use App\Models\SongSubmission;
use Intervention\Image\Facades\Image;
use App\Models\SongActivity;
use App\Models\User;

class SongSubmissionRepository
{
    public function saveCuratorSongSubmission($request)
    {
        $request = $request->all();
        $request['user_id'] = auth()->id();
        $request['submission_type'] = 'Curator';
        if ($request['audio_type']=='Link') {
            $request['audio'] = $request['audio_link'];
        } else {
            if (request()->hasFile('audio')) {
                $request['audio'] = $this->audioSave('audio','audio');
            }
        }
        if (request()->hasFile('instrumental_lease')) {
            $request['instrumental_lease'] = $this->audioSave('instrumental_lease','instrumental');
        }
        if (request()->hasFile('cover_image')) {
            $request['cover_image'] = $this->imageSave('cover_image');
        }
        $songSubmission = SongSubmission::create($request);
        if (!empty($songSubmission)) {
            if (isset($request['genres'])) {
                foreach ($request['genres'] as $key => $genre) {
                    foreach ($genre as $val) {
                        if (!empty($val)) {
                            SongGenre::create([
                                'song_submission_id' => $songSubmission->id,
                                'genre_id'           => $key,
                                'sub_genre_id'       => $val
                            ]);
                        }
                    }
                }
            }

            foreach ($request['feature_artist'] as $artist) {
                SongFeatureArtist::create([
                    'song_submission_id' => $songSubmission->id,
                    'name'               => $artist
                ]);
            }
            return response()->json([
                'status'  => 'success',
                'msg' => 'Song Submission has been saved successfully'
            ], 200);
        }
        return response()->json([
            'status'  => 'warning',
            'msg' => 'Song Submission has not been saved'
        ], 400);
    }

    public function saveInfluencerSongSubmission($request)
    {
        $request = $request->all();
        $request['user_id'] = auth()->id();
        $request['submission_type'] = 'Influencer';

        $songSubmission = SongSubmission::create($request);
        if (!empty($songSubmission)) {
            return response()->json([
                'status'  => 'success',
                'msg' => 'Song Submission has been saved successfully'
            ], 200);
        }
        return response()->json([
            'status'  => 'warning',
            'msg' => 'Song Submission has not been saved'
        ], 400);
    }

    public function savePlayListingFloorSubmission($request,$addMore){
        $request = $request->all();
        if (!empty($addMore)) {
            unset($request['cover_image']);
            unset($request['audio']);
            if (!session()->has('play_listing')) {
                session()->put('play_listing', []);
            }
            session()->push('play_listing', $request);
            return response()->json([
                'status'  => 'pending',
                'msg'     => 'Song Submission has been saved successfully'
            ], 200);
        }
        $request['user_id'] = auth()->id();
        $request['submission_type'] = 'Curator';
        if ($request['audio_type']=='Link') {
            $request['audio'] = $request['audio_link'];
        } else {
            if (request()->hasFile('audio')) {
                $request['audio'] = $this->audioSave('audio','audio');
            }
        }
        if (request()->hasFile('instrumental_lease')) {
            $request['instrumental_lease'] = $this->audioSave('instrumental_lease','instrumental');
        }
        if (request()->hasFile('cover_image')) {
            $request['cover_image'] = $this->imageSave('cover_image');
        }

        $songSubmission = SongSubmission::create($request);
        if (!empty($songSubmission)) {
            if (isset($request['genres'])) {
                foreach ($request['genres'] as $key => $genre) {
                    foreach ($genre as $val) {
                        if (!empty($val)) {
                            SongGenre::create([
                                'song_submission_id' => $songSubmission->id,
                                'genre_id'           => $key,
                                'sub_genre_id'       => $val
                            ]);
                        }
                    }
                }
            }

            foreach ($request['feature_artist'] as $artist) {
                SongFeatureArtist::create([
                    'song_submission_id' => $songSubmission->id,
                    'name'               => $artist
                ]);
            }
            return response()->json([
                'status'  => 'success',
                'msg' => 'Song Submission has been saved successfully'
            ], 200);
        }
        return response()->json([
            'status'  => 'warning',
            'msg' => 'Song Submission has not been saved'
        ], 400);
    }

    public function audioSave($fileName,$folderName)
    {
        $audio = request()->file($fileName);
        $audioName = rand(111, 99999).time(). '.' . $audio->getClientOriginalExtension();
        $folderPath = public_path('assets/front/songs/'.$folderName);
        $audio->move($folderPath, $audioName);
        return $audioName;
    }

    public function imageSave($fileName)
    {
        $image = request()->file($fileName);
        $extension = $image->getClientOriginalExtension();
        $imageName = rand(111, 99999).time(). '.' . $extension;
        $mainImage = public_path('assets/front/songs/cover/' . $imageName);
        Image::make($image)->save($mainImage);
        return $imageName;
    }

    public function getSongDetail($songId,$userType='curator'){
        switch ($userType) {
            case 'curator':
                $song = CuratorCampaign::findOrFail($songId);
                break;
            case 'influencer':
                $song = InfluencerCampaign::findOrFail($songId);
                break;
            case 'play_listing_floor':
                $song = PlayListingFloorCampaign::findOrFail($songId);
                break;
        }
//        $song = SongSubmission::with(['songActivities','songActivities.getUser'])->findOrFail($songId);
        if (auth()->user()->role_id==User::CURATOR_ID) {
            $playList = [
                'Blogs',
                'Instagram Editor',
                'Twitter',
                'Spotify Playlist',
                'Youtuber',
                'Soundcloud Repost'
            ];
        } else {
            $playList = [
                'TikTok',
                'Instagram',
                'Both'
            ];
        }
        return response()->json([
            'status' => 'success',
            'msg'    => 'Song has been fetched successfully.',
            'data'   => view('front.pages.partial.song-detail', compact('song','playList'))->render()
        ], 200);
    }

    public function songListeningActivity($songId){
        if (empty($songId)) {
            abort(404);
        }
        $user = auth()->user();
        $activity = SongActivity::create([
            'user_id' => $user->id,
            'song_id' => $songId,
            'message' => 'You Listened the song.'
        ]);
        if (!empty($activity)) {
            $newMessage = '<div class="image-script-content">';
            $newMessage .= '<img src="'.asset("assets/front/images/profile-images/".$user->profile_image).'" alt="'.$user->full_name.'" width="48" height="48">';
            $newMessage .= '<p>'.$activity->message.' <span>'.date('F d, Y h:i A', strtotime($activity->created_at)).'</span>';
            $newMessage .= '</p></div>';

            return response()->json([
                'status' => 'success',
                'msg'    => 'Song activity has been submitted successfully.',
                'data'   => $newMessage
            ], 200);
        }

        return response()->json([
            'status' => 'warning',
            'msg'    => 'Song activity has not been submitted.'
        ], 200);
    }

    public function saveSongActivity($request){
        $request = $request->all();
        $user = auth()->user();
        $request['user_id'] = $user->id;
        if (isset($request['about'])) {
            $request['about'] = implode(",",$request['about']);
        }
        if (isset($request['song_event']) && $request['song_event']==1) {
            $request['message'] = 'You Approved the song.';
        } else {
            $request['message'] = 'You Disapproved the song.';
        }
        $activity = SongActivity::create($request);
        if (!empty($activity)) {
            $newMessage = '<div class="image-script-content">';
            $newMessage .= '<img src="'.asset("assets/front/images/profile-images/".$user->profile_image).'" alt="'.$user->full_name.'" width="48" height="48">';
            $newMessage .= '<p>'.$activity->message.' <span>'.date('F d, Y h:i A', strtotime($activity->created_at)).'</span>';
            $newMessage .= '</p></div>';

            if ($activity->song_event==1) {
                $request['message'] = 'You promised to share the song '.($activity->share=='Custom' ? 'on '.$activity->share_date : 'in a '.$activity->share);
                $activity = SongActivity::create($request);
                if (!empty($activity)) {
                    $newMessage .= '<div class="image-script-content">';
                    $newMessage .= '<img src="'.asset("assets/front/images/profile-images/".$user->profile_image).'" alt="'.$user->full_name.'" width="48" height="48">';
                    $newMessage .= '<p>'.$activity->message.' <span>'.date('F d, Y h:i A', strtotime($activity->created_at)).'</span>';
                    $newMessage .= '</p></div>';
                }
            }

            return response()->json([
                'status' => 'success',
                'msg'    => 'Song activity has been submitted successfully.',
                'data'   => $newMessage
            ], 200);
        }

        return response()->json([
            'status' => 'warning',
            'msg'    => 'Song activity has not been submitted.'
        ], 200);
    }
}
