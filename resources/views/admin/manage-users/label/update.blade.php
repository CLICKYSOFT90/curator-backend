@extends('admin.layouts.master')

@section('title', 'Update Label')

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
                    <h5 class="card-header">Update Label</h5>
                    <div class="card-body">
                        <form action="{{route('update.label.data', $label->id)}}" method="POST" enctype="multipart/form-data">
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
                                            <img class="img-fluid rounded my-4" src="{{ asset('assets/front/images/profile-images/' . $label->profile_image) }}" id="profile_image" height="180" width="180" alt="User avatar" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">FirstName</label>
                                    <input type="text" class="form-control" name="firstname" value="{{old('firstname', $label->first_name)}}" placeholder="Enter firstname"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">LastName</label>
                                    <input type="text" class="form-control" name="lastname" value="{{old('lastname', $label->last_name)}}" placeholder="Enter lastname"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="col-md-2 col-form-label" for="dateInput">Date Of Birth</label>
                                    <input type="text" class="form-control date_picker" name="date_of_birth" value="{{old('date_of_birth', $label->date_of_birth)}}" id="dateInput" placeholder="YYYY-MM-DD" />
                                </div>
                                <div class="col-md-6 mb-6">
                                    <small class="text-light fw-semibold d-block">Gender</small>
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" {{ $label->gender == 'male' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" {{ $label->gender == 'female' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="unspecified" {{ $label->gender == 'unspecified' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inlineRadio3">Unspecified</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{old('username', $label->username)}}" placeholder="Enter username"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email', $label->email)}}" placeholder="Enter email"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Password (Min. 8 characters)</label>
                                    <div class="input-group form-password-toggle">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Enter password"/>
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="select2 form-select form-select-lg" name="country" id="country" data-allow-clear="true">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $key => $country)
                                            <option value="{{ $key }}" @if ($label->country_id == $key) selected @endif>{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="text-light small fw-semibold mb-3">Verified User</div>
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" name="is_verified" id="is_verified" {{ $label->is_verified == 1 ? 'checked' : '' }} />
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
                                    <a href="{{route('manage.label')}}" class="btn btn-danger redirect-btn">Back</a>
                                    <button type="submit" class="btn btn-primary" onclick="showLoader()">Update</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="card">
                                        <h5 class="card-header">Add Artist</h5>
                                        <div class="form-repeater card-body">
                                            <div id="dataRepeaterList">
                                                <div id="dataRepeaterItem">
                                                    @forelse ($labelArtists as $key => $labelArtist)
                                                        <div class="row">
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_firstname_{{$key}}">Firstname</label>
                                                                <input type="text" class="form-control" name="labelArtist[{{$key}}][artist_firstname]" id="artist_firstname_{{$key}}" value="{{ $labelArtist->first_name }}" placeholder="Enter firstname" />
                                                            </div>
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_lastname_{{$key}}">Lastname</label>
                                                                <input type="text" class="form-control" name="labelArtist[{{$key}}][artist_lastname]" id="artist_lastname_{{$key}}" value="{{ $labelArtist->last_name }}" placeholder="Enter lastname" />
                                                            </div>
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_username_{{$key}}">Username</label>
                                                                <input type="text" class="form-control" name="labelArtist[{{$key}}][artist_username]" id="artist_username_{{$key}}" value="{{ $labelArtist->username }}" placeholder="Enter username" />
                                                            </div>
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_email_{{$key}}">Email</label>
                                                                <input type="text" class="form-control" name="labelArtist[{{$key}}][artist_email]" id="artist_email_{{$key}}" value="{{ $labelArtist->email }}" placeholder="Enter email" />
                                                            </div>
                                                            {{-- <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                                                <label class="form-label" for="artist_password_{{$key}}">Password</label>
                                                                <input type="password" class="form-control" name="labelArtist[{{$key}}][artist_password]" id="artist_password_{{$key}}" placeholder="Enter password" />
                                                            </div> --}}
                                                            <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                                                                <button type="button" class="btn btn-label-danger mt-4 artist_delete_{{$key}} deleteRow" id="artist_delete_{{$key}}">
                                                                    <i class="bx bx-x"></i>
                                                                    <span class="align-middle">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    @empty
                                                        <div class="row">
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_firstname_0">Firstname</label>
                                                                <input type="text" class="form-control" name="labelArtist[0][artist_firstname]" id="artist_firstname_0" placeholder="Enter firstname" />
                                                            </div>
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_lastname_0">Lastname</label>
                                                                <input type="text" class="form-control" name="labelArtist[0][artist_lastname]" id="artist_lastname_0" placeholder="Enter lastname" />
                                                            </div>
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_username_0">Username</label>
                                                                <input type="text" class="form-control" name="labelArtist[0][artist_username]" id="artist_username_0" placeholder="Enter username" />
                                                            </div>
                                                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                                                <label class="form-label" for="artist_email_0">Email</label>
                                                                <input type="text" class="form-control" name="labelArtist[0][artist_email]" id="artist_email_0" placeholder="Enter email" />
                                                            </div>
                                                            {{-- <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                                                <label class="form-label" for="artist_password_0">Password</label>
                                                                <input type="password" class="form-control" name="labelArtist[0][artist_password]" id="artist_password_0" placeholder="Enter password" />
                                                            </div> --}}
                                                            <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                                                                <button type="button" class="btn btn-label-danger mt-4 artist_delete_0 deleteRow" id="artist_delete_0">
                                                                    <i class="bx bx-x"></i>
                                                                    <span class="align-middle">Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    @endforelse
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <button type="button" class="btn btn-primary addMore">
                                                    <i class="bx bx-plus"></i>
                                                    <span class="align-middle">Add More</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('assets/js/forms-extras.js') }}"></script>

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

            $(document).on('click', '.addMore', function() {
                let totalLength = $('#dataRepeaterItem').find('.row').length;

                newRowAdd = '<div class="row">';
                
                newRowAdd += '<div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">';
                newRowAdd += '<label class="form-label" for="artist_firstname_'+(totalLength)+'">Firstname</label>';
                newRowAdd += '<input type="text" class="form-control" name="labelArtist['+(totalLength)+'][artist_firstname]" id="artist_firstname_'+(totalLength)+'" placeholder="Enter firstname" />';
                newRowAdd += '</div>';

                newRowAdd += '<div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">';
                newRowAdd += '<label class="form-label" for="artist_lastname_'+(totalLength)+'">Lastname</label>';
                newRowAdd += '<input type="text" class="form-control" name="labelArtist['+(totalLength)+'][artist_lastname]" id="artist_lastname_'+(totalLength)+'" placeholder="Enter lastname" />';
                newRowAdd += '</div>';

                newRowAdd += '<div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">';
                newRowAdd += '<label class="form-label" for="artist_username_'+(totalLength)+'">Username</label>';
                newRowAdd += '<input type="text" class="form-control" name="labelArtist['+(totalLength)+'][artist_username]" id="artist_username_'+(totalLength)+'" placeholder="Enter username" />';
                newRowAdd += '</div>';

                newRowAdd += '<div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">';
                newRowAdd += '<label class="form-label" for="artist_email_'+(totalLength)+'">Email</label>';
                newRowAdd += '<input type="text" class="form-control" name="labelArtist['+(totalLength)+'][artist_email]" id="artist_email_'+(totalLength)+'" placeholder="Enter email" />';
                newRowAdd += '</div>';

                // newRowAdd += '<div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">';
                // newRowAdd += '<label class="form-label" for="artist_password_'+(totalLength)+'">Password</label>';
                // newRowAdd += '<input type="password" class="form-control" name="labelArtist['+(totalLength)+'][artist_password]" id="artist_password_'+(totalLength)+'" placeholder="Enter password" />';
                // newRowAdd += '</div>';

                newRowAdd += '<div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">';
                newRowAdd += '<button type="button" class="btn btn-label-danger mt-4 artist_delete_'+(totalLength)+' deleteRow" id="artist_delete_'+(totalLength)+'">';
                newRowAdd += '<i class="bx bx-x"></i>';
                newRowAdd += '<span class="align-middle">Delete</span>';
                newRowAdd += '</button>';
                newRowAdd += '</div>';

                newRowAdd += '</div>';
                newRowAdd += '<hr />';

                $('#dataRepeaterItem').append(newRowAdd);
            });

            $(document).on('click', '.deleteRow', function() {
                $(this).parent().parent().remove();
            });
        });

        function loadFile(fileObj) {
            let profileImage = document.getElementById('profile_image');
            profileImage.src = URL.createObjectURL(fileObj.files[0]);
        }
    </script>
@endpush
