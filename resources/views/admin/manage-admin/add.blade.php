@extends('admin.layouts.master')

@section('title', 'Add User')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Admin</h5>
                    <div class="card-body">
                        <form action="{{route('add.admin.data')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">UserName</label>
                                    <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Enter username"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter email"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Password (Min. 8 characters)</label>
                                    <div class="input-group form-password-toggle">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Enter password" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label" for="profileImage">Profile Image</label>
                                    <input type="file" class="form-control" name="profile_image" id="profileImage" onchange="loadFile(this)" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6 profileImgElement visually-hidden">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <img class="img-fluid rounded my-4" id="profile_image" height="180" width="180" alt="User avatar" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{route('manage.admin')}}" class="btn btn-danger redirect-btn">Back</a>
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Add</button>
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
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script>
        $(function(){
            $('.date_picker').datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked",
                endDate: '+0d',
                autoclose: true
            });
        });

        function loadFile(fileObj) {
            let profileImage = document.getElementById('profile_image');
            $('.profileImgElement').removeClass('visually-hidden');
            profileImage.src = URL.createObjectURL(fileObj.files[0]);
        }
    </script>
@endpush
