@extends('admin.layouts.master')

@section('title', 'User Detail')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Admin Detail</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">UserName</label>
                                <input type="text" class="form-control" value="{{$admin->username}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" value="{{$admin->email}}" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <div class="user-avatar-section">
                                    <div class="d-flex align-items-center flex-column">
                                        <img class="img-fluid rounded my-4" src="{{ asset('assets/admin/img/profile-images/' . $admin->profile_image) }}" id="profile_image" height="180" width="180" alt="User avatar" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="{{route('manage.admin')}}" class="btn btn-danger redirect-btn">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
@endpush
