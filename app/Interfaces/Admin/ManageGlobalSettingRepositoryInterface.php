<?php

namespace App\Interfaces\Admin;

interface ManageGlobalSettingRepositoryInterface
{
    public function getData();

    public function updateData($req);
}
