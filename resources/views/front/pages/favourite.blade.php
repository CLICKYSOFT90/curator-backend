@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')

@section('content')
    <section class="choose-curators-sec-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 colsm-12 col-12">
                    <div class="favourite-flex">
                        <div class="choose-back-arrow">
                            <h4>My Favorites</h4>
                        </div>
                        <div class="add-all-checkbox">
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="html-fav">
                                    <label for="html-fav">Add All</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row curoator-boxes-listing">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            @foreach($curators as $curator)
                            <div class="main-left-side-curator choose-shadow">
                                <div class="position-item-flex">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                            <div class="img-flex-div">
                                                <div class="curator-round-img">
                                                    <img src="{{$curator->profile_image}}" alt="image" class="img-fluid">
                                                </div>
                                                <div class="curator-round-content">
                                                    <h6>{{ucfirst($curator->display_name)}}</h6>
                                                    @if(!empty($curator->country_id))
                                                        <p>{{ $curator->platform_type }} | {{ucfirst($curator->getCountry->country_name)}}</p>
                                                    @else
                                                        <p>{{ $curator->platform_type }}</p>
                                                    @endif
                                                    <ul>
                                                        <li>Joined Joined {{ \Carbon\Carbon::parse($curator->created_at)->diffForHumans() }}</li>
                                                    </ul>
                                                    <div class="popup-box-curator">
                                                        <a href="javascript:void(0)">Influencer on vacation <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                            <div class="bx-main-flex">
                                                <div class="fr-box-cur">
                                                    <p>Decent Match</p>
                                                    <img src="{{asset('assets/front/images/yl-des.png')}}" alt="image" class="img-fluid">
                                                    <div class="tooltip-box">
                                                        <a href="javascript:void(0)"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            <div class="tooltip-inner-text">
                                                                <span>Welcome to Curators Club</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="fr-box-cur">
                                                    <p>AcceptanceRate</p>
                                                    <span>67%</span>
                                                    <div class="tooltip-box">
                                                        <a href="javascript:void(0)"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            <div class="tooltip-inner-text">
                                                                <span>Welcome to Curators Club</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="fr-box-cur">
                                                    <p>Notable Stats</p>
                                                    <img src="{{asset('assets/front/images/ag-tag.png')}}" alt="image" class="img-fluid">
                                                    <div class="tooltip-box">
                                                        <a href="javascript:void(0)"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            <div class="tooltip-inner-text">
                                                                <span>Welcome to Curators Club</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="genre-msg-bar">
                                        <p>The person will be unavailable until August 14, 2023. Consequently, this profile cannot review the song during this period.</p>
                                    </div>
                                </div>
                                <div class="curator-genre">
                                    <p>Genre</p>
                                    <ul class="genre-mobile-hide">
                                        <li>Rap (Eminem)</li>
                                        <li>Drill (Fivio Foriegn)</li>
                                        <li>Alternative Hip Hop</li>
                                        <li>Gang Rap (Lil Durk) </li>
                                    </ul>

                                </div>
                                <div class="curator-hover-listing">
                                    <div class="cr-hover-content">
                                        <h6>Popular Playlists</h6>
                                        <a href="curator-profile.html">(View all 6)</a>
                                    </div>
                                    <div class="row playlist-mobile-hide">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="shared-slider-box">
                                                <a href="javascript:void(0)">
                                                    <div class="img-hover-chg">
                                                        <div class="img-chg-overlays"></div>
                                                        <div class="hover-text-chg">
                                                            <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                        </div>
                                                        <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                        <img src="{{asset('assets/front/images/sh1.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                </a>
                                                <h6>Best Hip-Hop 2020</h6>
                                                <ul>
                                                    <li>Followers:</li>
                                                    <li>16.5k</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="shared-slider-box">
                                                <a href="javascript:void(0)">
                                                    <div class="img-hover-chg">
                                                        <div class="img-chg-overlays"></div>
                                                        <div class="hover-text-chg">
                                                            <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                        </div>
                                                        <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                        <img src="{{asset('assets/front/images/sh2.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                </a>
                                                <h6>Lofi Hip Hop </h6>
                                                <ul>
                                                    <li>Followers:</li>
                                                    <li>16.5k</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="shared-slider-box">
                                                <a href="javascript:void(0)">
                                                    <div class="img-hover-chg">
                                                        <div class="img-chg-overlays"></div>
                                                        <div class="hover-text-chg">
                                                            <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                        </div>
                                                        <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                        <img src="{{asset('assets/front/images/sh22.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                </a>
                                                <h6>Global Hip-hop 2022</h6>
                                                <ul>
                                                    <li>Followers:</li>
                                                    <li>16.5k</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="playlist-mobile-show playlist-mobile-show-spc">
                                        <div class="slider responsive-playlist-mobile-show">
                                            <div>
                                                <div class="shared-slider-box">
                                                    <a href="javascript:void(0)">
                                                        <div class="img-hover-chg">
                                                            <div class="img-chg-overlays"></div>
                                                            <div class="hover-text-chg">
                                                                <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                            </div>
                                                            <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                            <img src="{{asset('assets/front/images/sh1.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <h6>Best Hip-Hop 2020</h6>
                                                    <ul>
                                                        <li>Followers:</li>
                                                        <li>16.5k</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="shared-slider-box">
                                                    <a href="javascript:void(0)">
                                                        <div class="img-hover-chg">
                                                            <div class="img-chg-overlays"></div>
                                                            <div class="hover-text-chg">
                                                                <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                            </div>
                                                            <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                            <img src="{{asset('assets/front/images/sh2.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <h6>Lofi Hip Hop </h6>
                                                    <ul>
                                                        <li>Followers:</li>
                                                        <li>16.5k</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="shared-slider-box">
                                                    <a href="javascript:void(0)">
                                                        <div class="img-hover-chg">
                                                            <div class="img-chg-overlays"></div>
                                                            <div class="hover-text-chg">
                                                                <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                            </div>
                                                            <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                            <img src="{{asset('assets/front/images/sh22.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <h6>Global Hip-hop 2022</h6>
                                                    <ul>
                                                        <li>Followers:</li>
                                                        <li>16.5k</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selection-f-box form-group">
                                    <div class="selection-f-input">
                                        <p><input type="checkbox" id="html-cur1">
                                            <label for="html-cur1"></label>
                                            2 Credits</p>
                                    </div>
                                    <div class="selection-f-input">
                                        <p>Add to favorites <i class="fa fa-heart" aria-hidden="true"></i></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            @foreach($influencers as $influencer)
                            <div class="main-left-side-curator choose-shadow">
                                <div class="position-item-flex">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                            <div class="img-flex-div">
                                                <div class="curator-round-img">
                                                    <img src="{{$influencer->profile_image}}" alt="image" class="img-fluid">
                                                </div>
                                                <div class="curator-round-content">
                                                    <h6>{{ucfirst($influencer->display_name)}}</h6>
                                                    @if(!empty($influencer->country_id))
                                                        <p>{{ $influencer->platform_type }} | {{ucfirst($influencer->getCountry->country_name)}}</p>
                                                    @else
                                                        <p>{{ $influencer->platform_type }}</p>
                                                    @endif
                                                    <ul>
                                                        <li>Joined Joined {{ \Carbon\Carbon::parse($influencer->created_at)->diffForHumans() }}</li>
                                                    </ul>
                                                    <div class="popup-box-curator">
                                                        <a href="javascript:void(0)">Influencer on vacation <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                            <div class="bx-main-flex">
                                                <div class="fr-box-cur">
                                                    <p>Decent Match</p>
                                                    <img src="{{asset('assets/front/images/yl-des.png')}}" alt="image" class="img-fluid">
                                                    <div class="tooltip-box">
                                                        <a href="javascript:void(0)"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            <div class="tooltip-inner-text">
                                                                <span>Welcome to Curators Club</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="fr-box-cur">
                                                    <p>AcceptanceRate</p>
                                                    <span>67%</span>
                                                    <div class="tooltip-box">
                                                        <a href="javascript:void(0)"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            <div class="tooltip-inner-text">
                                                                <span>Welcome to Curators Club</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="fr-box-cur">
                                                    <p>Notable Stats</p>
                                                    <img src="{{asset('assets/front/images/ag-tag.png')}}" alt="image" class="img-fluid">
                                                    <div class="tooltip-box">
                                                        <a href="javascript:void(0)"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            <div class="tooltip-inner-text">
                                                                <span>Welcome to Curators Club</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="genre-msg-bar">
                                        <p>The person will be unavailable until August 14, 2023. Consequently, this profile cannot review the song during this period.</p>
                                    </div>
                                </div>
                                <div class="curator-genre">
                                    <p>Genre</p>
                                    <ul class="genre-mobile-hide">
                                        <li>Rap (Eminem)</li>
                                        <li>Drill (Fivio Foriegn)</li>
                                        <li>Alternative Hip Hop</li>
                                        <li>Gang Rap (Lil Durk) </li>
                                    </ul>

                                </div>
                                <div class="curator-hover-listing">
                                    <div class="cr-hover-content">
                                        <h6>Popular Playlists</h6>
                                        <a href="curator-profile.html">(View all 6)</a>
                                    </div>
                                    <div class="row playlist-mobile-hide">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="shared-slider-box">
                                                <a href="javascript:void(0)">
                                                    <div class="img-hover-chg">
                                                        <div class="img-chg-overlays"></div>
                                                        <div class="hover-text-chg">
                                                            <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                        </div>
                                                        <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                        <img src="{{asset('assets/front/images/sh1.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                </a>
                                                <h6>Best Hip-Hop 2020</h6>
                                                <ul>
                                                    <li>Followers:</li>
                                                    <li>16.5k</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="shared-slider-box">
                                                <a href="javascript:void(0)">
                                                    <div class="img-hover-chg">
                                                        <div class="img-chg-overlays"></div>
                                                        <div class="hover-text-chg">
                                                            <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                        </div>
                                                        <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                        <img src="{{asset('assets/front/images/sh2.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                </a>
                                                <h6>Lofi Hip Hop </h6>
                                                <ul>
                                                    <li>Followers:</li>
                                                    <li>16.5k</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="shared-slider-box">
                                                <a href="javascript:void(0)">
                                                    <div class="img-hover-chg">
                                                        <div class="img-chg-overlays"></div>
                                                        <div class="hover-text-chg">
                                                            <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                        </div>
                                                        <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                        <img src="{{asset('assets/front/images/sh22.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                </a>
                                                <h6>Global Hip-hop 2022</h6>
                                                <ul>
                                                    <li>Followers:</li>
                                                    <li>16.5k</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="playlist-mobile-show playlist-mobile-show-spc">
                                        <div class="slider responsive-playlist-mobile-show">
                                            <div>
                                                <div class="shared-slider-box">
                                                    <a href="javascript:void(0)">
                                                        <div class="img-hover-chg">
                                                            <div class="img-chg-overlays"></div>
                                                            <div class="hover-text-chg">
                                                                <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                            </div>
                                                            <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                            <img src="{{asset('assets/front/images/sh1.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <h6>Best Hip-Hop 2020</h6>
                                                    <ul>
                                                        <li>Followers:</li>
                                                        <li>16.5k</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="shared-slider-box">
                                                    <a href="javascript:void(0)">
                                                        <div class="img-hover-chg">
                                                            <div class="img-chg-overlays"></div>
                                                            <div class="hover-text-chg">
                                                                <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                            </div>
                                                            <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                            <img src="{{asset('assets/front/images/sh2.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <h6>Lofi Hip Hop </h6>
                                                    <ul>
                                                        <li>Followers:</li>
                                                        <li>16.5k</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="shared-slider-box">
                                                    <a href="javascript:void(0)">
                                                        <div class="img-hover-chg">
                                                            <div class="img-chg-overlays"></div>
                                                            <div class="hover-text-chg">
                                                                <p><i class="fa fa-music" aria-hidden="true"></i> Tracks:91 <span>(View More)</span></p>
                                                            </div>
                                                            <div class="play-icon-img"><span><i class="fa fa-play" aria-hidden="true"></i></span></div>
                                                            <img src="{{asset('assets/front/images/sh22.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                    </a>
                                                    <h6>Global Hip-hop 2022</h6>
                                                    <ul>
                                                        <li>Followers:</li>
                                                        <li>16.5k</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selection-f-box form-group">
                                    <div class="selection-f-input">
                                        <p><input type="checkbox" id="html-cur1">
                                            <label for="html-cur1"></label>
                                            2 Credits</p>
                                    </div>
                                    <div class="selection-f-input">
                                        <p>Add to favorites <i class="fa fa-heart" aria-hidden="true"></i></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

        // SLIDE UP AND DOWN FIELDS SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function() {
            const exoClick1 = document.querySelector(".exo-click1");
            const exoClick = document.querySelector(".exo-click");
            const filterRow = document.querySelector(".filter-row");
            const filterRowNext = document.querySelector(".filter-row-next");
            exoClick1.addEventListener("click", function() {
                filterRowNext.style.transform = "translateY(-54px)";
                filterRow.style.transform = "translateY(-100%)";
            });
            exoClick.addEventListener("click", function() {
                filterRow.style.transform = "translateY(0)";
                filterRowNext.style.transform = "translateY(100%)";
            });
        });
        // SLIDE UP AND DOWN FIELDS SCRIPT END
        // MOBILE SLIDER DECENT MATCH SCRIPT BEGIN
        $('.responsive-mobile-box').slick({
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
        // MOBILE SLIDER DECENT MATCH SCRIPT END
        // MOBILE SLIDER IMAGES SCRIPT END
        $('.responsive-playlist-mobile-show').slick({
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
        // MOBILE SLIDER IMAGES SCRIPT END
    </script>
@endpush