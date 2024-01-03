<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\LabelStoreRequest;
use App\Http\Requests\Admin\Store\ArtistStoreRequest;
use App\Http\Requests\Admin\Update\LabelUpdateRequest;
use App\Http\Requests\Admin\Store\CuratorStoreRequest;
use App\Http\Requests\Admin\Update\ArtistUpdateRequest;
use App\Interfaces\Admin\ManageUserRepositoryInterface;
use App\Http\Requests\Admin\Update\CuratorUpdateRequest;
use App\Http\Requests\Admin\Store\InfluencerStoreRequest;
use App\Http\Requests\Admin\Update\InfluencerUpdateRequest;

class ManageUserController extends Controller
{
    const ADMIN_MANAGE_USERS    = 'admin.manage-users.';
    const ARTIST_PATH           = self::ADMIN_MANAGE_USERS . 'artist.';
    const LABEL_PATH            = self::ADMIN_MANAGE_USERS . 'label.';
    const CURATOR_PATH          = self::ADMIN_MANAGE_USERS . 'curator.';
    const INFLUENCER_PATH       = self::ADMIN_MANAGE_USERS . 'influencer.';
    
    private ManageUserRepositoryInterface $manageUserRepository;
    
    public function __construct(ManageUserRepositoryInterface $manageUserRepository)
    {
        $this->manageUserRepository = $manageUserRepository;
    }
    
    // Starting Artist
    public function manageArtist() {
        if (request()->ajax()) {
            $roleArtist = $this->manageUserRepository->getRoleDetail(['name' => User::ARTIST]);
            return $this->manageUserRepository->getDataTable($roleArtist->id);
        }
        
        return view(self::ARTIST_PATH . 'index');
    }
    
    public function addArtist() {
        $countries = $this->manageUserRepository->countries();
        return view(self::ARTIST_PATH . 'add', compact('countries'));
    }
    
    public function addArtistData(ArtistStoreRequest $request) {
        return $this->manageUserRepository->createUser($request);
    }
    
    public function updateArtist($artistId) {
        
        $artist = $this->manageUserRepository->getUserById($artistId);
        
        if (!empty($artist)) {
            $countries = $this->manageUserRepository->countries();
            return view(self::ARTIST_PATH . 'update', compact('artist', 'countries'));
        }
        
        abort(404);
    }
    
    public function updateArtistData($artistId, ArtistUpdateRequest $request) {
        return $this->manageUserRepository->updateUser($artistId, $request);
    }
    
    public function getArtistDetail($artistId) {
        $artist = $this->manageUserRepository->getUserById($artistId);
        $countries = $this->manageUserRepository->countries();
        return view(self::ARTIST_PATH . 'detail', compact('artist', 'countries'));
    }
    
    public function changeArtistStatus($artistId) {
        return $this->manageUserRepository->changeStatus($artistId, User::ARTIST);
    }
    
    public function deleteArtist($artistId) {
        return $this->manageUserRepository->deleteUser($artistId, User::ARTIST);
    }
    // Ending Artist
    
    // Starting Label
    public function manageLabel() {
        if (request()->ajax()) {
            $roleLabel = $this->manageUserRepository->getRoleDetail(['name' => User::LABEL]);
            return $this->manageUserRepository->getDataTable($roleLabel->id);
        }
        
        return view(self::LABEL_PATH . 'index');
    }
    
    public function addLabel() {
        $countries = $this->manageUserRepository->countries();
        return view(self::LABEL_PATH . 'add', compact('countries'));
    }
    
    public function addLabelData(LabelStoreRequest $request) {
        return $this->manageUserRepository->createUser($request);
    }
    
    public function updateLabel($labelId) {
        
        $label = $this->manageUserRepository->getUserById($labelId);
        
        if (!empty($label)) {
            $labelArtists = $this->manageUserRepository->getLabelArtist($label->id);
            $countries = $this->manageUserRepository->countries();
            return view(self::LABEL_PATH . 'update', compact('label', 'labelArtists', 'countries'));
        }
        
        abort(404);
    }
    
    public function updateLabelData($labelId, LabelUpdateRequest $request) {
        return $this->manageUserRepository->updateUser($labelId, $request);
    }
    
