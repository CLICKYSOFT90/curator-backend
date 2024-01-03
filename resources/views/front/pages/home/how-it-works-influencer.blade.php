@extends('front.layouts.master', ['headerClass' => 'help-header', 'fullFooter' => true])

@section('title', 'Curator Club - How It Works Influencer')

@section('content')
    <!-- HOW IT WORKS CURATOR BANNER BEGIN -->
    <section class="how-it-works-curator-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="how-it-work-content">
                        <h2>Create Captivating Content <span>And Get Paid.</span></h2>
                        <p>Join Curators Club and collaborate with talented artists <span>to showcase their music through your creative content,</span> <span>while also having the opportunity for influencers</span> to earn up to $100 for their contributions.</p>
                        <a href="{{route('become-a-curator')}}" class="btn btn-primary">Become a curator</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <img src="{{asset('assets/front/images/hw-influencer.png')}}" alt="image" class="img-fluid">
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
            <div class="row hw-align">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                    <div class="work-form">
                        <h6 class="animation zoom-in">STEP 1</h6>
                    </div>
                    <div class="work-form">
                        <h4 class="animation zoom-in">Song Selection</h4>
                        <p>Browse through a diverse selection of songs submitted by artists and labels on Curators Club. Discover the perfect track that resonates with your style, audience, and creative vision. Choose a song that inspires you and sparks your creativity.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-inf1.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-inf1.png')}}" alt="image" class="img-fluid mobile-image-hide">
                </div>
            </div>
            <div class="row hw-align-songs">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-inf2.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-inf2.png')}}" alt="image" class="img-fluid mobile-image-hide">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                    <div class="work-form">
                        <h6 class="animation zoom-in">STEP 2</h6>
                    </div>
                    <div class="work-form">
                        <h4 class="animation zoom-in">Create Engaging Content</h4>
                        <p>Unleash your creativity and bring the selected song to life through engaging videos. Act on the song, choreograph a dance routine, do lip-syncing, or showcase your unique talent. Create captivating TikTok or Instagram Reels that showcase the artist's music in a way that resonates with your audience.</p>
                    </div>
                </div>
            </div>
            <div class="row hw-align">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                    <div class="work-form">
                        <h6 class="animation zoom-in">STEP 3</h6>
                    </div>
                    <div class="work-form">
                        <h4 class="animation zoom-in">Share on Your Platforms</h4>
                        <p>Once you've created your captivating video, share it on your TikTok or Instagram account. Showcase the artist's music to your loyal followers and engage with a wider audience. Your creativity and influence will amplify the artist's music and create a memorable connection between the song and your community.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-inf3.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-inf3.png')}}" alt="image" class="img-fluid mobile-image-hide">
                </div>
            </div>
            <div class="row hw-align-songs">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-5.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-5.png')}}" alt="image" class="img-fluid mobile-image-hide">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                    <div class="work-form">
                        <h6 class="animation zoom-in">STEP 4</h6>
                    </div>
                    <div class="work-form">
                        <h4 class="animation zoom-in">Get Paid</h4>
                        <p>At Influencers Club, we value the expertise and time our influencers invest in reviewing songs. As a influencer, you will receive compensation for your thoughtful reviews and valuable feedback. We believe in recognizing your contribution and passion for discovering and promoting exceptional music.</p>
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