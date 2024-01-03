<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\PlayListingFloorCampaignStoreRequest;
use App\Http\Requests\Admin\Update\PlayListingFloorCampaignUpdateRequest;
use App\Interfaces\Admin\ManagePlaylistingFloorCampaignRepositoryInterface;

class PlayListingFloorCampaignController extends Controller
{
    const PLAYLISTING_FLOOR_CAMPAIGN_PATH = 'admin.play-listing-floor-campaign.';

    private ManagePlaylistingFloorCampaignRepositoryInterface $managePlaylistingFloorCampaignRepository;

    public function __construct(ManagePlaylistingFloorCampaignRepositoryInterface $managePlaylistingFloorCampaignRepository)
    {
        $this->managePlaylistingFloorCampaignRepository = $managePlaylistingFloorCampaignRepository;
    }

    public function manageGroudFloorTicketPrices() {
        if (request()->ajax()) {
            return $this->managePlaylistingFloorCampaignRepository->getDataTable();
        }

        return view(self::PLAYLISTING_FLOOR_CAMPAIGN_PATH . 'index');
    }

    public function addGroudFloorTicketPrices() {
        return view(self::PLAYLISTING_FLOOR_CAMPAIGN_PATH . 'add');
    }

    public function addGroudFloorTicketPricesData(PlayListingFloorCampaignStoreRequest $request) {
        return $this->managePlaylistingFloorCampaignRepository->createPlaylistingFloorCampaign($request);
    }
    
    public function updateGroudFloorTicketPrices($playListingFloorCampaignId) {
        
        $playListingFloorCampaign = $this->managePlaylistingFloorCampaignRepository->getPlaylistingFloorCampaignId($playListingFloorCampaignId);
        
        if (!empty($playListingFloorCampaign)) {
            return view(self::PLAYLISTING_FLOOR_CAMPAIGN_PATH . 'update', compact('playListingFloorCampaign'));
        }
        
        abort(404);
    }

    public function updateGroudFloorTicketPricesData($playListingFloorCampaignId, PlayListingFloorCampaignUpdateRequest $request) {
        return $this->managePlaylistingFloorCampaignRepository->updatePlaylistingFloorCampaign($playListingFloorCampaignId, $request);
    }

    public function getGroudFloorTicketPricesDetail($playListingFloorCampaignId) {
        $playListingFloorCampaign = $this->managePlaylistingFloorCampaignRepository->getPlaylistingFloorCampaignId($playListingFloorCampaignId);
        return view(self::PLAYLISTING_FLOOR_CAMPAIGN_PATH . 'detail', compact('playListingFloorCampaign'));
    }

    public function changeGroudFloorTicketPricesStatus($playListingFloorCampaignId) {
        return $this->managePlaylistingFloorCampaignRepository->changeStatus($playListingFloorCampaignId);
    }
    
    public function deleteGroudFloorTicketPrices($playListingFloorCampaignId) {
        return $this->managePlaylistingFloorCampaignRepository->deletePlaylistingFloorCampaign($playListingFloorCampaignId);
    }
}
