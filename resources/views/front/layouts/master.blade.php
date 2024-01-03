<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $title ?? 'Curator Club')</title>

    <link rel="icon" type="image/x-icon" href="{{asset('assets/front/images/curator-favicon.png')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/front/css/main.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
        .alert.alert-danger ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
        }
        .alert.alert-danger li {
            font-size: 14px;
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
            border-color:#FBBC04;
            border-top-color:transparent;
            border-width: 4px;
            border-radius:50%;
            -webkit-animation: spin .8s linear infinite;
            animation: spin .8s linear infinite;
        }
    </style>
    @stack('front-styles')
</head>
<body class="{{$bodyClass ?? ''}}">
<div id="cover-spin"></div>

@include('front.layouts.nav')
@if(!isRouteActive(['home']) && !isRouteActive(['user-verification']) && (!empty(auth()->user()) && auth()->user()->is_completed === 0))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Please ensure that your account details are completed before submitting. <a href="{{route('account.setting')}}">Click here to proceed.</a>
    </div>
@endif
@yield('content')

@include('front.layouts.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{asset('assets/js/axios.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
<script src="https://cdn.socket.io/socket.io-3.0.1.min.js"></script>
<script src="{{asset('assets/front/js/socket.js')}}"></script>
<script src="{{asset('assets/front/js/socket-fire.js')}}"></script>
<script>
    /*MENUBAR SCRIPT BEGIN*/
    let currentUserId = '{{auth()->id()}}';
    socket.on("message_sent_ack", function(data) {
        try {
            if (data.payload.userId==currentUserId) {
                if ($("#myTabContent .conversation").find(`.first-chat-box-${currentUserId}`)) {
                    $('.chat-messages').append(data.payload.newMessage);
                    setTimeout(function(){
                        var objDiv = document.getElementById("chat-messages");
                        objDiv.scrollTop = objDiv.scrollHeight;
                    }, 500);
                }
                getNotification();
            }
        } catch (e) {
            console.log('error',e)
        }
    });

    const navbarMenu = document.getElementById("menu");
    const burgerMenu = document.getElementById("burger");
    const headerMenu = document.getElementById("header");
    const overlayMenu = document.querySelector(".overlay");
    if (burgerMenu && navbarMenu) {
        burgerMenu.addEventListener("click", () => {
            burgerMenu.classList.toggle("is-active");
            navbarMenu.classList.toggle("is-active");
        });
    }
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 992) {
            if (navbarMenu.classList.contains("is-active")) {
                navbarMenu.classList.remove("is-active");
                overlayMenu.classList.remove("is-active");
            }
        }
    });
    /*MENUBAR SCRIPT END*/

    /*DROPDOWN SCRIPT BEGIN*/
    const dd = document.querySelector('#dropdown-wrapper');
    const links = document.querySelectorAll('.dropdown-list a');
    const span = document.querySelector('span');
    if($('#dropdown-wrapper').length){
        dd.addEventListener('click', function() {
            this.classList.toggle('is-active');
        });
    }
    if($('.dropdown-list a').length){
        links.forEach((element) => {
            element.addEventListener('click', function(evt) {
                span.innerHTML = evt.currentTarget.textContent;
            })
        })
    }
    /*DROPDOWN SCRIPT END*/
// NOTIFICATION SCRIPT BEGIN
$(function() {
    var profile = $('.profile');
    var profiledropdown = $('.profiledropdown');
    profile.on('click', function() {
        if (profiledropdown.hasClass('fade')) {
            profiledropdown.removeClass('fade').addClass('fade_reverse');
        } else if (profiledropdown.hasClass('fade_reverse')) {
            profiledropdown.removeClass('fade_reverse').addClass('fade');
        } else {
            profiledropdown.addClass('fade');
        }

        // Close other dropdowns
        $('.menu-container').removeClass('active');
        $('.menu-container2').removeClass('active');
    });
});
// NOTIFICATION SCRIPT END

// AVATAR SCRIPT BEGIN
document.querySelector('.mini-photo-wrapper').addEventListener('click', function() {
    document.querySelector('.menu-container').classList.toggle('active');

    // Close other dropdowns
    $('.profiledropdown').removeClass('fade').removeClass('fade_reverse');
    $('.menu-container2').removeClass('active');
});

document.querySelector('.mini-photo-wrapper2').addEventListener('click', function() {
    document.querySelector('.menu-container2').classList.toggle('active');

    // Close other dropdowns
    $('.profiledropdown').removeClass('fade').removeClass('fade_reverse');
    $('.menu-container').removeClass('active');
});
// AVATAR SCRIPT END

    function notifyUser(message, icon, timer = 3000, confirmBtn = false, dangerMode = false) {
        swal(message, {
            icon: icon,
            timer: confirmBtn ? null : timer,
            button: confirmBtn,
            dangerMode: dangerMode,
            closeOnClickOutside: false,
        }).then((successBtn) => {
            if (successBtn) {
                window.location.reload();
            }
        });
        return false;
    }
    
    function triggerNewEvent(data) {
        handleSocket(data);
    }

    function getNotification() {
        axios.get("{{route('get.notifications')}}").then(function (res) {
            if (res.data.status=='success') {
                $('.notifications-section').html(res.data.notification);
                return false;
            }
        }).catch(function (error) {
            console.log('error',error);
        });
    }

    function showLoader() {
        $('#cover-spin').show();
    }

    function hideLoader() {
        $('#cover-spin').hide();
    }

    function profileUpload(input){
        let data = new FormData();
        let image = document.getElementById("output");
        data.append('profile_image',input.target.files[0])
        axios.post("{{route('profile.image.upload')}}",data).then(function (res) {
            if(res?.data?.file_src){
                image.src = res?.data?.file_src;
                notifyUser('profile upload successfully','success',3000);
            }
        }).catch(function (error) {
            console.log('error',error.response.data);
            notifyUser(error.response.data.message,'error',3000);
        });
    }
</script>
@stack('front-scripts')
</body>
</html>
