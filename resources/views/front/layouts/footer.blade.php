@if(isset($fullFooter))
<div class="bg-bottom-img">
    <div class="footer-overlay"></div>
    <!-- FOOTER SECTION BEGIN -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-logo-content">
                        <a href="javascript:void(0)">
                            <img src="{{asset('assets/front/images/logo.png')}}" alt="image" class="img-fluid">
                        </a>
                        <p>{{$globalSettingData->basic_info}}</p>
                        <div class="curator-social-icon">
                            <ul>
                                <li><a href="{{$globalSettingData->facebook_link}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{$globalSettingData->twitter_link}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{$globalSettingData->instagram_link}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 col-12">
                    <div class="curator-links">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="{{route('list.of.curators')}}">List of Curators</a></li>
                            <li><a href="{{route('list.of.artists')}}">List of Artists</a></li>
                            <li><a href="{{route('about.us')}}">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 col-12">
                    <div class="curator-links">
                        <h6>Support</h6>
                        <ul>
                            <li><a href="{{route('help')}}">Help</a></li>
                            <li><a href="{{route('terms.conditions')}}">Terms And conditions</a></li>
                            <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="curator-links">
                        <h6>Start</h6>
                        <ul>
                            <li><a href="{{route('login')}}">Log In</a></li>
                            <li><a href="{{route('sign-up')}}">Sign Up</a></li>
                            <li><a href="{{route('become-a-curator')}}">Become a Curator/Influencer</a></li>
                            <li><a href="mailto:{{$globalSettingData->contact_email}}" target="_blank">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                    <div class="curator-links">
                        <h6>Get tips, tricks, and updates <span>on all things.</span></h6>
                        <div class="email-form">
                            <form>
                                <input type="text" placeholder="First Name" class="form-control">
                                <input type="email" placeholder="Email" class="form-control">
                                <button type="button" class="btn btn-primary">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END -->
    <!-- COPYRIGHT SECTION BEGIN -->
    <section class="copyright-sec-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <p>Copyright © 2022-2023 Curator Club  |   All rights reserved   |   Proudly designed by <a href="https://clickysoft.com/">clickysoft</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- COPYRIGHT SECTION END -->
</div>
@else
    <section class="copyright-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <p>Copyright © 2022-2023 Curator Club  |   All rights reserved   |   Proudly designed by <a href="https://clickysoft.com/" target="_blank">clickysoft</a></p>
                </div>
            </div>
        </div>
    </section>
@endif