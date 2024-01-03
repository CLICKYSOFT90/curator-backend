@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - Welcome')

@section('content')
    <!-- ARTIST WELCOME BANNER SECTION BEGIN -->
    <section class="artist-welcome-banner-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="artist-welcome-content">
                        <h3>Welcome, {{auth()->user()->display_name}}.</h3>
                        <p>Looking to get your music heard? Start a new campaign or refer a friend to Curator Club. We'll help you reach the right people and make your music dreams a reality.</p>
                        <div class="artist-welcome-btns">
                            <a href="{{route('user.select.submission')}}" class="btn btn-primary welcome-scr-submit">SUBMIT A SONG</a>
                            <a href="javascript:void(0)" class="btn btn-primary welcome-scr-refer">Refer a Friend</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="headphone-img">
                        <img src="{{asset('assets/front/images/welcome-banner-ds.png')}}" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ARTIST WELCOME BANNER SECTION END -->
    <!-- SOME CURATORS SECTION BEGIN -->
    <section class="some-curator-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="some-curator-content">
                        <h3>Here are some curators who we think <span>would be a good fit for your first campaign</span></h3>
                        <p>We recommend these curators for your first campaign because they have a strong following of <span>listeners who are interested in your genre of music.</span></p>
                    </div>
                </div>
            </div>
            <div class="mobile-hide-across">
                <div class="row new-top-cur-row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top1.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@alannadrgn</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 187.9k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top2.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@whoisbennyyyyyyy</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 103.2k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top3.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>gaby_cosplay</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 872.1k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top4.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@notjameslunet</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 2.5k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top5.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@alannadrgn</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 187.9k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row new-top-cur-row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top6.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@alannadrgn</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 187.9k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top7.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@whoisbennyyyyyyy</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 103.2k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top8.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>gaby_cosplay</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 872.1k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top9.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@notjameslunet</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 2.5k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top10.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@alannadrgn</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 187.9k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-show-across">
                <div class="slider top-curator-mobile-responsive">
                    <div>
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top1.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@alannadrgn</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 187.9k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top2.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@whoisbennyyyyyyy</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 103.2k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top3.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>gaby_cosplay</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 872.1k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top4.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@notjameslunet</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 2.5k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="top-curator-img">
                            <a href="curator-profile.html">
                                <div class="top-curator-hover">
                                    <img src="{{asset('assets/front/images/top5.png')}}" alt="image" class="img-fluid">
                                </div>
                                <span>@alannadrgn</span>
                                <ul>
                                    <li>TikTok <span class="slash-icon">|</span> 187.9k fans</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SOME CURATORS SECTION END -->
    <!-- RECENTLY SHARED SECTION BEGIN -->
    <section class="recently-shared-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="top-curator-content">
                        <h2>Recently Shared</h2>
                    </div>
                </div>
            </div>
            <div class="recently-shared-hide-mobile">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>01</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent1.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Of The Sun - Pattern Rebirth</h6>
                                        <p>Rockear.co (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>02</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent2.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Huge Shark - Everything</h6>
                                        <p>Zone Nights (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>03</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>JT Foley - manslaughter</h6>
                                        <p>Ava Cornish</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>04</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent4.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>93feetofsmoke - conversations</h6>
                                        <p>Girl At The Rock Shows (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>05</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent5.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Cristina Polanco - Puede Ser</h6>
                                        <p>R+ (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>06</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent6.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Of The Sun - Pattern Rebirth</h6>
                                        <p>Rockear.co (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>07</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent7.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Huge Shark - Everything</h6>
                                        <p>Zone Nights (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>08</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent8.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>JT Foley - manslaughter</h6>
                                        <p>Ava Cornish</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>09</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent9.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>93feetofsmoke - conversations</h6>
                                        <p>Girl At The Rock Shows (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>10</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent10.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Cristina Polanco - Puede Ser</h6>
                                        <p>R+ (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>11</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent11.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Of The Sun - Pattern Rebirth</h6>
                                        <p>Rockear.co (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>12</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent12.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Huge Shark - Everything</h6>
                                        <p>Zone Nights (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>13</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent13.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>JT Foley - manslaughter</h6>
                                        <p>Ava Cornish</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>14</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent14.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>93feetofsmoke - conversations</h6>
                                        <p>Girl At The Rock Shows (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>15</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent15.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Cristina Polanco - Puede Ser</h6>
                                        <p>R+ (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recently-hide-show-mobile">
                <div class="slider recently-show-mobile-responsive">
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>01</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent1.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Of The Sun - Pattern Rebirth</h6>
                                        <p>Rockear.co (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>02</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent2.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Huge Shark - Everything</h6>
                                        <p>Zone Nights (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>03</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>JT Foley - manslaughter</h6>
                                        <p>Ava Cornish</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>04</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent4.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>93feetofsmoke - conversations</h6>
                                        <p>Girl At The Rock Shows (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>05</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent5.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Cristina Polanco - Puede Ser</h6>
                                        <p>R+ (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>06</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent6.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Of The Sun - Pattern Rebirth</h6>
                                        <p>Rockear.co (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>07</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent7.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>Huge Shark - Everything</h6>
                                        <p>Zone Nights (an hour ago)</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0)">
                            <div class="shared-flex">
                                <div class="count-value">
                                    <span>08</span>
                                </div>
                                <div class="counter-main-flex">
                                    <div class="counter-inner-img">
                                        <img src="{{asset('assets/front/images/recent8.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="recent-shared-text">
                                        <h6>JT Foley - manslaughter</h6>
                                        <p>Ava Cornish</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="top-curator-btn">
                <a href="javascript:void(0)" class="btn btn-primary">VIEW ALL</a>
            </div>
        </div>
    </section>
    <!-- RECENTLY SHARED SECTION END -->

    <!-- FAQ SECTION BEGIN -->
    @include('front.partials.faq')
    <!-- FAQ SECTION END -->
@endsection