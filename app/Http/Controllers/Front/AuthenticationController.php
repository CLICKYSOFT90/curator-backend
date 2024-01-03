<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\CuratorSignUpRequest;
use App\Http\Requests\Front\InfluencerSignUpRequest;
use App\Http\Requests\Front\UserLoginRequest;
use App\Http\Requests\Front\ArtistSignUpRequest;
use App\Http\Requests\Front\ArtistVerificationRequest;
use App\Models\CampaignSubmittedUser;
use App\Models\Chat;
use App\Models\Country;
use App\Models\SongSubmission;
use App\Models\User;
use App\Models\UserFile;
use App\Notifications\UserVerificationNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Role;

class AuthenticationController extends Controller
{
    public function signUp(){
        return view('front.authentication.sign-up');
    }

    public function signUpData(ArtistSignUpRequest $request){

        $role = Role::where('name', $request->user_type)->first();

        if (empty($role)){
            abort(404);
        }

        $verificationCode = str_pad(rand(0, pow(10, 5)-1), 5, '0', STR_PAD_LEFT);

        $user = User::Create([
            'role_id' => $role->id,
            'display_name' => $request->display_name,
            'email' => $request->email,
            'password' => $request->password,
            'verification_code' => $verificationCode,
            'coins' => '0.00',
        ]);

        $user->notify((new UserVerificationNotification())->delay(now()->addSeconds(5)));

        Auth::loginUsingId($user->id);

        return redirect()->route('user-verification');
    }

    public function userVerification(){
        return view('front.authentication.verification');
    }

    public function userVerificationData(ArtistVerificationRequest $request){
        $user = Auth::user();

        if((int)$user->verification_code === (int)$request->verification_code){
            User::where('id', $user->id)
                ->update([
                    'verification_code' => null,
                    'is_active' => 1,
                    'is_verified' => 1,
                ]);

            return redirect()->route('user.welcome');
        }

        return redirect()->back()->with('error_msg', 'Verification code not matched.');
    }

    public function becomeACurator(){
        if(!empty(request('user_type')) && in_array(request('user_type'), ['curator', 'influencer'])){
            $countries = Country::get();
            if(request('user_type') === "curator"){

                return view('front.authentication.curator', compact('countries'));
            }else{
                return view('front.authentication.influencer',compact('countries'));
            }
        }
        return view('front.authentication.become-a-curator');
    }

    public function saveCurator(CuratorSignUpRequest $request){

        $request = $request->all();

        $request['referred'] = (isset($request['referred'])) ? 1 : 0;
        $request['role_id'] = User::CURATOR_ID;
        $curator = User::create($request);

        if (!empty($curator)) {
            if (request()->hasFile('screen_shot')) {
                $this->galleryPhotosSave($curator->id);
            }

            return response()->json([
                'status'  => 'success',
                'msg' => 'Your account successfully created, Will notify after review!'
            ], 200);

        }

        return response()->json([
            'status'  => 'warning',
            'msg' => 'Form has not been saved'
        ], 400);

    }

    public function saveInfluencer(InfluencerSignUpRequest $request){

        $request = $request->all();

        $request['referred'] = (isset($request['referred'])) ? 1 : 0;
        $request['role_id'] = User::INFLUENCER_ID;
        $curator = User::create($request);
        if (!empty($curator)) {

            if (request()->hasFile('screen_shot')) {
                $this->galleryPhotosSave($curator->id);
            }

            return response()->json([
                'status'  => 'success',
                'msg' => 'Your account successfully created, Will notify after review!'
            ], 200);

        }

        return response()->json([
            'status'  => 'warning',
            'msg' => 'Form has not been saved'
        ], 400);

    }

    public function login(){
        return view('front.authentication.login');
    }

