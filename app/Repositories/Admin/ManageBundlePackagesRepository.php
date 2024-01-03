<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Admin\BundlePackage;
use Yajra\DataTables\Facades\DataTables;
use App\Interfaces\Admin\ManageBundlePackagesRepositoryInterface;

class ManageBundlePackagesRepository implements ManageBundlePackagesRepositoryInterface
{
    const BUNDLE_PACKAGE = 'Bundle package';
    public function getAllPackages() {
        return BundlePackage::all();
    }

    public function getBundlePackageById($packageId) {
        return BundlePackage::findOrFail($packageId);
    }

    public function deleteBundlePackage($packageId) {
        
        $bundlePackage = $this->getBundlePackageById($packageId);
        
        if(!empty($bundlePackage)) {
            // $user->syncRoles([]);
            $bundlePackage->delete();

            return redirect()->back()->with('success_msg', self::BUNDLE_PACKAGE . ' deleted successfully.');
        }
        abort(404);
    }

    public function createBundlePackage($request) {
        
        $role = $this->getRoleDetail(['name' => User::ADMIN]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }
        
        BundlePackage::create([
            'package_name'      => $request->package_name,
            'package_price'     => $request->package_price,
            'added_by'          => auth()->user()->id,
            'coins'             => $request->coins,
            'is_active'         => (isset($request->is_active) && !empty($request->is_active) ? 1 : 0),
        ]);
        
        return redirect()->route('manage.bundle.packages')->with('success_msg', self::BUNDLE_PACKAGE . ' added successfully.');
    }

    public function updateBundlePackage($packageId, $request) {

        $role = $this->getRoleDetail(['name' => User::ADMIN]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }
        
        $bundlePackage = $this->getBundlePackageById($packageId);
        
        if(!empty($bundlePackage)) {
            
            $bundlePackageData['package_name']       = $request->package_name;
            $bundlePackageData['package_price']      = $request->package_price;
            $bundlePackageData['added_by']           = auth()->user()->id;
            $bundlePackageData['coins']              = $request->coins;
            $bundlePackageData['is_active']          = (isset($request->is_active) && !empty($request->is_active) ? 1 : 0);
            
            $bundlePackage->update($bundlePackageData);
            
            return redirect()->route('manage.bundle.packages')->with('success_msg', self::BUNDLE_PACKAGE . ' updated successfully.');
        }
        
        return redirect()->back()->withInput()->with('error_msg', 'Record not found.');
    }

    public function getDataTable() {

        $query = BundlePackage::query();
        
        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('package_name', 'LIKE', "%$search%")
                            ->orWhere('package_price', 'LIKE', "%$search%");
                    });
                }
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
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route('change.bundle.packages.status', $obj->id).'`)" />
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
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route('bundle.packages.detail', $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route('update.bundle.packages', $obj->id) . '">Update</a>';

                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route('delete.bundle.packages', $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'action'])->make(true);
    }

    public function changeStatus($packageId) {
        
        $msg = 'Something went wrong.';
        $code = 400;
        $bundlePackage = $this->getBundlePackageById($packageId);
        
        if (!empty($bundlePackage)) {
            $bundlePackage->update([
                'is_active' => !empty($bundlePackage->is_active) ? 0 : 1
            ]);

            $msg = self::BUNDLE_PACKAGE . " status changed successfully.";
            $code = 200;
        }
        
        return response()->json(['msg' => $msg], $code);
    }

    private function getRoleDetail($roleArray) {
        return Role::where($roleArray)->first();
    }
}
