<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ManageAboutUsRepositoryInterface;
use App\Models\AboutUs;

class ManageAboutUsRepository implements ManageAboutUsRepositoryInterface
{
    public function getData() {
        return AboutUs::first();
    }

    public function updateData($req){

        $data = $this->getData();

        $data->update([
            'content' => $req->content
        ]);

        return redirect()->route('manage.about.us')->with('success_msg', 'About us updated successfully.');
    }
}
