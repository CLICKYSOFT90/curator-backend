@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Select Submission')

@section('content')
    <!-- SIGN IN HEADER BEGIN -->
    <section class="signin-sec select-submission-sec">
        <div class="container-fluid">
            <div class="row new-curator-bg">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="curator-main-cls">
                        <h2>Submit your song to</h2>
                        <div class="wizard">
                            <form role="form" action="index.html" class="login-box">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="social-icon-selection">
                                        <div class="grid-wrapper grid-col-auto">
                                            <label for="radio-card-1" class="radio-card" id="submit-curator">
                                                <div class="card-content-wrapper">
                                                    <div class="card-content">
                                                        <h4>Curators</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and type setting <span>industry. Text of the printing and type</span></p>
                                                        <a href="{{route('user.upload.song.curator')}}" class="btn btn-primary">SELECT</a>
                                                    </div>
                                                </div>
                                            </label>
                                            <label for="radio-card-2" class="radio-card" id="submit-influencer">
                                                <div class="card-content-wrapper">
                                                    <div class="card-content">
                                                        <h4>Influencers</h4>
                                                        <p>Artists who want to reach a wider audience on social media, and those <span>who want to share user-generated content with their fans.</span></p>
                                                        <a href="{{route('user.upload.song.influencer')}}" class="btn btn-primary">SELECT</a>
                                                    </div>
                                                </div>
                                            </label>
                                            <label for="radio-card-3" class="radio-card" id="submit-playlisting">
                                                <div class="card-content-wrapper">
                                                    <div class="card-content">
                                                        <h4>Playlisting Floor</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and type setting <span>industry. Text of the printing and type</span></p>
                                                        <a href="{{route('user.ground.floor.ticket.pricing')}}" class="btn btn-primary">SELECT</a>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="main-images-wizard">
                        <div class="submit-curator-img">
                            <div class="cur-img-container">
                                <img class="sub-curator" src="{{asset('assets/front/images/cha2.png')}}" alt="TikTok Image" />
                            </div>
                        </div>
                        <div class="submit-influencer-img">
                            <div class="cur-img-container">
                                <img class="sub-influencer" src="{{asset('assets/front/images/hw-influencer.png')}}" alt="Instagram Image" />
                            </div>
                        </div>
                        <div class="submit-playlisting-img">
                            <div class="cur-img-container">
                                <img class="sub-playlisting" src="{{asset('assets/front/images/cha3.png')}}" alt="Instagram Image" />
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
        document.addEventListener("DOMContentLoaded", function () {
            const curatorButton = document.getElementById("submit-curator");
            const influencerButton = document.getElementById("submit-influencer");
            const playlistingButton = document.getElementById("submit-playlisting");
            const subCurator = document.querySelector(".sub-curator");
            const subInfluencer = document.querySelector(".sub-influencer");
            const subPlaylisting = document.querySelector(".sub-playlisting");
            curatorButton.addEventListener("mouseenter", function () {
                subCurator.classList.add("SlideInUp");
                subInfluencer.classList.remove("SlideInUp");
                subPlaylisting.classList.remove("SlideInUp");
            });
            influencerButton.addEventListener("mouseenter", function () {
                subCurator.classList.remove("SlideInUp");
                subInfluencer.classList.add("SlideInUp");
                subPlaylisting.classList.remove("SlideInUp");
            });
            playlistingButton.addEventListener("mouseenter", function () {
                subCurator.classList.remove("SlideInUp");
                subInfluencer.classList.remove("SlideInUp");
                subPlaylisting.classList.add("SlideInUp");
            });
        });
        // IMAGE HIDE & SHOW EFFECT SCRIPT END
    </script>
@endpush