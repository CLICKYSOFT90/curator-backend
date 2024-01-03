<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Update\AboutUsUpdateRequest;
use App\Interfaces\Admin\ManageAboutUsRepositoryInterface;

class ManageAboutUsController extends Controller
{
    private ManageAboutUsRepositoryInterface $manageAboutUsRepository;

    public function __construct(ManageAboutUsRepositoryInterface $manageAboutUsRepository)
    {
        $this->manageAboutUsRepository = $manageAboutUsRepository;
    }

    public function manageAboutUs()
    {
        $data = $this->manageAboutUsRepository->getData();

        return view('admin.manage-about-us.index', compact('data'));
    }

    public function manageAboutUsData(AboutUsUpdateRequest $request)
    {
        return $this->manageAboutUsRepository->updateData($request);
    }
}
