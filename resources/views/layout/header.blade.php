<!DOCTYPE html>
<html xml:lang="fr-fr" lang="fr-fr" dir="ltr">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('Titre')</title>
    <meta name="keywords" content="Expert BI, audit des systèmes d'information, performance IT, sécurité IT, conformité IT, conseil en gestion des ressources humaines, conseil en informatique, gestion financière, gestion stratégique, solutions sur mesure, création site web">
    <meta name="description" content="Expert BI est un leader dans l'audit des systèmes d'information, offrant des solutions personnalisées pour améliorer la performance, la sécurité et la conformité de vos infrastructures IT. Découvrez nos services de conseil en gestion des ressources humaines, en informatique, ainsi qu'en gestion financière et stratégique. Contactez-nous pour des solutions sur mesure adaptées à vos besoins.">

    <meta name="author" content="Moussa Samaké">
    <meta name="robots" content="index, follow">
    {{-- <link rel="canonical" href="index.html"> --}}
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Web Fonts  -->
    <link rel="stylesheet" href="c{{ asset('ss/open-sans-web-font.css') }}">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/fontawesome-5.7.1/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css" async="async') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-animate.min.css') }}">
    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/skins/default.min.css') }}">
    <!-- Default ExpertBI-SARL CSS -->
    <link rel="stylesheet" href="{{ asset('css/child/default.css') }}">
    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}" async></script>
    <!-- Google Tag Manager -->
    <!-- <script type="text/plain" data-cookie-consent="targeting">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NP7B347');</script> -->
    <!-- End Google Tag Manager -->
    <style>
        body,
        html {
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            font-family: Lato, sans-serif;
            font-size: 18px;

        }

        .onload {
            width: 100%;
            height: 100%;
            position: fixed;
            display: flex;
            top: 0;
            left: 0;
            justify-content: center;
            align-items: center;
            background: white;
            z-index: 999;

        }

        .onload img {
            width: 60%;
            height: 70%;
        }

        .to_top_btn {
            height: 40px;
            width: 40px;
            position: fixed;
            bottom: 900px;
            right: 30px;
            font-weight: 900;
            border-radius: 50%;
            background: linear-gradient(90deg, #ff6ec4, #7873f5);

            color: white;
            font-size: 1.2rem;
            text-align: center;
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: 0.4s;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .to_top_btn.active_btn {
            bottom: 30px;
            opacity: 1;
            visibility: visible;
        }



        @media screen and (max-width: 850px) {
            .onload {
                width: 100%;
                height: 100%;
                position: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: white;
                z-index: 999;
            }

            .onload img {
                width: 60%;
                height: 40%;
            }
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="body">
        <header id="header"
            data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="{{ route('accueil') }}" title="ExpertBI-SARL.com">
                                    <img alt="ExpertBI-SARL.FR" width="153" height="53" data-sticky-width="150"
                                        data-sticky-height="31" data-sticky-top="33"
                                        src="{{ asset('img/logo/logo.png') }}">
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="hidden-xs">
                                            <span class="data-product" data-product="/qui-sommes-nous/"
                                                title="ExpertBI-SARL : qui sommes nous"><i
                                                    class="fa fa-angle-right"></i> Qui sommes nous</span>
                                        </li>
                                        <!-- <li class="hidden-xs"><span class="data-product" data-product="/contact/" title="Demande de contact pour l'ExpertBI-SARL"><i class="fa fa-angle-right" title="Nous contacter pour en savoir plus sur l'ExpertBI-SARL"></i> Contactez-nous</span></li> -->
                                        <!-- <li class="hidden-xs">
         <span class="data-product" data-product="/souscription/" title="Demande de devis d'ExpertBI-SARL en ligne"><span class="box_service_online service_online service_online_red gras"><i class="fas fa-laptop"></i> Devis en ligne</span></span>
        </li> -->
                                        <li>
                                            <span class="ws-nowrap gras" style="margin-left:10px"><i
                                                    class="fa fa-phone"></i><a href="tel:0022362845592"
                                                    title="Appelez par téléphone nos experts d'ExpertBI-SARL.fr">+223
                                                    62 84 55 92</a></span>
                                        </li>
                                        <!-- <li class="hidden-xs"><span class="service_online gras"><a class="box_service_online" href="/souscription/" title="Demande de devis d'ExpertBI-SARL en ligne"><i class="fas fa-laptop"></i> Devis en ligne</a></span></li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-row">
                                <div class="header-nav">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div
                                        class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="{{ request()->routeIs('accueil') ? 'active' : '' }}">
                                                    <a href="{{ route('accueil') }}"
                                                        title="contact d'ExpertBI-SARL">Accueil</a>
                                                </li>
                                                {{-- <li class="dropdown">
                                                    <a class="dropdown-toggle"
                                                        href="comparateur-ExpertBI-SARL/index.html"
                                                        title="Comparateur d'ExpertBI-SARL">Comparateur</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="comparateur-ExpertBI-SARL-tpe/index.html"
                                                                title="Comparez les solutions d'ExpertBI-SARL pour les TPE">ExpertBI-SARL
                                                                TPE</a></li>
                                                        <li><a href="comparateur-ExpertBI-SARL-pme/index.html"
                                                                title="Comparez les solutions d'ExpertBI-SARL pour les PME">ExpertBI-SARL
                                                                PME</a></li>
                                                        <li><a href="comparateur-ExpertBI-SARL-grand-compte/index.html"
                                                                title="Comparez les solutions d'ExpertBI-SARL pour les grands comptes">ExpertBI-SARL
                                                                Grand Compte</a></li>
                                                        <li><a href="factor-societe-ExpertBI-SARL/index.html"
                                                                title="Comparez les sociétés d'ExpertBI-SARL">Sociétés
                                                                d'ExpertBI-SARL<span
                                                                    class="tip tip-red">Nouveau</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ">
                                                    <a class="dropdown-toggle"
                                                        href="solutions-ExpertBI-SARL/index.html"
                                                        title="Solutions d'ExpertBI-SARL">ExpertBI-SARL</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="produits-ExpertBI-SARL/index.html"
                                                                title="Produits d'ExpertBI-SARL">Produits
                                                                d'ExpertBI-SARL</a></li>
                                                        <li><a href="secteurs-activite-ExpertBI-SARL/index.html"
                                                                title="Solution d'ExpertBI-SARL par secteurs d'activité">Secteurs
                                                                d'activité</a></li>
                                                        <li><a href="type-entreprise-ExpertBI-SARL/index.html"
                                                                title="Solution d'ExpertBI-SARL par type d'entreprise">Type
                                                                d'entreprise</a></li>
                                                    </ul>
                                                </li> --}}

                                                </li>
                                                <li class="{{ request()->routeIs('service') ? 'active' : '' }}">
                                                    <a href="{{ route('service') }}"
                                                        title="service d'ExpertBI-SARL">Services</a>
                                                </li>
                                                <li class="{{ request()->routeIs('equipe') ? 'active' : '' }}">
                                                    <a href="{{ route('equipe') }}"
                                                        title="equipe d'ExpertBI-SARL">Notre Equipe</a>
                                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                                    <a href="{{ route('contact') }}"
                                                        title="contact d'ExpertBI-SARL">Contacts</a>
                                                </li>
                                                <li class="{{ request()->routeIs('apropos') ? 'active' : '' }}">
                                                    <a href="{{ route('apropos') }}"
                                                        title="contact d'ExpertBI-SARL">A propos</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- <div class="onload">
            <img src="{{ asset('img/logo/logo.png') }}" alt="">
        </div> --}}
        <div class="to_top_btn" onclick="to_top();">
            <i class="fa fa-chevron-up"></i>
        </div>

        <div role="main" class="main" style="padding: 0px;">
            <script>
                window.addEventListener('scroll', function() {
                    var scroll = document.querySelector('.to_top_btn');
                    scroll.classList.toggle("active_btn", window.scrollY > 350);
                });

                function to_top() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }

            //     $(window).on('load', function() {
                    // $('.onload').fadeOut(2000);
                // });
            </script>
