<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\FaqStoreRequest;
use App\Http\Requests\Admin\Update\FaqUpdateRequest;
use App\Interfaces\Admin\ManageFaqRepositoryInterface;

class ManageFaqController extends Controller
{
    private ManageFaqRepositoryInterface $manageFaqRepository;

    public function __construct(ManageFaqRepositoryInterface $manageFaqRepository)
    {
        $this->manageFaqRepository = $manageFaqRepository;
    }

    public function manageFaq(){
        if (request()->ajax()) {
            return $this->manageFaqRepository->getDataTable();
        }

        return view('admin.manage-faq.index');
    }

    public function addFaq(){
        return view('admin.manage-faq.add');
    }

    public function addFaqData(FaqStoreRequest $request){
        return $this->manageFaqRepository->createData($request);
    }

    public function updateFaq($id){
        $data = $this->manageFaqRepository->getDataById($id);

        return view('admin.manage-faq.update', compact('data'));
    }

    public function updateFaqData($id, FaqUpdateRequest $request){
        return $this->manageFaqRepository->updateData($id, $request);
    }

    public function getFaqDetail($id){
        $data = $this->manageFaqRepository->getDataById($id);

        return view('admin.manage-faq.detail', compact('data'));
    }

    public function changeFaqStatus($id){
        return $this->manageFaqRepository->changeStatus($id);
    }

    public function changeFaqPopularStatus($id){
        return $this->manageFaqRepository->changePopularStatus($id);
    }

    public function changeFaqGlobalStatus($id){
        return $this->manageFaqRepository->changeGlobalStatus($id);
    }

    public function deleteFaq($id){
        return $this->manageFaqRepository->deleteData($id);
    }

}
