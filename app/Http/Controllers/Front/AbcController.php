<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\LyricLanguage;

class AbcController extends Controller
{
    public function selectSubmission(){
        return view('front.pages.select-submission');
    }

    public function uploadSongCurator(){
        $genres = Genre::with('getSubGenre')->get();
        return view('front.pages.upload-song-curator',compact('genres'));
    }

    public function handleCuratorSongSubmission(){

    }

    public function uploadSongInfluencer(){
        $languages = LyricLanguage::get();
        return view('front.pages.upload-song-influencer',compact('languages'));
    }

    public function groundFloorTicketPricing(){
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

    public function automatedSubmissionCurator(){
        return view('front.pages.automated-submission-curator');
    }

    public function automatedSubmissionInfluencer(){
        return view('front.pages.automated-submission-influencer');
    }

    public function successfullySubmitted(){
        return view('front.pages.successfully-submitted');
    }

    public function myCampaignResponses(){
        return view('front.pages.my-campaign-response');
    }
}