@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Artists')

@section('content')
    <!-- HOW IT WORKS CURATOR BANNER BEGIN -->
    <section class="artist-welcome-banner-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="artist-welcome-content">
                        <h3>Discover, Collaborate, and Earn by  <span>Connecting Artists</span></h3>
                        <p>Explore, Review, and Collaborate With Talent: Join a Vibrant <span>Community of Music Artists.</span></p>
                        <div class="artist-welcome-btns">
                            @if(!empty(auth()->user()))
                                <a href="{{route('user.select.submission')}}" class="btn btn-primary welcome-scr-submit">SUBMIT A SONG</a>
                            @else
                                <a href="{{route('login')}}" class="btn btn-primary welcome-scr-submit">SUBMIT A SONG</a>
                            @endif
                            <a href="javascript:void(0)" class="btn btn-primary welcome-scr-refer">Refer a Friend</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="headphone-img">
                        <img src="{{asset('assets/front/images/list-artist.png')}}" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW IT WORKS CURATOR BANNER END -->
    <!-- LIST OF ARTIST PAGE SECTION BEGIN   -->
    <section class="list-of-artists-sec">
        <div class="container-fluid">
            <div class="row filter-row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="main-artist-flex">
                        <div class="main-artist-dropdowns">
                            <select class="form-control">
                                <option selected>Country</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>CANADA</option>
                            </select>
                        </div>
                        <div class="main-artist-dropdowns">
                            <select class="form-control">
                                <option selected>Genres</option>
                                <option>Genres</option>
                                <option>Genres</option>
                                <option>Genres</option>
                            </select>
                        </div>
                        <div class="main-artist-dropdowns">
                            <select class="form-control">
                                <option selected>Other</option>
                                <option>Other</option>
                                <option>Other</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <div class="main-artist-searcbox">
                        <input type="text" class="form-control" placeholder="Search by artist's name"></input>
                        <div class="artist-searchbox-icon">
                            <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row artist-mobile-hide-slider">
                @foreach($artists as $artist)
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <a href="javascript:void(0)">
                            <div class="lb-box-inner">
                                <img src="{{asset('/assets/front/images/profile-images/'.$artist->profile_image)}}" alt="image" class="img-fluid shape-img">
                                <h6>{{ucfirst($artist->display_name)}}</h6>
                                @if(!empty($artist->country_id))
                                    <span><img src="{{asset('assets/front/images/pr1.png')}}" alt="image" class="img-fluid"> {{ucfirst($artist->getCountry->country_name)}}</span>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="artist-mobile-show-slider">
                <div class="slider responsive-artist-profile-res">
                    @foreach($artists as $artist)
                        <div>
                            <a href="javascript:void(0)">
                                <div class="lb-box-inner">
                                    <img src="{{asset('/assets/front/images/profile-images/'.$artist->profile_image)}}" alt="image" class="img-fluid shape-img">
                                    <h6>{{ucfirst($artist->display_name)}}</h6>
                                    @if(!empty($artist->country_id))
                                        <span><img src="{{asset('assets/front/images/pr1.png')}}" alt="image" class="img-fluid"> {{ucfirst($artist->getCountry->country_name)}}</span>
                                    @endif
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- LIST OF ARTIST PAGE SECTION END -->
@endsection

@push('front-scripts')
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script>
        $(function (){
            new WOW().init();
        });

        /*ACCORDIAN SCRIPT BEGIN*/
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/

        // ARTIST MOBILE SLIDER SCRIPT BEGIN
        $('.responsive-artist-profile-res').slick({
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        // ARTIST MOBILE SLIDER SCRIPT END
    </script>
@endpush