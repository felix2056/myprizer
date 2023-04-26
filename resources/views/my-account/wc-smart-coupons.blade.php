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
        .current-competitions__section[_ngcontent-hpj-c79] {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .current-competitions__data-header[_ngcontent-hpj-c79] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center;
            padding: 0 15px 20px;
            width: 100%
        }

        .current-competitions__result-count[_ngcontent-hpj-c79] {
            font-size: 17px;
            color: gray
        }

        .current-competitions__sort-options[_ngcontent-hpj-c79] {
            font-size: 17px
        }

        .current-competitions__pagination-box[_ngcontent-hpj-c79] {
            width: 100%;
            padding: 10px 15px 40px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        .error404__title[_ngcontent-hpj-c79] {
            font-size: 150px;
            line-height: 1;
            font-weight: 400;
            color: gray;
            margin: 0;
            text-align: center;
            padding-top: 50px;
            padding-bottom: 30px
        }

        .error404__search-form[_ngcontent-hpj-c79] {
            margin-top: 32px;
            display: -webkit-flex;
            display: flex
        }

        .error404__search-submit[_ngcontent-hpj-c79] {
            padding: 0 25px;
            height: 46px;
            margin-left: 6px
        }

        .error404__loader-box[_ngcontent-hpj-c79] {
            min-height: 40vh;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center
        }

        .error404__loader-icon[_ngcontent-hpj-c79] {
            width: 40px;
            height: 40px
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

        .header[_ngcontent-hpj-c63] {
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
            .header[_ngcontent-hpj-c63] {
                height: 100px
            }
        }

        @media (min-width: 992px) {
            .header--short[_ngcontent-hpj-c63] {
                height: 62px
            }
        }

        .header__nav[_ngcontent-hpj-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            margin-left: auto
        }

        @media (min-width: 1200px) {
            .header__button_sm[_ngcontent-hpj-c63] {
                display: none !important
            }
        }

        .logo[_ngcontent-hpj-c63] {
            padding: 0 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .logo[_ngcontent-hpj-c63] {
                padding: 0 30px
            }
        }

        @media (min-width: 768px) {
            .logo[_ngcontent-hpj-c63] {
                padding: 0 40px
            }
        }

        .logo__img[_ngcontent-hpj-c63] {
            width: auto;
            height: 35px;
            transition: width .2s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 330px) {
            .logo__img[_ngcontent-hpj-c63] {
                height: 40px
            }
        }

        @media (min-width: 360px) {
            .logo__img[_ngcontent-hpj-c63] {
                height: 45px
            }
        }

        @media (min-width: 992px) {
            .logo__img[_ngcontent-hpj-c63] {
                height: 56px
            }
        }

        @media (min-width: 768px) {
            .header--short[_ngcontent-hpj-c63] .logo__img[_ngcontent-hpj-c63] {
                height: 45px
            }
        }

        .main-nav[_ngcontent-hpj-c63] {
            display: none
        }

        @media (min-width: 1200px) {
            .main-nav[_ngcontent-hpj-c63] {
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

        .main-nav__item[_ngcontent-hpj-c63] {
            height: 100%
        }

        .main-nav__link[_ngcontent-hpj-c63] {
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
            .main-nav__link[_ngcontent-hpj-c63] {
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

        .nav-button[_ngcontent-hpj-c63] {
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
            .nav-button[_ngcontent-hpj-c63] {
                width: 81px
            }
        }

        @media (min-width: 992px) {
            .nav-button[_ngcontent-hpj-c63] {
                width: 101px
            }
        }

        .nav-button[_ngcontent-hpj-c63]:hover,
        .nav-button[_ngcontent-hpj-c63]:focus {
            outline: 0;
            background-color: #f6f7f9
        }

        .nav-button__icon[_ngcontent-hpj-c63] {
            color: #6e7191;
            width: 20px;
            height: 20px
        }

        .nav-button__icon_hamburger[_ngcontent-hpj-c63] {
            width: 24px;
            height: 24px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_hamburger[_ngcontent-hpj-c63] {
                height: 22px;
                width: 20px
            }
        }

        .nav-button__icon_shopping-cart[_ngcontent-hpj-c63] {
            width: 22px;
            height: 22px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_shopping-cart[_ngcontent-hpj-c63] {
                width: 20px;
                height: 20px
            }
        }

        .nav-button__label[_ngcontent-hpj-c63] {
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
            .nav-button__label[_ngcontent-hpj-c63] {
                min-width: 22px;
                height: 22px;
                line-height: 22px;
                padding: 0 4px;
                font-size: 14px
            }
        }

        .nav-button__loading[_ngcontent-hpj-c63] {
            display: inline-block;
            width: 14px
        }

        .mobile-menu[_ngcontent-hpj-c63] {
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

        .mobile-menu_shown[_ngcontent-hpj-c63] {
            background-color: rgba(0, 0, 0, .78);
            pointer-events: all
        }

        .mobile-menu__panel[_ngcontent-hpj-c63] {
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

        .mobile-menu_shown[_ngcontent-hpj-c63] .mobile-menu__panel[_ngcontent-hpj-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close[_ngcontent-hpj-c63] {
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

        .mobile-menu__close[_ngcontent-hpj-c63]:hover,
        .mobile-menu__close[_ngcontent-hpj-c63]:focus {
            color: #ea1c0d;
            outline: none
        }

        .mobile-menu_shown[_ngcontent-hpj-c63] .mobile-menu__close[_ngcontent-hpj-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close-icon[_ngcontent-hpj-c63] {
            width: 60px;
            height: 60px
        }

        .mobile-menu__nav[_ngcontent-hpj-c63] {
            margin-bottom: 25px;
            padding: 0 13px 37px;
            border-bottom: 1px solid #0a2539
        }

        .mobile-menu__nav-list[_ngcontent-hpj-c63] {
            margin: 0;
            padding: 0
        }

        .mobile-menu__item[_ngcontent-hpj-c63] {
            list-style-type: none
        }

        .mobile-menu__divider[_ngcontent-hpj-c63] {
            height: 1px;
            display: block;
            margin: 13px;
            width: calc(100% - 26px);
            background-color: #5a7b93
        }

        .mobile-menu__title[_ngcontent-hpj-c63] {
            color: #449bd8;
            font-size: 14px;
            display: block;
            padding: 16px 13px 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase
        }

        .mobile-menu__link[_ngcontent-hpj-c63] {
            display: inline-block;
            font-size: 16px;
            line-height: 1;
            padding: 13px;
            color: #f6f7f9;
            cursor: pointer;
            transition: color .3s;
            text-decoration: none
        }

        .mobile-menu__link[_ngcontent-hpj-c63]:hover {
            color: #d7dce5
        }

        .mobile-menu__bottom-wrapper[_ngcontent-hpj-c63] {
            padding: 0 25.5px
        }

        .mobile-menu__text[_ngcontent-hpj-c63] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
            line-height: 29px;
            color: #fff
        }

        .mobile-menu__socials[_ngcontent-hpj-c63] {
            display: -webkit-flex;
            display: flex;
            margin: 0 -12px
        }

        .mobile-menu__social-link[_ngcontent-hpj-c63] {
            display: inline-block;
            padding: 0 12px;
            text-decoration: none
        }

        .mobile-menu__social-icon[_ngcontent-hpj-c63] {
            width: 40px;
            height: 40px
        }

        .native-nav[_ngcontent-hpj-c63] {
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

        .native-nav__button[_ngcontent-hpj-c63] {
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

        .native-nav__button[_ngcontent-hpj-c63]:hover {
            color: rgba(0, 0, 0, .7);
            text-decoration: none
        }

        .native-nav__button_inactive[_ngcontent-hpj-c63] {
            color: rgba(0, 0, 0, .3) !important
        }

        .native-nav__icon[_ngcontent-hpj-c63] {
            font-size: 15px;
            line-height: 18px
        }

        .native-nav__label[_ngcontent-hpj-c63] {
            font-size: 12px;
            line-height: 18px;
            padding-top: 1px
        }

        .header-container[_ngcontent-hpj-c63] {
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

        .header-placeholder[_ngcontent-hpj-c63] {
            height: 100px;
            width: 100%
        }

        @media (max-width: 991.9px) {
            .header-placeholder[_ngcontent-hpj-c63] {
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

        .footer[_ngcontent-hpj-c64] {
            text-align: center;
            padding: 40px 0;
            font-family: Exo, sans-serif;
            background-color: #f5f6f7
        }

        @media (min-width: 992px) {
            .footer[_ngcontent-hpj-c64] {
                padding: 80px 40px
            }
        }

        .footer[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] {
            padding: 0
        }

        .footer[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] {
            list-style: none
        }

        @media (min-width: 992px) {
            .footer__wrapper[_ngcontent-hpj-c64] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        .footer__logo[_ngcontent-hpj-c64] {
            display: inline-block
        }

        .footer__logo-image[_ngcontent-hpj-c64] {
            height: 45px;
            display: inline-block
        }

        @media (min-width: 992px) {
            .footer__logo-image[_ngcontent-hpj-c64] {
                height: 55px
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-hpj-c64] {
                display: -webkit-flex;
                display: flex
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] {
                text-align: left;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin: 0 0 0 104px;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content
            }
        }

        .footer__links[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] {
            margin-bottom: 12px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] {
                margin-right: 137px
            }
        }

        .footer__links[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] a[_ngcontent-hpj-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__links[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] a[_ngcontent-hpj-c64]:hover {
            text-decoration: underline
        }

        .footer__social-email[_ngcontent-hpj-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__social-email[_ngcontent-hpj-c64]:hover {
            text-decoration: underline
        }

        .footer__social[_ngcontent-hpj-c64] {
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-hpj-c64] {
                margin-top: 0;
                text-align: right
            }
        }

        .footer__social[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] {
                -webkit-justify-content: end;
                justify-content: end;
                margin-top: 96px;
                margin-bottom: 0
            }
        }

        .footer__social[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] {
            margin: 0 6px
        }

        .footer__social[_ngcontent-hpj-c64] ul[_ngcontent-hpj-c64] li[_ngcontent-hpj-c64] svg-icon[_ngcontent-hpj-c64] {
            width: 32px;
            height: 32px
        }

        .footer__social[_ngcontent-hpj-c64] p[_ngcontent-hpj-c64] {
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f
        }

        .footer__social[_ngcontent-hpj-c64] p.footer__annotation--light[_ngcontent-hpj-c64],
        .footer__social[_ngcontent-hpj-c64] p[_ngcontent-hpj-c64] a.footer__annotation--light[_ngcontent-hpj-c64] {
            color: rgba(0, 19, 31, .33)
        }

        .footer__social-link[_ngcontent-hpj-c64]:hover {
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

    </style>
    <style>
        [_nghost-hpj-c61] {
            display: inline-block;
            width: 100%;
            height: 100%
        }

        [_nghost-hpj-c61] .svg-icon,
        [_nghost-hpj-c61] svg {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            fill: currentColor
        }

        [_nghost-hpj-c61] .svg-icon {
            width: auto;
            height: 100%;
            display: block
        }

        [_nghost-hpj-c61] .svg-icon_star-path {
            fill: #000064
        }

        [_nghost-hpj-c61] .svg-icon__fill_trustpilot {
            fill: #13b57a
        }

        [_nghost-hpj-c61] .svg-icon__fill_default {
            fill: #fff
        }

        [_nghost-hpj-c61] .svg-icon__cart-wheel {
            stroke: none;
            fill: #010101
        }

        [_nghost-hpj-c61] .svg-icon__paypal {
            fill: #263b80
        }

        [_nghost-hpj-c61] .svg-icon__paypal_light {
            fill: #139ad6
        }

        [_nghost-hpj-c61] .svg-icon__paypal_shadow {
            fill: #139ad6
        }

        [_nghost-hpj-c61] .svg-icon__paypal_cross {
            fill: #232c65
        }

        [_nghost-hpj-c61] .svg-icon__facebook-full_letter {
            opacity: 0
        }

        [_nghost-hpj-c61] .svg-icon__check {
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        [_nghost-hpj-c61] .svg-icon__receive-email-line {
            stroke: currentColor
        }

        [_nghost-hpj-c61] .svg-icon__circle {
            fill: none;
            stroke: currentColor
        }

        [_nghost-hpj-c61] .svg-icon svg {
            width: 100%;
            height: 100%;
            display: inline-block
        }

        .spinning[_nghost-hpj-c61] {
            -webkit-animation: rotate 1s linear infinite;
            animation: rotate 1s linear infinite;
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .svg-icon__footer-facebook[_nghost-hpj-c61] .svg-icon__facebook-full_letter,
        .svg-icon__footer-facebook [_nghost-hpj-c61] .svg-icon__facebook-full_letter {
            opacity: 1;
            fill: #fff
        }

    </style>
    <style>
        .holder[_ngcontent-hpj-c59] {
            position: relative;
            font-size: inherit;
            line-height: inherit;
            display: inline-block
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

        [_nghost-hpj-c62] {
            display: block
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] {
            background-color: #00131f
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] .prompt-img__wrapper[_ngcontent-hpj-c62] {
            overflow: hidden;
            border-radius: 8px;
            max-width: 40px;
            height: 40px;
            margin-right: 8px
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] .prompt-img__wrapper[_ngcontent-hpj-c62] img[_ngcontent-hpj-c62] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] .prompt-close-icon[_ngcontent-hpj-c62] {
            max-width: 14px;
            height: 14px;
            margin-right: 12px;
            cursor: pointer;
            -webkit-filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%);
            filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%)
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] .prompt__content-title[_ngcontent-hpj-c62] {
            color: #f5f6f7;
            font-size: 16px
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] .prompt__content-category[_ngcontent-hpj-c62] {
            color: #b9b9b9;
            font-size: 10px
        }

        [_nghost-hpj-c62] .prompt-container[_ngcontent-hpj-c62] .prompt-btn[_ngcontent-hpj-c62] {
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
            [_nghost-hpj-c62] {
                display: none
            }
        }

    </style>
    <script src="chrome-extension://doocmbmlcnbbdohogchldhlikjpndpng/yts-controls.js" extensionbaseurl="chrome-extension://doocmbmlcnbbdohogchldhlikjpndpng"></script>
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

        [_nghost-hpj-c65] {
            display: block;
            width: 100%;
            max-width: 33.33333%;
            margin-bottom: 25px;
            padding: 0 15px;
            text-align: center;
            box-sizing: border-box;
            font-family: Exo, sans-serif
        }

        @media (max-width: 767.9px) {
            [_nghost-hpj-c65] {
                max-width: 48%;
                padding: 0 5px
            }
        }

        @media (min-width: 992px) {
            [_nghost-hpj-c65] {
                margin-bottom: 35px
            }
        }

        @media (min-width: 1600px) {
            [_nghost-hpj-c65] {
                max-width: 25%
            }
        }

        .raffle-card[_ngcontent-hpj-c65] {
            text-decoration: none;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: 100%;
            background: #F5F6F7
        }

        @media (min-width: 992px) {
            .raffle-card[_ngcontent-hpj-c65] {
                padding-bottom: 24px;
                border-top: 0;
                border-left: 10px;
                border-top: 10px;
                border-right: 0;
                border-radius: 0 0 10px 10px
            }
        }

        .raffle-card--white[_ngcontent-hpj-c65] {
            background: #fff
        }

        .raffle-card[_ngcontent-hpj-c65]:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .05)
        }

        .raffle-card[_ngcontent-hpj-c65]:hover .raffle-card__enter[_ngcontent-hpj-c65] {
            background-color: #2aa8f8;
            color: #fff;
            border-color: #2aa8f8
        }

        .raffle-card[_ngcontent-hpj-c65]:hover .raffle-card__enter-icon--blue[_ngcontent-hpj-c65] {
            display: none !important
        }

        .raffle-card[_ngcontent-hpj-c65]:hover .raffle-card__enter-icon--white[_ngcontent-hpj-c65] {
            display: inline-block !important
        }

        .raffle-card__image[_ngcontent-hpj-c65] {
            width: 100%;
            position: relative
        }

        .raffle-card__image[_ngcontent-hpj-c65] img[_ngcontent-hpj-c65] {
            width: 100%;
            display: block;
            border-radius: 8px 8px 0 0
        }

        .raffle-card__label[_ngcontent-hpj-c65] {
            position: absolute;
            left: 0;
            top: 0;
            padding: 4px 10px;
            font-family: Barlow Condensed;
            text-transform: uppercase;
            letter-spacing: .15rem
        }

        .raffle-card__label_green[_ngcontent-hpj-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__image-red-cover[_ngcontent-hpj-c65] {
            position: absolute;
            z-index: 2;
            left: 45px;
            right: 45px;
            top: 50%;
            text-align: center;
            background: red;
            font-size: 24px;
            line-height: 1.3em;
            letter-spacing: .8px;
            font-family: Barlow Condensed;
            padding: 5px;
            color: #fff;
            -webkit-transform: rotate(-8deg) translateY(-50%);
            transform: rotate(-8deg) translateY(-50%);
            text-transform: uppercase
        }

        @media (max-width: 575.9px) {
            .raffle-card__image-red-cover[_ngcontent-hpj-c65] {
                left: 20px;
                right: 20px;
                font-size: 16px;
                padding: 3px
            }
        }

        .raffle-card__draw[_ngcontent-hpj-c65] {
            position: absolute;
            top: 0;
            left: 8px;
            background: #fff;
            border: 1px solid #F5F6F7;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 8px;
            line-height: 12px;
            text-align: center;
            color: #00131f;
            margin: 0
        }

        @media (max-width: 377.9px) {
            .raffle-card__draw[_ngcontent-hpj-c65] {
                font-size: 7px;
                padding: 5px
            }
        }

        @media (min-width: 992px) {
            .raffle-card__draw[_ngcontent-hpj-c65] {
                font-size: 16px;
                right: 12px;
                left: auto;
                left: initial;
                padding: 11px 16px
            }
        }

        .raffle-card__draw_tomorrow[_ngcontent-hpj-c65] {
            background-color: #2aa8f8;
            color: #fff;
            border: none;
            margin-right: 10px
        }

        .raffle-card__draw_tomorrow[_ngcontent-hpj-c65] span[_ngcontent-hpj-c65] {
            border-radius: 10px;
            color: #fff;
            padding: 1px 3.5px;
            background-color: #007ccd
        }

        @media (min-width: 992px) {
            .raffle-card__draw_tomorrow[_ngcontent-hpj-c65] span[_ngcontent-hpj-c65] {
                font-size: 14px;
                padding: 2px 7.5px
            }
        }

        .raffle-card__wrapper[_ngcontent-hpj-c65] {
            -webkit-flex-grow: 1;
            flex-grow: 1
        }

        .raffle-card__alternative[_ngcontent-hpj-c65] {
            font-weight: 500;
            font-size: 10px;
            line-height: 14px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .raffle-card__alternative[_ngcontent-hpj-c65] {
                font-size: 14px;
                line-height: 20px
            }
        }

        .raffle-card__title[_ngcontent-hpj-c65] {
            font-weight: 600;
            font-size: 14px;
            line-height: 18px;
            letter-spacing: -.01em;
            color: #00131f;
            margin: 0;
            padding: 8px 8px 4px
        }

        @media (min-width: 992px) {
            .raffle-card__title[_ngcontent-hpj-c65] {
                padding: 24px 15px 8px;
                font-size: 24px;
                line-height: 28px
            }
        }

        .raffle-card__price[_ngcontent-hpj-c65] {
            font-weight: 800;
            font-size: 20px;
            line-height: 20px;
            text-transform: uppercase;
            margin-top: 18px
        }

        @media (min-width: 992px) {
            .raffle-card__price[_ngcontent-hpj-c65] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .raffle-card__price-new[_ngcontent-hpj-c65] {
            color: #2aa8f8
        }

        .raffle-card__price-old[_ngcontent-hpj-c65] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 7px
        }

        @media (min-width: 992px) {
            .raffle-card__price-old[_ngcontent-hpj-c65] {
                font-weight: 800;
                font-size: 24px;
                line-height: 32px;
                margin-right: 12px
            }
        }

        .raffle-card__enter[_ngcontent-hpj-c65] {
            padding: 8px 10px;
            border: 1px solid #2AA8F8;
            background-color: transparent;
            color: #2aa8f8;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -.01em;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 992px) {
            .raffle-card__enter[_ngcontent-hpj-c65] {
                margin: 13px 24px 0;
                font-size: 20px;
                line-height: 24px;
                padding: 12px 10px;
                border-width: 2px
            }
        }

        .raffle-card__enter-icon[_ngcontent-hpj-c65] {
            width: 20px;
            height: 16px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .raffle-card__enter-icon[_ngcontent-hpj-c65] {
                height: 20px
            }
        }

        .raffle-card__enter-icon--white[_ngcontent-hpj-c65] {
            display: none
        }

        .raffle-card__slider[_ngcontent-hpj-c65] {
            margin-top: 14px;
            padding: 0 8px;
            position: relative
        }

        @media (min-width: 992px) {
            .raffle-card__slider[_ngcontent-hpj-c65] {
                padding: 0 24px;
                margin-top: 28px
            }
        }

        .raffle-card__slider--hidden[_ngcontent-hpj-c65] {
            opacity: 0
        }

        .raffle-card__sold[_ngcontent-hpj-c65] {
            font-weight: 600;
            font-size: 10px;
            line-height: 12px;
            text-align: center;
            text-transform: uppercase;
            color: #939ca4;
            position: absolute;
            top: -2px
        }

        @media (min-width: 992px) {
            .raffle-card__sold[_ngcontent-hpj-c65] {
                top: -7px
            }
        }

        .raffle-card__drawtime[_ngcontent-hpj-c65] {
            background: #F5F6F7;
            border-radius: 20px;
            color: #00131f;
            white-space: nowrap;
            position: absolute;
            top: -9px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translate(-50%);
            padding: 4px 12px;
            font-size: 11px;
            line-height: 11px;
            font-weight: 500;
            box-shadow: 0 0 1px rgba(0, 0, 0, .15)
        }

        @media (min-width: 992px) {
            .raffle-card__drawtime[_ngcontent-hpj-c65] {
                font-size: 14px;
                line-height: 15px;
                padding: 5px 19px;
                top: -12px
            }
        }

        .raffle-card__drawtime--soon[_ngcontent-hpj-c65] {
            background-color: #2aa8f8;
            color: #fff
        }

        .raffle-card__drawtime--urgent[_ngcontent-hpj-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__bottominfo[_ngcontent-hpj-c65] {
            background-color: #2aa8f8;
            border-radius: 20px;
            color: #fff;
            white-space: nowrap;
            position: absolute;
            bottom: -5px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translate(-50%);
            padding: 4px 12px;
            font-size: 11px;
            line-height: 11px;
            font-weight: 500;
            box-shadow: 0 0 1px rgba(0, 0, 0, .15)
        }

        @media (min-width: 992px) {
            .raffle-card__bottominfo[_ngcontent-hpj-c65] {
                font-size: 14px;
                line-height: 15px;
                padding: 5px 19px;
                bottom: -12px
            }
        }

        .raffle-card .noUi-horizontal {
            height: 5px;
            background: #E9EBED
        }

        .raffle-card .noUi-horizontal * {
            cursor: pointer !important
        }

        .raffle-card .noUi-horizontal .noUi-tooltip {
            width: 80px;
            padding: 0;
            bottom: 30px;
            box-shadow: none
        }

        .raffle-card .noUi-horizontal .noUi-tooltip:after {
            content: " "
        }

        .raffle-card .noUi-horizontal.noUi-target {
            border: none
        }

        .raffle-card .noUi-horizontal.noUi-target,
        .raffle-card .noUi-horizontal.noUi-target * {
            touch-action: pan-y !important
        }

        .raffle-card .noUi-horizontal .noUi-handle {
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background-color: #2aa8f8;
            border: none;
            box-shadow: none;
            box-sizing: content-box;
            right: -12px;
            top: -5px
        }

        .raffle-card .noUi-horizontal .noUi-handle:before,
        .raffle-card .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .raffle-card .noUi-horizontal .noUi-connect {
            background: #2AA8F8
        }

        .raffle-card .noUi-horizontal .noUi-tooltip {
            bottom: 19px;
            width: 30px;
            padding: 1px;
            text-align: center;
            background-color: #2aa8f8;
            border-radius: 5px;
            font-size: 10px;
            font-weight: 400;
            line-height: 22px;
            color: #fff;
            white-space: nowrap;
            transition: background-color .2s, box-shadow .1s, -webkit-transform .1s;
            transition: background-color .2s, box-shadow .1s, transform .1s;
            transition: background-color .2s, box-shadow .1s, transform .1s, -webkit-transform .1s;
            display: none
        }

        .raffle-card .increaseRight .noUi-horizontal .noUi-handle {
            right: -1px
        }

    </style>
    <style>
        [_nghost-hpj-c46] {
            display: block;
            margin-top: 1rem;
            margin-bottom: 1rem;
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

        .account[_ngcontent-hpj-c92] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        @media (max-width: 575.9px) {
            .account[_ngcontent-hpj-c92] {
                -webkit-flex-direction: column;
                flex-direction: column
            }
        }

        .account__nav[_ngcontent-hpj-c92] {
            width: 30%
        }

        @media (max-width: 575.9px) {
            .account__nav[_ngcontent-hpj-c92] {
                width: 100%;
                margin-bottom: 30px
            }
        }

        .account__content[_ngcontent-hpj-c92] {
            width: 65%
        }

        @media (max-width: 575.9px) {
            .account__content[_ngcontent-hpj-c92] {
                width: 100%
            }
        }

        .account-nav__list[_ngcontent-hpj-c92] {
            margin: 0;
            padding: 0
        }

        .account-nav__item[_ngcontent-hpj-c92] {
            display: block;
            list-style-type: none
        }

        .account-nav__link[_ngcontent-hpj-c92] {
            position: relative;
            display: block;
            padding: 15px;
            border-style: solid;
            border-color: #d8dadd;
            border-width: 1px 1px 0 1px;
            font-size: 16px;
            line-height: 24px;
            color: #3fa9f5;
            text-decoration: none;
            transition: border-color .3s, color .3s, background-color .3s;
            cursor: pointer;
            font-weight: 400
        }

        .account-nav__link[_ngcontent-hpj-c92]:after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 3px;
            background-color: #3fa9f5;
            opacity: 0;
            content: "";
            transition: opacity .3s
        }

        .account-nav__item[_ngcontent-hpj-c92]:last-child .account-nav__link[_ngcontent-hpj-c92] {
            border-width: 1px
        }

        .account-nav__link_active[_ngcontent-hpj-c92],
        .account-nav__link[_ngcontent-hpj-c92]:hover {
            color: #3fa9f5;
            background-color: #cce9fe;
            border-color: #3fa9f5
        }

        .account-nav__link_active[_ngcontent-hpj-c92]:after,
        .account-nav__link[_ngcontent-hpj-c92]:hover:after {
            opacity: 1
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

        .loader-icon__box[_ngcontent-hpj-c96] {
            text-align: center;
            padding: 10px 0
        }

        .loader-icon__page-box[_ngcontent-hpj-c96] {
            text-align: center;
            padding: 100px 0 300px
        }

        .loader-icon__icon[_ngcontent-hpj-c96] {
            width: 44px;
            height: 44px
        }

        .loader-icon__intext[_ngcontent-hpj-c96] {
            width: 12px;
            height: 12px;
            line-height: inherit
        }

        .loader-icon__button[_ngcontent-hpj-c96] {
            width: 16px;
            height: 16px
        }

        .tabs__link-box[_ngcontent-hpj-c96] {
            display: -webkit-flex;
            display: flex;
            border-bottom: 1px solid #dee2e6
        }

        .tabs__link[_ngcontent-hpj-c96] {
            display: inline-block;
            -webkit-transform: translateY(1px);
            transform: translateY(1px);
            padding: 8px 16px;
            border: 1px solid rgba(255, 255, 255, 0);
            border-radius: 4px 4px 0 0;
            font-size: 16px;
            line-height: 24px;
            text-decoration: none;
            color: #3fa9f5;
            transition: color .3s, border-color .3s
        }

        .tabs__link[_ngcontent-hpj-c96]:hover {
            border-color: #dee2e6;
            color: #0b85dc
        }

        .tabs__link_active[_ngcontent-hpj-c96] {
            border-color: #dee2e6;
            border-bottom-color: #fff;
            color: #495057;
            pointer-events: none
        }

        .tabs__content-box[_ngcontent-hpj-c96] {
            list-style-type: none;
            margin: 0;
            padding: 5px 0 0;
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            overflow: hidden
        }

        .tabs__content[_ngcontent-hpj-c96] {
            padding-top: 20px;
            padding-bottom: 20px;
            -webkit-flex: none;
            flex: none;
            width: 100%
        }

        .tabs__row[_ngcontent-hpj-c96] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -15px
        }

        .tabs__col[_ngcontent-hpj-c96] {
            width: 100%;
            max-width: 50%;
            margin-bottom: 48px;
            padding: 0 15px
        }

        @media (max-width: 767.9px) {
            .tabs__col[_ngcontent-hpj-c96] {
                max-width: 100%
            }
        }

        .dashboard[_ngcontent-hpj-c96] {
            font-size: 17px;
            font-weight: 400;
            line-height: 25px;
            color: gray
        }

        .dashboard__text[_ngcontent-hpj-c96] {
            margin-top: 0;
            margin-bottom: 16px;
            letter-spacing: -.01em
        }

        .dashboard__text-bold[_ngcontent-hpj-c96] {
            font-weight: 700
        }

        .dashboard__text-italic[_ngcontent-hpj-c96] {
            font-style: italic
        }

        .dashboard__link[_ngcontent-hpj-c96] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s;
            cursor: pointer
        }

        .dashboard__link[_ngcontent-hpj-c96]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .dashboard__line[_ngcontent-hpj-c96] {
            margin-top: 16px;
            margin-bottom: 16px;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .dashboard__title[_ngcontent-hpj-c96] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 28px;
            line-height: 34px;
            font-weight: 400
        }

        .dashboard__text-small[_ngcontent-hpj-c96] {
            font-size: 13px;
            line-height: 19px
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

        [_nghost-hpj-c93] {
            margin-bottom: 30px;
            display: block
        }

        .draw-result-card[_ngcontent-hpj-c93] {
            padding: 20px;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 4px;
            font-size: 16px;
            line-height: 24px;
            color: gray
        }

        .draw-result-card[_ngcontent-hpj-c93] .button_border[_ngcontent-hpj-c93] {
            border: 2px solid #2AA8F8;
            background: transparent;
            width: 100%;
            border-radius: 4px;
            color: #2aa8f8;
            padding: 7px 0;
            max-height: 44px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .draw-result-card[_ngcontent-hpj-c93] .button_border[_ngcontent-hpj-c93]:hover {
            background: #2AA8F8;
            color: #fff
        }

        .draw-result-card[_ngcontent-hpj-c93] .button_border[_ngcontent-hpj-c93]:focus {
            -webkit-filter: none;
            filter: none
        }

        .draw-result-card__title[_ngcontent-hpj-c93] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 20px;
            font-weight: 400;
            line-height: 24px
        }

        .draw-result-card__text[_ngcontent-hpj-c93] {
            margin-top: 0;
            margin-bottom: 16px
        }

        .draw-result-card_empty[_ngcontent-hpj-c93] .draw-result-card__text[_ngcontent-hpj-c93] {
            margin-bottom: 0
        }

        .draw-result-card__text-italic[_ngcontent-hpj-c93] {
            font-style: italic
        }

        .draw-result-card__text-bold[_ngcontent-hpj-c93] {
            font-weight: 700
        }

        .draw-result-card__link-box[_ngcontent-hpj-c93] {
            overflow: hidden
        }

        .draw-result-card__link-list[_ngcontent-hpj-c93] {
            margin-top: 20px;
            margin-bottom: 0;
            padding: 10px;
            background-color: #f7f7f7
        }

        .draw-result-card__link-item[_ngcontent-hpj-c93] {
            display: inline-block;
            list-style-type: none
        }

        .draw-result-card__link-item[_ngcontent-hpj-c93]:after {
            margin-right: 3px;
            content: ","
        }

        .draw-result-card__link-item[_ngcontent-hpj-c93]:last-child:after {
            margin-right: 0;
            content: "."
        }

        .draw-result-card__link[_ngcontent-hpj-c93] {
            display: inline-block;
            color: #3fa9f5;
            text-decoration: none;
            white-space: nowrap;
            transition: color .3s
        }

        .draw-result-card__link[_ngcontent-hpj-c93]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .draw-result-card__button[_ngcontent-hpj-c93] {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 14px;
            line-height: 21px
        }

    </style>
    <style>
        .coupon[_ngcontent-hpj-c97] {
            display: inline-block;
            padding: 8px;
            background-color: #edf2f4;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            cursor: pointer;
            transition: -webkit-transform .15s;
            transition: transform .15s;
            transition: transform .15s, -webkit-transform .15s
        }

        .coupon[_ngcontent-hpj-c97]:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        .coupon__wrapper[_ngcontent-hpj-c97] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        .coupon__icon[_ngcontent-hpj-c97] {
            width: 24px;
            height: 24px;
            color: rgba(255, 255, 255, 0);
            stroke: #2b2d42
        }

        .coupon__body[_ngcontent-hpj-c97] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: center;
            justify-content: center;
            padding: 0 8px
        }

        .coupon__credit[_ngcontent-hpj-c97] {
            margin-top: 6px;
            margin-bottom: 4px;
            font-size: 14px;
            line-height: 14px;
            font-weight: 700;
            color: #d90429
        }

        .coupon__number[_ngcontent-hpj-c97] {
            margin-top: 0;
            margin-bottom: 4px;
            font-size: 12px;
            line-height: 12px;
            color: #2b2d42
        }

        .coupon__date[_ngcontent-hpj-c97] {
            margin: 0;
            font-size: 12px;
            line-height: 12px;
            color: #2b2d42
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

        .coupon-list[_ngcontent-hpj-c97] {
            margin-bottom: 30px
        }

        .coupon-list__title[_ngcontent-hpj-c97] {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 32px;
            line-height: 39px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__title_account[_ngcontent-hpj-c97] {
            margin-bottom: 8px
        }

        .coupon-list__subtitle-row[_ngcontent-hpj-c97] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin-bottom: 8px
        }

        .coupon-list__subtitle[_ngcontent-hpj-c97] {
            margin: 0;
            font-size: 24px;
            line-height: 28.8px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__print-button[_ngcontent-hpj-c97] {
            font-family: Exo;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0);
            border: 1px solid rgba(255, 255, 255, 0);
            color: #3fa9f5
        }

        .coupon-list__print-button[_ngcontent-hpj-c97]:hover {
            color: #0b85dc
        }

        .coupon-list__print-button[_ngcontent-hpj-c97]:focus {
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .coupon-list__text[_ngcontent-hpj-c97] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 25.5px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__row[_ngcontent-hpj-c97] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -4px
        }

        .coupon-list__col[_ngcontent-hpj-c97] {
            margin: 0 4px 8px
        }

        .coupon-list__total-text[_ngcontent-hpj-c97] {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 16px;
            line-height: 24px;
            color: gray;
            text-align: right
        }

        .coupon-list__total-bold-text[_ngcontent-hpj-c97] {
            font-size: 24px;
            line-height: 36px;
            font-weight: 700
        }

    </style>
</head>
@endsection

@section('content')
<div _ngcontent-hpj-c13="" class="website-p7d">
    <div _ngcontent-hpj-c13="">
        <div _ngcontent-hpj-c13="">
            <router-outlet _ngcontent-hpj-c13=""></router-outlet>
            <app-my-account _nghost-hpj-c92="" class="ng-star-inserted">
                <app-header _ngcontent-hpj-c92="" _nghost-hpj-c63="">
                    <div _ngcontent-hpj-c63="" class="header-placeholder"></div>
                    <!---->
                    <div _ngcontent-hpj-c63="" class="header-container">
                        <app-install-prompt _ngcontent-hpj-c63="" _nghost-hpj-c62="" class="ng-tns-c62-2 ng-star-inserted">
                            <!---->
                        </app-install-prompt>
                        <!---->
                        <header _ngcontent-hpj-c63="" class="header"><a _ngcontent-hpj-c63="" routerlink="/" title="Go to homepage" class="logo header__logo" href="/"><img _ngcontent-hpj-c63="" src="/assets/svg/logo.svg" alt="7days Performance" class="logo__img"></a>
                            <nav _ngcontent-hpj-c63="" class="header__nav">
                                <ul _ngcontent-hpj-c63="" class="main-nav">
                                    <li _ngcontent-hpj-c63="" class="main-nav__item"><a _ngcontent-hpj-c63="" routerlink="/current-competitions" title="" class="main-nav__link" href="/current-competitions">Cars and Bikes</a></li>
                                    <li _ngcontent-hpj-c63="" class="main-nav__item"><a _ngcontent-hpj-c63="" routerlink="/current-tech-competitions" title="" class="main-nav__link" href="/current-tech-competitions">Tech and Luxury</a></li>
                                    <li _ngcontent-hpj-c63="" class="main-nav__item"><a _ngcontent-hpj-c63="" routerlink="/cash-competitions" title="" class="main-nav__link" href="/cash-competitions">Tax Free Cash</a></li>
                                    <li _ngcontent-hpj-c63="" class="main-nav__item"><a _ngcontent-hpj-c63="" routerlink="/competition-winners/featured" title="" class="main-nav__link" href="/competition-winners/featured">Winners</a></li>
                                    <li _ngcontent-hpj-c63="" class="main-nav__item"><a _ngcontent-hpj-c63="" routerlink="/draw-results" title="" class="main-nav__link" href="/draw-results">Draw Results</a></li>
                                    <li _ngcontent-hpj-c63="" class="main-nav__item"><a _ngcontent-hpj-c63="" routerlink="/faq" title="" class="main-nav__link" href="/faq">FAQ</a></li>
                                </ul><button _ngcontent-hpj-c63="" class="header__button header__button_sm nav-button">
                                    <svg-icon _ngcontent-hpj-c63="" name="hamburger-new" class="nav-button__icon nav-button__icon_hamburger" _nghost-hpj-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M19.167 9.166H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667zM19.167 3.334H.833a.833.833 0 000 1.667h18.334a.833.833 0 000-1.667zM19.167 15H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </button><a _ngcontent-hpj-c63="" routerlink="/cart" class="header__button nav-button" href="/cart"><span _ngcontent-hpj-c63="" class="nav-button__label ng-star-inserted">0</span>
                                    <!---->
                                    <!---->
                                    <svg-icon _ngcontent-hpj-c63="" name="cart-new" class="nav-button__icon nav-button__icon_shopping-cart" _nghost-hpj-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27758)" fill="#00131F">
                                                <path d="M18.927 3.397a2.494 2.494 0 00-1.919-.897H3.535L3.5 2.208A2.5 2.5 0 001.018 0H.833a.833.833 0 000 1.667h.185a.833.833 0 01.828.735l1.147 9.75a4.167 4.167 0 004.138 3.681h8.702a.834.834 0 000-1.666H7.131A2.5 2.5 0 014.78 12.5h9.933a4.166 4.166 0 004.101-3.428l.654-3.628a2.495 2.495 0 00-.542-2.046zm-1.094 1.751l-.655 3.629a2.5 2.5 0 01-2.464 2.056H4.516l-.784-6.666h13.276a.833.833 0 01.825.981zM5.833 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333zM14.167 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27758">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-hpj-c63="" routerlink="/my-account" class="header__button nav-button" href="/my-account">
                                    <svg-icon _ngcontent-hpj-c63="" name="profile-new" class="nav-button__icon nav-button__icon_account" _nghost-hpj-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
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
                        <div _ngcontent-hpj-c63="" class="mobile-menu"><button _ngcontent-hpj-c63="" class="mobile-menu__close">
                                <svg-icon _ngcontent-hpj-c63="" name="close-7-d" class="mobile-menu__close-icon" _nghost-hpj-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M17.692 15.713L8.288 6.308a1.05 1.05 0 00-1.485 0l-.495.495a1.05 1.05 0 000 1.484l9.404 9.405c.41.41 1.075.41 1.485 0l.495-.494c.41-.41.41-1.075 0-1.485z"></path>
                                        <path d="M15.712 6.308l-9.404 9.405a1.05 1.05 0 000 1.485l.494.494c.41.41 1.076.41 1.485 0l4.703-4.702 4.702-4.702a1.05 1.05 0 000-1.485l-.495-.495a1.05 1.05 0 00-1.485 0z"></path>
                                    </svg></svg-icon>
                            </button>
                            <aside _ngcontent-hpj-c63="" class="mobile-menu__panel">
                                <nav _ngcontent-hpj-c63="" class="mobile-menu__nav">
                                    <ul _ngcontent-hpj-c63="" class="mobile-menu__nav-list">
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><span _ngcontent-hpj-c63="" class="mobile-menu__title"> Competitions</span></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/current-competitions" title="" class="mobile-menu__link" href="/current-competitions">Cars &amp; Bikes</a></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/current-tech-competitions" title="" class="mobile-menu__link" href="/current-tech-competitions">Tech &amp; Luxury</a></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/cash-competitions" title="" class="mobile-menu__link" href="/cash-competitions">Cash</a></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/instant-wins" title="" class="mobile-menu__link" href="/instant-wins"> Instant Wins</a></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><span _ngcontent-hpj-c63="" class="mobile-menu__divider"></span></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/competition-winners/featured" title="" class="mobile-menu__link" href="/competition-winners/featured">Winners</a></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/draw-results" title="" class="mobile-menu__link" href="/draw-results">Draw Results</a></li>
                                        <li _ngcontent-hpj-c63="" class="mobile-menu__item"><a _ngcontent-hpj-c63="" routerlink="/faq" title="" class="mobile-menu__link" href="/faq">FAQ</a></li>
                                    </ul>
                                </nav>
                                <div _ngcontent-hpj-c63="" class="mobile-menu__bottom-wrapper">
                                    <p _ngcontent-hpj-c63="" class="mobile-menu__text">7days Social</p>
                                    <div _ngcontent-hpj-c63="" class="mobile-menu__socials"><a _ngcontent-hpj-c63="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-hpj-c63="" name="facebook-7-d" class="mobile-menu__social-icon" _nghost-hpj-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                    <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a><a _ngcontent-hpj-c63="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-hpj-c63="" name="instagram-full" class="mobile-menu__social-icon" _nghost-hpj-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
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
                <h1 _ngcontent-hpj-c92="" class="main-title">COUPONS</h1>
                <section _ngcontent-hpj-c92="" class="section section_account ng-star-inserted">
                    <div _ngcontent-hpj-c92="" class="container container_account">
                        <div _ngcontent-hpj-c92="" class="account">
                            <nav _ngcontent-hpj-c92="" class="account__nav account-nav">
                                <ul _ngcontent-hpj-c92="" class="account-nav__list">
                                    <li _ngcontent-hpj-c92="" class="account-nav__item"><a _ngcontent-hpj-c92="" routerlink="/my-account" routerlinkactive="account-nav__link_active" class="account-nav__link" href="/my-account">Dashboard</a></li>
                                    <li _ngcontent-hpj-c92="" class="account-nav__item"><a _ngcontent-hpj-c92="" routerlink="/my-account/wc-smart-coupons" routerlinkactive="account-nav__link_active" class="account-nav__link account-nav__link_active" href="/my-account/wc-smart-coupons">Coupons</a></li>
                                    <li _ngcontent-hpj-c92="" class="account-nav__item"><a _ngcontent-hpj-c92="" routerlink="/my-account/edit-address" routerlinkactive="account-nav__link_active" class="account-nav__link" href="/my-account/edit-address">Addresses</a></li>
                                    <li _ngcontent-hpj-c92="" class="account-nav__item"><a _ngcontent-hpj-c92="" routerlink="/my-account/edit-account" routerlinkactive="account-nav__link_active" class="account-nav__link" href="/my-account/edit-account">Account details</a></li>
                                    <li _ngcontent-hpj-c92="" class="account-nav__item"><a _ngcontent-hpj-c92="" routerlink="/my-account/safe-gambling" routerlinkactive="account-nav__link_active" class="account-nav__link" href="/my-account/safe-gambling">Safe gambling</a></li>
                                    <li _ngcontent-hpj-c92="" class="account-nav__item"><span _ngcontent-hpj-c92="" tabindex="0" class="account-nav__link">Logout</span></li>
                                </ul>
                            </nav>
                            <div _ngcontent-hpj-c92="" class="account__content">
                                <router-outlet _ngcontent-hpj-c92=""></router-outlet>
                                <app-coupons _nghost-hpj-c97="" class="ng-star-inserted">
                                    <div _ngcontent-hpj-c97="" class="coupons">
                                        <div _ngcontent-hpj-c97="" class="alert alert_blue alert_text-left">
                                            <p _ngcontent-hpj-c97="" class="alert__text">Sorry, No coupons available for you.</p>
                                        </div>
                                        <!---->
                                    </div>
                                </app-coupons>
                                <!---->
                            </div>
                        </div>
                    </div>
                </section>
                <!---->
                <!---->
                <!---->
                <app-footer _ngcontent-hpj-c92="" _nghost-hpj-c64="">
                    <div _ngcontent-hpj-c64="" class="footer">
                        <div _ngcontent-hpj-c64="" class="footer__wrapper">
                            <div _ngcontent-hpj-c64="" class="footer__links"><a _ngcontent-hpj-c64="" routerlink="/" title="" class="footer__logo" href="/"><img _ngcontent-hpj-c64="" src="/assets/svg/logo.svg" alt="7days Performance" class="footer__logo-image"></a>
                                <ul _ngcontent-hpj-c64="">
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/cookie-and-privacy-policy" href="/cookie-and-privacy-policy">Cookie &amp; Privacy Policy</a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/website-terms" href="/website-terms">Website Terms</a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/responsible-gambling" href="/responsible-gambling">Responsible Gambling</a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/reviews" href="/reviews">Reviews</a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/faq" href="/faq">FAQ</a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/security" href="/security">Security</a></li>
                                    <li _ngcontent-hpj-c64="">&nbsp;</li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" routerlink="/about-us" href="/about-us">Our Team</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-hpj-c64="" class="footer__social">
                                <div _ngcontent-hpj-c64="">
                                    <p _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" href="mailto:hello@7daysperformance.co.uk" class="footer__social-email">hello@7daysperformance.co.uk</a></p>
                                    <p _ngcontent-hpj-c64="" class="footer__annotation--light"> 7days Performance - Technology and Marketing powered by <a _ngcontent-hpj-c64="" href="https://7dayslabs.co.uk/" target="_blank" class="footer__annotation--light"><u _ngcontent-hpj-c64="">7days Labs</u></a></p>
                                    <p _ngcontent-hpj-c64="" class="footer__annotation--light">© All rights reserved</p>
                                </div>
                                <ul _ngcontent-hpj-c64="">
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-hpj-c64="" name="facebook-new" _nghost-hpj-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm1.668 16.703v8.705h-3.602v-8.704h-1.8v-3h1.8v-1.801c0-2.447 1.016-3.903 3.903-3.903h2.403v3H18.87c-1.124 0-1.198.42-1.198 1.202l-.004 1.502h2.721l-.318 3h-2.403z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-hpj-c64="" name="instagram-new" _nghost-hpj-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.002.503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.164-16-16-16zm-3.518 7.518c.91-.041 1.201-.051 3.519-.051H16c2.319 0 2.608.01 3.518.051.909.042 1.53.186 2.073.397a4.17 4.17 0 011.511.984c.475.474.767.95.985 1.511.21.543.354 1.163.397 2.072.04.91.051 1.2.051 3.518 0 2.318-.01 2.608-.051 3.518-.043.908-.187 1.528-.397 2.071a4.189 4.189 0 01-.985 1.512c-.474.474-.949.767-1.51.985-.543.21-1.164.354-2.072.396-.91.041-1.2.052-3.518.052-2.317 0-2.608-.01-3.518-.052-.909-.042-1.529-.185-2.072-.396a4.18 4.18 0 01-1.511-.985 4.181 4.181 0 01-.984-1.512c-.211-.543-.355-1.163-.397-2.071-.04-.91-.051-1.2-.051-3.518 0-2.317.01-2.608.051-3.519.041-.908.185-1.528.397-2.07A4.19 4.19 0 018.9 9.401c.475-.475.95-.766 1.512-.984.543-.211 1.163-.355 2.071-.397z" fill="#C4C9CE"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.236 9.508h.766c2.278 0 2.548.008 3.448.05.832.037 1.283.176 1.584.293.398.155.682.34.98.638.3.299.484.583.64.981.116.3.255.752.293 1.585.041.9.05 1.17.05 3.447s-.009 2.547-.05 3.447c-.038.832-.177 1.283-.294 1.584-.154.398-.34.682-.638.98a2.637 2.637 0 01-.98.638c-.301.118-.753.256-1.585.294-.9.041-1.17.05-3.448.05-2.279 0-2.549-.009-3.449-.05-.832-.038-1.283-.177-1.584-.294a2.644 2.644 0 01-.981-.638 2.644 2.644 0 01-.64-.98c-.116-.301-.255-.753-.293-1.585-.04-.9-.049-1.17-.049-3.448 0-2.28.008-2.548.049-3.448.038-.832.177-1.283.294-1.584.155-.398.34-.683.639-.981.298-.299.583-.484.98-.639.302-.117.753-.256 1.585-.294.788-.036 1.093-.046 2.683-.048v.002zm5.32 1.417a1.024 1.024 0 100 2.048 1.024 1.024 0 000-2.049zm-8.936 5.578a4.382 4.382 0 118.765 0 4.382 4.382 0 01-8.765 0z" fill="#C4C9CE"></path>
                                                    <path d="M16.003 13.66a2.845 2.845 0 110 5.688 2.845 2.845 0 010-5.689z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-hpj-c64=""><a _ngcontent-hpj-c64="" href="https://www.youtube.com/channel/UCxB-y6oGP1lSCHwoE2hKvmA" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-hpj-c64="" name="youtube-new" _nghost-hpj-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm6.668 10.5a2.166 2.166 0 011.509 1.55c.356 1.366.356 4.217.356 4.217s0 2.852-.356 4.218a2.167 2.167 0 01-1.51 1.55c-1.33.366-6.667.366-6.667.366s-5.337 0-6.668-.366a2.167 2.167 0 01-1.509-1.55c-.356-1.366-.356-4.218-.356-4.218s0-2.851.356-4.217a2.167 2.167 0 011.51-1.55c1.33-.366 6.667-.366 6.667-.366s5.337 0 6.668.366z" fill="#C4C9CE"></path>
                                                    <path d="M14.4 19.703V14.37l4.267 2.666-4.267 2.667z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </app-footer>
            </app-my-account>
            <!---->
        </div>
    </div>
</div>
@endsection