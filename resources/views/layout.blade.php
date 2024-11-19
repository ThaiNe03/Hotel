<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Shilla Monogram &#8211; Room Reservation WordPress Theme</title>
    <link rel='stylesheet' href="{{asset('frontend\plugins\gdlr-hostel\gdlr-hotel.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\css\style.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\plugins\superfish\css\superfish.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\plugins\dl-menu\component.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\plugins\font-awesome-new\css\font-awesome.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\plugins\fancybox\jquery.fancybox.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\plugins\flexslider\flexslider.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\css\style-responsive.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\css\style-custom.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\plugins\masterslider\public\assets\css\masterslider.main.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{asset('frontend\css\custom.css?ver=2.6')}}" type='text/css' media='all'>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700|Open+Sans:300,300i,400,400i,600,700,800|Droid+Serif:300,300i,400,600,700" rel="stylesheet">
</head>

<body data-rsssl="1" class="home page-template-default page page-id-3720 _masterslider _msp_version_3.2.2  hotelmaster-button-classic-style  header-style-2  hotelmaster-classic-style  hotelmaster-single-classic-style">
    
    <div class="fixed1">
        <a href="{{route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
        </a>
    </div>
    <div class="fixed2" style="margin-right: 30px;">
        <a href="{{route('logout')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
              </svg>
        </a>
    </div>
    @auth
    <div class="fixed3" style="margin-right: 80px;">
        <a href="{{route('login')}}">{{ Auth::user()->name }}</a>
    </div>
    @endauth
    
    <div class="body-wrapper  float-menu gdlr-icon-light gdlr-header-solid" data-home="#">
        <header class="gdlr-header-wrapper">
            <!-- logo -->
            <div class="gdlr-header-inner">
                <div class="gdlr-header-container container">
                    <!-- logo -->
                    <div class="gdlr-logo">
                        <div class="gdlr-logo-inner">
                            <a href="{{route('home')}}">
                                <img src="{{asset('frontend\anh\logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <!-- navigation -->
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation" role="navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="{{route('home')}}">Trang chủ</a></li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="{{route('aboutus')}}" class="sf-with-ul-pre">Cơ sở vật chất</a>
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="{{route('room')}}" class="sf-with-ul-pre">Phòng</a>
                                </li>
                                <li class="menu-itemmenu-item gdlr-normal-menu"><a href="{{route('booking')}}">Đặt lịch</a></li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="{{route('blog')}}" class="sf-with-ul-pre">Blog</a>
                                <li class="menu-item">
                                    <a href="{{route('menu')}}">Menu</a>
                                </li>
                            </ul>
                        </nav>
                        <span class="gdlr-menu-search-button-sep">•</span>
                        <i class="fa fa-search icon-search gdlr-menu-search-button" id="gdlr-menu-search-button"></i>
                        <div class="gdlr-menu-search" id="gdlr-menu-search">
                            <form method="get" id="searchform" action="#">
                                <div class="search-text">
                                    <input type="text" value="Type Keywords" name="s" autocomplete="off" data-default="Type Keywords">
                                </div>
                                <input type="submit" value="">
                                <div class="clear"></div>
                            </form>
                        </div>
                        <div class="gdlr-navigation-gimmick " id="gdlr-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <div id="gdlr-header-substitute">
        </div>

        @yield('content')

        <!-- content wrapper -->
        <footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Đặt ngay!</h3>
                        <div class="clear"></div>
                        <div class="textwidget">
                            <p><i class="gdlr-icon fa fa-phone" style="color: #fff; font-size: 16px; "></i> +84-123-456-0000</p>
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: -15px;"></div>
                            <p><i class="gdlr-icon fa fa-envelope-o" style="color: #fff; font-size: 16px; "></i> Shilla@MonoGram.com</p>
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: 25px;"></div>
                            <p><a href="http://themeforest.net/user/goodlayers/" target="_blank"><i class="gdlr-icon fa fa-facebook-square" style="color: #fff; font-size: 24px; "></i></a> <a href="http://themeforest.net/user/goodlayers/" target="_blank"><i class="gdlr-icon fa fa-twitter-square" style="color: #fff; font-size: 24px; "></i></a> <a href="http://themeforest.net/user/goodlayers/" target="_blank"><i class="gdlr-icon fa fa-linkedin-square" style="color: #fff; font-size: 24px; "></i></a> <a href="http://themeforest.net/user/goodlayers/" target="_blank"><i class="gdlr-icon fa fa-google-plus-square" style="color: #fff; font-size: 24px; "></i></a> <a href="http://themeforest.net/user/goodlayers/" target="_blank"><i class="gdlr-icon fa fa-pinterest-square" style="color: #fff; font-size: 24px; "></i></a> <a href="http://themeforest.net/user/goodlayers/" target="_blank"><i class="gdlr-icon fa fa-flickr" style="color: #fff; font-size: 24px; "></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                    <div id="recent-posts-5" class="widget widget_recent_entries gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Giới thiệu</h3>
                        <div class="clear"></div>
                        <ul>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/introduction/viewCont.do?lang=vi&contId=INTRD">Giới thiệu về khách sạn</a>
                            </li>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/introduction/viewCont.do?lang=vi&contId=FTS">Tờ thông tin chung</a>
                            </li>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/inquires/viewCont.do?lang=vi&contId=HTM">Bản đồ theo tầng</a>
                            </li>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/inquires/viewCont.do?lang=vi&contId=LOC">Vị trí</a>
                            </li>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/introduction/viewCont.do?lang=vi&contId=TOURIST">Điểm tham quan xung quanh</a>
                            </li>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/inquires/viewCont.do?lang=vi&contId=CTU">Vui lòng liên hệ</a>
                            </li>
                            <li>
                                <a href="https://www.shillamonogram.com/dnmg/inquires/faq/ListFaq.do?lang=vi">Câu hỏi thường gặp</a>
                            </li>
                            <li>
                                <a href="https://www.shillahotels.com/membership/inquires/contactus/memSetVoc.do?propertyId=MGHUB&lang=vi&type=mgr&_ga=2.5975477.720953157.1696170968-1067634548.1695001553&_gl=1*1ssfa0f*_ga*MTA2NzYzNDU0OC4xNjk1MDAxNTUz*_ga_30Y6N61ES4*MTY5NjE3MDk2Ny4zLjEuMTY5NjE3MzIzNy41MS4wLjA.">Yêu cầu hoặc thắc mắc</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column six columns" id="footer-widget-3">
                    <div id="text-10" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Ngoài ra</h3>
                        <div class="clear"></div>
                        <div class="textwidget"><img src="{{asset('frontend\anh\logo.png')}}" alt="">
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: 20px;"></div>
                            Hotel Shilla 249, Dongho-ro, Jung-gu, Seoul 04605 Korea
                                            Copyright (C) HOTEL SHILLA CO, LTD. All Rights Reserved.</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a href="{{route('home')}}" style="margin-right: 10px;">Trang chủ</a>|<a href="{{route('booking')}}" style="margin-right: 10px; margin-left: 10px;">Đặt phòng</a> </div>
                    <div class="copyright-right">
                        Designer by Duy Thái </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
        </div>
        <!-- body-wrapper -->
    <script type='text/javascript' src="{{asset('frontend\js\jquery\jquery.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\jquery\jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\jquery\ui\core.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\jquery\ui\datepicker.min.js')}}"></script>
    
    <script type='text/javascript' src="{{asset('frontend\plugins\gdlr-hostel\gdlr-hotel.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\superfish\js\superfish.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\hoverIntent.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\dl-menu\modernizr.custom.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\dl-menu\jquery.dlmenu.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\jquery.easing.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\jquery.transit.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\fancybox\jquery.fancybox.pack.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\fancybox\helpers\jquery.fancybox-media.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\fancybox\helpers\jquery.fancybox-thumbs.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\flexslider\jquery.flexslider.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\jquery.isotope.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\js\gdlr-script.js')}}"></script>
    <script>
        (window.MSReady = window.MSReady || []).push(function($) {

            "use strict";
            var masterslider_7f3f = new MasterSlider();

            // slider controls
            masterslider_7f3f.control('arrows', {
                autohide: true,
                overVideo: true
            });
            masterslider_7f3f.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 8,
                margin: 25
            });
            // slider setup
            masterslider_7f3f.setup("MS5af5c0e887f3f", {
                width: 1140,
                height: 530,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: false,
                mouse: true,
                keyboard: false,
                layout: "fullwidth",
                wheel: false,
                autoplay: true,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                parallaxMode: 'swipe',
                view: "fadeFlow"
            });

            MSScrollParallax.setup(masterslider_7f3f, 30, 50, true);
            $("head").append("<link rel='stylesheet' id='ms-fonts'  href='//fonts.googleapis.com/css?family=Open+Sans:300,700|Merriweather:regular' type='text/css' media='all' />");

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_7f3f);
        });
    </script>
    <script type='text/javascript' src="{{asset('frontend\plugins\google-map-plugin\assets\js\maps.js')}}"></script>
    <script type='text/javascript' src="{{asset('frontend\plugins\masterslider\public\assets\js\masterslider.min.js')}}"></script>
</body>
</html>
