<?php

namespace App\Repositories\Admin;

use App\Models\User;
use App\Models\Country;
use App\Notifications\UserWelcome;
use Spatie\Permission\Models\Role;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;
use App\Interfaces\Admin\ManageUserRepositoryInterface;

class ManageUserRepository implements ManageUserRepositoryInterface
{
    private $updateURL, $detail, $changeStatus, $delete;
    
    const UPDATE = 'update.';
    const DETAIL = '.detail';
    
    public function getAllUser() {
        return User::all();
    }
    
    public function getUserById($userId) {
        return User::findOrFail($userId);
    }
    
    public function deleteUser($userId, $roleName) {
        
        $user = $this->getUserById($userId);
        
        if(!empty($user)) {
            $user->syncRoles([]);
            $imageData = [
                'image_name'            => $user->profile_image,
                'public_path'           => storage_path('app/public/assets/front/images/profile-images/'),
            ];
            $this->deleteImage($imageData);
            $user->delete();

            return redirect()->back()->with('success_msg', $roleName . ' deleted successfully.');
        }
        abort(404);
    }
    
    public function createUser($request) {

        $response = $this->conditionManipulation('createUser', '', $request);
        
        $role = $this->getRoleDetail(['name' => $response['roleName']]);

        if(empty($role)) {
            return redirect()->back()->withInput()->with('error_msg', 'Role is invalid.');
        }
        
        $user = User::create([
            'first_name'    => $request->firstname,
            'last_name'     => $request->lastname,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => $request->password,
            'gender'        => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'role_id'       => $role->id,
            'is_active'     => 1,
            'is_verified'   => (isset($request->is_verified) && !empty($request->is_verified) ? 1 : 0),
            'country_id'    => $request->country,
        ]);

        $imageInfo = [
            'element_name'          => 'profile_image',
            'image_name_prefix'     => 'profile-image-',
            'image_unique_id'       => $user->id,
            'path'                  => storage_path('app/public/assets/front/images/profile-images/'),
            'width'                 => 180,
            'height'                => 180,
        ];
        $this->imageUpload($request, $imageInfo);

        // add multiple artist from label section
        $this->addLabelArtist($request, $user->id, 'create');
        
        $permissions = Permission::pluck('id', 'id')->all();
        
        $role->syncPermissions($permissions);
        
        $user->assignRole([$role->id]);
        
        $credentials = '<br /><strong>Username:</strong> ' . $request->email . '<br /><strong>Password:</strong> ' . $request->password;
        
        $user->notify((new UserWelcome($credentials))->delay(now()->addSeconds(5)));
        
        return redirect()->route($response['manageRole'])->with('success_msg', $response['roleName'] . ' added successfully.');
    }
    
    public function updateUser($userId, $request) {
        
        $user = $this->getUserById($userId);
        
        $role = $this->getRoleDetail(['id' => $user->role_id]);
        
        if(!empty($user)) {
            
            $userData['first_name']     = $request->firstname;
            $userData['last_name']      = $request->lastname;
            $userData['username']       = $request->username;
            $userData['email']          = $request->email;
            $userData['gender']         = $request->gender;
            $userData['date_of_birth']  = $request->date_of_birth;
            $userData['country_id']     = $request->country;
            $userData['is_verified']    = (isset($request->is_verified) && !empty($request->is_verified) ? 1 : 0);

            if($request->hasFile('profile_image')) {

                $imageInfo = [
                    'element_name'          => 'profile_image',
                    'image_name_prefix'     => 'profile-image-',
                    'image_unique_id'       => $user->id,
                    'path'                  => storage_path('app/public/assets/front/images/profile-images/'),
                    'width'                 => 180,
                    'height'                => 180
                ];

                $this->imageUpload($request, $imageInfo);
            }
            
            if(!empty($request->password)) {
                $userData['password'] = $request->password;
            }
            
            $user->update($userData);
            
            // add multiple artist from label section
            $this->addLabelArtist($request, $user->id, 'update');
            
            if(!empty($request->password)) {
                $credentials = '<br /><strong>Username:</strong> ' . $request->email . '<br /><strong>New Password:</strong> ' . $request->password;
                
                $user->notify((new UserWelcome($credentials))->delay(now()->addSeconds(5)));
            }
            
            $response = $this->conditionManipulation('updateUser', $user->role_id, $request);
            
            return redirect()->route($response['manageRole'])->with('success_msg', $role->name . ' updated successfully.');
        }
        
        return redirect()->back()->withInput()->with('error_msg', $role->name . ' not found.');
    }
    
