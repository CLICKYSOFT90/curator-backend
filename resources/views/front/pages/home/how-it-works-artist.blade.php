@extends('front.layouts.master', ['headerClass' => 'help-header', 'fullFooter' => true])

@section('title', 'Curator Club - How It Works Artist')

@section('content')
    <!-- HOW IT WORKS CURATOR BANNER BEGIN -->
    <section class="how-it-works-curator-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="how-it-work-content">
                        <h2>Get Your Music Discovered <span>and Promoted</span></h2>
                        <p>Welcome to Curators Club, where artists connect  <span>with passionate curators for a chance to shine.</span></p>
                        <a href="{{route('user.select.submission')}}" class="btn btn-primary">Submit a song</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <img src="{{asset('assets/front/images/hw-artist.png')}}" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- HOW IT WORKS CURATOR BANNER END -->
    <!-- HOW WORK SECTION BEGIN -->
    <section class="how-work-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="ht-cont animation zoom-in">
                        <h2>How it works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="artist-pg-tabs">
                        <div class="tab-scroll">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Curator Submission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Influencer Submission</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="artist-one-tab">
                                    <div class="row hw-align">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 1</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Song Submission:</h4>
                                                <p>Submit your song to Curators Club and gain access to a network of experienced curators. Start by providing information about your song, including the title, artist name, release date, lyrics language, genre, and more. This information helps us match your song with the most relevant curators.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-anime-show">
                                            <img src="{{asset('assets/front/images/arts1.png')}}" alt="image" class="img-fluid animation zoom-in-out desktop-image-hide">
                                            <img src="{{asset('assets/front/images/arts1.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                    </div>
                                    <div class="row hw-align-songs">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-anime-show">
                                            <img src="{{asset('assets/front/images/art2.png')}}" alt="image" class="img-fluid animation zoom-in-out desktop-image-hide">
                                            <img src="{{asset('assets/front/images/art2.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 2</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Select Your Curator</h4>
                                                <p>Based on the information you provide about your song, we present you with a curated list of compatible curators. These curators have a deep understanding of your genre and can provide valuable insights and feedback. Take your time to explore their profiles, listen to their previous work, and choose the curator you believe will best represent your music.</p>
                                                <p>Alternatively, artists can opt for the hassle-free Automate Submission mode. Here, artists simply define their budget, and our intelligent system takes charge. Leveraging its advanced algorithms, the system automatically selects a curated list of industry professionals to review their song.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hw-align">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 3</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Curator Review</h4>
                                                <p>Once you've selected a curator, they will carefully listen to your song and provide a detailed review. This review goes beyond simple feedback—it delves into the nuances of your composition, production quality, and overall potential. The curator's expertise will help you refine your sound and gain valuable insights to enhance your musical journey.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-anime-show">
                                            <img src="{{asset('assets/front/images/art3.png')}}" alt="image" class="img-fluid animation zoom-in-out desktop-image-hide">
                                            <img src="{{asset('assets/front/images/art3.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                    </div>
                                    <div class="row hw-align-songs">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-anime-show">
                                            <img src="{{asset('assets/front/images/art4.png')}}" alt="image" class="img-fluid animation zoom-in-out desktop-image-hide">
                                            <img src="{{asset('assets/front/images/art4.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 4</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Song Promotion</h4>
                                                <p> If your song impresses the curator, they may choose to share it on their social media networks, Spotify playlists, YouTube channels, or blogs. This provides an incredible opportunity to reach a wider audience and gain exposure within your target market. Let the curator's network amplify your music and connect you with engaged listeners.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hw-align">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 5</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Review Your Results</h4>
                                                <p>Once the curator has reviewed your song, you will receive their feedback directly. This feedback will be instrumental in honing your skills as an artist and further developing your sound.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-anime-show">
                                            <img src="{{asset('assets/front/images/art5.png')}}" alt="image" class="img-fluid animation zoom-in-out desktop-image-hide">
                                            <img src="{{asset('assets/front/images/art5.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="artist-second-tab">
                                    <div class="row hw-align">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 1</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Song Submission:</h4>
                                                <p>Submit your song to Curators Club and gain access to a network of experienced influencer. Start by providing information about your song, including the title, artist name, release date, lyrics language, genre, and more. This information helps us match your song with the most relevant Influencer.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <img src="{{asset('assets/front/images/arts1.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                                            <img src="{{asset('assets/front/images/arts1.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                    </div>
                                    <div class="row hw-align-songs">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <img src="{{asset('assets/front/images/art2.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                                            <img src="{{asset('assets/front/images/art2.png')}}" alt="image" class="img-fluid mobile-image-hide">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 2</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Select Your Influencer</h4>
                                                <p>Based on the information you provide about your song, we present you with a curated list of compatible influencer. Influencers will listen to your song and collaborate with you to create engaging content for promotion. They may share your song on their social media platforms, create captivating TikTok or Reels videos, or even perform and showcase your music to their followers.</p>
                                                <p>Alternatively, artists can opt for the hassle-free Automate
                                                    Submission mode. Here, artists simply define their budget, and our intelligent system takes charge. Leveraging its advanced algorithms, the system automatically selects a curated list of famous Influencers.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hw-align">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                                            <div class="work-form">
                                                <h6 class="animation zoom-in">STEP 3</h6>
                                            </div>
                                            <div class="work-form">
                                                <h4 class="animation zoom-in">Enjoy Increased Exposure <span class="animation zoom-in">and Engagement</span></h4>
                                                <p>As influencers promote your song to their dedicated audience, you'll experience increased exposure, engagement, and potential fanbase growth. The unique creative collaborations and endorsements from influencers help your music reach a wider audience, providing opportunities for recognition and success.</p>
                                                <p>By offering artists two distinct paths for song submission – to curators for feedback or to influencers for promotion – our platform empowers artists to connect with industry professionals and leverage the power of influencer marketing to propel their music careers forward.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <img src="{{asset('assets/front/images/art4.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                                            <img src="{{asset('assets/front/images/art4.png')}}" alt="image" class="img-fluid mobile-image-hide">
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
    <!-- HOW WORK SECTION END -->
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
    @include('front.partials.faq')
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

        // HEADING ZOOM IN ANIMATION SCRIPT BEGIN
        $(window).scroll(function(){
            $('.zoom-in').each(function(){
                var zoomIn = 1, zoomOut = 0;
                if(isScrolledIntoView($(this))){
                    $(this).css({
                        '-webkit-transform': 'scale(' + zoomIn + ')',
                        'transform': 'scale(' + zoomIn + ')'
                    });
                }
                else{
                    $(this).css({
                        '-webkit-transform': 'scale(' + zoomOut + ')',
                        'transform': 'scale(' + zoomOut + ')'
                    });
                }
            });
            function isScrolledIntoView(elem){
                var $elem = $(elem);
                var $window = $(window);
                var docViewTop = $window.scrollTop();
                var docViewBottom = docViewTop + $window.height();
                var elemTop = $elem.offset().top;
                var elemBottom = elemTop + $elem.height();
                return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }
        });
        // HEADING ZOOM IN ANIMATION SCRIPT END
    </script>
@endpush