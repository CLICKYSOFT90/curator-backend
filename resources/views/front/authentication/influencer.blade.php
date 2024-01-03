@extends('front.layouts.master', ['headerClass' => 'help-header'])

@section('title', 'Curator Club - Become A Influencer')

@section('content')
    <!-- SIGN IN HEADER BEGIN -->
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="influencer-steps-wizard">
                <section class="signup-step-container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Choose Platform</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab-2">2</span> <i>Information</i></a>
                                        </li>
                                    </ul>
                                </div>
                                <form role="form" id="main_form" class="login-box">
                                    @csrf
                                    <div class="tab-content" id="main_form">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="social-icon-selection">
                                                <div class="grid-wrapper grid-col-auto">
                                                    <label for="radio-card-1" class="radio-card" id="radio-tiktok">
                                                        <input type="radio" name="platform_type" id="radio-card-1" value="Tiktok" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img src="{{asset('assets/front/images/tiktok-img.png')}}" alt="image" class="img-fluid">
                                                                <h4>TikTok</h4>
                                                                <p>Must have at least <span>10k followers</span></p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-2" class="radio-card" id="radio-instagram">
                                                        <input type="radio" name="platform_type" id="radio-card-2" value="Instagram Editor" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img src="{{asset('assets/front/images/instagram-img.png')}}" alt="image" class="img-fluid">
                                                                <h4>Instagram</h4>
                                                                <p>Must have at least <span>10k followers</span></p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-3" class="radio-card" id="radio-both">
                                                        <input type="radio" name="platform_type" id="radio-card-3" value="Both" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="double-img">
                                                                    <span><img src="{{asset('assets/front/images/tiktok-img.png')}}" alt="image" class="img-fluid"></span>
                                                                    <span><img src="{{asset('assets/front/images/instagram-img.png')}}" alt="image" class="img-fluid"></span>
                                                                </div>
                                                                <h4>Both</h4>
                                                                <p>Must have at least 10k followers</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <div class="wizard-form-begin-tiktok">
                                                    <div class="tiktok-fields">
                                                        <label>Your Email</label>
                                                        <input type="email" placeholder="Type your email address" name="email" class="form-control">
                                                    </div>
                                                <div class="tiktok-fields">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Type your password" class="form-control">
                                                </div>
                                                    <div class="tiktok-fields tiktok_followers">
                                                        <label>How many followers do you have on TikTok?</label>
                                                        <input type="number" class="form-control " name="tiktok_followers">
                                                    </div>
                                                    <div class="tiktok-fields instagram_followers">
                                                        <label>How many followers do you have on Instagram?
                                                        </label>
                                                        <input type="number" class="form-control " name="instagram_followers">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Did someone refer you?</label>
                                                        <div class="main">
                                                            <div class="card">
                                                                <div class="form">
                                                                    <label><input type="radio" class="input-radio off" name="referred" value="1"> YES</label>
                                                                    <label><input type="radio" class="input-radio on" checked name="referred" value="0"> NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Where do you live?</label>
                                                        <select class="form-control" name="country_id">
                                                            <option selected>Select country</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>What kind of content do you make?</label>
                                                        <textarea cols="5" rows="7" name="about_me" class="form-control" placeholder="Summary of content you make and why your content brings value to artists"></textarea>
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Provide network links</label>
                                                        <div class="network-field tiktok_link">
                                                            <input type="text" class="form-control" name="tiktok_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/tiktok-icon-image.png')}}" alt="image" class="img-fluid"> Tiktok</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field instagram_link">
                                                            <input type="text" class="form-control" name="instagram_link">
                                                            <div class="network-link-text">
                                                                <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            <ul class="list-inline">
                                                <li><button type="button" class="default-btn prev-step" id="prev-step-id">Back</button></li>
                                                <li><button type="button" onclick="saveData(this)"  class="default-btn next-step" id="submit-step-id">SUBMIT</button></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- SIGN IN HEADER END -->
@endsection

