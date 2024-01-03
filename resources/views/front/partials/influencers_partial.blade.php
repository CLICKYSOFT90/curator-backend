@if(count($influencers) > 0 )
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
@else
    <p style="
    margin-left: 50px;
">No record found</p>
@endif