    public function getDataTable($roleId) {
        
        $getResponse = $this->conditionManipulation('getDataTable', $roleId);
        
        $this->updateURL    = $getResponse['updateURL'];
        $this->detail       = $getResponse['detail'];
        $this->changeStatus = $getResponse['changeStatus'];
        $this->delete       = $getResponse['delete'];
        
        $query = User::where(['role_id' => $roleId]);
        
        return Datatables::of($query)
            ->filter(function ($instance) {
                $search = request('search')['value'];
                if (!empty($search)) {
                    $instance->where(function($w) use ($search){
                        $w->orWhere('display_name', 'LIKE', "%$search%")
                            ->orWhere('email', 'LIKE', "%$search%");

                        if(strtolower($search) === "unverified"){
                            $w->orWhere('is_verified', 0);
                        }elseif(strtolower($search) === "verified"){
                            $w->orWhere('is_verified', 1);
                        }

                    });
                }
            })
            ->editColumn('is_verified', function ($obj){
                return !empty($obj->is_verified)?"Verified":"Unverified";
            })
            ->editColumn('is_active', function ($obj) {
                $isChecked = "";
                if(!empty($obj->is_active)){
                    $isChecked = "checked";
                }

                $switchBtn = '<label class="switch switch-success">
                                        <input type="checkbox" class="switch-input" '.$isChecked.' onclick="changeStatus(`'.route($this->changeStatus, $obj->id).'`)" />
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
                $buttons = '<a class="btn btn-primary redirect-btn" href="' . route($this->detail, $obj->id) . '">Show</a> 
                            <a class="btn btn-primary redirect-btn" href="' . route($this->updateURL, $obj->id) . '">Update</a>';

                return $buttons . '  <button class="btn btn-danger redirect-btn" onclick="deleteData(`'. route($this->delete, $obj->id).'`)">Delete</button>';
            })->rawColumns(['is_active', 'action'])->make(true);
    }
    
    public function changeStatus($userId, $roleName) {
        
        $msg = 'Something went wrong.';
        $code = 400;
        $user = $this->getUserById($userId);

        $user->notify((new UserWelcome(['username' => 'asdas', 'password' => '123']))->delay(now()->addSeconds(5)));
        
        if (!empty($user)) {
            $user->update([
                'is_active' => !empty($user->is_active) ? 0 : 1,
                'is_verified' => !empty($user->is_verified) ? 0 : 1,
            ]);

            $msg = $roleName . " status changed successfully.";
            $code = 200;
        }
        
        return response()->json(['msg' => $msg], $code);
    }
    
    public function getRoleDetail($roleArray) {
        
        return Role::where($roleArray)->first();
    }

    public function getLabelArtist($labelParentId) {
        return User::where('parent_id', $labelParentId)->get();
    }

    public function countries() {
        return Country::pluck('country_name', 'id');
    }

