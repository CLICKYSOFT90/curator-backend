<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Admin\PlayListingFloorCampaign;
use App\Interfaces\Admin\ManagePlaylistingFloorCampaignRepositoryInterface;

class ManagePlayListingFloorCampaignRepository implements ManagePlaylistingFloorCampaignRepositoryInterface
{
    public function getPlaylistingFloorCampaign() {
        return PlayListingFloorCampaign::all();
    }

    public function getPlaylistingFloorCampaignId($playListingFloorCampaignId) {
        return PlayListingFloorCampaign::findOrFail($playListingFloorCampaignId);
    }

    public function deletePlaylistingFloorCampaign($playListingFloorCampaignId) {
        
        $playListingFloorCampaign = $this->getPlaylistingFloorCampaignId($playListingFloorCampaignId);
        
        if(!empty($playListingFloorCampaign)) {
            // $user->syncRoles([]);
            $playListingFloorCampaign->delete();

            return redirect()->back()->with('success_msg', 'Ground floor ticket prices deleted successfully.');
        }
        abort(404);
    }

    public function createPlaylistingFloorCampaign($request) {
        
        $role = $this->getRoleDetail(['name' => User::ADMIN]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }
        
        PlayListingFloorCampaign::create([
            'campaign_days'     => $request->campaign_days,
            'coins_per_month'   => $request->coins_per_month,
            'price_per_month'   => $request->price_per_month,
            'coins_per_week'    => $request->coins_per_week,
            'price_per_week'    => $request->price_per_week,
            'added_by'          => auth()->user()->id,
            'is_active'         => (isset($request->is_active) && !empty($request->is_active) ? 1 : 0),
        ]);
        
        return redirect()->route('manage.groud.floor.ticket.price')->with('success_msg', 'Ground floor ticket prices added successfully.');
    }

    public function updatePlaylistingFloorCampaign($playListingFloorCampaignId, $request) {

        $role = $this->getRoleDetail(['name' => User::ADMIN]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }
        
        $playListingFloorCampaign = $this->getPlaylistingFloorCampaignId($playListingFloorCampaignId);
        
        if(!empty($playListingFloorCampaign)) {
            
            $playListingFloorCampaignData['campaign_days']      = $request->campaign_days;
            $playListingFloorCampaignData['coins_per_month']    = $request->coins_per_month;
            $playListingFloorCampaignData['price_per_month']    = $request->price_per_month;
            $playListingFloorCampaignData['coins_per_week']     = $request->coins_per_week;
            $playListingFloorCampaignData['price_per_week']     = $request->price_per_week;
            $playListingFloorCampaignData['added_by']           = auth()->user()->id;
            $playListingFloorCampaignData['is_active']          = (isset($request->is_active) && !empty($request->is_active) ? 1 : 0);
            
            $playListingFloorCampaign->update($playListingFloorCampaignData);
            
            return redirect()->route('manage.groud.floor.ticket.price')->with('success_msg', 'Ground floor ticket prices updated successfully.');
        }
        
        return redirect()->back()->withInput()->with('error_msg', 'Record not found.');
    }

    public function getDataTable() {

        $query = PlayListingFloorCampaign::query();
        
        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('campaign_days', 'LIKE', "%$search%");
                    });
                }
            })
            ->editColumn('campaign_days', function ($obj) {
                return $obj->campaign_days;
            })
            ->editColumn('is_active', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_active)) {
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route('change.groud.floor.ticket.price.status', $obj->id).'`)" />
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
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route('groud.floor.ticket.price.detail', $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route('update.groud.floor.ticket.price', $obj->id) . '">Update</a>';

                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route('delete.groud.floor.ticket.price', $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'action'])->make(true);
    }

    public function changeStatus($packageId) {
        
        $msg = 'Something went wrong.';
        $code = 400;
        $playListingFloorCampaign = $this->getPlaylistingFloorCampaignId($packageId);
        
        if (!empty($playListingFloorCampaign)) {
            $playListingFloorCampaign->update([
                'is_active' => !empty($playListingFloorCampaign->is_active) ? 0 : 1
            ]);

            $msg = "Ground floor ticket prices status changed successfully.";
            $code = 200;
        }
        
        return response()->json(['msg' => $msg], $code);
    }

    private function getRoleDetail($roleArray) {
        return Role::where($roleArray)->first();
    }
}
