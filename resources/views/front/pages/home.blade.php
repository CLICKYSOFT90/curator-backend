@extends('front.layouts.master', ['fullFooter' => true])

@section('title', 'Curator Club - Home')

@section('content')
    <!-- BANNER SECTION BEGIN -->
    <section class="banner-sec-img">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-9 col-12">
                    <div class="banner-content-text">
                        <h1>Easy Playlist Pitching</h1>
                        <p>Share your music with thousands of curators in seconds . Save time and focus on creating music.</p>
                        <div class="cur-banner-btns">
                            <div class="cur-submit-btn">
                                <a href="{{route('user.select.submission')}}" class="btn btn-primary">SUBMIT MY SONG</a>
                            </div>
                            <div class="cur-learn-btn">
                                <a href="#learn-more-st" class="btn btn-primary">Learn MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <h1 class="mobile-floor-playlisting">Easy Playlist Pitching</h1>
                    <div class="image-shapes">
                        <img src="{{asset('assets/front/images/line-design.png')}}" alt="image" class="img-fluid">
                        <div class="image-div-slider">
                            <div class="imagesContainer">
                                <div class="imageDiv image1"></div>
                            </div>
                        </div>
                        <div class="image-div-slider2">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image3"></div>
                            </div>
                        </div>
                        <div class="image-div-slider3">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image5"></div>
                            </div>
                        </div>
                        <div class="image-div-slider4">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image7"></div>
                            </div>
                        </div>
                        <div class="image-div-slider5">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image9"></div>
                            </div>
                        </div>
                        <div class="image-div-slider6">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image11"></div>
                            </div>
                        </div>
                        <div class="image-div-slider7">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image13"></div>
                            </div>
                        </div>
                        <div class="image-div-slider8">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image15"></div>
                            </div>
                        </div>
                        <div class="image-div-slider9">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image17"></div>
                            </div>
                        </div>
                        <div class="image-div-slider10">
                            <div class="imagesContainer">
                                <div class="imageDiv image1 image19"></div>
                            </div>
                        </div>
                        <div class="image-div-slider11">
                            <img src="{{asset('assets/front/images/cur-logo1.png')}}" alt="image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-left-design">
                <img src="{{asset('assets/front/images/banner-left-design.png')}}" alt="image" class="img-fluid">
            </div>
            <div class="banner-right-design">
                <img src="{{asset('assets/front/images/banner-right-design.png')}}" alt="image" class="img-fluid">
            </div>
            <div class="banner-submit-text">
                <h5>Submit your song above to view over  15k playlists <span>and more than 90 genres</span></h5>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->
    <!-- PROMOTE MUSIC SECTION BEGIN -->
    <section class="promote-music-sec" id="learn-more-st">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="promote-music-content wow slideInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <h2>Promote your music <span>with results</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="music-player-img wow slideInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <img src="{{asset('assets/front/images/art-work-player.png')}}" alt="image" class="img-fluid">
                        <div class="art-work-slider">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('assets/front/images/art-work-slide.png')}}" alt="image" class="img-fluid">
                                        <div class="slider-move-heading">
                                            <h5>Elizabeth Bradley</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/front/images/art-work-slide.png')}}" alt="image" class="img-fluid">
                                        <div class="slider-move-heading">
                                            <h5>Elizabeth Bradley</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/front/images/art-work-slide.png')}}" alt="image" class="img-fluid">
                                        <div class="slider-move-heading">
                                            <h5>Elizabeth Bradley</h5>
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
    <!-- PROMOTE MUSIC SECTION END -->
    <!-- FEEDBACK SECTION BEGIN -->
    <section class="feedback-sec-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="feedback-div">
                        <img src="{{asset('assets/front/images/feedback1.png')}}" alt="image" class="img-fluid">
                        <h4>Get Feedback</h4>
                        <p>At Curator Club, we guarantee you'll receive feedback from your selected curators and pros within 7 days. Say goodbye to unanswered emails!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="feedback-div">
                        <img src="{{asset('assets/front/images/feedback2.png')}}" alt="image" class="img-fluid">
                        <h4>Increase Exposure</h4>
                        <p>Curator Club presents an array of possibilities including playlist placements, radio plays, social media shares, articles, interviews, and various other opportunities.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="feedback-div">
                        <img src="{{asset('assets/front/images/feedback3.png')}}" alt="image" class="img-fluid">
                        <h4>Establish Connections</h4>
                        <p>In case a curator shows interest in your track, they will provide you with their contact details enabling you to stay connected with them.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="feedback-div">
                        <img src="{{asset('assets/front/images/feedback4.png')}}" alt="image" class="img-fluid">
                        <h4>Adaptable Pricing</h4>
                        <p>You can choose a pricing plan that suits both your career level and budget for releasing your work</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEEDBACK SECTION END -->
    <!-- TOP CURATOR SECTION BEGIN -->
    <section class="top-curator-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="top-curator-content">
                        <h2>Top Curators</h2>
                    </div>
                </div>
            </div>
            <div class="mobile-hide-across">
                <div class="row new-top-cur-row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="top-curator-img">
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
                            <a href="javascript:void(0);">
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
            <div class="top-curator-btn">
                <a href="{{route('list.of.curators')}}" class="btn btn-primary">VIEW ALL</a>
            </div>
            <div class="top-curator-design">
                <img src="{{asset('assets/front/images/top-curator-design.png')}}" alt="image" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- TOP CURATOR SECTION END -->
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
                        <a href="javascript:void(0);">
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
            <!-- Most recent song -->
        </div>
    </section>
    <!-- RECENTLY SHARED SECTION END -->
    <!-- USER SECTION BEGIN -->
    <section class="user-sec-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="user-sec-heading">
                        <h2>What users say about <span>Curator Club!</span></h2>
                    </div>
                </div>
            </div>
            <div class="row user-slider-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="user-slider-div">
                        <div class="slider responsive">
                            <div>
                                <div class="slider-box-shadow">
                                    <img src="{{asset('assets/front/images/sld1.png')}}" alt="image" class="img-fluid">
                                    <h6>Bryan Applefield</h6>
                                    <span>Artist</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="stars-flex">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slider-box-shadow">
                                    <img src="{{asset('assets/front/images/sld2.png')}}" alt="image" class="img-fluid">
                                    <h6>Jims Records</h6>
                                    <span>Label</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="stars-flex">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slider-box-shadow">
                                    <img src="{{asset('assets/front/images/sld3.png')}}" alt="image" class="img-fluid">
                                    <h6>Alex  Moore</h6>
                                    <span>Curator</span>
                                    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                                    <div class="stars-flex">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="slider-box-shadow">
                                    <img src="{{asset('assets/front/images/sld1.png')}}" alt="image" class="img-fluid">
                                    <h6>Bryan Applefield</h6>
                                    <span>Artist</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="stars-flex">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="music-icon">
                <img src="{{asset('assets/front/images/music-icon.png')}}" alt="image" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- USER SECTION END -->

    <!-- FAQ SECTION BEGIN -->
    @include('front.partials.faq', ['needFooterBtn' => true])
    <!-- FAQ SECTION END -->
@endsection

@push('front-scripts')
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script>
        $(function (){
            new WOW().init();
        });

        /*USER SLIDER SCRIPT BEGIN*/
        $('.responsive').slick({
            dots: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
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
        /*USER SLIDER SCRIPT END*/

        /*ACCORDIAN SCRIPT BEGIN => need to add in homepage*/
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/
    </script>
@endpush







