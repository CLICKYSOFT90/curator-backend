@extends('front.layouts.master', ['headerClass' => 'help-header', 'bodyClass' => 'signin-body-bg'])

@section('title', 'Curator Club - Forgot Password')

@section('content')
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="main-curator-scr">
                        <div class="main-smp-div"></div>
                        <div class="main-signin-box">
                            @include('front.partials.alert')
                            <form method="POST" action="{{route('forgot.password.data')}}">
                                @csrf
                                <div class="create-account">
                                    <h5>Forgot Password</h5>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                                </div>
                                <div class="confirmm-btn">
                                    <button type="submit" class="btn btn-primary">Send Link</button>
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