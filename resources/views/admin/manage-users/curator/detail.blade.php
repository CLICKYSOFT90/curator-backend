@extends('admin.layouts.master')

@section('title', 'Curator Detail')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Curator Detail</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3">
                                <div class="user-avatar-section">
                                    <div class="d-flex align-items-center flex-column">
                                        <img class="img-fluid rounded my-4" src="{{ asset('assets/front/images/profile-images/' . $curator->profile_image) }}" id="profile_image" height="180" width="180" alt="User avatar" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">FirstName</label>
                                <input type="text" class="form-control" value="{{$curator->first_name}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">LastName</label>
                                <input type="text" class="form-control" value="{{$curator->last_name}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="col-md-2 col-form-label" for="dateInput">Date Of Birth</label>
                                <input type="text" class="form-control date_picker" value="{{$curator->date_of_birth}}" id="dateInput" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <small class="text-light fw-semibold d-block">Gender</small>
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" id="inlineRadio1" value="male" {{ $curator->gender == 'male' ? 'checked' : '' }} disabled/>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio2" value="female" {{ $curator->gender == 'female' ? 'checked' : '' }} disabled/>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio3" value="unspecified" {{ $curator->gender == 'unspecified' ? 'checked' : '' }} disabled/>
                                    <label class="form-check-label" for="inlineRadio3">Unspecified</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" value="{{$curator->email}}" disabled/>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="{{$curator->username}}" disabled/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-6">
                                <label class="form-label" for="country">Country</label>
                                <select class="select2 form-select form-select-lg" id="country" disabled data-allow-clear="true">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $key => $country)
                                        <option value="{{ $key }}" @if ($curator->country_id == $key) selected @endif>{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mb-6">
                                <div class="text-light small fw-semibold mb-3">Verified User</div>
                                <label class="switch">
                                    <input type="checkbox" class="switch-input" {{ $curator->is_verified == 1 ? 'checked' : '' }} disabled />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>
                                    <span class="switch-label">Verify</span>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="{{route('manage.curator')}}" class="btn btn-danger redirect-btn">Back</a>
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
