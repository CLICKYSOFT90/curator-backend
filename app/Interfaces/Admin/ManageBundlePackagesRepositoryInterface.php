<?php

namespace App\Interfaces\Admin;

interface ManageBundlePackagesRepositoryInterface
{
    public function getAllPackages();

    public function getBundlePackageById($packageId);

    public function deleteBundlePackage($packageId);

    public function createBundlePackage($bundlePackageDetails);

    public function updateBundlePackage($packageId, $updatedBundlePackageDetails);

    public function getDataTable();

    public function changeStatus($packageId);
}
