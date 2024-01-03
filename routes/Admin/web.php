<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\ManageAboutUsController;
use App\Http\Controllers\Admin\ManageFaqController;
use App\Http\Controllers\Admin\ManageGlobalSettingController;
use App\Http\Controllers\Admin\ManagePrivacyPolicyController;
use App\Http\Controllers\Admin\ManageTermAndConditionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ThresholdController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\ManageAdminController;
use App\Http\Controllers\Admin\BundlePackageController;
use App\Http\Controllers\Admin\SetIndividualCoinController;
use App\Http\Controllers\Admin\PlayListingFloorCampaignController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['unAuthenticAdmin', 'throttle'], 'prefix' => 'admin'], function() {
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('/login', 'login')->name('admin.login');
        Route::post('/login', 'loginData')->name('admin.login.data');
        Route::get('/forgot-password', 'forgotPassword')->name('admin.forgot.password');
        Route::post('/forgot-password', 'forgotPasswordData')->name('admin.forgot.password.data');
        Route::get('/reset-password/{token}', 'resetPassword')->name('admin.reset.password');
        Route::post('/reset-password/{token}', 'resetPasswordData')->name('admin.reset.password.data');
    });
});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin'], function() {

    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('admin.logout');

    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::controller(ManageAdminController::class)->group(function() {
        Route::get('/users/admin', 'adminUser')->name('manage.admin');
        Route::get('/users/add-admin', 'addAdmin')->name('add.admin');
        Route::post('/users/add-admin', 'addAdminData')->name('add.admin.data');
        Route::get('/users/update-admin/{userId}', 'updateAdmin')->name('update.admin');
        Route::post('/users/update-admin/{userId}', 'updateAdminData')->name('update.admin.data');
        Route::get('/users/admin-detail/{userId}', 'getAdminDetail')->name('admin.detail');
        Route::get('/users/change-admin-status/{userId}', 'changeAdminStatus')->name('change.admin.status');
        Route::get('/users/delete-admin/{userId}', 'deleteAdmin')->name('delete.admin');
    });

    Route::controller(ManageUserController::class)->group(function() {
        Route::get('/users/artist', 'manageArtist')->name('manage.artist');
        Route::get('/users/add-artist', 'addArtist')->name('add.artist');
        Route::post('/users/add-artist', 'addArtistData')->name('add.artist.data');
        Route::get('/users/update-artist/{artistId}', 'updateArtist')->name('update.artist');
        Route::post('/users/update-artist/{artistId}', 'updateArtistData')->name('update.artist.data');
        Route::get('/users/artist-detail/{artistId}', 'getArtistDetail')->name('artist.detail');
        Route::get('/users/change-artist-status/{artistId}', 'changeArtistStatus')->name('change.artist.status');
        Route::get('/users/delete-artist/{artistId}', 'deleteArtist')->name('delete.artist');

        Route::get('/users/label', 'manageLabel')->name('manage.label');
        Route::get('/users/add-label', 'addLabel')->name('add.label');
        Route::post('/users/add-label', 'addLabelData')->name('add.label.data');
        Route::get('/users/update-label/{labelId}', 'updateLabel')->name('update.label');
        Route::post('/users/update-label/{labelId}', 'updateLabelData')->name('update.label.data');
        Route::get('/users/label-detail/{labelId}', 'getLabelDetail')->name('label.detail');
        Route::get('/users/change-label-status/{labelId}', 'changeLabelStatus')->name('change.label.status');
        Route::get('/users/delete-label/{labelId}', 'deleteLabel')->name('delete.label');

        Route::get('/users/curator', 'manageCurator')->name('manage.curator');
        Route::get('/users/add-curator', 'addCurator')->name('add.curator');
        Route::post('/users/add-curator', 'addCuratorData')->name('add.curator.data');
        Route::get('/users/update-curator/{curatorId}', 'updateCurator')->name('update.curator');
        Route::post('/users/update-curator/{curatorId}', 'updateCuratorData')->name('update.curator.data');
        Route::get('/users/curator-detail/{curatorId}', 'getCuratorDetail')->name('curator.detail');
        Route::get('/users/change-curator-status/{curatorId}', 'changeCuratorStatus')->name('change.curator.status');
        Route::get('/users/delete-curator/{curatorId}', 'deleteCurator')->name('delete.curator');

        Route::get('/users/influencer', 'manageInfluencer')->name('manage.influencer');
        Route::get('/users/add-influencer', 'addInfluencer')->name('add.influencer');
        Route::post('/users/add-influencer', 'addInfluencerData')->name('add.influencer.data');
        Route::get('/users/update-influencer/{influencerId}', 'updateInfluencer')->name('update.influencer');
        Route::post('/users/update-influencer/{influencerId}', 'updateInfluencerData')->name('update.influencer.data');
        Route::get('/users/influencer-detail/{influencerId}', 'getInfluencerDetail')->name('influencer.detail');
        Route::get('/users/change-influencer-status/{influencerId}', 'changeInfluencerStatus')->name('change.influencer.status');
        Route::get('/users/delete-influencer/{influencerId}', 'deleteInfluencer')->name('delete.influencer');
    });

    Route::controller(AccountController::class)->group(function() {
        Route::get('/manage-account', 'index')->name('admin.manage.account');
        Route::post('/manage-account-data', 'manageAccountData')->name('admin.manage.account.data');
    });

    Route::controller(ManageFaqController::class)->group(function() {
        Route::get('/manage-faq', 'manageFaq')->name('manage.faq');
        Route::get('/add-faq', 'addFaq')->name('faq.add');
        Route::post('/add-faq', 'addFaqData')->name('faq.add.data');
        Route::get('/update-faq/{faqId}', 'updateFaq')->name('faq.update');
        Route::post('/update-faq/{faqId}', 'updateFaqData')->name('faq.update.data');
        Route::get('/faq-detail/{faqId}', 'getFaqDetail')->name('faq.detail');
        Route::get('/change-faq-status/{faqId}', 'changeFaqStatus')->name('faq.change.status');
        Route::get('/change-faq-popular-status/{faqId}', 'changeFaqPopularStatus')->name('faq.change.popular.status');
        Route::get('/change-faq-global-status/{faqId}', 'changeFaqGlobalStatus')->name('faq.change.global.status');
        Route::get('/delete-faq/{faqId}', 'deleteFaq')->name('faq.delete');
    });

    Route::controller(ManageAboutUsController::class)->group(function() {
        Route::get('/manage-about-us', 'manageAboutUs')->name('manage.about.us');
        Route::post('/manage-about-us', 'manageAboutUsData')->name('manage.about.us.data');
    });

    Route::controller(ManageTermAndConditionController::class)->group(function() {
        Route::get('/manage-term-and-condition', 'manageTermAndCondition')->name('manage.term.and.condition');
        Route::post('/manage-term-and-condition', 'manageTermAndConditionData')->name('manage.term.and.condition.data');
    });

    Route::controller(ManagePrivacyPolicyController::class)->group(function() {
        Route::get('/manage-privacy-policy', 'managePrivacyPolicy')->name('manage.privacy.policy');
        Route::post('/manage-privacy-policy', 'managePrivacyPolicyData')->name('manage.privacy.policy.data');
    });

    Route::controller(ManageGlobalSettingController::class)->group(function() {
        Route::get('/manage-global-setting', 'manageGlobalSetting')->name('manage.global.setting');
        Route::post('/manage-global-setting', 'manageGlobalSettingData')->name('manage.global.setting.data');
    });
});