    public function loginData(UserLoginRequest $request){
        $user = User::where('email', $request->email)->first();

        if (Auth::validate(['email' => $request->email, 'password' => $request->password])){

            if (empty($user->is_verified)){
                $msg = "Please verify your account first.";
                if(in_array($user->role_id, [User::CURATOR_ID, User::INFLUENCER_ID])){
                    $msg= "Your account is currently under review. We'll notify you shortly with further information.";
                }
                return redirect()->back()->withInput()->with('error_msg', $msg);
            }

            if (empty($user->is_active)) {
                return redirect()->back()->withInput()->with('error_msg', 'Your account is currently inactive, Please contact your admin.');
            }

            $rememberMe = !empty($request->remember_me);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $rememberMe)) {

                if(in_array($user->role_id, [User::CURATOR_ID, User::INFLUENCER_ID])){
                    return redirect()->route('dashboard');
                }elseif(!empty(SongSubmission::where('user_id', $user->id)->first())){
                    return redirect()->route('my.campaigns');
                }

                return redirect()->route('user.welcome');
            }
        }

        return redirect()->back()->withInput()->with('error_msg', 'Invalid credentials.');
    }

    public function welcomeArtist(){
        return view('front.pages.welcome');
    }

    public function myCampaign(){
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

        return view('front.pages.my-campaign', compact('chats','myCampaigns','user'));
    }

    public function curatorDashboard(){

        $receivers = Chat::where('sender_id','=',auth()->id())->distinct()->orderBy('id', 'desc')->pluck('id')->toArray();
        $senders = Chat::where('receiver_id','=',auth()->id())->distinct()->orderBy('id', 'desc')->pluck('id')->toArray();
        $ids = array_unique(array_merge($receivers, $senders));
        $chats = Chat::whereIn('id', $ids)
            ->with([
                'getReceiverCustomer',
                'getSenderCustomer',
            ])->take(5)
            ->get();

        $currentUser = auth()->user();
        $newSongs = CampaignSubmittedUser::isCurator()
            ->with([
                'getCuratorCampaignDetail'
            ])->where([
                'user_id' => $currentUser->id,
                'status'  => CampaignSubmittedUser::PENDING
            ])->whereHas('getCuratorCampaignDetail')->get();

        return view('front.pages.dashboard', compact('chats','newSongs','currentUser'));
    }

    public function forgotPassword(){
        return view('front.authentication.forgot-password');
    }

    public function forgotPasswordData(UserForgotPasswordRequest $request){
        return $this->homepageRepository->submitForgotPasswordReq($request);
    }

    public function resetPassword($token){
        $user = $this->homepageRepository->checkResetToken($token);
        if(!empty($user)){
            return view('front.authentication.reset-password', compact('user'));
        }
        abort(404);
    }

    public function resetPasswordData($token, UserResetPasswordRequest $request){
        return $this->homepageRepository->resetPasswordReq($token, $request);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function galleryPhotosSave($userId)
    {
        $image_tmp = request()->file('screen_shot');
        foreach ($image_tmp as $key => $image) {
            if ($image->isValid()) {
                $extension = $image->getClientOriginalExtension();
                $imageName = rand(111, 99999).time(). '.' . $extension;

                $main_image = public_path('assets/front/images/screen-shots/' . $imageName);

                Image::make($image)->save($main_image);

                UserFile::create([
                    'user_id' => $userId,
                    'image'   => $imageName
                ]);
            }
        }
        return true;
    }

    public function saveAvailability()
    {
        $request = request()->all();
        $rules = ['availability' => 'required'];
        if (isset($request['availability']) && $request['availability']==1) {
            $rules['from_month']   = 'required';
            $rules['from_day']     = 'required';
            $rules['from_year']    = 'required';
            $rules['to_month']     = 'required';
            $rules['to_day']       = 'required';
            $rules['to_year']      = 'required';
        }
        $validator = Validator::make($request, $rules);

        if ($validator->fails()) {
            return response()->json([
                'errors'=>$validator->errors(),
                'status'=>'error'
            ],422);
        }

        if (isset($request['availability']) && $request['availability']==1) {
            $request['from_date'] = $request['from_year'] . '-' . $request['from_month'] . '-' . $request['from_day'];
            $request['to_date'] = $request['to_year'] . '-' . $request['to_month'] . '-' . $request['to_day'];
        }
        $res = auth()->user()->update($request);
        if (!empty($res)) {
            return response()->json([
                'status'  => 'success',
                'msg' => 'Availability has been set successfully.'
            ], 200);
        }
        return response()->json([
            'status'  => 'warning',
            'msg' => 'Availability has not been set.'
        ], 200);
    }

    public function removeAvailability()
    {
        $res = auth()->user()->update([
            'availability' => NULL,
            'from_date'    => NULL,
            'to_date'      => NULL
        ]);
        if (!empty($res)) {
            return response()->json([
                'status'  => 'success',
                'msg' => 'Availability has been removed successfully.'
            ], 200);
        }
        return response()->json([
            'status'  => 'warning',
            'msg' => 'Availability has not been removed.'
        ], 200);
    }
}