<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Admin\SetIndividualCoin;
use Yajra\DataTables\Facades\DataTables;
use App\Interfaces\Admin\ManageSetIndividualCoinRepositoryInterface;

class ManageSetIndividualCoinRepository implements ManageSetIndividualCoinRepositoryInterface
{
    const INDIVIDUAL_COINS = 'Individual coins';
    private $elite = ['No', 'Yes'];
    private $userType = [0 => '', 2 => 'Artist', 3 => 'Label', 4 => 'Curator'];

    public function getAllIndividualCoin() {
        return SetIndividualCoin::all();
    }

    public function getIndividualCoinById($coinId) {
        return SetIndividualCoin::findOrFail($coinId);
    }

    public function deleteIndividualCoin($coinId) {
        $setIndividualCoin = $this->getIndividualCoinById($coinId);
        
        if(!empty($setIndividualCoin)) {
            // $user->syncRoles([]);
            $setIndividualCoin->delete();

            return redirect()->back()->with('success_msg', self::INDIVIDUAL_COINS . ' deleted successfully.');
        }
        abort(404);
    }

    public function createIndividualCoin($request) {
        
        $role = $this->getRoleDetail(['name' => User::ADMIN]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }

        SetIndividualCoin::create([
            'coins'     => $request->coins,
            'elite'     => $request->elite,
            'user_type' => ($request->elite == 1 ? $request->user_type : 0),
            'added_by'  => auth()->user()->id,
            'is_active' => (isset($request->is_active) && !empty($request->is_active) ? 1 : 0)
        ]);

        return redirect()->route('manage.individual.coin')->with('success_msg', self::INDIVIDUAL_COINS . ' added successfully.');
    }

    public function updateIndividualCoin($coinId, $request) {

        $role = $this->getRoleDetail(['name' => User::ADMIN]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }

        $individualCoin = $this->getIndividualCoinById($coinId);

        if(!empty($individualCoin)) {
            
            $individualCoinData['coins']          = $request->coins;
            $individualCoinData['elite']          = $request->elite;
            $individualCoinData['user_type']      = ($request->elite == 1 ? $request->user_type : 0);
            $individualCoinData['added_by']       = auth()->user()->id;
            $individualCoinData['is_active']      = (isset($request->is_active) && !empty($request->is_active) ? 1 : 0);
            
            $individualCoin->update($individualCoinData);
            
            return redirect()->route('manage.individual.coin')->with('success_msg', self::INDIVIDUAL_COINS . ' updated successfully.');
        }
        
        return redirect()->back()->withInput()->with('error_msg', 'Record not found.');
    }

    public function getDataTable() {

        $query = SetIndividualCoin::query();
        
        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('coins', 'LIKE', "%$search%");
                    });
                }
            })
            ->editColumn('elite', function ($obj) {
                return $this->elite[$obj->elite];
            })
            ->editColumn('user_type', function ($obj) {
                return $this->userType[$obj->user_type];
            })
            ->editColumn('is_active', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_active)) {
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route('change.individual.coin.status', $obj->id).'`)" />
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
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route('individual.coin.detail', $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route('update.individual.coin', $obj->id) . '">Update</a>';

                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route('delete.individual.coin', $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'action'])->make(true);
    }

    public function changeStatus($coinId) {
        
        $msg = 'Something went wrong.';
        $code = 400;
        $setIndividualCoin = $this->getIndividualCoinById($coinId);
        
        if (!empty($setIndividualCoin)) {
            $setIndividualCoin->update([
                'is_active' => !empty($setIndividualCoin->is_active) ? 0 : 1
            ]);

            $msg = self::INDIVIDUAL_COINS . " status changed successfully.";
            $code = 200;
        }
        
        return response()->json(['msg' => $msg], $code);
    }

    private function getRoleDetail($roleArray) {
        return Role::where($roleArray)->first();
    }

    public function getUserType() {
        return Role::whereIn('id', [2, 3, 4])->orderBy('id', 'ASC')->pluck('name', 'id');
    }
}
