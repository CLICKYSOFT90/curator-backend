<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ManageFaqRepositoryInterface;
use App\Models\Faq;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ManageFaqRepository implements ManageFaqRepositoryInterface
{
    public function getAll() {
        return Faq::all();
    }

    public function getDataById($id) {
        return Faq::findOrFail($id);
    }

    public function createData($req){

        Faq::create([
            'question' => $req->question,
            'answer' => $req->answer,
            'is_active' => 1
        ]);

        return redirect()->route('manage.faq')->with('success_msg', 'Faq added successfully.');
    }

    public function updateData($id, $req){

        $data = $this->getDataById($id);

        $data->update([
            'question' => $req->question,
            'answer' => $req->answer
        ]);

        return redirect()->route('manage.faq')->with('success_msg', 'Faq updated successfully.');
    }

    public function deleteData($id){

        $this->getDataById($id)->delete();

        return redirect()->back()->with('success_msg', 'Faq deleted successfully.');
    }

    public function getDataTable() {

        $query = Faq::query();

        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('question', 'LIKE', "%$search%")
                            ->orWhere('answer', 'LIKE', "%$search%");
                    });
                }
            })
            ->editColumn('question', function ($obj) {
                return Str::limit($obj->question, 20);
            })
            ->editColumn('answer', function ($obj) {
                return Str::limit($obj->answer, 20);
            })
            ->editColumn('is_active', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_active)) {
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route('faq.change.status', $obj->id).'`)" />
                                        <span class="switch-toggle-slider">
                                          <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                          </span>
                                          <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                          </span>
                                        </span>
                                    </label>';

                return $switchBtn;
            })
            ->editColumn('is_popular', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_popular)) {
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changePopularStatus(`'.route('faq.change.popular.status', $obj->id).'`)" />
                                        <span class="switch-toggle-slider">
                                          <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                          </span>
                                          <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                          </span>
                                        </span>
                                    </label>';

                return $switchBtn;
            })
            ->editColumn('is_global', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_global)) {
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeGlobalStatus(`'.route('faq.change.global.status', $obj->id).'`)" />
                                        <span class="switch-toggle-slider">
                                          <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                          </span>
                                          <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                          </span>
                                        </span>
                                    </label>';

                return $switchBtn;
            })
            ->addColumn('action', function ($obj) {
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route('faq.detail', $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route('faq.update', $obj->id) . '">Update</a>';
                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route('faq.delete', $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'is_popular', 'is_global', 'action'])->make(true);
    }

    public function changeStatus($id) {

        $msg = 'Something went wrong.';
        $code = 400;
        $data = $this->getDataById($id);

        if (!empty($data)) {
            $data->update([
                'is_active' => !empty($data->is_active) ? 0 : 1
            ]);
            $msg = "Faq status changed successfully.";
            $code = 200;
        }

        return response()->json(['msg' => $msg], $code);
    }

    public function changePopularStatus($id) {

        $msg = 'Something went wrong.';
        $code = 400;
        $data = $this->getDataById($id);

        if (!empty($data)) {
            $data->update([
                'is_popular' => !empty($data->is_popular) ? 0 : 1
            ]);
            $msg = "Faq status changed successfully.";
            $code = 200;
        }

        return response()->json(['msg' => $msg], $code);
    }

    public function changeGlobalStatus($id) {

        $msg = 'Something went wrong.';
        $code = 400;
        $data = $this->getDataById($id);

        if (!empty($data)) {
            $data->update([
                'is_global' => !empty($data->is_global) ? 0 : 1
            ]);
            $msg = "Faq status changed successfully.";
            $code = 200;
        }

        return response()->json(['msg' => $msg], $code);
    }
}
