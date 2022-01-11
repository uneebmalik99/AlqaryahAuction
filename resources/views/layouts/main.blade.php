<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Alqaryah Auction</title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer">    
    <!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

    <style>
        :root {
            --primary: #e9262e;
            --primary-light: #fff0eb
        }
        body{
            font-family: 'Lato', sans-serif !important;
            background-color: white;
        }
        h1,h2,h3,h4,h5,h6,b{
            color: #222732;
        }
        nav ul li{
            list-style: none;
            display: inline-block;
            padding: 25px 15px;
            cursor: pointer;
        }
        nav .menu__left ul li i{
            font-size: 12px;
            margin-left: 10px;
        }
        nav{
            background: #0f141e;
            color: white;
        }
        .nav__container{
            width: 90%;
            display: flex;
            justify-content: space-between;
            margin:0 auto;
            padding: 13px 0;
        }
        nav ul{
            margin: 0;
        }
        .menu__left{
            display: flex;
            align-items: center;
        }
        .text-primary-new{
            color: var(--primary);
        }
        .menu__right{
            display: flex;
            align-items: center;
        }
        .menu-child{
            position: absolute;
            border-radius: 10px;
            box-shadow: 1px 1px 0 0 rgb(196 196 196 / 24%);
            border: solid 1px #e7edf3;
            color: #2f3b48;
            background: white;
            padding: 10px 15px;
            opacity: 0;
            display: none;
            transition: .2s ease;
            top: 80px;
            width: 220px;
            z-index: 2000;
        }
        .menu-child::before {
            content: "";
            position: absolute;
            left: 31px;
            top: -8px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 8px 8px;
            border-color: transparent transparent #fff transparent;
            z-index: 3;
        }
        .menu-child__item{
            padding: 10px 0;
            font-weight: bold;
            transition: all .2s;
        }
        .menu-child__item:hover{
            color: var(--primary);
        }
        .menu-child__item + .menu-child__item{
            border-top: 1px solid #ddd;
        }

        li:hover .menu-child{
            opacity: 1;
            display: block;
        }
        .mobile-menu-toggle, .mobile-users-area{
            display: none;
            align-items: center;
            font-size: 24px;
            color: var(--primary);
        }

        .mobile-menu {
            transform: translateX(-100%);
            width: 300px;
            height: 100%;
            background: #222732;
            position: absolute;
            top: 60px;
            left: 0;
            bottom: 0;
            z-index: 10;
            transition: .5s ease;
        }
        .mobile-menu-width{
            transform: translateX(0);
        }

        .mobile-menu ul li {
            display: block;
            padding: 10px 25px 10px 0;
        }
        .mobile-menu-list-child{
            display: none;
        }
        .mobile-menu-list-child .menu-child__item {
            padding: 10px;
            font-weight:400
        }

    </style>

    <!-- footer style | TODO: need to make a separate file -->
    <style>
        .page-footer {
            display: flex;
            background: #222732;
            color: white;
            padding: 50px 25px;
            /* align-items: normal; */
        }

        .footer-logo {
            width: 15%;
            display: flex;
            align-items: center;
        }

        .footer-logo img {
            width: 90%;
        }


        .footer-links {
            width: 30%;
            display: flex;
            flex-wrap: wrap;
            padding: 20px 45px;
            
        }

        .footer-links > div {
            width: 50%;
            padding: 10px;
            cursor:pointer
        }


        .footer-text {
            width: 30%;
            padding: 20px;
        }

        .footer-contact-info {
            padding: 20px;
            text-align: right;
            /* float: right; */
            width: 25%;
        }

        .footer-contact-info > div {
            padding: 8px 0;
        }
        .list-dot-primary {
            font-size: 22px;
            color: var(--primary);
            margin-right: 6px;
        }
    </style>

    <!-- medias -->
    <style>
        @media screen and (max-width: 991px){
            .mobile-menu-toggle, .mobile-users-area{
                display: flex;
            }
            .menu__right{
                display: none;
            }
            .menu__container{
                display: none;
            }
            .menu__left{
                margin: 0 auto;
            }
            .footer-logo{
                align-items: flex-start;
                padding: 40px 0;
            }
            .footer-links{
                flex-direction: column;
                width: 20%;
                padding: 20px;
            }
            .footer-links > div {
                width: 100%;
                padding: 10px;
            }
            .footer-contact-info{
                width: 35%;
            }

        }
       
        @media screen and (max-width: 750px){
            .page-footer{
                flex-direction: column;
                padding: 50px 45px;
            }
            .footer-logo{
                width: 30%;
                margin: 0 auto;
            }
            .footer-links{
                width: 100%;
            }
            .footer-links > div {
                border-bottom: 1px solid white;
            }
            .footer-text{
                width: 100%;
            }
            .footer-contact-info{
                width: 100%;
            }

        }

        @media screen and (max-width: 550px){
            .page-container{
                padding: 20px 15px !important;
            }
            .page-footer {
                flex-direction: column;
                padding: 50px 15px !important;
            }
            .footer-logo {
                width: 80%;
            }
        }
    </style>
    @yield('inline_style')
</head>

