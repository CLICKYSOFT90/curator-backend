<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Update\GlobalSettingUpdateRequest;
use App\Interfaces\Admin\ManageGlobalSettingRepositoryInterface;

class ManageGlobalSettingController extends Controller
{
    private ManageGlobalSettingRepositoryInterface $manageGlobalSettingRepositoryInterface;

    public function __construct(ManageGlobalSettingRepositoryInterface $manageGlobalSettingRepositoryInterface)
    {
        $this->manageGlobalSettingRepositoryInterface = $manageGlobalSettingRepositoryInterface;
    }

    public function manageGlobalSetting()
    {
        $data = $this->manageGlobalSettingRepositoryInterface->getData();

        return view('admin.manage-global-setting.index', compact('data'));
    }

    public function manageGlobalSettingData(GlobalSettingUpdateRequest $request)
    {
        return $this->manageGlobalSettingRepositoryInterface->updateData($request);
    }
}
