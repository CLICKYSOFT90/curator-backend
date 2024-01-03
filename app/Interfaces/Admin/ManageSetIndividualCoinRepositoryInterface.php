<?php

namespace App\Interfaces\Admin;

interface ManageSetIndividualCoinRepositoryInterface
{
    public function getAllIndividualCoin();

    public function getIndividualCoinById($coinId);

    public function deleteIndividualCoin($coinId);

    public function createIndividualCoin($setCoinIndividualDetails);

    public function updateIndividualCoin($coinId, $updatedsetCoinIndividualDetails);

    public function getDataTable();

    public function changeStatus($coinId);
}
