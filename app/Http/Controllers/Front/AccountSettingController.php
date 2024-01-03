<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\AccountPasswordRequest;
use App\Http\Requests\Front\AccountSettingRequest;
use App\Http\Requests\Front\update\CoverImageUpdateRequest;
use App\Http\Requests\Front\update\ProfileImageUpdateRequest;
use App\Models\Country;
use App\Models\Genre;
use App\Models\User;
use App\Models\UserFavoriteGenre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AccountSettingController extends Controller
{
    public function accountSetting(){
        $user = auth()->user();
        $countries = Country::get();
        $genres = Genre::with(['getSubGenre'])->get();
        $userGenre = UserFavoriteGenre::where('user_id',$user->id)->pluck('genre_id')->toArray();
        return view('front.pages.account-setting',compact('user','countries','genres','userGenre'));
    }

    public function saveAccountSetting(AccountSettingRequest $request){

        $user = User::find(Auth::id());
        $request = $request->all();

        if($user->profile_image === "default.png") {
            $request['is_completed'] = 0;
        }

        $request['is_completed'] = 1;
        $user->update($request);

        return redirect()->route('account.setting')->with('success_msg', 'Account setting update successfully.');
    }

    public function updateAccountPassword(AccountPasswordRequest $request){
        $user = auth()->user();
        if (!empty($user)){
            $user->update($request->all());
            return redirect()->route('account.setting')->with('success_msg', 'Password setting update successfully.');
        }
        return redirect()->route('account.setting');
    }

    public function updateProfileImage(ProfileImageUpdateRequest $request){
        $user = Auth::user();
        $request = $request->all();
        if(!empty($request['profile_image'])) {

            $file = $request['profile_image'];
            $path = storage_path('app/public/assets/images/profile-images/');

            if(!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            if($user->profile_image !== "default.png") {
                $oldImage = $path.'/'.$user->profile_image;
                if(file_exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $newImage = time(). '.' . $file->getclientoriginalextension();
            Image::make($file)->save($path.'/'.$newImage);

            $request['profile_image'] = $newImage;
            $user->update($request);
           return response()->json(['file_src'=>asset('storage/assets/images/profile-images/'.$request['profile_image'])],200);
        }
    }

    public function updateCoverImage(CoverImageUpdateRequest $request){
        $user = Auth::user();
        if(!empty($request['cover_image'])) {

            $file = $request['cover_image'];
            $path = storage_path('app/public/assets/images/cover-images/');

            if(!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            if($user->cover_image !== "default.png") {
                $oldImage = $path.'/'.$user->cover_image;
                if(file_exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $newImage = time().  '.' . $file->getclientoriginalextension();
            Image::make($file)->save($path.'/'.$newImage);

            $request['cover_image'] = $newImage;
        }
    }

    public function favourite(){
        $curators = User::where('role_id', User::CURATOR_ID)
            ->isActive()
            ->isVerified()
            ->get();

        $influencers = User::where('role_id', User::INFLUENCER_ID)
            ->isActive()
            ->isVerified()
            ->get();

        return view('front.pages.favourite', compact('curators', 'influencers'));
    }

    public function myWallet(){
        return view('front.pages.my-wallet');
    }

    public function myCampaignResponses(){
        return view('front.pages.my-campaign-response');
    }
    public function saveGenre(){
        $request = request()->all();
        $user = \auth()->user();
         if (isset($request['sub_genre_id'])){
             foreach ($request['sub_genre_id'] as $key => $item){
                  foreach ($item as $value){
                      UserFavoriteGenre::updateOrCreate([
                          'user_id'=>$user->id,
                          'genre_id'=>$request['genre_id'][$key],
                          'sub_genre_id'=>$value,
                      ],[
                          'user_id'=>$user->id,
                          'genre_id'=>$request['genre_id'][$key],
                          'sub_genre_id'=>$value,
                      ]);
                  }
             }
             return redirect()->route('account.setting')->with('success_msg', 'Account setting update successfully.');
         }
        return redirect()->route('account.setting')->with('error_msg', 'Something went wrong.');
    }
}
