<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\AdminStoreRequest;
use App\Http\Requests\Admin\Update\AdminUpdateRequest;
use App\Interfaces\Admin\ManageAdminRepositoryInterface;

class ManageAdminController extends Controller
{
    private ManageAdminRepositoryInterface $manageAdminRepository;
    
    public function __construct(ManageAdminRepositoryInterface $manageAdminRepository) {
        $this->manageAdminRepository = $manageAdminRepository;
    }
    
    public function adminUser() {
        if (request()->ajax()) {
            return $this->manageAdminRepository->getDataTable();
        }
        
        return view('admin.manage-admin.index');
    }
    
    public function addAdmin() {
        return view('admin.manage-admin.add');
    }
    
    public function addAdminData(AdminStoreRequest $request) {
        return $this->manageAdminRepository->createAdmin($request);
    }
    
    public function updateAdmin($adminId) {
        
        $admin = $this->manageAdminRepository->getAdminById($adminId);
        
        if (!empty($admin)) {
            return view('admin.manage-admin.update', compact('admin'));
        }
        
        abort(404);
    }
    
    public function updateAdminData($adminId, AdminUpdateRequest $request) {
        return $this->manageAdminRepository->updateAdmin($adminId, $request);
    }
    
    public function getAdminDetail($adminId) {
        $admin = $this->manageAdminRepository->getAdminById($adminId);
        return view('admin.manage-admin.detail', compact('admin'));
    }
    
    public function changeAdminStatus($adminId) {
        return $this->manageAdminRepository->changeStatus($adminId);
    }
    
    public function deleteAdmin($adminId) {
        return $this->manageAdminRepository->deleteAdmin($adminId);
    }
}
