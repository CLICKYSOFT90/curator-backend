@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - Label Profile')

@section('content')
    <!-- CURATOR BANNER SECTION BEGIN -->
    <section class="curator-profile-banner label-pg-banner" style="background-image: url('assets/images/cover-images/{{$user->cover_image}}');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="curator-banner-flex curator-label-flex">
                        <div class="banner-circle-img border-line-circle">
                            <img src="{{$user->profile_image}}" alt="image" class="img-fluid">
                        </div>
                        <div class="banner-circle-content">
                            <h2>{{$user->display_name}}</h2>
                            <div class="main-flag-flex">
                                <div class="flag-flex">
{{--                                    <img src="{{asset('assets/front/images/us-flag.png')}}" alt="image" class="img-fluid">--}}
                                    <p>{{(!empty($user->getCountry)) ? $user->getCountry->country_name : 'Country'}}</p>
                                </div>
                                <div class="user-flex-icon">
                                    <div class="flex-user-icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex-user-content">
                                        <span>Member Since</span>
                                        <p>{{date('F Y',strtotime($user->created_at))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bt-style-box"></div>
    </section>
    <!-- CURATOR BANNER SECTION END -->
    <!-- ABOUT NETWORK SECTION BEGIN -->
    <section class="about-network-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="left-sec">
                        <div class="left-sec-box">
                            <h3>About Label</h3>
                            <p>{{$user->about_me}}</p>
                            <div class="left-social-link">
                                <ul>
                                    @if(!empty($user->facebook_link))
                                        <li><a target="_blank" href="{{$user->facebook_link}}"><img src="{{asset('assets/front/images/f1.png')}}" alt="image" class="img-fluid"></a></li>
                                    @endif
                                    @if(!empty($user->soundcloud_link))
                                        <li><a target="_blank" href="{{$user->soundcloud_link}}"><img src="{{asset('assets/front/images/f2.png')}}" alt="image" class="img-fluid"></a></li>
                                    @endif
                                    @if(!empty($user->twitter_link))
                                        <li><a target="_blank" href="{{$user->twitter_link}}"><img src="{{asset('assets/front/images/f3.png')}}" alt="image" class="img-fluid"></a></li>
                                    @endif
                                    @if(!empty($user->instagram_link))
                                        <li><a target="_blank" href="{{$user->instagram_link}}"><img src="{{asset('assets/front/images/f4.png')}}" alt="image" class="img-fluid"></a></li>
                                    @endif
                                    @if(!empty($user->youtube_link))
                                        <li><a target="_blank" href="{{$user->youtube_link}}"><img src="{{asset('assets/front/images/f5.png')}}" alt="image" class="img-fluid"></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="label-playlist-slider">
                            <div class="label-playlist-flex">
                                <div class="label-playlist-content">
                                    <h3>Artists</h3>
                                </div>
                                <div class="label-view-all">
                                    <a href="javascript:void(0)">(View all)</a>
                                </div>
                            </div>
                            <div class="artist-track-mobile-hide">
                                <div class="row">
                                    @forelse($artists as $val)
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="lb-box-inner">
                                                    <img src="{{asset('assets/front/images/profile-images/'.$val->profile_image)}}" alt="image" class="img-fluid shape-img">
                                                    <h6>{{$val->full_name}}</h6>
                                                    <span>{{(!empty($val->getCountry)) ? $val->getCountry->country_name : 'Country'}}</span>
                                                </div>
                                            </a>
                                        </div>
                                    @empty
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                            <div class="breams-box">
                                                <p class="text-danger">No artist found*</p>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="artist-track-mobile-show">
                                <div class="slider label-mobile-slider-responsive">
                                    @forelse($artists as $val)
                                        <div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                                <a href="javascript:void(0)">
                                                    <div class="lb-box-inner">
                                                        <img src="{{asset('assets/front/images/profile-images/'.$val->profile_image)}}" alt="image" class="img-fluid shape-img">
                                                        <h6>{{$val->full_name}}</h6>
                                                        <span>{{(!empty($val->getCountry)) ? $val->getCountry->country_name : 'Country'}}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @empty
                                        <div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="breams-box">
                                                    <p class="text-danger">No artist found*</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="favorites-box">
                        <div class="favorite-top-bar">
                            <div class="favorite-top-heading">
                                <h3>Favorites</h3>
                            </div>
                            <div class="favorite-top-link">
                                <a href="javascript:void(0)">View all</a>
                            </div>
                        </div>
                        <div class="artist-track-mobile-hide">
                            <div class="row favorite-row-box">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa1.png')}}" alt="images" class="img-fluid">
                                            <p>@alannadrgn</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa2.png')}}" alt="images" class="img-fluid">
                                            <p>@whoisbennyyyyyyy</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa3.png')}}" alt="images" class="img-fluid">
                                            <p>gaby_cosplay</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa4.png')}}" alt="images" class="img-fluid">
                                            <p>@notjameslunet</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa5.png')}}" alt="images" class="img-fluid">
                                            <p>@jessecase</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa6.png')}}" alt="images" class="img-fluid">
                                            <p>@purplemenio</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="artist-track-mobile-show">
                            <div class="slider label-favourite-slider-responsive">
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa1.png')}}" alt="images" class="img-fluid">
                                            <p>@alannadrgn</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa2.png')}}" alt="images" class="img-fluid">
                                            <p>@whoisbennyyyyyyy</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa3.png')}}" alt="images" class="img-fluid">
                                            <p>gaby_cosplay</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa4.png')}}" alt="images" class="img-fluid">
                                            <p>@notjameslunet</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa5.png')}}" alt="images" class="img-fluid">
                                            <p>@jessecase</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="favorite-boxes-cont">
                                            <img src="{{asset('assets/front/images/fa6.png')}}" alt="images" class="img-fluid">
                                            <p>@purplemenio</p>
                                            <span>TikTok | 187.9k fans</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="favorites-box">
                        <div class="favorite-top-bar">
                            <div class="favorite-top-heading">
                                <h3>Tracks</h3>
                            </div>
                            <div class="favorite-top-link">
                                <a href="javascript:void(0)">View all</a>
                            </div>
                        </div>
                        <div class="artist-track-mobile-hide">
                            <div class="row favorite-row-box">
                                @forelse($songs as $song)
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="images" class="img-fluid">
                                                <p>{{$song->track_title}}</p>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="breams-box">
                                            <p class="text-danger">No track found*</p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="artist-track-mobile-show">
                            <div class="slider label-track-slider-responsive">
                                @forelse($songs as $song)
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="images" class="img-fluid">
                                                <p>{{$song->track_title}}</p>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <div>
                                        <div class="breams-box">
                                            <p class="text-danger">No track found*</p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT NETWORK SECTION END -->
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
        $('.label-mobile-slider-responsive').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
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
        // ARTIST MOBILE SLIDER SCRIPT BEGIN
        $('.label-favourite-slider-responsive').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
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
        // LABEL MOBILE SLIDER SCRIPT BEGIN
        $('.label-track-slider-responsive').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
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
        // LABEL MOBILE SLIDER SCRIPT END
    </script>
@endpush