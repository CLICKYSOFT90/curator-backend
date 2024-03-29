@extends('admin.layouts.master')

@section('title', 'Update Influencer')

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
                    <h5 class="card-header">Update Influencer</h5>
                    <div class="card-body">
                        <form action="{{route('update.influencer.data', $influencer->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.partials.alert')
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="profileImage">Profile Image</label>
                                    <input type="file" class="form-control" name="profile_image" id="profileImage" onchange="loadFile(this)" />
                                </div>
                                <div class="mb-3">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <img class="img-fluid rounded my-4" id="profile_image" src="{{ asset('assets/front/images/profile-images/' . $influencer->profile_image) }}" height="180" width="180" alt="User avatar" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">FirstName</label>
                                    <input type="text" class="form-control" name="firstname" value="{{old('firstname', $influencer->first_name)}}" placeholder="Enter firstname"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">LastName</label>
                                    <input type="text" class="form-control" name="lastname" value="{{old('lastname', $influencer->last_name)}}" placeholder="Enter lastname"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="col-md-2 col-form-label" for="dateInput">Date Of Birth</label>
                                    <input type="text" class="form-control date_picker" name="date_of_birth" value="{{old('date_of_birth', $influencer->date_of_birth)}}" id="dateInput" placeholder="YYYY-MM-DD" />
                                </div>
                                <div class="col-md-6 mb-6">
                                    <small class="text-light fw-semibold d-block">Gender</small>
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" {{ $influencer->gender == 'male' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" {{ $influencer->gender == 'female' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="unspecified" {{ $influencer->gender == 'unspecified' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inlineRadio3">Unspecified</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{old('username', $influencer->username)}}" placeholder="Enter username"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email', $influencer->email)}}" placeholder="Enter email"/>
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
                                <div class="col-md-6 mb-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="select2 form-select form-select-lg" name="country" id="country" data-allow-clear="true">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $key => $country)
                                            <option value="{{ $key }}" @if ($influencer->country_id == $key) selected @endif>{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Verified User</div>
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" name="is_verified" id="is_verified" {{ $influencer->is_verified == 1 ? 'checked' : '' }} />
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
                                    <a href="{{route('manage.influencer')}}" class="btn btn-danger redirect-btn">Back</a>
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Update</button>
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
            profileImage.src = URL.createObjectURL(fileObj.files[0]);
        }
    </script>
@endpush
