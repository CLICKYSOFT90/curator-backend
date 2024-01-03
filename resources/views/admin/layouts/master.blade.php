<!DOCTYPE html>
<html lang="en"
      class="light-style layout-navbar-fixed layout-menu-fixed"
      dir="ltr"
      data-theme="theme-default"
      data-assets-path="{{asset('/assets/admin/img/favicon/favicon.png')}}/"
      data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title', '')</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/admin/img/favicon/favicon.png')}}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/boxicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/fontawesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/flag-icons.css')}}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/css/rtl/core.css')}}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/css/rtl/theme-default.css')}}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{asset('assets/admin/css/main.css')}}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/libs/typeahead-js/typeahead.css')}}"/>

    <script src="{{asset('assets/admin/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('assets/admin/js/config.js')}}"></script>

    <style>
        .redirect-btn {
            color: white !important;
        }

        .cs-style{
            padding-left: 22px;
        }

        .cs-style h2{
            font-size :20px;margin: 0;
        }

        #cover-spin {
            position:fixed;
            width:100%;
            left:0;right:0;top:0;bottom:0;
            background-color: rgba(255,255,255,0.7);
            z-index:9999;
            display:none;
        }

        @-webkit-keyframes spin {
            from {-webkit-transform:rotate(0deg);}
            to {-webkit-transform:rotate(360deg);}
        }

        @keyframes spin {
            from {transform:rotate(0deg);}
            to {transform:rotate(360deg);}
        }

        #cover-spin::after {
            content:'';
            display:block;
            position:absolute;
            left:48%;top:40%;
            width:40px;height:40px;
            border-style:solid;
            border-color:#5a8dee;
            border-top-color:transparent;
            border-width: 4px;
            border-radius:50%;
            -webkit-animation: spin .8s linear infinite;
            animation: spin .8s linear infinite;
        }
    </style>

    @stack('styles')
</head>

<body>
<div id="cover-spin"></div>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        @include('admin.layouts.side-bar')

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            @include('admin.layouts.nav')

            <div class="content-wrapper">

                <!-- Content -->
                @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            Copyright © {{date('Y')}}
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>

    <div class="drag-target"></div>
</div>

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

<!-- Main JS -->
<script src="{{asset('assets/admin/js/main.js')}}"></script>
<script>
    function showLoader() {
        $('#cover-spin').show();
    }

    function hideLoader() {
        $('#cover-spin').hide();
    }
</script>
@stack('scripts')
</body>
</html>