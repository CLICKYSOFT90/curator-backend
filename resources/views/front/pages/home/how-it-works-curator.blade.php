@extends('front.layouts.master', ['headerClass' => 'help-header', 'fullFooter' => true])

@section('title', 'Curator Club - How It Works Curator')

@section('content')
    <!-- HEADER SECTION END -->
    <!-- HOW IT WORKS CURATOR BANNER BEGIN -->
    <section class="how-it-works-curator-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="how-it-work-content">
                        <h2>Discover, Review, and Share <span>Music and get Paid</span></h2>
                        <p>Welcome to Curators Club, where music meets <span>passion, promotion, and the opportunity for curators</span> to earn $2 per review.</p>

                        <a href="{{route('become-a-curator')}}" class="btn btn-primary">Become a curator</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <img src="{{asset('assets/front/images/hw-work1.png')}}" alt="image" class="img-fluid">
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
                        <h4 class="animation zoom-in">Song Submission:</h4>
                        <p>Artists and labels submit their songs for review by our talented curators. We welcome all genres and styles, and our curators are excited to discover the next big hit. Submit your song now and let our team of experts evaluate your musical masterpiece.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-2.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-2.png')}}" alt="image" class="img-fluid mobile-image-hide">
                </div>
            </div>
            <div class="row hw-align-songs">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-3.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-3.png')}}" alt="image" class="img-fluid mobile-image-hide">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                    <div class="work-form">
                        <h6 class="animation zoom-in">STEP 2</h6>
                    </div>
                    <div class="work-form">
                        <h4 class="animation zoom-in">Curator Review</h4>
                        <p>Our experienced curators carefully listen to each submitted song and provide detailed reviews. They analyze the composition, production quality, and overall appeal to provide valuable feedback. Our curated reviews aim to help artists refine their craft and improve their chances of success in the industry.</p>
                    </div>
                </div>
            </div>
            <div class="row hw-align">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobile-animation-hide">
                    <div class="work-form">
                        <h6 class="animation zoom-in">STEP 3</h6>
                    </div>
                    <div class="work-form">
                        <h4 class="animation zoom-in">Song Promotion</h4>
                        <p>Curators at Curators Club have a unique opportunity to share exceptional songs on their social media networks, Spotify playlists, YouTube channels, or blogs. By leveraging their established platforms and passionate fan bases, our curators help talented artists gain exposure and reach a wider audience. It's a chance for your music to shine and resonate with music lovers worldwide.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <img src="{{asset('assets/front/images/hw-4.png')}}" alt="image" class="img-fluid animation zoom-in desktop-image-hide">
                    <img src="{{asset('assets/front/images/hw-4.png')}}" alt="image" class="img-fluid mobile-image-hide">
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
                        <p>At Curators Club, we value the expertise and time our curators invest in reviewing songs. As a curator, you will receive compensation for your thoughtful reviews and valuable feedback. We believe in recognizing your contribution and passion for discovering and promoting exceptional music.</p>
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