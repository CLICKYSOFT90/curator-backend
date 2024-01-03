<header class="header {{$headerClass ?? ''}}" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="header-inner">
                    <nav class="navbar container">
                        <a href="{{route('home')}}" class="brand">
                            <img src="{{asset('assets/front/images/logo.png')}}" alt="image" class="img-fluid">
                        </a>
                        <div class="burger" id="burger">
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                        </div>
                        <div class="menu" id="menu">
                            <ul class="menu-inner">
                                @if(auth()->user())
                                    @if(in_array(auth()->user()->role_id, [\App\Models\User::ARTIST_ID, \App\Models\User::LABEL_ID]))
                                        <li class="menu-item"><a href="{{route('home')}}" class="menu-link active">Home</a></li>
                                        <li class="menu-item"><a href="{{route('my.campaigns')}}" class="menu-link">Campaigns</a></li>
                                        <li class="menu-item"><a href="{{route('checkout')}}" class="menu-link">Purchase Coins</a></li>
                                        <li class="menu-item"><a href="{{route('list.of.curators')}}" class="menu-link">List of Curators </a></li>
                                        <li class="menu-item"><a href="{{route('help')}}" class="menu-link">Help </a></li>
                                        <li class="menu-item">
                                            <div class="btns-flex curator-mobile-show">
                                                <div class="cur-login-btn">
                                                    <div class='profile'>
                                                        <div class='avatar'>
                                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class='profiledropdown'>
                                                        <ul>
                                                            @include('front.layouts.notification')
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="cur-signup-btn">
                                                    <div class="user-menu-wrap">
                                                        <div class="jeff-cont">
                                                            <a class="mini-photo-wrapper2" href="javascript:void(0)">
                                                                <img class="mini-photo" src="{{auth()->user()->profile_image}}" alt="image" width="80" height="80"/>
                                                                {{auth()->user()->display_name}}
                                                            </a>
                                                        </div>
                                                        <div class="menu-container2">
                                                            <ul class="user-menu">
                                                                <div class="profile-highlight">
                                                                    <img src="{{auth()->user()->profile_image}}" alt="profile-img" width=36 height=36>
                                                                    <div class="details">
                                                                        <div id="profile-name">{{auth()->user()->display_name}}</div>
                                                                        <div id="profile-footer"><a href="javascript:void(0)" class="jeff-mail">{{auth()->user()->email}}</a></div>
                                                                        <div><a href="{{route('profile')}}" class="jeff-view-profile">View Profile</a></div>
                                                                    </div>
                                                                </div>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('my.campaigns')}}">
                                                                        <div>Campaigns</div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('checkout')}}">
                                                                        <div>Purchase Coins <span class="pull-right credit-amount-content">{{auth()->user()->coins}} <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span></div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('account.setting')}}">
                                                                        <div>Settings</div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('help')}}">
                                                                        <div>Help</div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('user.logout')}}">
                                                                        <div>Log Out</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="menu-item"><a href="{{route('dashboard')}}" class="menu-link">Dashboard </a></li>
                                        <li class="menu-item"><a href="{{route('my.wallet')}}" class="menu-link">Earnings </a></li>
                                        <li class="menu-item"><a href="{{route('my.campaigns')}}" class="menu-link">Campaigns </a></li>
                                        <li class="menu-item"><a href="{{route('list.of.curators')}}" class="menu-link">List of Curators </a></li>
                                        <li class="menu-item"><a href="{{route('help')}}" class="menu-link">Help </a></li>
                                        <li class="menu-item">
                                            <div class="btns-flex curator-mobile-show">
                                                <div class="cur-login-btn">
                                                    <div class='profile'>
                                                        <div class='avatar'>
                                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class='profiledropdown'>
                                                        <ul>
                                                            @include('front.layouts.notification')
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="cur-signup-btn">
                                                    <div class="user-menu-wrap">
                                                        <div class="jeff-cont">
                                                            <a class="mini-photo-wrapper2" href="javascript:void(0)">
                                                                <img class="mini-photo" src="{{auth()->user()->profile_image}}" alt="image" width="80" height="80"/>
                                                                {{auth()->user()->display_name}}
                                                            </a>
                                                        </div>
                                                        <div class="menu-container2">
                                                            <ul class="user-menu">
                                                                <div class="profile-highlight">
                                                                    <img src="{{auth()->user()->profile_image}}" alt="profile-img" width=36 height=36>
                                                                    <div class="details">
                                                                        <div id="profile-name">{{auth()->user()->display_name}}</div>
                                                                        <div id="profile-footer"><a href="javascript:void(0)" class="jeff-mail">{{auth()->user()->email}}</a></div>
                                                                        <div><a href="{{route('profile')}}" class="jeff-view-profile">View Profile</a></div>
                                                                    </div>
                                                                </div>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('my.campaigns')}}">
                                                                        <div>Campaigns</div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('checkout')}}">
                                                                        <div>Purchase Coins <span class="pull-right credit-amount-content">{{auth()->user()->coins}} <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span></div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('my.wallet')}}">
                                                                        <div>Earnings <span class="pull-right credit-amount-content">{{auth()->user()->coins}} <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span></div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('account.setting')}}">
                                                                        <div>Settings</div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('help')}}">
                                                                        <div>Help</div>
                                                                    </a>
                                                                </li>
                                                                <li class="user-menu__item">
                                                                    <a class="user-menu-link" href="{{route('user.logout')}}">
                                                                        <div>Log Out</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item"><a href="{{route('list.of.curators')}}" class="menu-link">List of Curators </a></li>
                                    <li class="menu-item mobile-dropdown-hide">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <div id="dropdown-wrapper" class="dropdown-wrapper" tabindex="1">
                                                <span>How it works </span>
                                                <ul class="dropdown-list">
                                                    <li><a href="{{route('how-it-works-curator')}}">Curator</a></li>
                                                    <li><a href="{{route('how-it-works-artist')}}">Artist</a></li>
                                                    <li><a href="{{route('how-it-works-influencer')}}">influencer</a></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item mobile-dropdown">
                                        <p>
                                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                How it works
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <ul class="mobile-dropdown-accordian">
                                                    <li><a href="{{route('how-it-works-curator')}}">Curator</a></li>
                                                    <li><a href="{{route('how-it-works-artist')}}">Artist</a></li>
                                                    <li><a href="{{route('how-it-works-influencer')}}">influencer</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item"><a href="{{route('help')}}" class="menu-link">Help </a></li>
                                    <li class="menu-item">
                                        <div class="btns-flex curator-mobile-show">
                                            <div class="cur-login-btn">
                                                <a href="{{route('login')}}" class="btn btn-primary">Log in</a>
                                            </div>
                                            <div class="cur-signup-btn">
                                                <a href="{{route('sign-up')}}" class="btn btn-primary">Sign up</a>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>

                    @if(auth()->user())
                        <div class="btns-flex curator-mobile-hide">
                            <div class="cur-login-btn">
                                <div class='profile'>
                                    <div class='avatar'>
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class='profiledropdown'>
                                    <ul class="notifications-section">
                                        @include('front.layouts.notification')
                                    </ul>
                                </div>
                            </div>
                            <div class="cur-signup-btn">
                                <div class="user-menu-wrap">
                                    <div class="jeff-cont">
                                        <a class="mini-photo-wrapper" href="javaascript:void(0)">
                                            <img class="mini-photo" src="{{auth()->user()->profile_image}}" alt="image" width="80" height="80"/>
                                            {{auth()->user()->display_name}}
                                        </a>
                                    </div>
                                    <div class="menu-container">
                                        <ul class="user-menu">
                                            <div class="profile-highlight">
                                                <img src="{{auth()->user()->profile_image}}" alt="profile-img" width=36 height=36>
                                                <div class="details">
                                                    <div id="profile-name">{{auth()->user()->display_name}}</div>
                                                    <div id="profile-footer"><a href="javascript:void(0)" class="jeff-mail">{{auth()->user()->email}}</a></div>
                                                    <div><a href="{{route('profile')}}" class="jeff-view-profile">View Profile</a></div>
                                                </div>
                                            </div>
                                            <li class="user-menu__item">
                                                <a class="user-menu-link" href="{{route('my.campaigns')}}">
                                                    <div>Campaigns</div>
                                                </a>
                                            </li>
                                            @if(in_array(auth()->user()->role_id, [\App\Models\User::ARTIST_ID, \App\Models\User::LABEL_ID]))
                                                <li class="user-menu__item">
                                                    <a class="user-menu-link" href="{{route('checkout')}}">
                                                        <div>Purchase Coins <span class="pull-right credit-amount-content">{{auth()->user()->coins}} <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span></div>
                                                    </a>
                                                </li>
                                            @else
                                                <li class="user-menu__item">
                                                    <a class="user-menu-link" href="{{route('checkout')}}">
                                                        <div>Purchase Coins <span class="pull-right credit-amount-content">{{auth()->user()->coins}} <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span></div>
                                                    </a>
                                                </li>
                                                <li class="user-menu__item">
                                                    <a class="user-menu-link" href="{{route('my.wallet')}}">
                                                        <div>Earnings <span class="pull-right credit-amount-content">{{auth()->user()->coins}} <img src="{{asset('assets/front/images/cur-small-logo.png')}}" alt="image" class="img-fluid"></span></div>
                                                    </a>
                                                </li>
                                            @endif
                                            <li class="user-menu__item">
                                                <a class="user-menu-link" href="{{route('account.setting')}}">
                                                    <div>Settings</div>
                                                </a>
                                            </li>
                                            <li class="user-menu__item">
                                                <a class="user-menu-link" href="{{route('help')}}">
                                                    <div>Help</div>
                                                </a>
                                            </li>
                                            <li class="user-menu__item">
                                                <a class="user-menu-link" href="{{route('user.logout')}}">
                                                    <div>Log Out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="btns-flex curator-mobile-hide">
                            <div class="cur-login-btn">
                                <a href="{{route('login')}}" class="btn btn-primary">Log in</a>
                            </div>
                            <div class="cur-signup-btn">
                                <a href="{{route('sign-up')}}" class="btn btn-primary">Sign up</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>


