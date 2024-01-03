<?php

use App\Http\Controllers\Front\AccountSettingController;
use App\Http\Controllers\Front\AuthenticationController;
use App\Http\Controllers\Front\CampaignController;
use App\Http\Controllers\Front\ChatController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\PayPalPaymentController;
use App\Http\Controllers\Front\SongSubmissionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/abc', function (){
    $data = \App\Models\Campaign::isCurator()
        ->with([
            'getCuratorCampaignDetail'
        ])->get();


    dd($data, '123');
});

Route::group(['middleware' => 'guest'], function () {
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('/sign-up', 'signUp')->name('sign-up');
        Route::post('/sign-up', 'signUpData')->name('sign-up.data');
        Route::get('/become-a-curator', 'becomeACurator')->name('become-a-curator');
        Route::post('/save-curator', 'saveCurator')->name('save.curator');
        Route::post('/save-influencer', 'saveInfluencer')->name('save.influencer');

        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginData')->name('login');

        Route::get('/forgot-password', 'forgotPassword')->name('forgot.password');
        Route::post('/forgot-password', 'forgotPasswordData')->name('forgot.password.data');
        Route::get('/reset-password/{token}', 'resetPassword')->name('reset.password');
        Route::post('/reset-password/{token}', 'resetPasswordData')->name('reset.password.data');
    });
});

Route::controller(HomepageController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/list-of-curators', 'listOfCurators')->name('list.of.curators');
    Route::get('choose-curators', 'chooseCurators')->name('choose.curators');
    Route::get('choose-influencer', 'chooseInfluencer')->name('choose.influencer');
    Route::get('choose-curator-search', 'chooseCuratorSearch')->name('choose.curators.search');
    Route::get('/search-curators', 'searchCurators')->name('search.curators');
    Route::get('/list-of-artists', 'listOfArtists')->name('list.of.artists');

    Route::get('/how-it-works-curator', 'howItWorkCurator')->name('how-it-works-curator');
    Route::get('/how-it-works-artist', 'howItWorkArtist')->name('how-it-works-artist');
    Route::get('/how-it-works-influencer', 'howItWorkInfluencer')->name('how-it-works-influencer');

    Route::get('/about-us', 'aboutUs')->name('about.us');
    Route::get('/help', 'help')->name('help');
    Route::get('/search-faq', 'searchFaq')->name('search.faq');
    Route::get('/terms-conditions', 'termCondition')->name('terms.conditions');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy.policy');
    Route::get('/profile', 'profile')->name('profile');
});

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'is_not_verified'], function () {

        Route::controller(AuthenticationController::class)->group(function () {
            Route::get('/user-verification', 'userVerification')->name('user-verification');
            Route::post('/user-verification', 'userVerificationData')->name('user-verification.data');
        });

    });
    Route::post('profile-image-upload',[AccountSettingController::class,'updateProfileImage'])->name('profile.image.upload');

    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('user.logout');

    Route::group(['middleware' => 'is_verified'], function () {

        Route::controller(AccountSettingController::class)->group(function () {
            Route::get('account-setting', 'accountSetting')->name('account.setting');
            Route::post('account-setting', 'saveAccountSetting')->name('account.setting.data');
            Route::post('account-setting-password', 'updateAccountPassword')->name('account.setting.password.data');
            Route::post('save-genre', 'saveGenre')->name('save.genre');
        });

        Route::controller(AuthenticationController::class)->group(function () {
            Route::get('/welcome', 'welcomeArtist')->name('user.welcome');
            Route::get('/my-campaigns', 'myCampaign')->name('my.campaigns');
            Route::get('/dashboard', 'curatorDashboard')->name('dashboard');
            Route::post('/save-availability', 'saveAvailability')->name('save.availability');
            Route::get('/remove-availability', 'removeAvailability')->name('remove.availability');
        });

        Route::group(['middleware' => 'is_completed'], function () {

            Route::controller(CampaignController::class)->group(function () {
                Route::get('/select-submission', 'selectSubmission')->name('user.select.submission');

                Route::get('/upload-song-curator', 'uploadSongCurator')->name('user.upload.song.curator');

                Route::post('/upload-song-curator', 'uploadSongCuratorData')->name('user.upload.song.curator.data');

                Route::get('/upload-song-influencer', 'uploadSongInfluencer')->name('user.upload.song.influencer');

                Route::get('/ground-floor-ticket-pricing', 'groundFloorTicketPricing')->name('user.ground.floor.ticket.pricing');

                Route::get('/upload-song-play-listing-floor', 'uploadSongPlayListingFloor')->name('user.upload.song.play.listing.floor');

                Route::post('/upload-song-play-listing-floor', 'uploadSongPlayListingFloor')->name('user.upload.song.play.listing.floor.data');

                Route::get('/track-overview-play-listing-floor', 'trackOverviewPlayListingFloor')->name('user.track.overview.play.listing.floor');

                Route::get('/automated-submission-curator/{campaignId}', 'automatedSubmissionCurator')->name('user.automated.submission.curator');

                Route::get('/automated-submission-influencer', 'automatedSubmissionInfluencer')->name('user.automated.submission.influencer');

                Route::get('/successfully-submitted/{campaignId}', 'successfullySubmitted')->name('user.successfully.submitted');

                Route::get('/my-campaign-responses/{id}', 'myCampaignResponses')->name('my.campaign.responses');
                Route::get('/my-campaign-artist-responses', 'myCampaignArtistResponses')->name('my.campaign.artist.responses');
            });

            Route::controller(SongSubmissionController::class)->group(function () {
                Route::post('/save-curator-song-submission', 'saveCuratorSongSubmission')->name('save.curator.song.submission');
                Route::post('/save-influencer-song-submission', 'saveInfluencerSongSubmission')->name('save.influencer.song.submission');
                Route::post('/save-upload-song-play-listing-floor/{addMore?}', 'saveUploadSongPlayListingFloor')->name('save.upload.song.play.listing.floor');
                Route::get('/get-song-detail/{songId?}', 'getSongDetail')->name('get.song.detail');
                Route::get('/song-listening-activity/{songId?}', 'songListeningActivity')->name('song.listening.activity');
                Route::post('/save-song-activity-up', 'saveSongActivityUp')->name('save.song.activity.up');
                Route::post('/save-song-activity-down', 'saveSongActivityDown')->name('save.song.activity.down');
            });

            Route::controller(ChatController::class)->group(function () {
                Route::get('/view-chat', 'viewChat')->name('view.chat');
                Route::get('/get-messages/{receiverId}', 'getMessage')->name('get.messages');
                Route::post('/send-message', 'sendMessage')->name('send.message');
                Route::get('/get-notifications', 'getNotifications')->name('get.notifications');
            });

            Route::controller(PayPalPaymentController::class)->group(function () {
                Route::get('checkout', 'createTransaction')->name('checkout');
                Route::post('stripe-payment', 'storeStripePayment')->name('storeStripePayment');
                Route::get('process-transaction', 'processTransaction')->name('processTransaction');
                Route::get('success-transaction',  'successTransaction')->name('successTransaction');
                Route::get('cancel-transaction', 'cancelTransaction')->name('cancelTransaction');
            });

            Route::controller(AccountSettingController::class)->group(function () {

                Route::get('/favourite', 'favourite')->name('favourite');
                Route::get('/my-wallet', 'myWallet')->name('my.wallet');

            });
        });

    });
});