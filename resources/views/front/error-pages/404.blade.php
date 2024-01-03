@extends('front.layouts.master', ['headerClass' => 'errorpage-header'])

@section('title', 'Curator Club - Error')

@section('content')
    <section class="error-banner-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <img src="{{asset('assets/front/images/error-banner.png')}}" alt="image" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <div class="error-page-content">
                        <h1>ERROR</h1>
                        <span class="number-span">404</span>
                        <h6>OOPS..SORRY WE COULDN’T FIND YOUR PAGE</h6>
                        <a href="{{route('home')}}">Back Home</a>
                    </div>
                    <div class="social-icons-error">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection