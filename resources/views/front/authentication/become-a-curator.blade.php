@extends('front.layouts.master', ['headerClass' => 'help-header'])

@section('title', 'Curator Club - Become A Curator')

@section('content')
    <!-- SIGN IN HEADER BEGIN -->
    <section class="signin-sec signin-become-curator">
        <div class="container-fluid">
            <div class="row new-curator-bg">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="curator-main-cls">
                        <h2>Join Curator Club</h2>
                        <div class="wizard">
                            <form role="form" action="{{route('become-a-curator')}}" class="login-box">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="social-icon-selection">
                                        <div class="grid-wrapper grid-col-auto">
                                            <a href="javascript:void(0);" onclick="dataSubmit();">
                                                <label for="radio-card-1" class="radio-card" id="radio-tiktok">
                                                    <input type="radio" name="user_type" id="radio-card-1" value="curator"/>
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content">
                                                            <h4>Curators</h4>
                                                            <p>Simplify the submission process and get paid for doing <span>what you're good at.</span></p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </a>
                                            <a href="javascript:void(0);" onclick="dataSubmit();">
                                                <label for="radio-card-2" class="radio-card" id="radio-instagram">
                                                    <input type="radio" name="user_type" id="radio-card-2" value="influencer"/>
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content">
                                                            <h4>Influencers</h4>
                                                            <p>Use your social media following to earn money from music <span>promotion.</span></p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="main-images-wizard">
                        <div class="wizard-form-begin-tiktok">
                            <div class="cur-img-container">
                                <img class="cur-img tiktok-img" src="{{asset('assets/front/images/cha2.png')}}" alt="TikTok Image" />
                            </div>
                        </div>
                        <div class="wizard-form-begin-instagram main-chap-wiz">
                            <div class="cur-img-container">
                                <img class="cur-img instagram-img" src="{{asset('assets/front/images/hw-influencer.png')}}" alt="Instagram Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SIGN IN HEADER END -->
@endsection

@push('front-scripts')
    <script>
        // IMAGE HIDE & SHOW EFFECT SCRIPT BEGIN
        $(document).ready(function () {
            $('#radio-tiktok').mouseenter(function () {
                $('.wizard-form-begin-tiktok .cur-img.show').removeClass('show');
                $('.wizard-form-begin-instagram .cur-img.show').removeClass('show');
                $('.wizard-form-begin-tiktok .cur-img-container:first-child .cur-img').addClass('show');
            });
            $('#radio-instagram').mouseenter(function () {
                $('.wizard-form-begin-tiktok .cur-img.show').removeClass('show');
                $('.wizard-form-begin-instagram .cur-img.show').removeClass('show');
                $('.wizard-form-begin-instagram .cur-img-container:first-child .cur-img').addClass('show');
            });
        });
        // IMAGE HIDE & SHOW EFFECT SCRIPT END

        function dataSubmit(){
            $('form').submit();
        }
    </script>
@endpush