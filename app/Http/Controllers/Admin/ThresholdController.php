<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\ThresholdStoreRequest;
use App\Http\Requests\Admin\Update\ThresholdUpdateRequest;
use App\Interfaces\Admin\ManageThresholdRepositoryInterface;

class ThresholdController extends Controller
{
    const THRESHOLD_PATH = 'admin.threshold.';

    private ManageThresholdRepositoryInterface $manageThresholdRepository;

    public function __construct(ManageThresholdRepositoryInterface $manageThresholdRepository)
    {
        $this->manageThresholdRepository = $manageThresholdRepository;
    }

    public function manageThreshold() {
        if (request()->ajax()) {
            return $this->manageThresholdRepository->getDataTable();
        }

        return view(self::THRESHOLD_PATH . 'index');
    }

    public function addThreshold() {
        return view(self::THRESHOLD_PATH . 'add');
    }

    public function addThresholdData(ThresholdStoreRequest $request) {
        return $this->manageThresholdRepository->createThreshold($request);
    }
    
    public function updateThreshold($thresholdId) {
        
        $threshold = $this->manageThresholdRepository->getThresholdById($thresholdId);
        
        if (!empty($threshold)) {
            return view(self::THRESHOLD_PATH . 'update', compact('threshold'));
        }
        
        abort(404);
    }

    public function updateThresholdData($thresholdId, ThresholdUpdateRequest $request) {
        return $this->manageThresholdRepository->updateThreshold($thresholdId, $request);
    }

    public function getThresholdDetail($thresholdId) {
        $threshold = $this->manageThresholdRepository->getThresholdById($thresholdId);
        return view(self::THRESHOLD_PATH . 'detail', compact('threshold'));
    }

    public function changeThresholdStatus($thresholdId) {
        return $this->manageThresholdRepository->changeStatus($thresholdId);
    }

    public function deleteThreshold($thresholdId) {
        return $this->manageThresholdRepository->deleteThreshold($thresholdId);
    }
}
