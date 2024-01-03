<?php

namespace App\Interfaces\Admin;

interface ManageFaqRepositoryInterface
{
    public function getAll();

    public function getDataById($id);

    public function createData($req);

    public function updateData($id, $req);

    public function deleteData($id);

    public function getDataTable();

    public function changeStatus($id);

    public function changePopularStatus($id);

    public function changeGlobalStatus($id);
}
