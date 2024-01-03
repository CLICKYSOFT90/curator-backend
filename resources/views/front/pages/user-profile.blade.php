@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - Artist Profile')

@section('content')
    <!-- CURATOR BANNER SECTION BEGIN -->
    <section class="curator-profile-banner artist-pg-banner" style="background-image: url('assets/images/cover-images/{{$user->cover_image}}');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    @if($user->role_id === \App\Models\User::ARTIST_ID || $user->role_id === \App\Models\User::LABEL_ID)
                        <div class="curator-banner-flex curator-label-flex">
                            <div class="banner-circle-img border-line-circle">
                                <img src="{{$user->profile_image}}" alt="image" class="img-fluid">
                                <div class="artist-camera-icon">
                                    <a><i class="fa fa-camera" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="banner-circle-content">
                                <h2>{{$user->display_name}}</h2>
                                <div class="main-flag-flex">
                                    <div class="flag-flex">
                                        {{--                                    <img src="{{asset('assets/front/images/us-flag.png')}}" alt="image" class="img-fluid">--}}
                                        <p>{{(!empty($user->getCountry)) ? $user->getCountry->country_name : 'Country'}}</p>
                                    </div>
                                    <div class="user-flex-icon">
                                        <div class="flex-user-icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div class="flex-user-content">
                                            <span>Member Since</span>
                                            <p>{{date('F Y',strtotime($user->created_at))}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($user->role_id === \App\Models\User::CURATOR_ID)
                        <div class="curator-banner-flex">
                            <div class="banner-circle-img">
                                <img src="{{$user->profile_image}}" alt="image" class="img-fluid">
                            </div>
                            <div class="banner-circle-content">
                                <h2>
                                    {{$user->full_name}} <span>| Spotify Playlister</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32.912" height="38.003" viewBox="0 0 32.912 38.003">
                                        <defs>
                                            <linearGradient id="a" x1="-0.605" y1="-0.456" x2="1.008" y2="0.94" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#af6517"/>
                                                <stop offset="0.26" stop-color="#e0a03b"/>
                                                <stop offset="0.48" stop-color="#e9ff88"/>
                                                <stop offset="0.64" stop-color="#e0a03b"/>
                                                <stop offset="1" stop-color="#88390b"/>
                                            </linearGradient>
                                            <linearGradient id="b" x1="-0.204" y1="-0.115" x2="1.241" y2="1.147" xlink:href="#a"/>
                                            <linearGradient id="c" x1="-0.25" y1="-0.66" x2="0.851" y2="1.043" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#e0a03b"/>
                                                <stop offset="1" stop-color="#88390b"/>
                                            </linearGradient>
                                            <linearGradient id="d" x1="0.835" y1="0.912" x2="-0.001" y2="-0.144" xlink:href="#c"/>
                                            <linearGradient id="e" x1="-0.056" y1="0.407" x2="1.32" y2="0.77" xlink:href="#a"/>
                                            <linearGradient id="f" x1="-0.3" y1="-0.396" x2="1.375" y2="1.66" xlink:href="#a"/>
                                            <linearGradient id="g" x1="-1.259" y1="-24.214" x2="0.334" y2="-1.392" xlink:href="#a"/>
                                            <linearGradient id="h" x1="0.267" y1="0.314" x2="1.864" y2="2.01" xlink:href="#c"/>
                                            <linearGradient id="i" x1="-1.864" y1="0.212" x2="2.636" y2="0.718" xlink:href="#a"/>
                                            <linearGradient id="j" x1="-0.47" y1="-0.276" x2="0.957" y2="0.852" xlink:href="#a"/>
                                            <radialGradient id="k" cx="-1.688" cy="0.342" r="0.133" gradientTransform="matrix(2.766, 0.182, -1.797, 3.441, -1134.297, -27.991)" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#fff"/>
                                                <stop offset="0.01" stop-color="#fff" stop-opacity="0.98"/>
                                                <stop offset="0.39" stop-color="#fff" stop-opacity="0.569"/>
                                                <stop offset="0.68" stop-color="#fff" stop-opacity="0.259"/>
                                                <stop offset="0.9" stop-color="#fff" stop-opacity="0.071"/>
                                                <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                                            </radialGradient>
                                        </defs>
                                        <g transform="translate(-10.08 -2.97)">
                                            <g transform="translate(10.08 2.97)">
                                                <path d="M10.08,12.47l16.456-9.5,16.456,9.5v19l-16.456,9.5-16.456-9.5Z" transform="translate(-10.08 -2.97)" fill="url(#a)"/>
                                                <path d="M11.01,13.334,27.1,4.05l16.081,9.284V31.907L27.1,41.191,11.01,31.907Z" transform="translate(-10.639 -3.619)" fill="url(#b)"/>
                                                <path d="M26.954,19.7s.231-.247.65-.666l.347-.347c.14-.112.291-.235.45-.367s.335-.271.514-.419.4-.267.61-.411.442-.283.678-.431l.769-.383c.132-.064.267-.132.4-.2s.283-.112.427-.167l.889-.331a14.907,14.907,0,0,1,1.937-.439,15.842,15.842,0,0,1,2.049-.175,15.842,15.842,0,0,1,2.049.175,14.817,14.817,0,0,1,1.941.435c.3.112.6.223.889.331.144.056.291.1.427.167s.271.132.4.2c.263.132.518.259.769.383.235.147.458.291.678.431s.431.259.61.411.351.287.514.419.311.251.45.367.243.243.351.347c.419.423.65.666.65.666s-.271-.207-.726-.578c-.116-.092-.239-.2-.379-.307s-.307-.2-.478-.315a10.713,10.713,0,0,0-1.168-.714c-.219-.12-.446-.243-.686-.371-.247-.108-.5-.215-.765-.331-.132-.056-.263-.116-.4-.171s-.279-.092-.423-.14c-.283-.092-.574-.187-.869-.287a17.117,17.117,0,0,0-1.874-.371,14.572,14.572,0,0,0-1.965-.147,15.3,15.3,0,0,0-1.965.147,16.226,16.226,0,0,0-1.874.371c-.295.1-.586.191-.869.287-.144.048-.287.088-.423.14s-.267.116-.4.171c-.263.112-.518.223-.765.331-.235.128-.466.251-.686.371a10.644,10.644,0,0,0-1.164.71c-.171.112-.331.219-.478.315-.14.112-.263.215-.379.311-.458.371-.726.578-.726.578Z" transform="translate(-20.225 -10.427)" fill="#fff" opacity="0.9"/>
                                                <path d="M46.4,75.03s-.231.247-.65.666l-.347.347c-.14.112-.291.235-.45.367s-.335.271-.514.419-.4.267-.61.411-.442.283-.678.431l-.769.383c-.132.064-.267.132-.4.2s-.283.112-.427.167l-.889.331a14.82,14.82,0,0,1-1.941.438,15.841,15.841,0,0,1-2.049.175,15.838,15.838,0,0,1-2.049-.175,14.2,14.2,0,0,1-1.941-.438l-.889-.327c-.144-.056-.291-.1-.427-.167s-.271-.132-.4-.2c-.263-.132-.518-.259-.769-.383-.235-.147-.458-.291-.678-.431s-.431-.259-.61-.411-.351-.287-.514-.419-.311-.251-.45-.367S27.7,75.8,27.59,75.7c-.419-.423-.65-.666-.65-.666s.271.207.726.578c.116.092.239.2.379.307s.307.2.478.315a10.711,10.711,0,0,0,1.168.714c.219.12.446.243.686.371.247.108.5.215.765.331.132.056.263.116.4.171s.279.092.423.14c.283.092.574.187.869.287a17.116,17.116,0,0,0,1.874.371,13.167,13.167,0,0,0,3.931,0,16.222,16.222,0,0,0,1.874-.371c.3-.1.586-.191.869-.287.144-.048.287-.088.423-.14s.267-.116.4-.171c.263-.112.518-.223.765-.331.235-.128.466-.251.686-.371a10.642,10.642,0,0,0,1.164-.71c.171-.112.331-.219.478-.315.14-.112.267-.215.379-.311.458-.371.726-.578.726-.578Z" transform="translate(-20.219 -46.304)" fill="#fff" opacity="0.9"/>
                                                <circle cx="13.753" cy="13.753" r="13.753" transform="translate(2.703 5.246)" fill="#893b0c"/>
                                                <circle cx="13.454" cy="13.454" r="13.454" transform="translate(3.002 5.545)" fill="url(#c)"/>
                                                <path d="M51.36,83.645v-.431L67.441,73.93l.375.215Z" transform="translate(-34.904 -45.642)" fill="#692e0a"/>
                                                <path d="M10.08,74.145l.371-.215,16.085,9.284v.431Z" transform="translate(-10.08 -45.642)" fill="url(#d)"/>
                                                <g transform="translate(6.745 11.983)">
                                                    <path d="M28.778,47.05,27,35.96l6.3,2.982,3.412-5.912,3.412,5.912,6.295-2.982-1.77,11.1Z" transform="translate(-27 -33.03)" fill="#75330a"/>
                                                    <path d="M46.539,36.844l-6.131,2.9L37.072,33.97l-3.337,5.776-6.135-2.9,1.7,10.584,15.551.016Z" transform="translate(-27.361 -33.595)" fill="url(#e)"/>
                                                    <path d="M32.958,50.065,31.83,43.033l4.975,2.356,2.806-4.859,2.806,4.859L47.4,43.033l-1.124,7.044Z" transform="translate(-29.905 -37.54)" fill="url(#f)"/>
                                                    <path d="M32.976,64.45,31.86,65.758l15.551.016-1.116-1.312Z" transform="translate(-29.923 -51.925)" fill="url(#g)"/>
                                                    <path d="M42.99,39.746l.526,1.7,2.806-4.859,0-2.615Z" transform="translate(-36.616 -33.595)" fill="#e8f983"/>
                                                    <path d="M51.354,33.97l0,2.615,2.806,4.859.534-1.7Z" transform="translate(-41.643 -33.595)" fill="url(#h)"/>
                                                    <path d="M70.876,41.18l-1.682,2.244L68.07,50.468l1.116,1.312Z" transform="translate(-51.698 -37.931)" fill="url(#i)"/>
                                                    <g transform="translate(16.372 5.493)" opacity="0.9">
                                                        <path d="M69.194,46.81s-.044.446-.128,1.108c-.044.331-.092.718-.151,1.132s-.128.853-.2,1.3-.147.877-.219,1.292-.147.793-.207,1.124c-.128.658-.223,1.092-.223,1.092s.044-.446.128-1.108c.044-.331.092-.718.155-1.132s.128-.853.2-1.3.147-.877.219-1.292.147-.793.207-1.124c.128-.658.223-1.092.223-1.092Z" transform="translate(-68.07 -46.81)" fill="#fff"/>
                                                    </g>
                                                    <path d="M27.6,41.18l1.686,2.244,4.975,2.356-.526-1.7Z" transform="translate(-27.361 -37.931)" fill="url(#j)"/>
                                                    <path d="M68.625,50.4c-.375,2.037-1.184,3.6-1.8,3.48s-.813-1.862-.435-3.9,1.184-3.6,1.806-3.48.813,1.858.435,3.895Z" transform="translate(-50.57 -41.127)" fill="url(#k)"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </h2>
                                <div class="rating-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="main-flag-flex">
                                    <div class="flag-flex">
                                        {{--                                    <img src="{{asset('assets/front/images/us-flag.png')}}" alt="image" class="img-fluid">--}}
                                        <p>{{(!empty($user->getCountry)) ? $user->getCountry->country_name : 'Country'}}</p>
                                    </div>
                                    <div class="user-flex-icon">
                                        <div class="flex-user-icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div class="flex-user-content">
                                            <span>Member Since</span>
                                            <p>{{date('F Y',strtotime($user->created_at))}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($user->role_id === \App\Models\User::INFLUENCER_ID)
                        <div class="curator-banner-flex">
                            <div class="banner-circle-img">
                                <img src="{{$user->profile_image}}" alt="image" class="img-fluid">
                            </div>
                            <div class="banner-circle-content">
                                <h2>{{$user->display_name}} <span>| TikTok </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32.912" height="38.003" viewBox="0 0 32.912 38.003"><defs><linearGradient id="a" x1="-0.605" y1="-0.456" x2="1.008" y2="0.94" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#af6517"/><stop offset="0.26" stop-color="#e0a03b"/><stop offset="0.48" stop-color="#e9ff88"/><stop offset="0.64" stop-color="#e0a03b"/><stop offset="1" stop-color="#88390b"/></linearGradient><linearGradient id="b" x1="-0.204" y1="-0.115" x2="1.241" y2="1.147" xlink:href="#a"/><linearGradient id="c" x1="-0.25" y1="-0.66" x2="0.851" y2="1.043" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#e0a03b"/><stop offset="1" stop-color="#88390b"/></linearGradient><linearGradient id="d" x1="0.835" y1="0.912" x2="-0.001" y2="-0.144" xlink:href="#c"/><linearGradient id="e" x1="-0.056" y1="0.407" x2="1.32" y2="0.77" xlink:href="#a"/><linearGradient id="f" x1="-0.3" y1="-0.396" x2="1.375" y2="1.66" xlink:href="#a"/><linearGradient id="g" x1="-1.259" y1="-24.214" x2="0.334" y2="-1.392" xlink:href="#a"/><linearGradient id="h" x1="0.267" y1="0.314" x2="1.864" y2="2.01" xlink:href="#c"/><linearGradient id="i" x1="-1.864" y1="0.212" x2="2.636" y2="0.718" xlink:href="#a"/><linearGradient id="j" x1="-0.47" y1="-0.276" x2="0.957" y2="0.852" xlink:href="#a"/><radialGradient id="k" cx="-1.688" cy="0.342" r="0.133" gradientTransform="matrix(2.766, 0.182, -1.797, 3.441, -1134.297, -27.991)" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#fff"/><stop offset="0.01" stop-color="#fff" stop-opacity="0.98"/><stop offset="0.39" stop-color="#fff" stop-opacity="0.569"/><stop offset="0.68" stop-color="#fff" stop-opacity="0.259"/><stop offset="0.9" stop-color="#fff" stop-opacity="0.071"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></radialGradient></defs><g transform="translate(-10.08 -2.97)"><g transform="translate(10.08 2.97)"><path d="M10.08,12.47l16.456-9.5,16.456,9.5v19l-16.456,9.5-16.456-9.5Z" transform="translate(-10.08 -2.97)" fill="url(#a)"/><path d="M11.01,13.334,27.1,4.05l16.081,9.284V31.907L27.1,41.191,11.01,31.907Z" transform="translate(-10.639 -3.619)" fill="url(#b)"/><path d="M26.954,19.7s.231-.247.65-.666l.347-.347c.14-.112.291-.235.45-.367s.335-.271.514-.419.4-.267.61-.411.442-.283.678-.431l.769-.383c.132-.064.267-.132.4-.2s.283-.112.427-.167l.889-.331a14.907,14.907,0,0,1,1.937-.439,15.842,15.842,0,0,1,2.049-.175,15.842,15.842,0,0,1,2.049.175,14.817,14.817,0,0,1,1.941.435c.3.112.6.223.889.331.144.056.291.1.427.167s.271.132.4.2c.263.132.518.259.769.383.235.147.458.291.678.431s.431.259.61.411.351.287.514.419.311.251.45.367.243.243.351.347c.419.423.65.666.65.666s-.271-.207-.726-.578c-.116-.092-.239-.2-.379-.307s-.307-.2-.478-.315a10.713,10.713,0,0,0-1.168-.714c-.219-.12-.446-.243-.686-.371-.247-.108-.5-.215-.765-.331-.132-.056-.263-.116-.4-.171s-.279-.092-.423-.14c-.283-.092-.574-.187-.869-.287a17.117,17.117,0,0,0-1.874-.371,14.572,14.572,0,0,0-1.965-.147,15.3,15.3,0,0,0-1.965.147,16.226,16.226,0,0,0-1.874.371c-.295.1-.586.191-.869.287-.144.048-.287.088-.423.14s-.267.116-.4.171c-.263.112-.518.223-.765.331-.235.128-.466.251-.686.371a10.644,10.644,0,0,0-1.164.71c-.171.112-.331.219-.478.315-.14.112-.263.215-.379.311-.458.371-.726.578-.726.578Z" transform="translate(-20.225 -10.427)" fill="#fff" opacity="0.9"/><path d="M46.4,75.03s-.231.247-.65.666l-.347.347c-.14.112-.291.235-.45.367s-.335.271-.514.419-.4.267-.61.411-.442.283-.678.431l-.769.383c-.132.064-.267.132-.4.2s-.283.112-.427.167l-.889.331a14.82,14.82,0,0,1-1.941.438,15.841,15.841,0,0,1-2.049.175,15.838,15.838,0,0,1-2.049-.175,14.2,14.2,0,0,1-1.941-.438l-.889-.327c-.144-.056-.291-.1-.427-.167s-.271-.132-.4-.2c-.263-.132-.518-.259-.769-.383-.235-.147-.458-.291-.678-.431s-.431-.259-.61-.411-.351-.287-.514-.419-.311-.251-.45-.367S27.7,75.8,27.59,75.7c-.419-.423-.65-.666-.65-.666s.271.207.726.578c.116.092.239.2.379.307s.307.2.478.315a10.711,10.711,0,0,0,1.168.714c.219.12.446.243.686.371.247.108.5.215.765.331.132.056.263.116.4.171s.279.092.423.14c.283.092.574.187.869.287a17.116,17.116,0,0,0,1.874.371,13.167,13.167,0,0,0,3.931,0,16.222,16.222,0,0,0,1.874-.371c.3-.1.586-.191.869-.287.144-.048.287-.088.423-.14s.267-.116.4-.171c.263-.112.518-.223.765-.331.235-.128.466-.251.686-.371a10.642,10.642,0,0,0,1.164-.71c.171-.112.331-.219.478-.315.14-.112.267-.215.379-.311.458-.371.726-.578.726-.578Z" transform="translate(-20.219 -46.304)" fill="#fff" opacity="0.9"/><circle cx="13.753" cy="13.753" r="13.753" transform="translate(2.703 5.246)" fill="#893b0c"/><circle cx="13.454" cy="13.454" r="13.454" transform="translate(3.002 5.545)" fill="url(#c)"/><path d="M51.36,83.645v-.431L67.441,73.93l.375.215Z" transform="translate(-34.904 -45.642)" fill="#692e0a"/><path d="M10.08,74.145l.371-.215,16.085,9.284v.431Z" transform="translate(-10.08 -45.642)" fill="url(#d)"/><g transform="translate(6.745 11.983)"><path d="M28.778,47.05,27,35.96l6.3,2.982,3.412-5.912,3.412,5.912,6.295-2.982-1.77,11.1Z" transform="translate(-27 -33.03)" fill="#75330a"/><path d="M46.539,36.844l-6.131,2.9L37.072,33.97l-3.337,5.776-6.135-2.9,1.7,10.584,15.551.016Z" transform="translate(-27.361 -33.595)" fill="url(#e)"/><path d="M32.958,50.065,31.83,43.033l4.975,2.356,2.806-4.859,2.806,4.859L47.4,43.033l-1.124,7.044Z" transform="translate(-29.905 -37.54)" fill="url(#f)"/><path d="M32.976,64.45,31.86,65.758l15.551.016-1.116-1.312Z" transform="translate(-29.923 -51.925)" fill="url(#g)"/><path d="M42.99,39.746l.526,1.7,2.806-4.859,0-2.615Z" transform="translate(-36.616 -33.595)" fill="#e8f983"/><path d="M51.354,33.97l0,2.615,2.806,4.859.534-1.7Z" transform="translate(-41.643 -33.595)" fill="url(#h)"/><path d="M70.876,41.18l-1.682,2.244L68.07,50.468l1.116,1.312Z" transform="translate(-51.698 -37.931)" fill="url(#i)"/><g transform="translate(16.372 5.493)" opacity="0.9"><path d="M69.194,46.81s-.044.446-.128,1.108c-.044.331-.092.718-.151,1.132s-.128.853-.2,1.3-.147.877-.219,1.292-.147.793-.207,1.124c-.128.658-.223,1.092-.223,1.092s.044-.446.128-1.108c.044-.331.092-.718.155-1.132s.128-.853.2-1.3.147-.877.219-1.292.147-.793.207-1.124c.128-.658.223-1.092.223-1.092Z" transform="translate(-68.07 -46.81)" fill="#fff"/></g><path d="M27.6,41.18l1.686,2.244,4.975,2.356-.526-1.7Z" transform="translate(-27.361 -37.931)" fill="url(#j)"/><path d="M68.625,50.4c-.375,2.037-1.184,3.6-1.8,3.48s-.813-1.862-.435-3.9,1.184-3.6,1.806-3.48.813,1.858.435,3.895Z" transform="translate(-50.57 -41.127)" fill="url(#k)"/></g></g></g></svg>
                                </h2>
                                <div class="rating-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="main-flag-flex">
                                    <div class="flag-flex">
                                        {{--                                    <img src="{{asset('assets/front/images/italy-flag.png')}}" alt="image" class="img-fluid">--}}
                                        <p>{{(!empty($user->getCountry)) ? $user->getCountry->country_name : 'Country'}}</p>
                                    </div>
                                    <div class="user-flex-icon">
                                        <div class="flex-user-icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div class="flex-user-content">
                                            <span>Member Since</span>
                                            <p>{{date('F Y',strtotime($user->created_at))}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="artist-pencil-icon">
                <a><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="bt-style-box"></div>
    </section>
    <!-- CURATOR BANNER SECTION END -->
    <!-- ABOUT NETWORK SECTION BEGIN -->
    <section class="about-network-sec">

        <div class="container-fluid">
            @if($user->role_id === \App\Models\User::CURATOR_ID)
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="left-sec">
                            <div class="left-sec-box">
                                <h3>About</h3>
                                <p>{{$user->about_me}}</p>
                                <div class="left-social-link">
                                    <ul>
                                        @if(!empty($user->facebook_link))
                                            <li><a target="_blank" href="{{$user->facebook_link}}"><img src="{{asset('assets/front/images/f1.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->soundcloud_link))
                                            <li><a target="_blank" href="{{$user->soundcloud_link}}"><img src="{{asset('assets/front/images/f2.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->twitter_link))
                                            <li><a target="_blank" href="{{$user->twitter_link}}"><img src="{{asset('assets/front/images/f3.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->instagram_link))
                                            <li><a target="_blank" href="{{$user->instagram_link}}"><img src="{{asset('assets/front/images/f4.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->youtube_link))
                                            <li><a target="_blank" href="{{$user->youtube_link}}"><img src="{{asset('assets/front/images/f5.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="notable-medal-mobile-show">
                                <div class="medals-box">
                                    <h3 class="medal-head-text">Notable Stats</h3>
                                    <div class="badge-sec">
                                        <img src="{{asset('assets/front/images/badge1.png')}}" alt="image" class="img-fluid">
                                        <img src="{{asset('assets/front/images/badge2.png')}}" alt="image" class="img-fluid">
                                        <img src="{{asset('assets/front/images/badge3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="badge-inner-sec">
                                        <div class="inner-badge">
                                            <span><img src="{{asset('assets/front/images/mds1.png')}}" alt="image" class="img-fluid"></span>
                                            <p>2.1M Followers </p>
                                        </div>
                                        <div class="info-icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="badge-inner-sec">
                                        <div class="inner-badge">
                                            <span><img src="{{asset('assets/front/images/mds2.png')}}" alt="image" class="img-fluid"></span>
                                            <p>Average approval rate: 18.3%</p>
                                        </div>
                                        <div class="info-icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="badge-inner-sec">
                                        <div class="inner-badge">
                                            <span><img src="{{asset('assets/front/images/mds3.png')}}" alt="image" class="img-fluid"></span>
                                            <p>112 songs shared since joined.</p>
                                        </div>
                                        <div class="info-icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="genres-box">
                                <h3>Genres</h3>
                                <ul>
                                    <li>Rap (Eminem)</li>
                                    <li>Trap (Travis Scott)</li>
                                    <li>Melodic Rap (Kid LAROI)</li>
                                    <li>Sad Rap / Emo Rap (Lil Peep)</li>
                                    <li>Drill (Fivio Foriegn) </li>
                                    <li>Old School / Boom Bap (2pac) </li>
                                    <li>Gang Rap (Lil Durk)</li>
                                    <li>UK Hip Hop (Skepta)</li>
                                    <li>Latin Hip Hop (J Balvin)</li>
                                    <li>Detroit Rap (Babytron)</li>
                                    <li>Alternative Hip Hop</li>
                                </ul>
                            </div>
                            <div class="playlist-slider">
                                <div class="playlist-flex">
                                    <div class="playlist-content">
                                        <h3>Playlists</h3>
                                        <span>(View all)</span>
                                    </div>
                                    <div class="playlist-slider-cont">
                                        <div class="slider responsive">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="notable-medal-mobile-hide">
                            <div class="medals-box">
                                <h3 class="medal-head-text">Notable Stats</h3>
                                <div class="badge-sec">
                                    <img src="{{asset('assets/front/images/badge1.png')}}" alt="image" class="img-fluid">
                                    <img src="{{asset('assets/front/images/badge2.png')}}" alt="image" class="img-fluid">
                                    <img src="{{asset('assets/front/images/badge3.png')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="badge-inner-sec">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/mds1.png')}}" alt="image" class="img-fluid"></span>
                                        <p>2.1M Followers </p>
                                    </div>
                                    <div class="info-icon">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="badge-inner-sec">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/mds2.png')}}" alt="image" class="img-fluid"></span>
                                        <p>Average approval rate: 18.3%</p>
                                    </div>
                                    <div class="info-icon">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="badge-inner-sec">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/mds3.png')}}" alt="image" class="img-fluid"></span>
                                        <p>112 songs shared since joined.</p>
                                    </div>
                                    <div class="info-icon">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="medals-box">
                            <div class="shared-box">
                                <h3>Recently shared</h3>
                                <a href="javascript:void(0)">View all</a>
                            </div>
                            <div class="badge-inner-sec shared-badge">
                                <div class="inner-badge">
                                    <span><img src="{{asset('assets/front/images/shared-path.png')}}" alt="image" class="img-fluid"></span>
                                </div>
                                <div class="info-icon">
                                    <p>Of The Sun - Pattern Rebirth</p>
                                    <span>Rockear.co (an hour ago)</span>
                                </div>
                            </div>
                            <div class="badge-inner-sec shared-badge">
                                <div class="inner-badge">
                                    <span><img src="{{asset('assets/front/images/shared-path.png')}}" alt="image" class="img-fluid"></span>
                                </div>
                                <div class="info-icon">
                                    <p>Of The Sun - Pattern Rebirth</p>
                                    <span>Rockear.co (an hour ago)</span>
                                </div>
                            </div>
                            <div class="badge-inner-sec shared-badge">
                                <div class="inner-badge">
                                    <span><img src="{{asset('assets/front/images/shared-path.png')}}" alt="image" class="img-fluid"></span>
                                </div>
                                <div class="info-icon">
                                    <p>Of The Sun - Pattern Rebirth</p>
                                    <span>Rockear.co (an hour ago)</span>
                                </div>
                            </div>
                            <div class="badge-inner-sec shared-badge">
                                <div class="inner-badge">
                                    <span><img src="{{asset('assets/front/images/shared-path.png')}}" alt="image" class="img-fluid"></span>
                                </div>
                                <div class="info-icon">
                                    <p>Of The Sun - Pattern Rebirth</p>
                                    <span>Rockear.co (an hour ago)</span>
                                </div>
                            </div>
                            <div class="badge-inner-sec shared-badge">
                                <div class="inner-badge">
                                    <span><img src="{{asset('assets/front/images/shared-path.png')}}" alt="image" class="img-fluid"></span>
                                </div>
                                <div class="info-icon">
                                    <p>Of The Sun - Pattern Rebirth</p>
                                    <span>Rockear.co (an hour ago)</span>
                                </div>
                            </div>
                            <div class="badge-inner-sec shared-badge">
                                <div class="inner-badge">
                                    <span><img src="{{asset('assets/front/images/shared-path.png')}}" alt="image" class="img-fluid"></span>
                                </div>
                                <div class="info-icon">
                                    <p>Of The Sun - Pattern Rebirth</p>
                                    <span>Rockear.co (an hour ago)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($user->role_id === \App\Models\User::ARTIST_ID)
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="left-sec">
                            <div class="left-sec-box">
                                <h3>About Artist</h3>
                                <p>{{$user->about_me}}</p>
                                <div class="left-social-link">
                                    <ul>
                                        @if(!empty($user->facebook_link))
                                            <li><a target="_blank" href="{{$user->facebook_link}}"><img src="{{asset('assets/front/images/f1.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->soundcloud_link))
                                            <li><a target="_blank" href="{{$user->soundcloud_link}}"><img src="{{asset('assets/front/images/f2.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->twitter_link))
                                            <li><a target="_blank" href="{{$user->twitter_link}}"><img src="{{asset('assets/front/images/f3.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->instagram_link))
                                            <li><a target="_blank" href="{{$user->instagram_link}}"><img src="{{asset('assets/front/images/f4.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                        @if(!empty($user->youtube_link))
                                            <li><a target="_blank" href="{{$user->youtube_link}}"><img src="{{asset('assets/front/images/f5.png')}}" alt="image" class="img-fluid"></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="label-playlist-slider">
                                <div class="label-playlist-flex">
                                    <div class="label-playlist-content">
                                        <h3>Tracks</h3>
                                    </div>
                                    <div class="label-view-all">
                                        <a href="javascript:void(0)">(View all)</a>
                                    </div>
                                </div>
                                <div class="artist-track-mobile-hide">
                                    <div class="row">
                                        @forelse($songs as $song)
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                                <a href="javascript:void(0)">
                                                    <div class="lb-box-inner tr-box-img">
                                                        <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="{{$song->track_title}}" class="img-fluid">
                                                        <h6>{{$song->track_title}}</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="breams-box">
                                                    <p class="text-danger">No track found*</p>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="artist-track-mobile-show">
                                    <div class="slider artist-page-mobile-responsive">
                                        @forelse($songs as $song)
                                            <div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                                    <a href="javascript:void(0)">
                                                        <div class="lb-box-inner tr-box-img">
                                                            <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="{{$song->track_title}}" class="img-fluid">
                                                            <h6>{{$song->track_title}}</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @empty
                                            <div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="breams-box">
                                                        <p class="text-danger">No track found*</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="favorites-box">
                            <div class="favorite-top-bar">
                                <div class="favorite-top-heading">
                                    <h3>Favorites</h3>
                                </div>
                                <div class="favorite-top-link">
                                    <a href="javascript:void(0)">View all</a>
                                </div>
                            </div>
                            <div class="artist-track-mobile-hide">
                                <div class="row favorite-row-box">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa1.png')}}" alt="images" class="img-fluid">
                                                <p>@alannadrgn</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa2.png')}}" alt="images" class="img-fluid">
                                                <p>@whoisbennyyyyyyy</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa3.png')}}" alt="images" class="img-fluid">
                                                <p>gaby_cosplay</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa4.png')}}" alt="images" class="img-fluid">
                                                <p>@notjameslunet</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa5.png')}}" alt="images" class="img-fluid">
                                                <p>@jessecase</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa6.png')}}" alt="images" class="img-fluid">
                                                <p>@purplemenio</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="artist-track-mobile-show">
                                <div class="slider artist-top-view-responsive">
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa1.png')}}" alt="images" class="img-fluid">
                                                <p>@alannadrgn</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa2.png')}}" alt="images" class="img-fluid">
                                                <p>@whoisbennyyyyyyy</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa3.png')}}" alt="images" class="img-fluid">
                                                <p>gaby_cosplay</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa4.png')}}" alt="images" class="img-fluid">
                                                <p>@notjameslunet</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa5.png')}}" alt="images" class="img-fluid">
                                                <p>@jessecase</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="favorite-boxes-cont">
                                                <img src="{{asset('assets/front/images/fa6.png')}}" alt="images" class="img-fluid">
                                                <p>@purplemenio</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($user->role_id === \App\Models\User::LABEL_ID)
               <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="left-sec">
                                <div class="left-sec-box">
                                    <h3>About Label</h3>
                                    <p>{{$user->about_me}}</p>
                                    <div class="left-social-link">
                                        <ul>
                                            @if(!empty($user->facebook_link))
                                                <li><a target="_blank" href="{{$user->facebook_link}}"><img src="{{asset('assets/front/images/f1.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->soundcloud_link))
                                                <li><a target="_blank" href="{{$user->soundcloud_link}}"><img src="{{asset('assets/front/images/f2.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->twitter_link))
                                                <li><a target="_blank" href="{{$user->twitter_link}}"><img src="{{asset('assets/front/images/f3.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->instagram_link))
                                                <li><a target="_blank" href="{{$user->instagram_link}}"><img src="{{asset('assets/front/images/f4.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->youtube_link))
                                                <li><a target="_blank" href="{{$user->youtube_link}}"><img src="{{asset('assets/front/images/f5.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="label-playlist-slider">
                                    <div class="label-playlist-flex">
                                        <div class="label-playlist-content">
                                            <h3>Artists</h3>
                                        </div>
                                        <div class="label-view-all">
                                            <a href="javascript:void(0)">(View all)</a>
                                        </div>
                                    </div>
                                    <div class="artist-track-mobile-hide">
                                        <div class="row">
                                            @forelse($artists as $val)
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                                    <a href="javascript:void(0)">
                                                        <div class="lb-box-inner">
                                                            <img src="{{asset('assets/front/images/profile-images/'.$val->profile_image)}}" alt="image" class="img-fluid shape-img">
                                                            <h6>{{$val->full_name}}</h6>
                                                            <span>{{(!empty($val->getCountry)) ? $val->getCountry->country_name : 'Country'}}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @empty
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="breams-box">
                                                        <p class="text-danger">No artist found*</p>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="artist-track-mobile-show">
                                        <div class="slider label-mobile-slider-responsive">
                                            @forelse($artists as $val)
                                                <div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                                        <a href="javascript:void(0)">
                                                            <div class="lb-box-inner">
                                                                <img src="{{asset('assets/front/images/profile-images/'.$val->profile_image)}}" alt="image" class="img-fluid shape-img">
                                                                <h6>{{$val->full_name}}</h6>
                                                                <span>{{(!empty($val->getCountry)) ? $val->getCountry->country_name : 'Country'}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @empty
                                                <div>
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                        <div class="breams-box">
                                                            <p class="text-danger">No artist found*</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="favorites-box">
                                <div class="favorite-top-bar">
                                    <div class="favorite-top-heading">
                                        <h3>Favorites</h3>
                                    </div>
                                    <div class="favorite-top-link">
                                        <a href="javascript:void(0)">View all</a>
                                    </div>
                                </div>
                                <div class="artist-track-mobile-hide">
                                    <div class="row favorite-row-box">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa1.png')}}" alt="images" class="img-fluid">
                                                    <p>@alannadrgn</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa2.png')}}" alt="images" class="img-fluid">
                                                    <p>@whoisbennyyyyyyy</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa3.png')}}" alt="images" class="img-fluid">
                                                    <p>gaby_cosplay</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa4.png')}}" alt="images" class="img-fluid">
                                                    <p>@notjameslunet</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa5.png')}}" alt="images" class="img-fluid">
                                                    <p>@jessecase</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa6.png')}}" alt="images" class="img-fluid">
                                                    <p>@purplemenio</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="artist-track-mobile-show">
                                    <div class="slider label-favourite-slider-responsive">
                                        <div>
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa1.png')}}" alt="images" class="img-fluid">
                                                    <p>@alannadrgn</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa2.png')}}" alt="images" class="img-fluid">
                                                    <p>@whoisbennyyyyyyy</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa3.png')}}" alt="images" class="img-fluid">
                                                    <p>gaby_cosplay</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa4.png')}}" alt="images" class="img-fluid">
                                                    <p>@notjameslunet</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa5.png')}}" alt="images" class="img-fluid">
                                                    <p>@jessecase</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <div class="favorite-boxes-cont">
                                                    <img src="{{asset('assets/front/images/fa6.png')}}" alt="images" class="img-fluid">
                                                    <p>@purplemenio</p>
                                                    <span>TikTok | 187.9k fans</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="favorites-box">
                                <div class="favorite-top-bar">
                                    <div class="favorite-top-heading">
                                        <h3>Tracks</h3>
                                    </div>
                                    <div class="favorite-top-link">
                                        <a href="javascript:void(0)">View all</a>
                                    </div>
                                </div>
                                <div class="artist-track-mobile-hide">
                                    <div class="row favorite-row-box">
                                        @forelse($songs as $song)
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <a href="javascript:void(0)">
                                                    <div class="favorite-boxes-cont">
                                                        <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="images" class="img-fluid">
                                                        <p>{{$song->track_title}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="breams-box">
                                                    <p class="text-danger">No track found*</p>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="artist-track-mobile-show">
                                    <div class="slider label-track-slider-responsive">
                                        @forelse($songs as $song)
                                            <div>
                                                <a href="javascript:void(0)">
                                                    <div class="favorite-boxes-cont">
                                                        <img src="{{asset('assets/front/songs/cover/'.$song->cover_image)}}" alt="images" class="img-fluid">
                                                        <p>{{$song->track_title}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <div>
                                                <div class="breams-box">
                                                    <p class="text-danger">No track found*</p>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
            @if($user->role_id === \App\Models\User::INFLUENCER_ID)
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="left-sec">
                                <div class="left-sec-box">
                                    <h3>About</h3>
                                    <p>{{$user->about_me}}</p>
                                    <div class="left-social-link">
                                        <ul>
                                            @if(!empty($user->facebook_link))
                                                <li><a target="_blank" href="{{$user->facebook_link}}"><img src="{{asset('assets/front/images/f1.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->soundcloud_link))
                                                <li><a target="_blank" href="{{$user->soundcloud_link}}"><img src="{{asset('assets/front/images/f2.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->twitter_link))
                                                <li><a target="_blank" href="{{$user->twitter_link}}"><img src="{{asset('assets/front/images/f3.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->instagram_link))
                                                <li><a target="_blank" href="{{$user->instagram_link}}"><img src="{{asset('assets/front/images/f4.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                            @if(!empty($user->youtube_link))
                                                <li><a target="_blank" href="{{$user->youtube_link}}"><img src="{{asset('assets/front/images/f5.png')}}" alt="image" class="img-fluid"></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="notable-medal-mobile-show">
                                    <div class="medals-box">
                                        <h3 class="medal-head-text">Notable Stats</h3>
                                        <div class="badge-sec">
                                            <img src="{{asset('assets/front/images/badge1.png')}}" alt="image" class="img-fluid">
                                            <img src="{{asset('assets/front/images/badge2.png')}}" alt="image" class="img-fluid">
                                            <img src="{{asset('assets/front/images/badge3.png')}}" alt="image" class="img-fluid">
                                        </div>
                                        <div class="badge-inner-sec">
                                            <div class="inner-badge">
                                                <span><img src="{{asset('assets/front/images/mds1.png')}}" alt="image" class="img-fluid"></span>
                                                <p>2.1M Followers </p>
                                            </div>
                                            <div class="info-icon">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="badge-inner-sec">
                                            <div class="inner-badge">
                                                <span><img src="{{asset('assets/front/images/mds2.png')}}" alt="image" class="img-fluid"></span>
                                                <p>Average approval rate: 18.3%</p>
                                            </div>
                                            <div class="info-icon">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="badge-inner-sec">
                                            <div class="inner-badge">
                                                <span><img src="{{asset('assets/front/images/mds3.png')}}" alt="image" class="img-fluid"></span>
                                                <p>112 songs shared since joined.</p>
                                            </div>
                                            <div class="info-icon">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="genres-box">
                                    <h3>Genres</h3>
                                    <ul>
                                        <li>Rap (Eminem)</li>
                                        <li>Trap (Travis Scott)</li>
                                        <li>Melodic Rap (Kid LAROI)</li>
                                        <li>Sad Rap / Emo Rap (Lil Peep)</li>
                                        <li>Drill (Fivio Foriegn) </li>
                                        <li>Old School / Boom Bap (2pac) </li>
                                        <li>Gang Rap (Lil Durk)</li>
                                        <li>UK Hip Hop (Skepta)</li>
                                        <li>Latin Hip Hop (J Balvin)</li>
                                        <li>Detroit Rap (Babytron)</li>
                                        <li>Alternative Hip Hop</li>
                                    </ul>
                                </div>
                                <div class="playlist-slider">
                                    <div class="playlist-flex">
                                        <div class="playlist-content">
                                            <h3>Videos</h3>
                                            <span>(View all)</span>
                                        </div>
                                        <div class="playlist-slider-cont">
                                            <div class="slider responsive">
                                                <div>
                                                    <div class="khaby-shared-slider-box">
                                                        <a href="javascript:void(0)">
                                                            <div class="khaby-video-slide">
                                                                <div class="vid-chg-overlays"></div>
                                                                <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                <div class="video-btn-icon">
                                                                    <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="khaby-shared-slider-box">
                                                        <a href="javascript:void(0)">
                                                            <div class="khaby-video-slide">
                                                                <div class="vid-chg-overlays"></div>
                                                                <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                <div class="video-btn-icon">
                                                                    <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="khaby-shared-slider-box">
                                                        <a href="javascript:void(0)">
                                                            <div class="khaby-video-slide">
                                                                <div class="vid-chg-overlays"></div>
                                                                <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                <div class="video-btn-icon">
                                                                    <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="khaby-shared-slider-box">
                                                        <a href="javascript:void(0)">
                                                            <div class="khaby-video-slide">
                                                                <div class="vid-chg-overlays"></div>
                                                                <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                <div class="video-btn-icon">
                                                                    <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="khaby-shared-slider-box">
                                                        <a href="javascript:void(0)">
                                                            <div class="khaby-video-slide">
                                                                <div class="vid-chg-overlays"></div>
                                                                <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                <div class="video-btn-icon">
                                                                    <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="khaby-shared-slider-box">
                                                        <a href="javascript:void(0)">
                                                            <div class="khaby-video-slide">
                                                                <div class="vid-chg-overlays"></div>
                                                                <img src="{{asset('assets/front/images/khaby-video.png')}}" alt="image" class="img-fluid khb1">
                                                                <div class="video-btn-icon">
                                                                    <a href="javascript:void(0)"><img src="{{asset('assets/front/images/vid-img-icon.png')}}" alt="image" class="img-fluid"></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="notable-medal-mobile-hide">
                                <div class="medals-box">
                                    <h3 class="medal-head-text">Notable Stats</h3>
                                    <div class="badge-sec">
                                        <img src="{{asset('assets/front/images/badge1.png')}}" alt="image" class="img-fluid">
                                        <img src="{{asset('assets/front/images/badge2.png')}}" alt="image" class="img-fluid">
                                        <img src="{{asset('assets/front/images/badge3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="badge-inner-sec">
                                        <div class="inner-badge">
                                            <span><img src="{{asset('assets/front/images/mds1.png')}}" alt="image" class="img-fluid"></span>
                                            <p>2.1M Followers </p>
                                        </div>
                                        <div class="info-icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="badge-inner-sec">
                                        <div class="inner-badge">
                                            <span><img src="{{asset('assets/front/images/mds2.png')}}" alt="image" class="img-fluid"></span>
                                            <p>Average approval rate: 18.3%</p>
                                        </div>
                                        <div class="info-icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="badge-inner-sec">
                                        <div class="inner-badge">
                                            <span><img src="{{asset('assets/front/images/mds3.png')}}" alt="image" class="img-fluid"></span>
                                            <p>112 songs shared since joined.</p>
                                        </div>
                                        <div class="info-icon">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="medals-box khaby-medal-box">
                                <div class="shared-box">
                                    <h3>Recently shared</h3>
                                    <a href="javascript:void(0)">View all</a>
                                </div>
                                <div class="badge-inner-sec shared-badge">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/shared-path2.png')}}" alt="image" class="img-fluid"></span>
                                    </div>
                                    <div class="info-icon">
                                        <p>Of The Sun - Pattern Rebirth</p>
                                        <span>Rockear.co (an hour ago)</span>
                                    </div>
                                </div>
                                <div class="badge-inner-sec shared-badge">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/shared-path2.png')}}" alt="image" class="img-fluid"></span>
                                    </div>
                                    <div class="info-icon">
                                        <p>Of The Sun - Pattern Rebirth</p>
                                        <span>Rockear.co (an hour ago)</span>
                                    </div>
                                </div>
                                <div class="badge-inner-sec shared-badge">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/shared-path2.png')}}" alt="image" class="img-fluid"></span>
                                    </div>
                                    <div class="info-icon">
                                        <p>Of The Sun - Pattern Rebirth</p>
                                        <span>Rockear.co (an hour ago)</span>
                                    </div>
                                </div>
                                <div class="badge-inner-sec shared-badge">
                                    <div class="inner-badge">
                                        <span><img src="{{asset('assets/front/images/shared-path2.png')}}" alt="image" class="img-fluid"></span>
                                    </div>
                                    <div class="info-icon">
                                        <p>Of The Sun - Pattern Rebirth</p>
                                        <span>Rockear.co (an hour ago)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
        </div>
    </section>
    <!-- ABOUT NETWORK SECTION END -->
@endsection

@push('front-scripts')
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script>
        $(function (){
            new WOW().init();
        });

        /*ACCORDIAN SCRIPT BEGIN*/
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/

        // ARTIST PAGE MOBILE SLIDER SCRIPT BEGIN
        $('.artist-page-mobile-responsive').slick({
            dots: true,
            arrows: false,
            infinite: true,
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
        // ARTIST PAGE MOBILE SLIDER SCRIPT END
        // ARTIST TOP VIEW PAGE MOBILE SLIDER SCRIPT BEGIN
        $('.artist-top-view-responsive').slick({
            dots: true,
            arrows: false,
            infinite: true,
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
        // ARTIST TOP VIEW PAGE MOBILE SLIDER SCRIPT END
    </script>
@endpush