    private function conditionManipulation($from, $roleId = '', $request = '') {
        $response = [];
        if($from == 'getDataTable') {
            if($roleId == 2) {
                $response['updateURL']      = self::UPDATE.'artist';
                $response['detail']         = 'artist' . self::DETAIL;
                $response['changeStatus']   = 'change.artist.status';
                $response['delete']         = 'delete.artist';
            } elseif($roleId == 3) {
                $response['updateURL']      = self::UPDATE.'label';
                $response['detail']         = 'label' . self::DETAIL;
                $response['changeStatus']   = 'change.label.status';
                $response['delete']         = 'delete.label';
            } elseif($roleId == 4) {
                $response['updateURL']      = self::UPDATE.'curator';
                $response['detail']         = 'curator' . self::DETAIL;
                $response['changeStatus']   = 'change.curator.status';
                $response['delete']         = 'delete.curator';
            } elseif($roleId == 5) {
                $response['updateURL']      = self::UPDATE.'influencer';
                $response['detail']         = 'influencer' . self::DETAIL;
                $response['changeStatus']   = 'change.influencer.status';
                $response['delete']         = 'delete.influencer';
            }
        } elseif($from == 'createUser') {
            $manageRole = 'manage.';
            if($request->has('is_artist')) {
                $response['roleName']   = User::ARTIST;
                $manageRole             .= 'artist';
            } elseif($request->has('is_label')) {
                $response['roleName']   = User::LABEL;
                $manageRole             .= 'label';
            } elseif($request->has('is_curator')) {
                $response['roleName']   = User::CURATOR;
                $manageRole             .= 'curator';
            } elseif($request->has('is_influencer')) {
                $response['roleName']   = User::INFLUENCER;
                $manageRole             .= 'influencer';
            }

            $response['manageRole'] = $manageRole;
        } elseif($from == 'updateUser') {
            $manageRole = 'manage.';
            if($roleId == 2) {
                $manageRole .= 'artist';
            } elseif($roleId == 3) {
                $manageRole .= 'label';
            } elseif($roleId == 4) {
                $manageRole .= 'curator';
            } elseif($roleId == 5) {
                $manageRole .= 'influencer';
            }

            $response['manageRole'] = $manageRole;
        }

        return $response;
    }

    private function addLabelArtist($request, $parentId, $mode = '') {
        if(isset($request['labelArtist']) && !empty($request['labelArtist'])) {
            $multipleArtistArray = [];
            if($mode == 'update') {
                User::where('parent_id', $parentId)->delete();
            }
            foreach($request['labelArtist'] as $labelArtist) {
                if(!empty($labelArtist)) {
                    $labelArtistArray = [
                        'parent_id'     => $parentId,
                        'first_name'    => $labelArtist['artist_firstname'],
                        'last_name'     => $labelArtist['artist_lastname'],
                        'username'      => $labelArtist['artist_username'],
                        'email'         => $labelArtist['artist_email'],
                        'password'      => '',
                        'date_of_birth' => date('Y-m-d'),
                        'role_id'       => 2,
                        'is_active'     => 1,
                        'is_verified'   => 0,
                        'created_at'    => date('Y-m-d H:i:s'),
                        'updated_at'    => date('Y-m-d H:i:s'),
                    ];
                    
                    $multipleArtistArray[] = $labelArtistArray;
                }
            }

            if(!empty($multipleArtistArray)) {
                User::insert($multipleArtistArray);
            }
        }
    }

    private function imageUpload($request, $imageInfoArray) {
        if($request->hasFile($imageInfoArray['element_name'])) {
            $image = $request->file($imageInfoArray['element_name']);
            $name = $imageInfoArray['image_name_prefix'] . $imageInfoArray['image_unique_id'] . '.' . $image->getClientOriginalExtension();
            $location = public_path($imageInfoArray['path'] . $name);
            Image::make($image)->resize($imageInfoArray['width'], $imageInfoArray['height'])->save($location, 60);
            
            $profileImage = User::find($imageInfoArray['image_unique_id']);
            $profileImage->profile_image = $name;
            $profileImage->save();
        }
    }

    private function deleteImage($imageData) {
        $filePath = public_path($imageData['public_path'] . $imageData['image_name']);
        if(file_exists($filePath)) {
            unlink($filePath);
        }
    }
}
