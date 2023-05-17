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

    <link rel="stylesheet" type="text/css" href="/assets/js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/js/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/js/owl-carousel/owl.theme.css"/>

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
        :root,
        :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
        }

        svg:not(:root).svg-inline--fa,
        svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }

        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }

        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }

        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }

        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }

        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, 0.25));
            transform: scale(var(--fa-counter-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {

            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s;
            }
        }

        @-webkit-keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @-webkit-keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto);
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }

    </style>
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

        .competitions-wrapper[_ngcontent-uuw-c76] {
            position: relative;
            overflow: hidden
        }

        .section[_ngcontent-uuw-c76] {
            font-family: Exo, sans-serif;
            padding: 48px 0 80px
        }

        @media (min-width: 992px) {
            .section[_ngcontent-uuw-c76] {
                padding: 56px 0 120px
            }
        }

        .section__header[_ngcontent-uuw-c76] {
            font-weight: 800;
            font-size: 28px;
            text-align: left;
            line-height: 32px;
            margin-bottom: 32px;
            color: #00131f;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .section__header[_ngcontent-uuw-c76] {
                text-align: center;
                margin-bottom: 36px;
                font-size: 40px;
                line-height: 48px
            }
        }

        .raffles-nav-container[_ngcontent-uuw-c76] {
            z-index: 50;
            position: relative
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

        .header[_ngcontent-uuw-c63] {
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
            .header[_ngcontent-uuw-c63] {
                height: 100px
            }
        }

        @media (min-width: 992px) {
            .header--short[_ngcontent-uuw-c63] {
                height: 62px
            }
        }

        .header__nav[_ngcontent-uuw-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            margin-left: auto
        }

        @media (min-width: 1200px) {
            .header__button_sm[_ngcontent-uuw-c63] {
                display: none !important
            }
        }

        .logo[_ngcontent-uuw-c63] {
            padding: 0 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .logo[_ngcontent-uuw-c63] {
                padding: 0 30px
            }
        }

        @media (min-width: 768px) {
            .logo[_ngcontent-uuw-c63] {
                padding: 0 40px
            }
        }

        .logo__img[_ngcontent-uuw-c63] {
            width: auto;
            height: 35px;
            transition: width .2s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 330px) {
            .logo__img[_ngcontent-uuw-c63] {
                height: 40px
            }
        }

        @media (min-width: 360px) {
            .logo__img[_ngcontent-uuw-c63] {
                height: 45px
            }
        }

        @media (min-width: 992px) {
            .logo__img[_ngcontent-uuw-c63] {
                height: 56px
            }
        }

        @media (min-width: 768px) {
            .header--short[_ngcontent-uuw-c63] .logo__img[_ngcontent-uuw-c63] {
                height: 45px
            }
        }

        .main-nav[_ngcontent-uuw-c63] {
            display: none
        }

        @media (min-width: 1200px) {
            .main-nav[_ngcontent-uuw-c63] {
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

        .main-nav__item[_ngcontent-uuw-c63] {
            height: 100%
        }

        .main-nav__link[_ngcontent-uuw-c63] {
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
            .main-nav__link[_ngcontent-uuw-c63] {
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

        .nav-button[_ngcontent-uuw-c63] {
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
            .nav-button[_ngcontent-uuw-c63] {
                width: 81px
            }
        }

        @media (min-width: 992px) {
            .nav-button[_ngcontent-uuw-c63] {
                width: 101px
            }
        }

        .nav-button[_ngcontent-uuw-c63]:hover,
        .nav-button[_ngcontent-uuw-c63]:focus {
            outline: 0;
            background-color: #f6f7f9
        }

        .nav-button__icon[_ngcontent-uuw-c63] {
            color: #6e7191;
            width: 20px;
            height: 20px
        }

        .nav-button__icon_hamburger[_ngcontent-uuw-c63] {
            width: 24px;
            height: 24px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_hamburger[_ngcontent-uuw-c63] {
                height: 22px;
                width: 20px
            }
        }

        .nav-button__icon_shopping-cart[_ngcontent-uuw-c63] {
            width: 22px;
            height: 22px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_shopping-cart[_ngcontent-uuw-c63] {
                width: 20px;
                height: 20px
            }
        }

        .nav-button__label[_ngcontent-uuw-c63] {
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
            .nav-button__label[_ngcontent-uuw-c63] {
                min-width: 22px;
                height: 22px;
                line-height: 22px;
                padding: 0 4px;
                font-size: 14px
            }
        }

        .nav-button__loading[_ngcontent-uuw-c63] {
            display: inline-block;
            width: 14px
        }

        .mobile-menu[_ngcontent-uuw-c63] {
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

        .mobile-menu_shown[_ngcontent-uuw-c63] {
            background-color: rgba(0, 0, 0, .78);
            pointer-events: all
        }

        .mobile-menu__panel[_ngcontent-uuw-c63] {
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

        .mobile-menu_shown[_ngcontent-uuw-c63] .mobile-menu__panel[_ngcontent-uuw-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close[_ngcontent-uuw-c63] {
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

        .mobile-menu__close[_ngcontent-uuw-c63]:hover,
        .mobile-menu__close[_ngcontent-uuw-c63]:focus {
            color: #ea1c0d;
            outline: none
        }

        .mobile-menu_shown[_ngcontent-uuw-c63] .mobile-menu__close[_ngcontent-uuw-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close-icon[_ngcontent-uuw-c63] {
            width: 60px;
            height: 60px
        }

        .mobile-menu__nav[_ngcontent-uuw-c63] {
            margin-bottom: 25px;
            padding: 0 13px 37px;
            border-bottom: 1px solid #0a2539
        }

        .mobile-menu__nav-list[_ngcontent-uuw-c63] {
            margin: 0;
            padding: 0
        }

        .mobile-menu__item[_ngcontent-uuw-c63] {
            list-style-type: none
        }

        .mobile-menu__divider[_ngcontent-uuw-c63] {
            height: 1px;
            display: block;
            margin: 13px;
            width: calc(100% - 26px);
            background-color: #5a7b93
        }

        .mobile-menu__title[_ngcontent-uuw-c63] {
            color: #449bd8;
            font-size: 14px;
            display: block;
            padding: 16px 13px 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase
        }

        .mobile-menu__link[_ngcontent-uuw-c63] {
            display: inline-block;
            font-size: 16px;
            line-height: 1;
            padding: 13px;
            color: #f6f7f9;
            cursor: pointer;
            transition: color .3s;
            text-decoration: none
        }

        .mobile-menu__link[_ngcontent-uuw-c63]:hover {
            color: #d7dce5
        }

        .mobile-menu__bottom-wrapper[_ngcontent-uuw-c63] {
            padding: 0 25.5px
        }

        .mobile-menu__text[_ngcontent-uuw-c63] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
            line-height: 29px;
            color: #fff
        }

        .mobile-menu__socials[_ngcontent-uuw-c63] {
            display: -webkit-flex;
            display: flex;
            margin: 0 -12px
        }

        .mobile-menu__social-link[_ngcontent-uuw-c63] {
            display: inline-block;
            padding: 0 12px;
            text-decoration: none
        }

        .mobile-menu__social-icon[_ngcontent-uuw-c63] {
            width: 40px;
            height: 40px
        }

        .native-nav[_ngcontent-uuw-c63] {
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

        .native-nav__button[_ngcontent-uuw-c63] {
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

        .native-nav__button[_ngcontent-uuw-c63]:hover {
            color: rgba(0, 0, 0, .7);
            text-decoration: none
        }

        .native-nav__button_inactive[_ngcontent-uuw-c63] {
            color: rgba(0, 0, 0, .3) !important
        }

        .native-nav__icon[_ngcontent-uuw-c63] {
            font-size: 15px;
            line-height: 18px
        }

        .native-nav__label[_ngcontent-uuw-c63] {
            font-size: 12px;
            line-height: 18px;
            padding-top: 1px
        }

        .header-container[_ngcontent-uuw-c63] {
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

        .header-placeholder[_ngcontent-uuw-c63] {
            height: 100px;
            width: 100%
        }

        @media (max-width: 991.9px) {
            .header-placeholder[_ngcontent-uuw-c63] {
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

        [_nghost-uuw-c73] {
            display: block;
            position: relative
        }

        .slider[_ngcontent-uuw-c73] {
            position: relative;
            z-index: 1;
            background-color: #233543;
            height: calc(100vh - 110px);
            max-height: 860px
        }

        @media (max-width: 1199.9px) {
            .slider[_ngcontent-uuw-c73] {
                max-height: 650px
            }
        }

        @media (max-width: 991.9px) {
            .slider[_ngcontent-uuw-c73] {
                max-height: 650px;
                height: calc(100vh - 90px)
            }
        }

        @media (max-width: 767.9px) {
            .slider[_ngcontent-uuw-c73] {
                max-height: 500px
            }
        }

        @media (max-width: 675.9px) {
            .slider[_ngcontent-uuw-c73] {
                max-height: 400px
            }
        }

        @media (max-width: 575.9px) {
            .slider[_ngcontent-uuw-c73] {
                max-height: 342px
            }
        }

        .slider__wrapper[_ngcontent-uuw-c73] {
            z-index: 2;
            height: 100%;
            position: relative
        }

        .slider__enter-btn[_ngcontent-uuw-c73] {
            z-index: 2;
            padding-top: 12px;
            padding-bottom: 24px
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-uuw-c73] {
                padding-top: 24px;
                padding-bottom: 0;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0)
            }
        }

        .slider__enter-btn_secondary[_ngcontent-uuw-c73] {
            padding-left: 20px;
            padding-right: 20px
        }

        .slider__enter-btn[_ngcontent-uuw-c73] button[_ngcontent-uuw-c73] {
            width: 100%;
            cursor: pointer;
            padding: 12px 0;
            background-color: #F37021;
            border: none;
            border-radius: 40px;
            font-family: Exo, sans-serif;
            color: #fff;
            line-height: 24px;
            font-size: 18px;
            margin: 0 auto;
            font-weight: 600;
            max-width: 340px;
            box-shadow: 0 0 20px rgba(0, 0, 0, .1)
        }

        @media (min-width: 576px) {
            .slider__enter-btn[_ngcontent-uuw-c73] button[_ngcontent-uuw-c73] {
                width: auto;
                padding: 14px 24px 14px 32px;
                margin-left: 0
            }
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-uuw-c73] button[_ngcontent-uuw-c73] {
                font-size: 24px;
                line-height: 28px
            }
        }

        .slider__enter-btn[_ngcontent-uuw-c73] button[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
            width: 24px;
            height: 24px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-uuw-c73] button[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
                width: 29px;
                height: 29px;
                margin-left: 16px
            }
        }

        .slider__button[_ngcontent-uuw-c73] {
            position: absolute;
            z-index: 20;
            top: 25%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 147px;
            height: 50%;
            padding: 0;
            border-width: 0;
            background-color: rgba(255, 255, 255, 0);
            color: #fff;
            opacity: .8;
            cursor: pointer;
            transition: opacity .3s
        }

        .slider__button[_ngcontent-uuw-c73]:focus {
            outline: none
        }

        @media (max-width: 1199.9px) {
            .slider__button[_ngcontent-uuw-c73] {
                width: 77px
            }
        }

        @media (max-width: 767.9px) {
            .slider__button[_ngcontent-uuw-c73] {
                width: 40px
            }
        }

        .slider__button_prev[_ngcontent-uuw-c73] {
            left: 0
        }

        .slider__button_next[_ngcontent-uuw-c73] {
            right: 0
        }

        .slider__icon[_ngcontent-uuw-c73] {
            width: 25px;
            height: 25px;
            -webkit-filter: drop-shadow(0 0 4px rgba(0, 0, 0, .5));
            filter: drop-shadow(0 0 4px rgba(0, 0, 0, .5))
        }

        .slider__button_next[_ngcontent-uuw-c73] .slider__icon[_ngcontent-uuw-c73] {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .slider__button-spacer[_ngcontent-uuw-c73] {
            height: 72px;
            width: 100%;
            background: #00131F
        }

        @media (min-width: 991.9px) {
            .slider__button-spacer[_ngcontent-uuw-c73] {
                display: none
            }
        }

        .slider__wrapper{ height: 100%; }
        .owl-carousel .owl-wrapper-outer { height: 100%; }
        .owl-wrapper { height: 100%; }
        .owl-item { height: 100%; }
        .owl-carousel .owl-item img { height: 100%; }

        .slide[_ngcontent-uuw-c73] {
            text-decoration: none;
            /* position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: opacity .6s;
            opacity: 0;
            pointer-events: none */
        }

        .slide_active[_ngcontent-uuw-c73] {
            opacity: 1;
            pointer-events: all;
            transition: opacity .6s .2s
        }

        .slide__content[_ngcontent-uuw-c73] {
            position: relative;
            height: 100%;
            width: 100%;
            /* display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-end;
            align-items: flex-end */
        }

        .slide__image[_ngcontent-uuw-c73] {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
            background-position-x: center;
            background-position-y: 60%;
            background-size: cover;
            background-repeat: no-repeat;
            transition: opacity .6s;
            opacity: 1
        }

        @media (min-width: 576px) {
            .slide__image[_ngcontent-uuw-c73] {
                background-position-y: 60%
            }
        }

        @media (min-width: 768px) {
            .slide__image[_ngcontent-uuw-c73] {
                background-position-y: 58%
            }
        }

        @media (min-width: 992px) {
            .slide__image[_ngcontent-uuw-c73] {
                background-position-y: 58%
            }
        }

        @media (min-width: 1200px) {
            .slide__image[_ngcontent-uuw-c73] {
                background-position-y: 52%
            }
        }

        .slide__image_unloaded[_ngcontent-uuw-c73] {
            opacity: 0
        }

        .slide__video[_ngcontent-uuw-c73] {
            min-width: 100%;
            min-height: 100%;
            overflow: hidden;
            background-position-x: center;
            background-position-y: center;
            background-size: cover;
            background-repeat: no-repeat;
            transition: opacity .6s;
            opacity: 1;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1
        }

        .slide__video[_ngcontent-uuw-c73] video[_ngcontent-uuw-c73] {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            display: block;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            transition: opacity .3s;
            opacity: 1
        }

        .slide__video_unloaded[_ngcontent-uuw-c73] {
            opacity: 0 !important
        }

        .slide__overlay[_ngcontent-uuw-c73] {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .slide__texts[_ngcontent-uuw-c73] {
            z-index: 2;
            width: 100%;
            padding: 0 20px
        }

        @media (max-width: 991.9px) {
            .slide__texts[_ngcontent-uuw-c73] {
                margin-bottom: -72px
            }
        }

        @media (min-width: 992px) {
            .slide__texts[_ngcontent-uuw-c73] {
                bottom: 180px;
                position: absolute;
                padding: 0 40px
            }
        }

        @media (min-width: 1200px) {
            .slide__texts[_ngcontent-uuw-c73] {
                bottom: 184px
            }
        }

        .slide__title[_ngcontent-uuw-c73] {
            font-family: Exo, sans-serif;
            color: #fff;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 24px;
            line-height: 28px;
            margin: 0;
            text-shadow: 0 0 10px rgba(0, 0, 0, .45)
        }

        @media (min-width: 576px) {
            .slide__title[_ngcontent-uuw-c73] {
                font-size: 37px;
                line-height: 34px
            }
        }

        @media (min-width: 768px) {
            .slide__title[_ngcontent-uuw-c73] {
                font-size: 40px;
                line-height: 36px
            }
        }

        @media (min-width: 992px) {
            .slide__title[_ngcontent-uuw-c73] {
                width: 55%
            }
        }

        @media (min-width: 1200px) {
            .slide__title[_ngcontent-uuw-c73] {
                font-size: 65px;
                line-height: 58px
            }
        }

        .slide__subtitle[_ngcontent-uuw-c73] {
            color: #F37021;
            font-weight: 800;
            font-size: 16px;
            line-height: 20px;
            font-family: Exo, sans-serif;
            margin: 8px 0 0;
            text-shadow: 0 0 10px rgba(0, 0, 0, .45)
        }

        @media (min-width: 576px) {
            .slide__subtitle[_ngcontent-uuw-c73] {
                font-size: 20px;
                line-height: 24px
            }
        }

        @media (min-width: 992px) {
            .slide__subtitle[_ngcontent-uuw-c73] {
                font-size: 32px;
                line-height: 32px;
                background: inherit;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0);
                margin-top: 20px;
                width: 55%
            }
        }

        .slide__gradient[_ngcontent-uuw-c73] {
            background: linear-gradient(360deg, #00131F 30.08%, rgba(0, 0, 0, .3) 66.28%, rgba(0, 0, 0, 0) 100%);
            position: absolute;
            bottom: 0;
            height: 126px;
            width: 100%;
            z-index: 1;
            left: 0
        }

        .info-bar[_ngcontent-uuw-c73] {
            background: #00131F;
            padding: 0 20px;
            z-index: 2;
            width: 100%
        }

        @media (min-width: 992px) {
            .info-bar[_ngcontent-uuw-c73] {
                max-height: 144px;
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between;
                padding: 0 40px;
                border-bottom: 1px solid #D9DBE9;
                position: absolute;
                bottom: 0;
                width: 100%;
                background: rgba(20, 30, 38, .6);
                -webkit-backdrop-filter: blur(20px);
                backdrop-filter: blur(20px)
            }
        }

        .info-bar__counters[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            padding: 30px 0
        }

        @media (min-width: 768px) and (max-width: 991.9px) {
            .info-bar__counters[_ngcontent-uuw-c73] {
                padding: 41px 0 35px
            }
        }

        @media (max-width: 991.9px) {
            .info-bar__counters[_ngcontent-uuw-c73] {
                border-top: 1px solid rgba(255, 255, 255, .3);
                border-bottom: 1px solid rgba(255, 255, 255, .3)
            }
        }

        .info-bar__counter[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (max-width: 489.9px) {
            .info-bar__counter[_ngcontent-uuw-c73] {
                -webkit-flex: 1 1 45%;
                flex: 1 1 45%
            }
        }

        @media (max-width: 489.9px) {
            .info-bar__counter[_ngcontent-uuw-c73]:first-child {
                -webkit-flex: 0 1 45%;
                flex: 0 1 45%
            }
        }

        @media (min-width: 992px) {
            .info-bar__counter[_ngcontent-uuw-c73]:first-child {
                padding-right: 75px
            }
        }

        .info-bar__icon[_ngcontent-uuw-c73] {
            -webkit-flex: 0 0 48px;
            flex: 0 0 48px;
            height: 48px;
            text-align: center;
            background: #ffffff;
            border-radius: 7px;
            padding: 10px
        }

        @media (min-width: 768px) {
            .info-bar__icon[_ngcontent-uuw-c73] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px;
                padding: 20px
            }
        }

        .info-bar__label[_ngcontent-uuw-c73] {
            padding-left: 12px;
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        @media (min-width: 768px) {
            .info-bar__label[_ngcontent-uuw-c73] {
                padding-left: 30px
            }
        }

        .info-bar__value[_ngcontent-uuw-c73] {
            letter-spacing: .048px;
            font-family: Exo, sans-serif;
            font-weight: 800;
            font-size: 22px;
            line-height: 24px;
            color: #fff
        }

        @media (max-width: 489.9px) {
            .info-bar__value[_ngcontent-uuw-c73] {
                font-size: 18px;
                line-height: 20px
            }
        }

        @media (min-width: 768px) {
            .info-bar__value[_ngcontent-uuw-c73] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .info-bar__help[_ngcontent-uuw-c73] {
            letter-spacing: -.01em;
            font-family: Exo, sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            padding-top: 6px;
            color: #fff
        }

        @media (min-width: 768px) {
            .info-bar__help[_ngcontent-uuw-c73] {
                font-size: 16px;
                line-height: 24px
            }
        }

        .info-bar__trust[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (max-width: 991.9px) {
            .info-bar__trust[_ngcontent-uuw-c73] {
                padding: 19px 0 24px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trust[_ngcontent-uuw-c73] {
                position: relative;
                -webkit-flex: 0 1 auto;
                flex: 0 1 auto;
                border-top-left-radius: 15px;
                border-bottom-left-radius: 15px;
                text-align: left;
                padding-left: 40px;
                display: -webkit-flex;
                display: flex;
                color: #fff
            }
        }

        .info-bar__worldwide-inner[_ngcontent-uuw-c73] {
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        @media (min-width: 992px) {
            .info-bar__worldwide-inner[_ngcontent-uuw-c73] {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                -webkit-align-items: flex-end;
                align-items: flex-end;
                -webkit-justify-content: center;
                justify-content: center;
                margin-right: 40px;
                padding-right: 50px;
                border-right: 1px solid rgba(233, 235, 237, .3);
                height: 92px
            }
        }

        @media (min-width: 992px) and (max-width: 1300px) {
            .info-bar__worldwide-inner[_ngcontent-uuw-c73] {
                margin-right: 20px;
                padding-right: 30px
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .info-bar__worldwide-inner[_ngcontent-uuw-c73] {
                display: none
            }
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (max-width: 991.9px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] {
                padding: 19px 0 24px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] {
                position: relative;
                top: 10px;
                -webkit-flex: 0 1 auto;
                flex: 0 1 auto;
                border-top-left-radius: 15px;
                border-bottom-left-radius: 15px;
                text-align: left;
                padding-left: 40px;
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                color: #fff
            }
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] .star[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            font-size: 12px;
            color: #fff;
            font-weight: 700;
            margin-right: 12px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] .star[_ngcontent-uuw-c73] {
                font-size: 16px;
                -webkit-justify-content: end;
                justify-content: end;
                margin-bottom: 4px
            }
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] .star[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
            width: 14px;
            height: 13px;
            margin-right: 5.5px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] .star[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
                width: 24px;
                height: 24px
            }
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] .stars[_ngcontent-uuw-c73] {
            height: 20px
        }

        @media (min-width: 768px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] .stars[_ngcontent-uuw-c73] {
                line-height: 12px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] .stars[_ngcontent-uuw-c73] {
                height: 26px;
                margin-bottom: 4px;
                text-align: right
            }
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] .stars[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
            width: 106px;
            height: 20px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-uuw-c73] .stars[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
                width: 128px;
                height: 100%
            }
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] p[_ngcontent-uuw-c73] {
            margin: 0
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] p[_ngcontent-uuw-c73]:first-of-type {
            font-size: 16px
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] p[_ngcontent-uuw-c73]:last-of-type {
            font-size: 12px
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] p[_ngcontent-uuw-c73] span[_ngcontent-uuw-c73] {
            font-weight: 600
        }

        .info-bar__trustpilot[_ngcontent-uuw-c73] p[_ngcontent-uuw-c73] a[_ngcontent-uuw-c73] {
            text-decoration: none;
            color: #fff
        }

        .info-bar__trustpilot-image-mobile[_ngcontent-uuw-c73] {
            display: none;
            width: 140px;
            height: 20px
        }

        @media (max-width: 991.9px) {
            .info-bar__trustpilot-image-mobile[_ngcontent-uuw-c73] {
                display: inline-block
            }
        }

        .info-bar__trustpilot-image[_ngcontent-uuw-c73] {
            display: none;
            width: 343px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot-image[_ngcontent-uuw-c73] {
                display: inline-block
            }
        }

        @media (max-width: 1240px) {
            .info-bar__trustpilot-image[_ngcontent-uuw-c73] {
                width: 280px
            }
        }

        .info-bar__trustpilot-mobile[_ngcontent-uuw-c73] {
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        .info-bar__trustpilot-trust[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot-trust[_ngcontent-uuw-c73] {
                display: none
            }
        }

        .info-bar__payments[_ngcontent-uuw-c73] {
            display: -webkit-flex;
            display: flex
        }

        @media (min-width: 992px) {
            .info-bar__payments[_ngcontent-uuw-c73] {
                display: none
            }
        }

        .info-bar__payment[_ngcontent-uuw-c73] {
            text-align: center;
            background-color: #f5f6f7;
            width: 48px;
            height: 24px;
            font-size: 14px;
            border-radius: 3px
        }

        @media (max-width: 374px) {
            .info-bar__payment[_ngcontent-uuw-c73] {
                width: 40px
            }
        }

        .info-bar__payment[_ngcontent-uuw-c73]:first-child {
            margin-right: 8px
        }

        .info-bar__payment[_ngcontent-uuw-c73] svg-icon[_ngcontent-uuw-c73] {
            width: 100%;
            height: 100%
        }

        .worldwide[_ngcontent-uuw-c73] {
            white-space: nowrap;
            cursor: pointer
        }

        .worldwide__world[_ngcontent-uuw-c73] {
            width: 20px;
            height: auto;
            color: #219653;
            vertical-align: -5px
        }

        .worldwide__label[_ngcontent-uuw-c73] {
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
            padding-left: 8px;
            padding-right: 0
        }

        @media (min-width: 992px) {
            .worldwide__label[_ngcontent-uuw-c73] {
                font-size: 16px;
                line-height: 34px;
                text-transform: none
            }
        }

        .worldwide__label2[_ngcontent-uuw-c73] {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            text-align: right;
            letter-spacing: -.01em;
            padding-top: 2px
        }

        @media (max-width: 991.9px) {
            .worldwide__label2[_ngcontent-uuw-c73] {
                display: none
            }
        }

        .worldwide__label2[_ngcontent-uuw-c73] a[_ngcontent-uuw-c73] {
            color: #fff;
            text-decoration: none
        }

        .worldwide__label2[_ngcontent-uuw-c73] a[_ngcontent-uuw-c73]:hover {
            text-decoration: underline
        }

        .worldwide__info-holder[_ngcontent-uuw-c73] {
            vertical-align: -3px;
            padding: 4px
        }

        @media (min-width: 992px) {
            .worldwide__info-holder[_ngcontent-uuw-c73] {
                display: none
            }
        }

        .worldwide__info[_ngcontent-uuw-c73] {
            width: 14px;
            height: auto;
            color: #657a89
        }

        @media (min-width: 992px) {
            .worldwide__info[_ngcontent-uuw-c73] {
                width: 16px;
                color: #89a
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

        .raffles-nav__placeholder[_ngcontent-uuw-c60] {
            width: 100%;
            height: 52px
        }

        @media (min-width: 992px) {
            .raffles-nav__placeholder[_ngcontent-uuw-c60] {
                height: 72px
            }
        }

        .raffles-nav__outer[_ngcontent-uuw-c60] {
            position: absolute;
            background-color: #fff;
            z-index: 2;
            top: 0;
            left: 0;
            right: 0;
            box-shadow: 0 0 32px rgba(0, 19, 31, .08)
        }

        .raffles-nav__inner[_ngcontent-uuw-c60] {
            width: 100%;
            text-align: center;
            overflow: hidden;
            white-space: nowrap
        }

        .raffles-nav__swiper[_ngcontent-uuw-c60] {
            display: block;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: start;
            justify-content: start;
            margin: 0 auto;
            width: auto
        }

        .raffles-nav__item[_ngcontent-uuw-c60] {
            display: inline-block;
            z-index: 10;
            position: relative;
            padding-left: 11px;
            padding-right: 11px
        }

        @media (min-width: 992px) {
            .raffles-nav__item[_ngcontent-uuw-c60] {
                padding-left: 16px;
                padding-right: 16px
            }
        }

        .raffles-nav__link[_ngcontent-uuw-c60] {
            padding: 15px 0;
            cursor: pointer;
            font-size: 14px;
            line-height: 22px;
            color: #00131f;
            font-weight: 500;
            position: relative;
            transition: color .35s ease-in-out, padding .2s ease-in-out
        }

        @media (min-width: 992px) {
            .raffles-nav__link[_ngcontent-uuw-c60] {
                font-size: 16px;
                line-height: 26px;
                padding: 23px 0
            }

            .raffles-nav__outer--short[_ngcontent-uuw-c60] .raffles-nav__link[_ngcontent-uuw-c60] {
                padding: 15px 0
            }
        }

        .raffles-nav__link[_ngcontent-uuw-c60]:after {
            transition: opacity .35s ease-in-out;
            opacity: 0;
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 100%;
            background-color: #F37021
        }

        .raffles-nav__link--active[_ngcontent-uuw-c60] {
            color: #F37021
        }

        .raffles-nav__link--active[_ngcontent-uuw-c60]:after {
            opacity: 1
        }

        @media (max-width: 991.9px) {
            .raffles-nav__link-value--full[_ngcontent-uuw-c60] {
                display: none
            }
        }

        @media (min-width: 992px) {
            .raffles-nav__link-value--short[_ngcontent-uuw-c60] {
                display: none
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

        .why[_ngcontent-uuw-c75] {
            padding: 60px 0 80px;
            background-color: #F37021;
            font-family: Exo, sans-serif
        }

        @media (min-width: 992px) {
            .why[_ngcontent-uuw-c75] {
                padding: 80px 0 120px
            }
        }

        @media (min-width: 992px) {
            .why__steps[_ngcontent-uuw-c75] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center
            }
        }

        @media (max-width: 991.9px) {
            .why__steps[_ngcontent-uuw-c75] {
                max-width: 440px;
                margin: 0 auto
            }
        }

        .why__step[_ngcontent-uuw-c75] {
            background-color: #fff;
            margin-bottom: 2px;
            padding: 16px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-uuw-c75] {
                padding: 24px;
                margin-right: 2px;
                -webkit-flex: 0 0 33%;
                flex: 0 0 33%
            }
        }

        .why__step[_ngcontent-uuw-c75]:first-child {
            border-radius: 10px 10px 0 0
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-uuw-c75]:first-child {
                border-radius: 10px 0 0 10px
            }
        }

        .why__step[_ngcontent-uuw-c75]:last-child {
            border-radius: 0 0 10px 10px
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-uuw-c75]:last-child {
                border-radius: 0 10px 10px 0
            }
        }

        .why__icon[_ngcontent-uuw-c75] {
            -webkit-flex: 0 0 60px;
            flex: 0 0 60px;
            height: 60px;
            margin-right: 16px
        }

        @media (min-width: 992px) {
            .why__icon[_ngcontent-uuw-c75] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px;
                padding-right: 20px
            }
        }

        .why__icon[_ngcontent-uuw-c75] img[_ngcontent-uuw-c75] {
            width: auto;
            height: 100%
        }

        .why__label[_ngcontent-uuw-c75] {
            -webkit-flex: 1 0 30px;
            flex: 1 0 30px
        }

        .why__title[_ngcontent-uuw-c75] {
            color: #F37021;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px
        }

        @media (min-width: 992px) {
            .why__title[_ngcontent-uuw-c75] {
                font-size: 20px;
                line-height: 24px
            }
        }

        .why__subtitle[_ngcontent-uuw-c75] {
            margin: 2px 0;
            font-size: 14px;
            line-height: 20px;
            font-weight: 500;
            word-break: break-word;
            color: #00131f;
            letter-spacing: -.01em;
            padding-top: 2px
        }

        @media (min-width: 992px) {
            .why__subtitle[_ngcontent-uuw-c75] {
                font-size: 16px;
                line-height: 24px;
                padding-top: 4px
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

        .how[_ngcontent-uuw-c70] {
            padding: 60px 0 80px;
            background-color: #f5f6f7;
            font-family: Exo, sans-serif
        }

        @media (min-width: 992px) {
            .how[_ngcontent-uuw-c70] {
                padding: 80px 0 120px
            }
        }

        @media (min-width: 992px) {
            .how__steps[_ngcontent-uuw-c70] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center
            }
        }

        @media (max-width: 991.9px) {
            .how__steps[_ngcontent-uuw-c70] {
                max-width: 440px;
                margin: 0 auto
            }
        }

        .how__step[_ngcontent-uuw-c70] {
            background-color: #fff;
            margin-bottom: 2px;
            padding: 16px;
            max-height: 92px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-uuw-c70] {
                max-height: none;
                margin-right: 2px;
                padding: 24px;
                -webkit-flex: 0 0 33%;
                flex: 0 0 33%
            }
        }

        .how__step[_ngcontent-uuw-c70]:first-child {
            border-radius: 10px 10px 0 0
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-uuw-c70]:first-child {
                border-radius: 10px 0 0 10px
            }
        }

        .how__step[_ngcontent-uuw-c70]:last-child {
            border-radius: 0 0 10px 10px
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-uuw-c70]:last-child {
                border-radius: 0 10px 10px 0
            }
        }

        .how__icon[_ngcontent-uuw-c70] {
            -webkit-flex: 0 0 60px;
            flex: 0 0 60px;
            height: 60px;
            margin-right: 16px
        }

        @media (min-width: 992px) {
            .how__icon[_ngcontent-uuw-c70] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px
            }
        }

        .how__icon[_ngcontent-uuw-c70] img[_ngcontent-uuw-c70] {
            width: auto;
            height: 100%
        }

        .how__label[_ngcontent-uuw-c70] {
            -webkit-flex: 1 0 30px;
            flex: 1 0 30px
        }

        .how__title[_ngcontent-uuw-c70] {
            margin-bottom: 2px;
            color: #F37021;
            font-weight: 500;
            font-size: 10px;
            line-height: 12px;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .how__title[_ngcontent-uuw-c70] {
                font-size: 12px
            }
        }

        .how__subtitle[_ngcontent-uuw-c70] {
            font-size: 16px;
            line-height: 20px;
            font-weight: 600;
            color: #00131f;
            letter-spacing: -.01em;
            margin-bottom: 0;
            padding-top: 2px
        }

        @media (min-width: 992px) {
            .how__subtitle[_ngcontent-uuw-c70] {
                font-size: 20px;
                line-height: 24px;
                padding-top: 10px
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

        .reviews[_ngcontent-uuw-c68] {
            background: white;
            padding: 30px 15px;
            border-radius: 4px;
            max-width: 780px;
            margin: 0 auto
        }

        @media (min-width: 576px) {
            .reviews[_ngcontent-uuw-c68] {
                padding: 40px 50px
            }
        }

        .reviews__header[_ngcontent-uuw-c68] {
            display: -webkit-flex;
            display: flex
        }

        .reviews__identity[_ngcontent-uuw-c68] {
            text-align: left;
            font-size: 13px;
            line-height: 15px;
            -webkit-flex: 1 0 200px;
            flex: 1 0 200px
        }

        .reviews__logo[_ngcontent-uuw-c68] {
            -webkit-flex: 0 0 68px;
            flex: 0 0 68px;
            text-align: right
        }

        @media (min-width: 576px) {
            .reviews__logo[_ngcontent-uuw-c68] {
                -webkit-flex: 0 0 101px;
                flex: 0 0 101px
            }
        }

        .reviews__logo[_ngcontent-uuw-c68] img[_ngcontent-uuw-c68] {
            width: 60px;
            height: auto
        }

        @media (min-width: 576px) {
            .reviews__logo[_ngcontent-uuw-c68] img[_ngcontent-uuw-c68] {
                width: 93px
            }
        }

        .reviews__title[_ngcontent-uuw-c68] {
            font-size: 28px;
            line-height: 32px
        }

        .reviews__location[_ngcontent-uuw-c68] {
            color: #70757a
        }

        .reviews__rating[_ngcontent-uuw-c68] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 15px 0 17px
        }

        .reviews__rating-average[_ngcontent-uuw-c68] {
            font-size: 32px;
            line-height: 36px;
            margin-right: 11px;
            color: #70757a
        }

        .reviews__stars-box[_ngcontent-uuw-c68] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .reviews__stars[_ngcontent-uuw-c68] {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAWCAYAAAA1vze2AAAAqUlEQVR4AWLwySwkGv/YzgworgwwAIphGHqJXWgX6nl6q55o/GHxCX4bUx9hMK9JYwucFSmAubW2ZifED8Q7IXEgcmRqVNDsgBhBrAMSBJEiqwAGAaBRhiDvBk1A3mkRyb2CXSYLlmWFnbArffoMIrjS6qy3Sm/Z/068CPEbyKpKhfCDyA0yNE95MKtRGe9LiSz9O3hKclv6Y76ictQzqbmjyhIkyVi+8wCta5MKDP5AeAAAAABJRU5ErkJggg==);
            background-size: 25px 22px;
            height: 22px;
            width: 125px
        }

        .review[_ngcontent-uuw-c68] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-start;
            align-items: flex-start;
            font-family: arial, sans-serif;
            border-top: 1px solid #f5f5f5;
            padding: 28px 0
        }

        .review__avatar[_ngcontent-uuw-c68] {
            -webkit-flex: 0 0 47px;
            flex: 0 0 47px
        }

        .review__avatar-img[_ngcontent-uuw-c68] {
            width: 40px;
            height: 40px
        }

        .review__avatar-initial[_ngcontent-uuw-c68] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 24px;
            line-height: 38px;
            padding-top: 2px;
            color: #fff;
            text-align: center
        }

        .review__content[_ngcontent-uuw-c68] {
            -webkit-flex: 1 0 200px;
            flex: 1 0 200px;
            font-size: 13px;
            line-height: 15px;
            color: #000;
            text-align: left
        }

        .review__name[_ngcontent-uuw-c68] {
            font-weight: 700
        }

        .review__counter[_ngcontent-uuw-c68] {
            padding-top: 2px;
            color: #70757a
        }

        .review__stars-date[_ngcontent-uuw-c68] {
            padding-top: 8px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        .review__rating[_ngcontent-uuw-c68] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .review__stars[_ngcontent-uuw-c68] {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAYAAACZ3F9/AAAAZklEQVR4AWL4uYWZCdAJHVMBAIJAAG1DoAtjGarYxxjqwHADnA8HFuWL3E8puH8gAqILPaB34Qq4FAQ1yoo+8ES7NRWKe6u+Ogo0XjtaCmlSd6K/4OQQOF0JKYTsMasgOIRkBfDZATita/85jgoHAAAAAElFTkSuQmCC);
            background-size: 14px 13px;
            height: 13px;
            width: 0;
            display: inline-block
        }

        .review__date[_ngcontent-uuw-c68] {
            padding-left: 8px;
            -webkit-flex: 0 0 100px;
            flex: 0 0 100px;
            color: #70757a
        }

        .review__text[_ngcontent-uuw-c68] {
            padding-top: 8px
        }

        .review__text[_ngcontent-uuw-c68] p {
            padding: 0;
            margin: 0
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

        .payments[_ngcontent-uuw-c67] {
            padding: 28px 15px;
            background-color: #fff;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: center;
            justify-content: center;
            gap: 10px
        }

        @media (min-width: 768px) {
            .payments[_ngcontent-uuw-c67] {
                gap: 15px
            }
        }

        @media (min-width: 992px) {
            .payments[_ngcontent-uuw-c67] {
                padding: 42px 15px;
                gap: 33px
            }
        }

        .payments--nopadding[_ngcontent-uuw-c67] {
            padding: 0
        }

        .payments__payment[_ngcontent-uuw-c67] {
            height: 36px;
            width: calc(20% - 8px);
            max-width: 60px
        }

        @media (min-width: 768px) {
            .payments__payment[_ngcontent-uuw-c67] {
                max-width: 80px
            }
        }

        .payments__payment[_ngcontent-uuw-c67] svg-icon[_ngcontent-uuw-c67] {
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .payments svg {
            max-width: 100%;
            max-height: 100%;
            margin: auto
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

        .footer[_ngcontent-uuw-c64] {
            text-align: center;
            padding: 40px 0;
            font-family: Exo, sans-serif;
            background-color: #f5f6f7
        }

        @media (min-width: 992px) {
            .footer[_ngcontent-uuw-c64] {
                padding: 80px 40px
            }
        }

        .footer[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] {
            padding: 0
        }

        .footer[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] {
            list-style: none
        }

        @media (min-width: 992px) {
            .footer__wrapper[_ngcontent-uuw-c64] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        .footer__logo[_ngcontent-uuw-c64] {
            display: inline-block
        }

        .footer__logo-image[_ngcontent-uuw-c64] {
            height: 45px;
            display: inline-block
        }

        @media (min-width: 992px) {
            .footer__logo-image[_ngcontent-uuw-c64] {
                height: 55px
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-uuw-c64] {
                display: -webkit-flex;
                display: flex
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] {
                text-align: left;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin: 0 0 0 104px;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content
            }
        }

        .footer__links[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] {
            margin-bottom: 12px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] {
                margin-right: 137px
            }
        }

        .footer__links[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] a[_ngcontent-uuw-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__links[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] a[_ngcontent-uuw-c64]:hover {
            text-decoration: underline
        }

        .footer__social-email[_ngcontent-uuw-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__social-email[_ngcontent-uuw-c64]:hover {
            text-decoration: underline
        }

        .footer__social[_ngcontent-uuw-c64] {
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-uuw-c64] {
                margin-top: 0;
                text-align: right
            }
        }

        .footer__social[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] {
                -webkit-justify-content: end;
                justify-content: end;
                margin-top: 96px;
                margin-bottom: 0
            }
        }

        .footer__social[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] {
            margin: 0 6px
        }

        .footer__social[_ngcontent-uuw-c64] ul[_ngcontent-uuw-c64] li[_ngcontent-uuw-c64] svg-icon[_ngcontent-uuw-c64] {
            width: 32px;
            height: 32px
        }

        .footer__social[_ngcontent-uuw-c64] p[_ngcontent-uuw-c64] {
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f
        }

        .footer__social[_ngcontent-uuw-c64] p.footer__annotation--light[_ngcontent-uuw-c64],
        .footer__social[_ngcontent-uuw-c64] p[_ngcontent-uuw-c64] a.footer__annotation--light[_ngcontent-uuw-c64] {
            color: rgba(0, 19, 31, .33)
        }

        .footer__social-link[_ngcontent-uuw-c64]:hover {
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

    </style>
    <style>
        [_nghost-uuw-c61] {
            display: inline-block;
            width: 100%;
            height: 100%
        }

        [_nghost-uuw-c61] .svg-icon,
        [_nghost-uuw-c61] svg {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            fill: currentColor
        }

        [_nghost-uuw-c61] .svg-icon {
            width: auto;
            height: 100%;
            display: block
        }

        [_nghost-uuw-c61] .svg-icon_star-path {
            fill: #000064
        }

        [_nghost-uuw-c61] .svg-icon__fill_trustpilot {
            fill: #13b57a
        }

        [_nghost-uuw-c61] .svg-icon__fill_default {
            fill: #fff
        }

        [_nghost-uuw-c61] .svg-icon__cart-wheel {
            stroke: none;
            fill: #010101
        }

        [_nghost-uuw-c61] .svg-icon__paypal {
            fill: #263b80
        }

        [_nghost-uuw-c61] .svg-icon__paypal_light {
            fill: #139ad6
        }

        [_nghost-uuw-c61] .svg-icon__paypal_shadow {
            fill: #139ad6
        }

        [_nghost-uuw-c61] .svg-icon__paypal_cross {
            fill: #232c65
        }

        [_nghost-uuw-c61] .svg-icon__facebook-full_letter {
            opacity: 0
        }

        [_nghost-uuw-c61] .svg-icon__check {
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        [_nghost-uuw-c61] .svg-icon__receive-email-line {
            stroke: currentColor
        }

        [_nghost-uuw-c61] .svg-icon__circle {
            fill: none;
            stroke: currentColor
        }

        [_nghost-uuw-c61] .svg-icon svg {
            width: 100%;
            height: 100%;
            display: inline-block
        }

        .spinning[_nghost-uuw-c61] {
            -webkit-animation: rotate 1s linear infinite;
            animation: rotate 1s linear infinite;
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .svg-icon__footer-facebook[_nghost-uuw-c61] .svg-icon__facebook-full_letter,
        .svg-icon__footer-facebook [_nghost-uuw-c61] .svg-icon__facebook-full_letter {
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

        .download[_ngcontent-uuw-c74] {
            background-color: #F37021;
            text-align: center;
            font-family: Exo, sans-serif;
            padding-bottom: 60px;
            position: relative
        }

        @media (min-width: 992px) {
            .download[_ngcontent-uuw-c74] {
                padding-bottom: 0
            }
        }

        @media (max-width: 377.9px) {
            .download__iphone[_ngcontent-uuw-c74] {
                width: 100%
            }
        }

        .download__header[_ngcontent-uuw-c74] {
            margin: 0;
            padding-top: 60px;
            color: #fff;
            font-weight: 800;
            font-size: 28px;
            line-height: 32px;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .download__header[_ngcontent-uuw-c74] {
                padding-top: 80px;
                font-size: 40px;
                line-height: 48px
            }
        }

        .download__desc[_ngcontent-uuw-c74] {
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            margin: 12px 0 50px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .download__desc[_ngcontent-uuw-c74] {
                font-size: 16px;
                line-height: 24px
            }
        }

        .download__bg[_ngcontent-uuw-c74] {
            background: linear-gradient(180deg, rgba(4, 144, 233, 0) 0%, rgba(4, 144, 233, .614631) 31.77%, #F37021 91.15%);
            height: 225px;
            position: absolute;
            bottom: 60px;
            left: 0;
            width: 100%
        }

        @media (min-width: 992px) {
            .download__bg[_ngcontent-uuw-c74] {
                bottom: 0
            }
        }

        .download__buttons[_ngcontent-uuw-c74] {
            z-index: 1;
            position: absolute;
            bottom: 60px;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translate(-50%)
        }

        @media (min-width: 992px) {
            .download__buttons[_ngcontent-uuw-c74] {
                -webkit-flex-direction: row;
                flex-direction: row;
                bottom: 50px
            }
        }

        .download[_ngcontent-uuw-c74] .store-button[_ngcontent-uuw-c74] {
            min-width: 197px;
            height: 60px
        }

        @media (min-width: 992px) {
            .download[_ngcontent-uuw-c74] .store-button[_ngcontent-uuw-c74] {
                height: 54px;
                min-width: 177px
            }
        }

        .download[_ngcontent-uuw-c74] .store-button--google[_ngcontent-uuw-c74] {
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .download[_ngcontent-uuw-c74] .store-button--google[_ngcontent-uuw-c74] {
                margin: 0 0 0 17px;
                min-width: 202px
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

        [_nghost-uuw-c62] {
            display: block
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] {
            background-color: #00131f
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] .prompt-img__wrapper[_ngcontent-uuw-c62] {
            overflow: hidden;
            border-radius: 8px;
            max-width: 40px;
            height: 40px;
            margin-right: 8px
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] .prompt-img__wrapper[_ngcontent-uuw-c62] img[_ngcontent-uuw-c62] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] .prompt-close-icon[_ngcontent-uuw-c62] {
            max-width: 14px;
            height: 14px;
            margin-right: 12px;
            cursor: pointer;
            -webkit-filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%);
            filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%)
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] .prompt__content-title[_ngcontent-uuw-c62] {
            color: #f5f6f7;
            font-size: 16px
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] .prompt__content-category[_ngcontent-uuw-c62] {
            color: #b9b9b9;
            font-size: 10px
        }

        [_nghost-uuw-c62] .prompt-container[_ngcontent-uuw-c62] .prompt-btn[_ngcontent-uuw-c62] {
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
            [_nghost-uuw-c62] {
                display: none
            }
        }

    </style>
    <style>
        .holder[_ngcontent-uuw-c59] {
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

        .winners[_ngcontent-uuw-c69] {
            background-color: #f5f6f7;
            padding-top: 60px;
            font-family: Exo, sans-serif;
            position: relative
        }

        @media (min-width: 768px) {
            .winners[_ngcontent-uuw-c69] {
                padding-top: 80px;
                max-height: 842px;
                overflow: hidden
            }
        }

        .winners__header[_ngcontent-uuw-c69] {
            text-align: center;
            padding-bottom: 64px
        }

        @media (min-width: 768px) {
            .winners__header[_ngcontent-uuw-c69] {
                padding-bottom: 0;
                text-align: left
            }
        }

        .winners__header[_ngcontent-uuw-c69] h2[_ngcontent-uuw-c69] {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 28px;
            line-height: 32px;
            color: #00131f;
            margin: 0 0 24px
        }

        @media (min-width: 992px) {
            .winners__header[_ngcontent-uuw-c69] h2[_ngcontent-uuw-c69] {
                margin: 0;
                font-size: 40px;
                line-height: 48px
            }
        }

        .winners__header[_ngcontent-uuw-c69] a[_ngcontent-uuw-c69] {
            padding: 14px 20px 14px 28px;
            background: #fff;
            border-radius: 40px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            color: #00131f;
            text-decoration: none;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 992px) {
            .winners__header[_ngcontent-uuw-c69] a[_ngcontent-uuw-c69] {
                position: relative;
                top: 35px;
                font-size: 20px;
                line-height: 24px
            }
        }

        .winners__header[_ngcontent-uuw-c69] a[_ngcontent-uuw-c69] span[_ngcontent-uuw-c69]:first-child {
            margin-right: 19px
        }

        .winners__header[_ngcontent-uuw-c69] a[_ngcontent-uuw-c69] svg-icon[_ngcontent-uuw-c69] {
            width: 20px;
            height: 20px
        }

        .winners__wrapper[_ngcontent-uuw-c69] {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            max-height: 505px;
            overflow: hidden;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 768px) {
            .winners__wrapper[_ngcontent-uuw-c69] {
                grid-template-columns: repeat(3, 1fr);
                max-height: none;
                grid-gap: 20px;
                padding: 0 30px
            }
        }

        @media (min-width: 992px) {
            .winners__wrapper[_ngcontent-uuw-c69] {
                grid-template-columns: repeat(3, 290px);
                max-height: none;
                grid-gap: 20px;
                padding: 0
            }
        }

        @media (min-width: 1200px) {
            .winners__wrapper[_ngcontent-uuw-c69] {
                margin: 0 20px;
                grid-template-columns: repeat(3, 318px)
            }
        }

        .winners__winner[_ngcontent-uuw-c69] {
            position: relative;
            height: 150px;
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            margin-bottom: 16px
        }

        @media (min-width: 768px) {
            .winners__winner[_ngcontent-uuw-c69] {
                height: 272px;
                margin-bottom: 0
            }
        }

        @media (min-width: 992px) {
            .winners__winner[_ngcontent-uuw-c69] {
                height: 272px
            }
        }

        .winners__winner--odd[_ngcontent-uuw-c69] {
            top: 70px;
            right: 8px
        }

        @media (min-width: 768px) {
            .winners__winner--odd[_ngcontent-uuw-c69] {
                top: 0;
                right: 0
            }
        }

        .winners__winner--even[_ngcontent-uuw-c69] {
            left: 8px
        }

        @media (min-width: 768px) {
            .winners__winner--even[_ngcontent-uuw-c69] {
                left: 0
            }
        }

        @media (min-width: 768px) {
            .winners__winner--w-1[_ngcontent-uuw-c69] {
                grid-column: 3
            }

            .winners__winner--w-2[_ngcontent-uuw-c69] {
                grid-row: 2;
                top: 70px
            }

            .winners__winner--w-3[_ngcontent-uuw-c69] {
                grid-column: 2;
                top: -110px
            }

            .winners__winner--w-4[_ngcontent-uuw-c69] {
                grid-column: 3
            }

            .winners__winner--w-5[_ngcontent-uuw-c69] {
                grid-row: 3;
                top: 70px
            }

            .winners__winner--w-6[_ngcontent-uuw-c69] {
                grid-column: 2;
                bottom: 90px
            }

            .winners__winner--w-7[_ngcontent-uuw-c69] {
                grid-column: 3
            }
        }

        .winners__winner[_ngcontent-uuw-c69] img[_ngcontent-uuw-c69] {
            width: 120%
        }

        .winners__bg[_ngcontent-uuw-c69] {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 200px;
            background: linear-gradient(180deg, #F5F6F7 0%, rgba(245, 246, 247, 0) 100%);
            -webkit-transform: matrix(1, 0, 0, -1, 0, 0);
            transform: scaleY(-1)
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

        [_nghost-uuw-c65] {
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
            [_nghost-uuw-c65] {
                max-width: 48%;
                padding: 0 5px
            }
        }

        @media (min-width: 992px) {
            [_nghost-uuw-c65] {
                margin-bottom: 35px
            }
        }

        @media (min-width: 1600px) {
            [_nghost-uuw-c65] {
                max-width: 25%
            }
        }

        .raffle-card[_ngcontent-uuw-c65] {
            text-decoration: none;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: 100%;
            background: #F5F6F7
        }

        @media (min-width: 992px) {
            .raffle-card[_ngcontent-uuw-c65] {
                padding-bottom: 24px;
                border-top: 0;
                border-left: 10px;
                border-top: 10px;
                border-right: 0;
                border-radius: 0 0 10px 10px
            }
        }

        .raffle-card--white[_ngcontent-uuw-c65] {
            background: #fff
        }

        .raffle-card[_ngcontent-uuw-c65]:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .05)
        }

        .raffle-card[_ngcontent-uuw-c65]:hover .raffle-card__enter[_ngcontent-uuw-c65] {
            background-color: #F37021;
            color: #fff;
            border-color: #F37021
        }

        .raffle-card[_ngcontent-uuw-c65]:hover .raffle-card__enter-icon--blue[_ngcontent-uuw-c65] {
            display: none !important
        }

        .raffle-card[_ngcontent-uuw-c65]:hover .raffle-card__enter-icon--white[_ngcontent-uuw-c65] {
            display: inline-block !important
        }

        .raffle-card__image[_ngcontent-uuw-c65] {
            width: 100%;
            position: relative
        }

        .raffle-card__image[_ngcontent-uuw-c65] img[_ngcontent-uuw-c65] {
            width: 100%;
            display: block;
            border-radius: 8px 8px 0 0
        }

        .raffle-card__label[_ngcontent-uuw-c65] {
            position: absolute;
            left: 0;
            top: 0;
            padding: 4px 10px;
            font-family: Barlow Condensed;
            text-transform: uppercase;
            letter-spacing: .15rem
        }

        .raffle-card__label_green[_ngcontent-uuw-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__image-red-cover[_ngcontent-uuw-c65] {
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
            .raffle-card__image-red-cover[_ngcontent-uuw-c65] {
                left: 20px;
                right: 20px;
                font-size: 16px;
                padding: 3px
            }
        }

        .raffle-card__draw[_ngcontent-uuw-c65] {
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
            .raffle-card__draw[_ngcontent-uuw-c65] {
                font-size: 7px;
                padding: 5px
            }
        }

        @media (min-width: 992px) {
            .raffle-card__draw[_ngcontent-uuw-c65] {
                font-size: 16px;
                right: 12px;
                left: auto;
                left: initial;
                padding: 11px 16px
            }
        }

        .raffle-card__draw_tomorrow[_ngcontent-uuw-c65] {
            background-color: #F37021;
            color: #fff;
            border: none;
            margin-right: 10px
        }

        .raffle-card__draw_tomorrow[_ngcontent-uuw-c65] span[_ngcontent-uuw-c65] {
            border-radius: 10px;
            color: #fff;
            padding: 1px 3.5px;
            background-color: #007ccd
        }

        @media (min-width: 992px) {
            .raffle-card__draw_tomorrow[_ngcontent-uuw-c65] span[_ngcontent-uuw-c65] {
                font-size: 14px;
                padding: 2px 7.5px
            }
        }

        .raffle-card__wrapper[_ngcontent-uuw-c65] {
            -webkit-flex-grow: 1;
            flex-grow: 1
        }

        .raffle-card__alternative[_ngcontent-uuw-c65] {
            font-weight: 500;
            font-size: 10px;
            line-height: 14px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .raffle-card__alternative[_ngcontent-uuw-c65] {
                font-size: 14px;
                line-height: 20px
            }
        }

        .raffle-card__title[_ngcontent-uuw-c65] {
            font-weight: 600;
            font-size: 14px;
            line-height: 18px;
            letter-spacing: -.01em;
            color: #00131f;
            margin: 0;
            padding: 8px 8px 4px
        }

        @media (min-width: 992px) {
            .raffle-card__title[_ngcontent-uuw-c65] {
                padding: 24px 15px 8px;
                font-size: 24px;
                line-height: 28px
            }
        }

        .raffle-card__price[_ngcontent-uuw-c65] {
            font-weight: 800;
            font-size: 20px;
            line-height: 20px;
            text-transform: uppercase;
            margin-top: 18px
        }

        @media (min-width: 992px) {
            .raffle-card__price[_ngcontent-uuw-c65] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .raffle-card__price-new[_ngcontent-uuw-c65] {
            color: #F37021
        }

        .raffle-card__price-old[_ngcontent-uuw-c65] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 7px
        }

        @media (min-width: 992px) {
            .raffle-card__price-old[_ngcontent-uuw-c65] {
                font-weight: 800;
                font-size: 24px;
                line-height: 32px;
                margin-right: 12px
            }
        }

        .raffle-card__enter[_ngcontent-uuw-c65] {
            padding: 8px 10px;
            border: 1px solid #F37021;
            background-color: transparent;
            color: #F37021;
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
            .raffle-card__enter[_ngcontent-uuw-c65] {
                margin: 13px 24px 0;
                font-size: 20px;
                line-height: 24px;
                padding: 12px 10px;
                border-width: 2px
            }
        }

        .raffle-card__enter-icon[_ngcontent-uuw-c65] {
            width: 20px;
            height: 16px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .raffle-card__enter-icon[_ngcontent-uuw-c65] {
                height: 20px
            }
        }

        .raffle-card__enter-icon--white[_ngcontent-uuw-c65] {
            display: none
        }

        .raffle-card__slider[_ngcontent-uuw-c65] {
            margin-top: 14px;
            padding: 0 8px;
            position: relative
        }

        @media (min-width: 992px) {
            .raffle-card__slider[_ngcontent-uuw-c65] {
                padding: 0 24px;
                margin-top: 28px
            }
        }

        .raffle-card__slider--hidden[_ngcontent-uuw-c65] {
            opacity: 0
        }

        .raffle-card__sold[_ngcontent-uuw-c65] {
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
            .raffle-card__sold[_ngcontent-uuw-c65] {
                top: -7px
            }
        }

        .raffle-card__drawtime[_ngcontent-uuw-c65] {
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
            .raffle-card__drawtime[_ngcontent-uuw-c65] {
                font-size: 14px;
                line-height: 15px;
                padding: 5px 19px;
                top: -12px
            }
        }

        .raffle-card__drawtime--soon[_ngcontent-uuw-c65] {
            background-color: #F37021;
            color: #fff
        }

        .raffle-card__drawtime--urgent[_ngcontent-uuw-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__bottominfo[_ngcontent-uuw-c65] {
            background-color: #F37021;
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
            .raffle-card__bottominfo[_ngcontent-uuw-c65] {
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
            background-color: #F37021;
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
            background: #F37021
        }

        .raffle-card .noUi-horizontal .noUi-tooltip {
            bottom: 19px;
            width: 30px;
            padding: 1px;
            text-align: center;
            background-color: #F37021;
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
        [_nghost-uuw-c46] {
            display: block;
            margin-top: 1rem;
            margin-bottom: 1rem;
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

        .product[_ngcontent-uuw-c88] {
            font-family: Exo, sans-serif;
            text-align: center
        }

        @media (min-width: 992px) {
            .product[_ngcontent-uuw-c88] {
                text-align: left;
                padding-top: 40px
            }
        }

        @media (max-width: 991.4px) {
            .product[_ngcontent-uuw-c88]>.container[_ngcontent-uuw-c88] {
                margin: 0;
                padding: 0;
                width: 100%;
                max-width: 100%
            }
        }

        .product__top-details[_ngcontent-uuw-c88] {
            display: block
        }

        @media (min-width: 992px) {
            .product__top-details[_ngcontent-uuw-c88] {
                display: -webkit-flex;
                display: flex;
                margin: 0;
                -webkit-align-items: flex-start;
                align-items: flex-start;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        @media (max-width: 991.4px) {
            .product__details-left[_ngcontent-uuw-c88] {
                max-width: 450px;
                margin: 0 auto
            }
        }

        @media (min-width: 992px) {
            .product__details-left[_ngcontent-uuw-c88] {
                -webkit-flex: 0 0 48%;
                flex: 0 0 48%;
                margin-bottom: 40px
            }
        }

        @media (min-width: 992px) {
            .product__details-right[_ngcontent-uuw-c88] {
                -webkit-flex: 0 0 46%;
                flex: 0 0 46%
            }
        }

        .product__details-right-content[_ngcontent-uuw-c88] {
            padding: 0 20px;
            max-width: 440px;
            margin: 0 auto
        }

        @media (min-width: 992px) {
            .product__details-right-content[_ngcontent-uuw-c88] {
                padding: 0;
                max-width: 100%
            }
        }

        .product__title[_ngcontent-uuw-c88] {
            font-weight: 900;
            font-size: 28px;
            line-height: 32px;
            text-transform: uppercase;
            color: #00131f;
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .product__title[_ngcontent-uuw-c88] {
                font-weight: 800;
                font-size: 40px;
                line-height: 48px;
                margin-top: 24px
            }
        }

        .product__alternative[_ngcontent-uuw-c88] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__alternative[_ngcontent-uuw-c88] {
                font-weight: 500;
                font-size: 14px;
                line-height: 20px
            }
        }

        .product__price[_ngcontent-uuw-c88] {
            font-weight: 900;
            font-size: 28px;
            line-height: 32px;
            color: #F37021;
            text-align: center;
            text-transform: uppercase;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__price[_ngcontent-uuw-c88] {
                text-align: left;
                font-weight: 800;
                font-size: 40px;
                line-height: 48px;
                margin: 16px 0 19px
            }
        }

        .product__price-old[_ngcontent-uuw-c88] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 11px
        }

        @media (min-width: 992px) {
            .product__price-old[_ngcontent-uuw-c88] {
                font-weight: 700;
                font-size: 32px;
                line-height: 42px;
                margin-right: 16px
            }
        }

        .product__discount-timer[_ngcontent-uuw-c88] {
            display: -webkit-flex;
            display: flex;
            font-weight: 500;
            font-size: 14px;
            line-height: 20px;
            margin: 8px 0 9px;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__discount-timer[_ngcontent-uuw-c88] {
                text-align: left;
                margin-bottom: 19px
            }
        }

        .product__discount-label[_ngcontent-uuw-c88] {
            color: #939ca4
        }

        .product__discount-clock[_ngcontent-uuw-c88] {
            color: #00131f
        }

        .product__sold[_ngcontent-uuw-c88] {
            font-weight: 500;
            font-size: 12px;
            line-height: 16px;
            text-transform: uppercase;
            color: #939ca4;
            margin-bottom: 7px
        }

        @media (min-width: 992px) {
            .product__sold[_ngcontent-uuw-c88] {
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 12px
            }
        }

        .product__conditions[_ngcontent-uuw-c88] {
            display: -webkit-flex;
            display: flex;
            margin-top: 47px;
            padding-bottom: 32px;
            -webkit-align-items: flex-start;
            align-items: flex-start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            border-bottom: 1px solid #E9EBED;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            gap: 8px
        }

        @media (min-width: 992px) {
            .product__conditions[_ngcontent-uuw-c88] {
                gap: 16px
            }
        }

        .product__condition[_ngcontent-uuw-c88] {
            -webkit-flex: 0 0 calc(33.3333333333% - 5.3333333333px);
            flex: 0 0 calc(33.3333333333% - 5.3333333333px);
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__condition[_ngcontent-uuw-c88] {
                margin-top: 0;
                -webkit-flex-direction: row;
                flex-direction: row;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                -webkit-flex: 0 0 calc(50% - 8px);
                flex: 0 0 calc(50% - 8px)
            }
        }

        .product__condition[_ngcontent-uuw-c88]:first-child span[_ngcontent-uuw-c88] {
            width: 100%
        }

        @media (min-width: 992px) {
            .product__condition[_ngcontent-uuw-c88]:first-child span[_ngcontent-uuw-c88] {
                width: auto
            }
        }

        .product__condition-label[_ngcontent-uuw-c88] {
            font-weight: 700;
            font-size: 11px;
            line-height: 1;
            text-align: center;
            letter-spacing: .02em;
            text-transform: uppercase;
            margin-top: 12px;
            width: 80%
        }

        @media (min-width: 992px) {
            .product__condition-label[_ngcontent-uuw-c88] {
                width: auto;
                margin: 2px 0 0 8px
            }
        }

        @media (min-width: 1200px) {
            .product__condition-label[_ngcontent-uuw-c88] {
                white-space: nowrap
            }
        }

        .product__condition-icon[_ngcontent-uuw-c88] {
            height: 24px;
            width: 24px;
            color: #fff
        }

        .product__condition-icon--gray[_ngcontent-uuw-c88] {
            color: #939ca4 !important
        }

        .product__condition-icon--h-short[_ngcontent-uuw-c88] {
            width: 20px;
            height: 23px
        }

        .product__info-holder[_ngcontent-uuw-c88] {
            vertical-align: baseline;
            position: relative;
            font-size: 14px;
            line-height: 14px
        }

        .product__info-outer[_ngcontent-uuw-c88] {
            cursor: pointer;
            padding: 5px;
            position: absolute;
            top: -4px;
            left: 0
        }

        .product__info-icon[_ngcontent-uuw-c88] {
            width: 16px;
            height: 16px;
            color: #f37022
        }

        .product__postalentry[_ngcontent-uuw-c88] {
            font-size: 14px;
            text-align: left
        }

        .product__trustpilot[_ngcontent-uuw-c88] {
            padding: 35px 0;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            border-bottom: 1px solid #E9EBED
        }

        .product__trustpilot[_ngcontent-uuw-c88] svg-icon[_ngcontent-uuw-c88]:first-child {
            width: 106px;
            height: 20px;
            margin-right: 13px
        }

        .product__trustpilot[_ngcontent-uuw-c88] svg-icon[_ngcontent-uuw-c88]:nth-child(2) {
            width: 14px;
            height: 13.2px;
            display: -webkit-flex;
            display: flex;
            margin-right: 4px
        }

        .product__trustpilot[_ngcontent-uuw-c88] span[_ngcontent-uuw-c88] {
            font-size: 12px;
            color: #00131f;
            font-weight: 700
        }

        .product__instant[_ngcontent-uuw-c88] {
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        .product__instant-title[_ngcontent-uuw-c88] {
            font-weight: 700;
            font-size: 20px;
            line-height: 1;
            margin: 0;
            padding-bottom: 30px;
            color: #00131f;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__instant-title[_ngcontent-uuw-c88] {
                font-weight: 800;
                font-size: 32px;
                line-height: 32px;
                text-align: left;
                text-transform: uppercase;
                padding-bottom: 40px
            }
        }

        .product__instant-sort-icon[_ngcontent-uuw-c88] {
            width: 24px;
            height: 14px
        }

        .product__instant-sort[_ngcontent-uuw-c88] {
            line-height: 1;
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-align-content: center;
            align-content: center;
            margin-bottom: 10px;
            font-size: 14px;
            color: gray
        }

        .product__instant-sort[_ngcontent-uuw-c88] select[_ngcontent-uuw-c88] {
            font-size: 14px;
            outline: none;
            color: gray;
            margin-left: 5px;
            border: none;
            background-color: transparent;
            -moz-appearance: none;
            -webkit-appearance: none;
            cursor: pointer
        }

        .product__instant-sort[_ngcontent-uuw-c88] select[_ngcontent-uuw-c88]::-ms-expand {
            display: none
        }

        .product__instant-tickets[_ngcontent-uuw-c88] {
            display: -webkit-flex;
            display: flex;
            gap: 7px;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .product__instant-ticket[_ngcontent-uuw-c88] {
            width: calc(25% - 5.25px)
        }

        @media (max-width: 767.9px) {
            .product__instant-ticket[_ngcontent-uuw-c88] {
                width: calc(33.3333333333% - 4.6666666667px)
            }
        }

        @media (max-width: 489.9px) {
            .product__instant-ticket[_ngcontent-uuw-c88] {
                width: calc(50% - 3.5px)
            }
        }

        .product__main-details[_ngcontent-uuw-c88] {
            text-align: left;
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        .product__main-details[_ngcontent-uuw-c88] h3[_ngcontent-uuw-c88] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .product__main-details[_ngcontent-uuw-c88] h3[_ngcontent-uuw-c88] {
                font-weight: 500;
                font-size: 14px
            }
        }

        .product__main-details[_ngcontent-uuw-c88] ul[_ngcontent-uuw-c88] {
            padding-left: 15px
        }

        .product__main-details[_ngcontent-uuw-c88] ul[_ngcontent-uuw-c88] li[_ngcontent-uuw-c88] {
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -.01em;
            color: #000;
            margin-bottom: 12px;
            list-style: square
        }

        @media (min-width: 992px) {
            .product__main-details[_ngcontent-uuw-c88] ul[_ngcontent-uuw-c88] li[_ngcontent-uuw-c88] {
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;
                color: #00131f
            }
        }

        .product__main-details[_ngcontent-uuw-c88] ul[_ngcontent-uuw-c88] li[_ngcontent-uuw-c88] a[_ngcontent-uuw-c88] {
            color: #F37021
        }

        .product__share[_ngcontent-uuw-c88] {
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        @media (min-width: 992px) {
            .product__share[_ngcontent-uuw-c88] {
                border-bottom: none;
                padding-bottom: 72px
            }
        }

        .product__share-label[_ngcontent-uuw-c88] {
            text-align: left;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4;
            margin-bottom: 12px
        }

        @media (min-width: 992px) {
            .product__share-label[_ngcontent-uuw-c88] {
                font-size: 14px
            }
        }

        .product__share-icons[_ngcontent-uuw-c88] {
            display: grid
        }

        .product__payments[_ngcontent-uuw-c88] {
            padding: 28px 0
        }

        @media (min-width: 992px) {
            .product__payments[_ngcontent-uuw-c88] {
                padding: 42px 0
            }
        }

        .product__error[_ngcontent-uuw-c88] {
            color: red;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.2;
            text-align: center;
            padding-top: 4px
        }

        .product__slider-label[_ngcontent-uuw-c88] {
            font-weight: 500;
            font-size: 11px;
            line-height: 11px;
            text-transform: uppercase;
            color: #939ca4;
            text-align: center;
            padding-top: 8px
        }

        @media (min-width: 992px) {
            .product__slider-label[_ngcontent-uuw-c88] {
                font-size: 12px;
                line-height: 12px;
                padding-top: 8px
            }
        }

        .product__slider[_ngcontent-uuw-c88] * {
            cursor: default !important
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal {
            margin: 0;
            height: 5px;
            background: #E9EBED;
            border: none;
            cursor: auto
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-uuw-c88] .noUi-horizontal {
                height: 7px
            }
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal-shadowcsshost-no-combinator {
            margin: 0
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal .noUi-tooltip {
            display: none
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal.noUi-target,
        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal.noUi-target * {
            touch-action: pan-y !important
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle {
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background-color: #F37021;
            box-shadow: none;
            box-sizing: content-box;
            border: none;
            right: -15px
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle {
                width: 21px;
                height: 21px;
                top: -8px
            }
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle:before,
        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .product__slider[_ngcontent-uuw-c88] .noUi-horizontal .noUi-connect {
            background: #F37021
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-uuw-c88] .min .noUi-handle {
                right: -20px
            }
        }

        .product__slider[_ngcontent-uuw-c88] .increaseRight .noUi-horizontal .noUi-handle {
            right: -1px
        }

        .product[_ngcontent-uuw-c88] .sub-alert_error[_ngcontent-uuw-c88] {
            margin-top: -10px;
            position: relative;
            padding-bottom: 20px;
            color: #e33333
        }

        .product__drawtime-container[_ngcontent-uuw-c88] {
            margin: 20px 0 0;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__drawtime-container[_ngcontent-uuw-c88] {
                text-align: left;
                margin: 0
            }
        }

        .product__drawtime[_ngcontent-uuw-c88] {
            background: #F5F6F7;
            border-radius: 20px;
            color: #00131f;
            padding: 7px 16px;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            margin: 0 5px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block
        }

        @media (min-width: 992px) {
            .product__drawtime[_ngcontent-uuw-c88] {
                text-align: left;
                margin-left: 0
            }
        }

        @media (min-width: 992px) {
            .product__drawtime[_ngcontent-uuw-c88] {
                font-size: 16px
            }
        }

        .product__drawtime--soon[_ngcontent-uuw-c88] {
            background-color: #F37021;
            color: #fff
        }

        .product__drawtime--urgent[_ngcontent-uuw-c88] {
            background-color: #40d586;
            color: #fff
        }

        .ticket__question[_ngcontent-uuw-c88] h3[_ngcontent-uuw-c88] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            text-align: center;
            margin-top: 32px;
            margin-bottom: 0;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-uuw-c88] h3[_ngcontent-uuw-c88] {
                text-align: left;
                margin-top: 24px
            }
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-uuw-c88] h3[_ngcontent-uuw-c88] {
                font-size: 14px
            }
        }

        .ticket__question[_ngcontent-uuw-c88] h2[_ngcontent-uuw-c88] {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
            letter-spacing: -.01em;
            color: #F37021;
            width: 90%;
            margin: 8px auto 20px
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-uuw-c88] h2[_ngcontent-uuw-c88] {
                text-align: left;
                margin: 11px 0 24px
            }
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-uuw-c88] h2[_ngcontent-uuw-c88] {
                font-weight: 600;
                font-size: 24px;
                line-height: 28px
            }
        }

        .ticket__answers[_ngcontent-uuw-c88] {
            position: relative;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            text-align: center;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            gap: 4px;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: stretch;
            align-items: stretch;
            margin-bottom: 32px
        }

        @media (min-width: 992px) {
            .ticket__answers[_ngcontent-uuw-c88] {
                margin-bottom: 24px;
                gap: 8px
            }
        }

        .ticket__answer[_ngcontent-uuw-c88] {
            text-align: center;
            -webkit-flex: 1 0 47%;
            flex: 1 0 47%
        }

        .ticket__answer[_ngcontent-uuw-c88] .bg[_ngcontent-uuw-c88] {
            cursor: pointer;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            padding: 14px 20px;
            background: #F5F6F7;
            border-radius: 8px;
            color: #000;
            border: 1.5px solid transparent;
            height: 100%
        }

        @media (max-width: 377.9px) {
            .ticket__answer[_ngcontent-uuw-c88] .bg[_ngcontent-uuw-c88] {
                font-size: 11px
            }
        }

        @media (min-width: 992px) {
            .ticket__answer[_ngcontent-uuw-c88] .bg[_ngcontent-uuw-c88] {
                font-size: 16px;
                font-weight: 600
            }
        }

        .ticket__answer[_ngcontent-uuw-c88] .bg[_ngcontent-uuw-c88] .text[_ngcontent-uuw-c88] {
            display: block;
            -webkit-flex: 0 1 auto;
            flex: 0 1 auto;
            text-align: center;
            position: relative
        }

        .ticket__answer[_ngcontent-uuw-c88] .bg[_ngcontent-uuw-c88] .text[_ngcontent-uuw-c88]>.text2[_ngcontent-uuw-c88] {
            display: inline;
            width: auto;
            position: relative
        }

        .ticket__answer[_ngcontent-uuw-c88] input[_ngcontent-uuw-c88] {
            display: none
        }

        .ticket__answer[_ngcontent-uuw-c88] input[_ngcontent-uuw-c88]:checked+.bg[_ngcontent-uuw-c88] {
            border: 1.5px solid #F37021;
            background-color: #fff;
            color: #F37021;
            position: relative
        }

        .ticket__answer[_ngcontent-uuw-c88] input[_ngcontent-uuw-c88]:checked+.bg[_ngcontent-uuw-c88] .text[_ngcontent-uuw-c88] .text2[_ngcontent-uuw-c88]:before {
            content: "";
            position: absolute;
            left: -20px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 17px;
            height: 13px;
            background: url(/assets/svg-icons/check-mark.svg);
            background-repeat: no-repeat
        }

        .ticket__tickets[_ngcontent-uuw-c88] {
            background-color: #f5f6f7;
            border: 1px solid #E9EBED;
            padding: 32px 0
        }

        @media (min-width: 992px) {
            .ticket__tickets[_ngcontent-uuw-c88] {
                padding: 24px 32px;
                border-radius: 12px
            }
        }

        .ticket__tickets[_ngcontent-uuw-c88] h2[_ngcontent-uuw-c88] {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #00131f;
            letter-spacing: -.01em;
            margin: 0 0 60px
        }

        @media (min-width: 992px) {
            .ticket__tickets[_ngcontent-uuw-c88] h2[_ngcontent-uuw-c88] {
                font-weight: 600;
                font-size: 24px;
                line-height: 28px;
                margin-bottom: 76px
            }
        }

        .ticket__entry-option[_ngcontent-uuw-c88] {
            background: #E9EBED;
            border-radius: 4px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: stretch;
            align-items: stretch;
            width: 100%;
            margin: 32px auto 8px;
            font-weight: 700;
            color: #939ca4;
            font-size: 11px;
            line-height: 1.6;
            text-transform: uppercase;
            text-align: center
        }

        @media (min-width: 490px) {
            .ticket__entry-option[_ngcontent-uuw-c88] {
                font-size: 14px
            }
        }

        @media (min-width: 992px) {
            .ticket__entry-option[_ngcontent-uuw-c88] {
                margin-top: 24px
            }
        }

        .ticket__entry-option[_ngcontent-uuw-c88] div[_ngcontent-uuw-c88] {
            border: 1px solid transparent;
            vertical-align: center;
            cursor: pointer;
            padding: 4px 12px;
            -webkit-flex: 1 1 50%;
            flex: 1 1 50%;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center
        }

        .ticket__entry-option[_ngcontent-uuw-c88] div[_ngcontent-uuw-c88]>span[_ngcontent-uuw-c88] {
            display: block
        }

        .ticket__entry-option--active[_ngcontent-uuw-c88] {
            border: 1px solid #939CA4 !important;
            background-color: #fff;
            border-radius: 4px
        }

        .ticket__entry-option--free[_ngcontent-uuw-c88] {
            margin-top: 32px
        }

        .ticket__labels[_ngcontent-uuw-c88] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .ticket__label[_ngcontent-uuw-c88] {
            font-weight: 600;
            font-size: 12px;
            line-height: 12px;
            color: #6e7a84
        }

        .ticket__quantities[_ngcontent-uuw-c88] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 12px
        }

        .ticket__quantity[_ngcontent-uuw-c88] {
            cursor: pointer;
            width: 48px;
            height: 48px;
            padding-left: 0;
            padding-right: 0;
            box-shadow: 0 0 32px rgba(0, 19, 31, .08);
            border-radius: 8px;
            background-color: #fff;
            border: none;
            color: #F37021;
            font-size: 25px;
            text-align: center;
            touch-action: manipulation
        }

        .ticket__quantity--disabled[_ngcontent-uuw-c88] {
            background-color: #e9ebed;
            box-shadow: none;
            color: #c4c9ce
        }

        .ticket__total[_ngcontent-uuw-c88] {
            color: #6e7a84;
            font-weight: 500;
            font-size: 16px;
            line-height: 20px
        }

        @media (min-width: 992px) {
            .ticket__total[_ngcontent-uuw-c88] {
                font-size: 20px;
                line-height: 24px
            }
        }

        .ticket__total[_ngcontent-uuw-c88] span[_ngcontent-uuw-c88] {
            font-weight: 900
        }

        .ticket__add[_ngcontent-uuw-c88] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            color: #fff;
            border: none;
            background-color: #F37021;
            box-shadow: 0 0 32px rgba(0, 19, 31, .08);
            border-radius: 8px;
            padding: 14px 0;
            width: 100%;
            margin-top: 16px;
            font-family: Exo, sans-serif;
            cursor: pointer;
            transition: opacity .1s ease-in-out
        }

        @media (min-width: 992px) {
            .ticket__add[_ngcontent-uuw-c88] {
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;
                letter-spacing: -.01em
            }
        }

        .ticket__add[_ngcontent-uuw-c88]:hover {
            background-color: #52b8f9
        }

        .ticket__add[_ngcontent-uuw-c88]:disabled {
            opacity: .4;
            cursor: default;
            pointer-events: none;
            -webkit-filter: saturate(10%);
            filter: saturate(10%)
        }

        .ticket__add-ticket[_ngcontent-uuw-c88] {
            margin-left: 12px;
            height: 24px;
            width: 24px
        }

        .ticket__add-loading[_ngcontent-uuw-c88] {
            margin-right: 8px;
            height: 20px;
            width: 20px
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal {
            height: 5px;
            background: #E9EBED;
            border: none;
            position: relative
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal:after {
            content: "";
            position: absolute;
            right: 1px;
            width: 1px;
            height: 5.5px;
            bottom: -5.5px;
            background: #6E7A84
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal:before {
            content: "";
            position: absolute;
            left: 1px;
            width: 1px;
            height: 5.5px;
            bottom: -5.5px;
            background: #6E7A84
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle {
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background-color: #fff;
            border: 2px solid #F37021;
            box-shadow: none;
            box-sizing: content-box;
            cursor: pointer;
            right: -10px
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle:before,
        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-connect {
            background: #F37021
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-origin {
            transition: none !important
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-tooltip {
            bottom: 19px;
            width: 75px;
            padding: 1px;
            text-align: center;
            background-color: #F37021;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            line-height: 22px;
            color: #fff;
            white-space: nowrap;
            transition: background-color .2s, box-shadow .1s, -webkit-transform .1s;
            transition: background-color .2s, box-shadow .1s, transform .1s;
            transition: background-color .2s, box-shadow .1s, transform .1s, -webkit-transform .1s;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: none
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-tooltip:before {
            transition: border-top-color .2s;
            position: absolute;
            bottom: -5px;
            left: calc(50% - 1.5px);
            content: "";
            width: 2px;
            height: 5px;
            background-color: #F37021
        }

        .ticket[_ngcontent-uuw-c88] .noUi-horizontal .noUi-tooltip:after {
            content: "";
            display: inline-block;
            width: 12px;
            height: 16px;
            background: url(/assets/svg-icons/ticket-small.svg);
            background-size: cover;
            background-position: center;
            margin-left: 5px
        }

        .ticket[_ngcontent-uuw-c88] .min .noUi-tooltip {
            width: 60px;
            left: 25px
        }

        .ticket[_ngcontent-uuw-c88] .min .noUi-tooltip:before {
            left: 10px
        }

        .ticket[_ngcontent-uuw-c88] .max .noUi-tooltip {
            left: -26px;
            width: 82px
        }

        .ticket[_ngcontent-uuw-c88] .max .noUi-tooltip:before {
            right: 5.5px;
            left: auto;
            left: initial
        }

        .ticket[_ngcontent-uuw-c88] .noUi-target {
            box-shadow: none
        }

        @media (max-width: 767.9px) {
            .ticket[_ngcontent-uuw-c88] .noUi-target {
                width: 100%
            }
        }

        .product-rating[_ngcontent-uuw-c88] {
            margin: 32px 0;
            border-bottom: 1px solid #E9EBED;
            padding-bottom: 32px
        }

        @media (min-width: 992px) {
            .product-rating[_ngcontent-uuw-c88] {
                margin: 40px 0;
                padding-bottom: 40px
            }
        }

        .preview[_ngcontent-uuw-c88] {
            display: block;
            position: relative;
            background: #bd0000;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.15em;
            text-align: left;
            padding: 5px
        }

        @media (min-width: 768px) {
            .preview[_ngcontent-uuw-c88] {
                position: absolute;
                left: 0;
                top: 0
            }
        }

        @media (max-width: 767.9px) {
            .preview[_ngcontent-uuw-c88] {
                text-align: center
            }

            .preview[_ngcontent-uuw-c88] br[_ngcontent-uuw-c88] {
                display: none
            }
        }

        .preview__outer[_ngcontent-uuw-c88] {
            position: relative
        }

        .closed-raffle[_ngcontent-uuw-c88] {
            text-align: center;
            padding: 70px 0 35px
        }

    </style>
    <meta name="og:title" content="7days Performance">
    <meta name="og:image" content="">
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

        .product-gallery__img[_ngcontent-uuw-c87] {
            display: block;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .product-gallery__image-text-cover[_ngcontent-uuw-c87] {
            width: 100%;
            text-align: center;
            background: #40d586;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: .8px;
            font-family: Barlow Condensed;
            padding: 5px;
            color: #fff
        }

        .product-gallery__image-red-cover[_ngcontent-uuw-c87] {
            position: absolute;
            z-index: 1;
            left: 45px;
            right: 45px;
            top: 50%;
            text-align: center;
            background: red;
            font-size: 24px;
            line-height: 1.5em;
            letter-spacing: .8px;
            font-family: Barlow Condensed;
            padding: 5px;
            color: #fff;
            -webkit-transform: rotate(-8deg) translateY(-50%);
            transform: rotate(-8deg) translateY(-50%);
            text-transform: uppercase
        }

        @media (max-width: 575.9px) {
            .product-gallery__image-red-cover[_ngcontent-uuw-c87] {
                left: 15px;
                right: 15px;
                font-size: 16px
            }
        }

        .product-gallery__photo[_ngcontent-uuw-c87] {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
            position: relative
        }

        .product-gallery__thumb-carousel[_ngcontent-uuw-c87] {
            width: calc(100% - 60px);
            margin: 10px auto 0;
            position: relative
        }

        @media (min-width: 992px) {
            .product-gallery__thumb-carousel[_ngcontent-uuw-c87] {
                display: none
            }
        }

        .product-gallery__thumb-list[_ngcontent-uuw-c87] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            gap: 10px;
            margin-top: 10px
        }

        @media (max-width: 991.9px) {
            .product-gallery__thumb-list[_ngcontent-uuw-c87] {
                display: none
            }
        }

        .product-gallery__thumb[_ngcontent-uuw-c87] {
            display: block;
            cursor: pointer
        }

        .product-gallery__thumb_regular[_ngcontent-uuw-c87] {
            width: 100%;
            max-width: calc(16.6666666667% - 8.3333333333px)
        }

        @media (max-width: 1199.9px) {
            .product-gallery__thumb_regular[_ngcontent-uuw-c87] {
                max-width: calc(20% - 8px)
            }
        }

        @media (max-width: 991.9px) {
            .product-gallery__thumb_regular[_ngcontent-uuw-c87] {
                max-width: calc(25% - 7.5px)
            }
        }

        .product-gallery__button-prev[_ngcontent-uuw-c87],
        .product-gallery__button-next[_ngcontent-uuw-c87] {
            width: 30px;
            height: 30px;
            background-size: 25px;
            margin-top: -15px;
            top: 50%;
            position: absolute;
            -webkit-transform: scale(.8, .8);
            transform: scale(.8);
            background-position: 50%;
            border-radius: 100px;
            cursor: pointer;
            opacity: 0;
            z-index: 15;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, .15)
        }

        .product-gallery__button-prev.swiper-button-disabled[_ngcontent-uuw-c87],
        .product-gallery__button-next.swiper-button-disabled[_ngcontent-uuw-c87] {
            display: none
        }

        .product-gallery__button-show[_ngcontent-uuw-c87] {
            opacity: 1
        }

        .product-gallery__button-prev[_ngcontent-uuw-c87] {
            right: 100%;
            -webkit-transform-origin: left center;
            transform-origin: left center;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0Ij48cGF0aCBkPSJNMTUuNDEgMTYuNTlMMTAuODMgMTJsNC41OC00LjU5TDE0IDZsLTYgNiA2IDYgMS40MS0xLjQxeiIvPjxwYXRoIGQ9Ik0wIDBoMjR2MjRIMFYweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==)
        }

        .product-gallery__button-next[_ngcontent-uuw-c87] {
            left: 100%;
            -webkit-transform-origin: right center;
            transform-origin: right center;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0Ij48cGF0aCBkPSJNOC41OSAxNi41OUwxMy4xNyAxMiA4LjU5IDcuNDEgMTAgNmw2IDYtNiA2LTEuNDEtMS40MXoiLz48cGF0aCBkPSJNMCAwaDI0djI0SDBWMHoiIGZpbGw9Im5vbmUiLz48L3N2Zz4=)
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

        .faq[_ngcontent-uuw-c81] {
            text-align: left;
            font-family: Exo, sans-serif
        }

        .faq__box[_ngcontent-uuw-c81] {
            list-style-type: none;
            margin-top: 0;
            margin-bottom: 0;
            padding: 0
        }

        .faq__header[_ngcontent-uuw-c81] {
            padding: 32px 0;
            border-bottom: 1px solid #E9EBED;
            cursor: pointer;
            color: gray;
            transition: color .2s;
            outline: 0
        }

        .faq__header[_ngcontent-uuw-c81]:hover {
            color: #40d586;
            outline: 0
        }

        .faq_product[_ngcontent-uuw-c81] .faq__header[_ngcontent-uuw-c81] {
            position: relative;
            padding-right: 90px
        }

        .faq__title[_ngcontent-uuw-c81] {
            margin: 0;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f;
            transition: color .3s
        }

        @media (min-width: 992px) {
            .faq__title[_ngcontent-uuw-c81] {
                font-weight: 800;
                font-size: 32px;
                line-height: 32px
            }
        }

        .faq__arrow[_ngcontent-uuw-c81] {
            position: absolute;
            top: 50%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 20px;
            height: 20px
        }

        .faq__arrow[_ngcontent-uuw-c81]:before,
        .faq__arrow[_ngcontent-uuw-c81]:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            content: ""
        }

        .faq__arrow[_ngcontent-uuw-c81]:before {
            background-image: url(/assets/svg-icons/arrow-right-black.svg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            opacity: 1
        }

        .faq__arrow[_ngcontent-uuw-c81]:after {
            background-image: url(/assets/svg-icons/arrow-right-black.svg);
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
            opacity: 0
        }

        .faq_product-opened[_ngcontent-uuw-c81] .faq__arrow[_ngcontent-uuw-c81]:before {
            opacity: 0
        }

        .faq_product-opened[_ngcontent-uuw-c81] .faq__arrow[_ngcontent-uuw-c81]:after {
            opacity: 1
        }

        .faq__body[_ngcontent-uuw-c81] {
            overflow: hidden
        }

        .faq__content[_ngcontent-uuw-c81] {
            padding: 20px 0
        }

        .faq__content_center[_ngcontent-uuw-c81] {
            text-align: center
        }

        .faq_product[_ngcontent-uuw-c81] .faq__content[_ngcontent-uuw-c81] {
            color: gray;
            font-weight: 400
        }

        .faq__paragraph[_ngcontent-uuw-c81] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 26px
        }

        .faq__img[_ngcontent-uuw-c81] {
            display: block;
            max-width: 100%;
            margin-bottom: 16px
        }

        .faq__bold[_ngcontent-uuw-c81] {
            font-weight: 700
        }

        .faq__link[_ngcontent-uuw-c81] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__link[_ngcontent-uuw-c81]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__h2[_ngcontent-uuw-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__h3[_ngcontent-uuw-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 700;
            line-height: 29px;
            color: #000
        }

        .faq__h4[_ngcontent-uuw-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq_product[_ngcontent-uuw-c81] h2[_ngcontent-uuw-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__content[_ngcontent-uuw-c81] .faq__h2,
        .faq__content[_ngcontent-uuw-c81] h2 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__content[_ngcontent-uuw-c81] .faq__h3,
        .faq__content[_ngcontent-uuw-c81] h3 {
            margin: 0;
            font-size: 28px;
            font-weight: 400;
            line-height: 33.6px;
            color: #000
        }

        .faq__content[_ngcontent-uuw-c81] .faq__h4,
        .faq__content[_ngcontent-uuw-c81] h4 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq__content[_ngcontent-uuw-c81] h5 {
            margin: 0;
            font-size: 20px;
            line-height: 24px;
            color: #000
        }

        .faq__content[_ngcontent-uuw-c81] .faq__link,
        .faq__content[_ngcontent-uuw-c81] a,
        .faq__content[_ngcontent-uuw-c81] a:link {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__content[_ngcontent-uuw-c81] .faq__link:hover,
        .faq__content[_ngcontent-uuw-c81] a:hover,
        .faq__content[_ngcontent-uuw-c81] a:link:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__content[_ngcontent-uuw-c81] .faq__paragraph,
        .faq__content[_ngcontent-uuw-c81] p {
            font-weight: 400;
            font-size: 17px;
            line-height: 25.5px;
            padding: 0;
            margin-top: 0;
            margin-bottom: 16px
        }

        .faq__content[_ngcontent-uuw-c81] .faq__img,
        .faq__content[_ngcontent-uuw-c81] img {
            max-width: 100%;
            height: auto !important
        }

        .faq__content[_ngcontent-uuw-c81] .faq__img {
            display: block
        }

        .faq__content[_ngcontent-uuw-c81] strong {
            font-weight: 700
        }

        .section_faq[_ngcontent-uuw-c81] {
            padding-top: 0;
            padding-bottom: 40px
        }

    </style>
    <style>
        [_nghost-uuw-c85] {
            display: inherit
        }

        .sb-group[_ngcontent-uuw-c85],
        .sb-button[_ngcontent-uuw-c85] {
            display: inline-flex;
            align-items: flex-start
        }

        .sb-group[_ngcontent-uuw-c85] {
            flex-wrap: wrap
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

        .ticket-card[_ngcontent-uuw-c80] {
            display: -webkit-flex;
            display: flex;
            border-radius: 9px;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            width: 100%
        }

        .ticket-card[_ngcontent-uuw-c80]:after,
        .ticket-card[_ngcontent-uuw-c80]:before {
            content: "";
            display: block;
            width: 24px;
            height: 24px;
            border-radius: 50px;
            position: absolute;
            background-color: #fff;
            z-index: 1;
            top: 39px
        }

        @media (min-width: 1200px) {

            .ticket-card[_ngcontent-uuw-c80]:after,
            .ticket-card[_ngcontent-uuw-c80]:before {
                width: 25px;
                height: 25px;
                top: 42px
            }
        }

        .ticket-card[_ngcontent-uuw-c80]:before {
            left: -12px
        }

        .ticket-card[_ngcontent-uuw-c80]:after {
            right: -12px
        }

        .ticket-card--sold-out[_ngcontent-uuw-c80] .ticket-card__name[_ngcontent-uuw-c80] {
            color: #939ca4
        }

        .ticket-card--sold-out[_ngcontent-uuw-c80] .ticket-card__amount[_ngcontent-uuw-c80] {
            background: #c4c9ce;
            color: #fff
        }

        .ticket-card--win[_ngcontent-uuw-c80] .ticket-card__content[_ngcontent-uuw-c80] {
            background: linear-gradient(to right, rgb(191, 134, 5) 0%, rgb(203, 164, 47) 12%, rgb(214, 180, 100) 29%, rgb(208, 175, 62) 54%, rgb(202, 185, 125) 76%, rgb(199, 170, 88) 87%, rgb(191, 134, 5) 100%)
        }

        .ticket-card--win[_ngcontent-uuw-c80] .ticket-card__name[_ngcontent-uuw-c80] {
            color: #fff;
            font-weight: 600;
            margin-bottom: 14px
        }

        .ticket-card--win[_ngcontent-uuw-c80] .ticket-card__amount[_ngcontent-uuw-c80] {
            background-color: #f5f6f7;
            color: #cfb260
        }

        .ticket-card--loss[_ngcontent-uuw-c80] .ticket-card__content[_ngcontent-uuw-c80] {
            background: linear-gradient(0deg, #E6E9ED, #E6E9ED), #FFFFFF
        }

        .ticket-card--loss[_ngcontent-uuw-c80] .ticket-card__name[_ngcontent-uuw-c80] {
            color: #939ca4;
            font-weight: 600;
            margin-bottom: 14px
        }

        .ticket-card--loss[_ngcontent-uuw-c80] .ticket-card__amount[_ngcontent-uuw-c80] {
            background-color: #f5f6f7;
            color: #939ca4
        }

        .ticket-card__badge[_ngcontent-uuw-c80] {
            width: 100%;
            -webkit-justify-content: center;
            justify-content: center;
            font-weight: 600;
            font-size: 10px;
            line-height: 1;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            height: 23px;
            color: #939ca4
        }

        .ticket-card__name[_ngcontent-uuw-c80] {
            text-align: center;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.3;
            letter-spacing: -.01em;
            color: #00131f;
            min-height: 44px;
            -webkit-align-items: center;
            align-items: center;
            display: -webkit-flex;
            display: flex;
            margin-bottom: 7px
        }

        .ticket-card__content[_ngcontent-uuw-c80] {
            background: #f5f6f7;
            height: 78px;
            width: 100%;
            padding: 0 20px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .ticket-card__amount[_ngcontent-uuw-c80] {
            background: #f37022;
            color: rgba(255, 255, 255, .6);
            font-weight: 600;
            font-size: 16px;
            height: 32px;
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

    </style>
    <style>
        [button=facebook][_nghost-uuw-c83],
        [button=facebook] [_nghost-uuw-c83] {
            --button-color: #4267B2
        }

        [button=twitter][_nghost-uuw-c83],
        [button=twitter] [_nghost-uuw-c83] {
            --button-color: #00acee
        }

        [button=google][_nghost-uuw-c83],
        [button=google] [_nghost-uuw-c83] {
            --button-color: #db4437
        }

        [button=mix][_nghost-uuw-c83],
        [button=mix] [_nghost-uuw-c83] {
            --button-color: #ff8226
        }

        [button=line][_nghost-uuw-c83],
        [button=line] [_nghost-uuw-c83] {
            --button-color: #00b900
        }

        [button=linkedin][_nghost-uuw-c83],
        [button=linkedin] [_nghost-uuw-c83] {
            --button-color: #006fa6
        }

        [button=pinterest][_nghost-uuw-c83],
        [button=pinterest] [_nghost-uuw-c83] {
            --button-color: #bd081c
        }

        [button=reddit][_nghost-uuw-c83],
        [button=reddit] [_nghost-uuw-c83] {
            --button-color: #ff4006
        }

        [button=tumblr][_nghost-uuw-c83],
        [button=tumblr] [_nghost-uuw-c83] {
            --button-color: #36465d
        }

        [button=whatsapp][_nghost-uuw-c83],
        [button=whatsapp] [_nghost-uuw-c83] {
            --button-color: #25d366
        }

        [button=messenger][_nghost-uuw-c83],
        [button=messenger] [_nghost-uuw-c83] {
            --button-color: #0080FF
        }

        [button=telegram][_nghost-uuw-c83],
        [button=telegram] [_nghost-uuw-c83] {
            --button-color: #0088cc
        }

        [button=xing][_nghost-uuw-c83],
        [button=xing] [_nghost-uuw-c83] {
            --button-color: #006567
        }

        [button=sms][_nghost-uuw-c83],
        [button=sms] [_nghost-uuw-c83] {
            --button-color: #20c16c
        }

        [button=email][_nghost-uuw-c83],
        [button=email] [_nghost-uuw-c83] {
            --button-color: #FF961C
        }

        [button=viber][_nghost-uuw-c83],
        [button=viber] [_nghost-uuw-c83] {
            --button-color: #665ca7
        }

        [button=vk][_nghost-uuw-c83],
        [button=vk] [_nghost-uuw-c83] {
            --button-color: #4C75A3
        }

        [button=copy][_nghost-uuw-c83],
        [button=copy] [_nghost-uuw-c83] {
            --button-color: #607D8B
        }

        [button=print][_nghost-uuw-c83],
        [button=print] [_nghost-uuw-c83] {
            --button-color: #765AA2
        }

        [button=expand][_nghost-uuw-c83],
        [button=expand] [_nghost-uuw-c83] {
            --button-color: #FF6651
        }

        button[_ngcontent-uuw-c83] {
            cursor: pointer;
            position: relative;
            outline: 0;
            -webkit-print-color-adjust: exact;
            margin: .3125em;
            margin: var(--sb-margin, .3125em);
            padding: 0;
            padding: var(--sb-padding, 0);
            min-width: 4.125em;
            min-width: var(--sb-min-width, 4.125em);
            height: 2.5em;
            height: var(--sb-height, 2.5em);
            color: #fff;
            color: var(--sb-color, #fff);
            background: var(--sb-background);
            font-size: 13px;
            font-size: var(--sb-font-size, 13px);
            line-height: 2.571em;
            line-height: var(--sb-line-height, 2.571em);
            border: var(--sb-border);
            border-radius: var(--sb-border-radius);
            transition: var(--sb-transition);
            box-shadow: var(--sb-box-shadow);
            text-shadow: var(--sb-text-shadow);
            overflow: var(--sb-overflow)
        }

        .sb-icon[_ngcontent-uuw-c83],
        .sb-text[_ngcontent-uuw-c83] {
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .sb-content[_ngcontent-uuw-c83] {
            flex: 1;
            display: flex;
            height: 100%;
            width: 100%;
            position: relative
        }

        .sb-text[_ngcontent-uuw-c83] {
            flex: 1;
            height: 100%;
            white-space: nowrap;
            padding: 0 .7em;
            padding: var(--sb-text-padding, 0 .7em);
            font-weight: 700;
            font-weight: var(--sb-font-weight, bold)
        }

        .sb-icon[_ngcontent-uuw-c83] {
            text-align: center;
            width: 100%;
            height: 100%;
            min-width: 2em;
            font-size: 1.2em;
            font-size: var(--sb-icon-size, 1.2em)
        }

    </style>
    <style>
        swiper {
            display: block
        }

    </style>
</head>
@endsection

@section('content')
<div _ngcontent-uuw-c13="" class="website-p7ds">
    <div _ngcontent-uuw-c13="">
        <div _ngcontent-uuw-c13="">
            <router-outlet _ngcontent-uuw-c13=""></router-outlet>
            <app-home _nghost-uuw-c76="" class="ng-star-inserted">
                <app-header _ngcontent-uuw-c76="" _nghost-uuw-c63="">
                    <div _ngcontent-uuw-c63="" class="header-placeholder"></div>
                    <!---->
                    <div _ngcontent-uuw-c63="" class="header-container">
                        <app-install-prompt _ngcontent-uuw-c63="" _nghost-uuw-c62="" class="ng-tns-c62-0 ng-star-inserted">
                            <!---->
                        </app-install-prompt>
                        <!---->
                        <header _ngcontent-uuw-c63="" class="header"><a _ngcontent-uuw-c63="" routerlink="/" title="Go to homepage" class="logo header__logo" href="/"><img _ngcontent-uuw-c63="" src="/assets/svg/logo.svg" alt="7days Performance" class="logo__img"></a>
                            <nav _ngcontent-uuw-c63="" class="header__nav">
                                <ul _ngcontent-uuw-c63="" class="main-nav">
                                    <li _ngcontent-uuw-c63="" class="main-nav__item"><a _ngcontent-uuw-c63="" routerlink="/current-competitions" title="" class="main-nav__link" href="/current-competitions">Cars and Bikes</a></li>
                                    <li _ngcontent-uuw-c63="" class="main-nav__item"><a _ngcontent-uuw-c63="" routerlink="/current-tech-competitions" title="" class="main-nav__link" href="/current-tech-competitions">Tech and Luxury</a></li>
                                    <li _ngcontent-uuw-c63="" class="main-nav__item"><a _ngcontent-uuw-c63="" routerlink="/cash-competitions" title="" class="main-nav__link" href="/cash-competitions">Tax Free Cash</a></li>
                                    <li _ngcontent-uuw-c63="" class="main-nav__item"><a _ngcontent-uuw-c63="" routerlink="/competition-winners/featured" title="" class="main-nav__link" href="/competition-winners/featured">Winners</a></li>
                                    <li _ngcontent-uuw-c63="" class="main-nav__item"><a _ngcontent-uuw-c63="" routerlink="/draw-results" title="" class="main-nav__link" href="/draw-results">Draw Results</a></li>
                                    <li _ngcontent-uuw-c63="" class="main-nav__item"><a _ngcontent-uuw-c63="" routerlink="/faq" title="" class="main-nav__link" href="/faq">FAQ</a></li>
                                </ul><button _ngcontent-uuw-c63="" class="header__button header__button_sm nav-button">
                                    <svg-icon _ngcontent-uuw-c63="" name="hamburger-new" class="nav-button__icon nav-button__icon_hamburger" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M19.167 9.166H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667zM19.167 3.334H.833a.833.833 0 000 1.667h18.334a.833.833 0 000-1.667zM19.167 15H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </button><a _ngcontent-uuw-c63="" routerlink="/cart" class="header__button nav-button" href="/cart"><span _ngcontent-uuw-c63="" class="nav-button__label ng-star-inserted">0</span>
                                    <!---->
                                    <!---->
                                    <svg-icon _ngcontent-uuw-c63="" name="cart-new" class="nav-button__icon nav-button__icon_shopping-cart" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27758)" fill="#00131F">
                                                <path d="M18.927 3.397a2.494 2.494 0 00-1.919-.897H3.535L3.5 2.208A2.5 2.5 0 001.018 0H.833a.833.833 0 000 1.667h.185a.833.833 0 01.828.735l1.147 9.75a4.167 4.167 0 004.138 3.681h8.702a.834.834 0 000-1.666H7.131A2.5 2.5 0 014.78 12.5h9.933a4.166 4.166 0 004.101-3.428l.654-3.628a2.495 2.495 0 00-.542-2.046zm-1.094 1.751l-.655 3.629a2.5 2.5 0 01-2.464 2.056H4.516l-.784-6.666h13.276a.833.833 0 01.825.981zM5.833 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333zM14.167 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27758">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-uuw-c63="" routerlink="/my-account" class="header__button nav-button" href="/my-account">
                                    <svg-icon _ngcontent-uuw-c63="" name="profile-new" class="nav-button__icon nav-button__icon_account" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
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
                        <div _ngcontent-uuw-c63="" class="mobile-menu"><button _ngcontent-uuw-c63="" class="mobile-menu__close">
                                <svg-icon _ngcontent-uuw-c63="" name="close-7-d" class="mobile-menu__close-icon" _nghost-uuw-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M17.692 15.713L8.288 6.308a1.05 1.05 0 00-1.485 0l-.495.495a1.05 1.05 0 000 1.484l9.404 9.405c.41.41 1.075.41 1.485 0l.495-.494c.41-.41.41-1.075 0-1.485z"></path>
                                        <path d="M15.712 6.308l-9.404 9.405a1.05 1.05 0 000 1.485l.494.494c.41.41 1.076.41 1.485 0l4.703-4.702 4.702-4.702a1.05 1.05 0 000-1.485l-.495-.495a1.05 1.05 0 00-1.485 0z"></path>
                                    </svg></svg-icon>
                            </button>
                            <aside _ngcontent-uuw-c63="" class="mobile-menu__panel">
                                <nav _ngcontent-uuw-c63="" class="mobile-menu__nav">
                                    <ul _ngcontent-uuw-c63="" class="mobile-menu__nav-list">
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><span _ngcontent-uuw-c63="" class="mobile-menu__title"> Competitions</span></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/current-competitions" title="" class="mobile-menu__link" href="/current-competitions">Cars &amp; Bikes</a></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/current-tech-competitions" title="" class="mobile-menu__link" href="/current-tech-competitions">Tech &amp; Luxury</a></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/cash-competitions" title="" class="mobile-menu__link" href="/cash-competitions">Cash</a></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/instant-wins" title="" class="mobile-menu__link" href="/instant-wins"> Instant Wins</a></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><span _ngcontent-uuw-c63="" class="mobile-menu__divider"></span></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/competition-winners/featured" title="" class="mobile-menu__link" href="/competition-winners/featured">Winners</a></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/draw-results" title="" class="mobile-menu__link" href="/draw-results">Draw Results</a></li>
                                        <li _ngcontent-uuw-c63="" class="mobile-menu__item"><a _ngcontent-uuw-c63="" routerlink="/faq" title="" class="mobile-menu__link" href="/faq">FAQ</a></li>
                                    </ul>
                                </nav>
                                <div _ngcontent-uuw-c63="" class="mobile-menu__bottom-wrapper">
                                    <p _ngcontent-uuw-c63="" class="mobile-menu__text">7days Social</p>
                                    <div _ngcontent-uuw-c63="" class="mobile-menu__socials"><a _ngcontent-uuw-c63="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-uuw-c63="" name="facebook-7-d" class="mobile-menu__social-icon" _nghost-uuw-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                    <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a><a _ngcontent-uuw-c63="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-uuw-c63="" name="instagram-full" class="mobile-menu__social-icon" _nghost-uuw-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
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
                
                <app-top-availability-message _ngcontent-uuw-c76="" _nghost-uuw-c66="">
                    <!---->
                </app-top-availability-message>
                
                <app-home-slider _ngcontent-uuw-c76="" autoplaytimer="8000" _nghost-uuw-c73="">
                    <section _ngcontent-uuw-c73="" class="hero-slider ng-star-inserted">
                        <div _ngcontent-uuw-c73="" class="slider">
                            <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                            <button _ngcontent-uuw-c73="" class="slider__button slider__button_prev ng-star-inserted">
                                <svg-icon _ngcontent-uuw-c73="" name="arrow-left-7-d" class="slider__icon" _nghost-uuw-c61="" role="img">
                                    <svg viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z"></path>
                                    </svg>
                                </svg-icon>
                            </button>
                            <!---->
                            <div _ngcontent-uuw-c73="" class="slider__wrapper">
                                <a _ngcontent-uuw-c73="" class="slide ng-star-inserted" href="https://7daysperformance.co.uk/product/win-g80-m3-comp-1000cash?from=home-hero">
                                    <div _ngcontent-uuw-c73="" class="slide__content">
                                        <div _ngcontent-uuw-c73="" class="slide__image ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/herosection/0033/34/57b924623041ea9df0738ab16c49104f6b07a88b.jpg&quot;);">
                                            <div _ngcontent-uuw-c73="" class="slide__overlay"></div>
                                        </div>

                                        <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                                        <div _ngcontent-uuw-c73="" class="slide__texts">
                                            <h2 _ngcontent-uuw-c73="" class="slide__title ng-star-inserted"> Win This BMW G80 M3 </h2>
                                            <!---->
                                            <h3 _ngcontent-uuw-c73="" class="slide__subtitle ng-star-inserted"> DRAW TONIGHT 8PM </h3>
                                            <!---->
                                            <div _ngcontent-uuw-c73="" class="slider__enter-btn">
                                                <button _ngcontent-uuw-c73="" class="d-flex align-items-center justify-content-center"><span _ngcontent-uuw-c73="">Enter now</span>
                                                    <svg-icon _ngcontent-uuw-c73="" name="ticket-small" _nghost-uuw-c61="" role="img">
                                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                            <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                            <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                            <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                        </svg>
                                                    </svg-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a _ngcontent-uuw-c73="" class="slide ng-star-inserted" href="https://7daysperformance.co.uk/product/win-30-000-tax-free-cash?from=home-hero">
                                    <div _ngcontent-uuw-c73="" class="slide__content">
                                        <div _ngcontent-uuw-c73="" class="slide__image ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/herosection/0033/34/5b24f8de2b9f3a7172bc8ee297ec7c8a4ac08ff3.jpg&quot;);">
                                            <div _ngcontent-uuw-c73="" class="slide__overlay"></div>
                                        </div>

                                        <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                                        <div _ngcontent-uuw-c73="" class="slide__texts">
                                            <!---->
                                            <h3 _ngcontent-uuw-c73="" class="slide__subtitle ng-star-inserted"> DRAW TONIGHT 8PM </h3>
                                            <!---->
                                            <div _ngcontent-uuw-c73="" class="slider__enter-btn">
                                                <button _ngcontent-uuw-c73="" class="d-flex align-items-center justify-content-center">
                                                    <span _ngcontent-uuw-c73="">Enter now</span>
                                                    <svg-icon _ngcontent-uuw-c73="" name="ticket-small" _nghost-uuw-c61="" role="img">
                                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                            <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                            <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                            <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                        </svg>
                                                    </svg-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a _ngcontent-uuw-c73="" class="slide ng-star-inserted" href="https://7daysperformance.co.uk/product/win-urban-defender-2000cash?from=home-hero">
                                    <div _ngcontent-uuw-c73="" class="slide__content">
                                        <div _ngcontent-uuw-c73="" class="slide__image ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/herosection/0033/34/bb6001d9b1f65abb7b771517fd420d0bee6f2641.jpg&quot;);">
                                            <div _ngcontent-uuw-c73="" class="slide__overlay"></div>
                                        </div>

                                        <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                                        <div _ngcontent-uuw-c73="" class="slide__texts">
                                            <h2 _ngcontent-uuw-c73="" class="slide__title ng-star-inserted"> Win This Urban V8 Defender </h2>
                                            <!---->
                                            <h3 _ngcontent-uuw-c73="" class="slide__subtitle ng-star-inserted"> DRAW SUNDAY 8PM </h3>
                                            <!---->
                                            <div _ngcontent-uuw-c73="" class="slider__enter-btn">
                                                <button _ngcontent-uuw-c73="" class="d-flex align-items-center justify-content-center">
                                                    <span _ngcontent-uuw-c73="">Enter now</span>
                                                    <svg-icon _ngcontent-uuw-c73="" name="ticket-small" _nghost-uuw-c61="" role="img">
                                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                            <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                            <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                            <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                        </svg>
                                                    </svg-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a _ngcontent-uuw-c73="" class="slide ng-star-inserted" href="https://7daysperformance.co.uk/product/win-stage-2-m4-comp-1000cash?from=home-hero">
                                    <div _ngcontent-uuw-c73="" class="slide__content">
                                        <div _ngcontent-uuw-c73="" class="slide__image ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/herosection/0033/34/bb9108958253e34112dda97621b7a188700b7de4.jpg&quot;);">
                                            <div _ngcontent-uuw-c73="" class="slide__overlay"></div>
                                        </div>
                                        <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                                        <div _ngcontent-uuw-c73="" class="slide__texts">
                                            <h2 _ngcontent-uuw-c73="" class="slide__title ng-star-inserted"> Win This Stage 2 M4 Comp </h2>
                                            <!---->
                                            <h3 _ngcontent-uuw-c73="" class="slide__subtitle ng-star-inserted"> DRAW SUNDAY 8PM </h3>
                                            <!---->
                                            <div _ngcontent-uuw-c73="" class="slider__enter-btn">
                                                <button _ngcontent-uuw-c73="" class="d-flex align-items-center justify-content-center">
                                                    <span _ngcontent-uuw-c73="">Enter now</span>
                                                    <svg-icon _ngcontent-uuw-c73="" name="ticket-small" _nghost-uuw-c61="" role="img">
                                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                            <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                            <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                            <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                        </svg>
                                                    </svg-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a _ngcontent-uuw-c73="" class="slide ng-star-inserted" href="https://7daysperformance.co.uk/product/win-pepsi-rolex-gmt-master-ii?from=home-hero">
                                    <div _ngcontent-uuw-c73="" class="slide__content">
                                        <div _ngcontent-uuw-c73="" class="slide__image ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/herosection/0033/34/9a90d8d00904ce4bbf74a5d26299749c451c4f6a.jpg&quot;);">
                                            <div _ngcontent-uuw-c73="" class="slide__overlay"></div>
                                        </div>

                                        <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                                        <div _ngcontent-uuw-c73="" class="slide__texts">
                                            <h2 _ngcontent-uuw-c73="" class="slide__title ng-star-inserted"> Win This Rolex Pepsi </h2>
                                            <!---->
                                            <h3 _ngcontent-uuw-c73="" class="slide__subtitle ng-star-inserted"> DRAW SUNDAY 8PM </h3>
                                            <!---->
                                            <div _ngcontent-uuw-c73="" class="slider__enter-btn">
                                                <button _ngcontent-uuw-c73="" class="d-flex align-items-center justify-content-center">
                                                    <span _ngcontent-uuw-c73="">Enter now</span>
                                                    <svg-icon _ngcontent-uuw-c73="" name="ticket-small" _nghost-uuw-c61="" role="img">
                                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                            <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                            <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                            <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                        </svg>
                                                    </svg-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a _ngcontent-uuw-c73="" class="slide ng-star-inserted slide_active" href="https://7daysperformance.co.uk/instant-wins">
                                    <div _ngcontent-uuw-c73="" class="slide__content">
                                        <div _ngcontent-uuw-c73="" class="slide__image ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/herosection/0033/33/e36c1b355599615ca98c7a8a321f6334a03bc144.jpg&quot;);">
                                            <div _ngcontent-uuw-c73="" class="slide__overlay"></div>
                                        </div>

                                        <div _ngcontent-uuw-c73="" class="slide__gradient d-lg-none"></div>
                                        <div _ngcontent-uuw-c73="" class="slide__texts">
                                            <!---->
                                            <h3 _ngcontent-uuw-c73="" class="slide__subtitle ng-star-inserted"> WIN INSTANTLY NOW </h3>
                                            <!---->
                                            <div _ngcontent-uuw-c73="" class="slider__enter-btn">
                                                <button _ngcontent-uuw-c73="" class="d-flex align-items-center justify-content-center"><span _ngcontent-uuw-c73="">Enter now</span>
                                                    <svg-icon _ngcontent-uuw-c73="" name="ticket-small" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                            <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                            <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                            <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                        </svg>
                                                    </svg-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <button _ngcontent-uuw-c73="" class="slider__button slider__button_next ng-star-inserted">
                                <svg-icon _ngcontent-uuw-c73="" name="arrow-left-7-d" class="slider__icon" _nghost-uuw-c61="" role="img">
                                    <svg viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z"></path>
                                    </svg>
                                </svg-icon>
                            </button>
                            <!---->
                        </div>
                        <div _ngcontent-uuw-c73="" class="slider__button-spacer"></div>
                    </section>
                    <!---->
                    <!---->
                    <div _ngcontent-uuw-c73="" class="info-bar">
                        <div _ngcontent-uuw-c73="" class="info-bar__counters">
                            <div _ngcontent-uuw-c73="" class="info-bar__counter">
                                <div _ngcontent-uuw-c73="" class="info-bar__icon">
                                    <svg-icon _ngcontent-uuw-c73="" name="winner" class="info-bar__icon-svg" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 38" style="fill: currentcolor;">
                                            <path d="M28.064 30.157h1.5v-1.5h-1.5v1.5zm-19.19 0v-1.5h-1.5v1.5h1.5zm7.587-8.48h1.5v-.927l-.83-.414-.67 1.342zM8.428 2.488v-1.5h-1.5v1.5h1.5zm20.082 0h1.5v-1.5h-1.5v1.5zm-8.032 19.19l-1.026-1.094-.474.445v.65h1.5zM2.18 5.166v-1.5H.793L.685 5.05l1.495.116zm8.48 11.415l1.225-.864-1.225.864zM35.205 5.165l1.496-.105-.098-1.395h-1.398v1.5zM8.875 37.012h19.19v-3H8.874v3zm20.69-1.5v-5.355h-3v5.355h3zm-22.19-5.355v5.355h3v-5.355h-3zm9.086-1.5H8.874v3h7.587v-3zm1.5 1.5v-8.48h-3v8.48h3zM8.428 3.987H28.51v-3H8.428v3zm19.636 24.67h-7.586v3h7.586v-3zm-7.586 0H16.46v3h4.017v-3zm-1.5-6.98v8.48h3v-8.48h-3zm-9.05-11.602v-.013-.013-.012-.013-.013V10v-.013-.013-.012-.013-.012-.013-.012-.013-.012-.013-.012-.013-.012-.013-.012-.013-.012-.012-.013-.012-.012-.013-.012V9.7v-.013-.012-.012-.012-.013-.012-.012-.012-.012-.013-.012-.012-.012-.012-.012-.012-.013-.012-.012-.012-.012-.012-.012-.012-.012-.012-.012-.012-.012-.011-.012-.012V9.3v-.012-.012-.012-.012-.011-.012-.012-.012-.011-.012-.012-.012-.011-.012-.012-.012-.011-.012-.011-.012-.012-.011-.012-.011-.012-.012-.011-.012-.011-.012-.011-.012-.011-.012-.011-.011-.012-.011-.012-.011-.011-.012-.011-.011-.012-.011-.011-.012-.01-.012-.011V8.7v-.01-.012-.011-.011-.011-.012-.01-.012V8.6v-.011-.011-.011-.011-.011-.011-.011-.011V8.5 8.49v-.011-.011-.011-.011-.011-.011-.011-.01-.012-.01-.012-.01-.011-.011-.01-.012-.01-.011-.01-.012-.01-.011-.01-.012-.01-.01-.012-.01-.01-.011-.011-.01-.011-.01-.011-.01-.011-.011-.01-.011-.01-.011-.01-.01-.011-.01-.011-.01-.011-.01-.01-.011-.01-.01-.011-.01-.01-.011-.01-.01-.01-.011-.01-.01-.01-.01-.011-.01-.01-.01-.01-.01-.01-.01V7.7v-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.009-.01-.01-.01-.01-.009-.01-.01-.01-.009-.01-.01-.01-.009-.01-.01-.009-.01-.009-.01-.01-.009-.01-.009-.01-.009-.01-.01-.009-.009-.01-.009-.01-.009-.01-.009-.01-.009-.009-.01-.009-.01-.008-.01-.01-.008-.01-.009-.01-.009-.009-.009-.01-.008-.01-.009-.01-.008-.01-.009-.009-.009-.009-.009-.01-.008-.01-.008-.01-.008-.01-.008-.01-.008-.01-.008-.01-.008-.01-.008-.009-.009-.009-.009-.009-.008-.01-.008-.009-.009-.009-.008-.01-.008-.009-.008-.01-.008-.009-.008-.009-.009-.008-.009-.009-.008-.009-.008-.009-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.008-.009-.008-.009-.008-.008-.009-.008-.008-.009-.008-.008-.008-.009-.008-.008-.008-.009-.008-.008-.008-.008-.009-.008-.008-.008-.008-.008-.008-.009-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.007-.008-.008-.008-.008-.008-.008-.007-.008-.008-.008-.008-.007-.008-.008-.008-.007-.008-.008-.008-.007-.008-.008V5.8 5.79v-.008-.007-.008-.007-.008-.008-.007-.008-.007-.008-.007V5.7v-.007-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.007-.008-.007-.008-.007-.007-.008-.007-.007-.008-.007-.007-.007-.008-.007-.007-.007-.008-.007-.007-.007-.007-.008-.007-.007-.007-.007-.007-.007V5.4v-.007-.008-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.006-.007-.007-.007-.007-.007-.007-.007-.006-.007-.007-.007V5.2v-.007-.006-.007-.007-.007h-3V10.075h3zm0-4.91v-.01-.012-.01-.012-.01V5.1v-.011-.011-.01-.012-.01-.011-.01-.012-.01-.01-.011-.011-.01-.011-.01-.011-.01-.01-.011-.01-.011-.01-.01-.01-.011-.01-.01-.01-.01-.01-.01-.01-.011-.01-.01-.01-.01-.01-.01-.01-.01-.009-.01-.01-.01-.009-.01-.01-.009-.01-.009-.01-.009-.01-.009-.01-.009-.009-.01-.009-.009-.01-.009-.009-.009-.01-.008-.01-.008-.01-.009-.009-.009-.009-.009-.008-.01-.008-.01-.008-.009-.008-.01-.008-.009-.008-.009-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.008-.009-.008-.008-.009-.008-.008V4.1v-.009-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.007-.008-.008-.008-.007-.008-.008-.007-.008-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.007-.008-.007-.007-.008-.007-.007-.007-.008-.007-.007-.007-.007-.007-.007-.007-.007-.007V3.7v-.007-.007-.007-.007-.007-.006-.007-.007-.007-.007-.006-.007-.007-.006-.007-.006-.007-.007-.006-.007-.006-.007-.006-.006-.007-.006-.006-.007-.006-.006-.007-.006-.006-.006-.006-.007-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.005-.006-.006-.006-.006-.005-.006-.006-.005-.006-.006-.005-.006-.005V3.3v-.005-.006-.005-.006-.005-.006-.005-.006-.005-.005-.006-.005-.005-.005-.006-.005-.005-.005V3.2v-.005-.005-.006-.005-.005-.005-.005-.005-.005-.005-.004-.005-.005-.005-.005-.005-.005-.004-.005V3.1v-.005-.004-.005-.005-.004-.005-.004-.005-.005-.004-.005-.004-.005-.004-.004-.005-.004-.005-.004-.004-.005-.004-.004-.004-.005-.004-.004-.004-.004-.005-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.003-.004-.004V2.9v-.004-.004-.003-.004-.004-.003-.004-.004-.003-.004-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.003-.004-.003-.003-.004-.003-.003-.004-.003-.003-.003-.003-.004-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.002-.003-.003-.003-.003-.002-.003-.003-.002V2.7v-.003-.002-.003-.003-.002-.003-.002-.003-.002-.003-.002-.003-.002-.003-.002-.003-.002-.002-.003-.002-.002-.003-.002-.002-.003-.002-.002-.002-.002-.003-.002-.002-.002-.002-.002-.002-.002-.002-.002-.002-.002-.002-.002V2.6v-.002-.002-.002-.002-.002-.001-.002-.002-.002-.002-.001-.002-.002-.002-.001-.002-.002-.001-.002-.002-.001-.002-.001-.002-.001-.002-.001-.002-.001-.002-.001-.002-.001-.002-.001-.001-.002-.001-.001-.002-.002-.001-.002-.001-.001-.001-.002-.002-.001-.001-.001-.001-.001-.002-.002-.002-.002-.001-.001-.001-.001-.001-.001-.002V2.5 2.5v-.001-.002-.001-.001-.001-.001-.001-.001-.002-.001h-3V5.166h3zm-1.5-1.5H2.18v3h6.248v-3zm8.704 16.671c-1.494-.747-3.673-2.389-5.247-4.62l-2.451 1.729c1.88 2.668 4.455 4.623 6.356 5.574l1.342-2.683zm-5.247-4.62c-1.173-1.665-1.957-3.58-1.957-5.641h-3c0 2.842 1.08 5.35 2.506 7.37l2.451-1.73zM.685 5.049c-.163 2.083.093 5.237 1.477 7.935C3.6 15.787 6.267 18.08 10.66 18.08v-3c-3.106 0-4.826-1.511-5.828-3.465-1.056-2.058-1.29-4.612-1.156-6.333L.685 5.05zM27.01 2.488V5.165h3v-.007-.008-.007-.008-.008-.007-.008-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.008-.007-.007-.008-.007-.008-.007-.007-.008-.007-.007-.008-.007-.007-.008-.007-.007-.007-.008-.007-.007-.007-.008-.007-.007-.007-.008-.007-.007-.007-.007-.007-.008-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.008-.007-.007-.007-.007-.007-.006-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.007-.006-.007-.007-.007-.007-.007-.006-.007-.007-.007-.007-.006-.007-.007-.006-.007-.007-.007-.006-.007-.007-.006-.007-.007-.006-.007-.007-.006-.007-.006-.007-.007-.006-.007-.006-.007-.006-.007-.006-.007-.006-.007-.006-.007-.006-.007-.006-.006V4.2v-.006-.007-.006-.006-.007-.006-.007-.006-.006-.007-.006-.006-.006-.007-.006V4.1v-.007-.006-.006-.006-.006-.007-.006-.006-.006-.006-.007-.006-.006-.006-.006V4v-.006-.006-.007-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.006-.005-.006-.006-.006-.006-.006-.006-.006-.005-.006-.006-.006-.006-.005-.006-.006-.006-.005-.006-.006-.006-.005-.006-.006-.005-.006-.006-.005-.006-.006-.005-.006-.005-.006-.006-.005-.006-.005-.006-.005-.006-.005-.006-.005-.006-.005-.006-.005-.006-.005-.006-.005-.005-.006-.005-.006-.005-.005-.006-.005-.005-.006-.005-.005-.006-.005V3.5v-.005-.006-.005-.005-.005-.006-.005-.005-.005-.005-.005-.006-.005-.005-.005-.005-.005-.005-.005-.005-.005-.006-.005-.005-.005-.005-.005-.005-.005-.005-.005-.005-.004-.005-.005-.005-.005-.005-.005-.005-.005-.004-.005-.005-.005-.005-.005-.004-.005-.005-.005-.004-.005-.005-.005-.004-.005-.005-.004-.005-.005-.004-.005-.005-.004-.005-.005-.004-.005-.004-.005-.004-.005-.004-.005-.005-.004-.005-.004-.004-.005-.004-.005-.004-.005-.004-.005-.004-.004-.005-.004-.004-.005-.004-.004-.005-.004-.004-.005-.004-.004-.004-.005-.004-.004-.004-.004-.005-.004-.004-.004-.004-.004-.004-.005-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004-.004V2.9v-.004-.004-.004-.004-.004-.004-.003-.004-.004-.004-.004-.004-.004-.003-.004-.004-.004-.004-.003-.004-.004-.004-.003-.004-.004-.003-.004-.004-.003-.004-.004-.003-.004-.003-.004-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.004-.003-.003-.004-.003-.004-.003-.003-.004-.003-.003-.003-.004-.003-.003-.004-.003-.003-.003-.003-.004-.003-.003-.003-.003-.004-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.004-.003-.003-.003-.003-.003-.002-.003-.003-.003-.003-.003-.003-.003-.003-.003-.003-.002-.003-.003-.003-.003-.003-.002-.003-.003-.003-.002-.003-.003-.003-.002V2.5v-.003-.002-.003-.003-.002h-3zm0 2.677V10.074h3v-.011-.011-.012-.011-.012-.011-.011-.012-.011-.012-.011-.011-.012-.011-.011-.012-.011-.011-.012-.011-.011-.012-.01-.012-.011-.012-.011-.011-.012-.01-.012-.011V9.7v-.012-.01-.012-.011-.011-.012-.01-.012V9.6v-.011-.011-.012-.01-.012-.011-.011-.011V9.5v-.011-.012-.01-.012-.01-.012-.01-.012V9.4v-.011-.011-.011-.011-.011-.011-.011-.011V9.3 9.29v-.011-.01-.012-.01-.012-.01-.012-.01-.011-.011-.011-.011-.011-.01-.012-.01-.012-.01-.011-.011-.01-.012-.01-.011-.011-.01-.012-.01-.011-.011-.01-.012-.01-.011-.01V8.9v-.011-.01-.012-.01-.011-.01-.011-.011-.01-.011-.011-.01-.011-.01-.012-.01-.01-.011-.01-.012-.01-.01-.011-.01-.011-.01-.011-.01-.011-.011-.01-.011-.01-.011-.01-.01-.011-.01-.011-.01-.011-.01-.011-.01-.01-.011-.01-.011-.01-.01-.011-.01-.01-.011-.01-.01V8.3v-.01-.01-.011-.01-.01-.01-.011-.01-.01-.011-.01-.01-.01-.01-.011-.01-.01-.01-.01-.011-.01-.01-.01-.01-.01-.011-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.011-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.01-.009-.01-.01-.01-.01-.01-.01-.009-.01-.01-.01-.01-.009-.01-.01-.01-.009-.01-.01-.01-.009-.01-.01-.009-.01-.01-.01-.009-.01-.01-.009-.01-.009-.01-.01-.009-.01-.01-.009-.01-.009-.01-.009-.01-.009-.01-.01-.009-.01-.009-.01-.009-.01-.009-.01-.009-.009-.01-.009-.01-.009-.01-.009-.009-.01-.009-.01-.008-.01-.01-.008-.01-.01-.008-.01-.01-.008-.01-.009-.01-.009-.009V6.9v-.01-.008-.01-.009-.01-.008-.01-.009-.009-.01V6.8v-.01-.009-.009-.009-.009-.01-.008-.01-.008-.01-.009-.009-.009-.009-.009-.009-.009-.009-.009-.009-.009V6.6 6.59v-.009-.009-.009-.009-.009-.009-.009-.009-.008-.01-.008-.01-.008-.009-.009-.009-.008-.01-.008-.009-.009-.009-.008-.01-.008-.009-.009-.008-.009-.009-.009-.008-.009-.009-.008-.01-.008-.008-.01-.008-.008-.01-.008-.008-.009-.009-.008-.009-.008-.009-.009-.008-.009-.008-.009V6.1 6.09v-.008-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.009-.008-.008-.009-.008-.009-.008-.008-.009-.008-.008-.009-.008-.008-.009-.008-.008-.009-.008-.008-.009-.008-.008-.008-.008-.009-.008-.008-.008-.009-.008-.008-.008-.008-.008-.009-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.009-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.008-.007-.008-.008-.008-.008-.008-.008-.008-.008-.008-.007-.008-.008-.008-.008-.008-.007-.008-.008-.008-.008-.007-.008-.008-.008-.007-.008-.008-.007-.008-.008-.007-.008-.008-.007-.008-.008-.007-.008-.008-.007-.008-.007-.008-.008h-3zm1.5 1.5h6.694v-3h-6.694v3zm-1.5 3.41c0 2.381-.82 4.145-1.952 5.574l2.351 1.863c1.48-1.868 2.6-4.272 2.6-7.438h-3zm-1.952 5.574c-.817 1.03-1.802 1.894-2.804 2.688-.933.74-2.048 1.538-2.803 2.246l2.051 2.189c.64-.599 1.48-1.183 2.615-2.084 1.067-.845 2.263-1.877 3.292-3.176l-2.351-1.863zm8.65-10.378c.12 1.71-.151 4.255-1.274 6.31-1.065 1.95-2.9 3.5-6.2 3.5v3c4.517 0 7.301-2.257 8.834-5.062 1.475-2.702 1.78-5.864 1.632-7.959l-2.992.21zM8.874 34.012H.966v3h7.908v-3zm19.19 3h7.802v-3h-7.802v3z" fill="#192A36"></path>
                                            <path d="M18.688 6.95l1.606 2.254 2.639.83-1.647 2.223.025 2.767-2.623-.88-2.623.88.026-2.767-1.647-2.223 2.639-.83 1.605-2.253z" fill="#15D36E" stroke="#192A36" stroke-width="2.5"></path>
                                        </svg></svg-icon>
                                </div>
                                <div _ngcontent-uuw-c73="" class="info-bar__label">
                                    <div _ngcontent-uuw-c73="" class="info-bar__value ng-star-inserted">20863</div>
                                    <!---->
                                    <!---->
                                    <div _ngcontent-uuw-c73="" class="info-bar__help">Winners</div>
                                </div>
                            </div>
                            <div _ngcontent-uuw-c73="" class="info-bar__counter">
                                <div _ngcontent-uuw-c73="" class="info-bar__icon">
                                    <svg-icon _ngcontent-uuw-c73="" name="prize" class="info-bar__icon-svg" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" style="fill: currentcolor;">
                                            <path d="M9.688 2h1a7 7 0 017 7h-8V2zM25.689 2h-1a7 7 0 00-7 7h8V2zM14.688 9h6v25h-6z" fill="#15D36E"></path>
                                            <path fill="#fff" d="M30.689 17h-10v17h10zM14.688 17h-10v17h10zM33.689 17h-13v-7h13zM13.689 17h-13v-7h13z"></path>
                                            <path d="M4.688 17v-1.5h-1.5V17h1.5zm26 0h1.5v-1.5h-1.5V17zm0 17v1.5h1.5V34h-1.5zm-26 0h-1.5v1.5h1.5V34zm10-25V7.5h-1.5V9h1.5zm6 0h1.5V7.5h-1.5V9zm0 25v1.5h1.5V34h-1.5zm-6 0h-1.5v1.5h1.5V34zm-13-25V7.5h-1.5V9h1.5zm32 0h1.5V7.5h-1.5V9zm0 8v1.5h1.5V17h-1.5zm-32 0h-1.5v1.5h1.5V17zm8-15V.5h-1.5V2h1.5zm0 7h-1.5v1.5h1.5V9zm16-7h1.5V.5h-1.5V2zm0 7v1.5h1.5V9h-1.5zm-21 9.5h26v-3h-26v3zm24.5-1.5v17h3V17h-3zm1.5 15.5h-26v3h26v-3zM6.189 34V17h-3v17h3zm8.5-23.5h6v-3h-6v3zm4.5-1.5v25h3V9h-3zm1.5 23.5h-6v3h6v-3zm-4.5 1.5V9h-3v25h3zm-14.5-23.5h32v-3h-32v3zm30.5-1.5v8h3V9h-3zm1.5 6.5h-32v3h32v-3zM3.188 17V9h-3v8h3zm6.5-13.5h1v-3h-1v3zm8 4h-8v3h8v-3zm-6.5 1.5V2h-3v7h3zm-.5-5.5a5.5 5.5 0 015.5 5.5h3a8.5 8.5 0 00-8.5-8.5v3zm15-3h-1v3h1v-3zm-8 10h8v-3h-8v3zm9.5-1.5V2h-3v7h3zm-2.5-8.5a8.5 8.5 0 00-8.5 8.5h3a5.5 5.5 0 015.5-5.5v-3z" fill="#192A36"></path>
                                        </svg></svg-icon>
                                </div>
                                <div _ngcontent-uuw-c73="" class="info-bar__label">
                                    <div _ngcontent-uuw-c73="" class="info-bar__value ng-star-inserted">£49,700,120</div>
                                    <!---->
                                    <!---->
                                    <div _ngcontent-uuw-c73="" class="info-bar__help">Given in Prizes</div>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-uuw-c73="" class="info-bar__trust">
                            <div _ngcontent-uuw-c73="" class="info-bar__worldwide-inner">
                                <div _ngcontent-uuw-c73="" class="worldwide">
                                    <svg-icon _ngcontent-uuw-c73="" name="world-stroke" fill="none" class="worldwide__world" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: none;">
                                            <path d="M10 19a9 9 0 100-18 9 9 0 000 18z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M18.081 13.975l-5.09-3.131a.674.674 0 00-.29-.104l-2.148-.29a.732.732 0 00-.778.44L8.491 13.77a.75.75 0 00.131.815l1.763 1.903a.77.77 0 01.187.657L10.206 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M4.094 3.212L3.25 5.2a.75.75 0 00-.009.553l1.078 2.869a.74.74 0 00.544.478l2.006.431a.731.731 0 01.516.403l.356.74a.768.768 0 00.675.423h1.266" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12.298 1.29l.872 1.576a.76.76 0 01-.15.918l-2.522 2.279a.675.675 0 01-.14.103l-1.154.637a.806.806 0 01-.356.094H6.842a.76.76 0 00-.694.46L5.37 9.202" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></svg-icon><span _ngcontent-uuw-c73="" class="worldwide__label"> Worldwide shipping </span><span _ngcontent-uuw-c73="" class="worldwide__info-holder">
                                        <svg-icon _ngcontent-uuw-c73="" name="info-icon" fill="none" class="worldwide__info" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" style="fill: none;">
                                                <path d="M8 14A6 6 0 108 2a6 6 0 000 12z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M7.5 7.5H8V11h.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M7.875 6a.75.75 0 100-1.5.75.75 0 000 1.5z" fill="currentColor"></path>
                                            </svg></svg-icon>
                                    </span>
                                </div>
                                <div _ngcontent-uuw-c73="" class="worldwide__label2">Read <a _ngcontent-uuw-c73="" routerlink="/worldwide-shipping" href="/worldwide-shipping"><b _ngcontent-uuw-c73="">Shipping rules</b></a></div>
                            </div>
                            <div _ngcontent-uuw-c73="" class="d-lg-none info-bar__trustpilot-mobile d-none">
                                <app-trustpilot _ngcontent-uuw-c73="" _nghost-uuw-c72="">
                                    <div _ngcontent-uuw-c72="" id="5d4d2a55c031510001ca8674" data-locale="en-GB" data-businessunit-id="5d4d2a55c031510001ca8674" data-style-width="100%" class="trustpilot-widget" data-style-height="20px" data-theme="dark" data-template-id="5419b6ffb0d04a076446a9af" style="position: relative;"><iframe title="Customer reviews powered by Trustpilot" loading="auto" src="https://widget.trustpilot.com/trustboxes/5419b6ffb0d04a076446a9af/index.html?businessunitId=5d4d2a55c031510001ca8674&amp;templateId=5419b6ffb0d04a076446a9af#locale=en-GB&amp;styleWidth=100%25&amp;styleHeight=20px&amp;theme=dark" style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
                                </app-trustpilot>
                            </div>
                            <div _ngcontent-uuw-c73="" class="d-none d-lg-block pt-4">
                                <app-trustpilot _ngcontent-uuw-c73="" _nghost-uuw-c72="">
                                    <div _ngcontent-uuw-c72="" id="5d4d2a55c031510001ca8674" data-locale="en-GB" data-businessunit-id="5d4d2a55c031510001ca8674" data-style-width="100%" class="trustpilot-widget" data-style-height="fit-content" data-theme="dark" data-template-id="53aa8807dec7e10d38f59f32" style="position: relative;"><iframe title="Customer reviews powered by Trustpilot" loading="auto" src="https://widget.trustpilot.com/trustboxes/53aa8807dec7e10d38f59f32/index.html?businessunitId=5d4d2a55c031510001ca8674&amp;templateId=53aa8807dec7e10d38f59f32#locale=en-GB&amp;styleWidth=100%25&amp;styleHeight=fit-content&amp;theme=dark" style="position: relative; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
                                </app-trustpilot>
                            </div>
                            <div _ngcontent-uuw-c73="" class="info-bar__payments">
                                <div _ngcontent-uuw-c73="" class="info-bar__payment">
                                    <svg-icon _ngcontent-uuw-c73="" name="apple-pay-new" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 24" style="fill: currentcolor;">
                                            <rect x=".132" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.779 6.535c.064.572-.17 1.146-.519 1.558-.349.412-.92.733-1.48.69-.076-.56.206-1.143.53-1.508.36-.413.967-.72 1.469-.74zm1.81 3.329c-.092.054-1.085.648-1.074 1.853.014 1.443 1.266 1.945 1.337 1.973l.003.001-.004.012a5.336 5.336 0 01-.688 1.376c-.415.593-.846 1.186-1.526 1.198-.326.006-.545-.087-.772-.183-.237-.1-.484-.204-.874-.204-.41 0-.668.107-.917.21-.216.09-.424.178-.718.189-.656.024-1.155-.643-1.574-1.235-.857-1.21-1.512-3.421-.633-4.915a2.449 2.449 0 012.064-1.222c.365-.007.719.13 1.029.25.236.092.447.174.617.174.153 0 .358-.08.598-.172.376-.145.837-.323 1.312-.276.325.014 1.238.13 1.824.968a.28.28 0 00-.005.003z" fill="#192A36"></path>
                                            <path d="M20.543 15.238h1.024v-2.929h2.07c1.54 0 2.633-1.086 2.633-2.644v-.011c0-1.558-1.092-2.622-2.633-2.622h-3.094v8.206zm2.832-7.296c1.172 0 1.848.643 1.848 1.723v.012c0 1.08-.676 1.723-1.848 1.723h-1.808V7.942h1.808zm5.301 7.404c.825 0 1.467-.358 1.854-1.012h.09v.904h.99v-4.197C31.61 9.768 30.774 9 29.28 9c-1.308 0-2.24.648-2.4 1.61l-.006.033h.99l.006-.017c.159-.477.642-.75 1.376-.75.915 0 1.376.409 1.376 1.165v.558l-1.757.108c-1.428.085-2.235.716-2.235 1.808v.011c0 1.115.881 1.82 2.047 1.82zm-1.035-1.842v-.012c0-.608.41-.938 1.342-.995l1.638-.102v.557c0 .876-.734 1.535-1.74 1.535-.711 0-1.24-.364-1.24-.983zm5.472 3.884c1.086 0 1.592-.399 2.098-1.775l2.394-6.505h-1.04l-1.678 5.044h-.091l-1.683-5.044h-1.058l2.269 6.136-.114.364c-.222.705-.563.96-1.126.96-.136 0-.29-.005-.41-.028v.814a2.9 2.9 0 00.439.034z" fill="#192A36"></path>
                                        </svg></svg-icon>
                                </div>
                                <div _ngcontent-uuw-c73="" class="info-bar__payment">
                                    <svg-icon _ngcontent-uuw-c73="" name="paypal-new" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 24" style="fill: currentcolor;">
                                            <rect x=".755" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.388 19.9l.313-1.893-.697-.016H16.68l2.31-13.972a.183.183 0 01.065-.11.194.194 0 01.124-.043h5.607c1.861 0 3.146.37 3.817 1.098.314.342.514.7.611 1.093.102.413.104.906.005 1.507l-.008.044v.386l.315.17a2.2 2.2 0 01.636.462c.27.293.443.664.517 1.105.076.453.05.992-.074 1.603-.143.702-.375 1.314-.688 1.814a3.8 3.8 0 01-1.091 1.14c-.416.281-.91.495-1.47.632a7.676 7.676 0 01-1.836.202h-.436c-.313 0-.615.107-.853.3a1.246 1.246 0 00-.445.756l-.033.171-.553 3.337-.025.123c-.006.039-.018.058-.034.071a.095.095 0 01-.058.02h-2.694z" fill="#28356A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.822 7.653a8.667 8.667 0 01-.057.313c-.74 3.62-3.27 4.871-6.5 4.871h-1.646a.788.788 0 00-.79.645l-1.08 6.538c-.04.244.157.463.415.463h2.918c.346 0 .64-.239.694-.564l.028-.141.55-3.324.035-.183a.692.692 0 01.693-.565h.437c2.827 0 5.04-1.094 5.687-4.261.27-1.323.13-2.428-.585-3.205a2.775 2.775 0 00-.799-.587z" fill="#019DDE"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.05 7.359a6.01 6.01 0 00-.72-.153c-.443-.068-.93-.1-1.45-.1h-4.395a.726.726 0 00-.303.065.672.672 0 00-.39.5l-.935 5.646-.026.165a.788.788 0 01.79-.645h1.644c3.231 0 5.761-1.252 6.5-4.871.023-.107.041-.211.058-.313a4.042 4.042 0 00-.774-.294z" fill="#00164C"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.792 7.671a.67.67 0 01.39-.5.725.725 0 01.303-.065h4.395c.52 0 1.006.033 1.45.101a6.048 6.048 0 01.885.201c.218.07.42.15.608.245.22-1.338-.002-2.249-.76-3.074-.837-.908-2.346-1.296-4.278-1.296h-5.607a.79.79 0 00-.792.646l-2.335 14.115c-.047.28.18.532.475.532h3.461L21.792 7.67z" fill="#012F86"></path>
                                        </svg></svg-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </app-home-slider>
                <div _ngcontent-uuw-c76="" id="competitions-wrapper" class="competitions-wrapper">
                    <div _ngcontent-uuw-c76="" class="raffles-nav-container">
                        <app-raffles-nav _ngcontent-uuw-c76="" _nghost-uuw-c60="">
                            <div _ngcontent-uuw-c60="" class="raffles-nav__placeholder"></div>
                            <div _ngcontent-uuw-c60="" class="raffles-nav__outer" style="top: 0px; position: absolute;">
                                <div _ngcontent-uuw-c60="" class="raffles-nav__inner">
                                    <div _ngcontent-uuw-c60="" class="raffles-nav__swiper">
                                        <!---->
                                        <div _ngcontent-uuw-c60="" class="raffles-nav__item ng-star-inserted">
                                            <div _ngcontent-uuw-c60="" class="raffles-nav__link raffles-nav__link--active" id="nav-item-upcoming-competitions">
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--full">Upcoming Competitions</div>
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--short">Upcoming Competitions</div>
                                            </div>
                                        </div>
                                        <div _ngcontent-uuw-c60="" class="raffles-nav__item ng-star-inserted">
                                            <div _ngcontent-uuw-c60="" class="raffles-nav__link" id="nav-item-cars-competitions">
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--full">Cars &amp; Bikes</div>
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--short">Cars &amp; Bikes</div>
                                            </div>
                                        </div>
                                        <div _ngcontent-uuw-c60="" class="raffles-nav__item ng-star-inserted">
                                            <div _ngcontent-uuw-c60="" class="raffles-nav__link" id="nav-item-cash-competitions">
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--full">Cash</div>
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--short">Cash</div>
                                            </div>
                                        </div>
                                        <div _ngcontent-uuw-c60="" class="raffles-nav__item ng-star-inserted">
                                            <div _ngcontent-uuw-c60="" class="raffles-nav__link" id="nav-item-tech-competitions">
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--full">Tech &amp; Luxury</div>
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--short">Tech &amp; Luxury</div>
                                            </div>
                                        </div>
                                        <div _ngcontent-uuw-c60="" class="raffles-nav__item ng-star-inserted">
                                            <div _ngcontent-uuw-c60="" class="raffles-nav__link" id="nav-item-instant-wins">
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--full">Instant Wins</div>
                                                <div _ngcontent-uuw-c60="" class="raffles-nav__link-value--short">Instant Wins</div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </app-raffles-nav>
                    </div>
                    <section _ngcontent-uuw-c76="" class="section section_cards ng-star-inserted section_gray" id="upcoming-competitions">
                        <div _ngcontent-uuw-c76="" class="container-wide homepage-container">
                            <h2 _ngcontent-uuw-c76="" class="section__header">Upcoming competitions</h2>
                            <div _ngcontent-uuw-c76="" class="row justify-content-center">
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/instant-win-17">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/52bf71dae05b5f4ee7e7b3462199ee9767ad4d20.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 96 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.96, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-4%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="96.0" aria-valuetext="96">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">96</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-g80-m3-comp-1000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/7534fe50f051b142d55dc91fb5adffdea0bf90e5.jpg" alt="undefined" title="Win This BMW G80 M3 Competition + £1,000 Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This BMW G80 M3 Competition + £1,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £52,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 46 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.46, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-54%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="46.0" aria-valuetext="46">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">46</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-ford-ranger-wildtrak-1000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/d0c7239d0face9aef62289d74b9fab7e2ade965e.jpg" alt="undefined" title="Win This Ford Ranger Wildtrak + £1,000 Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Ford Ranger Wildtrak + £1,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £20,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 41 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.41, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-59%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="41.0" aria-valuetext="41">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">41</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-30-000-tax-free-cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/32/1374a84c13133db1fcc610c5ed8ce0869979eb68.jpg" alt="undefined" title="Win £30,000 Tax Free Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £30,000 Tax Free Cash! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£1.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 57 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.57, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-43%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="57.0" aria-valuetext="57">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">57</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-5-000-tax-free-cash-54">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/7e60213ff103e7e4c8915c407e04b2c439cca934.jpg" alt="undefined" title="Win £5,000 Tax Free Cash #54!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £5,000 Tax Free Cash #54! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 41 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.41, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-59%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="41.0" aria-valuetext="41">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">41</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-this-dyson-beauty-bundle-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/24/06fc602cc23cc659ad83cd7fe434de636abe0653.jpg" alt="undefined" title="Win This Dyson Beauty Bundle!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Dyson Beauty Bundle! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,250 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 30 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.3, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-70%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="30.0" aria-valuetext="30">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">30</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-an-iphone-14-pro-or-pro-max-39">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/b7cd663c4ac89842c031a8eb1216833b9ed154a3.jpg" alt="undefined" title="Win An iPhone 14 Pro Or Pro Max #39!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An iPhone 14 Pro Or Pro Max #39! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 36 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.36, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-64%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="36.0" aria-valuetext="36">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">36</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-1-000-tax-free-cash-71">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #71!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #71! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 41 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.41, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-59%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="41.0" aria-valuetext="41">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">41</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-1-000-tax-free-cash-72">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #72!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #72! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 40 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.4, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-60%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="40.0" aria-valuetext="40">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">40</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-a-dji-mavic-air-2-fly-more-combo-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/17/7db2ea3e7089dbaf9843e4fb0669f04eb4dd7a27.jpg" alt="undefined" title="Win A DJI Mavic Air 2 Fly More Combo!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A DJI Mavic Air 2 Fly More Combo! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £850 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 28 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.28, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-72%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="28.0" aria-valuetext="28">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">28</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-an-ipad-pro-11">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/29bc6e55da9a812b5fc9848f1815b8644dfaeba5.jpg" alt="undefined" title="Win An iPad Pro 11&quot;!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An iPad Pro 11"! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £800 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 25 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.25, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="25.0" aria-valuetext="25">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">25</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-a-pure-air-pro-electric-scooter-2nd-gen-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/24/2da864f2d7e78f3c719e7728e4f32fbce71277d6.jpg" alt="undefined" title="Win A Pure Air Pro Electric Scooter 2nd Gen!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A Pure Air Pro Electric Scooter 2nd Gen! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 29 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.29, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-71%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="29.0" aria-valuetext="29">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">29</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-this-ps5-disc-edition-5">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/93e8cdf663b73af54e55f2e4027b557969e56241.jpg" alt="undefined" title="Win This PS5 Disc Edition #5!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This PS5 Disc Edition #5! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 35 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.35, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-65%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="35.0" aria-valuetext="35">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">35</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-an-xbox-series-x-5">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/774ecb60b4ee27e22833043a4e6b8cef3c55d5b4.jpg" alt="undefined" title="Win An Xbox Series X #5!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Xbox Series X #5! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 25 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.25, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="25.0" aria-valuetext="25">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">25</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-an-ooni-pizza-oven-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/090e7bab0744cd22e5627bd13d3c6de399775ebb.jpg" alt="undefined" title="Win An Ooni Pizza Oven!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Ooni Pizza Oven! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 24 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.24, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-76%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="24.0" aria-valuetext="24">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">24</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-100-cash-doubled-if-your-order-is-over-1-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/29/e631b4735b7a99175754a46df9765cd0c558fd11.jpg" alt="undefined" title="Win £100 Cash (Doubled If Your Order Is Over £1)">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__bottominfo ng-star-inserted">App Exclusive</div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £100 Cash (Doubled If Your Order Is Over £1) </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.00</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider raffle-card__slider--hidden">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 37 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.37, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-63%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="37.0" aria-valuetext="37">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">37</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <!---->
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!---->
                    <section _ngcontent-uuw-c76="" class="section section_cards section_white ng-star-inserted" id="cars-competitions">
                        <div _ngcontent-uuw-c76="" class="container-wide homepage-container">
                            <h2 _ngcontent-uuw-c76="" class="section__header"> Car &amp; Bike Competitions</h2>
                            <div _ngcontent-uuw-c76="" class="row justify-content-center">
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/instant-win-17">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/52bf71dae05b5f4ee7e7b3462199ee9767ad4d20.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 96 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.96, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-4%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="96.0" aria-valuetext="96">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">96</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-g80-m3-comp-1000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/7534fe50f051b142d55dc91fb5adffdea0bf90e5.jpg" alt="undefined" title="Win This BMW G80 M3 Competition + £1,000 Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This BMW G80 M3 Competition + £1,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £52,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 46 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.46, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-54%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="46.0" aria-valuetext="46">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">46</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-ford-ranger-wildtrak-1000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/d0c7239d0face9aef62289d74b9fab7e2ade965e.jpg" alt="undefined" title="Win This Ford Ranger Wildtrak + £1,000 Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Ford Ranger Wildtrak + £1,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £20,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 41 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.41, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-59%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="41.0" aria-valuetext="41">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">41</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-100-cash-doubled-if-your-order-is-over-1-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/29/e631b4735b7a99175754a46df9765cd0c558fd11.jpg" alt="undefined" title="Win £100 Cash (Doubled If Your Order Is Over £1)">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__bottominfo ng-star-inserted">App Exclusive</div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £100 Cash (Doubled If Your Order Is Over £1) </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.00</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider raffle-card__slider--hidden">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 37 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.37, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-63%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="37.0" aria-valuetext="37">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">37</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-urban-defender-2000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8f53b8c2e02175569800f9d3b3fa105023517309.jpg" alt="undefined" title="Win This 2021 V8 Urban Defender + £2,000 Cash!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This 2021 V8 Urban Defender + £2,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £90,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 23 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.23, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-77%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="23.0" aria-valuetext="23">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">23</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-stage-2-m4-comp-1000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/421628f99cdd29ce7729238e8bd5468bff09ec50.jpg" alt="undefined" title="Win This Stage 2 BMW M4 Competition + £1,000 Cash!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Stage 2 BMW M4 Competition + £1,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £28,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 15 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.15, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-85%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="15.0" aria-valuetext="15">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">15</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-2020-ktm-supermoto-690-smcr">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8ba0d96393542229f2c5db2acf0321b835365b15.jpg" alt="undefined" title="Win This 2020 KTM Supermoto 690 SMC R!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This 2020 KTM Supermoto 690 SMC R! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £6,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 18 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.18, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-82%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="18.0" aria-valuetext="18">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">18</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-sur-ron-lbx">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/32/7ca4accda4b880dc6f23de8e535fef4dcd5c00c7.jpg" alt="undefined" title="Win This Road Legal Sur Ron LBX Electric Bike!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Road Legal Sur Ron LBX Electric Bike! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £3,500 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 17 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.17, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-83%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="17.0" aria-valuetext="17">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">17</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/instant-win-18">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/3b02edf7bb8b0f64eafbb89785a0c5d6648c2f89.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 23 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.23, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-77%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="23.0" aria-valuetext="23">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">23</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-m2-competition-1000cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/c1af37bdbd039444d79f7bb910b47357b3582143.jpg" alt="undefined" title="Win This BMW M2 Competition + £1,000 Cash!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This BMW M2 Competition + £1,000 Cash! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £30,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 4 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.04, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-96%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="4.0" aria-valuetext="4">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">4</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <!---->
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!---->
                    <section _ngcontent-uuw-c76="" class="section section_cards ng-star-inserted section_gray" id="cash-competitions">
                        <div _ngcontent-uuw-c76="" class="container-wide homepage-container">
                            <h2 _ngcontent-uuw-c76="" class="section__header">Cash Competitions</h2>
                            <div _ngcontent-uuw-c76="" class="row justify-content-center">
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/instant-win-17">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/52bf71dae05b5f4ee7e7b3462199ee9767ad4d20.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 96 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.96, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-4%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="96.0" aria-valuetext="96">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">96</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-30-000-tax-free-cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/32/1374a84c13133db1fcc610c5ed8ce0869979eb68.jpg" alt="undefined" title="Win £30,000 Tax Free Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £30,000 Tax Free Cash! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£1.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 57 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.57, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-43%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="57.0" aria-valuetext="57">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">57</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-5-000-tax-free-cash-54">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/7e60213ff103e7e4c8915c407e04b2c439cca934.jpg" alt="undefined" title="Win £5,000 Tax Free Cash #54!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £5,000 Tax Free Cash #54! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 41 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.41, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-59%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="41.0" aria-valuetext="41">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">41</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-1-000-tax-free-cash-72">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #72!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #72! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 40 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.4, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-60%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="40.0" aria-valuetext="40">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">40</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-1-000-tax-free-cash-71">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #71!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #71! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 41 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.41, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-59%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="41.0" aria-valuetext="41">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">41</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/win-100-cash-doubled-if-your-order-is-over-1-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/29/e631b4735b7a99175754a46df9765cd0c558fd11.jpg" alt="undefined" title="Win £100 Cash (Doubled If Your Order Is Over £1)">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__bottominfo ng-star-inserted">App Exclusive</div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £100 Cash (Doubled If Your Order Is Over £1) </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.00</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider raffle-card__slider--hidden">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 37 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.37, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-63%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="37.0" aria-valuetext="37">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">37</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-20-000-cash-6">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/de71daf363368e1e889b81b4ff7c0d1461bc8c92.jpg" alt="undefined" title="Win £20,000 Cash #6!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £20,000 Cash #6! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 4 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.04, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-96%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="4.0" aria-valuetext="4">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">4</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-5-000-tax-free-cash-55">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/7e60213ff103e7e4c8915c407e04b2c439cca934.jpg" alt="undefined" title="Win £5,000 Tax Free Cash #55!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £5,000 Tax Free Cash #55! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 1 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.01, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-99%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="1.0" aria-valuetext="1">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">1</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-000-tax-free-cash-74">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #74!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #74! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 2 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.02, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-98%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="2.0" aria-valuetext="2">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">2</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-000-tax-free-cash-73">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #73!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #73! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 1 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.01, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-99%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="1.0" aria-valuetext="1">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">1</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-500-tax-free-cash-42">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/f690e9e5a215779b34044c08572b8f8e84b5f2d5.jpg" alt="undefined" title="Win £1,500 Tax Free Cash #42!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,500 Tax Free Cash #42! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-500-tax-free-cash-41">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/f690e9e5a215779b34044c08572b8f8e84b5f2d5.jpg" alt="undefined" title="Win £1,500 Tax Free Cash #41!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,500 Tax Free Cash #41! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/instant-win-18">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/3b02edf7bb8b0f64eafbb89785a0c5d6648c2f89.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 23 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.23, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-77%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="23.0" aria-valuetext="23">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">23</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-7-500-tax-free-cash-19">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/03ca2b89fd1af111c6f519aa05d804fd8425b908.jpg" alt="undefined" title="Win £7,500 Tax Free Cash #19!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Tuesday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £7,500 Tax Free Cash #19! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 1 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.01, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-99%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="1.0" aria-valuetext="1">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">1</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-000-tax-free-cash-76">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #76!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Tuesday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #76! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-000-tax-free-cash-75">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #75!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Tuesday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #75! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-20-000-cash-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/a25e7b219d099b15bd1d04050ba8ee14f3fd1e99.jpg" alt="undefined" title="Win £20,000 Cash #7!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £20,000 Cash #7! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-5-000-tax-free-cash-56">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/7e60213ff103e7e4c8915c407e04b2c439cca934.jpg" alt="undefined" title="Win £5,000 Tax Free Cash #56!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £5,000 Tax Free Cash #56! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-000-tax-free-cash-78">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #78!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #78! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/win-1-000-tax-free-cash-77">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/a76f5c6d921fb6273df6b70233d62c7fd8022e23.jpg" alt="undefined" title="Win £1,000 Tax Free Cash #77!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £1,000 Tax Free Cash #77! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.79</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <!---->
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!---->
                    <section _ngcontent-uuw-c76="" class="section section_cards section_white ng-star-inserted" id="tech-competitions">
                        <div _ngcontent-uuw-c76="" class="container-wide homepage-container">
                            <h2 _ngcontent-uuw-c76="" class="section__header">Tech &amp; Luxury Competitions</h2>
                            <div _ngcontent-uuw-c76="" class="row justify-content-center">
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/instant-win-17">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/52bf71dae05b5f4ee7e7b3462199ee9767ad4d20.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 96 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.96, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-4%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="96.0" aria-valuetext="96">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">96</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-30-000-tax-free-cash">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/32/1374a84c13133db1fcc610c5ed8ce0869979eb68.jpg" alt="undefined" title="Win £30,000 Tax Free Cash!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £30,000 Tax Free Cash! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£1.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 57 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.57, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-43%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="57.0" aria-valuetext="57">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">57</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-this-dyson-beauty-bundle-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/24/06fc602cc23cc659ad83cd7fe434de636abe0653.jpg" alt="undefined" title="Win This Dyson Beauty Bundle!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Dyson Beauty Bundle! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,250 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 30 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.3, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-70%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="30.0" aria-valuetext="30">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">30</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-an-iphone-14-pro-or-pro-max-39">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/b7cd663c4ac89842c031a8eb1216833b9ed154a3.jpg" alt="undefined" title="Win An iPhone 14 Pro Or Pro Max #39!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An iPhone 14 Pro Or Pro Max #39! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 36 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.36, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-64%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="36.0" aria-valuetext="36">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">36</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-a-dji-mavic-air-2-fly-more-combo-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/17/7db2ea3e7089dbaf9843e4fb0669f04eb4dd7a27.jpg" alt="undefined" title="Win A DJI Mavic Air 2 Fly More Combo!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A DJI Mavic Air 2 Fly More Combo! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £850 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 28 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.28, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-72%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="28.0" aria-valuetext="28">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">28</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-an-ipad-pro-11">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/29bc6e55da9a812b5fc9848f1815b8644dfaeba5.jpg" alt="undefined" title="Win An iPad Pro 11&quot;!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An iPad Pro 11"! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £800 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 25 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.25, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="25.0" aria-valuetext="25">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">25</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-a-pure-air-pro-electric-scooter-2nd-gen-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/24/2da864f2d7e78f3c719e7728e4f32fbce71277d6.jpg" alt="undefined" title="Win A Pure Air Pro Electric Scooter 2nd Gen!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A Pure Air Pro Electric Scooter 2nd Gen! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 29 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.29, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-71%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="29.0" aria-valuetext="29">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">29</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-this-ps5-disc-edition-5">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/93e8cdf663b73af54e55f2e4027b557969e56241.jpg" alt="undefined" title="Win This PS5 Disc Edition #5!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This PS5 Disc Edition #5! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 35 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.35, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-65%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="35.0" aria-valuetext="35">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">35</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-an-xbox-series-x-5">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/774ecb60b4ee27e22833043a4e6b8cef3c55d5b4.jpg" alt="undefined" title="Win An Xbox Series X #5!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Xbox Series X #5! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 25 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.25, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="25.0" aria-valuetext="25">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">25</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-an-ooni-pizza-oven-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/090e7bab0744cd22e5627bd13d3c6de399775ebb.jpg" alt="undefined" title="Win An Ooni Pizza Oven!">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Ooni Pizza Oven! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 24 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.24, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-76%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="24.0" aria-valuetext="24">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">24</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card-- raffle-card__today" href="/product/win-100-cash-doubled-if-your-order-is-over-1-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/29/e631b4735b7a99175754a46df9765cd0c558fd11.jpg" alt="undefined" title="Win £100 Cash (Doubled If Your Order Is Over £1)">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime raffle-card__drawtime--urgent ng-star-inserted"> Draw Today 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__bottominfo ng-star-inserted">App Exclusive</div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win £100 Cash (Doubled If Your Order Is Over £1) </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.00</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider raffle-card__slider--hidden">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 37 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.37, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-63%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="37.0" aria-valuetext="37">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">37</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-pepsi-rolex-gmt-master-ii">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/ddd1c3e9457ac5224ccdbf23ae594512242f8ddb.jpg" alt="undefined" title="Win This Rolex Pepsi GMT Master II!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Rolex Pepsi GMT Master II! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £14,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 17 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.17, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-83%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="17.0" aria-valuetext="17">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">17</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-smart-home-entertainment-bundle">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/8ca3e4415b2bd2ec3134b445636edb66e1655362.jpg" alt="undefined" title="Win This Smart Home Entertainment Bundle!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Smart Home Entertainment Bundle! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,750 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 3 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.03, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-97%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="3.0" aria-valuetext="3">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">3</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-11pc-dewalt-tool-bundle-4">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/0732ca415013bfae0aa64bb780898995d78ebbdc.jpg" alt="undefined" title="Win This 11pc DeWALT Tool Bundle!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This 11pc DeWALT Tool Bundle! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 9 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.09, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-91%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="9.0" aria-valuetext="9">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">9</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-a-louis-vuitton-alma-bb-bag-reversible-belt-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/f0ba6d17fc66f505f3a6dfd5abd6e809a1782b79.jpg" alt="undefined" title="Win A Louis Vuitton Alma BB Bag + Reversible Belt!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A Louis Vuitton Alma BB Bag + Reversible Belt! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,250 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 4 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.04, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-96%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="4.0" aria-valuetext="4">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">4</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-an-apple-imac-4-5k-24-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/6c0ffdbb543d5319e18425055efc297662ac1a1c.png" alt="undefined" title="Win An Apple iMac 4.5K 24&quot;!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Apple iMac 4.5K 24"! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 8 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.08, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-92%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="8.0" aria-valuetext="8">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">8</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-an-iphone-14-pro-or-pro-max-40">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/3d8fb280aa887f6e148cba91c779aa714203c306.jpg" alt="undefined" title="Win An iPhone 14 Pro Or Pro Max #40!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An iPhone 14 Pro Or Pro Max #40! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 3 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.03, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-97%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="3.0" aria-valuetext="3">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">3</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-a-samsung-75-4k-smart-tv-2">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/8c2fca11921485e823d31ebfb6219f611443ce51.jpg" alt="undefined" title="Win A Samsung 75&quot; 4K SMART TV!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A Samsung 75" 4K SMART TV! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £800 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 4 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.04, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-96%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="4.0" aria-valuetext="4">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">4</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-ps5-disc-edition-5-2">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/56923dc037eca7a07fcdc6ca7de2c6003f141626.jpg" alt="undefined" title="Win This PS5 Disc Edition #6!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This PS5 Disc Edition #6! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 3 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.03, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-97%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="3.0" aria-valuetext="3">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">3</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-an-xbox-series-x-6">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/1e61bba40800e7da75060a7907f1ce9195859ff4.jpg" alt="undefined" title="Win An Xbox Series X #6!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Sunday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Xbox Series X #6! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 2 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.02, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-98%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="2.0" aria-valuetext="2">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">2</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-a-samsung-galaxy-s23-ultra-8">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/31/05eb115246e404f1ba514781c2e6119c2bddc449.jpg" alt="undefined" title="Win A Samsung Galaxy S23 Ultra #8!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A Samsung Galaxy S23 Ultra #8! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 7 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.07, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-93%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="7.0" aria-valuetext="7">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">7</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-us-pro-tools-55-chest-tools-2">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/8b91df400e03ab59409d5abec407a34a74371b76.jpg" alt="undefined" title="Win This US PRO TOOLS 55” Chest + Tools!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This US PRO TOOLS 55” Chest + Tools! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £850 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 7 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.07, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-93%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="7.0" aria-valuetext="7">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">7</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-ps5-disc-edition-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/39bb02bd75114a7faba9fbe237bc965f76a9ca64.jpg" alt="undefined" title="Win This PS5 Disc Edition #7!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This PS5 Disc Edition #7! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 1 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.01, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-99%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="1.0" aria-valuetext="1">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">1</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-oculus-quest-2-vr-256gb-4">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/d2ceb95b78e0f9ffe637a12ce467d87f4daaca21.jpg" alt="undefined" title="Win This Oculus Quest 2 VR 256GB!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Oculus Quest 2 VR 256GB! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 3 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.03, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-97%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="3.0" aria-valuetext="3">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">3</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-an-xbox-series-x-7">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/1ea11348c0d750fa5344b6c7aa3c4873b406ab07.jpg" alt="undefined" title="Win An Xbox Series X #7!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Monday 5pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Xbox Series X #7! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/instant-win-18">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/3b02edf7bb8b0f64eafbb89785a0c5d6648c2f89.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 23 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.23, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-77%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="23.0" aria-valuetext="23">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">23</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-huge-85-4k-smart-tv-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/525a9632669bb099e693808715dc1991769eddab.jpg" alt="undefined" title="Win This Huge 85&quot; 4K SMART TV!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This Huge 85" 4K SMART TV! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-a-tag-heuer-f1-watch-of-your-choice-for-99p-3">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/25/d58990546db331b985b9f9142d8ed9722d3efb79.jpg" alt="undefined" title="Win A Tag Heuer F1 Watch Of Your Choice For 99p!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win A Tag Heuer F1 Watch Of Your Choice For 99p! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,300 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 2 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.02, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-98%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="2.0" aria-valuetext="2">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">2</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-an-iphone-14-pro-or-pro-max-41">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/0a687a5188a7d9df0a05f90234227ede838eb835.jpg" alt="undefined" title="Win An iPhone 14 Pro Or Pro Max #41!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An iPhone 14 Pro Or Pro Max #41! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £1,000 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-this-ps5-disc-edition-8">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/3fbb65c0ff8264df258f3331935b339068f466cd.jpg" alt="undefined" title="Win This PS5 Disc Edition #8!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win This PS5 Disc Edition #8! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 0 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="0">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--" href="/product/win-an-xbox-series-x-8">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/4ecd8a1989754336092075fb3436268854140e21.jpg" alt="undefined" title="Win An Xbox Series X #8!">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-uuw-c65="" class="raffle-card__drawtime ng-star-inserted"> Draw Wednesday 8pm </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> Win An Xbox Series X #8! </h3>
                                            <div _ngcontent-uuw-c65="" class="raffle-card__alternative ng-star-inserted"> Cash Alternative: £400 </div>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 1 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.01, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-99%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="1.0" aria-valuetext="1">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">1</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <!---->
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!---->
                    <section _ngcontent-uuw-c76="" class="section section_cards ng-star-inserted section_gray" id="instant-wins">
                        <div _ngcontent-uuw-c76="" class="container-wide homepage-container">
                            <h2 _ngcontent-uuw-c76="" class="section__header">Instant Win Competitions</h2>
                            <div _ngcontent-uuw-c76="" class="row justify-content-center">
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white raffle-card__today" href="/product/instant-win-17">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/52bf71dae05b5f4ee7e7b3462199ee9767ad4d20.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider increaseRight">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 96 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.96, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-4%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="96.0" aria-valuetext="96">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">96</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <app-raffle-card _ngcontent-uuw-c76="" _nghost-uuw-c65="" class="ng-star-inserted"><a _ngcontent-uuw-c65="" class="raffle-card raffle-card--white" href="/product/instant-win-18">
                                        <div _ngcontent-uuw-c65="" class="raffle-card__image">
                                            <!----><img _ngcontent-uuw-c65="" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/media/cache/big/https%3A/7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/3b02edf7bb8b0f64eafbb89785a0c5d6648c2f89.jpg" alt="undefined" title="1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize!">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__wrapper">
                                            <h3 _ngcontent-uuw-c65="" class="raffle-card__title"> 1,250 Instant Wins - £200,000 Of Prizes - £10,000 End Prize! </h3>
                                            <!---->
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__price">
                                            <!----><span _ngcontent-uuw-c65="" class="raffle-card__price-new">£0.99</span></div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__slider">
                                            <div _ngcontent-uuw-c65="" class="raffle-card__sold"> sold: 23 % </div>
                                            <nouislider _ngcontent-uuw-c65="" _nghost-uuw-c46="" class="ng2-nouislider ng-untouched ng-pristine">
                                                <div _ngcontent-uuw-c46="" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.23, 1);"></div>
                                                        </div>
                                                        <div class="noUi-origin" style="transform: translate(-77%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="23.0" aria-valuetext="23">
                                                                <div class="noUi-touch-area"></div>
                                                                <div class="noUi-tooltip">23</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nouislider>
                                        </div>
                                        <div _ngcontent-uuw-c65="" class="raffle-card__enter"><span _ngcontent-uuw-c65="">Enter now</span>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small" class="raffle-card__enter-icon raffle-card__enter-icon--white" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" style="fill: currentcolor;">
                                                    <path d="M12.761 6.59a.736.736 0 01-.597-.852l.574-3.256a.736.736 0 111.45.255l-.574 3.257a.736.736 0 01-.853.597zm-1.34-1.914a.736.736 0 01.255-1.45l3.256.574a.736.736 0 01-.255 1.45l-3.257-.574z" fill="#fff"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.085 2.245l-3.898-.687a3.337 3.337 0 00-3.861 2.704l-1.62 9.191a3.337 3.337 0 002.703 3.862l5.252.926a3.338 3.338 0 003.862-2.704l1.36-7.718a4.224 4.224 0 01-1.307-.26l-1.366 7.747a2 2 0 01-2.317 1.622l-1.97-.347.116-.657a.667.667 0 10-1.313-.231l-.116.656-1.97-.347a2 2 0 01-1.622-2.317L3.64 4.493a2 2 0 012.317-1.622l3.892.687a4.217 4.217 0 01.237-1.313zM9.313 13.42a.667.667 0 00-.266-1.203l-3.94-.694a.666.666 0 10-.231 1.313l3.94.695a.667.667 0 00.497-.11z" fill="#fff"></path>
                                                    <path fill="#fff" d="M7.253 5.823l1.35.238-.776 4.397-1.35-.238z"></path>
                                                    <path d="M10.47 6.854a.666.666 0 00-.266-1.203l-3.94-.694a.667.667 0 10-.23 1.313l3.938.694a.667.667 0 00.498-.11z" fill="#fff"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-uuw-c65="" name="ticket-small-blue" class="raffle-card__enter-icon raffle-card__enter-icon--blue" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 22" style="fill: currentcolor;">
                                                    <path d="M17.077 6.739a.92.92 0 01-.746-1.066l.717-4.07a.92.92 0 111.812.319l-.717 4.07a.92.92 0 01-1.066.747zM15.4 4.344a.92.92 0 11.32-1.812l4.07.718a.92.92 0 01-.319 1.812l-4.07-.718z" fill="#f37022"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.732 1.307L8.86.447a4.172 4.172 0 00-4.827 3.38l-2.026 11.49a4.172 4.172 0 003.38 4.827l6.565 1.158a4.172 4.172 0 004.827-3.38l1.701-9.648a5.28 5.28 0 01-1.635-.324l-1.707 9.682a2.5 2.5 0 01-2.896 2.028l-2.462-.434.144-.82a.834.834 0 00-1.641-.29l-.145.82-2.462-.433a2.5 2.5 0 01-2.028-2.897l2.026-11.49A2.5 2.5 0 018.57 2.09l4.866.858a5.28 5.28 0 01.296-1.64zm-.965 13.967a.834.834 0 00-.333-1.503l-4.924-.869a.833.833 0 10-.29 1.642l4.924.868a.833.833 0 00.623-.138z" fill="#f37022"></path>
                                                    <path fill="#f37022" d="M10.191 5.778l1.686.297-.97 5.497-1.685-.297z"></path>
                                                    <path d="M14.213 7.068a.833.833 0 00-.333-1.504l-4.924-.868a.833.833 0 10-.29 1.641l4.925.869a.833.833 0 00.622-.138z" fill="#f37022"></path>
                                                </svg></svg-icon>
                                        </div>
                                    </a></app-raffle-card>
                                <!---->
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!---->
                    <!---->
                </div>
                <app-why-choose-us _ngcontent-uuw-c76="" _nghost-uuw-c75="">
                    <section _ngcontent-uuw-c75="" class="why">
                        <div _ngcontent-uuw-c75="" class="container">
                            <h2 _ngcontent-uuw-c75="" class="section-title section-title--competition section-title--white">Why choose us?</h2>
                            <div _ngcontent-uuw-c75="" class="why__steps">
                                <div _ngcontent-uuw-c75="" class="why__step">
                                    <div _ngcontent-uuw-c75="" class="why__icon"><img _ngcontent-uuw-c75="" src="/assets/svg-icons/limited.svg" alt=""></div>
                                    <div _ngcontent-uuw-c75="" class="why__label">
                                        <div _ngcontent-uuw-c75="" class="why__title">Great Odds</div>
                                        <div _ngcontent-uuw-c75="" class="why__subtitle">Limited tickets in<br _ngcontent-uuw-c75="" class="d-none d-lg-block"> each draw</div>
                                    </div>
                                </div>
                                <div _ngcontent-uuw-c75="" class="why__step">
                                    <div _ngcontent-uuw-c75="" class="why__icon"><img _ngcontent-uuw-c75="" src="/assets/svg-icons/entries.svg" alt=""></div>
                                    <div _ngcontent-uuw-c75="" class="why__label">
                                        <div _ngcontent-uuw-c75="" class="why__title">Transparent</div>
                                        <div _ngcontent-uuw-c75="" class="why__subtitle">We show the number of entries in every draw</div>
                                    </div>
                                </div>
                                <div _ngcontent-uuw-c75="" class="why__step">
                                    <div _ngcontent-uuw-c75="" class="why__icon"><img _ngcontent-uuw-c75="" src="/assets/svg-icons/winner-blue.svg" alt=""></div>
                                    <div _ngcontent-uuw-c75="" class="why__label">
                                        <div _ngcontent-uuw-c75="" class="why__title">Guaranteed</div>
                                        <div _ngcontent-uuw-c75="" class="why__subtitle">Guaranteed winner even if we don't sell out</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </app-why-choose-us>
                <app-how-to-play _ngcontent-uuw-c76="" _nghost-uuw-c70="">
                    <section _ngcontent-uuw-c70="" class="how">
                        <div _ngcontent-uuw-c70="" class="container">
                            <h2 _ngcontent-uuw-c70="" class="section-title">How to play</h2>
                            <div _ngcontent-uuw-c70="" class="how__steps">
                                <div _ngcontent-uuw-c70="" class="how__step">
                                    <div _ngcontent-uuw-c70="" class="how__icon"><img _ngcontent-uuw-c70="" src="/assets/svg-icons/prize-gray.svg" alt=""></div>
                                    <div _ngcontent-uuw-c70="" class="how__label">
                                        <div _ngcontent-uuw-c70="" class="how__title">01 Step</div>
                                        <div _ngcontent-uuw-c70="" class="how__subtitle">Select your prize and entries</div>
                                    </div>
                                </div>
                                <div _ngcontent-uuw-c70="" class="how__step">
                                    <div _ngcontent-uuw-c70="" class="how__icon"><img _ngcontent-uuw-c70="" src="/assets/svg-icons/answer.svg" alt=""></div>
                                    <div _ngcontent-uuw-c70="" class="how__label">
                                        <div _ngcontent-uuw-c70="" class="how__title">02 Step</div>
                                        <div _ngcontent-uuw-c70="" class="how__subtitle">Answer the question correctly</div>
                                    </div>
                                </div>
                                <div _ngcontent-uuw-c70="" class="how__step">
                                    <div _ngcontent-uuw-c70="" class="how__icon"><img _ngcontent-uuw-c70="" src="/assets/svg-icons/microphone.svg" alt=""></div>
                                    <div _ngcontent-uuw-c70="" class="how__label">
                                        <div _ngcontent-uuw-c70="" class="how__title">03 Step</div>
                                        <div _ngcontent-uuw-c70="" class="how__subtitle">Winner announced on Live Draw</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </app-how-to-play>
                <app-reviews-google _ngcontent-uuw-c76="" _nghost-uuw-c68="">
                    <!---->
                    <div _ngcontent-uuw-c68="" class="reviews ng-star-inserted">
                        <div _ngcontent-uuw-c68="" class="reviews__header">
                            <div _ngcontent-uuw-c68="" class="reviews__identity">
                                <div _ngcontent-uuw-c68="" class="reviews__title">7days Performance</div>
                                <div _ngcontent-uuw-c68="" class="reviews__rating">
                                    <div _ngcontent-uuw-c68="" class="reviews__rating-average">4.9</div>
                                    <div _ngcontent-uuw-c68="" class="reviews__stars-box">
                                        <div _ngcontent-uuw-c68="" class="reviews__stars"></div>
                                    </div>
                                </div>
                            </div>
                            <div _ngcontent-uuw-c68="" class="reviews__logo"><img _ngcontent-uuw-c68="" src="/assets/images/7days/google-reviews-logo.png"></div>
                        </div>
                        <div _ngcontent-uuw-c68="" class="review ng-star-inserted">
                            <div _ngcontent-uuw-c68="" class="review__avatar">
                                <div _ngcontent-uuw-c68="" class="review__avatar-initial ng-star-inserted" style="background-color: rgb(255, 193, 7);"> O </div>
                                <!---->
                                <!---->
                            </div>
                            <div _ngcontent-uuw-c68="" class="review__content">
                                <div _ngcontent-uuw-c68="" class="review__name">Oliver Bailey</div>
                                <!---->
                                <div _ngcontent-uuw-c68="" class="review__stars-date">
                                    <div _ngcontent-uuw-c68="" class="review__rating">
                                        <div _ngcontent-uuw-c68="" class="review__stars" style="width: 70px;"></div>
                                    </div>
                                    <div _ngcontent-uuw-c68="" class="review__date">10 months ago</div>
                                </div>
                                <div _ngcontent-uuw-c68="" class="review__text">
                                    <p>Won the Toyota Supra which is a amazing car the staff where great will definitely be entering again</p>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-uuw-c68="" class="review ng-star-inserted">
                            <div _ngcontent-uuw-c68="" class="review__avatar">
                                <div _ngcontent-uuw-c68="" class="review__avatar-initial ng-star-inserted" style="background-color: rgb(3, 169, 244);"> A </div>
                                <!---->
                                <!---->
                            </div>
                            <div _ngcontent-uuw-c68="" class="review__content">
                                <div _ngcontent-uuw-c68="" class="review__name">Adam S</div>
                                <!---->
                                <div _ngcontent-uuw-c68="" class="review__stars-date">
                                    <div _ngcontent-uuw-c68="" class="review__rating">
                                        <div _ngcontent-uuw-c68="" class="review__stars" style="width: 70px;"></div>
                                    </div>
                                    <div _ngcontent-uuw-c68="" class="review__date">10 months ago</div>
                                </div>
                                <div _ngcontent-uuw-c68="" class="review__text">
                                    <p>100% legit company for those sceptical people out there, I was one of them too to begin with but then i bagged 20k on my second time of playing. Money was in my account within 24 hours. Honestly these guys are genuinely nice people they were happy for me and made the process so easy and simple! I’ll be playing again put it that way…… got to be in it to win it!!!</p>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-uuw-c68="" class="review ng-star-inserted">
                            <div _ngcontent-uuw-c68="" class="review__avatar">
                                <div _ngcontent-uuw-c68="" class="review__avatar-initial ng-star-inserted" style="background-color: rgb(63, 81, 181);"> D </div>
                                <!---->
                                <!---->
                            </div>
                            <div _ngcontent-uuw-c68="" class="review__content">
                                <div _ngcontent-uuw-c68="" class="review__name">Daniel Lloyd Mechanic</div>
                                <!---->
                                <div _ngcontent-uuw-c68="" class="review__stars-date">
                                    <div _ngcontent-uuw-c68="" class="review__rating">
                                        <div _ngcontent-uuw-c68="" class="review__stars" style="width: 70px;"></div>
                                    </div>
                                    <div _ngcontent-uuw-c68="" class="review__date">10 months ago</div>
                                </div>
                                <div _ngcontent-uuw-c68="" class="review__text">
                                    <p>I have played in many competitions with 7 days the last few years and finally bagged a winner on tickets I forgot all about. I won the £5000 tui voucher but chose the cash instead.<br>
                                        These guys are great the money was in my account the next morning 5 🌟</p>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-uuw-c68="" class="review ng-star-inserted">
                            <div _ngcontent-uuw-c68="" class="review__avatar">
                                <div _ngcontent-uuw-c68="" class="review__avatar-initial ng-star-inserted" style="background-color: rgb(76, 175, 80);"> T </div>
                                <!---->
                                <!---->
                            </div>
                            <div _ngcontent-uuw-c68="" class="review__content">
                                <div _ngcontent-uuw-c68="" class="review__name">Tom Macca</div>
                                <!---->
                                <div _ngcontent-uuw-c68="" class="review__stars-date">
                                    <div _ngcontent-uuw-c68="" class="review__rating">
                                        <div _ngcontent-uuw-c68="" class="review__stars" style="width: 70px;"></div>
                                    </div>
                                    <div _ngcontent-uuw-c68="" class="review__date">10 months ago</div>
                                </div>
                                <div _ngcontent-uuw-c68="" class="review__text">
                                    <p>5*<br>
                                        <br>
                                        Won a Mercedes c63s AMG for just £10 off just 10 tickets on their raffle competitions!</p>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-uuw-c68="" class="review ng-star-inserted">
                            <div _ngcontent-uuw-c68="" class="review__avatar">
                                <div _ngcontent-uuw-c68="" class="review__avatar-initial ng-star-inserted" style="background-color: rgb(76, 175, 80);"> A </div>
                                <!---->
                                <!---->
                            </div>
                            <div _ngcontent-uuw-c68="" class="review__content">
                                <div _ngcontent-uuw-c68="" class="review__name">Andy Bone</div>
                                <!---->
                                <div _ngcontent-uuw-c68="" class="review__stars-date">
                                    <div _ngcontent-uuw-c68="" class="review__rating">
                                        <div _ngcontent-uuw-c68="" class="review__stars" style="width: 70px;"></div>
                                    </div>
                                    <div _ngcontent-uuw-c68="" class="review__date">last year</div>
                                </div>
                                <div _ngcontent-uuw-c68="" class="review__text">
                                    <p>Excellent friendly service and would highly recommend. Won a few times and goods arrived quickly. Cash alternative in bank within a few hours. Excellent and great.</p>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-uuw-c68="" class="review ng-star-inserted">
                            <div _ngcontent-uuw-c68="" class="review__avatar">
                                <div _ngcontent-uuw-c68="" class="review__avatar-initial ng-star-inserted" style="background-color: rgb(255, 152, 0);"> M </div>
                                <!---->
                                <!---->
                            </div>
                            <div _ngcontent-uuw-c68="" class="review__content">
                                <div _ngcontent-uuw-c68="" class="review__name">Michael Jolley</div>
                                <!---->
                                <div _ngcontent-uuw-c68="" class="review__stars-date">
                                    <div _ngcontent-uuw-c68="" class="review__rating">
                                        <div _ngcontent-uuw-c68="" class="review__stars" style="width: 70px;"></div>
                                    </div>
                                    <div _ngcontent-uuw-c68="" class="review__date">last year</div>
                                </div>
                                <div _ngcontent-uuw-c68="" class="review__text">
                                    <p>Wow what can I say I won an Audi RS5 absolutely over the moon, cracking blokes to deal with with brilliant communication, thanks once again for our car it's amazing all from a few £0:99p tickets. Is definitely recommend 7 days performance to anyone 10/10 well done guys</p>
                                </div>
                            </div>
                        </div>
                        <!---->
                    </div>
                    <!---->
                </app-reviews-google>
                <app-winners-section _ngcontent-uuw-c76="" _nghost-uuw-c69="" class="ng-star-inserted">
                    <div _ngcontent-uuw-c69="" class="winners">
                        <div _ngcontent-uuw-c69="" class="winners__header d-md-none container">
                            <h2 _ngcontent-uuw-c69="">Meet our Previous Winners</h2><a _ngcontent-uuw-c69="" href="/competition-winners/featured"><span _ngcontent-uuw-c69="">View all Winners</span><span _ngcontent-uuw-c69="">→</span></a>
                        </div>
                        <div _ngcontent-uuw-c69="" class="winners__wrapper">
                            <div _ngcontent-uuw-c69="" class="winners__header d-none d-md-block">
                                <h2 _ngcontent-uuw-c69="">Meet <br _ngcontent-uuw-c69=""> our Previous Winners</h2><a _ngcontent-uuw-c69="" href="/competition-winners/featured"><span _ngcontent-uuw-c69="">View all Winners</span>
                                    <svg-icon _ngcontent-uuw-c69="" name="left-arrow" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M15 10a1.667 1.667 0 00-.492-1.167L10.933 5.25a.833.833 0 10-1.175 1.183L12.5 9.167H4.166a.833.833 0 000 1.667H12.5l-2.742 2.741a.834.834 0 001.175 1.184l3.575-3.584c.313-.311.49-.734.492-1.175z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </a>
                            </div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-1 winners__winner--odd ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/124137b7a679b04a5d5ec15cf372989ade5f6248.jpg&quot;);"></div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-2 winners__winner--even ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/9e3eac6e1d23417c13bf868d9a8609cf6eed68a2.jpg&quot;);"></div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-3 winners__winner--odd ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/083531a5fc9fa49b09ba15c0cc53ac54e1e5ef90.jpg&quot;);"></div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-4 winners__winner--even ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/fe7aaf4e6148a95f0c5efe1037011cf7fb8c441e.jpg&quot;);"></div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-5 winners__winner--odd ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/8f54ae27c6be9aa15479b03ac878fcbb21ee7729.jpg&quot;);"></div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-6 winners__winner--even ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/fda4f1b6acbad8d72a2274b47129b36ab2f89ab5.jpg&quot;);"></div>
                            <div _ngcontent-uuw-c69="" class="winners__winner winners__winner--w-7 winners__winner--odd ng-star-inserted" style="background-image: url(&quot;https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/26/6af76573507cbc52db594d116448a5862d90561f.jpg&quot;);"></div>
                            <!---->
                        </div>
                        <div _ngcontent-uuw-c69="" class="winners__bg"></div>
                    </div>
                </app-winners-section>
                <!---->
                <app-download-app _ngcontent-uuw-c76="" _nghost-uuw-c74="" class="ng-star-inserted">
                    <section _ngcontent-uuw-c74="" class="download">
                        <div _ngcontent-uuw-c74="" class="container">
                            <h2 _ngcontent-uuw-c74="" class="download__header">Download our app</h2>
                            <p _ngcontent-uuw-c74="" class="download__desc">Get exclusive offers only available to our app users.</p><img _ngcontent-uuw-c74="" src="/assets/images/download/iPhone_13_pro-lg.png" alt="#" class="d-none d-lg-inline-block download__iphone"><img _ngcontent-uuw-c74="" src="/assets/images/download/iPhone_13_pro.png" alt="#" class="d-lg-none download__iphone">
                            <div _ngcontent-uuw-c74="" class="download__bg"></div>
                            <div _ngcontent-uuw-c74="" class="download__buttons"><a _ngcontent-uuw-c74="" href="https://apps.apple.com/gb/app/7days-performance/id1455876956" target="_blank">
                                    <svg-icon _ngcontent-uuw-c74="" name="app-store" class="store-button store-button--apple" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 60" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_1311_24719)">
                                                <path d="M184.073 0H15.936c-.613 0-1.219 0-1.83.003-.512.003-1.02.012-1.536.02-1.122.011-2.242.1-3.349.264a12.047 12.047 0 00-3.177.94 10.792 10.792 0 00-2.705 1.769 9.505 9.505 0 00-1.97 2.431A9.211 9.211 0 00.325 8.282a17.548 17.548 0 00-.3 3.003c-.015.46-.017.922-.025 1.382v34.671c.008.466.01.917.025 1.383.014 1.006.114 2.01.3 3.003a9.191 9.191 0 001.044 2.856 9.434 9.434 0 001.97 2.422c.79.715 1.704 1.312 2.705 1.768 1 .456 2.071.775 3.177.946 1.107.163 2.227.252 3.35.265.516.01 1.023.016 1.535.016.611.003 1.217.003 1.83.003h168.137c.601 0 1.211 0 1.812-.003.509 0 1.032-.006 1.541-.016a24.642 24.642 0 003.342-.265 12.29 12.29 0 003.19-.946c1-.456 1.913-1.053 2.703-1.768a9.747 9.747 0 001.975-2.422c.504-.9.853-1.862 1.034-2.856.187-.993.29-1.997.31-3.003.007-.466.007-.917.007-1.383.013-.545.013-1.087.013-1.64V14.303c0-.549 0-1.094-.013-1.637 0-.46 0-.922-.007-1.382a18.164 18.164 0 00-.31-3.003 9.216 9.216 0 00-1.034-2.855c-1.032-1.804-2.668-3.273-4.678-4.2a12.232 12.232 0 00-3.19-.94 24.21 24.21 0 00-3.342-.265c-.509-.007-1.032-.016-1.541-.019C185.284 0 184.674 0 184.073 0z" fill="#A6A6A6"></path>
                                                <path d="M14.115 58.688c-.51 0-1.007-.006-1.512-.017a23.568 23.568 0 01-3.124-.244 10.631 10.631 0 01-2.769-.822 9.06 9.06 0 01-2.335-1.525 8.085 8.085 0 01-1.705-2.095 7.984 7.984 0 01-.908-2.486c-.172-.93-.265-1.87-.278-2.812-.01-.316-.025-1.37-.025-1.37v-34.65s.015-1.038.025-1.342c.013-.941.105-1.88.277-2.808a8.03 8.03 0 01.908-2.494 8.16 8.16 0 011.697-2.096 9.328 9.328 0 012.343-1.534c.87-.395 1.802-.67 2.764-.816a23.378 23.378 0 013.134-.246l1.508-.018h171.762l1.526.019c1.041.01 2.079.092 3.106.243.971.148 1.913.425 2.793.822 1.735.802 3.146 2.072 4.036 3.63.436.78.737 1.613.895 2.473.173.936.27 1.883.29 2.831.005.425.005.881.005 1.335.013.563.013 1.098.013 1.638v31.393c0 .545 0 1.077-.013 1.613 0 .488 0 .935-.006 1.395-.02.931-.115 1.86-.286 2.78a7.982 7.982 0 01-.903 2.505 8.32 8.32 0 01-1.697 2.078 9.08 9.08 0 01-2.339 1.534 10.6 10.6 0 01-2.788.825 23.295 23.295 0 01-3.124.244c-.489.01-1.002.017-1.5.017l-1.811.002-169.96-.002z" fill="#000"></path>
                                                <path d="M37.155 30.45a7.424 7.424 0 013.535-6.227 7.598 7.598 0 00-5.986-3.237c-2.52-.264-4.961 1.507-6.245 1.507-1.308 0-3.285-1.48-5.413-1.437a7.972 7.972 0 00-6.709 4.092c-2.9 5.023-.737 12.404 2.042 16.464 1.39 1.988 3.015 4.209 5.141 4.13 2.08-.086 2.858-1.327 5.37-1.327 2.488 0 3.217 1.327 5.386 1.277 2.232-.036 3.64-1.997 4.98-4.004a16.447 16.447 0 002.278-4.639 7.173 7.173 0 01-4.379-6.598zM33.058 18.316a7.309 7.309 0 001.672-5.236 7.437 7.437 0 00-4.811 2.49 6.955 6.955 0 00-1.716 5.041 6.148 6.148 0 004.855-2.295zM63.455 40.71h-7.1l-1.705 5.034h-3.007l6.725-18.627h3.124l6.725 18.627H65.16l-1.704-5.035zm-6.365-2.324h5.628l-2.774-8.17h-.078l-2.776 8.17zM82.741 38.955c0 4.22-2.258 6.931-5.667 6.931A4.603 4.603 0 0172.8 43.51h-.065v6.727H69.95V32.164h2.698v2.258h.051a4.816 4.816 0 014.325-2.4c3.446 0 5.718 2.724 5.718 6.933zm-2.865 0c0-2.75-1.42-4.557-3.589-4.557-2.13 0-3.562 1.845-3.562 4.557 0 2.736 1.432 4.569 3.562 4.569 2.168 0 3.589-1.795 3.589-4.57zM97.689 38.955c0 4.22-2.26 6.931-5.668 6.931a4.603 4.603 0 01-4.273-2.376h-.064v6.727h-2.788V32.164h2.698v2.258h.052a4.816 4.816 0 014.324-2.4c3.447 0 5.719 2.724 5.719 6.933zm-2.866 0c0-2.75-1.42-4.557-3.589-4.557-2.13 0-3.562 1.845-3.562 4.557 0 2.736 1.433 4.569 3.562 4.569 2.168 0 3.59-1.795 3.59-4.57zM107.567 40.554c.207 1.847 2.001 3.06 4.454 3.06 2.349 0 4.04-1.213 4.04-2.878 0-1.446-1.02-2.312-3.434-2.905l-2.414-.582c-3.42-.826-5.008-2.426-5.008-5.021 0-3.214 2.8-5.422 6.777-5.422 3.936 0 6.635 2.208 6.726 5.422h-2.814c-.169-1.86-1.706-2.981-3.951-2.981-2.246 0-3.782 1.135-3.782 2.787 0 1.317.981 2.092 3.382 2.685l2.052.504c3.822.904 5.41 2.44 5.41 5.164 0 3.485-2.776 5.667-7.191 5.667-4.131 0-6.92-2.131-7.1-5.5h2.853zM125.021 28.95v3.213h2.583v2.208h-2.583v7.486c0 1.163.517 1.706 1.652 1.706.307-.006.613-.027.917-.065v2.194a7.645 7.645 0 01-1.548.13c-2.75 0-3.822-1.034-3.822-3.667V34.37h-1.974v-2.208h1.974V28.95h2.801zM129.099 38.954c0-4.273 2.517-6.958 6.441-6.958 3.938 0 6.442 2.685 6.442 6.958 0 4.285-2.491 6.958-6.442 6.958-3.949 0-6.441-2.673-6.441-6.958zm10.043 0c0-2.931-1.343-4.661-3.602-4.661s-3.601 1.743-3.601 4.661c0 2.943 1.342 4.66 3.601 4.66s3.602-1.717 3.602-4.66zM144.281 32.163h2.658v2.312h.065a3.24 3.24 0 013.267-2.454c.321 0 .641.034.955.104v2.608a3.901 3.901 0 00-1.253-.169 2.806 2.806 0 00-2.782 1.93 2.802 2.802 0 00-.123 1.195v8.055h-2.787v-13.58zM164.078 41.755c-.375 2.465-2.776 4.157-5.848 4.157-3.95 0-6.402-2.647-6.402-6.893 0-4.26 2.465-7.023 6.285-7.023 3.758 0 6.12 2.581 6.12 6.699v.955h-9.591v.168a3.529 3.529 0 00.958 2.748 3.547 3.547 0 002.695 1.099 3.072 3.072 0 003.136-1.91h2.647zm-9.423-4.053h6.789a3.267 3.267 0 00-3.331-3.447 3.438 3.438 0 00-3.458 3.447zM56.739 13.096a3.96 3.96 0 014.211 4.447c0 2.86-1.545 4.503-4.211 4.503h-3.233v-8.95h3.233zm-1.843 7.685h1.688a2.813 2.813 0 002.951-3.22 2.82 2.82 0 00-2.951-3.2h-1.688v6.42zM62.52 18.666a3.2 3.2 0 116.371 0 3.2 3.2 0 11-6.37 0zm5 0c0-1.464-.657-2.32-1.812-2.32-1.158 0-1.81.856-1.81 2.32 0 1.476.652 2.326 1.81 2.326 1.155 0 1.812-.856 1.812-2.326zM77.36 22.047h-1.383l-1.396-4.975h-.106l-1.39 4.975h-1.37l-1.862-6.755h1.353l1.21 5.154h.1l1.388-5.154h1.279l1.388 5.154h.106l1.204-5.154h1.333l-1.855 6.755zM80.78 15.292h1.283v1.073h.1a2.022 2.022 0 012.015-1.203 2.196 2.196 0 012.338 2.512v4.372h-1.333V18.01c0-1.086-.472-1.626-1.457-1.626a1.55 1.55 0 00-1.613 1.712v3.952H80.78v-6.755zM88.64 12.655h1.333v9.392H88.64v-9.392zM91.827 18.667a3.199 3.199 0 016.222-1.315 3.2 3.2 0 01.149 1.315 3.202 3.202 0 11-6.371 0zm5 0c0-1.465-.659-2.32-1.813-2.32-1.159 0-1.81.855-1.81 2.32 0 1.475.651 2.325 1.81 2.325 1.154 0 1.812-.855 1.812-2.325zM99.6 20.137c0-1.216.905-1.917 2.512-2.017l1.83-.105v-.583c0-.714-.472-1.117-1.383-1.117-.744 0-1.26.274-1.408.751h-1.29c.136-1.16 1.227-1.904 2.76-1.904 1.693 0 2.648.843 2.648 2.27v4.615h-1.283v-.95h-.106a2.268 2.268 0 01-2.028 1.06 2.042 2.042 0 01-2.252-2.02zm4.342-.578v-.564l-1.65.105c-.93.062-1.352.379-1.352.974 0 .608.528.962 1.253.962a1.593 1.593 0 001.749-1.477zM107.021 18.666c0-2.134 1.097-3.486 2.804-3.486a2.226 2.226 0 012.071 1.185h.1v-3.71h1.333v9.392h-1.278v-1.068h-.105a2.346 2.346 0 01-2.121 1.178c-1.719 0-2.804-1.351-2.804-3.49zm1.377 0c0 1.433.675 2.295 1.805 2.295 1.123 0 1.818-.874 1.818-2.289 0-1.407-.702-2.294-1.818-2.294-1.122 0-1.805.867-1.805 2.288zM118.844 18.666a3.204 3.204 0 011.891-3.23 3.2 3.2 0 014.48 3.23 3.195 3.195 0 01-.815 2.461 3.202 3.202 0 01-5.409-1.144 3.211 3.211 0 01-.147-1.317zm5 0c0-1.464-.658-2.32-1.812-2.32-1.159 0-1.811.856-1.811 2.32 0 1.476.652 2.326 1.811 2.326 1.154 0 1.812-.856 1.812-2.326zM127.003 15.292h1.283v1.073h.1a2.023 2.023 0 012.015-1.203 2.198 2.198 0 012.338 2.512v4.372h-1.333V18.01c0-1.086-.471-1.626-1.457-1.626a1.55 1.55 0 00-1.613 1.712v3.952h-1.333v-6.755zM140.271 13.61v1.713h1.464v1.123h-1.464v3.473c0 .707.292 1.017.956 1.017.169 0 .339-.01.508-.03v1.11c-.24.043-.482.066-.725.068-1.483 0-2.073-.521-2.073-1.824v-3.814h-1.072v-1.123h1.072V13.61h1.334zM143.557 12.655h1.321v3.723h.106a2.079 2.079 0 012.059-1.21 2.23 2.23 0 012.243 1.55c.099.313.127.643.084.968v4.36h-1.335v-4.031c0-1.08-.502-1.626-1.444-1.626a1.575 1.575 0 00-1.613 1.037 1.585 1.585 0 00-.088.676v3.945h-1.333v-9.392zM157.142 20.223a2.747 2.747 0 01-2.927 1.954 3.068 3.068 0 01-3.12-3.486 3.099 3.099 0 01.107-1.32 3.116 3.116 0 013.007-2.21c1.879.001 3.013 1.285 3.013 3.406v.465h-4.769v.075a1.786 1.786 0 001.798 1.935 1.618 1.618 0 001.607-.819h1.284zm-4.689-2.177h3.411a1.634 1.634 0 00-.444-1.243 1.63 1.63 0 00-1.218-.506 1.725 1.725 0 00-1.749 1.75z" fill="#fff"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1311_24719">
                                                    <path fill="#fff" d="M0 0h200v60H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-uuw-c74="" href="https://play.google.com/store/apps/details?id=co.uk.daysperformance7.app" target="_blank">
                                    <svg-icon _ngcontent-uuw-c74="" name="google-store" class="store-button store-button-google" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 60" style="fill: currentcolor;">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M192.59 60H7.41C3.326 60 0 56.618 0 52.5v-45C0 3.367 3.326 0 7.41 0h185.18c4.08 0 7.41 3.367 7.41 7.5v45c0 4.118-3.33 7.5-7.41 7.5z" fill="#000"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M192.59 1.2c3.425 0 6.229 2.832 6.229 6.3v45c0 3.468-2.785 6.3-6.229 6.3H7.41c-3.425 0-6.229-2.832-6.229-6.3v-45c0-3.468 2.785-6.3 6.23-6.3H192.59zm0-1.2H7.41C3.326 0 0 3.382 0 7.5v45C0 56.633 3.326 60 7.41 60h185.18c4.08 0 7.41-3.367 7.41-7.5v-45c0-4.118-3.33-7.5-7.41-7.5z" fill="#A6A6A6"></path>
                                            <path d="M105.36 19.848c-1.335 0-2.461-.475-3.351-1.41a4.837 4.837 0 01-1.354-3.442c0-1.365.456-2.52 1.354-3.437.886-.935 2.012-1.41 3.348-1.41 1.321 0 2.446.475 3.351 1.41.898.946 1.354 2.102 1.354 3.437-.014 1.37-.47 2.525-1.354 3.438-.886.943-2.012 1.414-3.348 1.414zm-39.74 0c-1.306 0-2.439-.468-3.366-1.392-.92-.92-1.387-2.083-1.387-3.456 0-1.373.467-2.536 1.387-3.456.909-.924 2.042-1.392 3.366-1.392.648 0 1.277.131 1.88.397.593.258 1.075.61 1.432 1.04l.088.108-.997.995-.103-.123c-.563-.681-1.317-1.014-2.314-1.014-.89 0-1.667.322-2.307.957-.644.64-.972 1.478-.972 2.492 0 1.013.328 1.851.972 2.491.64.636 1.416.958 2.307.958.949 0 1.747-.322 2.37-.958.367-.374.595-.898.676-1.56h-3.197v-1.399h4.57l.018.127c.033.236.066.48.066.704 0 1.29-.383 2.334-1.14 3.104-.861.913-1.987 1.377-3.349 1.377zm52.839-.198h-1.41l-4.315-7.021.036 1.264v5.753h-1.409V10.35h1.608l.044.072 4.059 6.613-.037-1.26V10.35h1.424v9.3zm-23.688 0h-1.427v-7.9h-2.476v-1.4h6.376v1.4h-2.476v7.9h.003zm-5.066 0h-1.424v-9.3h1.424v9.3zm-8.002 0h-1.424v-7.9h-2.477v-1.4h6.377v1.4h-2.477v7.9zm-4.802-.015h-5.46V10.35h5.46v1.4h-4.032v2.55h3.638v1.385h-3.639v2.55h4.033v1.4zm26.152-2.159c.637.648 1.41.973 2.307.973.924 0 1.678-.318 2.307-.973.626-.636.942-1.47.942-2.476s-.316-1.844-.938-2.476a3.132 3.132 0 00-2.307-.973c-.923 0-1.678.318-2.303.973-.626.636-.942 1.47-.942 2.476s.313 1.844.934 2.476z" fill="#fff"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M100.523 32.633c-3.477 0-6.296 2.682-6.296 6.382 0 3.666 2.837 6.381 6.296 6.381 3.477 0 6.295-2.7 6.295-6.381 0-3.7-2.818-6.382-6.295-6.382zm0 10.234c-1.902 0-3.54-1.6-3.54-3.867 0-2.3 1.641-3.868 3.54-3.868 1.902 0 3.539 1.567 3.539 3.868.004 2.282-1.637 3.867-3.539 3.867zM86.788 32.633c-3.477 0-6.295 2.682-6.295 6.382 0 3.666 2.836 6.381 6.295 6.381 3.477 0 6.295-2.7 6.295-6.381 0-3.7-2.822-6.382-6.295-6.382zm0 10.234c-1.902 0-3.54-1.6-3.54-3.867 0-2.3 1.641-3.868 3.54-3.868 1.902 0 3.54 1.567 3.54 3.868 0 2.282-1.638 3.867-3.54 3.867zm-16.344-8.285v2.7h6.376c-.194 1.516-.688 2.634-1.442 3.401-.934.95-2.377 1.983-4.919 1.983-3.919 0-6.983-3.217-6.983-7.201 0-3.984 3.064-7.201 6.983-7.201 2.116 0 3.657.85 4.801 1.934l1.884-1.915c-1.59-1.549-3.705-2.735-6.67-2.735-5.376 0-9.887 4.452-9.887 9.902 0 5.465 4.508 9.901 9.887 9.901 2.903 0 5.08-.965 6.803-2.783 1.755-1.784 2.31-4.301 2.31-6.333 0-.632-.047-1.2-.147-1.683h-9c.004-.004.004.03.004.03zm66.85 2.102c-.526-1.432-2.116-4.066-5.376-4.066-3.23 0-5.916 2.585-5.916 6.382 0 3.583 2.656 6.381 6.229 6.381 2.87 0 4.54-1.784 5.228-2.831l-2.13-1.452c-.706 1.066-1.689 1.766-3.083 1.766-1.409 0-2.395-.651-3.05-1.934l8.392-3.535c0 .004-.294-.71-.294-.71zm-8.558 2.132c-.067-2.465 1.884-3.718 3.278-3.718 1.1 0 2.016.55 2.329 1.35l-5.607 2.368zM121.918 45h2.756V26.252h-2.756V45zm-4.526-10.95h-.099c-.622-.751-1.803-1.432-3.311-1.432-3.131 0-6.016 2.802-6.016 6.4 0 3.584 2.87 6.352 6.016 6.352 1.49 0 2.689-.684 3.311-1.451h.099v.916c0 2.435-1.28 3.748-3.344 3.748-1.689 0-2.738-1.234-3.164-2.267l-2.396 1.018c.688 1.683 2.524 3.767 5.556 3.767 3.231 0 5.968-1.934 5.968-6.651V33h-2.605v1.05h-.015zm-3.164 8.818c-1.902 0-3.492-1.616-3.492-3.85 0-2.252 1.59-3.882 3.492-3.882 1.884 0 3.345 1.65 3.345 3.882.018 2.234-1.457 3.85-3.345 3.85zm35.969-16.616h-6.59V45h2.756v-7.1h3.838c3.05 0 6.049-2.248 6.049-5.817 0-3.568-2.988-5.831-6.053-5.831zm.081 9.03h-3.918v-6.434h3.918c2.064 0 3.231 1.732 3.231 3.217 0 1.47-1.182 3.217-3.231 3.217zm17.017-2.682c-2.002 0-4.066.901-4.919 2.865l2.443 1.032c.526-1.032 1.49-1.384 2.509-1.384 1.428 0 2.87.868 2.903 2.417v.198c-.493-.284-1.575-.718-2.87-.718-2.638 0-5.313 1.466-5.313 4.215 0 2.518 2.164 4.134 4.574 4.134 1.85 0 2.869-.85 3.506-1.833h.099v1.451h2.657v-7.182c0-3.344-2.443-5.196-5.589-5.196zm-.346 10.267c-.901 0-2.163-.448-2.163-1.6 0-1.452 1.574-2.002 2.917-2.002 1.215 0 1.788.266 2.51.633-.199 1.683-1.597 2.955-3.264 2.97zM182.575 33l-3.164 8.132h-.099L176.033 33h-2.965l4.919 11.367-2.804 6.319h2.87L185.622 33h-3.047zm-24.806 12h2.756V26.252h-2.756V45z" fill="#fff"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.394 11.3c-.427.468-.673 1.182-.673 2.117v33.169c0 .935.246 1.65.688 2.098l.114.101 18.279-18.583v-.415L15.508 11.199l-.114.101z" fill="url(#paint0_linear_1311_24720)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.884 36.415l-6.096-6.198v-.434l6.096-6.199.133.083 7.211 4.167c2.064 1.182 2.064 3.134 0 4.332l-7.211 4.167-.133.082z" fill="url(#paint1_linear_1311_24720)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.016 36.333L33.785 30 15.394 48.7c.673.733 1.802.815 3.064.1l21.558-12.467z" fill="url(#paint2_linear_1311_24720)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.016 23.667l-21.558-12.45c-1.262-.732-2.395-.631-3.064.102l18.392 18.68 6.23-6.332z" fill="url(#paint3_linear_1311_24720)"></path>
                                            <path opacity=".2" fill-rule="evenodd" clip-rule="evenodd" d="M39.885 36.199l-21.41 12.366c-1.196.7-2.263.65-2.951.015l-.114.116.114.1c.688.633 1.755.685 2.95-.014l21.558-12.449-.147-.134z" fill="#000"></path>
                                            <path opacity=".12" fill-rule="evenodd" clip-rule="evenodd" d="M47.227 31.949l-7.362 4.25.133.134 7.211-4.167c1.034-.599 1.542-1.384 1.542-2.166-.063.718-.589 1.399-1.523 1.949z" fill="#000"></path>
                                            <path opacity=".25" fill-rule="evenodd" clip-rule="evenodd" d="M18.459 11.435L47.227 28.05c.935.535 1.461 1.234 1.542 1.949 0-.782-.508-1.568-1.542-2.166L18.46 11.218c-2.064-1.2-3.738-.198-3.738 2.2v.216c0-2.401 1.674-3.385 3.738-2.2z" fill="#fff"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_1311_24720" x1="32.162" y1="13.06" x2="2.819" y2="20.75" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00A0FF"></stop>
                                                    <stop offset=".007" stop-color="#00A1FF"></stop>
                                                    <stop offset=".26" stop-color="#00BEFF"></stop>
                                                    <stop offset=".512" stop-color="#00D2FF"></stop>
                                                    <stop offset=".76" stop-color="#00DFFF"></stop>
                                                    <stop offset="1" stop-color="#00E3FF"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_1311_24720" x1="49.92" y1="30" x2="14.22" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFE000"></stop>
                                                    <stop offset=".409" stop-color="#FFBD00"></stop>
                                                    <stop offset=".775" stop-color="orange"></stop>
                                                    <stop offset="1" stop-color="#FF9C00"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_1311_24720" x1="36.628" y1="33.446" x2="12.544" y2="73.317" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FF3A44"></stop>
                                                    <stop offset="1" stop-color="#C31162"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint3_linear_1311_24720" x1="10.762" y1=".268" x2="21.507" y2="18.075" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#32A071"></stop>
                                                    <stop offset=".069" stop-color="#2DA771"></stop>
                                                    <stop offset=".476" stop-color="#15CF74"></stop>
                                                    <stop offset=".801" stop-color="#06E775"></stop>
                                                    <stop offset="1" stop-color="#00F076"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg></svg-icon>
                                </a></div>
                        </div>
                    </section>
                </app-download-app>
                <!---->
                <app-payment-systems _ngcontent-uuw-c76="" _nghost-uuw-c67="">
                    <div _ngcontent-uuw-c67="" class="payments container_product">
                        <div _ngcontent-uuw-c67="" class="payments__payment ng-star-inserted">
                            <svg-icon _ngcontent-uuw-c67="" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 24" style="fill: currentcolor;">
                                    <rect y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.739 7.533a7.21 7.21 0 00-2.496-.428c-2.752 0-4.691 1.381-4.707 3.36-.015 1.464 1.384 2.28 2.44 2.767 1.084.499 1.449.817 1.443 1.263-.007.682-.865.994-1.666.994-1.114 0-1.706-.154-2.621-.534l-.36-.162-.39 2.28c.651.284 1.853.53 3.102.543 2.928 0 4.83-1.365 4.85-3.479.01-1.158-.731-2.04-2.337-2.766-.975-.472-1.57-.787-1.564-1.263 0-.423.504-.876 1.594-.876a5.138 5.138 0 012.085.39l.25.117.377-2.206zm-12.885 9.932l1.741-10.182h2.785l-1.742 10.182h-2.784zM35.728 7.292h2.153l2.254 10.176H37.55s-.255-1.17-.338-1.526c-.216 0-1.115 0-1.96-.002h-.007l-1.6-.002c-.109.276-.587 1.53-.587 1.53h-2.925l4.136-9.331c.294-.664.792-.845 1.46-.845zm-1.281 6.563c.23-.586 1.11-2.847 1.11-2.847-.008.014.046-.126.12-.317.078-.202.177-.459.25-.654l.187.878.646 2.94h-2.313zm-21.656.379l2.726-6.944h2.95l-4.384 10.163-2.947.004L8.643 8.55c1.768.882 3.35 2.644 3.857 4.272l.291 1.41z" fill="#1A1F71"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.261 7.283H5.77l-.036.212c3.494.844 5.806 2.88 6.766 5.328l-.977-4.68c-.168-.645-.657-.837-1.262-.86z" fill="#F9A51A"></path>
                                </svg></svg-icon>
                        </div>
                        <div _ngcontent-uuw-c67="" class="payments__payment ng-star-inserted">
                            <svg-icon _ngcontent-uuw-c67="" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 24" style="fill: currentcolor;">
                                    <rect x=".189" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.672 20.483c4.851 0 8.785-3.85 8.785-8.6s-3.934-8.6-8.785-8.6c-4.852 0-8.786 3.85-8.786 8.6s3.934 8.6 8.786 8.6z" fill="#F79E1B"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.574 20.483c4.852 0 8.785-3.85 8.785-8.6s-3.933-8.6-8.785-8.6-8.785 3.85-8.785 8.6 3.933 8.6 8.785 8.6z" fill="#EB001B"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.123 5.215c-1.975 1.577-3.236 3.978-3.236 6.668s1.261 5.091 3.236 6.668c1.976-1.577 3.237-3.978 3.237-6.668s-1.261-5.091-3.237-6.668z" fill="#FF5F00"></path>
                                </svg></svg-icon>
                        </div>
                        <div _ngcontent-uuw-c67="" class="payments__payment ng-star-inserted">
                            <svg-icon _ngcontent-uuw-c67="" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 24" style="fill: currentcolor;">
                                    <rect x=".755" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.388 19.9l.313-1.893-.697-.016H16.68l2.31-13.972a.183.183 0 01.065-.11.194.194 0 01.124-.043h5.607c1.861 0 3.146.37 3.817 1.098.314.342.514.7.611 1.093.102.413.104.906.005 1.507l-.008.044v.386l.315.17a2.2 2.2 0 01.636.462c.27.293.443.664.517 1.105.076.453.05.992-.074 1.603-.143.702-.375 1.314-.688 1.814a3.8 3.8 0 01-1.091 1.14c-.416.281-.91.495-1.47.632a7.676 7.676 0 01-1.836.202h-.436c-.313 0-.615.107-.853.3a1.246 1.246 0 00-.445.756l-.033.171-.553 3.337-.025.123c-.006.039-.018.058-.034.071a.095.095 0 01-.058.02h-2.694z" fill="#28356A"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.822 7.653a8.667 8.667 0 01-.057.313c-.74 3.62-3.27 4.871-6.5 4.871h-1.646a.788.788 0 00-.79.645l-1.08 6.538c-.04.244.157.463.415.463h2.918c.346 0 .64-.239.694-.564l.028-.141.55-3.324.035-.183a.692.692 0 01.693-.565h.437c2.827 0 5.04-1.094 5.687-4.261.27-1.323.13-2.428-.585-3.205a2.775 2.775 0 00-.799-.587z" fill="#019DDE"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.05 7.359a6.01 6.01 0 00-.72-.153c-.443-.068-.93-.1-1.45-.1h-4.395a.726.726 0 00-.303.065.672.672 0 00-.39.5l-.935 5.646-.026.165a.788.788 0 01.79-.645h1.644c3.231 0 5.761-1.252 6.5-4.871.023-.107.041-.211.058-.313a4.042 4.042 0 00-.774-.294z" fill="#00164C"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.792 7.671a.67.67 0 01.39-.5.725.725 0 01.303-.065h4.395c.52 0 1.006.033 1.45.101a6.048 6.048 0 01.885.201c.218.07.42.15.608.245.22-1.338-.002-2.249-.76-3.074-.837-.908-2.346-1.296-4.278-1.296h-5.607a.79.79 0 00-.792.646l-2.335 14.115c-.047.28.18.532.475.532h3.461L21.792 7.67z" fill="#012F86"></path>
                                </svg></svg-icon>
                        </div>
                        <div _ngcontent-uuw-c67="" class="payments__payment ng-star-inserted">
                            <svg-icon _ngcontent-uuw-c67="" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 24" style="fill: currentcolor;">
                                    <rect x=".943" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                    <g clip-path="url(#clip0_869_26994)">
                                        <path d="M18.487 11.982c0-.325-.029-.65-.087-.97h-4.763v1.837h2.727a2.136 2.136 0 01-.347.821 2.273 2.273 0 01-.66.626v1.196h1.627c.953-.83 1.503-2.058 1.503-3.51z" fill="#4285F4"></path>
                                        <path d="M13.637 16.643c1.362 0 2.51-.423 3.347-1.152L15.356 14.3c-.453.291-1.036.456-1.719.456-1.317 0-2.435-.838-2.835-1.968H9.127v1.229a4.881 4.881 0 001.861 1.917c.797.464 1.714.71 2.65.71z" fill="#34A853"></path>
                                        <path d="M10.802 12.787a2.707 2.707 0 010-1.826V9.732H9.126a4.553 4.553 0 00-.539 2.143c0 .744.185 1.477.539 2.142l1.676-1.23z" fill="#FBBC04"></path>
                                        <path d="M23.05 12.708v3.36h-1.13v-8.3h2.994c.358-.008.713.052 1.046.175.333.123.636.308.893.543.256.224.46.496.599.799a2.287 2.287 0 010 1.915c-.14.303-.343.575-.599.8-.524.471-1.17.707-1.939.706H23.05v.002zm0-3.918v2.898h1.893c.3.005.596-.073.85-.225a1.47 1.47 0 00.576-.631c.122-.26.16-.547.11-.827-.049-.28-.184-.54-.39-.747-.01-.01-.019-.02-.03-.029a1.476 1.476 0 00-.509-.333 1.548 1.548 0 00-.608-.107l-1.892.001zm7.216 1.414c.836 0 1.494.21 1.976.631.482.421.723.999.724 1.733v3.5h-1.08v-.787h-.05c-.467.65-1.089.974-1.865.973-.663 0-1.217-.185-1.663-.556a1.792 1.792 0 01-.5-.624 1.693 1.693 0 01-.169-.767c0-.588.236-1.055.706-1.402.47-.346 1.098-.52 1.883-.52.67 0 1.223.116 1.656.346v-.244c.002-.18-.04-.358-.12-.521a1.224 1.224 0 00-.346-.422 1.653 1.653 0 00-1.09-.389c-.63 0-1.13.251-1.497.754l-.993-.593c.546-.742 1.355-1.112 2.428-1.112zm-1.461 4.126c0 .135.033.27.098.39a.87.87 0 00.276.305c.25.185.56.284.877.278a1.86 1.86 0 001.27-.498c.374-.332.561-.723.56-1.17-.351-.265-.842-.398-1.472-.398-.459 0-.841.104-1.148.313-.308.213-.462.47-.462.78h.001zm10.361-3.94l-3.77 8.182h-1.165l1.398-2.863-2.48-5.319h1.228l1.79 4.081h.024l1.744-4.08h1.231z" fill="#5F6368"></path>
                                        <path d="M13.637 8.993a2.832 2.832 0 011.937.715l1.442-1.36a5.018 5.018 0 00-3.379-1.243c-.936 0-1.853.246-2.65.71a4.884 4.884 0 00-1.861 1.917l1.677 1.23c.4-1.13 1.517-1.969 2.834-1.969z" fill="#EA4335"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_869_26994">
                                            <path fill="#fff" transform="translate(8.587 7.105)" d="M0 0h30.579v11.467H0z"></path>
                                        </clipPath>
                                    </defs>
                                </svg></svg-icon>
                        </div>
                        <div _ngcontent-uuw-c67="" class="payments__payment ng-star-inserted">
                            <svg-icon _ngcontent-uuw-c67="" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 24" style="fill: currentcolor;">
                                    <rect x=".132" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.779 6.535c.064.572-.17 1.146-.519 1.558-.349.412-.92.733-1.48.69-.076-.56.206-1.143.53-1.508.36-.413.967-.72 1.469-.74zm1.81 3.329c-.092.054-1.085.648-1.074 1.853.014 1.443 1.266 1.945 1.337 1.973l.003.001-.004.012a5.336 5.336 0 01-.688 1.376c-.415.593-.846 1.186-1.526 1.198-.326.006-.545-.087-.772-.183-.237-.1-.484-.204-.874-.204-.41 0-.668.107-.917.21-.216.09-.424.178-.718.189-.656.024-1.155-.643-1.574-1.235-.857-1.21-1.512-3.421-.633-4.915a2.449 2.449 0 012.064-1.222c.365-.007.719.13 1.029.25.236.092.447.174.617.174.153 0 .358-.08.598-.172.376-.145.837-.323 1.312-.276.325.014 1.238.13 1.824.968a.28.28 0 00-.005.003z" fill="#192A36"></path>
                                    <path d="M20.543 15.238h1.024v-2.929h2.07c1.54 0 2.633-1.086 2.633-2.644v-.011c0-1.558-1.092-2.622-2.633-2.622h-3.094v8.206zm2.832-7.296c1.172 0 1.848.643 1.848 1.723v.012c0 1.08-.676 1.723-1.848 1.723h-1.808V7.942h1.808zm5.301 7.404c.825 0 1.467-.358 1.854-1.012h.09v.904h.99v-4.197C31.61 9.768 30.774 9 29.28 9c-1.308 0-2.24.648-2.4 1.61l-.006.033h.99l.006-.017c.159-.477.642-.75 1.376-.75.915 0 1.376.409 1.376 1.165v.558l-1.757.108c-1.428.085-2.235.716-2.235 1.808v.011c0 1.115.881 1.82 2.047 1.82zm-1.035-1.842v-.012c0-.608.41-.938 1.342-.995l1.638-.102v.557c0 .876-.734 1.535-1.74 1.535-.711 0-1.24-.364-1.24-.983zm5.472 3.884c1.086 0 1.592-.399 2.098-1.775l2.394-6.505h-1.04l-1.678 5.044h-.091l-1.683-5.044h-1.058l2.269 6.136-.114.364c-.222.705-.563.96-1.126.96-.136 0-.29-.005-.41-.028v.814a2.9 2.9 0 00.439.034z" fill="#192A36"></path>
                                </svg></svg-icon>
                        </div>
                        <!---->
                    </div>
                </app-payment-systems>
                <app-footer _ngcontent-uuw-c76="" _nghost-uuw-c64="">
                    <div _ngcontent-uuw-c64="" class="footer">
                        <div _ngcontent-uuw-c64="" class="footer__wrapper">
                            <div _ngcontent-uuw-c64="" class="footer__links"><a _ngcontent-uuw-c64="" routerlink="/" title="" class="footer__logo" href="/"><img _ngcontent-uuw-c64="" src="/assets/svg/logo.svg" alt="7days Performance" class="footer__logo-image"></a>
                                <ul _ngcontent-uuw-c64="">
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/cookie-and-privacy-policy" href="/cookie-and-privacy-policy">Cookie &amp; Privacy Policy</a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/website-terms" href="/website-terms">Website Terms</a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/responsible-gambling" href="/responsible-gambling">Responsible Gambling</a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/reviews" href="/reviews">Reviews</a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/faq" href="/faq">FAQ</a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/security" href="/security">Security</a></li>
                                    <li _ngcontent-uuw-c64="">&nbsp;</li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" routerlink="/about-us" href="/about-us">Our Team</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-uuw-c64="" class="footer__social">
                                <div _ngcontent-uuw-c64="">
                                    <p _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" href="mailto:hello@7daysperformance.co.uk" class="footer__social-email">hello@7daysperformance.co.uk</a></p>
                                    <p _ngcontent-uuw-c64="" class="footer__annotation--light"> 7days Performance - Technology and Marketing powered by <a _ngcontent-uuw-c64="" href="https://sevencanyon.com/" target="_blank" class="footer__annotation--light"><u _ngcontent-uuw-c64="">SevenCanyon</u></a></p>
                                    <p _ngcontent-uuw-c64="" class="footer__annotation--light">© All rights reserved</p>
                                </div>
                                <ul _ngcontent-uuw-c64="">
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-uuw-c64="" name="facebook-new" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm1.668 16.703v8.705h-3.602v-8.704h-1.8v-3h1.8v-1.801c0-2.447 1.016-3.903 3.903-3.903h2.403v3H18.87c-1.124 0-1.198.42-1.198 1.202l-.004 1.502h2.721l-.318 3h-2.403z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-uuw-c64="" name="instagram-new" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.002.503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.164-16-16-16zm-3.518 7.518c.91-.041 1.201-.051 3.519-.051H16c2.319 0 2.608.01 3.518.051.909.042 1.53.186 2.073.397a4.17 4.17 0 011.511.984c.475.474.767.95.985 1.511.21.543.354 1.163.397 2.072.04.91.051 1.2.051 3.518 0 2.318-.01 2.608-.051 3.518-.043.908-.187 1.528-.397 2.071a4.189 4.189 0 01-.985 1.512c-.474.474-.949.767-1.51.985-.543.21-1.164.354-2.072.396-.91.041-1.2.052-3.518.052-2.317 0-2.608-.01-3.518-.052-.909-.042-1.529-.185-2.072-.396a4.18 4.18 0 01-1.511-.985 4.181 4.181 0 01-.984-1.512c-.211-.543-.355-1.163-.397-2.071-.04-.91-.051-1.2-.051-3.518 0-2.317.01-2.608.051-3.519.041-.908.185-1.528.397-2.07A4.19 4.19 0 018.9 9.401c.475-.475.95-.766 1.512-.984.543-.211 1.163-.355 2.071-.397z" fill="#C4C9CE"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.236 9.508h.766c2.278 0 2.548.008 3.448.05.832.037 1.283.176 1.584.293.398.155.682.34.98.638.3.299.484.583.64.981.116.3.255.752.293 1.585.041.9.05 1.17.05 3.447s-.009 2.547-.05 3.447c-.038.832-.177 1.283-.294 1.584-.154.398-.34.682-.638.98a2.637 2.637 0 01-.98.638c-.301.118-.753.256-1.585.294-.9.041-1.17.05-3.448.05-2.279 0-2.549-.009-3.449-.05-.832-.038-1.283-.177-1.584-.294a2.644 2.644 0 01-.981-.638 2.644 2.644 0 01-.64-.98c-.116-.301-.255-.753-.293-1.585-.04-.9-.049-1.17-.049-3.448 0-2.28.008-2.548.049-3.448.038-.832.177-1.283.294-1.584.155-.398.34-.683.639-.981.298-.299.583-.484.98-.639.302-.117.753-.256 1.585-.294.788-.036 1.093-.046 2.683-.048v.002zm5.32 1.417a1.024 1.024 0 100 2.048 1.024 1.024 0 000-2.049zm-8.936 5.578a4.382 4.382 0 118.765 0 4.382 4.382 0 01-8.765 0z" fill="#C4C9CE"></path>
                                                    <path d="M16.003 13.66a2.845 2.845 0 110 5.688 2.845 2.845 0 010-5.689z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-uuw-c64=""><a _ngcontent-uuw-c64="" href="https://www.youtube.com/channel/UCxB-y6oGP1lSCHwoE2hKvmA" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-uuw-c64="" name="youtube-new" _nghost-uuw-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm6.668 10.5a2.166 2.166 0 011.509 1.55c.356 1.366.356 4.217.356 4.217s0 2.852-.356 4.218a2.167 2.167 0 01-1.51 1.55c-1.33.366-6.667.366-6.667.366s-5.337 0-6.668-.366a2.167 2.167 0 01-1.509-1.55c-.356-1.366-.356-4.218-.356-4.218s0-2.851.356-4.217a2.167 2.167 0 011.51-1.55c1.33-.366 6.667-.366 6.667-.366s5.337 0 6.668.366z" fill="#C4C9CE"></path>
                                                    <path d="M14.4 19.703V14.37l4.267 2.666-4.267 2.667z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </app-footer>
            </app-home>
            <!---->
        </div>
    </div>
</div>
@endsection
