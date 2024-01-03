<?php

namespace App\Interfaces\Admin;

interface ManageUserRepositoryInterface
{
    public function getAllUser();

    public function getUserById($userId);

    public function deleteUser($userId, $roleName);

    public function createUser($userDetails);

    public function updateUser($userId, $updatedDetails);

    public function getDataTable($roleId);

    public function changeStatus($userId, $roleName);

    public function getRoleDetail(array $where);

    public function countries();
}
