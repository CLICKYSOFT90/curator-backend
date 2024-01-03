@extends('front.layouts.master', ['headerClass' => 'how-it-work-header', 'bodyClass' => 'influencers-steps-bg'])

@section('title', 'Curator Club - Become A Curator')

@section('content')
    <!-- SIGN IN HEADER BEGIN -->
    <section class="signin-sec">
        <div class="container-fluid">
            <div class="influencer-steps-wizard curator-steps">
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
                                <div class="login-box">
                                    <form class="tab-content" id="main_form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="social-icon-selection">
                                                <div class="grid-wrapper grid-col-auto">
                                                    <label for="radio-card-1" class="radio-card" id="radio-tiktok">
                                                        <input type="radio" name="platform_type" id="radio-card-1" value="Blogs" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img src="{{asset('assets/front/images/bgi1.png')}}" alt="image" class="img-fluid">
                                                                <h4>Blogs</h4>
                                                                <p>Must have at least 1000 fans</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-2" class="radio-card" id="radio-instagram">
                                                        <input type="radio" name="platform_type" id="radio-card-2" value="Instagram Editor" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img src="{{asset('assets/front/images/instagram-img.png')}}" alt="image" class="img-fluid">
                                                                <h4>Instagram Editor</h4>
                                                                <p>Must have at least 10k followers</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-3" class="radio-card" id="radio-both">
                                                        <input type="radio" name="platform_type" id="radio-card-3" value="Twitter" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="double-img">
                                                                    <img src="{{asset('assets/front/images/bgi2.png')}}" alt="image" class="img-fluid">
                                                                </div>
                                                                <h4>Twitter</h4>
                                                                <p>Must have at least 10k followers</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-4" class="radio-card" id="radio-spotify">
                                                        <input type="radio" name="platform_type" id="radio-card-4" value="Spotify Playlist" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="double-img">
                                                                    <img src="{{asset('assets/front/images/bgi3.png')}}" alt="image" class="img-fluid">
                                                                </div>
                                                                <h4>Spotify Playlist</h4>
                                                                <p>Must have at least 1000 organic followers on <span>playlist (no payola, bought followers, or</span> botted streams)</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-5" class="radio-card" id="radio-youtube">
                                                        <input type="radio" name="platform_type" id="radio-card-5" value="Youtuber" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="double-img">
                                                                    <img src="{{asset('assets/front/images/bgi4.png')}}" alt="image" class="img-fluid">
                                                                </div>
                                                                <h4>Youtuber</h4>
                                                                <p>Must have at least 10k subscribers</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-6" class="radio-card" id="radio-sound-cloud">
                                                        <input type="radio" name="platform_type" id="radio-card-6" value="Soundcloud Repost" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="double-img">
                                                                    <img src="{{asset('assets/front/images/bgi5.png')}}" alt="image" class="img-fluid">
                                                                </div>
                                                                <h4>Soundcloud Repost</h4>
                                                                <p>Must have at least 10k followers</p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <div class="wizard-form-begin-tiktok">
                                                <div>
                                                    <div class="tiktok-fields">
                                                        <label>Firstname</label>
                                                        <input type="text" class="form-control" name="first_name" placeholder="Firstname">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Lastname</label>
                                                        <input type="text" class="form-control" name="last_name" placeholder="Lastname">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Name of network</label>
                                                        <input type="text" class="form-control" name="display_name" placeholder="Provide the network name">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Your Email</label>
                                                        <input type="email" name="email" placeholder="Type your email address" class="form-control">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Password</label>
                                                        <input type="password" name="password" placeholder="Type your password" class="form-control">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>How many followers do you have</label>
                                                        <input type="number" name="followers" class="form-control">
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Did someone refer you?</label>
                                                        <div class="main">
                                                            <div class="card">
                                                                <div class="form">
                                                                    <label><input type="radio" class="input-radio off" name="referred" value="0" checked> NO</label>
                                                                    <label><input type="radio" class="input-radio on" name="referred" value="1"> YES</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tiktok-fields">
                                                        <label>Write a Pitch</label>
                                                        <textarea cols="5" rows="7" class="form-control" name="about_me" placeholder="Summary of platform and why your platform brings value to artists"></textarea>
                                                    </div>
                                                    <div class="image-selection-pr">
                                                        <p>Provide screenshots of analytics (Optional but preferred)</p>
                                                        <main class="main_full">
                                                            <div class="container">
                                                                <div class="panel">
                                                                    <div class="button_outer">
                                                                        <div class="btn_upload">
                                                                            <input type="file" id="screen_shot" name="screen_shot[]" multiple>
                                                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                                                            Upload Screenshots
                                                                        </div>
                                                                        <div class="processing_bar"></div>
                                                                        <div class="success_box"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="error_msg"></div>
                                                                <div class="uploaded_file_view" id="uploaded_view">
                                                                    <span class="file_remove">X</span>
                                                                </div>
                                                            </div>
                                                        </main>
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
                                                        <label>Provide social media links</label>
                                                        <div class="network-field">
                                                            <input type="text" class="form-control" name="spotify_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec1.png')}}" alt="image" class="img-fluid"> Spotify</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="youtube_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec2.png')}}" alt="image" class="img-fluid"> Youtube</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="soundcloud_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec3.png')}}" alt="image" class="img-fluid"> Soundcloud</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="facebook_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec4.png')}}" alt="image" class="img-fluid"> Facebook</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="twitter_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec5.png')}}" alt="image" class="img-fluid"> Twitter</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="instagram_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec6.png')}}" alt="image" class="img-fluid"> Instagram</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="tiktok_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/tiktok-icon-image.png')}}" alt="image" class="img-fluid"> Tiktok</p>
                                                            </div>
                                                        </div>
                                                        <div class="network-field link-both">
                                                            <input type="text" class="form-control" name="website_link">
                                                            <div class="network-link-text">
                                                                <p><img src="{{asset('assets/front/images/ec7.png')}}" alt="image" class="img-fluid"> Website (Such as blog)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                <ul class="list-inline">
                                                    <li><button type="button" class="default-btn prev-step" id="prev-step-id">Back</button></li>
                                                    <li><button type="button" onclick="saveData(this)" class="default-btn next-step" id="submit-step-id">SUBMIT</button></li>
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

        function saveData(input){
            $(input).attr('disabled',true);
            $(':input').removeClass('has-error');
            $('.text-danger').remove();

            let formData = new FormData();
            formData.append('platform_type', $(':input[name="platform_type"]:checked').val());
            formData.append('first_name', $(':input[name="first_name"]').val());
            formData.append('last_name', $(':input[name="last_name"]').val());
            formData.append('display_name', $(':input[name="display_name"]').val());
            formData.append('email', $(':input[name="email"]').val());
            formData.append('password', $(':input[name="password"]').val());
            formData.append('followers', $(':input[name="followers"]').val());
            formData.append('referred', $(':input[name="referred"]:checked').val());
            formData.append('about_me', $(':input[name="about_me"]').val());
            formData.append('country_id', $(':input[name="country_id"]').val());
            formData.append('spotify_link', $(':input[name="spotify_link"]').val());
            formData.append('youtube_link', $(':input[name="youtube_link"]').val());
            formData.append('soundcloud_link', $(':input[name="soundcloud_link"]').val());
            formData.append('facebook_link', $(':input[name="facebook_link"]').val());
            formData.append('twitter_link', $(':input[name="twitter_link"]').val());
            formData.append('instagram_link', $(':input[name="instagram_link"]').val());
            formData.append('tiktok_link', $(':input[name="tiktok_link"]').val());
            formData.append('website_link', $(':input[name="website_link"]').val());

            let newImage = '';
            if ($('input#screen_shot').val()) {
                newImage = document.getElementById('screen_shot').files;
            }
            console.log('newImage',newImage);
            if (newImage && newImage.length > 0) {
                $.each(newImage, function (k, v) {
                    formData.append('screen_shot[]', v);
                });
            } else {
                formData.append('screen_shot[]', newImage);
            }

            axios.post("{{route('save.curator')}}", formData).then(function (res) {
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
    </script>
@endpush