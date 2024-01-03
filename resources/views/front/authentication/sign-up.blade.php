@extends('front.layouts.master', ['headerClass' => 'help-header', 'bodyClass' => 'signin-body-bg'])

@section('title', 'Curator Club - Sign up')

@section('content')
    @php
        $userType = old('user_type', 'Artist');
    @endphp
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="main-curator-scr">
                        <div class="main-smp-div"></div>
                        <div class="main-signin-box">
                            @include('front.partials.alert')
                            <form method="POST" action="{{route('sign-up.data')}}">
                                @csrf
                                <div class="create-account">
                                    <h5>Create an account</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Display name" name="display_name" value="{{old('display_name')}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control" placeholder="Your email" name="email" value="{{old('email')}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="main tiktok-fields">
                                        <div class="card">
                                            <div class="form">
                                                <label><input type="radio" class="input-radio off" name="user_type" value="Artist" {{$userType === "Artist" ? "checked" : ""}}> Become Artist</label>
                                                <label><input type="radio" class="input-radio on" name="user_type" value="Label" {{$userType === "Label" ? "checked" : ""}}> Become Label</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <input type="checkbox" class="checkbox-item" name="term_and_conditions" value="1" {{old('term_and_conditions')?"checked":""}}> By signing you are agree to our <a href="{{route('terms.conditions')}}">terms and condition</a> and <a href="{{route('privacy.policy')}}">privacy policy</a>
                                    </p>
                                </div>
                                <div class="confirmm-btn">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                                <div class="bar-line">
                                    <span>OR</span>
                                </div>
                                <div class="cur-social-icon">
                                    <ul>
                                        <li><a href="https://mail.google.com/" target="_blank" class="google-icon"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.facebook.com/" target="_blank" class="facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://music.apple.com/us/browse" target="_blank" class="apple-icon"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="privacy-content">
                                    <p>Already have an account ? <a href="{{route('login')}}"> Login</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="main-smp-div"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection