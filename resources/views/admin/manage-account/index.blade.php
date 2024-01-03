@extends('admin.layouts.master')

@section('title', 'Manage Account')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Manage Account</h5>
                    <div class="card-body">
                        <form action="{{route('admin.manage.account.data')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">UserName</label>
                                    <input type="text" class="form-control" name="username" value="{{old('username', $user->username)}}" placeholder="Enter username"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email', $user->email)}}" placeholder="Enter email"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">New Password (Min. 8 characters)</label>
                                    <div class="input-group form-password-toggle">
                                        <input type="password" class="form-control" name="password" placeholder="Enter new password" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Confirm Password (Min. 8 characters)</label>
                                    <div class="input-group form-password-toggle">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Profile Picture</label>
                                    <input type="file" class="form-control" name="profile_image" id="profileImage" onchange="loadFile(this)" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <img id="profile_image" src="{{asset('assets/admin/img/profile-images/'.$user->profile_image)}}" height="250px" width="250px" alt="profile image" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/admin/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/admin/js/forms-selects.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script>
        $(function(){
            $('.date_picker').datepicker({
                format: "yyyy-dd-mm",
                todayBtn: "linked",
            });
        });

        function loadFile(fileObj) {
            let profileImage = document.getElementById('profile_image');
            profileImage.src = URL.createObjectURL(fileObj.files[0]);
        }
    </script>
@endpush
