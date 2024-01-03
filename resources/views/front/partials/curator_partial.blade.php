@if(count($curators) > 0)
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
@else
    <p style="
    margin-left: 50px;
">No record found</p>
@endif
