<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\BundlePackageStoreRequest;
use App\Http\Requests\Admin\Update\BundlePackageUpdateRequest;
use App\Interfaces\Admin\ManageBundlePackagesRepositoryInterface;

class BundlePackageController extends Controller
{
    const BUNDLE_PACKAGES_PATH = 'admin.bundle-packages.';

    private ManageBundlePackagesRepositoryInterface $manageBundlePackagesRepository;

    public function __construct(ManageBundlePackagesRepositoryInterface $manageBundlePackagesRepository)
    {
        $this->manageBundlePackagesRepository = $manageBundlePackagesRepository;
    }

    public function manageBundlePackages() {
        if (request()->ajax()) {
            return $this->manageBundlePackagesRepository->getDataTable();
        }

        return view(self::BUNDLE_PACKAGES_PATH . 'index');
    }

    public function addBundlePackages() {
        return view(self::BUNDLE_PACKAGES_PATH . 'add');
    }

    public function addBundlePackagesData(BundlePackageStoreRequest $request) {
        return $this->manageBundlePackagesRepository->createBundlePackage($request);
    }
    
    public function updateBundlePackages($packageId) {
        
        $bundlePackage = $this->manageBundlePackagesRepository->getBundlePackageById($packageId);
        
        if (!empty($bundlePackage)) {
            return view(self::BUNDLE_PACKAGES_PATH . 'update', compact('bundlePackage'));
        }
        
        abort(404);
    }

    public function updateBundlePackageData($packageId, BundlePackageUpdateRequest $request) {
        return $this->manageBundlePackagesRepository->updateBundlePackage($packageId, $request);
    }

    public function getBundlePackageDetail($packageId) {
        $bundlePackage = $this->manageBundlePackagesRepository->getBundlePackageById($packageId);
        return view(self::BUNDLE_PACKAGES_PATH . 'detail', compact('bundlePackage'));
    }

    public function changeBundlePackageStatus($packageId) {
        return $this->manageBundlePackagesRepository->changeStatus($packageId);
    }
    
    public function deleteBundlePackage($packageId) {
        return $this->manageBundlePackagesRepository->deleteBundlePackage($packageId);
    }
}
