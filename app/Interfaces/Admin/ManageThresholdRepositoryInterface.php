<?php

namespace App\Interfaces\Admin;

interface ManageThresholdRepositoryInterface
{
    public function getAllThreshold();

    public function getThresholdById($thresholdId);

    public function deleteThreshold($thresholdId);

    public function createThreshold($thresholdDetails);
    
    public function updateThreshold($thresholdId, $updatedsetThresholdDetails);

    public function getDataTable();

    public function changeStatus($thresholdId);
}
