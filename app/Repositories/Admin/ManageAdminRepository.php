<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Notifications\UserWelcome;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;
use App\Interfaces\Admin\ManageAdminRepositoryInterface;

class ManageAdminRepository implements ManageAdminRepositoryInterface
{
    public function getAllAdmin() {
        return Admin::all();
    }
    
    public function getAdminById($adminId) {
        return Admin::findOrFail($adminId);
    }
    
    public function deleteAdmin($adminId) {
        
        $admin = Admin::where('id', $adminId)->first();
        
        if(!empty($admin)) {

            if($admin->profile_image !== "default.png") {
                $this->deleteImage($admin->profile_image);
            }

            $admin->delete();
            
            return redirect()->back()->with('success_msg', 'Admin deleted successfully.');
        }
        abort(404);
    }
    
    public function createAdmin($request) {

        $admin = Admin::create([
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => $request->password,
            'profile_image'  =>  $this->profilePictureUpload($request['profile_image'])
        ]);
        
        $credentials = '<br /><strong>Username:</strong> ' . $request->email . '<br /><strong>Password:</strong> ' . $request->password;
        
        $admin->notify((new UserWelcome($credentials))->delay(now()->addSeconds(5)));
        
        return redirect()->route('manage.admin')->with('success_msg', 'Admin added successfully.');
    }
    
    public function updateAdmin($adminId, $request) {
        
        $admin = Admin::where('id', $adminId)->first();
        
        if(!empty($admin)) {

            $adminData['username']      = $request->username;
            $adminData['email']         = $request->email;

            if(!empty($request->password)) {
                $adminData['password']  = $request->password;
            }

            if($request->hasFile('profile_image')) {

                if($admin->profile_image !== "default.png") {
                    $this->deleteImage($admin->profile_image);
                }

                $adminData['profile_image']  = $this->profilePictureUpload($request['profile_image']);
            }
            
            $admin->update($adminData);
            
            if(!empty($request->password)) {
                $credentials = '<br /><strong>Username:</strong> ' . $request->email . '<br /><strong>New Password:</strong> ' . $request->password;
                
                $admin->notify((new UserWelcome($credentials))->delay(now()->addSeconds(5)));
            }
            
            return redirect()->route('manage.admin')->with('success_msg', 'Admin updated successfully.');
        }
        
        return redirect()->back()->withInput()->with('error_msg', 'Admin not found.');
    }
    
    public function getDataTable() {

        $query = Admin::whereNotIn('id', [1, Auth::guard('admin')->user()->id]);
        
        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('username', 'LIKE', "%$search%")
                            ->orWhere('email', 'LIKE', "%$search%");

                        if(strtolower($search) === "inactive"){
                            $w->orWhere('is_active', 0);
                        }elseif(strtolower($search) === "active"){
                            $w->orWhere('is_active', 1);
                        }

                    });
                }
            })
            ->editColumn('is_active', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_active)){
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route('change.admin.status', $obj->id).'`)" />
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
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route('admin.detail', $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route('update.admin', $obj->id) . '">Update</a>';

                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route('delete.admin', $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'action'])->make(true);
    }
    
    public function changeStatus($adminId) {
        $msg = 'Something went wrong.';
        $code = 400;
        $admin = $this->getAdminById($adminId);
        
        if (!empty($admin)) {
            $admin->update([
                'is_active' => !empty($admin->is_active) ? 0 : 1
            ]);
            $msg = "Admin status changed successfully.";
            $code = 200;
        }
        
        return response()->json(['msg' => $msg], $code);
    }


    private function profilePictureUpload($image){
        $path = public_path('/assets/admin/img/profile-images/');

        if(!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $newImage = time(). '.' . $image->getclientoriginalextension();
        Image::make($image)->save($path.'/'.$newImage);

        return $newImage;
    }

    private function deleteImage($oldImage) {
        $file = public_path('/assets/admin/img/profile-images/'.$oldImage);
        if(file_exists($file)) {
            File::delete($file);
        }
    }
}
