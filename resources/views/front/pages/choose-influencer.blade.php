@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - List Of Curators')
@push('front-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .paynow-end-btn button {
        font-size: 15px;
        font-weight: 700;
        color: #535353;
        background: #FBBC04;
        display: block;
        text-align: center;
        padding: 15px 10px;
        border-radius: 10px;
    }
</style>
@endpush
@section('content')
    <section class="choose-curators-sec-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 colsm-12 col-12">
                    <div class="choose-back-arrow">
                        <a href="javascript:void(0)"><img src="{{asset('assets/front/')}}/images/yellow-curator-back.png" alt="image" class="img-fluid"> Go to Step 3</a>
                        <h4>Choose curators</h4>
                    </div>
                    <form id="influencers-form">
                        <input type="hidden" name="type" id="type" value="influencers">
                    <div class="row choose-curator-flex">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="main-artist-flex">
                                        <div class="main-artist-dropdowns">
                                            <select class="form-control"  name="curator_type" onchange="searchUser('influencers-form','influencers')">
                                                <option value="" selected>Influencer Type</option>
                                                <option value="Tiktok">Tiktok</option>
                                                <option value="Instagram Editor">Instagram</option>
                                                <option value="Both">Both</option>
                                            </select>
                                        </div>
                                        <div class="main-artist-dropdowns">
                                            <select class="form-control" name="other" onchange="searchUser('influencers-form','influencers')">
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
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                    <div class="main-artist-searcbox">
                                        <input type="text" class="form-control" onkeyup="searchUser('influencers-form','influencers')" name="name" placeholder="Search by influencers or playlist name"></input>
                                        <div class="artist-searchbox-icon">
                                            <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                    <div class="curator-fav-btn">
                                        <a href="{{route('favourite')}}"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="row curoator-boxes-listing influencers--partial">
                        @foreach($influencers as $key => $influencer)
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
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
                                            <p><input type="checkbox" onclick="selectedCurator(this,{{$influencer}})" name="credit[]"  value="{{$influencer->id}}" id="html-cur1{{$key}}">
                                                <label for="html-cur1{{$key}}"></label>
                                                2 Credits</p>
                                        </div>
                                        <div class="selection-f-input">
                                            <p>Add to favorites <i class="fa fa-heart" aria-hidden="true"></i></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- BOTTOM SELECTION BAR CONTENT BEGIN -->
        <div class="curator-bottom-selection-bar" style="display: none">
            <div class="bottom-selection-left">
                <div class="display-curator-img">

                </div>
                <div class="curator-move-content">
                    <p class="custom---count"></p>
                    <span>Display My Selections</span>
                </div>
            </div>
            <div class="bottom-selection-btn">
                <a href="#" class="btn btn-primary">Finish my submission </a>
            </div>
        </div>
        <!-- BOTTOM SELECTION BAR CONTENT END -->
    </section>
    <!-- CHECKOUT CURATOR SECTION END -->
    <!-- COPYRIGHT SECTION BEGIN -->
    <section class="copyright-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <p>Copyright © 2022-2023 Curator Club  |   All rights reserved   |   Proudly designed by <a href="https://clickysoft.com/" target="_blank">clickysoft</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('front-scripts')
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script>
        let users = []
        function selectedCurator(input,user){
            let userCount= 0;
            let creditCount= 0;
            if($(input).is(":checked")){
                users.push(user)
                $('.display-curator-img').empty()
                let html = '';
                $.each(users,function (k,v) {

                    html +=`<img src="{{asset('assets/front/')}}/images/bt11.png" alt="image" class="img-fluid">`
                    userCount++
                    creditCount +=2
                })
                $('.display-curator-img').append(html)
                $('.custom---count').text('')
                $('.custom---count').text(`${userCount} Selected Curator : ${creditCount} Credits`)

            }else {
                users = removeItemOnce(users,user);
                $('.display-curator-img').empty()
                let html = '';
                $.each(users,function (k,v) {

                    html +=`<img src="{{asset('assets/front/')}}/images/bt11.png" alt="image" class="img-fluid">`
                    userCount++
                    creditCount +=2
                })
                $('.display-curator-img').append(html)
                $('.custom---count').text('')
                $('.custom---count').text(`${userCount} Selected Curator : ${creditCount} Credits`)
            }
            if(users?.length > 0){
                $('.curator-bottom-selection-bar').show()
            }else {
                $('.curator-bottom-selection-bar').hide()
            }
        }
        function removeItemOnce(arr, value) {
            for (var i = arr.length; i--;) {
                if (arr[i].id === value.id) arr.splice(i, 1);
            }
            return arr;
        }
        function showLoaderAdmin(){
            showLoader();
            setTimeout(function () {
                $('.tr-first-text-toggle').hide()
                $('.tr-second-text-toggle').hide()
                hideLoader();
            },3000)
        }
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/

        // LISTING DROPDOWN ARROW SCRIPT BEGIN
        function toggleDropdown(header) {
            const arrow = header.querySelector('.arrow');
            const options = header.nextElementSibling;
            const dropdownNumber = arrow.getAttribute('data-dropdown');
            arrow.classList.toggle('open');
            options.classList.toggle('open');
            if (options.classList.contains('open')) {
                arrow.style.transform = 'rotate(180deg)';
            } else {
                arrow.style.transform = 'rotate(0deg)';
            }
        }
        document.querySelectorAll('.options li').forEach((option) => {
            option.addEventListener('click', (e) => {
                const selectedOption = e.target.textContent;
                const header = e.target.closest('.custom-select').querySelector('.select-header');
                const selectedOptionElement = header.querySelector('.selected-option');
                selectedOptionElement.textContent = selectedOption;
                toggleDropdown(header);
            });
        });
        // LISTING DROPDOWN ARROW SCRIPT END
        // CURATOR SELECTION CHECKBOX BEGIN
        function toggleCheckbox(listItem) {
            var checkbox = listItem.querySelector('input[type="checkbox"]');
            checkbox.checked = !checkbox.checked;
        }
        // CURATOR SELECTION CHECKBOX END
        // GENERE TABS CHANGE SCRIPT BEGIN
        $(document).ready(function() {
            $(".tab").click(function() {
                $(".tab").removeClass("active");
                $(this).addClass("active");
                var tabIndex = $(this).index();
                $(".tab-content").removeClass("active");
                $(".tab-content:eq(" + tabIndex + ")").addClass("active");
            });
        });
        // GENERE TABS CHANGE SCRIPT END
        // POPUP HIDE & SHOW SCRIPT BEGIN
        const popupBoxes = document.querySelectorAll('.popup-box-curator');
        const genreMsgBars = document.querySelectorAll('.genre-msg-bar');
        popupBoxes.forEach(function(popupBox, index) {
            popupBox.addEventListener('click', function() {
                if (genreMsgBars[index].style.display === 'none' || genreMsgBars[index].style.display === '') {
                    genreMsgBars[index].style.display = 'block';
                } else {
                    genreMsgBars[index].style.display = 'none';
                }
            });
        });
        // POPUP HIDE & SHOW SCRIPT END
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
        function searchUser(id,type) {
            let data =  $('#'+id).serialize();
            axios.get("/choose-curator-search?"+data).then(function (res) {
                $('.'+type+'--partial').empty()
                $('.'+type+'--partial').append(res.data)

            }).catch(function (error) {
                console.log('error',error);
            });
        }
    </script>
@endpush