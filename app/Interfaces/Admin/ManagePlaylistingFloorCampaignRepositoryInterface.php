<?php

namespace App\Interfaces\Admin;

interface ManagePlaylistingFloorCampaignRepositoryInterface
{
    public function getPlaylistingFloorCampaign();

    public function getPlaylistingFloorCampaignId($playListingFloorCampaignId);

    public function deletePlaylistingFloorCampaign($playListingFloorCampaignId);

    public function createPlaylistingFloorCampaign($playListingFloorCampaignIdDetails);

    public function updatePlaylistingFloorCampaign($playListingFloorCampaignId, $updatedDetails);

    public function getDataTable();

    public function changeStatus($playListingFloorCampaignId);
}