@push('front-scripts')
    <script>
        function saveData(input){
            $(input).attr('disabled',true);
            $(':input').removeClass('has-error');
            $('.text-danger').remove();

            axios.post("{{route('save.influencer')}}", $('#main_form').serialize()).then(function (res) {
                notifyUser(res.data.msg,res.data.status,3000);
                if (res.data.status=='success') {
                    setTimeout(function () {
                        location.href = "{{route('home')}}";
                    },2500);
                    return false;
                }
                $(input).attr('disabled',false);
            }).catch(function (error) {
                if (error.response.status==422) {
                    $(':input[id="screen_shot"]').addClass("has-error");
                    $.each(error.response.data.errors, function (k, v) {
                        $(`:input[name="${k}"]`).addClass("has-error");
                        $(`:input[name="${k}"]`).after(`<span class='text-danger d-block'>${v[0]}</span>`);
                    });
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    $(input).attr('disabled',false);
                } else {
                    notifyUser('There is something wrong','warning',3000);
                    $(input).attr('disabled',false);
                }
            });
        }
        // STEPS WIZARD SCRIPT BEGIN
        $(document).ready(function () {
            $('.radio-card input[type="radio"]').click(function () {
                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);
            });
            function nextTab(elem) {
                $(elem).next().find('a[data-toggle="tab"]').click();
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();
            }
            $('.nav-tabs').on('click', 'li', function () {
                $('.nav-tabs li.active').removeClass('active');
                $(this).addClass('active');
            });
        });
        // STEPS WIZARD SCRIPT END
        // STEPS SECTION HIDE & SHOW SCRIPT BEGIN
        $(document).ready(function () {
            function nextTab(elem) {
                var targetTab = $(elem).next().find('a[data-toggle="tab"]').attr('href');
                $(elem).next().removeClass('disabled');
                $(targetTab).tab('show');
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').tab('show');
            }
            $('#radio-tiktok').click(function () {
                $('.tiktok_followers,.tiktok_link').show();
                $('.instagram_followers, .instagram_link').hide();
                nextTab(this);
            });
            $('#radio-instagram').click(function () {
                $('.tiktok_followers, .tiktok_link').hide();
                $('.instagram_followers, .instagram_link').show();
                nextTab(this);
            });
            $('#radio-both').click(function () {
                $('.tiktok_followers, .tiktok_link').show();
                $('.instagram_followers, .instagram_link').show();
                nextTab(this);
            });
            $('.nav-tabs').on('click', 'li', function () {
                $('.nav-tabs li.active').removeClass('active');
                $(this).addClass('active');
            });
        });
        // STEPS SECTION HIDE & SHOW SCRIPT END
        // WIZARD INNER SCRIPT BEGIN
        $(document).ready(function () {
            function resetRoundTabBorder() {
                $('.influencer-steps-wizard span.round-tab').css({
                    'border-color': '#FBBC04',
                    'border-width': '5px',
                    'border-style': 'solid'
                });
            }
            function updateRoundTabBorder() {
                $('.influencer-steps-wizard span.round-tab').css({

                });
            }
            function showContent(contentToShow) {
                $('.wizard-form-begin').hide();
                $(contentToShow).show();
                resetRoundTabBorder();
                updateTabBorderColor();
            }
            $('#radio-tiktok').click(function () {
                showContent('.wizard-form-begin-tiktok');
                updateRoundTabBorder();
            });
            $('#radio-instagram').click(function () {
                showContent('.wizard-form-begin-instagram');
                updateRoundTabBorder();
            });
            $('#radio-both').click(function () {
                showContent('.wizard-form-begin-both');
                updateRoundTabBorder();
            });
            $('#prev-step-id').click(function () {
                var activeTab = $('.wizard .tab-pane.active');
                var prevTab = activeTab.prev('.tab-pane');
                if (prevTab.length) {
                    activeTab.removeClass('active');
                    prevTab.addClass('active');
                    resetRoundTabBorder();
                    var correspondingTabLink = $('.influencer-steps-wizard .nav-tabs > li > a[href="#' + prevTab.attr('id') + '"]');
                    correspondingTabLink.trigger('click');
                }
            });
            // $("#submit-step-id").click(function() {window.location.href = "successfully-submitted.html"})
            $('.influencer-steps-wizard .wizard .nav-tabs > li a').off('click');
            $('.wizard-inner').off('click');
            $('.influencer-steps-wizard span.round-tab').click(function () {
                resetRoundTabBorder();
            });
            updateTabBorderColor();
        });
        //   WIZARD INNER SCRIPT END
    </script>
@endpush