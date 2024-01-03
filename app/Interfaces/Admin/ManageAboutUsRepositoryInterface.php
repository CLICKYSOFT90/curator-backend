<?php

namespace App\Interfaces\Admin;

interface ManageAboutUsRepositoryInterface
{
    public function getData();

    public function updateData($req);
}
