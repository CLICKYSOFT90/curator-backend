<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\PlayListingFloorSubmissionRequest;
use App\Http\Requests\Front\SongActivityDown;
use App\Http\Requests\Front\SongActivityUp;
use App\Http\Requests\Front\SongCuratorSubmissionRequest;
use App\Http\Requests\Front\SongInfluencerSubmissionRequest;
use App\Models\SongSubmission;
use App\Repositories\Front\SongSubmissionRepository;

class SongSubmissionController extends Controller
{
    protected $songSubmission;

    public function __construct(SongSubmission $songSubmission) {
        $this->songSubmission = new SongSubmissionRepository($songSubmission);
    }

    public function saveCuratorSongSubmission(SongCuratorSubmissionRequest $request) {
        return $this->songSubmission->saveCuratorSongSubmission($request);
    }

    public function saveInfluencerSongSubmission(SongInfluencerSubmissionRequest $request) {
        return $this->songSubmission->saveInfluencerSongSubmission($request);
    }


    public function saveUploadSongPlayListingFloor(PlayListingFloorSubmissionRequest $request,$addMore=null){
        return $this->songSubmission->savePlayListingFloorSubmission($request,$addMore);
    }

    public function getSongDetail($songId){
        return $this->songSubmission->getSongDetail($songId);
    }

    public function songListeningActivity($songId){
        return $this->songSubmission->songListeningActivity($songId);
    }

    public function saveSongActivityUp(SongActivityUp $request){
        return $this->songSubmission->saveSongActivity($request);
    }

    public function saveSongActivityDown(SongActivityDown $request){
        return $this->songSubmission->saveSongActivity($request);
    }
}