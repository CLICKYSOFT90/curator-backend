@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')

@section('content')
    <!-- HOW IT WORKS CURATOR BANNER BEGIN -->
    <section class="artist-welcome-banner-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="artist-welcome-content">
                        <h3>Discover and Collaborate with  <span>Curators and Influencers</span></h3>
                        <p>Connect with Talented Curators and Influencers to Review and <span>Collaborate on Your Music.</span></p>
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
                        <img src="{{asset('assets/front/images/list-curator.jpg')}}" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW IT WORKS CURATOR BANNER END -->
    <!-- LIST OF ARTIST PAGE SECTION BEGIN   -->
    <section class="list-of-artists-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="tab-slider-curator">
                        <div id="progressCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators d-flex justify-content-around justify-content-xl-center">
                                <li data-target="#progressCarousel" data-slide-to="0" class="exo exo-click font-weight-bold mx-5 active">
                                    Curators
                                    <div class="progress-outer">
                                        <div class="progress">
                                        </div>
                                    </div>
                                </li>
                                <li data-target="#progressCarousel" data-slide-to="1" class="exo exo-click1 font-weight-bold mx-5">
                                    Influencers
                                    <div class="progress-outer">
                                        <div class="progress">
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <div class="filter-row-overflow">
                                <form id="curator-form">
                                <div class="row filter-row">
                                        <input type="hidden" name="type" id="type" value="curator">
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                            <div class="main-artist-flex">
                                                <div class="main-artist-dropdowns">
                                                    <select class="form-control"  name="curator_type" onchange="searchUser('curator-form','curator')">
                                                        <option value="" selected>Curator Type</option>
                                                        <option value="Twitter">Twitter</option>
                                                        <option value="Spotify Playlist">Spotify Playlist</option>
                                                        <option value="Youtuber">Youtuber</option>
                                                        <option value="Soundcloud Repost">Soundcloud Repost</option>
                                                        <option value="Blogs">Blogs</option>
                                                    </select>
                                                </div>
                                                <div class="main-artist-dropdowns">
                                                    <select class="form-control" name="genre_id" onchange="searchUser('curator-form','curator')">
                                                        <option value="" selected>Genres</option>
                                                        @foreach($genres as $genre)
                                                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="main-artist-dropdowns">
                                                    <select class="form-control" name="other" onchange="searchUser('curator-form','curator')">
                                                        <option value="" selected>Other</option>
                                                        <option value="A to Z">A to Z</option>
                                                        <option value="Z to A">Z to A</option>
{{--                                                        <option value="Best match">Best match</option>--}}
{{--                                                        <option value="Overall rating">Overall rating</option>--}}
{{--                                                        <option value="Recently signed up">Recently signed up</option>--}}
{{--                                                        <option value="Oldest joined">Oldest joined</option>--}}
{{--                                                        <option value="Elite Program">Elite Program Members only</option>--}}
{{--                                                        <option value="Curators with prior approvals">Curators with prior approvals</option>--}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <div class="main-artist-searcbox">
                                            <input type="text" class="form-control" onkeyup="searchUser('curator-form','curator')" name="name" placeholder="Search by curator or playlist name"></input>
                                            <div class="artist-searchbox-icon">
                                                <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                                </form>
                                <form id="influencers-form">
                                <div class="row filter-row-next">
                                    <input type="hidden" name="type" id="type" value="influencers">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <div class="main-artist-flex">
                                            <div class="main-artist-dropdowns">
                                                <select class="form-control" name="curator_type" onchange="searchUser('influencers-form','influencers')">
                                                    <option value="" selected>Influencer Type</option>
                                                    <option value="Tiktok">Tiktok</option>
                                                    <option value="Instagram Editor">Instagram</option>
                                                    <option value="Both">Both</option>
                                                </select>
                                            </div>
                                            <div class="main-artist-dropdowns">
                                                <select class="form-control" name="other" onchange="searchUser('influencers-form','influencers')" >
                                                    <option value="" selected>Other</option>
                                                    <option value="A to Z">A to Z</option>
                                                    <option value="Z to A">Z to A</option>
{{--                                                    <option value="Best match">Best match</option>--}}
{{--                                                    <option value="Overall rating">Overall rating</option>--}}
{{--                                                    <option value="Recently signed up">Recently signed up</option>--}}
{{--                                                    <option value="Oldest joined">Oldest joined</option>--}}
{{--                                                    <option value="Elite Program">Elite Program Members only</option>--}}
{{--                                                    <option value="Curators with prior approvals">Curators with prior approvals</option>--}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="main-artist-searcbox">
                                            <input type="text" class="form-control" onkeyup="searchUser('influencers-form','influencers')" name="name" placeholder="Search by influencers or playlist name"></input>
                                            <div class="artist-searchbox-icon">
                                                <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="main-side-curator-list">
                                                <div class="row curator--partial">
                                                    @foreach($curators as $curator)
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                            <div class="main-left-side-curator">
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
                                                                                <span>Joined {{ \Carbon\Carbon::parse($curator->created_at)->diffForHumans() }}</span>
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
                                                                <div class="curator-genre">
                                                                    <p>Genre</p>
                                                                    <ul class="genre-mobile-hide">
                                                                        <li>Rap (Eminem)</li>
                                                                        <li>Drill (Fivio Foriegn)</li>
                                                                        <li>Alternative Hip Hop</li>
                                                                        <li>Gang Rap (Lil Durk)</li>
                                                                    </ul>

                                                                </div>
                                                                <div class="curator-hover-listing">
                                                                    <div class="cr-hover-content">
                                                                        <h6>Popular Playlists</h6>
                                                                        <a href="javascript:void(0)">(View all 6)</a>
                                                                    </div>
                                                                    <div class="row playlist-mobile-hide">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
                                                                    <div class="playlist-mobile-show">
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
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="main-side-curator-list">
                                                <div class="row influencers--partial">
                                                    @foreach($influencers as $influencer)
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                            <div class="main-left-side-curator">
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
                                                                                <span>Joined {{ \Carbon\Carbon::parse($influencer->created_at)->diffForHumans() }}</span>
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
                                                                    <div class="view-all-flex">
                                                                        <div class="cr-hover-content">
                                                                            <h6>Recent Videos</h6>
                                                                            <a href="javascript:void(0)">(View all 196)</a>
                                                                        </div>
                                                                        <div class="view-all-listing-content">
                                                                            <ul>
                                                                                <li><img src="{{asset('assets/front/images/tiktok-icon-image.png')}}" alt="image" class="img-fluid"> 1.5M</li>
                                                                                <li><img src="{{asset('assets/front/images/insta-icon-img.png')}}" alt="image" class="img-fluid"> 950K</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row playlist-mobile-hide">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                            <div class="khaby-shared-slider-box">
                                                                                <a href="javascript:void(0)">
                                                                                    <div class="khaby-video-slide">
                                                                                        <div class="vid-chg-overlays"></div>
                                                                                        <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                                        <div class="video-btn-icon">
                                                                                            <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                            <div class="khaby-shared-slider-box">
                                                                                <a href="javascript:void(0)">
                                                                                    <div class="khaby-video-slide">
                                                                                        <div class="vid-chg-overlays"></div>
                                                                                        <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                                        <div class="video-btn-icon">
                                                                                            <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                                            <div class="khaby-shared-slider-box">
                                                                                <a href="javascript:void(0)">
                                                                                    <div class="khaby-video-slide">
                                                                                        <div class="vid-chg-overlays"></div>
                                                                                        <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                                        <div class="video-btn-icon">
                                                                                            <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="playlist-mobile-show">
                                                                        <div class="slider responsive-playlist-mobile-show">
                                                                            <div>
                                                                                <div class="khaby-shared-slider-box">
                                                                                    <a href="javascript:void(0)">
                                                                                        <div class="khaby-video-slide">
                                                                                            <div class="vid-chg-overlays"></div>
                                                                                            <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                                            <div class="video-btn-icon">
                                                                                                <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="khaby-shared-slider-box">
                                                                                    <a href="javascript:void(0)">
                                                                                        <div class="khaby-video-slide">
                                                                                            <div class="vid-chg-overlays"></div>
                                                                                            <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                                            <div class="video-btn-icon">
                                                                                                <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="khaby-shared-slider-box">
                                                                                    <a href="javascript:void(0)">
                                                                                        <div class="khaby-video-slide">
                                                                                            <div class="vid-chg-overlays"></div>
                                                                                            <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                                            <div class="video-btn-icon">
                                                                                                <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
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
        function searchUser(id,type) {
         let data =  $('#'+id).serialize();
            axios.get("/search-curators?"+data).then(function (res) {
                $('.'+type+'--partial').empty()
                $('.'+type+'--partial').append(res.data)

            }).catch(function (error) {
                console.log('error',error);
            });
        }
    </script>
@endpush