<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Update\TermAndConditionUpdateRequest;
use App\Interfaces\Admin\ManageTermAndConditionRepositoryInterface;

class ManageTermAndConditionController extends Controller
{
    private ManageTermAndConditionRepositoryInterface $manageTermAndConditionRepository;

    public function __construct(ManageTermAndConditionRepositoryInterface $manageTermAndConditionRepository)
    {
        $this->manageTermAndConditionRepository = $manageTermAndConditionRepository;
    }

    public function manageTermAndCondition()
    {
        $data = $this->manageTermAndConditionRepository->getData();

        return view('admin.manage-term-and-condition.index', compact('data'));
    }

    public function manageTermAndConditionData(TermAndConditionUpdateRequest $request)
    {
        return $this->manageTermAndConditionRepository->updateData($request);
    }
}
