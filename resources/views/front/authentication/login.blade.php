@extends('front.layouts.master', ['headerClass' => 'help-header', 'bodyClass' => 'signin-body-bg'])

@section('title', 'Curator Club - Login')

@section('content')
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="main-curator-scr">
                        <div class="main-smp-div"></div>
                        <div class="main-signin-box">
                            @include('front.partials.alert')
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="create-account">
                                    <h5>Sign in your account</h5>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                                </div>
                                <div class="confirmm-btn">
                                    <button type="submit" class="btn btn-primary">LOGIN</button>
                                </div>
                                <div class="forgot-pass">
                                    <a href="{{route('forgot.password')}}">Forgot Password?</a>
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
                                    <p>Don't' have an account ? <a href="{{route('sign-up')}}"> Sign up</a></p>
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