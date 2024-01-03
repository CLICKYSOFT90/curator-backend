<!DOCTYPE html>
<html lang="en"
      class="light-style layout-navbar-fixed layout-menu-fixed"
      dir="ltr"
      data-theme="theme-default"
      data-assets-path="../../assets/admin/" data-template="vertical-menu-template-starter">
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Reset Password</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/admin/img/favicon/favicon.png')}}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/boxicons.css')}}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/css/rtl/core.css')}}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"/>
<!-- Vendor -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/css/pages/page-auth.css')}}"/>
    <!-- Helpers -->
    <script src="{{asset('assets/admin/vendor/js/helpers.js')}}"></script>

    <script src="{{asset('assets/admin/js/config.js')}}"></script>
</head>

<body>
<!-- Content -->

<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
            <div class="flex-row text-center mx-auto">
                <img
                    src="{{asset('assets/admin/img/logo/logo-banner.png')}}"
                    alt="Auth Cover Bg color"
                    width="520"
                    class="img-fluid authentication-cover-img"
                    data-app-light-img="{{asset('assets/admin/img/logo/logo-banner.png')}}"
                    data-app-dark-img="{{asset('assets/admin/img/logo/logo-banner.png')}}"
                />
            </div>
        </div>
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <div class="app-brand mb-4">
                    <a href="{{route('admin.login')}}" class="app-brand-link gap-2 mb-2">

                        <span class="app-brand-text demo h3 mb-0 fw-bold">{{config('app.name')}}</span>
                    </a>
                </div>
                <h4 class="mb-2">Reset Password 🔒</h4>
                <p class="mb-4">for <span class="fw-bold">{{$user->email}}</span></p>
                <form class="mb-3" action="{{route('admin.reset.password.data', $user->verification_code)}}" method="POST">
                    @csrf
                    @include('admin.partials.alert')
                    <div class="mb-3">
                        <label for="email" class="form-label">New Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            autofocus
                        />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Confirm Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            autofocus
                        />
                    </div>
                    <button type="submit" class="btn btn-primary d-grid w-100">Set New Password</button>
                </form>
                <div class="text-center">
                    <a href="{{route('admin.login')}}" class="d-flex align-items-center justify-content-center">
                        <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
                        Back to login
                    </a>
                </div>
            </div>
        </div>
        <!-- /Login -->
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/admin/vendor/js/core.js -->
<script src="{{asset('assets/admin/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/admin/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/admin/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('assets/admin/vendor/libs/hammer/hammer.js')}}"></script>

<script src="{{asset('assets/admin/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('assets/admin/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{asset('assets/admin/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/admin/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/admin/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/admin/js/pages-auth.js')}}"></script>
</body>
</html>