<body>
    <header>
        <nav>
            <div class="nav__container">
                <div class="mobile-menu">
                    <ul>
                        <li data-href="/">Home </li>
                        <li data-href="/all_listings">Find Vehicle </li>
                        <li class="expandable-list">Auction 
                                <i class="fa fa-chevron-down"></i>
                                <div class="mobile-menu-list-child">
                                    <div data-href="/home" class="menu-child__item">Today Auction</div>
                                    <div data-href="/home" class="menu-child__item">Auction Calendar</div>
                                    <div data-href="/auction_loc" class="menu-child__item">Auction Location</div>
                                </div>
                        </li>
                        <li class="expandable-list">Services 
                            <i class="fa fa-chevron-down"></i>
                            <div class="mobile-menu-list-child">
                                <div data-href="/contact" class="menu-child__item">Auto Auction</div>
                                <div data-href="/contact" class="menu-child__item">Auto Shipping</div>
                                <div data-href="/contact" class="menu-child__item">Sell your Car</div>
                            </div>
                        </li>
                        <li class="expandable-list">Support 
                            <i class="fa fa-chevron-down"></i>
                            <div class="mobile-menu-list-child">
                                <div data-href="/about" class="menu-child__item">About us</div>
                                <div data-href="/contact" class="menu-child__item">Contact</div>
                                <div data-href="/faq" class="menu-child__item">FAQ</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mobile-menu-toggle">
                    <i class="fas fa-stream"></i>
                </div>
                <div class="menu__left">
                    <div class="menu__logo">
                        <a href="/">
                            <img src="{{ asset('images/logo/logo-main.png') }}" alt="" style="width: 125px;">
                        </a>
                    </div>
                    <div class="menu__container">
                        <ul>
                            <li data-href="/">Home </li>
                            <li data-href="/all_listings">Find Vehicle </li>

                            <li>Auction <i class="fa fa-chevron-down"></i>
                                <div class="menu-child">
                                    <div data-href="/home" class="menu-child__item">Today Auction</div>
                                    <div data-href="/home" class="menu-child__item">Auction Calendar</div>
                                    <div data-href="/auction_loc" class="menu-child__item">Auction Location</div>
                                </div>
                            </li>
                            <li>Services 
                                <i class="fa fa-chevron-down"></i>
                                <div class="menu-child">
                                    <div data-href="/contact" class="menu-child__item">Auto Auction</div>
                                    <div data-href="/contact" class="menu-child__item">Auto Shipping</div>
                                    <div data-href="/contact" class="menu-child__item">Sell your Car</div>
                                </div>
                            </li>
                            <li>Support <i class="fa fa-chevron-down"></i>
                                <div class="menu-child">
                                    <div data-href="/about" class="menu-child__item">About us</div>
                                    <div data-href="/contact" class="menu-child__item">Contact</div>
                                    <div data-href="/faq" class="menu-child__item">FAQ</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu__right">
                    <ul>
                        <li data-alert="true" ><i class="far fa-user mr-3 text-primary-new"></i>Login</li>
                        <li data-alert="true" >Register</li>
                        <!-- <li><i class="fa fa-plus mr-3"></i> Add Listing</li> -->
                    </ul>
                </div>
                <div class="mobile-users-area">
                    <i class="fa fa-users"></i>
                </div>
            </div>
        </nav>

    @yield('header_content')
</header>
    
@yield('content')

<div class="page-footer">
        <div class="footer-logo">
            <img src="{{ asset('images/logo/logo-main.png') }}" alt="">
        </div>
        <div class="footer-links">
            <div data-href="/">
                <span class="list-dot-primary">•</span>
                <span>Home</span>
            </div>
            <div data-href="/all_listings">
                <span class="list-dot-primary">•</span>
                <span>Find Vehicle</span>
            </div>
            <div data-href="/about">
                <span class="list-dot-primary">•</span>
                <span>About</span>
            </div>
            <div data-href="/contact">
                <span class="list-dot-primary">•</span>
                <span>Contact</span>
            </div>
            <div data-href="/home">
                <span class="list-dot-primary">•</span>
                <span>Auction</span>
            </div>
        </div>
        <div class="footer-text">
            <p>
            If you need help with any aspect of the buying process, please don’t hesitate to ask us.
            <br>Our customer service representatives will be happy to assist you in any way.
            <br>Whether through email, phone or in person, we’re here to help you get the customer service you deserve.
            </p>
        </div>
        <div class="footer-contact-info">
            <div class="phone" style="font-size:25px; font-weight: bold;">
                <span style="color: var(--primary)">+971 </span>56 403 0184 
            </div>
            <div class="email">contact@alqaryahauction.com</div>
            <div class="address">Al Qaryah auction, Ind. Area 2<br> Sharjah, UAE </div>
        </div>
    </div>
    
    <script>
        $(function(){
            $('[data-href]').click(function(){
                window.location.href = $(this).attr('data-href');
            });
            $('[data-alert]').click(function(){
                alert('On site auction only');
            });
            $(document).on('click', '.mobile-menu-toggle', function(){
                handleMobileMenu(this);
            });
            $(document).on('click', '.expandable-list', function(){
                var $this = $(this);
                $this.find('.mobile-menu-list-child').slideToggle();

            });

        });
        function handleMobileMenu(el){
            $(".mobile-menu").toggleClass('mobile-menu-width');
        }
    </script>
</body>

</html>
@yield('scripts')
