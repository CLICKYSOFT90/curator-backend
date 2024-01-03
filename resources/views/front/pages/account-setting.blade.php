@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - Account Setting')
@push('front-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <style>
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #FBBC04;
            font-weight: 700;
            background-color: #ffffff;
        }
    </style>
@endpush

@section('content')

    <!-- ACCOUNT SETTING SECTION BEGIN -->
    <section class="account-setting-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="account-setting-heading">
                        <h3>Account Settings</h3>
                    </div>
                    <div class="account-setting-box">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                <div class="account-border">
                                    <div class="profile-pic">
                                        <label class="-label" for="file">
                                            <span class="glyphicon glyphicon-camera"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                        </label>
                                        <input id="file" type="file" onchange="profileUpload(event)"/>
                                        <img src="{{auth()->user()->profile_image}}" alt="image" class="img-fluid" id="output" width="200" />
                                    </div>
                                    <h4>{{auth()->user()->display_name}}</h4>
                                    <div class="tabs-item-listing">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li><a class="nav-link active" id="pills-home-tab" onclick="setTab('pills-home')" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" href="#" >Account</a></li>
                                            <li><a  class="nav-link" id="pills-profile-tab" onclick="setTab('pills-profile')" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" href="#">Password</a></li>
                                            @if(in_array(auth()->user()->role_id, [\App\Models\User::CURATOR_ID, \App\Models\User::INFLUENCER_ID]))
                                            <li><a  class="nav-link" id="pills-genre-tab" onclick="setTab('pills-genre')" data-toggle="pill" data-target="#pills-genre" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" href="#">Genre</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="right-side-spacing">
                                            <div class="account-right-side">
                                                <h3>Account Settings</h3>
                                            </div>

                                            <form method="POST" action="{{route('account.setting.data')}}" enctype="multipart/form-data">
                                                @csrf
                                                @include('front.partials.alert')
                                                @if(in_array(auth()->user()->role_id, [\App\Models\User::CURATOR_ID, \App\Models\User::INFLUENCER_ID]))
                                                    <div class="account-fields-flex">
                                                        <div class="account-setting-field">
                                                            <label>First name</label>
                                                            <input type="text" class="form-control" placeholder="Mike" value="{{!empty($user->first_name)?$user->first_name:''}}" name="first_name">
                                                        </div>
                                                        <div class="account-setting-field">
                                                            <label>Last name</label>
                                                            <input type="text" class="form-control" placeholder="Mills" value="{{!empty($user->last_name)?$user->last_name:''}}" name="last_name">
                                                        </div>
                                                    </div>
                                                    <div class="account-fields-flex">
                                                        <div class="account-setting-field">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" placeholder="mikemills@gmail.com" readonly value="{{!empty($user->email)?$user->email:''}}" >
                                                        </div>
                                                        <div class="account-setting-field">
                                                            <label>Display name</label>
                                                            <input type="text" class="form-control" name="display_name" placeholder="Mike"  value="{{!empty($user->display_name)?$user->display_name:''}}">
                                                        </div>
                                                    </div>
                                                    <div class="account-fields-flex">
                                                        <div class="account-setting-field">
                                                            <label>Date of Birth</label>
                                                            <input type="date" class="form-control" value="{{!empty($user->date_of_birth)?$user->date_of_birth:''}}" name="date_of_birth">
                                                        </div>
                                                        <div class="account-setting-field">
                                                            <label>Country</label>
                                                            <select class="form-control" name="country_id">
                                                                @foreach($countries as $country)
                                                                    <option value="{{$country->id}}" {{(!empty($user->country_id) && $user->country_id == $country->id)?'selected':''}}>{{$country->country_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="account-fields-flex">
                                                        <div class="account-setting-field">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" placeholder="mikemills@gmail.com" readonly value="{{!empty($user->email)?$user->email:''}}" >
                                                        </div>
                                                        <div class="account-setting-field">
                                                            <label>Display name</label>
                                                            <input type="text" class="form-control" name="display_name" placeholder="Mike"  value="{{!empty($user->display_name)?$user->display_name:''}}">
                                                        </div>
                                                    </div>
                                                    <div class="account-fields-flex">
                                                        <div class="account-setting-field">
                                                            <label>Country</label>
                                                            <select class="form-control" name="country_id">
                                                                @foreach($countries as $country)
                                                                    <option value="{{$country->id}}" {{(!empty($user->country_id) && $user->country_id == $country->id)?'selected':''}}>{{$country->country_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="account-form-btn">
                                                    <button type="submit" class="btn btn-primary account-form-update">Update</button>
                                                    <button type="button" class="btn btn-primary account-form-cancel">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="right-side-spacing">
                                            <div class="account-right-side">
                                                <h3>Password Settings</h3>
                                            </div>
                                            <form method="POST" action="{{route('account.setting.password.data')}}">
                                                @csrf
                                                @include('front.partials.alert')
                                                <div class="account-fields-flex">
                                                    <div class="account-setting-field">
                                                        <label>Password</label>
                                                        <div class="input-eye-field">
                                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                                            <div class="account-eye-icon">
                                                                <a href="javascript:void(0)" onclick="showPassword('password')"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting-field">
                                                        <label>Confirm Password</label>
                                                        <div class="input-eye-field">
                                                            <input type="password" class="form-control" placeholder="Confirm password" id="password_confirmation" name="password_confirmation">
                                                            <div class="account-eye-icon">
                                                                <a href="javascript:void(0)" onclick="showPassword('password_confirmation')"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-form-btn">
                                                    <button type="submit" class="btn btn-primary account-form-update">Update</button>
                                                    <button type="button" class="btn btn-primary account-form-cancel">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-genre" role="tabpanel" aria-labelledby="pills-genre-tab">
                                        <div class="right-side-spacing">
                                            <div class="account-right-side">
                                                <h3>Genre Settings</h3>
                                            </div>

                                            <form method="POST" action="{{route('save.genre')}}">
                                                @csrf
                                                @include('front.partials.alert')
                                                <div class="row new-genre-tabs">
                                                    @foreach($genres as $key=> $genre)
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                            <div class="select-dropdown-text">
                                                                <div class="custom-multiselect">
                                                                    <div class="selectBox"  onclick="showCheckboxes(this)">
                                                                        <select class="form-control" name="genre_id[]">
                                                                                <option value="{{$genre->id}}">{{$genre->name}}</option>

                                                                        </select>
                                                                        <div class="selectWrapper"></div>
                                                                    </div>
                                                                    <div class="selectOptions">
                                                                        @foreach($genre->getSubGenre as $subGenre)
                                                                            <label class="singleOption"> <input type="checkbox" name="sub_genre_id[{{$key}}][]" value="{{$subGenre->id}}" >
                                                                                {{$subGenre->name}}
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    </div>
                                                <div class="account-form-btn">
                                                    <button type="submit" class="btn btn-primary account-form-update">Update</button>
                                                    <button type="button" class="btn btn-primary account-form-cancel">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ACCOUNT SETTING SECTION END -->
@endsection

@push('front-scripts')
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            new WOW().init();
        });
        $(function (){
            let val = localStorage.getItem('tab_key');
            if(val){
                $('.show').removeClass('show')
                $('.active').removeClass('active')
                $('#'+val).addClass('show active')
                $('#'+val+'-tab').addClass('active')
            }

        })
        function setTab(key) {
            localStorage.setItem('tab_key',key)
        }
        function showPassword(id){
            let type = $('#'+id).attr('type');
            if(type == 'password'){
                $('#'+id).attr('type','text');
            }else {
                $('#'+id).attr('type','password');
            }
        }

        // SETTING PROFILE SCRIPT BEGIN
        function loadFile(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        }
        // SETTING PROFILE SCRIPT END

         // MULTIPLE SELECT DROPDOWN SCRIPT BEGIN
         var currentlyExpanded = null;
        function showCheckboxes(selectBox) {
            var options = selectBox.nextElementSibling;
            if (currentlyExpanded && currentlyExpanded !== selectBox) {
                currentlyExpanded.nextElementSibling.style.display = "none";
                currentlyExpanded.classList.remove("expanded");
            }
            if (!selectBox.classList.contains("expanded")) {
                options.style.display = "block";
                selectBox.classList.add("expanded");
                currentlyExpanded = selectBox;
                var checkboxes = options.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(function (checkbox) {
                    checkbox.addEventListener("change", handleCheckboxChange);
                });
            } else {
                options.style.display = "none";
                selectBox.classList.remove("expanded");
                currentlyExpanded = null;
            }
        }
        function handleCheckboxChange() {
            var checkboxes = currentlyExpanded.nextElementSibling.querySelectorAll('input[type="checkbox"]');
            var selectedCheckboxes = Array.from(checkboxes).filter(function (checkbox) {
                return checkbox.checked;  });
            if (selectedCheckboxes.length > 5) {
                this.checked = false;
            }
        }
        // MULTIPLE SELECT DROPDOWN SCRIPT END
    </script>
@endpush