<?php

namespace App\Repositories\Admin;

use App\Models\User;
use App\Models\Admin\Threshold;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use App\Interfaces\Admin\ManageThresholdRepositoryInterface;

class ManageThresholdRepository implements ManageThresholdRepositoryInterface
{
    public function getAllThreshold() {
        return Threshold::all();
    }
    
    public function getThresholdById($thresholdId) {
        return Threshold::findOrFail($thresholdId);
    }

    public function deleteThreshold($thresholdId) {
        $threshold = $this->getThresholdById($thresholdId);
        
        if(!empty($threshold)) {
            // $user->syncRoles([]);
            $threshold->delete();

            return redirect()->back()->with('success_msg', 'Threshold deleted successfully.');
        }
        abort(404);
    }

    public function createThreshold($request) {
        
        $role = $this->getRoleDetail(['name' => User::ADMIN]);
        
        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }
        
        Threshold::create([
            'tier'                  => $request->tier,
            'price'                 => $request->price,
            'coins'                 => $request->coins,
            'tiktok_plays_min'      => $request->tiktok_plays_min,
            'tiktok_plays_max'      => $request->tiktok_plays_max,
            'story_views_min'       => $request->story_views_min,
            'story_views_max'       => $request->story_views_max,
            'reels_views_min'       => $request->reels_views_min,
            'reels_views_max'       => $request->reels_views_max,
            'instagram_posts_min'   => $request->instagram_posts_min,
            'instagram_posts_max'   => $request->instagram_posts_max,
            'added_by'              => auth()->user()->id,
            'is_active'             => (isset($request->is_active) && !empty($request->is_active) ? 1 : 0),
        ]);
        
        return redirect()->route('manage.threshold')->with('success_msg', 'Threshold added successfully.');
    }
    
    public function updateThreshold($thresholdId, $request) {
        
        $role = $this->getRoleDetail(['name' => User::ADMIN]);
        
        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }

        $threshold = $this->getThresholdById($thresholdId);
        
        if(!empty($threshold)) {
            
            $thresholdData['tier']                  = $request->tier;
            $thresholdData['price']                 = $request->price;
            $thresholdData['coins']                 = $request->coins;
            $thresholdData['tiktok_plays_min']      = $request->tiktok_plays_min;
            $thresholdData['tiktok_plays_max']      = $request->tiktok_plays_max;
            $thresholdData['story_views_min']       = $request->story_views_min;
            $thresholdData['story_views_max']       = $request->story_views_max;
            $thresholdData['reels_views_min']       = $request->reels_views_min;
            $thresholdData['reels_views_max']       = $request->reels_views_max;
            $thresholdData['instagram_posts_min']   = $request->instagram_posts_min;
            $thresholdData['instagram_posts_max']   = $request->instagram_posts_max;
            $thresholdData['added_by']              = auth()->user()->id;
            $thresholdData['is_active']             = (isset($request->is_active) && !empty($request->is_active) ? 1 : 0);
            
            $threshold->update($thresholdData);
            
            return redirect()->route('manage.threshold')->with('success_msg', 'Threshold updated successfully.');
        }
        
        return redirect()->back()->withInput()->with('error_msg', 'Record not found.');
    }

    public function getDataTable() {
        
        $query = Threshold::query();
        
        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('tier', 'LIKE', "%$search%")
                            ->orWhere('price', 'LIKE', "%$search%")
                            ->orWhere('coins', 'LIKE', "%$search%");
                    });
                }
            })
            ->editColumn('tier', function ($obj) {
                return $obj->tier;
            })
            ->editColumn('price', function ($obj) {
                return $obj->price;
            })
            ->editColumn('coins', function ($obj) {
                return $obj->coins;
            })
            ->editColumn('is_active', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_active)) {
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route('change.threshold.status', $obj->id).'`)" />
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
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route('threshold.detail', $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route('update.threshold', $obj->id) . '">Update</a>';
                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route('delete.threshold', $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'action'])->make(true);
    }

    public function changeStatus($thresholdId) {
        $msg = 'Something went wrong.';
        $code = 400;
        $threshold = $this->getThresholdById($thresholdId);
        
        if (!empty($threshold)) {
            $threshold->update([
                'is_active' => !empty($threshold->is_active) ? 0 : 1
            ]);
            $msg = "Threshold status changed successfully.";
            $code = 200;
        }
        
        return response()->json(['msg' => $msg], $code);
    }

    private function getRoleDetail($roleArray) {
        return Role::where($roleArray)->first();
    }
}
