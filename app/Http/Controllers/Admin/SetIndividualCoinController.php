<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\SetIndividualCoinStoreRequest;
use App\Http\Requests\Admin\Update\SetIndividualCoinUpdateRequest;
use App\Interfaces\Admin\ManageSetIndividualCoinRepositoryInterface;

class SetIndividualCoinController extends Controller
{
    const SET_INDIVIDUAL_COIN_PATH = 'admin.set-individual-coin.';

    private ManageSetIndividualCoinRepositoryInterface $manageSetIndividualCoinRepository;

    public function __construct(ManageSetIndividualCoinRepositoryInterface $manageSetIndividualCoinRepository)
    {
        $this->manageSetIndividualCoinRepository = $manageSetIndividualCoinRepository;
    }

    public function manageSetIndividualCoin() {
        if (request()->ajax()) {
            return $this->manageSetIndividualCoinRepository->getDataTable();
        }

        return view(self::SET_INDIVIDUAL_COIN_PATH . 'index');
    }

    public function addSetIndividualCoin() {
        $getUserTypes = $this->manageSetIndividualCoinRepository->getUserType();
        return view(self::SET_INDIVIDUAL_COIN_PATH . 'add', compact('getUserTypes'));
    }

    public function addSetIndividualCoinData(SetIndividualCoinStoreRequest $request) {
        return $this->manageSetIndividualCoinRepository->createIndividualCoin($request);
    }
    
    public function updateSetIndividualCoin($coinId) {
        
        $bundlePackage = $this->manageSetIndividualCoinRepository->getIndividualCoinById($coinId);
        
        if (!empty($bundlePackage)) {
            $getUserTypes = $this->manageSetIndividualCoinRepository->getUserType();
            return view(self::SET_INDIVIDUAL_COIN_PATH . 'update', compact('bundlePackage', 'getUserTypes'));
        }
        
        abort(404);
    }

    public function updateSetIndividualCoinData($coinId, SetIndividualCoinUpdateRequest $request) {
        return $this->manageSetIndividualCoinRepository->updateIndividualCoin($coinId, $request);
    }

    public function getSetIndividualCoinDetail($coinId) {
        $bundlePackage = $this->manageSetIndividualCoinRepository->getIndividualCoinById($coinId);
        $getUserTypes = $this->manageSetIndividualCoinRepository->getUserType();
        return view(self::SET_INDIVIDUAL_COIN_PATH . 'detail', compact('bundlePackage', 'getUserTypes'));
    }

    public function changeSetIndividualCoinStatus($coinId) {
        return $this->manageSetIndividualCoinRepository->changeStatus($coinId);
    }
    
    public function deleteSetIndividualCoin($coinId) {
        return $this->manageSetIndividualCoinRepository->deleteIndividualCoin($coinId);
    }
}
