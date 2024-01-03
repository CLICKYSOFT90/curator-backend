<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Update\PrivacyPolicyUpdateRequest;
use App\Interfaces\Admin\ManagePrivacyPolicyRepositoryInterface;

class ManagePrivacyPolicyController extends Controller
{
    private ManagePrivacyPolicyRepositoryInterface $managePrivacyPolicyRepositoryInterface;

    public function __construct(ManagePrivacyPolicyRepositoryInterface $managePrivacyPolicyRepositoryInterface)
    {
        $this->managePrivacyPolicyRepositoryInterface = $managePrivacyPolicyRepositoryInterface;
    }

    public function managePrivacyPolicy()
    {
        $data = $this->managePrivacyPolicyRepositoryInterface->getData();

        return view('admin.manage-privacy-policy.index', compact('data'));
    }

    public function managePrivacyPolicyData(PrivacyPolicyUpdateRequest $request)
    {
        return $this->managePrivacyPolicyRepositoryInterface->updateData($request);
    }
}
