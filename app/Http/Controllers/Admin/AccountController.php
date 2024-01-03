<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Admin\UserAccountUpdateRequest;

class AccountController extends Controller
{
    public function index(){
        
        $user = Admin::where('id', Auth::id())->first();
        return view('admin.manage-account.index', compact('user'));
    }
    
    public function manageAccountData(UserAccountUpdateRequest $request) {
        
        $user = Admin::where('id', Auth::id())->first();
        
        $userData['username']       = $request->username;
        $userData['email']          = $request->email;
        if(!empty($request->password)) {
            $userData['password']   = $request->password;
        }
        
        if(!empty($request->has('profile_image'))) {

            $path = public_path('/assets/admin/img/profile-images/');

            $image = $request->file('profile_image');

            if(!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            if($user->profile_image !== "default.png") {
                $oldImage = $path.'/'.$user->profile_image;
                if(file_exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $newImage = time(). '.' . $image->getclientoriginalextension();
            Image::make($image)->save($path.'/'.$newImage);
            
            $userData['profile_image'] = $newImage;
        }
        
        $user->update($userData);
        
        return redirect()->back()->with('success_msg', 'Account successfully updated.');
    }
}
