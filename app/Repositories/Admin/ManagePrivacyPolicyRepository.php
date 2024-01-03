<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ManagePrivacyPolicyRepositoryInterface;
use App\Models\PrivacyPolicy;

class ManagePrivacyPolicyRepository implements ManagePrivacyPolicyRepositoryInterface
{
    public function getData() {
        return PrivacyPolicy::first();
    }

    public function updateData($req){

        $data = $this->getData();

        $data->update([
            'content' => $req->content
        ]);

        return redirect()->route('manage.privacy.policy')->with('success_msg', 'Privacy policy updated successfully.');
    }
}
