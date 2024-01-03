@extends('front.layouts.master', ['headerClass' => 'help-header', 'bodyClass' => 'signin-body-bg'])

@section('title', 'Curator Club - Reset Password')

@section('content')
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="main-curator-scr">
                        <div class="main-smp-div"></div>
                        <div class="main-signin-box">
                            @include('front.partials.alert')
                            <form method="POST" action="{{route('reset.password.data', $user->verification_code)}}">
                                @csrf
                                <div class="create-account">
                                    <h5>Reset Password</h5>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                <div class="confirmm-btn">
                                    <button type="submit" class="btn btn-primary">Reset</button>
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