<?php

namespace App\Interfaces\Admin;

interface ManageTermAndConditionRepositoryInterface
{
    public function getData();

    public function updateData($req);
}
