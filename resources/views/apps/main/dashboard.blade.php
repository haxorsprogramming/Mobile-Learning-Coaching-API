<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <title>Aplikasi Tahsin</title>
    <link rel="stylesheet" href="{{ asset('ladun/mobiokit') }}/vendor/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="{{ asset('ladun/mobiokit') }}/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

</head>

<body>
    <!-- Overlay panel -->
    <div class="body-overlay"></div>
    <!-- Left panel -->
    <div></div>
    <div class="page page--main" data-page="main">
        <!-- HEADER -->
        <header class="header header--page header--fixed">
            <div class="header__inner">
                <div class="header__logo header__logo--text"><a href="javascript:void(0)">Aplikasi Mobile Learning</a></div>
                <div class="header__icon open-panel" data-panel="right"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/white/search.svg" alt="" title="" /></div>
            </div>
        </header>
        <!-- PAGE CONTENT -->
        <div class="page__content page__content--with-header page__content--with-bottom-nav" id="mainApp">

        </div>
        <div style="display:none;margin-top:80px;padding-left:40px;" id="divLoading">
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_lfirbva8.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>
    </div>
    <!-- PAGE END -->
    <!-- Bottom navigation -->
    <div class="bottom-toolbar">
        <div class="bottom-navigation">
            <div class="swiper-container-toolbar swiper-toolbar swiper-container-initialized swiper-container-horizontal">
                <div class="bottom-navigation__pagination"></div>
                <div class="bottom-navigation__more" style="display: none;"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/more.svg" alt="" title=""></div>
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-active" style="width: 370px;">
                        <ul class="bottom-navigation__icons">
                            <li><a href="javascript:void(0)" onclick="loadPage('apps-mobile/beranda')"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/home.svg"><span>Home</span></a></li>
                            <li><a href="javascript:void(0)" onclick="loadPage('apps-mobile/profile')"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/user.svg" alt="" title=""><span>Profil</span></a></li>
                            <li><a href="{{ url('/apps-mobile/logout') }}"><img src="{{ asset('ladun/mobiokit') }}/assets/images/icons/blue/arrow-right-circle.svg"><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>

    </div>
    <!-- Social Icons Popup -->
    <div></div>
    <!-- Alert -->
    <div></div>
    <!-- Notifications -->
    <div></div>
    <!-- PAGE END -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="{{ asset('ladun/mobiokit') }}/vendor/jquery/jquery.validate.min.js"></script>
    <script src="{{ asset('ladun/mobiokit') }}/vendor/swiper/swiper.min.js"></script>
    <script src="{{ asset('ladun/mobiokit') }}/js/jquery.custom.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        const server = "{{ url('') }}/";
    </script>
    <script src="{{ asset('ladun/base') }}/js/app/mainApp.js"></script>
</body>

</html>