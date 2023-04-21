@extends('layouts.app')

@section('head')
<head>
    <meta charset="utf-8">
    <title>7days Performance</title>
    <meta name="description" content="Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!">
    <meta property="fb:app_id" content="">
    <meta name="apple-itunes-app" content="app-id=1455876956">

    <meta property="og:type" content="website">
    <meta property="og:title" content="7days Performance">
    <meta name="og:description" content="Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!">
    <meta property="og:site_name" content="7days Performance">
    <meta property="og:locale" content="en_GB">
    <meta property="og:url" content="https://7daysperformance.co.uk">
    <meta property="og:image" content="https://7daysperformance.co.uk/assets/images/preview-website-image.png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="500">

    <meta name="twitter:title" content="7days Performance">
    <meta name="twitter:description" content="Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!">
    <meta name="twitter:widgets:theme" content="light">
    <meta name="twitter:widgets:link-color" content="#55acee">
    <meta name="twitter:widgets:border-color" content="#55acee">
    <meta name="twitter:card" content="summary">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="keywords" content="7days Performance, gambling, Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!">
    <meta name="url" content="https://7daysperformance.co.uk">
    <meta name="identifier-URL" content="https://7daysperformance.co.uk">


    <script async="true" src="https://tr.snapchat.com/config/uk/99063123-9f29-4600-8544-5a98bcd92c2c.js" crossorigin="anonymous"></script>
    <script async="" src="//cdn.taboola.com/libtrc/unip/1513087/tfa.js" id="tb_tfa_script"></script>
    <script type="text/javascript" async="" src="https://s.adroll.com/j/roundtrip.js"></script>
    <script async="" src="https://sc-static.net/scevent.min.js"></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async="" src="https://cdn.cooladata.com/tracking/cooladata-latest.min.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" defer="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TMGDNV3"></script>
    <script async="" src="https://websdk.appsflyer.com?st=pba&amp;"></script>
    <script src="/assets/js/elmahio.min.js?apiKey=1eb0422955ae4641859f93f0e30ab4c4&amp;logId=66938de3-706b-4699-bb54-0f8ce932b98f" type="text/javascript"></script>
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-THKDQV3" async=""></script>

    <base href="/">


    <script type="text/javascript" src="/config/env.js"></script>
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script>
    <script src="https://7daysperformance.co.uk/app/js/plugin/visitevent.js?6"></script>
    <script type="text/javascript" id="visitevent-loader">
        (function() {
            var elem = document.createElement('script');
            // elem.async = true;
            elem.src = window.ENVIRONMENT_PARAMETERS.api_path + '/app/js/plugin/visitevent.js?6';
            var thisScript = document.getElementById('visitevent-loader');
            thisScript.parentNode.insertBefore(elem, thisScript);
        })();

    </script>
    <script async="" src="https://sevendays.user.com/widget.js?2"></script>
    <script type="text/javascript" id="userengage-loader">
        if (window.ENVIRONMENT_PARAMETERS.userengage_subdomain && window.ENVIRONMENT_PARAMETERS.userengage_apikey) {
            window.civchat = {
                apiKey: window.ENVIRONMENT_PARAMETERS.userengage_apikey
            , };
            (function() {
                var elem = document.createElement('script');
                elem.async = true;
                elem.src = 'https://' + window.ENVIRONMENT_PARAMETERS.userengage_subdomain + '.user.com/widget.js?2';
                var thisScript = document.getElementById('userengage-loader');
                thisScript.parentNode.insertBefore(elem, thisScript);
            })();
        }

    </script>
    <script>
        ! function(t, e, n, s, a, c, i, o, p) {
            t.AppsFlyerSdkObject = a, t.AF = t.AF || function() {
                    (t.AF.q = t.AF.q || []).push([Date.now()].concat(Array.prototype.slice.call(arguments)))
                }
                , t.AF.id = t.AF.id || i, t.AF.plugins = {}, o = e.createElement(n), p = e.getElementsByTagName(n)[0], o.async = 1
                , o.src = "https://websdk.appsflyer.com?" + (c.length > 0 ? "st=" + c.split(",").sort().join(",") + "&" : "") + (i.length > 0 ? "af_id=" + i : "")
                , p.parentNode.insertBefore(o, p)
        }(window, document, "script", 0, "AF", "pba", {
            pba: {
                webAppId: "ea4f903b-05b3-41ca-97ee-b06dafc96c08"
            }
        })

    </script>

    <style type="text/css">
        @keyframes lds-spinner {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes lds-spinner {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .lds-spinner {
            position: relative;
        }

        .lds-spinner div {
            left: 94px;
            top: 48px;
            position: absolute;
            -webkit-animation: lds-spinner linear 1s infinite;
            animation: lds-spinner linear 1s infinite;
            background: #1d3f72;
            width: 12px;
            height: 24px;
            border-radius: 40%;
            -webkit-transform-origin: 6px 52px;
            transform-origin: 6px 52px;
        }

        .lds-spinner div:nth-child(1) {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-animation-delay: -0.916666666666667s;
            animation-delay: -0.916666666666667s;
        }

        .lds-spinner div:nth-child(2) {
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
            -webkit-animation-delay: -0.833333333333333s;
            animation-delay: -0.833333333333333s;
        }

        .lds-spinner div:nth-child(3) {
            -webkit-transform: rotate(60deg);
            transform: rotate(60deg);
            -webkit-animation-delay: -0.75s;
            animation-delay: -0.75s;
        }

        .lds-spinner div:nth-child(4) {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-animation-delay: -0.666666666666667s;
            animation-delay: -0.666666666666667s;
        }

        .lds-spinner div:nth-child(5) {
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
            -webkit-animation-delay: -0.583333333333333s;
            animation-delay: -0.583333333333333s;
        }

        .lds-spinner div:nth-child(6) {
            -webkit-transform: rotate(150deg);
            transform: rotate(150deg);
            -webkit-animation-delay: -0.5s;
            animation-delay: -0.5s;
        }

        .lds-spinner div:nth-child(7) {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            -webkit-animation-delay: -0.416666666666667s;
            animation-delay: -0.416666666666667s;
        }

        .lds-spinner div:nth-child(8) {
            -webkit-transform: rotate(210deg);
            transform: rotate(210deg);
            -webkit-animation-delay: -0.333333333333333s;
            animation-delay: -0.333333333333333s;
        }

        .lds-spinner div:nth-child(9) {
            -webkit-transform: rotate(240deg);
            transform: rotate(240deg);
            -webkit-animation-delay: -0.25s;
            animation-delay: -0.25s;
        }

        .lds-spinner div:nth-child(10) {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
            -webkit-animation-delay: -0.166666666666667s;
            animation-delay: -0.166666666666667s;
        }

        .lds-spinner div:nth-child(11) {
            -webkit-transform: rotate(300deg);
            transform: rotate(300deg);
            -webkit-animation-delay: -0.083333333333333s;
            animation-delay: -0.083333333333333s;
        }

        .lds-spinner div:nth-child(12) {
            -webkit-transform: rotate(330deg);
            transform: rotate(330deg);
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
        }

        .lds-spinner {
            display: inline-block;
            vertical-align: -16px;
            width: 50px !important;
            height: 50px !important;
            -webkit-transform: translate(-25px, -25px) scale(0.25) translate(25px, 25px);
            transform: translate(-25px, -25px) scale(0.25) translate(25px, 25px);
        }

        #bootstrap-loader.lds-css {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 5;
            text-align: center;
            padding-top: 20px;
            font-size: 24px;
            font-weight: normal;
            font-family: Arial, Georgia, "Times New Roman", Times, serif;
            color: #333333;
            opacity: 0.4;
            display: none;
        }

        body {
            font-weight: 400;
            color: #333333;
            margin: 0;
            padding: 0;
            font-size: 1.6rem;
            line-height: 1.6;
        }

        html {
            overflow: auto;
        }

        html,
        body {
            position: relative;
            height: 100%;
        }

        app-root {
            z-index: 1;
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
        }

    </style>

    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon2-350x350.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon2-350x350.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/favicon2-350x350.png">
    <link rel="apple-touch-icon" sizes="192x192" href="/assets/icons/favicon2-350x350.png">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TMGDNV3');

    </script>
    <!-- End Google Tag Manager -->
    <style>
        @charset "UTF-8";

        html {
            box-sizing: border-box;
            -ms-overflow-style: scrollbar
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit
        }

        :root {
            --swiper-theme-color: #007aff
        }

        :root {
            --swiper-navigation-size: 44px
        }

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

    </style>
    <link rel="stylesheet" href="styles.8c1c0d7361d8e666.css" media="all" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="styles.8c1c0d7361d8e666.css"></noscript>
    <style type="text/css"></style>
    <style>
        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .loader-icon__box[_ngcontent-vvo-c78] {
            text-align: center;
            padding: 10px 0
        }

        .loader-icon__page-box[_ngcontent-vvo-c78] {
            text-align: center;
            padding: 100px 0 300px
        }

        .loader-icon__icon[_ngcontent-vvo-c78] {
            width: 44px;
            height: 44px
        }

        .loader-icon__intext[_ngcontent-vvo-c78] {
            width: 12px;
            height: 12px;
            line-height: inherit
        }

        .loader-icon__button[_ngcontent-vvo-c78] {
            width: 16px;
            height: 16px
        }

        .post-grid__col[_ngcontent-vvo-c78] {
            max-width: 33.33333%;
            margin-bottom: 30px;
            padding: 0 15px
        }

        @media (max-width: 767.9px) {
            .post-grid__col[_ngcontent-vvo-c78] {
                max-width: 100%
            }
        }

        .post-grid__older-posts[_ngcontent-vvo-c78] {
            text-align: center
        }

    </style>
    <style>
        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .header[_ngcontent-vvo-c63] {
            -webkit-flex: none;
            flex: none;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            height: 62px;
            background-color: #fff;
            border-bottom: 1px solid #d8dadd;
            position: relative;
            z-index: 10;
            transition: box-shadow .3s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 992px) {
            .header[_ngcontent-vvo-c63] {
                height: 100px
            }
        }

        @media (min-width: 992px) {
            .header--short[_ngcontent-vvo-c63] {
                height: 62px
            }
        }

        .header__nav[_ngcontent-vvo-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            margin-left: auto
        }

        @media (min-width: 1200px) {
            .header__button_sm[_ngcontent-vvo-c63] {
                display: none !important
            }
        }

        .logo[_ngcontent-vvo-c63] {
            padding: 0 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .logo[_ngcontent-vvo-c63] {
                padding: 0 30px
            }
        }

        @media (min-width: 768px) {
            .logo[_ngcontent-vvo-c63] {
                padding: 0 40px
            }
        }

        .logo__img[_ngcontent-vvo-c63] {
            width: auto;
            height: 35px;
            transition: width .2s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 330px) {
            .logo__img[_ngcontent-vvo-c63] {
                height: 40px
            }
        }

        @media (min-width: 360px) {
            .logo__img[_ngcontent-vvo-c63] {
                height: 45px
            }
        }

        @media (min-width: 992px) {
            .logo__img[_ngcontent-vvo-c63] {
                height: 56px
            }
        }

        @media (min-width: 768px) {
            .header--short[_ngcontent-vvo-c63] .logo__img[_ngcontent-vvo-c63] {
                height: 45px
            }
        }

        .main-nav[_ngcontent-vvo-c63] {
            display: none
        }

        @media (min-width: 1200px) {
            .main-nav[_ngcontent-vvo-c63] {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                -webkit-align-items: center;
                align-items: center;
                list-style-type: none;
                margin: 0 20px 0 0;
                padding: 0
            }
        }

        .main-nav__item[_ngcontent-vvo-c63] {
            height: 100%
        }

        .main-nav__link[_ngcontent-vvo-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            height: 100%;
            color: #00131f;
            font-size: 16px;
            font-weight: 400;
            text-decoration: none;
            transition: color .15s ease;
            white-space: nowrap;
            padding-left: 8px;
            padding-right: 8px;
            font-family: Exo, sans-serif
        }

        @media (min-width: 1400px) {
            .main-nav__link[_ngcontent-vvo-c63] {
                padding-left: 15px;
                padding-right: 15px
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .nav-button[_ngcontent-vvo-c63] {
            width: 61px;
            color: #888;
            -webkit-flex: none;
            flex: none;
            border: 0;
            background-color: #fff;
            position: relative;
            border-left: 1px solid #d8dadd;
            cursor: pointer;
            transition: background-color .3s ease, width .3s ease-in-out;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .nav-button[_ngcontent-vvo-c63] {
                width: 81px
            }
        }

        @media (min-width: 992px) {
            .nav-button[_ngcontent-vvo-c63] {
                width: 101px
            }
        }

        .nav-button[_ngcontent-vvo-c63]:hover,
        .nav-button[_ngcontent-vvo-c63]:focus {
            outline: 0;
            background-color: #f6f7f9
        }

        .nav-button__icon[_ngcontent-vvo-c63] {
            color: #6e7191;
            width: 20px;
            height: 20px
        }

        .nav-button__icon_hamburger[_ngcontent-vvo-c63] {
            width: 24px;
            height: 24px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_hamburger[_ngcontent-vvo-c63] {
                height: 22px;
                width: 20px
            }
        }

        .nav-button__icon_shopping-cart[_ngcontent-vvo-c63] {
            width: 22px;
            height: 22px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_shopping-cart[_ngcontent-vvo-c63] {
                width: 20px;
                height: 20px
            }
        }

        .nav-button__label[_ngcontent-vvo-c63] {
            position: absolute;
            display: block;
            text-align: center;
            top: 0;
            left: -1px;
            background-color: #e33333;
            font-family: Exo, sans-serif;
            font-weight: 500;
            font-size: 15px;
            color: #fff;
            min-width: 24px;
            height: 24px;
            line-height: 24px;
            padding: 0 5px;
            border-radius: 0 0 10px
        }

        @media (max-width: 767.9px) {
            .nav-button__label[_ngcontent-vvo-c63] {
                min-width: 22px;
                height: 22px;
                line-height: 22px;
                padding: 0 4px;
                font-size: 14px
            }
        }

        .nav-button__loading[_ngcontent-vvo-c63] {
            display: inline-block;
            width: 14px
        }

        .mobile-menu[_ngcontent-vvo-c63] {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none;
            transition: background-color .3s;
            overflow: hidden
        }

        .mobile-menu_shown[_ngcontent-vvo-c63] {
            background-color: rgba(0, 0, 0, .78);
            pointer-events: all
        }

        .mobile-menu__panel[_ngcontent-vvo-c63] {
            position: absolute;
            top: 0;
            right: 0;
            width: 255px;
            height: 100%;
            padding: 50px 0;
            background-color: #124264;
            border-left: 5px solid #0a2539;
            color: #fff;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
            -webkit-transform: translateX(260px);
            transform: translate(260px)
        }

        .mobile-menu_shown[_ngcontent-vvo-c63] .mobile-menu__panel[_ngcontent-vvo-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close[_ngcontent-vvo-c63] {
            position: absolute;
            top: 5px;
            right: 255px;
            padding: 0;
            border-width: 0;
            background-color: rgba(255, 255, 255, 0);
            color: #f44336;
            cursor: pointer;
            transition: color .2s, -webkit-transform .3s;
            transition: color .2s, transform .3s;
            transition: color .2s, transform .3s, -webkit-transform .3s;
            -webkit-transform: translateX(306px);
            transform: translate(306px)
        }

        .mobile-menu__close[_ngcontent-vvo-c63]:hover,
        .mobile-menu__close[_ngcontent-vvo-c63]:focus {
            color: #ea1c0d;
            outline: none
        }

        .mobile-menu_shown[_ngcontent-vvo-c63] .mobile-menu__close[_ngcontent-vvo-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close-icon[_ngcontent-vvo-c63] {
            width: 60px;
            height: 60px
        }

        .mobile-menu__nav[_ngcontent-vvo-c63] {
            margin-bottom: 25px;
            padding: 0 13px 37px;
            border-bottom: 1px solid #0a2539
        }

        .mobile-menu__nav-list[_ngcontent-vvo-c63] {
            margin: 0;
            padding: 0
        }

        .mobile-menu__item[_ngcontent-vvo-c63] {
            list-style-type: none
        }

        .mobile-menu__divider[_ngcontent-vvo-c63] {
            height: 1px;
            display: block;
            margin: 13px;
            width: calc(100% - 26px);
            background-color: #5a7b93
        }

        .mobile-menu__title[_ngcontent-vvo-c63] {
            color: #449bd8;
            font-size: 14px;
            display: block;
            padding: 16px 13px 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase
        }

        .mobile-menu__link[_ngcontent-vvo-c63] {
            display: inline-block;
            font-size: 16px;
            line-height: 1;
            padding: 13px;
            color: #f6f7f9;
            cursor: pointer;
            transition: color .3s;
            text-decoration: none
        }

        .mobile-menu__link[_ngcontent-vvo-c63]:hover {
            color: #d7dce5
        }

        .mobile-menu__bottom-wrapper[_ngcontent-vvo-c63] {
            padding: 0 25.5px
        }

        .mobile-menu__text[_ngcontent-vvo-c63] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
            line-height: 29px;
            color: #fff
        }

        .mobile-menu__socials[_ngcontent-vvo-c63] {
            display: -webkit-flex;
            display: flex;
            margin: 0 -12px
        }

        .mobile-menu__social-link[_ngcontent-vvo-c63] {
            display: inline-block;
            padding: 0 12px;
            text-decoration: none
        }

        .mobile-menu__social-icon[_ngcontent-vvo-c63] {
            width: 40px;
            height: 40px
        }

        .native-nav[_ngcontent-vvo-c63] {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: stretch;
            align-items: stretch;
            -webkit-justify-content: stretch;
            justify-content: stretch;
            background: white;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, .07);
            z-index: 999;
            padding: 0
        }

        .native-nav__button[_ngcontent-vvo-c63] {
            -webkit-flex: 1 1 auto;
            flex: 1 1 auto;
            display: block;
            padding: 11px 10px;
            text-align: center;
            color: rgba(0, 0, 0, .5);
            text-decoration: none;
            cursor: pointer;
            font-weight: 400
        }

        .native-nav__button[_ngcontent-vvo-c63]:hover {
            color: rgba(0, 0, 0, .7);
            text-decoration: none
        }

        .native-nav__button_inactive[_ngcontent-vvo-c63] {
            color: rgba(0, 0, 0, .3) !important
        }

        .native-nav__icon[_ngcontent-vvo-c63] {
            font-size: 15px;
            line-height: 18px
        }

        .native-nav__label[_ngcontent-vvo-c63] {
            font-size: 12px;
            line-height: 18px;
            padding-top: 1px
        }

        .header-container[_ngcontent-vvo-c63] {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 12000;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            min-height: 62px;
            height: auto
        }

        .header-placeholder[_ngcontent-vvo-c63] {
            height: 100px;
            width: 100%
        }

        @media (max-width: 991.9px) {
            .header-placeholder[_ngcontent-vvo-c63] {
                height: 62px
            }
        }

    </style>
    <style>
        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .footer[_ngcontent-vvo-c64] {
            text-align: center;
            padding: 40px 0;
            font-family: Exo, sans-serif;
            background-color: #f5f6f7
        }

        @media (min-width: 992px) {
            .footer[_ngcontent-vvo-c64] {
                padding: 80px 40px
            }
        }

        .footer[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] {
            padding: 0
        }

        .footer[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] {
            list-style: none
        }

        @media (min-width: 992px) {
            .footer__wrapper[_ngcontent-vvo-c64] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        .footer__logo[_ngcontent-vvo-c64] {
            display: inline-block
        }

        .footer__logo-image[_ngcontent-vvo-c64] {
            height: 45px;
            display: inline-block
        }

        @media (min-width: 992px) {
            .footer__logo-image[_ngcontent-vvo-c64] {
                height: 55px
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-vvo-c64] {
                display: -webkit-flex;
                display: flex
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] {
                text-align: left;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin: 0 0 0 104px;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content
            }
        }

        .footer__links[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] {
            margin-bottom: 12px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] {
                margin-right: 137px
            }
        }

        .footer__links[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] a[_ngcontent-vvo-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__links[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] a[_ngcontent-vvo-c64]:hover {
            text-decoration: underline
        }

        .footer__social-email[_ngcontent-vvo-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__social-email[_ngcontent-vvo-c64]:hover {
            text-decoration: underline
        }

        .footer__social[_ngcontent-vvo-c64] {
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-vvo-c64] {
                margin-top: 0;
                text-align: right
            }
        }

        .footer__social[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] {
                -webkit-justify-content: end;
                justify-content: end;
                margin-top: 96px;
                margin-bottom: 0
            }
        }

        .footer__social[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] {
            margin: 0 6px
        }

        .footer__social[_ngcontent-vvo-c64] ul[_ngcontent-vvo-c64] li[_ngcontent-vvo-c64] svg-icon[_ngcontent-vvo-c64] {
            width: 32px;
            height: 32px
        }

        .footer__social[_ngcontent-vvo-c64] p[_ngcontent-vvo-c64] {
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f
        }

        .footer__social[_ngcontent-vvo-c64] p.footer__annotation--light[_ngcontent-vvo-c64],
        .footer__social[_ngcontent-vvo-c64] p[_ngcontent-vvo-c64] a.footer__annotation--light[_ngcontent-vvo-c64] {
            color: rgba(0, 19, 31, .33)
        }

        .footer__social-link[_ngcontent-vvo-c64]:hover {
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

    </style>
    <style>
        [_nghost-vvo-c61] {
            display: inline-block;
            width: 100%;
            height: 100%
        }

        [_nghost-vvo-c61] .svg-icon,
        [_nghost-vvo-c61] svg {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            fill: currentColor
        }

        [_nghost-vvo-c61] .svg-icon {
            width: auto;
            height: 100%;
            display: block
        }

        [_nghost-vvo-c61] .svg-icon_star-path {
            fill: #000064
        }

        [_nghost-vvo-c61] .svg-icon__fill_trustpilot {
            fill: #13b57a
        }

        [_nghost-vvo-c61] .svg-icon__fill_default {
            fill: #fff
        }

        [_nghost-vvo-c61] .svg-icon__cart-wheel {
            stroke: none;
            fill: #010101
        }

        [_nghost-vvo-c61] .svg-icon__paypal {
            fill: #263b80
        }

        [_nghost-vvo-c61] .svg-icon__paypal_light {
            fill: #139ad6
        }

        [_nghost-vvo-c61] .svg-icon__paypal_shadow {
            fill: #139ad6
        }

        [_nghost-vvo-c61] .svg-icon__paypal_cross {
            fill: #232c65
        }

        [_nghost-vvo-c61] .svg-icon__facebook-full_letter {
            opacity: 0
        }

        [_nghost-vvo-c61] .svg-icon__check {
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        [_nghost-vvo-c61] .svg-icon__receive-email-line {
            stroke: currentColor
        }

        [_nghost-vvo-c61] .svg-icon__circle {
            fill: none;
            stroke: currentColor
        }

        [_nghost-vvo-c61] .svg-icon svg {
            width: 100%;
            height: 100%;
            display: inline-block
        }

        .spinning[_nghost-vvo-c61] {
            -webkit-animation: rotate 1s linear infinite;
            animation: rotate 1s linear infinite;
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .svg-icon__footer-facebook[_nghost-vvo-c61] .svg-icon__facebook-full_letter,
        .svg-icon__footer-facebook [_nghost-vvo-c61] .svg-icon__facebook-full_letter {
            opacity: 1;
            fill: #fff
        }

    </style>
    <style>
        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        [_nghost-vvo-c62] {
            display: block
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] {
            background-color: #00131f
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] .prompt-img__wrapper[_ngcontent-vvo-c62] {
            overflow: hidden;
            border-radius: 8px;
            max-width: 40px;
            height: 40px;
            margin-right: 8px
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] .prompt-img__wrapper[_ngcontent-vvo-c62] img[_ngcontent-vvo-c62] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] .prompt-close-icon[_ngcontent-vvo-c62] {
            max-width: 14px;
            height: 14px;
            margin-right: 12px;
            cursor: pointer;
            -webkit-filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%);
            filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%)
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] .prompt__content-title[_ngcontent-vvo-c62] {
            color: #f5f6f7;
            font-size: 16px
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] .prompt__content-category[_ngcontent-vvo-c62] {
            color: #b9b9b9;
            font-size: 10px
        }

        [_nghost-vvo-c62] .prompt-container[_ngcontent-vvo-c62] .prompt-btn[_ngcontent-vvo-c62] {
            font-size: 12px;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            padding: 5px 15px;
            border-radius: 10px
        }

        @media (min-width: 768px) {
            [_nghost-vvo-c62] {
                display: none
            }
        }

    </style>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Regular.woff2') format('woff2');
        }

        @font-face {
            font-weight: 500;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Medium.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }

        @font-face {
            font-weight: 900;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Black.woff2') format('woff2');
        }

    </style>
    <script src="chrome-extension://doocmbmlcnbbdohogchldhlikjpndpng/yts-controls.js" extensionbaseurl="chrome-extension://doocmbmlcnbbdohogchldhlikjpndpng"></script>
    <script src="data:text/javascript;base64,KGZ1bmN0aW9uIGV2ZW50dWFsbHlTZXRDb25maWcoKSB7CiAgICAgICAgICAgIGlmICh3aW5kb3cuWW91dHViZVNlZWspIHdpbmRvdy5Zb3V0dWJlU2Vlay5zZXRDb25maWcoeyJjdHJsLmxlZnRBcnJvdyI6MywiY3RybC5yaWdodEFycm93IjozLCJjdHJsLnNoaWZ0LmxlZnRBcnJvdyI6MTUsImN0cmwuc2hpZnQucmlnaHRBcnJvdyI6MTUsImVuYWJsZU5vbllvdXR1YmVDb21Ib3RrZXlzIjp0cnVlLCJlbmFibGVUaW1lUG9zaXRpb25NZW1vcnlGb3JDbGlja2VkU2Vla0JhciI6ZmFsc2UsImVuYWJsZVRpbWVQb3NpdGlvbk1lbW9yeUZvclBhZ2VSZWxvYWRzIjpmYWxzZSwiZW5hYmxlWW91dHViZUNvbUhvdGtleXMiOnRydWUsInNob3dMb25nRm9yd2FyZEJ1dHRvbiI6dHJ1ZSwic2hvd0xvbmdSZXdpbmRCdXR0b24iOnRydWUsInNob3dTZWVrQnV0dG9uVG9vbHRpcHMiOnRydWUsInNob3dTaG9ydEZvcndhcmRCdXR0b24iOnRydWUsInNob3dTaG9ydFJld2luZEJ1dHRvbiI6dHJ1ZSwidXNlUmVjdGFuZ3VsYXJTdHlsZUJ1dHRvbnMiOmZhbHNlLCJvcyI6IndpbiJ9KTsKICAgICAgICAgICAgZWxzZSBzZXRUaW1lb3V0KGV2ZW50dWFsbHlTZXRDb25maWcsIDUwMCk7CiAgICAgICAgfSkoKTs="></script>
    <style>
        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .post-card[_ngcontent-vvo-c77] {
            display: block;
            width: 100%;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: 10px;
            text-decoration: none
        }

        .post-card__img[_ngcontent-vvo-c77] {
            display: block;
            width: 100%;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px
        }

        .post-card__content[_ngcontent-vvo-c77] {
            padding: 25px;
            color: #323b50
        }

        .post-card__title[_ngcontent-vvo-c77] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            line-height: 32px;
            font-weight: 600
        }

        @media (max-width: 991.9px) {
            .post-card__title[_ngcontent-vvo-c77] {
                font-size: 22px;
                line-height: 28px
            }
        }

        .post-card__description[_ngcontent-vvo-c77] {
            display: -webkit-box;
            margin: 0;
            font-size: 16px;
            line-height: 24px;
            max-height: 96px;
            overflow: hidden;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical
        }

        @media (max-width: 991.9px) {
            .post-card__description[_ngcontent-vvo-c77] {
                font-size: 14px;
                line-height: 22px;
                max-height: 88px
            }
        }

        .post-card__description[_ngcontent-vvo-c77] p {
            margin: 0;
            display: table
        }

    </style>
    <script style="display: none;">
        var tvt = tvt || {};
        tvt.captureVariables = function(a) {
            for (var b =
                    new Date, c = {}, d = Object.keys(a || {}), e = 0, f; f = d[e]; e++)
                if (a.hasOwnProperty(f) && "undefined" != typeof a[f]) try {
                    var g = [];
                    c[f] = JSON.stringify(a[f], function(h, k) {
                        try {
                            if ("function" !== typeof k) {
                                if ("object" === typeof k && null !== k) {
                                    if (k instanceof HTMLElement || k instanceof Node || -1 != g.indexOf(k)) return;
                                    g.push(k)
                                }
                                return k
                            }
                        } catch (m) {}
                    })
                } catch (h) {}
            a = document.createEvent("CustomEvent");
            a.initCustomEvent("TvtRetrievedVariablesEvent", !0, !0, {
                variables: c
                , date: b
            });
            window.dispatchEvent(a)
        };
        window.setTimeout(function() {
            tvt.captureVariables({
                'dataLayer.hide': (function(a) {
                    a = a.split(".");
                    for (var b = window, c = 0; c < a.length && (b = b[a[c]], b); c++);
                    return b
                })('dataLayer.hide')
                , 'dataLayer': window['dataLayer']
            })
        }, 2000);

    </script>
</head>
@endsection

@section('content')
<div _ngcontent-vvo-c13="" class="website-p7d">
    <div _ngcontent-vvo-c13="">
        <div _ngcontent-vvo-c13="">
            <router-outlet _ngcontent-vvo-c13=""></router-outlet>
            <app-draw-results _nghost-vvo-c78="" class="ng-star-inserted">
                <app-header _ngcontent-vvo-c78="" _nghost-vvo-c63="">
                    <div _ngcontent-vvo-c63="" class="header-placeholder"></div>
                    <!---->
                    <div _ngcontent-vvo-c63="" class="header-container">
                        <app-install-prompt _ngcontent-vvo-c63="" _nghost-vvo-c62="" class="ng-tns-c62-0 ng-star-inserted">
                            <!---->
                        </app-install-prompt>
                        <!---->
                        <header _ngcontent-vvo-c63="" class="header header--short"><a _ngcontent-vvo-c63="" routerlink="/" title="Go to homepage" class="logo header__logo" href="/"><img _ngcontent-vvo-c63="" src="/assets/svg/logo.svg" alt="7days Performance" class="logo__img"></a>
                            <nav _ngcontent-vvo-c63="" class="header__nav">
                                <ul _ngcontent-vvo-c63="" class="main-nav">
                                    <li _ngcontent-vvo-c63="" class="main-nav__item"><a _ngcontent-vvo-c63="" routerlink="/current-competitions" title="" class="main-nav__link" href="/current-competitions">Cars and Bikes</a></li>
                                    <li _ngcontent-vvo-c63="" class="main-nav__item"><a _ngcontent-vvo-c63="" routerlink="/current-tech-competitions" title="" class="main-nav__link" href="/current-tech-competitions">Tech and Luxury</a></li>
                                    <li _ngcontent-vvo-c63="" class="main-nav__item"><a _ngcontent-vvo-c63="" routerlink="/cash-competitions" title="" class="main-nav__link" href="/cash-competitions">Tax Free Cash</a></li>
                                    <li _ngcontent-vvo-c63="" class="main-nav__item"><a _ngcontent-vvo-c63="" routerlink="/competition-winners/featured" title="" class="main-nav__link" href="/competition-winners/featured">Winners</a></li>
                                    <li _ngcontent-vvo-c63="" class="main-nav__item"><a _ngcontent-vvo-c63="" routerlink="/draw-results" title="" class="main-nav__link" href="/draw-results">Draw Results</a></li>
                                    <li _ngcontent-vvo-c63="" class="main-nav__item"><a _ngcontent-vvo-c63="" routerlink="/faq" title="" class="main-nav__link" href="/faq">FAQ</a></li>
                                </ul><button _ngcontent-vvo-c63="" class="header__button header__button_sm nav-button">
                                    <svg-icon _ngcontent-vvo-c63="" name="hamburger-new" class="nav-button__icon nav-button__icon_hamburger" _nghost-vvo-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M19.167 9.166H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667zM19.167 3.334H.833a.833.833 0 000 1.667h18.334a.833.833 0 000-1.667zM19.167 15H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </button><a _ngcontent-vvo-c63="" routerlink="/cart" class="header__button nav-button" href="/cart"><span _ngcontent-vvo-c63="" class="nav-button__label ng-star-inserted">0</span>
                                    <!---->
                                    <!---->
                                    <svg-icon _ngcontent-vvo-c63="" name="cart-new" class="nav-button__icon nav-button__icon_shopping-cart" _nghost-vvo-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27758)" fill="#00131F">
                                                <path d="M18.927 3.397a2.494 2.494 0 00-1.919-.897H3.535L3.5 2.208A2.5 2.5 0 001.018 0H.833a.833.833 0 000 1.667h.185a.833.833 0 01.828.735l1.147 9.75a4.167 4.167 0 004.138 3.681h8.702a.834.834 0 000-1.666H7.131A2.5 2.5 0 014.78 12.5h9.933a4.166 4.166 0 004.101-3.428l.654-3.628a2.495 2.495 0 00-.542-2.046zm-1.094 1.751l-.655 3.629a2.5 2.5 0 01-2.464 2.056H4.516l-.784-6.666h13.276a.833.833 0 01.825.981zM5.833 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333zM14.167 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27758">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-vvo-c63="" routerlink="/my-account" class="header__button nav-button" href="/my-account">
                                    <svg-icon _ngcontent-vvo-c63="" name="profile-new" class="nav-button__icon nav-button__icon_account" _nghost-vvo-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27763)" fill="#00131F">
                                                <path d="M10 10a5 5 0 100-10 5 5 0 000 10zm0-8.333a3.333 3.333 0 110 6.666 3.333 3.333 0 010-6.666zM10 11.667a7.508 7.508 0 00-7.5 7.5.833.833 0 101.667 0 5.833 5.833 0 0111.666 0 .833.833 0 101.667 0 7.509 7.509 0 00-7.5-7.5z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27763">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a>
                            </nav>
                        </header>
                        <div _ngcontent-vvo-c63="" class="mobile-menu"><button _ngcontent-vvo-c63="" class="mobile-menu__close">
                                <svg-icon _ngcontent-vvo-c63="" name="close-7-d" class="mobile-menu__close-icon" _nghost-vvo-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M17.692 15.713L8.288 6.308a1.05 1.05 0 00-1.485 0l-.495.495a1.05 1.05 0 000 1.484l9.404 9.405c.41.41 1.075.41 1.485 0l.495-.494c.41-.41.41-1.075 0-1.485z"></path>
                                        <path d="M15.712 6.308l-9.404 9.405a1.05 1.05 0 000 1.485l.494.494c.41.41 1.076.41 1.485 0l4.703-4.702 4.702-4.702a1.05 1.05 0 000-1.485l-.495-.495a1.05 1.05 0 00-1.485 0z"></path>
                                    </svg></svg-icon>
                            </button>
                            <aside _ngcontent-vvo-c63="" class="mobile-menu__panel">
                                <nav _ngcontent-vvo-c63="" class="mobile-menu__nav">
                                    <ul _ngcontent-vvo-c63="" class="mobile-menu__nav-list">
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><span _ngcontent-vvo-c63="" class="mobile-menu__title"> Competitions</span></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/current-competitions" title="" class="mobile-menu__link" href="/current-competitions">Cars &amp; Bikes</a></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/current-tech-competitions" title="" class="mobile-menu__link" href="/current-tech-competitions">Tech &amp; Luxury</a></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/cash-competitions" title="" class="mobile-menu__link" href="/cash-competitions">Cash</a></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/instant-wins" title="" class="mobile-menu__link" href="/instant-wins"> Instant Wins</a></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><span _ngcontent-vvo-c63="" class="mobile-menu__divider"></span></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/competition-winners/featured" title="" class="mobile-menu__link" href="/competition-winners/featured">Winners</a></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/draw-results" title="" class="mobile-menu__link" href="/draw-results">Draw Results</a></li>
                                        <li _ngcontent-vvo-c63="" class="mobile-menu__item"><a _ngcontent-vvo-c63="" routerlink="/faq" title="" class="mobile-menu__link" href="/faq">FAQ</a></li>
                                    </ul>
                                </nav>
                                <div _ngcontent-vvo-c63="" class="mobile-menu__bottom-wrapper">
                                    <p _ngcontent-vvo-c63="" class="mobile-menu__text">7days Social</p>
                                    <div _ngcontent-vvo-c63="" class="mobile-menu__socials"><a _ngcontent-vvo-c63="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-vvo-c63="" name="facebook-7-d" class="mobile-menu__social-icon" _nghost-vvo-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                    <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a><a _ngcontent-vvo-c63="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-vvo-c63="" name="instagram-full" class="mobile-menu__social-icon" _nghost-vvo-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <radialGradient id="a" cx="-246.567" cy="-244.705" r="65" gradientTransform="matrix(0 -1.982 -1.8439 0 -415.672 -347.69)" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#fd5"></stop>
                                                        <stop offset=".1" stop-color="#fd5"></stop>
                                                        <stop offset=".5" stop-color="#ff543e"></stop>
                                                        <stop offset="1" stop-color="#c837ab"></stop>
                                                    </radialGradient>
                                                    <path d="M66 1c-27.1 0-35 0-36.6.2-5.6.5-9 1.3-12.8 3.2-2.9 1.4-5.2 3.1-7.5 5.5-4.1 4.2-6.6 9.5-7.5 15.8-.4 3-.6 3.6-.6 19.1V66c0 27.1 0 35 .2 36.6.5 5.4 1.3 8.8 3.1 12.6 3.4 7.1 10 12.5 17.8 14.5 2.7.7 5.6 1.1 9.4 1.3 1.6.1 18 .1 34.4.1s32.8 0 34.4-.1c4.4-.2 7-.6 9.8-1.3 7.8-2 14.2-7.3 17.8-14.5 1.8-3.6 2.7-7.2 3.1-12.3.1-1.1.1-19 .1-36.8 0-17.8 0-35.7-.1-36.8-.4-5.2-1.3-8.7-3.1-12.4-1.5-3-3.2-5.3-5.6-7.6-4.3-4.1-9.6-6.6-15.8-7.5-3-.4-3.6-.6-19.2-.6H66z" fill="url(#a)"></path>
                                                    <path d="M66 18c-13 0-14.7.1-19.8.3-5.1.2-8.6 1-11.7 2.2-3.2 1.2-5.8 2.9-8.5 5.5-2.7 2.7-4.3 5.3-5.5 8.5-1.2 3.1-2 6.5-2.2 11.7-.2 5.1-.3 6.8-.3 19.8s.1 14.7.3 19.8c.2 5.1 1 8.6 2.2 11.7 1.2 3.2 2.9 5.8 5.5 8.5 2.7 2.7 5.3 4.3 8.5 5.5 3.1 1.2 6.5 2 11.7 2.2 5.1.2 6.8.3 19.8.3s14.7-.1 19.8-.3c5.1-.2 8.6-1 11.7-2.2 3.2-1.2 5.8-2.9 8.5-5.5 2.7-2.7 4.3-5.3 5.5-8.5 1.2-3.1 2-6.5 2.2-11.7.2-5.1.3-6.8.3-19.8s-.1-14.7-.3-19.8c-.2-5.1-1.1-8.6-2.2-11.7-1.2-3.2-2.9-5.8-5.5-8.5-2.7-2.7-5.3-4.3-8.5-5.5-3.1-1.2-6.6-2-11.7-2.2-5.1-.2-6.8-.3-19.8-.3zm-4.3 8.6H66c12.8 0 14.3 0 19.4.3 4.7.2 7.2 1 8.9 1.7 2.2.9 3.8 1.9 5.5 3.6 1.7 1.7 2.7 3.3 3.6 5.5.7 1.7 1.4 4.2 1.7 8.9.2 5.1.3 6.6.3 19.4s-.1 14.3-.3 19.4c-.2 4.7-1 7.2-1.7 8.9-.9 2.2-1.9 3.8-3.6 5.5-1.7 1.7-3.3 2.7-5.5 3.6-1.7.7-4.2 1.4-8.9 1.7-5.1.2-6.6.3-19.4.3-12.8 0-14.3-.1-19.4-.3-4.7-.2-7.2-1-8.9-1.7-2.2-.9-3.8-1.9-5.5-3.6-1.7-1.7-2.7-3.3-3.6-5.5-.7-1.7-1.4-4.2-1.7-8.9-.2-5.1-.3-6.6-.3-19.4s0-14.3.3-19.4c.2-4.7 1-7.2 1.7-8.9.9-2.2 1.9-3.8 3.6-5.5 1.7-1.7 3.3-2.7 5.5-3.6 1.7-.7 4.2-1.4 8.9-1.7 4.4-.2 6.2-.3 15.1-.3zm29.9 8c-3.2 0-5.8 2.6-5.8 5.8 0 3.2 2.6 5.8 5.8 5.8s5.8-2.6 5.8-5.8-2.6-5.8-5.8-5.8zM66 41.3c-13.6 0-24.7 11-24.7 24.7s11 24.6 24.7 24.6c13.6 0 24.6-11 24.6-24.6S79.6 41.3 66 41.3zm0 8.7c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a></div>
                                </div>
                            </aside>
                        </div>
                        <!---->
                    </div>
                </app-header>
                <h1 _ngcontent-vvo-c78="" class="main-title main-title_light-gray">DRAW RESULTS</h1>
                <section _ngcontent-vvo-c78="" class="section section_post-list">
                    <div _ngcontent-vvo-c78="" class="container">
                        <div _ngcontent-vvo-c78="" class="post-grid">
                            <div _ngcontent-vvo-c78="" class="row">
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/anthony-walker-won-a-100-just-eat-voucher-for-free"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/4564a16fb0b195e1511b8f95ab3bbbf1449a4142.jpg" alt="Anthony Walker Won A £100 Just Eat Voucher For Free!" title="Anthony Walker Won A £100 Just Eat Voucher For Free!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Anthony Walker Won A £100 Just Eat Voucher For Free!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #9607! Draw date 20/04/23. Anthony Walker won a £100 Just Eat Voucher for free in one of our free competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/rik-carver-richards-won-a-650bhp-nissan-gtr-1-000"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/480380b1adff9dcd5fa2af33c23df04909f66566.jpg" alt="Rik Carver-Richards Won A 650BHP Nissan GTR + £1,000!" title="Rik Carver-Richards Won A 650BHP Nissan GTR + £1,000!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Rik Carver-Richards Won A 650BHP Nissan GTR + £1,000!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Draw Date - 19/04/23
                                                    Winning ticket - #5490!
                                                    Rik Carver-Richards Won this Nissan GTR&nbsp;+ £1,000&nbsp;in one of our car competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/robert-lazenby-won-20-000-tax-free-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/19f0a7c9e7160d9b4ec5d72b15db0c640e224f43.jpg" alt="Robert Lazenby Won £20,000 Tax Free Cash!" title="Robert Lazenby Won £20,000 Tax Free Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Robert Lazenby Won £20,000 Tax Free Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #6616! Draw date: 19/04/23. Robert Lazenby won&nbsp;£20,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/adam-bailey-won-5-000-tax-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/3c2b941ccc15949b0e6c1a7795eca9824b3608c6.jpg" alt="Adam Bailey Won £5,000 Tax Cash!" title="Adam Bailey Won £5,000 Tax Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Adam Bailey Won £5,000 Tax Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #7183! Draw date 19/04/23. Adam Bailey won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/19-04-23-cash-tech-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/67ea07f1c07d2aad8ee65e0d0ca6ac1ea84ee926.jpg" alt="19/04/23 Cash / Tech Winners!" title="19/04/23 Cash / Tech Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">19/04/23 Cash / Tech Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Draw Date - 19/04/23&nbsp;

                                                    Lucy Robertson Won&nbsp;11pc DeWALT Tool Bundle With Ticket #2984

                                                    Gareth Thorning Won&nbsp;55" &amp; 75" Samsung 4K SMART TV With Ticket #1596

                                                    Darrell Webster Won Samsung Galaxy S23 Ultra #7 With Ticket #876

                                                    Lee Schofield Won £1,000 Tax Free Cash #69 With Ticket #933

                                                    Richard Brooks Won £1,000 Tax Free Cash #70 With Ticket #389

                                                    Steven Cuthbert Won PS5 Disc Edition #4 With Ticket #268

                                                    Jack Edwards Won Xbox Series X #4 With Ticket #660

                                                    Yazmin Sinclair Won £100 Halfords Voucher (Doubled If Order Is Over £1) With Ticket #9821</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/18-04-23-cash-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/fe88430442f09a99eee9352a9542be26beef3989.jpg" alt="18/04/23 Cash Winners!" title="18/04/23 Cash Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">18/04/23 Cash Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Robert Duncan Won £7,500 #18 With Ticket #2770

                                                    Dylan Jones Won £1,000 #67 With Ticket #525

                                                    Andrew Marshall Won £1,000 #68 With Ticket #104

                                                    Faye Walsh Won £100 Amazon Voucher ( Doubled if order is over £1!) With Ticket #6828</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/1-250-instant-wins-200-000-of-prizes-10-5"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/d0b97d1b6de0d4cf37aee8778c1d9bace1fef143.jpg" alt="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">COMPETITION END DATE - 20:00 17/04/23

                                                    Tom Neal Won £10,000 End Prize With Ticket #61067

                                                    Alex Lock Won £20 Cash With Ticket #284

                                                    Matt Firmager Won £10 Site Credit With Ticket #337

                                                    Nacho Alandes ubeda Won £10 Cash With Ticket #358

                                                    Robert Duffell Won £100 Cash With Ticket #380

                                                    Pippa Moore Won £100 Cash With Ticket #542

                                                    Jamie Greenall Won an Pure Electric Air Scooter With Ticket #757

                                                    Daniel Broadhead Won £10 Cash With Ticket #1100

                                                    Lee pyke Won £10 Site Credit With Ticket #1434

                                                    Connor Satterly Won £25 Site Credit With Ticket #1461

                                                    Josh Gallagher Won £25 Site Credit With Ticket #1516

                                                    Neil westlake Won £10 Site Credit With Ticket #1533

                                                    Jamie Roberts Won a £25 Gift Card With Ticket #1812

                                                    Lee Hindle Won £10 Site Credit With Ticket #1825

                                                    Sarah Gabb Won a £25 Gift Card With Ticket #2102

                                                    Bradley Bulpitt Won £20 Cash With Ticket #2193

                                                    Alex Lock Won an JBL Xtre</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/17-04-23-cash-tech-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/50ce5a1d01d7cd208ea11a01aa0dcd86bdfcbdc4.jpg" alt="17/04/23 Cash / Tech Winners!" title="17/04/23 Cash / Tech Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">17/04/23 Cash / Tech Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Liam Donovan Won £1,500 Tax Free Cash #40 With Ticket #1616

                                                    John Clarridge&nbsp;Won £1,500 Tax Free Cash #39 With Ticket #881

                                                    Ian&nbsp;Prentice Won 1oz Gold Bar With Ticket #1397

                                                    Marius Bratu Won iPhone 14 Pro Or Pro Max #38 With Ticket #1204

                                                    Danyaal Rashid Won Apple Watch Series 8 With Ticket #753

                                                    Marc Inayatullah&nbsp;Won PS5 Disc Edition #3 With Ticket #943

                                                    Andrew Venn Won Xbox Series X #3 With Ticket #527

                                                    Jane Bradley Won £100 Pizza Hut Voucher (Doubled If Order Is Over £1) With Ticket #4573</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/ashley-joseph-won-an-audi-rsq8"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/b401a7f8a435153b48c0d2f2322584c118db6b60.jpg" alt="Ashley Joseph Won An Audi RSQ8!" title="Ashley Joseph Won An Audi RSQ8!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Ashley Joseph Won An Audi RSQ8!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Draw date - 16/04/23 @8PM

                                                    Winning ticket #130571! Ashley&nbsp;Joseph Won an Audi RSQ8 and opted for the cash alternative in one of our luxury 4X4 competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/alex-smith-won-this-bmw-m3-competition-1-000"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8104498334b324bf9e5927955e28bfc7af226aac.jpg" alt="Alex Smith Won This  BMW M3 Competition + £1,000!" title="Alex Smith Won This  BMW M3 Competition + £1,000!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Alex Smith Won This BMW M3 Competition + £1,000!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - 46549! Draw date: 16/04/23. Alex Smith&nbsp;won this BMW M3 Competition + £1,000 Cash in one of our car&nbsp;competitions! What an awesome win!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/james-black-won-20-000-tax-free-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/65a40ab9d6e614612d7570dfe2eadca7d3e6902f.jpg" alt="James Black Won £20,000 Tax Free Cash!" title="James Black Won £20,000 Tax Free Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">James Black Won £20,000 Tax Free Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #27656! Draw date: 16/04/23. James Black&nbsp;won&nbsp;£20,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/zak-hurrell-won-this-honda-cbr1000rr-fireblade"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/e762b84a05fe73e69316dbc777e6a7e64eff49a7.jpg" alt="Zak Hurrell Won This Honda CBR1000RR Fireblade!" title="Zak Hurrell Won This Honda CBR1000RR Fireblade!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Zak Hurrell Won This Honda CBR1000RR Fireblade!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - 1037! Draw date: 16/04/23. Zak Hurrell&nbsp;won a Honda CBR1000RR Fireblade&nbsp;in one of our 99p motorbike competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/eric-erasmus-won-a-rolex-batman-gmt-master-ii"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/0adc3527c3c53b516a26155315d08498babe3b84.jpg" alt="Eric Erasmus Won A Rolex Batman GMT Master II!" title="Eric Erasmus Won A Rolex Batman GMT Master II!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Eric Erasmus Won A Rolex Batman GMT Master II!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">&nbsp;Winning ticket #15032! Draw date: 16/04/23. Eric Erasmus won a Rolex Batman GMT Master II and opted for the cash alternative in our latest watch competition!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/joseph-grover-won-5-000-tax-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/17478b63f84db5556c838944cb0fdce3c171258d.jpg" alt="Joseph Grover Won £5,000 Tax Cash!" title="Joseph Grover Won £5,000 Tax Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Joseph Grover Won £5,000 Tax Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #5260! Draw date 16/04/23. Joseph Grover won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/adam-armstrong-won-a-road-legal-sur-ron-lbx-electric-bike"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/9d0ca8ab9014603c650821cf5c0663f104339346.jpg" alt="Adam Armstrong Won A Road Legal Sur Ron LBX Electric Bike!" title="Adam Armstrong Won A Road Legal Sur Ron LBX Electric Bike!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Adam Armstrong Won A Road Legal Sur Ron LBX Electric Bike!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket #1739! Draw date: 16/04/23. Adam Armstrong&nbsp;Won a Road Legal Sur-Ron LBX Electric Bike and opted for the cash alternative&nbsp;in one of our motorbike competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/16-04-23-cash-tech-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/4730370c9e2d235e632cc69be9434d3221d1cc30.jpg" alt="16/04/23 Cash / Tech Winners!" title="16/04/23 Cash / Tech Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">16/04/23 Cash / Tech Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Frederick Boarder Won Any Wheels Of Your Choice With Ticket #2398

                                                    Sam Clucas Won Louis Vuitton Keepall Bag With Ticket #2280

                                                    Darrell Webster Won Samsung Galaxy S23 Ultra #6 With Ticket #1011

                                                    Paul Price Won iPhone 14 Pro Or Pro Max #37 With Ticket #1339

                                                    Warren Pedley Won BC Racing Coilovers For Any Car With Ticket #680

                                                    Muhammad Shazad Won Gadget Bundle With Ticket #1180

                                                    Jamie marc Oliver Won Oculus Quest 2 VR 256GB With Ticket #301

                                                    Dean Molyneux Won PS5 Disc Edition #2 With Ticket #86

                                                    Jennifer Scarfe&nbsp; Won PS5 Disc Edition #1 With Ticket #337

                                                    Paul Brown Won Xbox Series X #1 With Ticket #876

                                                    Robert Green Won Xbox Series X #2&nbsp;With Ticket #151

                                                    Craig Marson Won £1,000 Tax Free Cash #66 With Ticket #286

                                                    SHAUN THOMAS WILLIAMS Won £1,000 Tax Free Cash #65 With Ticket #1478

                                                    Ian Kelly Won £1,000 Tax Free Cash #64 With Ticket #375

                                                    Elliott Wells Won £250 Cash (Doubled If Order Is Over £1) With Ticket #3515</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/david-robinson-won-this-2021-vw-tiguan-r-1-000-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/994f2a8e70450fe52b301f45de5f7251cd0f3675.jpg" alt="David Robinson Won This 2021 VW Tiguan R + £1,000 Cash!" title="David Robinson Won This 2021 VW Tiguan R + £1,000 Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">David Robinson Won This 2021 VW Tiguan R + £1,000 Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - 13417! Draw date: 14/04/23&nbsp; David Robinson&nbsp;Won this 2021&nbsp;VW Tiguan R in one of our car competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/tom-priestley-won-this-audi-rs3-1-000-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/c77ca1aaf97497311d2cec1c33535c155200ea7c.jpg" alt="Tom Priestley Won This Audi RS3 + £1,000 Cash" title="Tom Priestley Won This Audi RS3 + £1,000 Cash">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Tom Priestley Won This Audi RS3 + £1,000 Cash</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket -56420! Draw date: 14/04/23. Tom Priestley&nbsp;Won this Audi RS3 + £1,000 in one of our car competitions! What an awesome win!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/mitchell-emma-won-40-000-tax-free-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8b54976748ee52a98e88e994dbab4c76b605fafd.jpg" alt="Mitchell Emma Won £40,000 Tax Free Cash!" title="Mitchell Emma Won £40,000 Tax Free Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Mitchell Emma Won £40,000 Tax Free Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #707! Draw date 14/04/23. Mitchell Emma won £40,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/garry-beveridge-won--5-000-tax-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8c3e05d455a7392ece2f0d03b66d5bf3e60ccc62.jpg" alt="Garry Beveridge Won £5,000 Tax Cash!" title="Garry Beveridge Won £5,000 Tax Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Garry Beveridge Won £5,000 Tax Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #6717! Draw date 14/04/23. Garry Beveridge won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/14-04-23-cash-tech-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/ddc0977a9ed5a3236852e10f52d84acbf51624a3.jpg" alt="14/04/23 Cash / Tech Winners!" title="14/04/23 Cash / Tech Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">14/04/23 Cash / Tech Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">James Brough Won Home Cinema System With Ticket #1723

                                                    Joshua Hartnell Won Tag Heuer F1 Watch Of Your Choice For 99p With Ticket #2795

                                                    Adam Rodger Won MacBook Pro With Ticket #2204

                                                    Si Paul Won iPhone 14 Pro Or Pro Max #36 With Ticket #558

                                                    Jayme Wisker Won Sealey Tool Chest + 420 Tools With Ticket #867

                                                    MARC INAYATULLAH Won PS5 Disc Edition #100 With Ticket #697

                                                    Daniel&nbsp;Larman Won PS5 Disc Edition #99 With Ticket #827

                                                    JOHN CLARRIDGE Won £1,000 Tax Free Cash #63 With Ticket #616

                                                    Simon&nbsp;Latty Won £1,000 Tax Free Cash #62 With Ticket #1412

                                                    Matthew Bullough Won Xbox Series X #100 With Ticket #695

                                                    Amy Spanswick Won Xbox Series X #99 With Ticket #420

                                                    James Fisher Won £100 Cash (Doubled If&nbsp;Order Is Over £1) With Ticket #2205

                                                    &nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/1-250-instant-wins-200-000-of-prizes-10-4"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/863b1ce59afb1f97a4c8d7309c879bfeba93d2d4.jpg" alt="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">COMPETITION END DATE - 20:38 13/04/23

                                                    Craig Hastie&nbsp;Won £10,000 End Prize With Ticket #12906

                                                    Angela Boyce Won £10 Cash With Ticket #78

                                                    Marie Cinova Won an Sonos One SL With Ticket #94

                                                    Ryan Inns Won £20 Cash With Ticket #118

                                                    Albert Thomson Won an JBL Xtreme 3 Speaker With Ticket #127

                                                    Joanne Carney Won £10 Site Credit With Ticket #502

                                                    David Cutler Won £50 Site Credit With Ticket #990

                                                    Nathan Brodie Won £50 Site Credit With Ticket #1147

                                                    James Ingmire Won £10 Cash With Ticket #1157

                                                    Albert Thomson Won £10 Site Credit With Ticket #1412

                                                    Daniel Ward Won an GoPro Hero 11 5k Action With Ticket #1708

                                                    Humphreys Aimie Won an iPhone 14 Pro - 128GB With Ticket #1809

                                                    Adam Dale Won £10 Cash With Ticket #1857

                                                    Shaun Elliot Won £10 Cash With Ticket #2208

                                                    Alex Coelho Won an Stjarna Core Four With Ticket #2396

                                                    Joe Howe Won £50 Site Credit With Ticket #2508

                                                    Robin Brown Won £20 Cash Wi</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/chantal-vizard-won-a-100-amazon-voucher-doubled-if-order-is-over-1"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/e0540cce726cb7c5b6d92057a30a769c68d875df.jpg" alt="Chantal Vizard Won a £100 Amazon Voucher (Doubled If Order is Over £1)" title="Chantal Vizard Won a £100 Amazon Voucher (Doubled If Order is Over £1)">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Chantal Vizard Won a £100 Amazon Voucher (Doubled If Order is Over £1)</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #5672! Draw date 13/04/23. Chantal Vizard won a £100 Amazon Voucher (Doubled If Order is Over £1)!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/ateeq-saleem-won-a-630bhp-mercedes-c63s-amg-1-000"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/db7d108d4a55cff119305068acf5a687dbfb0823.jpg" alt="Ateeq Saleem Won A 630BHP Mercedes C63s AMG + £1,000!" title="Ateeq Saleem Won A 630BHP Mercedes C63s AMG + £1,000!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Ateeq Saleem Won A 630BHP Mercedes C63s AMG + £1,000!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket -35611! Draw date: 12/04/23. Ateeq Saleem&nbsp;Won a 630BHP Mercedes C63s AMG and opted for the cash a alternative&nbsp;in one of our&nbsp;car competitions</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/marc-kirkwood-won-20-000-tax-free-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/f3cbe0c57fe6cfb9e3fafafa2c7b3d1d3136235d.jpg" alt="MARC KIRKWOOD Won £20,000 Tax Free Cash!" title="MARC KIRKWOOD Won £20,000 Tax Free Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">MARC KIRKWOOD Won £20,000 Tax Free Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #8071! Draw date: 12/04/23. MARC KIRKWOOD&nbsp;won&nbsp;£20,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/siraj-musa-won-5-000-tax-cash"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/281b0845e6cd2934b1433cc06eb17de1e8860122.jpg" alt="Siraj Musa Won £5,000 Tax Cash!" title="Siraj Musa Won £5,000 Tax Cash!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">Siraj Musa Won £5,000 Tax Cash!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Winning ticket - #172! Draw date 12/04/23. Siraj Musa won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/12-04-23-cash-tech-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/876304bb611485d0e64e75edeb10efbcc2d888c1.jpg" alt="12/04/23 Cash / Tech Winners!" title="12/04/23 Cash / Tech Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">12/04/23 Cash / Tech Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Mostafa Kafaje Won Louis Vuitton Alma BB Bag + Reversible Belt With Ticket #421

                                                    Leoneto Soares Won iPhone 14 Pro Or Pro Max #35 With Ticket #1164

                                                    Peter Janicwicz Won Samsung Galaxy S23 Ultra #5 With Ticket #1501

                                                    Connie Hanchard Won US PRO TOOLS 55” Chest + Tools With Ticket #1349

                                                    Karl Spooner Won Samsung 75" 4K SMART TV With Ticket #1614

                                                    David-James Bruce Won Pure Air Pro Electric Scooter 2nd Gen With Ticket #394

                                                    Kev Doyle Won PS5 Disc Edition #98 With Ticket #70

                                                    Ben Jarrett Won PS5 Disc Edition #97 With Ticket #605

                                                    Dean Bostock Won Xbox Series X #98 With Ticket #731

                                                    Lucy Robertson Won Xbox Series X #97 With Ticket #344

                                                    Elliot Burrows Won £1,000 Tax Free Cash #61 With Ticket #1212

                                                    Robert Duncan Won £1,000 Tax Free Cash #60&nbsp;With Ticket #1888

                                                    Nelson Martins Won £100 Pizza Hut Voucher (Doubled If Order Is Over £1) With Ticket #3273</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/11-04-23-cash-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/18f58e1f60f73cebca2e1f66d9f9803539840123.jpg" alt="11/04/23 Cash Winners!" title="11/04/23 Cash Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">11/04/23 Cash Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Draw Date - 11/04/23

                                                    Lewis Middleton-sewell Won £7,500 #17 With Ticket #3506

                                                    Callum Ball Won £1,000 #56 With Ticket #1071

                                                    Robert Duncan Won £1,000 #57 With Ticket #466

                                                    Gino Campanaro Won £1,000 #58 With Ticket #1830

                                                    Robert Duncan Won £1,000 #59 With Ticket #1202

                                                    Alex McGill Won £100 Just Eat Voucher (Doubled if Order Over £1) With Ticket #6582</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/1-250-instant-wins-200-000-of-prizes-10-3"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/12ca2e9163b4a15509df5cf4d98d81e5f2f42929.jpg" alt="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">COMPETITION END DATE - 20:00 10/04/23

                                                    Rebecca Ayles&nbsp;Won £10,000 End Prize With Ticket #71578

                                                    Jan Cina Won £10 Cash With Ticket #201

                                                    alicja marciniak Won £25 Site Credit With Ticket #468

                                                    Martin Dingwall Won £10 Cash With Ticket #578

                                                    Hayden Baird Won £10 Site Credit With Ticket #603

                                                    Peter Swift Won a £25 Gift Card With Ticket #728

                                                    James Moore Won £10 Site Credit With Ticket #1166

                                                    Luke Derbyshire Won £10 Cash With Ticket #1367

                                                    Conor Meiklejohn Won £10 Cash With Ticket #1570

                                                    Ryan Oneil Won £10 Site Credit With Ticket #1614

                                                    Robert Stevenson Won £20 Cash With Ticket #2106

                                                    Ashley Powell Won an Stjarna&nbsp;Kit -&nbsp;7days Special With Ticket #2324

                                                    Tom Healey Won a £25 Gift Card With Ticket #3042

                                                    Faisal Zarif Won £25 Site Credit With Ticket #3631

                                                    Luis Carrasco Barnes Won £25 Site Credit With Ticket #3712

                                                    Leanne Humphries Won £10 Site Credit With Ticket</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-vvo-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-vvo-c78="" type="draw-result" _nghost-vvo-c77=""><a _ngcontent-vvo-c77="" class="post-card" href="/draw-result/10-04-23-cash-tech-winners"><img _ngcontent-vvo-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/7bcaef85ff520fb1c541776115b9159fb56d2e80.jpg" alt="10/04/23 Cash / Tech Winners!" title="10/04/23 Cash / Tech Winners!">
                                            <div _ngcontent-vvo-c77="" class="post-card__content">
                                                <h3 _ngcontent-vvo-c77="" class="post-card__title">10/04/23 Cash / Tech Winners!</h3>
                                                <p _ngcontent-vvo-c77="" class="post-card__description">Draw date - 10/04/23

                                                    Oliver Selby Won £1,500 Tax Free Cash #38 With Ticket #1370

                                                    Peter Stuart Won £1,500 Tax Free Cash #37 With Ticket #1154

                                                    Steven Butler Won Massive 13pc Makita Tool Bundle With Ticket #1831

                                                    Riard Ejupi Won iPhone 14 Pro Or Pro Max #34 With Ticket #1720

                                                    Andrew Ward Won Ooni Pizza Oven With Ticket #226

                                                    Bradley Lake Won&nbsp;Xbox Series X #96 With Ticket #676

                                                    Andrew Baldwin Won PS5 Disc Edition #96 With Ticket #754

                                                    Peter Warner Won £100 Halfords Voucher (Doubled If Order Is Over £1) With Ticket #1722</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                            <div _ngcontent-vvo-c78="" class="post-grid__older-posts ng-star-inserted"><button _ngcontent-vvo-c78="" class="button button_blue button_no-shadow">Older posts</button></div>
                            <!---->
                        </div>
                    </div>
                </section>
                <app-footer _ngcontent-vvo-c78="" _nghost-vvo-c64="">
                    <div _ngcontent-vvo-c64="" class="footer">
                        <div _ngcontent-vvo-c64="" class="footer__wrapper">
                            <div _ngcontent-vvo-c64="" class="footer__links"><a _ngcontent-vvo-c64="" routerlink="/" title="" class="footer__logo" href="/"><img _ngcontent-vvo-c64="" src="/assets/svg/logo.svg" alt="7days Performance" class="footer__logo-image"></a>
                                <ul _ngcontent-vvo-c64="">
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/cookie-and-privacy-policy" href="/cookie-and-privacy-policy">Cookie &amp; Privacy Policy</a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/website-terms" href="/website-terms">Website Terms</a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/responsible-gambling" href="/responsible-gambling">Responsible Gambling</a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/reviews" href="/reviews">Reviews</a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/faq" href="/faq">FAQ</a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/security" href="/security">Security</a></li>
                                    <li _ngcontent-vvo-c64="">&nbsp;</li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" routerlink="/about-us" href="/about-us">Our Team</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-vvo-c64="" class="footer__social">
                                <div _ngcontent-vvo-c64="">
                                    <p _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" href="mailto:hello@7daysperformance.co.uk" class="footer__social-email">hello@7daysperformance.co.uk</a></p>
                                    <p _ngcontent-vvo-c64="" class="footer__annotation--light"> 7days Performance - Technology and Marketing powered by <a _ngcontent-vvo-c64="" href="https://sevencanyon.com/" target="_blank" class="footer__annotation--light"><u _ngcontent-vvo-c64="">SevenCanyon</u></a></p>
                                    <p _ngcontent-vvo-c64="" class="footer__annotation--light">© All rights reserved</p>
                                </div>
                                <ul _ngcontent-vvo-c64="">
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-vvo-c64="" name="facebook-new" _nghost-vvo-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm1.668 16.703v8.705h-3.602v-8.704h-1.8v-3h1.8v-1.801c0-2.447 1.016-3.903 3.903-3.903h2.403v3H18.87c-1.124 0-1.198.42-1.198 1.202l-.004 1.502h2.721l-.318 3h-2.403z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-vvo-c64="" name="instagram-new" _nghost-vvo-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.002.503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.164-16-16-16zm-3.518 7.518c.91-.041 1.201-.051 3.519-.051H16c2.319 0 2.608.01 3.518.051.909.042 1.53.186 2.073.397a4.17 4.17 0 011.511.984c.475.474.767.95.985 1.511.21.543.354 1.163.397 2.072.04.91.051 1.2.051 3.518 0 2.318-.01 2.608-.051 3.518-.043.908-.187 1.528-.397 2.071a4.189 4.189 0 01-.985 1.512c-.474.474-.949.767-1.51.985-.543.21-1.164.354-2.072.396-.91.041-1.2.052-3.518.052-2.317 0-2.608-.01-3.518-.052-.909-.042-1.529-.185-2.072-.396a4.18 4.18 0 01-1.511-.985 4.181 4.181 0 01-.984-1.512c-.211-.543-.355-1.163-.397-2.071-.04-.91-.051-1.2-.051-3.518 0-2.317.01-2.608.051-3.519.041-.908.185-1.528.397-2.07A4.19 4.19 0 018.9 9.401c.475-.475.95-.766 1.512-.984.543-.211 1.163-.355 2.071-.397z" fill="#C4C9CE"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.236 9.508h.766c2.278 0 2.548.008 3.448.05.832.037 1.283.176 1.584.293.398.155.682.34.98.638.3.299.484.583.64.981.116.3.255.752.293 1.585.041.9.05 1.17.05 3.447s-.009 2.547-.05 3.447c-.038.832-.177 1.283-.294 1.584-.154.398-.34.682-.638.98a2.637 2.637 0 01-.98.638c-.301.118-.753.256-1.585.294-.9.041-1.17.05-3.448.05-2.279 0-2.549-.009-3.449-.05-.832-.038-1.283-.177-1.584-.294a2.644 2.644 0 01-.981-.638 2.644 2.644 0 01-.64-.98c-.116-.301-.255-.753-.293-1.585-.04-.9-.049-1.17-.049-3.448 0-2.28.008-2.548.049-3.448.038-.832.177-1.283.294-1.584.155-.398.34-.683.639-.981.298-.299.583-.484.98-.639.302-.117.753-.256 1.585-.294.788-.036 1.093-.046 2.683-.048v.002zm5.32 1.417a1.024 1.024 0 100 2.048 1.024 1.024 0 000-2.049zm-8.936 5.578a4.382 4.382 0 118.765 0 4.382 4.382 0 01-8.765 0z" fill="#C4C9CE"></path>
                                                    <path d="M16.003 13.66a2.845 2.845 0 110 5.688 2.845 2.845 0 010-5.689z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-vvo-c64=""><a _ngcontent-vvo-c64="" href="https://www.youtube.com/channel/UCxB-y6oGP1lSCHwoE2hKvmA" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-vvo-c64="" name="youtube-new" _nghost-vvo-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm6.668 10.5a2.166 2.166 0 011.509 1.55c.356 1.366.356 4.217.356 4.217s0 2.852-.356 4.218a2.167 2.167 0 01-1.51 1.55c-1.33.366-6.667.366-6.667.366s-5.337 0-6.668-.366a2.167 2.167 0 01-1.509-1.55c-.356-1.366-.356-4.218-.356-4.218s0-2.851.356-4.217a2.167 2.167 0 011.51-1.55c1.33-.366 6.667-.366 6.667-.366s5.337 0 6.668.366z" fill="#C4C9CE"></path>
                                                    <path d="M14.4 19.703V14.37l4.267 2.666-4.267 2.667z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </app-footer>
            </app-draw-results>
            <!---->
        </div>
    </div>
</div>
@endsection
