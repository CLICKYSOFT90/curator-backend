<?php

namespace App\Interfaces\Admin;

interface ManagePrivacyPolicyRepositoryInterface
{
    public function getData();

    public function updateData($req);
}
