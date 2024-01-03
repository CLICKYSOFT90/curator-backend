<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ManageTermAndConditionRepositoryInterface;
use App\Models\TermAndCondition;

class ManageTermAndConditionRepository implements ManageTermAndConditionRepositoryInterface
{
    public function getData() {
        return TermAndCondition::first();
    }

    public function updateData($req){

        $data = $this->getData();

        $data->update([
            'content' => $req->content
        ]);

        return redirect()->route('manage.term.and.condition')->with('success_msg', 'Term & condition updated successfully.');
    }
}