    public function getLabelDetail($labelId) {
        $labelArtists = $this->manageUserRepository->getLabelArtist($labelId);
        $label = $this->manageUserRepository->getUserById($labelId);
        $countries = $this->manageUserRepository->countries();
        return view(self::LABEL_PATH . 'detail', compact('label', 'countries', 'labelArtists'));
    }
    
    public function changeLabelStatus($labelId) {
        return $this->manageUserRepository->changeStatus($labelId, User::LABEL);
    }
    
    public function deleteLabel($labelId) {
        return $this->manageUserRepository->deleteUser($labelId, User::LABEL);
    }
    // Ending Artist
    
    // Starting Curator
    public function manageCurator() {
        if (request()->ajax()) {
            $roleCurator = $this->manageUserRepository->getRoleDetail(['name' => User::CURATOR]);
            return $this->manageUserRepository->getDataTable(User::CURATOR_ID);
        }
        
        return view(self::CURATOR_PATH . 'index');
    }
    
    public function addCurator() {
        $countries = $this->manageUserRepository->countries();
        return view(self::CURATOR_PATH . 'add', compact('countries'));
    }
    
    public function addCuratorData(CuratorStoreRequest $request) {
        return $this->manageUserRepository->createUser($request);
    }
    
    public function updateCurator($curatorId) {
        
        $curator = $this->manageUserRepository->getUserById($curatorId);
        
        if (!empty($curator)) {
            $countries = $this->manageUserRepository->countries();
            return view(self::CURATOR_PATH . 'update', compact('curator', 'countries'));
        }
        
        abort(404);
    }
    
    public function updateCuratorData($curatorId, CuratorUpdateRequest $request) {
        return $this->manageUserRepository->updateUser($curatorId, $request);
    }
    
    public function getCuratorDetail($curatorId) {
        $curator = $this->manageUserRepository->getUserById($curatorId);
        $countries = $this->manageUserRepository->countries();
        return view(self::CURATOR_PATH . 'detail', compact('curator', 'countries'));
    }
    
    public function changeCuratorStatus($curatorId) {
        return $this->manageUserRepository->changeStatus($curatorId, User::CURATOR);
    }
    
    public function deleteCurator($curatorId) {
        return $this->manageUserRepository->deleteUser($curatorId, User::CURATOR);
    }
    // Ending Curator

    // Starting Influencer
    public function manageInfluencer() {
        if (request()->ajax()) {
            $roleInfluencer = $this->manageUserRepository->getRoleDetail(['name' => User::INFLUENCER]);
            return $this->manageUserRepository->getDataTable(User::INFLUENCER_ID);
        }
        
        return view(self::INFLUENCER_PATH . 'index');
    }
    
    public function addInfluencer() {
        $countries = $this->manageUserRepository->countries();
        return view(self::INFLUENCER_PATH . 'add', compact('countries'));
    }
    
    public function addInfluencerData(InfluencerStoreRequest $request) {
        return $this->manageUserRepository->createUser($request);
    }
    
    public function updateInfluencer($influencerId) {
        
        $influencer = $this->manageUserRepository->getUserById($influencerId);
        
        if (!empty($influencer)) {
            $countries = $this->manageUserRepository->countries();
            return view(self::INFLUENCER_PATH . 'update', compact('influencer', 'countries'));
        }
        
        abort(404);
    }
    
    public function updateInfluencerData($influencerId, InfluencerUpdateRequest $request) {
        return $this->manageUserRepository->updateUser($influencerId, $request);
    }
    
    public function getInfluencerDetail($influencerId) {
        $influencer = $this->manageUserRepository->getUserById($influencerId);
        $countries = $this->manageUserRepository->countries();
        return view(self::INFLUENCER_PATH . 'detail', compact('influencer', 'countries'));
    }
    
    public function changeInfluencerStatus($influencerId) {
        return $this->manageUserRepository->changeStatus($influencerId, User::INFLUENCER);
    }
    
    public function deleteInfluencer($influencerId) {
        return $this->manageUserRepository->deleteUser($influencerId, User::INFLUENCER);
    }
    // Ending Influencer
}
