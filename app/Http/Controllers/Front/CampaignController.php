<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Chat;
use App\Http\Requests\Front\Store\CuratorCampaignStoreRequest;
use App\Models\Campaign;
use App\Models\CampaignSubmittedUser;
use App\Models\CuratorCampaign;
use App\Models\Genre;
use App\Models\LyricLanguage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CampaignController extends Controller
{
    public function selectSubmission(){
        return view('front.pages.select-submission');
    }

    public function uploadSongCurator(){
        $genres = Genre::with('getSubGenre')->get();
        $languages = LyricLanguage::get();

        return view('front.pages.upload-song-curator',compact('genres','languages'));
    }

    public function uploadSongCuratorData(CuratorCampaignStoreRequest $request){

        if((int)$request->step === 3){

            $campaign = Campaign::create([
                'user_id' => Auth::id(),
                'submission_type' => Campaign::CURATOR,
                'submit_option' => $request->submit_option
            ]);

            $instrumentalLeaseName = null;

            if (request()->hasFile('instrumental_lease')) {
                $instrumentalLeaseName = $this->audioSave('instrumental_lease','instrumental');
            }

            CuratorCampaign::create([
                'user_id' => Auth::id(),
                'campaign_id' => $campaign->id,
                'link' => $request->link,
                'audio' => $this->audioSave('audio','audio'),
                'cover_image' => $this->imageSave('cover_image'),
                'is_released' => !empty($request->is_released)?1:0,
                'release_date' => $request->released_date,
                'artist_name' => $request->artist_name,
                'feature_artist' => !empty($request->feature_artist) ? implode(',', $request->feature_artist) : null,
                'track_title' => $request->track_title,
                'release_type' => $request->release_type,
                'has_lyrics' => !empty($request->has_lyrics)?1:0,
                'lyrics' => !empty($request->has_lyrics) ? $request->lyrics : null,
                'is_explicit' => !empty($request->is_explicit)?1:0,
                'instrumental_lease' => $instrumentalLeaseName,
                'share_youtube' => !empty($request->permission_youtubers)?1:0,
                'is_custom_pitch' => !empty($request->is_custom_pitch)?1:0,
                'pitch' => !empty($request->is_custom_pitch) ? $request->pitch : null,
            ]);

            return response()->json([
                'status'  => "success",
                'url' => route('user.automated.submission.curator', $campaign->id)
            ]);
        }

        return response()->json([
            'status'  => "success",
            'msg' => "Campaign submission step {$request->step} has been saved successfully"
        ]);
    }

    public function automatedSubmissionCurator($campaignId){
        $campaign = Campaign::findOrFail($campaignId);
        return view('front.pages.automated-submission-curator', compact('campaign'));
    }

    public function successfullySubmitted($campaignId){
        $campaign = Campaign::findOrFail($campaignId);
        $campaign->update([
            'status' => Campaign::COMPLETED
        ]);

        if($campaign->status !== Campaign::COMPLETED){
            CampaignSubmittedUser::create([
                'campaign_id' => $campaign->id,
                'user_id' => 3,
                'submission_type' => Campaign::CURATOR
            ]);
        }

        $campaignDetail = CuratorCampaign::where('campaign_id', $campaignId)->first();

        return view('front.pages.successfully-submitted', compact('campaignDetail'));
    }

    public function uploadSongInfluencer(){
        $languages = LyricLanguage::get();
        Session::put('campaign_data', [
            'user_id' => Auth::id(),
            'submission_type' => Campaign::INFLUENCER,
        ]);
        return view('front.pages.upload-song-influencer',compact('languages'));
    }

    public function groundFloorTicketPricing(){
        Session::put('campaign_data', [
            'user_id' => Auth::id(),
            'submission_type' => Campaign::PLAY_LISTING_FLOOR,
        ]);
        return view('front.pages.ground-floor-ticket-pricing');
    }

    public function uploadSongPlayListingFloor(){
        $genres = Genre::with(['getSubGenre'])->get();
        $lyricLanguages = LyricLanguage::get();
        return view('front.pages.upload-song-play-listing-floor', compact('genres', 'lyricLanguages'));
    }

    public function trackOverviewPlayListingFloor(){
        return view('front.pages.track-overview-play-listing-floor');
    }

    public function automatedSubmissionInfluencer(){
        return view('front.pages.automated-submission-influencer');
    }



    public function myCampaignResponses($id){
        $user = auth()->user();
        $receivers = Chat::where('sender_id','=',$user->id)->distinct()->orderBy('id', 'desc')->pluck('id')->toArray();
        $senders = Chat::where('receiver_id','=',$user->id)->distinct()->orderBy('id', 'desc')->pluck('id')->toArray();
        $ids = array_unique(array_merge($receivers, $senders));
        $chats = Chat::whereIn('id', $ids)
            ->with([
                'getReceiverCustomer',
                'getSenderCustomer',
            ])->take(5)
            ->get();
        $myCampaign = Campaign::where('id',$id)->isCurator()
            ->with([
                'getCuratorCampaignDetail',
                'userCampaignResponse.user.getCountry',
                'userCampaignApprove.user.getCountry'
            ])
            ->first();
        return view('front.pages.my-campaign-response',compact('chats','user','myCampaign'));
    }
    public function myCampaignArtistResponses(){
        $user = auth()->user();
        $receivers = Chat::where('sender_id','=',$user->id)->distinct()->orderBy('id', 'desc')->pluck('id')->toArray();
        $senders = Chat::where('receiver_id','=',$user->id)->distinct()->orderBy('id', 'desc')->pluck('id')->toArray();
        $ids = array_unique(array_merge($receivers, $senders));
        $chats = Chat::whereIn('id', $ids)
            ->with([
                'getReceiverCustomer',
                'getSenderCustomer',
            ])->take(5)
            ->get();
        $myCampaigns = \App\Models\Campaign::where('user_id',$user->id)->isCurator()
            ->with([
                'getCuratorCampaignDetail'
            ])
            ->withCount(['userCampaignResponse','userCampaignApprove'])
            ->get();
        return view('front.pages.my-campaign-artist-song',compact('myCampaigns','user','chats'));
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
}