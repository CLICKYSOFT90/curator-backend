<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ManageGlobalSettingRepositoryInterface;
use App\Models\GlobalSetting;

class ManageGlobalSettingRepository implements ManageGlobalSettingRepositoryInterface
{
    public function getData() {
        return GlobalSetting::first();
    }

    public function updateData($req){

        $data = $this->getData();

        $data->update([
            'basic_info' => $req->basic_info,
            'contact_email' => $req->contact_email,
            'facebook_link' => $req->facebook_link,
            'twitter_link' => $req->twitter_link,
            'instagram_link' => $req->instagram_link
        ]);

        return redirect()->route('manage.global.setting')->with('success_msg', 'Global setting updated successfully.');
    }
}
