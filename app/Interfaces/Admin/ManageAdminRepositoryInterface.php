<?php

namespace App\Interfaces\Admin;

interface ManageAdminRepositoryInterface
{
    public function getAllAdmin();
    
    public function getAdminById($adminId);
    
    public function deleteAdmin($adminId);
    
    public function createAdmin($adminDetails);
    
    public function updateAdmin($adminId, $updatedDetails);

    public function getDataTable();

    public function changeStatus($adminId);

}
