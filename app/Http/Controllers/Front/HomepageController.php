<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Faq;
use App\Models\Genre;
use App\Models\PrivacyPolicy;
use App\Models\SongSubmission;
use App\Models\TermAndCondition;
use App\Models\User;

class HomepageController extends Controller
{
    public function index(){
        return view('front.pages.home');
    }

    public function listOfCurators(){
        $genres = Genre::get();
        $curators = User::where('role_id', User::CURATOR_ID)
            ->isActive()
            ->isVerified()
            ->IsCompleted()
            ->get();

        $influencers = User::where('role_id', User::INFLUENCER_ID)
            ->isActive()
            ->isVerified()
            ->IsCompleted()
            ->get();

        return view('front.pages.list-of-curator', compact('curators', 'influencers','genres'));
    }

    public function searchCurators(){
          $request = request()->all();
          if (isset($request['type']) && $request['type'] == 'curator'){
              $curators = User::where('role_id', User::CURATOR_ID)
                  ->isActive()
                  ->isVerified()
                  ->IsCompleted();
              if (!empty($request['curator_type'])){
                  $curators->where('platform_type',$request['curator_type']);
              }
              if (!empty($request['genre_id'])){
                  $curators->with('userGenres')->whereHas('userGenres',function ($query)use ($request){
                      $query->where('genre_id',$request['genre_id']);
                  });
              }
              if (!empty($request['name'])){
                  $curators->where('display_name','LIKE',"%{$request['name']}%");
              }
              if (!empty($request['other'])){
                  $curators->orderBY('display_name',($request['other'] == 'A to Z')?'ASC':'DESC');
              }
              $curators = $curators->get();
              return view('front.partials.curator_partial',compact('curators'))->render();
          }
        if (isset($request['type']) && $request['type'] == 'influencers'){
            $influencers = User::where('role_id', User::INFLUENCER_ID)
                ->isActive()
                ->isVerified()
                ->IsCompleted();
            if (!empty($request['curator_type'])){
                $influencers->where('platform_type',$request['curator_type']);
            }
            if (!empty($request['name'])){
                $influencers->where('display_name','LIKE',"%{$request['name']}%");
            }
            if (!empty($request['other'])){
                $influencers->orderBY('display_name',($request['other'] == 'A to Z')?'ASC':'DESC');
            }
            $influencers = $influencers->get();
            return view('front.partials.influencers_partial',compact('influencers'))->render();
        }

    }
    public function chooseCuratorSearch(){
          $request = request()->all();
          if (isset($request['type']) && $request['type'] == 'curator'){
              $curators = User::where('role_id', User::CURATOR_ID)
                  ->isActive()
                  ->isVerified()
                  ->IsCompleted();
              if (!empty($request['curator_type'])){
                  $curators->where('platform_type',$request['curator_type']);
              }
              if (!empty($request['genre_id'])){
                  $curators->with('userGenres')->whereHas('userGenres',function ($query)use ($request){
                      $query->where('genre_id',$request['genre_id']);
                  });
              }
              if (!empty($request['name'])){
                  $curators->where('display_name','LIKE',"%{$request['name']}%");
              }
              if (!empty($request['other'])){
                  $curators->orderBY('display_name',($request['other'] == 'A to Z')?'ASC':'DESC');
              }
              $curators = $curators->get();
              return view('front.partials.curator_search_partial',compact('curators'))->render();
          }
        if (isset($request['type']) && $request['type'] == 'influencers'){
            $influencers = User::where('role_id', User::INFLUENCER_ID)
                ->isActive()
                ->isVerified()
                ->IsCompleted();
            if (!empty($request['curator_type'])){
                $influencers->where('platform_type',$request['curator_type']);
            }
            if (!empty($request['name'])){
                $influencers->where('display_name','LIKE',"%{$request['name']}%");
            }
            if (!empty($request['other'])){
                $influencers->orderBY('display_name',($request['other'] == 'A to Z')?'ASC':'DESC');
            }
            $influencers = $influencers->get();
            return view('front.partials.influencer_search_partial',compact('influencers'))->render();
        }

    }

    public function listOfArtists(){
        $artists = User::whereIn('role_id', [User::ARTIST_ID, User::LABEL_ID])
            ->isActive()
            ->isVerified()
            ->get();

        return view('front.pages.list-of-artist', compact('artists'));
    }

    public function howItWorkCurator(){
        return view('front.pages.home.how-it-works-curator');
    }

    public function howItWorkArtist(){
        return view('front.pages.home.how-it-works-artist');
    }

    public function howItWorkInfluencer(){
        return view('front.pages.home.how-it-works-influencer');
    }

    public function aboutUs(){
        $data = AboutUs::first();
        return view('front.pages.about-us', compact('data'));
    }

    public function help(){
        $popularFaq = Faq::isActive()->isPopular()->take(3)->get();
        $otherFaq = Faq::isActive()->isNotPopular()->isNotGlobal()->get();
        return view('front.pages.help', compact('popularFaq', 'otherFaq'));
    }

    public function searchFaq(){
        $search = request()->search;
        if ($search === 'All'){
            $otherFaq = Faq::isActive()->isNotPopular()->isNotGlobal()->get();
        }else{
            $otherFaq = Faq::isActive()
                ->isNotPopular()
                ->isNotGlobal()
                ->where('question', 'LIKE', "%{$search}%")
                ->get();
        }

        return response()->json(['data_count' => count($otherFaq), 'data' => $otherFaq]);
    }

    public function termCondition(){
        $data = TermAndCondition::first();
        return view('front.pages.term-condition', compact('data'));
    }

    public function privacyPolicy(){
        $data = PrivacyPolicy::first();
        return view('front.pages.privacy-policy', compact('data'));
    }

    public function profile(){
        if (!auth()->check()) {
            abort(404);
        }
        $user = User::with('getCountry')->findOrFail(auth()->id());
        $artists = User::with('getCountry')->where('role_id',User::ARTIST_ID)->get();
        $songs = SongSubmission::where('submission_type','Curator')->get();
        return view('front.pages.user-profile', compact('user','songs','artists'));
    }

    public function chooseCurators(){
        $genres = Genre::get();
        $curators = User::where('role_id', User::CURATOR_ID)
            ->isActive()
            ->isVerified()
            ->IsCompleted()
            ->get();
        return view('front.pages.choose-curator',compact('curators','genres'));
    }

    public function chooseInfluencer(){
        $influencers = User::where('role_id', User::INFLUENCER_ID)
            ->isActive()
            ->isVerified()
            ->IsCompleted()
            ->get();
        return view('front.pages.choose-influencer',compact('influencers'));
    }
}


