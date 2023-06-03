@php
$site_settings = \App\Models\SiteSetting::first();
@endphp

@extends('layouts.app')

@section('head')
<head>
    <meta charset="utf-8">
    <title>{{ $site_settings->site_name }}</title>
    <meta name="description" content="{{ $site_settings->site_description ?? 'Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!' }}">
    <meta property="fb:app_id" content="">
    <meta name="apple-itunes-app" content="app-id=1455876956">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_settings->site_name }}">
    <meta name="og:description" content="{{ $site_settings->site_description ?? 'Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!' }}">
    <meta property="og:site_name" content="{{ $site_settings->site_name }}">
    <meta property="og:locale" content="en_GB">
    <meta property="og:url" content="{{ $site_settings->site_url }}">
    <meta property="og:image" content="https://7daysperformance.co.uk/assets/images/preview-website-image.png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="500">

    <meta name="twitter:title" content="{{ $site_settings->site_name }}">
    <meta name="twitter:description" content="{{ $site_settings->site_description ?? 'Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!' }}">
    <meta name="twitter:widgets:theme" content="light">
    <meta name="twitter:widgets:link-color" content="#55acee">
    <meta name="twitter:widgets:border-color" content="#55acee">
    <meta name="twitter:card" content="summary">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="keywords" content="{{ $site_settings->site_name }}, gambling, Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!">
    <meta name="url" content="{{ $site_settings->site_url }}">
    <meta name="identifier-URL" content="{{ $site_settings->site_url }}">


    <script async="true" src="https://tr.snapchat.com/config/uk/99063123-9f29-4600-8544-5a98bcd92c2c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/vkGiR-M4noX1963Xi_DB0JeI/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-fPKiQ9Ip8Ao+pLsAE8mUg1abmHuSWNcKpyCHnRsBAk6/pvlIycXYxc+i0/w3PCZ0"></script>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/vkGiR-M4noX1963Xi_DB0JeI/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-fPKiQ9Ip8Ao+pLsAE8mUg1abmHuSWNcKpyCHnRsBAk6/pvlIycXYxc+i0/w3PCZ0"></script>
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

    <link rel="icon" type="image/png" href="{{ $site_settings->site_favicon ?? '/assets/icons/favicon2-350x350.png' }}">

    
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
            --swiper-theme-color: #f37021
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

        .faq[_ngcontent-bwg-c82] {
            outline: 0
        }

        .faq__box[_ngcontent-bwg-c82] {
            list-style-type: none;
            margin-top: 0;
            margin-bottom: 0
        }

        .faq__header[_ngcontent-bwg-c82] {
            padding: 25px 30px;
            border-bottom: 1px solid #dfdfdf;
            cursor: pointer;
            color: gray;
            transition: color .2s;
            outline: 0
        }

        .faq__header[_ngcontent-bwg-c82]:hover {
            color: #40d586;
            outline: 0
        }

        .faq_product[_ngcontent-bwg-c82] .faq__header[_ngcontent-bwg-c82] {
            position: relative;
            padding-right: 90px
        }

        .faq_inactive[_ngcontent-bwg-c82] .faq__header[_ngcontent-bwg-c82]:hover {
            color: gray;
            outline: 0
        }

        .faq__title[_ngcontent-bwg-c82] {
            margin: 0;
            font-size: 24px;
            line-height: 29px;
            font-weight: 400;
            transition: color .3s
        }

        .faq_product[_ngcontent-bwg-c82] .faq__title[_ngcontent-bwg-c82] {
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq_product-opened[_ngcontent-bwg-c82] .faq__title[_ngcontent-bwg-c82] {
            color: #40d586
        }

        .faq__arrow[_ngcontent-bwg-c82] {
            position: absolute;
            top: 50%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 62px;
            height: 30px
        }

        .faq__arrow[_ngcontent-bwg-c82]:before,
        .faq__arrow[_ngcontent-bwg-c82]:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            content: "";
            transition: opacity .3s
        }

        .faq__arrow[_ngcontent-bwg-c82]:before {
            background-image: url(/assets/images/product/faq/drop-down.png);
            opacity: 1
        }

        .faq__arrow[_ngcontent-bwg-c82]:after {
            background-image: url(/assets/images/product/faq/drop-up.png);
            opacity: 0
        }

        .faq_product-opened[_ngcontent-bwg-c82] .faq__arrow[_ngcontent-bwg-c82]:before {
            opacity: 0
        }

        .faq_product-opened[_ngcontent-bwg-c82] .faq__arrow[_ngcontent-bwg-c82]:after {
            opacity: 1
        }

        .faq__body[_ngcontent-bwg-c82] {
            overflow: hidden
        }

        .faq__content[_ngcontent-bwg-c82] {
            padding: 20px
        }

        .faq__content_center[_ngcontent-bwg-c82] {
            text-align: center
        }

        .faq_product[_ngcontent-bwg-c82] .faq__content[_ngcontent-bwg-c82] {
            color: gray
        }

        .faq__paragraph[_ngcontent-bwg-c82] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 26px
        }

        .faq__img[_ngcontent-bwg-c82] {
            display: block;
            max-width: 100%;
            margin-bottom: 16px
        }

        .faq__bold[_ngcontent-bwg-c82] {
            font-weight: 700
        }

        .faq__link[_ngcontent-bwg-c82] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__link[_ngcontent-bwg-c82]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__h2[_ngcontent-bwg-c82] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__h3[_ngcontent-bwg-c82] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 700;
            line-height: 29px;
            color: #000
        }

        .faq__h4[_ngcontent-bwg-c82] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
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

        .header[_ngcontent-bwg-c63] {
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
            .header[_ngcontent-bwg-c63] {
                height: 100px
            }
        }

        @media (min-width: 992px) {
            .header--short[_ngcontent-bwg-c63] {
                height: 62px
            }
        }

        .header__nav[_ngcontent-bwg-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            margin-left: auto
        }

        @media (min-width: 1200px) {
            .header__button_sm[_ngcontent-bwg-c63] {
                display: none !important
            }
        }

        .logo[_ngcontent-bwg-c63] {
            padding: 0 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .logo[_ngcontent-bwg-c63] {
                padding: 0 30px
            }
        }

        @media (min-width: 768px) {
            .logo[_ngcontent-bwg-c63] {
                padding: 0 40px
            }
        }

        .logo__img[_ngcontent-bwg-c63] {
            width: auto;
            height: 35px;
            transition: width .2s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 330px) {
            .logo__img[_ngcontent-bwg-c63] {
                height: 40px
            }
        }

        @media (min-width: 360px) {
            .logo__img[_ngcontent-bwg-c63] {
                height: 45px
            }
        }

        @media (min-width: 992px) {
            .logo__img[_ngcontent-bwg-c63] {
                height: 56px
            }
        }

        @media (min-width: 768px) {
            .header--short[_ngcontent-bwg-c63] .logo__img[_ngcontent-bwg-c63] {
                height: 45px
            }
        }

        .main-nav[_ngcontent-bwg-c63] {
            display: none
        }

        @media (min-width: 1200px) {
            .main-nav[_ngcontent-bwg-c63] {
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

        .main-nav__item[_ngcontent-bwg-c63] {
            height: 100%
        }

        .main-nav__link[_ngcontent-bwg-c63] {
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
            .main-nav__link[_ngcontent-bwg-c63] {
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

        .nav-button[_ngcontent-bwg-c63] {
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
            .nav-button[_ngcontent-bwg-c63] {
                width: 81px
            }
        }

        @media (min-width: 992px) {
            .nav-button[_ngcontent-bwg-c63] {
                width: 101px
            }
        }

        .nav-button[_ngcontent-bwg-c63]:hover,
        .nav-button[_ngcontent-bwg-c63]:focus {
            outline: 0;
            background-color: #f6f7f9
        }

        .nav-button__icon[_ngcontent-bwg-c63] {
            color: #6e7191;
            width: 20px;
            height: 20px
        }

        .nav-button__icon_hamburger[_ngcontent-bwg-c63] {
            width: 24px;
            height: 24px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_hamburger[_ngcontent-bwg-c63] {
                height: 22px;
                width: 20px
            }
        }

        .nav-button__icon_shopping-cart[_ngcontent-bwg-c63] {
            width: 22px;
            height: 22px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_shopping-cart[_ngcontent-bwg-c63] {
                width: 20px;
                height: 20px
            }
        }

        .nav-button__label[_ngcontent-bwg-c63] {
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
            .nav-button__label[_ngcontent-bwg-c63] {
                min-width: 22px;
                height: 22px;
                line-height: 22px;
                padding: 0 4px;
                font-size: 14px
            }
        }

        .nav-button__loading[_ngcontent-bwg-c63] {
            display: inline-block;
            width: 14px
        }

        .mobile-menu[_ngcontent-bwg-c63] {
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

        .mobile-menu_shown[_ngcontent-bwg-c63] {
            background-color: rgba(0, 0, 0, .78);
            pointer-events: all
        }

        .mobile-menu__panel[_ngcontent-bwg-c63] {
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

        .mobile-menu_shown[_ngcontent-bwg-c63] .mobile-menu__panel[_ngcontent-bwg-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close[_ngcontent-bwg-c63] {
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

        .mobile-menu__close[_ngcontent-bwg-c63]:hover,
        .mobile-menu__close[_ngcontent-bwg-c63]:focus {
            color: #ea1c0d;
            outline: none
        }

        .mobile-menu_shown[_ngcontent-bwg-c63] .mobile-menu__close[_ngcontent-bwg-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close-icon[_ngcontent-bwg-c63] {
            width: 60px;
            height: 60px
        }

        .mobile-menu__nav[_ngcontent-bwg-c63] {
            margin-bottom: 25px;
            padding: 0 13px 37px;
            border-bottom: 1px solid #0a2539
        }

        .mobile-menu__nav-list[_ngcontent-bwg-c63] {
            margin: 0;
            padding: 0
        }

        .mobile-menu__item[_ngcontent-bwg-c63] {
            list-style-type: none
        }

        .mobile-menu__divider[_ngcontent-bwg-c63] {
            height: 1px;
            display: block;
            margin: 13px;
            width: calc(100% - 26px);
            background-color: #5a7b93
        }

        .mobile-menu__title[_ngcontent-bwg-c63] {
            color: #449bd8;
            font-size: 14px;
            display: block;
            padding: 16px 13px 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase
        }

        .mobile-menu__link[_ngcontent-bwg-c63] {
            display: inline-block;
            font-size: 16px;
            line-height: 1;
            padding: 13px;
            color: #f6f7f9;
            cursor: pointer;
            transition: color .3s;
            text-decoration: none
        }

        .mobile-menu__link[_ngcontent-bwg-c63]:hover {
            color: #d7dce5
        }

        .mobile-menu__bottom-wrapper[_ngcontent-bwg-c63] {
            padding: 0 25.5px
        }

        .mobile-menu__text[_ngcontent-bwg-c63] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
            line-height: 29px;
            color: #fff
        }

        .mobile-menu__socials[_ngcontent-bwg-c63] {
            display: -webkit-flex;
            display: flex;
            margin: 0 -12px
        }

        .mobile-menu__social-link[_ngcontent-bwg-c63] {
            display: inline-block;
            padding: 0 12px;
            text-decoration: none
        }

        .mobile-menu__social-icon[_ngcontent-bwg-c63] {
            width: 40px;
            height: 40px
        }

        .native-nav[_ngcontent-bwg-c63] {
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

        .native-nav__button[_ngcontent-bwg-c63] {
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

        .native-nav__button[_ngcontent-bwg-c63]:hover {
            color: rgba(0, 0, 0, .7);
            text-decoration: none
        }

        .native-nav__button_inactive[_ngcontent-bwg-c63] {
            color: rgba(0, 0, 0, .3) !important
        }

        .native-nav__icon[_ngcontent-bwg-c63] {
            font-size: 15px;
            line-height: 18px
        }

        .native-nav__label[_ngcontent-bwg-c63] {
            font-size: 12px;
            line-height: 18px;
            padding-top: 1px
        }

        .header-container[_ngcontent-bwg-c63] {
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

        .header-placeholder[_ngcontent-bwg-c63] {
            height: 100px;
            width: 100%
        }

        @media (max-width: 991.9px) {
            .header-placeholder[_ngcontent-bwg-c63] {
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

        .contact-us[_ngcontent-bwg-c81] {
            background: #f6f7f9;
            margin-top: 60px;
            padding: 100px 0;
            border-bottom: 1px solid #d8dadd
        }

        @media (max-width: 575.9px) {
            .contact-us[_ngcontent-bwg-c81] {
                padding: 70px 0;
                margin-top: 40px
            }
        }

        .contact-us__header[_ngcontent-bwg-c81] {
            position: relative;
            margin-bottom: 25px
        }

        @media (max-width: 767.9px) {
            .contact-us__header[_ngcontent-bwg-c81] {
                margin-bottom: 30px
            }
        }

        .contact-us__title[_ngcontent-bwg-c81] {
            font-size: 28px;
            font-weight: 400;
            line-height: 33px;
            margin: 0 0 8px;
            color: gray
        }

        @media (max-width: 767.9px) {
            .contact-us__title[_ngcontent-bwg-c81] {
                font-size: 22px;
                font-weight: 400
            }
        }

        .contact-us__sub-title[_ngcontent-bwg-c81] {
            font: italic 24px/1 Barlow Condensed
        }

        @media (max-width: 767.9px) {
            .contact-us__sub-title[_ngcontent-bwg-c81] {
                font-size: 18px
            }
        }

        .contact-us__aside[_ngcontent-bwg-c81] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding-left: 90px
        }

        @media (min-width: 992px) {
            .contact-us__aside[_ngcontent-bwg-c81] {
                margin-top: -6px
            }
        }

        @media (max-width: 1199.9px) {
            .contact-us__aside[_ngcontent-bwg-c81] {
                padding-left: 45px
            }
        }

        @media (max-width: 991.9px) {
            .contact-us__aside[_ngcontent-bwg-c81] {
                padding-left: 15px;
                margin-top: 50px
            }
        }

        .contact-info[_ngcontent-bwg-c81] {
            padding: 5px 0 25px
        }

        @media (max-width: 767.9px) {
            .contact-info[_ngcontent-bwg-c81] {
                padding: 15px 0
            }
        }

        .contact-info[_ngcontent-bwg-c81]:first-child {
            border-bottom: 1px solid #dfdfdf;
            padding: 0 0 30px
        }

        @media (max-width: 767.9px) {
            .contact-info[_ngcontent-bwg-c81]:first-child {
                padding-bottom: 15px
            }
        }

        .contact-info__title[_ngcontent-bwg-c81] {
            margin: 0 0 10px;
            font-size: 18px;
            font-weight: 500;
            color: #124264
        }

        .contact-info__value[_ngcontent-bwg-c81] {
            font-size: 16px;
            line-height: 1;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            text-decoration: none;
            color: gray;
            transition: color .2s
        }

        .contact-info__value[_ngcontent-bwg-c81]:hover {
            color: #000
        }

        .contact-info__description[_ngcontent-bwg-c81] {
            margin: 12px 0 0;
            font-size: 14px;
            color: #8c8c8c
        }

        .contact-info__img[_ngcontent-bwg-c81] {
            width: 20px;
            height: 20px;
            margin-right: 8px
        }

        .contact-subscribe[_ngcontent-bwg-c81] {
            padding-top: 10px;
            padding-bottom: 0;
            margin-top: auto
        }

        .contact-subscribe[_ngcontent-bwg-c81] .form-submit[_ngcontent-bwg-c81] {
            min-width: auto;
            white-space: nowrap
        }

        .contact-subscribe__social[_ngcontent-bwg-c81] {
            margin-top: 25px
        }

        .social-links[_ngcontent-bwg-c81] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .social-links_inline[_ngcontent-bwg-c81] .social-links__item[_ngcontent-bwg-c81] {
            display: inline-block;
            vertical-align: top;
            font-size: 0
        }

        .social-links_inline[_ngcontent-bwg-c81] .social-links__item[_ngcontent-bwg-c81]:not(:last-child) {
            margin-right: 16px
        }

        .social-links__img[_ngcontent-bwg-c81] {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px
        }

        .social-links__link[_ngcontent-bwg-c81] {
            display: inline-block
        }

        .social-links__icon[_ngcontent-bwg-c81] {
            width: 38px;
            height: 38px
        }

        .email-subscription[_ngcontent-bwg-c81] {
            display: block;
            max-width: 416px
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

        .footer[_ngcontent-bwg-c64] {
            text-align: center;
            padding: 40px 0;
            font-family: Exo, sans-serif;
            background-color: #f5f6f7
        }

        @media (min-width: 992px) {
            .footer[_ngcontent-bwg-c64] {
                padding: 80px 40px
            }
        }

        .footer[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] {
            padding: 0
        }

        .footer[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] {
            list-style: none
        }

        @media (min-width: 992px) {
            .footer__wrapper[_ngcontent-bwg-c64] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        .footer__logo[_ngcontent-bwg-c64] {
            display: inline-block
        }

        .footer__logo-image[_ngcontent-bwg-c64] {
            height: 45px;
            display: inline-block
        }

        @media (min-width: 992px) {
            .footer__logo-image[_ngcontent-bwg-c64] {
                height: 55px
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-bwg-c64] {
                display: -webkit-flex;
                display: flex
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] {
                text-align: left;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin: 0 0 0 104px;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content
            }
        }

        .footer__links[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] {
            margin-bottom: 12px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] {
                margin-right: 137px
            }
        }

        .footer__links[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] a[_ngcontent-bwg-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__links[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] a[_ngcontent-bwg-c64]:hover {
            text-decoration: underline
        }

        .footer__social-email[_ngcontent-bwg-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__social-email[_ngcontent-bwg-c64]:hover {
            text-decoration: underline
        }

        .footer__social[_ngcontent-bwg-c64] {
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-bwg-c64] {
                margin-top: 0;
                text-align: right
            }
        }

        .footer__social[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] {
                -webkit-justify-content: end;
                justify-content: end;
                margin-top: 96px;
                margin-bottom: 0
            }
        }

        .footer__social[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] {
            margin: 0 6px
        }

        .footer__social[_ngcontent-bwg-c64] ul[_ngcontent-bwg-c64] li[_ngcontent-bwg-c64] svg-icon[_ngcontent-bwg-c64] {
            width: 32px;
            height: 32px
        }

        .footer__social[_ngcontent-bwg-c64] p[_ngcontent-bwg-c64] {
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f
        }

        .footer__social[_ngcontent-bwg-c64] p.footer__annotation--light[_ngcontent-bwg-c64],
        .footer__social[_ngcontent-bwg-c64] p[_ngcontent-bwg-c64] a.footer__annotation--light[_ngcontent-bwg-c64] {
            color: rgba(0, 19, 31, .33)
        }

        .footer__social-link[_ngcontent-bwg-c64]:hover {
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

    </style>
    <style>
        [_nghost-bwg-c61] {
            display: inline-block;
            width: 100%;
            height: 100%
        }

        [_nghost-bwg-c61] .svg-icon,
        [_nghost-bwg-c61] svg {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            fill: currentColor
        }

        [_nghost-bwg-c61] .svg-icon {
            width: auto;
            height: 100%;
            display: block
        }

        [_nghost-bwg-c61] .svg-icon_star-path {
            fill: #000064
        }

        [_nghost-bwg-c61] .svg-icon__fill_trustpilot {
            fill: #13b57a
        }

        [_nghost-bwg-c61] .svg-icon__fill_default {
            fill: #fff
        }

        [_nghost-bwg-c61] .svg-icon__cart-wheel {
            stroke: none;
            fill: #010101
        }

        [_nghost-bwg-c61] .svg-icon__paypal {
            fill: #263b80
        }

        [_nghost-bwg-c61] .svg-icon__paypal_light {
            fill: #139ad6
        }

        [_nghost-bwg-c61] .svg-icon__paypal_shadow {
            fill: #139ad6
        }

        [_nghost-bwg-c61] .svg-icon__paypal_cross {
            fill: #232c65
        }

        [_nghost-bwg-c61] .svg-icon__facebook-full_letter {
            opacity: 0
        }

        [_nghost-bwg-c61] .svg-icon__check {
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        [_nghost-bwg-c61] .svg-icon__receive-email-line {
            stroke: currentColor
        }

        [_nghost-bwg-c61] .svg-icon__circle {
            fill: none;
            stroke: currentColor
        }

        [_nghost-bwg-c61] .svg-icon svg {
            width: 100%;
            height: 100%;
            display: inline-block
        }

        .spinning[_nghost-bwg-c61] {
            -webkit-animation: rotate 1s linear infinite;
            animation: rotate 1s linear infinite;
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .svg-icon__footer-facebook[_nghost-bwg-c61] .svg-icon__facebook-full_letter,
        .svg-icon__footer-facebook [_nghost-bwg-c61] .svg-icon__facebook-full_letter {
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

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-row[_ngcontent-bwg-c80]:not(:last-of-type),
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-row[_ngcontent-bwg-c80]:not(:last-of-type) {
            margin-bottom: 20px
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .row-label[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .row-label[_ngcontent-bwg-c80] {
            display: block;
            padding-bottom: 5px;
            font-weight: 500;
            color: #124264
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .row-label__asterisk[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .row-label__asterisk[_ngcontent-bwg-c80] {
            cursor: help;
            border-bottom: none;
            text-decoration: none
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-input[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-input[_ngcontent-bwg-c80] {
            width: 100%;
            background-color: #fdfdfd;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 1.5;
            padding: 10px 12px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-input[_ngcontent-bwg-c80]:focus,
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-input[_ngcontent-bwg-c80]:focus {
            color: #495057;
            background-color: #fff;
            border-color: #b8dffb;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-input_text-area[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-input_text-area[_ngcontent-bwg-c80] {
            resize: vertical;
            min-height: 70px
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-annotation[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-annotation[_ngcontent-bwg-c80] {
            padding-top: 0;
            text-align: left;
            font-size: 12px
        }

        @media (max-width: 1199.9px) {

            .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-annotation[_ngcontent-bwg-c80],
            .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-annotation[_ngcontent-bwg-c80] {
                padding-top: 3px;
                padding-bottom: 20px
            }
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-submit[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-submit[_ngcontent-bwg-c80] {
            width: 230px
        }

        @media (max-width: 1199.9px) {

            .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-submit[_ngcontent-bwg-c80],
            .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .form-submit[_ngcontent-bwg-c80] {
                width: 100%
            }
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .field-error[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .field-error[_ngcontent-bwg-c80] {
            font-size: 14px;
            color: #dc3545
        }

        .website-p7d[_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .main-errors-group[_ngcontent-bwg-c80],
        .website-p7d [_nghost-bwg-c80] .form[_ngcontent-bwg-c80] .main-errors-group[_ngcontent-bwg-c80] {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 26px 20px;
            margin: 0 -20px 24px
        }

        .form-footer[_ngcontent-bwg-c80] {
            padding-top: 12px;
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center
        }

        @media (max-width: 1199.9px) {
            .form-footer[_ngcontent-bwg-c80] {
                padding-top: 0;
                padding-right: 7px;
                -webkit-flex-direction: column;
                flex-direction: column;
                -webkit-align-items: flex-start;
                align-items: flex-start
            }
        }

        .form-annotation__asterisk[_ngcontent-bwg-c80] {
            color: #1daaa3
        }

    </style>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcU4hIkAAAAAObnsRqGMJONaj8fJ7geh_4WEfHn&amp;onload=ng2recaptchaloaded" async="" defer=""></script>
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

        .email-prompt[_ngcontent-bwg-c79] {
            line-height: 42px;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            position: relative
        }

        .email-input[_ngcontent-bwg-c79] {
            font-family: Exo, sans-serif;
            font-size: 12px;
            font-weight: 700;
            line-height: 1em;
            padding: 14px;
            border: 1px solid #c4c4c4;
            letter-spacing: 1px;
            margin-top: 6px;
            display: inline-block;
            background-color: transparent;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            min-width: 100px;
            background-color: #fff;
            text-align: left
        }

        .email-input[_ngcontent-bwg-c79]:focus {
            color: #495057;
            background-color: #fff;
            border-color: #b8dffb;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .email-input_disabled[_ngcontent-bwg-c79] {
            opacity: .6;
            pointer-events: none
        }

        .email-submit[_ngcontent-bwg-c79] {
            font-family: Exo, sans-serif;
            font-size: 16px;
            line-height: 1;
            font-weight: 500;
            color: #fff;
            padding: 12px 0;
            width: 140px;
            cursor: pointer;
            margin: 6px 6px 0;
            display: inline-block;
            -webkit-flex: none;
            flex: none
        }

        @media (max-width: 575.9px) {
            .email-submit[_ngcontent-bwg-c79] {
                width: auto;
                padding-left: 15px;
                padding-right: 15px
            }
        }

        .email-submit[_ngcontent-bwg-c79]:disabled {
            opacity: .6;
            pointer-events: none
        }

        .form-error[_ngcontent-bwg-c79] {
            font-size: 14px;
            color: #dc3545
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

        [_nghost-bwg-c62] {
            display: block
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] {
            background-color: #00131f
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] .prompt-img__wrapper[_ngcontent-bwg-c62] {
            overflow: hidden;
            border-radius: 8px;
            max-width: 40px;
            height: 40px;
            margin-right: 8px
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] .prompt-img__wrapper[_ngcontent-bwg-c62] img[_ngcontent-bwg-c62] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] .prompt-close-icon[_ngcontent-bwg-c62] {
            max-width: 14px;
            height: 14px;
            margin-right: 12px;
            cursor: pointer;
            -webkit-filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%);
            filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%)
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] .prompt__content-title[_ngcontent-bwg-c62] {
            color: #f5f6f7;
            font-size: 16px
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] .prompt__content-category[_ngcontent-bwg-c62] {
            color: #b9b9b9;
            font-size: 10px
        }

        [_nghost-bwg-c62] .prompt-container[_ngcontent-bwg-c62] .prompt-btn[_ngcontent-bwg-c62] {
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
            [_nghost-bwg-c62] {
                display: none
            }
        }

    </style>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcU4hIkAAAAAObnsRqGMJONaj8fJ7geh_4WEfHn&amp;onload=ng2recaptchaloaded" async="" defer=""></script>
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
<div _ngcontent-bwg-c13="" class="website-p7d">
    <div _ngcontent-bwg-c13="">
        <div _ngcontent-bwg-c13="">
            <router-outlet _ngcontent-bwg-c13=""></router-outlet>
            <app-faq _nghost-bwg-c82="" class="ng-tns-c82-0 ng-star-inserted">
                <app-header _ngcontent-bwg-c82="" class="ng-tns-c82-0" _nghost-bwg-c63="">
                    <div _ngcontent-bwg-c63="" class="header-placeholder"></div>
                    <!---->
                    <div _ngcontent-bwg-c63="" class="header-container">
                        <app-install-prompt _ngcontent-bwg-c63="" _nghost-bwg-c62="" class="ng-tns-c62-1 ng-star-inserted">
                            <!---->
                        </app-install-prompt>
                        <!---->
                        <header _ngcontent-bwg-c63="" class="header"><a _ngcontent-bwg-c63="" routerlink="/" title="Go to homepage" class="logo header__logo" href="/"><img _ngcontent-bwg-c63="" src="/assets/svg/logo.svg" alt="7days Performance" class="logo__img"></a>
                            <nav _ngcontent-bwg-c63="" class="header__nav">
                                <ul _ngcontent-bwg-c63="" class="main-nav">
                                    <li _ngcontent-bwg-c63="" class="main-nav__item"><a _ngcontent-bwg-c63="" routerlink="/current-competitions" title="" class="main-nav__link" href="/current-competitions">Cars and Bikes</a></li>
                                    <li _ngcontent-bwg-c63="" class="main-nav__item"><a _ngcontent-bwg-c63="" routerlink="/current-tech-competitions" title="" class="main-nav__link" href="/current-tech-competitions">Tech and Luxury</a></li>
                                    <li _ngcontent-bwg-c63="" class="main-nav__item"><a _ngcontent-bwg-c63="" routerlink="/cash-competitions" title="" class="main-nav__link" href="/cash-competitions">Tax Free Cash</a></li>
                                    <li _ngcontent-bwg-c63="" class="main-nav__item"><a _ngcontent-bwg-c63="" routerlink="/competition-winners/featured" title="" class="main-nav__link" href="/competition-winners/featured">Winners</a></li>
                                    <li _ngcontent-bwg-c63="" class="main-nav__item"><a _ngcontent-bwg-c63="" routerlink="/draw-results" title="" class="main-nav__link" href="/draw-results">Draw Results</a></li>
                                    <li _ngcontent-bwg-c63="" class="main-nav__item"><a _ngcontent-bwg-c63="" routerlink="/faq" title="" class="main-nav__link" href="/faq">FAQ</a></li>
                                </ul><button _ngcontent-bwg-c63="" class="header__button header__button_sm nav-button">
                                    <svg-icon _ngcontent-bwg-c63="" name="hamburger-new" class="nav-button__icon nav-button__icon_hamburger" _nghost-bwg-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M19.167 9.166H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667zM19.167 3.334H.833a.833.833 0 000 1.667h18.334a.833.833 0 000-1.667zM19.167 15H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </button><a _ngcontent-bwg-c63="" routerlink="/cart" class="header__button nav-button" href="/cart"><span _ngcontent-bwg-c63="" class="cart__count nav-button__label ng-star-inserted">0</span>
                                    <!---->
                                    <!---->
                                    <svg-icon _ngcontent-bwg-c63="" name="cart-new" class="nav-button__icon nav-button__icon_shopping-cart" _nghost-bwg-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27758)" fill="#00131F">
                                                <path d="M18.927 3.397a2.494 2.494 0 00-1.919-.897H3.535L3.5 2.208A2.5 2.5 0 001.018 0H.833a.833.833 0 000 1.667h.185a.833.833 0 01.828.735l1.147 9.75a4.167 4.167 0 004.138 3.681h8.702a.834.834 0 000-1.666H7.131A2.5 2.5 0 014.78 12.5h9.933a4.166 4.166 0 004.101-3.428l.654-3.628a2.495 2.495 0 00-.542-2.046zm-1.094 1.751l-.655 3.629a2.5 2.5 0 01-2.464 2.056H4.516l-.784-6.666h13.276a.833.833 0 01.825.981zM5.833 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333zM14.167 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27758">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-bwg-c63="" routerlink="/my-account" class="header__button nav-button" href="/my-account">
                                    <svg-icon _ngcontent-bwg-c63="" name="profile-new" class="nav-button__icon nav-button__icon_account" _nghost-bwg-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
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
                        <div _ngcontent-bwg-c63="" class="mobile-menu"><button _ngcontent-bwg-c63="" class="mobile-menu__close">
                                <svg-icon _ngcontent-bwg-c63="" name="close-7-d" class="mobile-menu__close-icon" _nghost-bwg-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M17.692 15.713L8.288 6.308a1.05 1.05 0 00-1.485 0l-.495.495a1.05 1.05 0 000 1.484l9.404 9.405c.41.41 1.075.41 1.485 0l.495-.494c.41-.41.41-1.075 0-1.485z"></path>
                                        <path d="M15.712 6.308l-9.404 9.405a1.05 1.05 0 000 1.485l.494.494c.41.41 1.076.41 1.485 0l4.703-4.702 4.702-4.702a1.05 1.05 0 000-1.485l-.495-.495a1.05 1.05 0 00-1.485 0z"></path>
                                    </svg></svg-icon>
                            </button>
                            <aside _ngcontent-bwg-c63="" class="mobile-menu__panel">
                                <nav _ngcontent-bwg-c63="" class="mobile-menu__nav">
                                    <ul _ngcontent-bwg-c63="" class="mobile-menu__nav-list">
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><span _ngcontent-bwg-c63="" class="mobile-menu__title"> Competitions</span></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/current-competitions" title="" class="mobile-menu__link" href="/current-competitions">Cars &amp; Bikes</a></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/current-tech-competitions" title="" class="mobile-menu__link" href="/current-tech-competitions">Tech &amp; Luxury</a></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/cash-competitions" title="" class="mobile-menu__link" href="/cash-competitions">Cash</a></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/instant-wins" title="" class="mobile-menu__link" href="/instant-wins"> Instant Wins</a></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><span _ngcontent-bwg-c63="" class="mobile-menu__divider"></span></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/competition-winners/featured" title="" class="mobile-menu__link" href="/competition-winners/featured">Winners</a></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/draw-results" title="" class="mobile-menu__link" href="/draw-results">Draw Results</a></li>
                                        <li _ngcontent-bwg-c63="" class="mobile-menu__item"><a _ngcontent-bwg-c63="" routerlink="/faq" title="" class="mobile-menu__link" href="/faq">FAQ</a></li>
                                    </ul>
                                </nav>
                                <div _ngcontent-bwg-c63="" class="mobile-menu__bottom-wrapper">
                                    <p _ngcontent-bwg-c63="" class="mobile-menu__text">7days Social</p>
                                    <div _ngcontent-bwg-c63="" class="mobile-menu__socials"><a _ngcontent-bwg-c63="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-bwg-c63="" name="facebook-7-d" class="mobile-menu__social-icon" _nghost-bwg-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                    <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a><a _ngcontent-bwg-c63="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-bwg-c63="" name="instagram-full" class="mobile-menu__social-icon" _nghost-bwg-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
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
                <h1 _ngcontent-bwg-c82="" class="main-title ng-tns-c82-0">Faq</h1>
                <section _ngcontent-bwg-c82="" class="section section_faq ng-tns-c82-0">
                    <ul _ngcontent-bwg-c82="" class="container container_faq faq__box ng-tns-c82-0">
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">When is the draw for a Competition?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">The competition draw date and time is stated on the entry page for each competition. Each draw is guaranteed to take
                                        place at the specified time regardless of how many tickets are sold.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">Why is my order ‘Cancelled’?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">Your order will show as cancelled if you did not complete the payment, or if your payment failed. Orders are automatically
                                        cancelled after 10 minutes if we do not receive a successful payment.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">How is the winner chosen?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">Each and every one of our draws can be watched live via our Facebook page for everyone to see. We use Google’s random number
                                        generator to determine the winner and we will show you how the random number generator works prior to drawing the winning number.
                                        We also prove we are live by reading out comments and answering customer queries as we go. If the competition does not sell out and
                                        the first number generated is unsold, we will generate a new number until we have a winner.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">What is my draw number?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">There are 3 ways in which you can find your ticket number for a draw.<br>
                                        1. When you enter a competition your ticket numbers can be found on the confirmation page<br>
                                        2. On the confirmation email sent to the email address assigned to your account<br>
                                        3. Log into your account, go to ‘My account’ – My Orders – click on each order and you will see ticket numbers there.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">What if a competition does not sell out?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">If a competition that you have entered does not sell out, the draw will still take place and you will have a better chance
                                        of winning than if it had sold out! Each draw is guaranteed to take place on the date and time shown on the entry page. All sold
                                        tickets are still valid and we will generate a random number until we have a winner.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">Is 7days Performance a scam?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">We have been a fully registered limited company in the UK since February 2018 and since then have grown a huge list of
                                        winners. We run prize draws which are fully compliant with the Gambling act of 2005. We have 5 star reviews on Facebook, Google,
                                        and Trustpilot which are built up from both winners and customers that play regular competitions. We do all of the draws live on
                                        Facebook for everyone to watch.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">Why am I receiving communications from 7days?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">We send out SMS, emails and app notification to all customers who register with us as part of our core service.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">I am receiving spam on email or via SMS.</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">We never send spam. We only send communications to those who are registered to our service. if you are receiving spam
                                        messages please contact us, and we can verify what you have received and whether it is from us.</p>
                                </section>
                            </div>
                        </li>
                        <li _ngcontent-bwg-c82="" class="faq ng-tns-c82-0 faq_inactive ng-star-inserted">
                            <div _ngcontent-bwg-c82="" tabindex="0" class="faq__header ng-tns-c82-0">
                                <h3 _ngcontent-bwg-c82="" class="faq__title ng-tns-c82-0">How do I opt out from some or all of the communications?</h3>
                            </div>
                            <div _ngcontent-bwg-c82="" class="faq__body ng-tns-c82-0 ng-trigger ng-trigger-toggleItem" style="height: 0px;">
                                <section _ngcontent-bwg-c82="" class="faq__content ng-tns-c82-0">
                                    <p _ngcontent-bwg-c82="" class="faq__paragraph ng-tns-c82-0">• To stop SMS notifications: Use the Opt out link on the SMS – this will unsubscribe you from all of our SMSs.<br>
                                        • To stop Email notifications: Use the Unsubscribe on the bottom of the emails you receive.<br>
                                        • To stop receiving both email and SMS you can also email us at: <a href="mailto:hello@7daysperformance.co.uk">hello@7daysperformance.co.uk</a> <br>
                                        • To stop receiving app notifications: You can do this on your device settings or by removing the app. This is not something we can control from our end.<br></p>
                                </section>
                            </div>
                        </li>
                        <!---->
                    </ul>
                </section>
                <app-contact-us-block _ngcontent-bwg-c82="" class="ng-tns-c82-0" _nghost-bwg-c81="">
                    <section _ngcontent-bwg-c81="" class="contact-us">
                        <div _ngcontent-bwg-c81="" class="container">
                            <div _ngcontent-bwg-c81="" class="row">
                                <div _ngcontent-bwg-c81="" class="col-12 col-md-12 col-lg-7 contact-us__form">
                                    <header _ngcontent-bwg-c81="" class="contact-us__header">
                                        <h1 _ngcontent-bwg-c81="" class="contact-us__title">Contact Us</h1>
                                    </header>
                                    <section _ngcontent-bwg-c81="" class="contact-us__box">
                                        <app-contact-form _ngcontent-bwg-c81="" externalmessage="true" _nghost-bwg-c80="">
                                            <form _ngcontent-bwg-c80="" novalidate="" class="form regular-form short-rows ng-untouched ng-pristine ng-invalid">
                                                <!---->
                                                <!---->
                                                <div _ngcontent-bwg-c80="" class="form-row"><label _ngcontent-bwg-c80="" class="row-label">Your Name: <abbr _ngcontent-bwg-c80="" title="Required" class="row-label__asterisk">*</abbr></label>
                                                    <div _ngcontent-bwg-c80="" class="row-group"><input _ngcontent-bwg-c80="" type="text" title="Name" maxlength="100" name="name" required="" class="form-input ng-untouched ng-pristine ng-valid">
                                                        <!---->
                                                        <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                                    </div>
                                                </div>
                                                <div _ngcontent-bwg-c80="" class="form-row"><label _ngcontent-bwg-c80="" class="row-label">Your Email: <abbr _ngcontent-bwg-c80="" title="Required" class="row-label__asterisk">*</abbr></label>
                                                    <div _ngcontent-bwg-c80="" class="row-group"><input _ngcontent-bwg-c80="" type="text" title="Email" inputmode="email" maxlength="250" name="email" required="" class="form-input ng-untouched ng-pristine ng-valid">
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div _ngcontent-bwg-c80="" class="form-row"><label _ngcontent-bwg-c80="" class="row-label">Your Phone:</label>
                                                    <div _ngcontent-bwg-c80="" class="row-group"><input _ngcontent-bwg-c80="" type="text" title="Phone" inputmode="tel" name="phone" maxlength="25" class="form-input ng-untouched ng-pristine ng-valid"></div>
                                                </div>
                                                <div _ngcontent-bwg-c80="" class="form-row"><label _ngcontent-bwg-c80="" class="row-label">Message: <abbr _ngcontent-bwg-c80="" title="Required" class="row-label__asterisk">*</abbr></label>
                                                    <div _ngcontent-bwg-c80="" class="row-group"><textarea _ngcontent-bwg-c80="" title="Message" name="text" required="" class="form-input form-input_text-area ng-untouched ng-pristine ng-invalid"></textarea>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div _ngcontent-bwg-c80="" class="form-row ng-star-inserted">
                                                    <div _ngcontent-bwg-c80="" class="row-group">
                                                        <re-captcha _ngcontent-bwg-c80="" id="ngrecaptcha-0">
                                                            <div style="width: 304px; height: 78px;">
                                                                <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc4yfUdAAAAANgu1ftlPka2rypLuetl-KCiGUXm&amp;co=aHR0cHM6Ly83ZGF5c3BlcmZvcm1hbmNlLmNvLnVrOjQ0Mw..&amp;hl=en&amp;v=vkGiR-M4noX1963Xi_DB0JeI&amp;size=normal&amp;cb=qnv96s7vel16" width="304" height="78" role="presentation" name="a-eeoamfbwlj6c" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                            </div><iframe style="display: none;"></iframe>
                                                        </re-captcha>
                                                    </div>
                                                </div>
                                                <!---->
                                                <div _ngcontent-bwg-c80="" class="form-row">
                                                    <div _ngcontent-bwg-c80="" class="row-group">
                                                        <!---->
                                                        <section _ngcontent-bwg-c80="" class="form-footer">
                                                            <div _ngcontent-bwg-c80="" class="form-annotation"><span _ngcontent-bwg-c80="" class="form-annotation__asterisk">*</span> - required fields </div><button _ngcontent-bwg-c80="" class="form-submit button button_green ng-star-inserted">Send Message</button>
                                                            <!---->
                                                        </section>
                                                    </div>
                                                </div>
                                            </form>
                                        </app-contact-form>
                                    </section>
                                </div>
                                <aside _ngcontent-bwg-c81="" class="col-12 col-md-12 col-lg-5 contact-us__aside">
                                    <header _ngcontent-bwg-c81="" class="contact-us__header"><span _ngcontent-bwg-c81="" class="contact-us__title">Send us a message</span></header>
                                    <section _ngcontent-bwg-c81="" class="contact-info">
                                        <h3 _ngcontent-bwg-c81="" class="contact-info__title">Email us</h3><a _ngcontent-bwg-c81="" href="mailto:hello@7daysperformance.co.uk" title="Email us and get support" class="contact-info__value">
                                            <svg-icon _ngcontent-bwg-c81="" name="contact-email" class="contact-info__img contact-info__img_for_email" _nghost-bwg-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M12 13L2 6.76V6c0-1.11.89-2 2-2h16a2 2 0 012 2v.75L12 13m10 5a2 2 0 01-2 2H4a2 2 0 01-2-2V9.11l2 1.25V18h16v-7.64l2-1.25V18z"></path>
                                                </svg></svg-icon><span _ngcontent-bwg-c81="" class="contact-info__link">hello@7daysperformance.co.uk</span>
                                        </a>
                                        <p _ngcontent-bwg-c81="" class="contact-info__description">We aim to reply within 48 hours</p>
                                    </section>
                                    <section _ngcontent-bwg-c81="" class="contact-info contact-subscribe">
                                        <app-email-subscription _ngcontent-bwg-c81="" placeholder="Sign up for Email updates" submitname="Sign up" class="email-subscription" _nghost-bwg-c79="">
                                            <div _ngcontent-bwg-c79="" class="email-prompt"><input _ngcontent-bwg-c79="" type="text" title="Email Address" name="email" inputmode="email" class="email-input ng-untouched ng-pristine ng-valid" placeholder="Sign up for Email updates"><button _ngcontent-bwg-c79="" class="email-submit button button_blue">Sign up</button>
                                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                            </div>
                                            <div _ngcontent-bwg-c79="" class="form-errors">
                                                <!---->
                                            </div>
                                        </app-email-subscription>
                                        <div _ngcontent-bwg-c81="" class="contact-subscribe__social">
                                            <ul _ngcontent-bwg-c81="" class="social-links social-links_inline">
                                                <li _ngcontent-bwg-c81="" class="social-links__item"><a _ngcontent-bwg-c81="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="social-links__link">
                                                        <svg-icon _ngcontent-bwg-c81="" name="facebook-7-d" class="social-links__icon" _nghost-bwg-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                                <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                                <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                            </svg></svg-icon>
                                                    </a></li>
                                                <li _ngcontent-bwg-c81="" class="social-links__item"><a _ngcontent-bwg-c81="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="social-links__link">
                                                        <svg-icon _ngcontent-bwg-c81="" name="instagram-full" class="social-links__icon" _nghost-bwg-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                                <radialGradient id="a" cx="-246.567" cy="-244.705" r="65" gradientTransform="matrix(0 -1.982 -1.8439 0 -415.672 -347.69)" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#fd5"></stop>
                                                                    <stop offset=".1" stop-color="#fd5"></stop>
                                                                    <stop offset=".5" stop-color="#ff543e"></stop>
                                                                    <stop offset="1" stop-color="#c837ab"></stop>
                                                                </radialGradient>
                                                                <path d="M66 1c-27.1 0-35 0-36.6.2-5.6.5-9 1.3-12.8 3.2-2.9 1.4-5.2 3.1-7.5 5.5-4.1 4.2-6.6 9.5-7.5 15.8-.4 3-.6 3.6-.6 19.1V66c0 27.1 0 35 .2 36.6.5 5.4 1.3 8.8 3.1 12.6 3.4 7.1 10 12.5 17.8 14.5 2.7.7 5.6 1.1 9.4 1.3 1.6.1 18 .1 34.4.1s32.8 0 34.4-.1c4.4-.2 7-.6 9.8-1.3 7.8-2 14.2-7.3 17.8-14.5 1.8-3.6 2.7-7.2 3.1-12.3.1-1.1.1-19 .1-36.8 0-17.8 0-35.7-.1-36.8-.4-5.2-1.3-8.7-3.1-12.4-1.5-3-3.2-5.3-5.6-7.6-4.3-4.1-9.6-6.6-15.8-7.5-3-.4-3.6-.6-19.2-.6H66z" fill="url(#a)"></path>
                                                                <path d="M66 18c-13 0-14.7.1-19.8.3-5.1.2-8.6 1-11.7 2.2-3.2 1.2-5.8 2.9-8.5 5.5-2.7 2.7-4.3 5.3-5.5 8.5-1.2 3.1-2 6.5-2.2 11.7-.2 5.1-.3 6.8-.3 19.8s.1 14.7.3 19.8c.2 5.1 1 8.6 2.2 11.7 1.2 3.2 2.9 5.8 5.5 8.5 2.7 2.7 5.3 4.3 8.5 5.5 3.1 1.2 6.5 2 11.7 2.2 5.1.2 6.8.3 19.8.3s14.7-.1 19.8-.3c5.1-.2 8.6-1 11.7-2.2 3.2-1.2 5.8-2.9 8.5-5.5 2.7-2.7 4.3-5.3 5.5-8.5 1.2-3.1 2-6.5 2.2-11.7.2-5.1.3-6.8.3-19.8s-.1-14.7-.3-19.8c-.2-5.1-1.1-8.6-2.2-11.7-1.2-3.2-2.9-5.8-5.5-8.5-2.7-2.7-5.3-4.3-8.5-5.5-3.1-1.2-6.6-2-11.7-2.2-5.1-.2-6.8-.3-19.8-.3zm-4.3 8.6H66c12.8 0 14.3 0 19.4.3 4.7.2 7.2 1 8.9 1.7 2.2.9 3.8 1.9 5.5 3.6 1.7 1.7 2.7 3.3 3.6 5.5.7 1.7 1.4 4.2 1.7 8.9.2 5.1.3 6.6.3 19.4s-.1 14.3-.3 19.4c-.2 4.7-1 7.2-1.7 8.9-.9 2.2-1.9 3.8-3.6 5.5-1.7 1.7-3.3 2.7-5.5 3.6-1.7.7-4.2 1.4-8.9 1.7-5.1.2-6.6.3-19.4.3-12.8 0-14.3-.1-19.4-.3-4.7-.2-7.2-1-8.9-1.7-2.2-.9-3.8-1.9-5.5-3.6-1.7-1.7-2.7-3.3-3.6-5.5-.7-1.7-1.4-4.2-1.7-8.9-.2-5.1-.3-6.6-.3-19.4s0-14.3.3-19.4c.2-4.7 1-7.2 1.7-8.9.9-2.2 1.9-3.8 3.6-5.5 1.7-1.7 3.3-2.7 5.5-3.6 1.7-.7 4.2-1.4 8.9-1.7 4.4-.2 6.2-.3 15.1-.3zm29.9 8c-3.2 0-5.8 2.6-5.8 5.8 0 3.2 2.6 5.8 5.8 5.8s5.8-2.6 5.8-5.8-2.6-5.8-5.8-5.8zM66 41.3c-13.6 0-24.7 11-24.7 24.7s11 24.6 24.7 24.6c13.6 0 24.6-11 24.6-24.6S79.6 41.3 66 41.3zm0 8.7c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16z" fill="#fff"></path>
                                                            </svg></svg-icon>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </section>
                </app-contact-us-block>
                <app-footer _ngcontent-bwg-c82="" class="ng-tns-c82-0" _nghost-bwg-c64="">
                    <div _ngcontent-bwg-c64="" class="footer">
                        <div _ngcontent-bwg-c64="" class="footer__wrapper">
                            <div _ngcontent-bwg-c64="" class="footer__links"><a _ngcontent-bwg-c64="" routerlink="/" title="" class="footer__logo" href="/"><img _ngcontent-bwg-c64="" src="/assets/svg/logo.svg" alt="7days Performance" class="footer__logo-image"></a>
                                <ul _ngcontent-bwg-c64="">
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/cookie-and-privacy-policy" href="/cookie-and-privacy-policy">Cookie &amp; Privacy Policy</a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/website-terms" href="/website-terms">Website Terms</a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/responsible-gambling" href="/responsible-gambling">Responsible Gambling</a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/reviews" href="/reviews">Reviews</a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/faq" href="/faq">FAQ</a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/security" href="/security">Security</a></li>
                                    <li _ngcontent-bwg-c64="">&nbsp;</li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" routerlink="/about-us" href="/about-us">Our Team</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-bwg-c64="" class="footer__social">
                                <div _ngcontent-bwg-c64="">
                                    <p _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" href="mailto:hello@myprizer.com" class="footer__social-email">hello@myprizer.com</a></p>
                                    <p _ngcontent-bwg-c64="" class="footer__annotation--light"> {{ $site_settings->site_name }} - Technology and Marketing powered by <a _ngcontent-bwg-c64="" href="https://sevencanyon.com/" target="_blank" class="footer__annotation--light"><u _ngcontent-bwg-c64="">SevenCanyon</u></a></p>
                                    <p _ngcontent-bwg-c64="" class="footer__annotation--light">© All rights reserved</p>
                                </div>
                                <ul _ngcontent-bwg-c64="">
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-bwg-c64="" name="facebook-new" _nghost-bwg-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm1.668 16.703v8.705h-3.602v-8.704h-1.8v-3h1.8v-1.801c0-2.447 1.016-3.903 3.903-3.903h2.403v3H18.87c-1.124 0-1.198.42-1.198 1.202l-.004 1.502h2.721l-.318 3h-2.403z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-bwg-c64="" name="instagram-new" _nghost-bwg-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.002.503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.164-16-16-16zm-3.518 7.518c.91-.041 1.201-.051 3.519-.051H16c2.319 0 2.608.01 3.518.051.909.042 1.53.186 2.073.397a4.17 4.17 0 011.511.984c.475.474.767.95.985 1.511.21.543.354 1.163.397 2.072.04.91.051 1.2.051 3.518 0 2.318-.01 2.608-.051 3.518-.043.908-.187 1.528-.397 2.071a4.189 4.189 0 01-.985 1.512c-.474.474-.949.767-1.51.985-.543.21-1.164.354-2.072.396-.91.041-1.2.052-3.518.052-2.317 0-2.608-.01-3.518-.052-.909-.042-1.529-.185-2.072-.396a4.18 4.18 0 01-1.511-.985 4.181 4.181 0 01-.984-1.512c-.211-.543-.355-1.163-.397-2.071-.04-.91-.051-1.2-.051-3.518 0-2.317.01-2.608.051-3.519.041-.908.185-1.528.397-2.07A4.19 4.19 0 018.9 9.401c.475-.475.95-.766 1.512-.984.543-.211 1.163-.355 2.071-.397z" fill="#C4C9CE"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.236 9.508h.766c2.278 0 2.548.008 3.448.05.832.037 1.283.176 1.584.293.398.155.682.34.98.638.3.299.484.583.64.981.116.3.255.752.293 1.585.041.9.05 1.17.05 3.447s-.009 2.547-.05 3.447c-.038.832-.177 1.283-.294 1.584-.154.398-.34.682-.638.98a2.637 2.637 0 01-.98.638c-.301.118-.753.256-1.585.294-.9.041-1.17.05-3.448.05-2.279 0-2.549-.009-3.449-.05-.832-.038-1.283-.177-1.584-.294a2.644 2.644 0 01-.981-.638 2.644 2.644 0 01-.64-.98c-.116-.301-.255-.753-.293-1.585-.04-.9-.049-1.17-.049-3.448 0-2.28.008-2.548.049-3.448.038-.832.177-1.283.294-1.584.155-.398.34-.683.639-.981.298-.299.583-.484.98-.639.302-.117.753-.256 1.585-.294.788-.036 1.093-.046 2.683-.048v.002zm5.32 1.417a1.024 1.024 0 100 2.048 1.024 1.024 0 000-2.049zm-8.936 5.578a4.382 4.382 0 118.765 0 4.382 4.382 0 01-8.765 0z" fill="#C4C9CE"></path>
                                                    <path d="M16.003 13.66a2.845 2.845 0 110 5.688 2.845 2.845 0 010-5.689z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-bwg-c64=""><a _ngcontent-bwg-c64="" href="https://www.youtube.com/channel/UCxB-y6oGP1lSCHwoE2hKvmA" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-bwg-c64="" name="youtube-new" _nghost-bwg-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm6.668 10.5a2.166 2.166 0 011.509 1.55c.356 1.366.356 4.217.356 4.217s0 2.852-.356 4.218a2.167 2.167 0 01-1.51 1.55c-1.33.366-6.667.366-6.667.366s-5.337 0-6.668-.366a2.167 2.167 0 01-1.509-1.55c-.356-1.366-.356-4.218-.356-4.218s0-2.851.356-4.217a2.167 2.167 0 011.51-1.55c1.33-.366 6.667-.366 6.667-.366s5.337 0 6.668.366z" fill="#C4C9CE"></path>
                                                    <path d="M14.4 19.703V14.37l4.267 2.666-4.267 2.667z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </app-footer>
            </app-faq>
            <!---->
        </div>
    </div>
</div>
@endsection
