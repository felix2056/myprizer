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

        .loader-icon__box[_ngcontent-fqv-c78] {
            text-align: center;
            padding: 10px 0
        }

        .loader-icon__page-box[_ngcontent-fqv-c78] {
            text-align: center;
            padding: 100px 0 300px
        }

        .loader-icon__icon[_ngcontent-fqv-c78] {
            width: 44px;
            height: 44px
        }

        .loader-icon__intext[_ngcontent-fqv-c78] {
            width: 12px;
            height: 12px;
            line-height: inherit
        }

        .loader-icon__button[_ngcontent-fqv-c78] {
            width: 16px;
            height: 16px
        }

        .post-grid__col[_ngcontent-fqv-c78] {
            max-width: 33.33333%;
            margin-bottom: 30px;
            padding: 0 15px
        }

        @media (max-width: 767.9px) {
            .post-grid__col[_ngcontent-fqv-c78] {
                max-width: 100%
            }
        }

        .post-grid__older-posts[_ngcontent-fqv-c78] {
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

        .header[_ngcontent-fqv-c63] {
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
            .header[_ngcontent-fqv-c63] {
                height: 100px
            }
        }

        @media (min-width: 992px) {
            .header--short[_ngcontent-fqv-c63] {
                height: 62px
            }
        }

        .header__nav[_ngcontent-fqv-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            margin-left: auto
        }

        @media (min-width: 1200px) {
            .header__button_sm[_ngcontent-fqv-c63] {
                display: none !important
            }
        }

        .logo[_ngcontent-fqv-c63] {
            padding: 0 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .logo[_ngcontent-fqv-c63] {
                padding: 0 30px
            }
        }

        @media (min-width: 768px) {
            .logo[_ngcontent-fqv-c63] {
                padding: 0 40px
            }
        }

        .logo__img[_ngcontent-fqv-c63] {
            width: auto;
            height: 35px;
            transition: width .2s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 330px) {
            .logo__img[_ngcontent-fqv-c63] {
                height: 40px
            }
        }

        @media (min-width: 360px) {
            .logo__img[_ngcontent-fqv-c63] {
                height: 45px
            }
        }

        @media (min-width: 992px) {
            .logo__img[_ngcontent-fqv-c63] {
                height: 56px
            }
        }

        @media (min-width: 768px) {
            .header--short[_ngcontent-fqv-c63] .logo__img[_ngcontent-fqv-c63] {
                height: 45px
            }
        }

        .main-nav[_ngcontent-fqv-c63] {
            display: none
        }

        @media (min-width: 1200px) {
            .main-nav[_ngcontent-fqv-c63] {
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

        .main-nav__item[_ngcontent-fqv-c63] {
            height: 100%
        }

        .main-nav__link[_ngcontent-fqv-c63] {
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
            .main-nav__link[_ngcontent-fqv-c63] {
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

        .nav-button[_ngcontent-fqv-c63] {
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
            .nav-button[_ngcontent-fqv-c63] {
                width: 81px
            }
        }

        @media (min-width: 992px) {
            .nav-button[_ngcontent-fqv-c63] {
                width: 101px
            }
        }

        .nav-button[_ngcontent-fqv-c63]:hover,
        .nav-button[_ngcontent-fqv-c63]:focus {
            outline: 0;
            background-color: #f6f7f9
        }

        .nav-button__icon[_ngcontent-fqv-c63] {
            color: #6e7191;
            width: 20px;
            height: 20px
        }

        .nav-button__icon_hamburger[_ngcontent-fqv-c63] {
            width: 24px;
            height: 24px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_hamburger[_ngcontent-fqv-c63] {
                height: 22px;
                width: 20px
            }
        }

        .nav-button__icon_shopping-cart[_ngcontent-fqv-c63] {
            width: 22px;
            height: 22px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_shopping-cart[_ngcontent-fqv-c63] {
                width: 20px;
                height: 20px
            }
        }

        .nav-button__label[_ngcontent-fqv-c63] {
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
            .nav-button__label[_ngcontent-fqv-c63] {
                min-width: 22px;
                height: 22px;
                line-height: 22px;
                padding: 0 4px;
                font-size: 14px
            }
        }

        .nav-button__loading[_ngcontent-fqv-c63] {
            display: inline-block;
            width: 14px
        }

        .mobile-menu[_ngcontent-fqv-c63] {
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

        .mobile-menu_shown[_ngcontent-fqv-c63] {
            background-color: rgba(0, 0, 0, .78);
            pointer-events: all
        }

        .mobile-menu__panel[_ngcontent-fqv-c63] {
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

        .mobile-menu_shown[_ngcontent-fqv-c63] .mobile-menu__panel[_ngcontent-fqv-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close[_ngcontent-fqv-c63] {
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

        .mobile-menu__close[_ngcontent-fqv-c63]:hover,
        .mobile-menu__close[_ngcontent-fqv-c63]:focus {
            color: #ea1c0d;
            outline: none
        }

        .mobile-menu_shown[_ngcontent-fqv-c63] .mobile-menu__close[_ngcontent-fqv-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close-icon[_ngcontent-fqv-c63] {
            width: 60px;
            height: 60px
        }

        .mobile-menu__nav[_ngcontent-fqv-c63] {
            margin-bottom: 25px;
            padding: 0 13px 37px;
            border-bottom: 1px solid #0a2539
        }

        .mobile-menu__nav-list[_ngcontent-fqv-c63] {
            margin: 0;
            padding: 0
        }

        .mobile-menu__item[_ngcontent-fqv-c63] {
            list-style-type: none
        }

        .mobile-menu__divider[_ngcontent-fqv-c63] {
            height: 1px;
            display: block;
            margin: 13px;
            width: calc(100% - 26px);
            background-color: #5a7b93
        }

        .mobile-menu__title[_ngcontent-fqv-c63] {
            color: #449bd8;
            font-size: 14px;
            display: block;
            padding: 16px 13px 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase
        }

        .mobile-menu__link[_ngcontent-fqv-c63] {
            display: inline-block;
            font-size: 16px;
            line-height: 1;
            padding: 13px;
            color: #f6f7f9;
            cursor: pointer;
            transition: color .3s;
            text-decoration: none
        }

        .mobile-menu__link[_ngcontent-fqv-c63]:hover {
            color: #d7dce5
        }

        .mobile-menu__bottom-wrapper[_ngcontent-fqv-c63] {
            padding: 0 25.5px
        }

        .mobile-menu__text[_ngcontent-fqv-c63] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
            line-height: 29px;
            color: #fff
        }

        .mobile-menu__socials[_ngcontent-fqv-c63] {
            display: -webkit-flex;
            display: flex;
            margin: 0 -12px
        }

        .mobile-menu__social-link[_ngcontent-fqv-c63] {
            display: inline-block;
            padding: 0 12px;
            text-decoration: none
        }

        .mobile-menu__social-icon[_ngcontent-fqv-c63] {
            width: 40px;
            height: 40px
        }

        .native-nav[_ngcontent-fqv-c63] {
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

        .native-nav__button[_ngcontent-fqv-c63] {
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

        .native-nav__button[_ngcontent-fqv-c63]:hover {
            color: rgba(0, 0, 0, .7);
            text-decoration: none
        }

        .native-nav__button_inactive[_ngcontent-fqv-c63] {
            color: rgba(0, 0, 0, .3) !important
        }

        .native-nav__icon[_ngcontent-fqv-c63] {
            font-size: 15px;
            line-height: 18px
        }

        .native-nav__label[_ngcontent-fqv-c63] {
            font-size: 12px;
            line-height: 18px;
            padding-top: 1px
        }

        .header-container[_ngcontent-fqv-c63] {
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

        .header-placeholder[_ngcontent-fqv-c63] {
            height: 100px;
            width: 100%
        }

        @media (max-width: 991.9px) {
            .header-placeholder[_ngcontent-fqv-c63] {
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

        .footer[_ngcontent-fqv-c64] {
            text-align: center;
            padding: 40px 0;
            font-family: Exo, sans-serif;
            background-color: #f5f6f7
        }

        @media (min-width: 992px) {
            .footer[_ngcontent-fqv-c64] {
                padding: 80px 40px
            }
        }

        .footer[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] {
            padding: 0
        }

        .footer[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] {
            list-style: none
        }

        @media (min-width: 992px) {
            .footer__wrapper[_ngcontent-fqv-c64] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        .footer__logo[_ngcontent-fqv-c64] {
            display: inline-block
        }

        .footer__logo-image[_ngcontent-fqv-c64] {
            height: 45px;
            display: inline-block
        }

        @media (min-width: 992px) {
            .footer__logo-image[_ngcontent-fqv-c64] {
                height: 55px
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-fqv-c64] {
                display: -webkit-flex;
                display: flex
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] {
                text-align: left;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin: 0 0 0 104px;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content
            }
        }

        .footer__links[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] {
            margin-bottom: 12px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] {
                margin-right: 137px
            }
        }

        .footer__links[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] a[_ngcontent-fqv-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__links[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] a[_ngcontent-fqv-c64]:hover {
            text-decoration: underline
        }

        .footer__social-email[_ngcontent-fqv-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__social-email[_ngcontent-fqv-c64]:hover {
            text-decoration: underline
        }

        .footer__social[_ngcontent-fqv-c64] {
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-fqv-c64] {
                margin-top: 0;
                text-align: right
            }
        }

        .footer__social[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] {
                -webkit-justify-content: end;
                justify-content: end;
                margin-top: 96px;
                margin-bottom: 0
            }
        }

        .footer__social[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] {
            margin: 0 6px
        }

        .footer__social[_ngcontent-fqv-c64] ul[_ngcontent-fqv-c64] li[_ngcontent-fqv-c64] svg-icon[_ngcontent-fqv-c64] {
            width: 32px;
            height: 32px
        }

        .footer__social[_ngcontent-fqv-c64] p[_ngcontent-fqv-c64] {
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f
        }

        .footer__social[_ngcontent-fqv-c64] p.footer__annotation--light[_ngcontent-fqv-c64],
        .footer__social[_ngcontent-fqv-c64] p[_ngcontent-fqv-c64] a.footer__annotation--light[_ngcontent-fqv-c64] {
            color: rgba(0, 19, 31, .33)
        }

        .footer__social-link[_ngcontent-fqv-c64]:hover {
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

    </style>
    <style>
        [_nghost-fqv-c61] {
            display: inline-block;
            width: 100%;
            height: 100%
        }

        [_nghost-fqv-c61] .svg-icon,
        [_nghost-fqv-c61] svg {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            fill: currentColor
        }

        [_nghost-fqv-c61] .svg-icon {
            width: auto;
            height: 100%;
            display: block
        }

        [_nghost-fqv-c61] .svg-icon_star-path {
            fill: #000064
        }

        [_nghost-fqv-c61] .svg-icon__fill_trustpilot {
            fill: #13b57a
        }

        [_nghost-fqv-c61] .svg-icon__fill_default {
            fill: #fff
        }

        [_nghost-fqv-c61] .svg-icon__cart-wheel {
            stroke: none;
            fill: #010101
        }

        [_nghost-fqv-c61] .svg-icon__paypal {
            fill: #263b80
        }

        [_nghost-fqv-c61] .svg-icon__paypal_light {
            fill: #139ad6
        }

        [_nghost-fqv-c61] .svg-icon__paypal_shadow {
            fill: #139ad6
        }

        [_nghost-fqv-c61] .svg-icon__paypal_cross {
            fill: #232c65
        }

        [_nghost-fqv-c61] .svg-icon__facebook-full_letter {
            opacity: 0
        }

        [_nghost-fqv-c61] .svg-icon__check {
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        [_nghost-fqv-c61] .svg-icon__receive-email-line {
            stroke: currentColor
        }

        [_nghost-fqv-c61] .svg-icon__circle {
            fill: none;
            stroke: currentColor
        }

        [_nghost-fqv-c61] .svg-icon svg {
            width: 100%;
            height: 100%;
            display: inline-block
        }

        .spinning[_nghost-fqv-c61] {
            -webkit-animation: rotate 1s linear infinite;
            animation: rotate 1s linear infinite;
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .svg-icon__footer-facebook[_nghost-fqv-c61] .svg-icon__facebook-full_letter,
        .svg-icon__footer-facebook [_nghost-fqv-c61] .svg-icon__facebook-full_letter {
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

        [_nghost-fqv-c62] {
            display: block
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] {
            background-color: #00131f
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] .prompt-img__wrapper[_ngcontent-fqv-c62] {
            overflow: hidden;
            border-radius: 8px;
            max-width: 40px;
            height: 40px;
            margin-right: 8px
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] .prompt-img__wrapper[_ngcontent-fqv-c62] img[_ngcontent-fqv-c62] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] .prompt-close-icon[_ngcontent-fqv-c62] {
            max-width: 14px;
            height: 14px;
            margin-right: 12px;
            cursor: pointer;
            -webkit-filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%);
            filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%)
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] .prompt__content-title[_ngcontent-fqv-c62] {
            color: #f5f6f7;
            font-size: 16px
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] .prompt__content-category[_ngcontent-fqv-c62] {
            color: #b9b9b9;
            font-size: 10px
        }

        [_nghost-fqv-c62] .prompt-container[_ngcontent-fqv-c62] .prompt-btn[_ngcontent-fqv-c62] {
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
            [_nghost-fqv-c62] {
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

        .post-card[_ngcontent-fqv-c77] {
            display: block;
            width: 100%;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: 10px;
            text-decoration: none
        }

        .post-card__img[_ngcontent-fqv-c77] {
            display: block;
            width: 100%;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px
        }

        .post-card__content[_ngcontent-fqv-c77] {
            padding: 25px;
            color: #323b50
        }

        .post-card__title[_ngcontent-fqv-c77] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            line-height: 32px;
            font-weight: 600
        }

        @media (max-width: 991.9px) {
            .post-card__title[_ngcontent-fqv-c77] {
                font-size: 22px;
                line-height: 28px
            }
        }

        .post-card__description[_ngcontent-fqv-c77] {
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
            .post-card__description[_ngcontent-fqv-c77] {
                font-size: 14px;
                line-height: 22px;
                max-height: 88px
            }
        }

        .post-card__description[_ngcontent-fqv-c77] p {
            margin: 0;
            display: table
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

        .product[_ngcontent-fqv-c90] {
            font-family: Exo, sans-serif;
            text-align: center
        }

        @media (min-width: 992px) {
            .product[_ngcontent-fqv-c90] {
                text-align: left;
                padding-top: 40px
            }
        }

        @media (max-width: 991.4px) {
            .product[_ngcontent-fqv-c90]>.container[_ngcontent-fqv-c90] {
                margin: 0;
                padding: 0;
                width: 100%;
                max-width: 100%
            }
        }

        .product__top-details[_ngcontent-fqv-c90] {
            display: block
        }

        @media (min-width: 992px) {
            .product__top-details[_ngcontent-fqv-c90] {
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
            .product__details-left[_ngcontent-fqv-c90] {
                max-width: 450px;
                margin: 0 auto
            }
        }

        @media (min-width: 992px) {
            .product__details-left[_ngcontent-fqv-c90] {
                -webkit-flex: 0 0 48%;
                flex: 0 0 48%;
                margin-bottom: 40px
            }
        }

        @media (min-width: 992px) {
            .product__details-right[_ngcontent-fqv-c90] {
                -webkit-flex: 0 0 46%;
                flex: 0 0 46%
            }
        }

        .product__details-right-content[_ngcontent-fqv-c90] {
            padding: 0 20px;
            max-width: 440px;
            margin: 0 auto
        }

        @media (min-width: 992px) {
            .product__details-right-content[_ngcontent-fqv-c90] {
                padding: 0;
                max-width: 100%
            }
        }

        .product__title[_ngcontent-fqv-c90] {
            font-weight: 900;
            font-size: 28px;
            line-height: 32px;
            text-transform: uppercase;
            color: #00131f;
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .product__title[_ngcontent-fqv-c90] {
                font-weight: 800;
                font-size: 40px;
                line-height: 48px;
                margin-top: 24px
            }
        }

        .product__alternative[_ngcontent-fqv-c90] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__alternative[_ngcontent-fqv-c90] {
                font-weight: 500;
                font-size: 14px;
                line-height: 20px
            }
        }

        .product__price[_ngcontent-fqv-c90] {
            font-weight: 900;
            font-size: 28px;
            line-height: 32px;
            color: #2aa8f8;
            text-align: center;
            text-transform: uppercase;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__price[_ngcontent-fqv-c90] {
                text-align: left;
                font-weight: 800;
                font-size: 40px;
                line-height: 48px;
                margin: 16px 0 19px
            }
        }

        .product__price-old[_ngcontent-fqv-c90] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 11px
        }

        @media (min-width: 992px) {
            .product__price-old[_ngcontent-fqv-c90] {
                font-weight: 700;
                font-size: 32px;
                line-height: 42px;
                margin-right: 16px
            }
        }

        .product__discount-timer[_ngcontent-fqv-c90] {
            display: -webkit-flex;
            display: flex;
            font-weight: 500;
            font-size: 14px;
            line-height: 20px;
            margin: 8px 0 9px;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__discount-timer[_ngcontent-fqv-c90] {
                text-align: left;
                margin-bottom: 19px
            }
        }

        .product__discount-label[_ngcontent-fqv-c90] {
            color: #939ca4
        }

        .product__discount-clock[_ngcontent-fqv-c90] {
            color: #00131f
        }

        .product__sold[_ngcontent-fqv-c90] {
            font-weight: 500;
            font-size: 12px;
            line-height: 16px;
            text-transform: uppercase;
            color: #939ca4;
            margin-bottom: 7px
        }

        @media (min-width: 992px) {
            .product__sold[_ngcontent-fqv-c90] {
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 12px
            }
        }

        .product__conditions[_ngcontent-fqv-c90] {
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
            .product__conditions[_ngcontent-fqv-c90] {
                gap: 16px
            }
        }

        .product__condition[_ngcontent-fqv-c90] {
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
            .product__condition[_ngcontent-fqv-c90] {
                margin-top: 0;
                -webkit-flex-direction: row;
                flex-direction: row;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                -webkit-flex: 0 0 calc(50% - 8px);
                flex: 0 0 calc(50% - 8px)
            }
        }

        .product__condition[_ngcontent-fqv-c90]:first-child span[_ngcontent-fqv-c90] {
            width: 100%
        }

        @media (min-width: 992px) {
            .product__condition[_ngcontent-fqv-c90]:first-child span[_ngcontent-fqv-c90] {
                width: auto
            }
        }

        .product__condition-label[_ngcontent-fqv-c90] {
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
            .product__condition-label[_ngcontent-fqv-c90] {
                width: auto;
                margin: 2px 0 0 8px
            }
        }

        @media (min-width: 1200px) {
            .product__condition-label[_ngcontent-fqv-c90] {
                white-space: nowrap
            }
        }

        .product__condition-icon[_ngcontent-fqv-c90] {
            height: 24px;
            width: 24px;
            color: #fff
        }

        .product__condition-icon--gray[_ngcontent-fqv-c90] {
            color: #939ca4 !important
        }

        .product__condition-icon--h-short[_ngcontent-fqv-c90] {
            width: 20px;
            height: 23px
        }

        .product__info-holder[_ngcontent-fqv-c90] {
            vertical-align: baseline;
            position: relative;
            font-size: 14px;
            line-height: 14px
        }

        .product__info-outer[_ngcontent-fqv-c90] {
            cursor: pointer;
            padding: 5px;
            position: absolute;
            top: -4px;
            left: 0
        }

        .product__info-icon[_ngcontent-fqv-c90] {
            width: 16px;
            height: 16px;
            color: #0490e9
        }

        .product__postalentry[_ngcontent-fqv-c90] {
            font-size: 14px;
            text-align: left
        }

        .product__trustpilot[_ngcontent-fqv-c90] {
            padding: 35px 0;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            border-bottom: 1px solid #E9EBED
        }

        .product__trustpilot[_ngcontent-fqv-c90] svg-icon[_ngcontent-fqv-c90]:first-child {
            width: 106px;
            height: 20px;
            margin-right: 13px
        }

        .product__trustpilot[_ngcontent-fqv-c90] svg-icon[_ngcontent-fqv-c90]:nth-child(2) {
            width: 14px;
            height: 13.2px;
            display: -webkit-flex;
            display: flex;
            margin-right: 4px
        }

        .product__trustpilot[_ngcontent-fqv-c90] span[_ngcontent-fqv-c90] {
            font-size: 12px;
            color: #00131f;
            font-weight: 700
        }

        .product__instant[_ngcontent-fqv-c90] {
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        .product__instant-title[_ngcontent-fqv-c90] {
            font-weight: 700;
            font-size: 20px;
            line-height: 1;
            margin: 0;
            padding-bottom: 30px;
            color: #00131f;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__instant-title[_ngcontent-fqv-c90] {
                font-weight: 800;
                font-size: 32px;
                line-height: 32px;
                text-align: left;
                text-transform: uppercase;
                padding-bottom: 40px
            }
        }

        .product__instant-sort-icon[_ngcontent-fqv-c90] {
            width: 24px;
            height: 14px
        }

        .product__instant-sort[_ngcontent-fqv-c90] {
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

        .product__instant-sort[_ngcontent-fqv-c90] select[_ngcontent-fqv-c90] {
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

        .product__instant-sort[_ngcontent-fqv-c90] select[_ngcontent-fqv-c90]::-ms-expand {
            display: none
        }

        .product__instant-tickets[_ngcontent-fqv-c90] {
            display: -webkit-flex;
            display: flex;
            gap: 7px;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .product__instant-ticket[_ngcontent-fqv-c90] {
            width: calc(25% - 5.25px)
        }

        @media (max-width: 767.9px) {
            .product__instant-ticket[_ngcontent-fqv-c90] {
                width: calc(33.3333333333% - 4.6666666667px)
            }
        }

        @media (max-width: 489.9px) {
            .product__instant-ticket[_ngcontent-fqv-c90] {
                width: calc(50% - 3.5px)
            }
        }

        .product__main-details[_ngcontent-fqv-c90] {
            text-align: left;
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        .product__main-details[_ngcontent-fqv-c90] h3[_ngcontent-fqv-c90] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .product__main-details[_ngcontent-fqv-c90] h3[_ngcontent-fqv-c90] {
                font-weight: 500;
                font-size: 14px
            }
        }

        .product__main-details[_ngcontent-fqv-c90] ul[_ngcontent-fqv-c90] {
            padding-left: 15px
        }

        .product__main-details[_ngcontent-fqv-c90] ul[_ngcontent-fqv-c90] li[_ngcontent-fqv-c90] {
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -.01em;
            color: #000;
            margin-bottom: 12px;
            list-style: square
        }

        @media (min-width: 992px) {
            .product__main-details[_ngcontent-fqv-c90] ul[_ngcontent-fqv-c90] li[_ngcontent-fqv-c90] {
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;
                color: #00131f
            }
        }

        .product__main-details[_ngcontent-fqv-c90] ul[_ngcontent-fqv-c90] li[_ngcontent-fqv-c90] a[_ngcontent-fqv-c90] {
            color: #2aa8f8
        }

        .product__share[_ngcontent-fqv-c90] {
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        @media (min-width: 992px) {
            .product__share[_ngcontent-fqv-c90] {
                border-bottom: none;
                padding-bottom: 72px
            }
        }

        .product__share-label[_ngcontent-fqv-c90] {
            text-align: left;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4;
            margin-bottom: 12px
        }

        @media (min-width: 992px) {
            .product__share-label[_ngcontent-fqv-c90] {
                font-size: 14px
            }
        }

        .product__share-icons[_ngcontent-fqv-c90] {
            display: grid
        }

        .product__payments[_ngcontent-fqv-c90] {
            padding: 28px 0
        }

        @media (min-width: 992px) {
            .product__payments[_ngcontent-fqv-c90] {
                padding: 42px 0
            }
        }

        .product__error[_ngcontent-fqv-c90] {
            color: red;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.2;
            text-align: center;
            padding-top: 4px
        }

        .product__slider-label[_ngcontent-fqv-c90] {
            font-weight: 500;
            font-size: 11px;
            line-height: 11px;
            text-transform: uppercase;
            color: #939ca4;
            text-align: center;
            padding-top: 8px
        }

        @media (min-width: 992px) {
            .product__slider-label[_ngcontent-fqv-c90] {
                font-size: 12px;
                line-height: 12px;
                padding-top: 8px
            }
        }

        .product__slider[_ngcontent-fqv-c90] * {
            cursor: default !important
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal {
            margin: 0;
            height: 5px;
            background: #E9EBED;
            border: none;
            cursor: auto
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-fqv-c90] .noUi-horizontal {
                height: 7px
            }
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal-shadowcsshost-no-combinator {
            margin: 0
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal .noUi-tooltip {
            display: none
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal.noUi-target,
        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal.noUi-target * {
            touch-action: pan-y !important
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle {
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background-color: #2aa8f8;
            box-shadow: none;
            box-sizing: content-box;
            border: none;
            right: -15px
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle {
                width: 21px;
                height: 21px;
                top: -8px
            }
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle:before,
        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .product__slider[_ngcontent-fqv-c90] .noUi-horizontal .noUi-connect {
            background: #2AA8F8
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-fqv-c90] .min .noUi-handle {
                right: -20px
            }
        }

        .product__slider[_ngcontent-fqv-c90] .increaseRight .noUi-horizontal .noUi-handle {
            right: -1px
        }

        .product[_ngcontent-fqv-c90] .sub-alert_error[_ngcontent-fqv-c90] {
            margin-top: -10px;
            position: relative;
            padding-bottom: 20px;
            color: #e33333
        }

        .product__drawtime-container[_ngcontent-fqv-c90] {
            margin: 20px 0 0;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__drawtime-container[_ngcontent-fqv-c90] {
                text-align: left;
                margin: 0
            }
        }

        .product__drawtime[_ngcontent-fqv-c90] {
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
            .product__drawtime[_ngcontent-fqv-c90] {
                text-align: left;
                margin-left: 0
            }
        }

        @media (min-width: 992px) {
            .product__drawtime[_ngcontent-fqv-c90] {
                font-size: 16px
            }
        }

        .product__drawtime--soon[_ngcontent-fqv-c90] {
            background-color: #2aa8f8;
            color: #fff
        }

        .product__drawtime--urgent[_ngcontent-fqv-c90] {
            background-color: #40d586;
            color: #fff
        }

        .ticket__question[_ngcontent-fqv-c90] h3[_ngcontent-fqv-c90] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            text-align: center;
            margin-top: 32px;
            margin-bottom: 0;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-fqv-c90] h3[_ngcontent-fqv-c90] {
                text-align: left;
                margin-top: 24px
            }
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-fqv-c90] h3[_ngcontent-fqv-c90] {
                font-size: 14px
            }
        }

        .ticket__question[_ngcontent-fqv-c90] h2[_ngcontent-fqv-c90] {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
            letter-spacing: -.01em;
            color: #2aa8f8;
            width: 90%;
            margin: 8px auto 20px
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-fqv-c90] h2[_ngcontent-fqv-c90] {
                text-align: left;
                margin: 11px 0 24px
            }
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-fqv-c90] h2[_ngcontent-fqv-c90] {
                font-weight: 600;
                font-size: 24px;
                line-height: 28px
            }
        }

        .ticket__answers[_ngcontent-fqv-c90] {
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
            .ticket__answers[_ngcontent-fqv-c90] {
                margin-bottom: 24px;
                gap: 8px
            }
        }

        .ticket__answer[_ngcontent-fqv-c90] {
            text-align: center;
            -webkit-flex: 1 0 47%;
            flex: 1 0 47%
        }

        .ticket__answer[_ngcontent-fqv-c90] .bg[_ngcontent-fqv-c90] {
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
            .ticket__answer[_ngcontent-fqv-c90] .bg[_ngcontent-fqv-c90] {
                font-size: 11px
            }
        }

        @media (min-width: 992px) {
            .ticket__answer[_ngcontent-fqv-c90] .bg[_ngcontent-fqv-c90] {
                font-size: 16px;
                font-weight: 600
            }
        }

        .ticket__answer[_ngcontent-fqv-c90] .bg[_ngcontent-fqv-c90] .text[_ngcontent-fqv-c90] {
            display: block;
            -webkit-flex: 0 1 auto;
            flex: 0 1 auto;
            text-align: center;
            position: relative
        }

        .ticket__answer[_ngcontent-fqv-c90] .bg[_ngcontent-fqv-c90] .text[_ngcontent-fqv-c90]>.text2[_ngcontent-fqv-c90] {
            display: inline;
            width: auto;
            position: relative
        }

        .ticket__answer[_ngcontent-fqv-c90] input[_ngcontent-fqv-c90] {
            display: none
        }

        .ticket__answer[_ngcontent-fqv-c90] input[_ngcontent-fqv-c90]:checked+.bg[_ngcontent-fqv-c90] {
            border: 1.5px solid #2AA8F8;
            background-color: #fff;
            color: #2aa8f8;
            position: relative
        }

        .ticket__answer[_ngcontent-fqv-c90] input[_ngcontent-fqv-c90]:checked+.bg[_ngcontent-fqv-c90] .text[_ngcontent-fqv-c90] .text2[_ngcontent-fqv-c90]:before {
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

        .ticket__tickets[_ngcontent-fqv-c90] {
            background-color: #f5f6f7;
            border: 1px solid #E9EBED;
            padding: 32px 0
        }

        @media (min-width: 992px) {
            .ticket__tickets[_ngcontent-fqv-c90] {
                padding: 24px 32px;
                border-radius: 12px
            }
        }

        .ticket__tickets[_ngcontent-fqv-c90] h2[_ngcontent-fqv-c90] {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #00131f;
            letter-spacing: -.01em;
            margin: 0 0 60px
        }

        @media (min-width: 992px) {
            .ticket__tickets[_ngcontent-fqv-c90] h2[_ngcontent-fqv-c90] {
                font-weight: 600;
                font-size: 24px;
                line-height: 28px;
                margin-bottom: 76px
            }
        }

        .ticket__entry-option[_ngcontent-fqv-c90] {
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
            .ticket__entry-option[_ngcontent-fqv-c90] {
                font-size: 14px
            }
        }

        @media (min-width: 992px) {
            .ticket__entry-option[_ngcontent-fqv-c90] {
                margin-top: 24px
            }
        }

        .ticket__entry-option[_ngcontent-fqv-c90] div[_ngcontent-fqv-c90] {
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

        .ticket__entry-option[_ngcontent-fqv-c90] div[_ngcontent-fqv-c90]>span[_ngcontent-fqv-c90] {
            display: block
        }

        .ticket__entry-option--active[_ngcontent-fqv-c90] {
            border: 1px solid #939CA4 !important;
            background-color: #fff;
            border-radius: 4px
        }

        .ticket__entry-option--free[_ngcontent-fqv-c90] {
            margin-top: 32px
        }

        .ticket__labels[_ngcontent-fqv-c90] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .ticket__label[_ngcontent-fqv-c90] {
            font-weight: 600;
            font-size: 12px;
            line-height: 12px;
            color: #6e7a84
        }

        .ticket__quantities[_ngcontent-fqv-c90] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 12px
        }

        .ticket__quantity[_ngcontent-fqv-c90] {
            cursor: pointer;
            width: 48px;
            height: 48px;
            padding-left: 0;
            padding-right: 0;
            box-shadow: 0 0 32px rgba(0, 19, 31, .08);
            border-radius: 8px;
            background-color: #fff;
            border: none;
            color: #2aa8f8;
            font-size: 25px;
            text-align: center;
            touch-action: manipulation
        }

        .ticket__quantity--disabled[_ngcontent-fqv-c90] {
            background-color: #e9ebed;
            box-shadow: none;
            color: #c4c9ce
        }

        .ticket__total[_ngcontent-fqv-c90] {
            color: #6e7a84;
            font-weight: 500;
            font-size: 16px;
            line-height: 20px
        }

        @media (min-width: 992px) {
            .ticket__total[_ngcontent-fqv-c90] {
                font-size: 20px;
                line-height: 24px
            }
        }

        .ticket__total[_ngcontent-fqv-c90] span[_ngcontent-fqv-c90] {
            font-weight: 900
        }

        .ticket__add[_ngcontent-fqv-c90] {
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
            background-color: #2aa8f8;
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
            .ticket__add[_ngcontent-fqv-c90] {
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;
                letter-spacing: -.01em
            }
        }

        .ticket__add[_ngcontent-fqv-c90]:hover {
            background-color: #52b8f9
        }

        .ticket__add[_ngcontent-fqv-c90]:disabled {
            opacity: .4;
            cursor: default;
            pointer-events: none;
            -webkit-filter: saturate(10%);
            filter: saturate(10%)
        }

        .ticket__add-ticket[_ngcontent-fqv-c90] {
            margin-left: 12px;
            height: 24px;
            width: 24px
        }

        .ticket__add-loading[_ngcontent-fqv-c90] {
            margin-right: 8px;
            height: 20px;
            width: 20px
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal {
            height: 5px;
            background: #E9EBED;
            border: none;
            position: relative
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal:after {
            content: "";
            position: absolute;
            right: 1px;
            width: 1px;
            height: 5.5px;
            bottom: -5.5px;
            background: #6E7A84
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal:before {
            content: "";
            position: absolute;
            left: 1px;
            width: 1px;
            height: 5.5px;
            bottom: -5.5px;
            background: #6E7A84
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle {
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background-color: #fff;
            border: 2px solid #2AA8F8;
            box-shadow: none;
            box-sizing: content-box;
            cursor: pointer;
            right: -10px
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle:before,
        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-connect {
            background: #2AA8F8
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-origin {
            transition: none !important
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-tooltip {
            bottom: 19px;
            width: 75px;
            padding: 1px;
            text-align: center;
            background-color: #2aa8f8;
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

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-tooltip:before {
            transition: border-top-color .2s;
            position: absolute;
            bottom: -5px;
            left: calc(50% - 1.5px);
            content: "";
            width: 2px;
            height: 5px;
            background-color: #2aa8f8
        }

        .ticket[_ngcontent-fqv-c90] .noUi-horizontal .noUi-tooltip:after {
            content: "";
            display: inline-block;
            width: 12px;
            height: 16px;
            background: url(/assets/svg-icons/ticket-small.svg);
            background-size: cover;
            background-position: center;
            margin-left: 5px
        }

        .ticket[_ngcontent-fqv-c90] .min .noUi-tooltip {
            width: 60px;
            left: 25px
        }

        .ticket[_ngcontent-fqv-c90] .min .noUi-tooltip:before {
            left: 10px
        }

        .ticket[_ngcontent-fqv-c90] .max .noUi-tooltip {
            left: -26px;
            width: 82px
        }

        .ticket[_ngcontent-fqv-c90] .max .noUi-tooltip:before {
            right: 5.5px;
            left: auto;
            left: initial
        }

        .ticket[_ngcontent-fqv-c90] .noUi-target {
            box-shadow: none
        }

        @media (max-width: 767.9px) {
            .ticket[_ngcontent-fqv-c90] .noUi-target {
                width: 100%
            }
        }

        .product-rating[_ngcontent-fqv-c90] {
            margin: 32px 0;
            border-bottom: 1px solid #E9EBED;
            padding-bottom: 32px
        }

        @media (min-width: 992px) {
            .product-rating[_ngcontent-fqv-c90] {
                margin: 40px 0;
                padding-bottom: 40px
            }
        }

        .preview[_ngcontent-fqv-c90] {
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
            .preview[_ngcontent-fqv-c90] {
                position: absolute;
                left: 0;
                top: 0
            }
        }

        @media (max-width: 767.9px) {
            .preview[_ngcontent-fqv-c90] {
                text-align: center
            }

            .preview[_ngcontent-fqv-c90] br[_ngcontent-fqv-c90] {
                display: none
            }
        }

        .preview__outer[_ngcontent-fqv-c90] {
            position: relative
        }

        .closed-raffle[_ngcontent-fqv-c90] {
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

        .product-gallery__img[_ngcontent-fqv-c89] {
            display: block;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .product-gallery__image-text-cover[_ngcontent-fqv-c89] {
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

        .product-gallery__image-red-cover[_ngcontent-fqv-c89] {
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
            .product-gallery__image-red-cover[_ngcontent-fqv-c89] {
                left: 15px;
                right: 15px;
                font-size: 16px
            }
        }

        .product-gallery__photo[_ngcontent-fqv-c89] {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
            position: relative
        }

        .product-gallery__thumb-carousel[_ngcontent-fqv-c89] {
            width: calc(100% - 60px);
            margin: 10px auto 0;
            position: relative
        }

        @media (min-width: 992px) {
            .product-gallery__thumb-carousel[_ngcontent-fqv-c89] {
                display: none
            }
        }

        .product-gallery__thumb-list[_ngcontent-fqv-c89] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            gap: 10px;
            margin-top: 10px
        }

        @media (max-width: 991.9px) {
            .product-gallery__thumb-list[_ngcontent-fqv-c89] {
                display: none
            }
        }

        .product-gallery__thumb[_ngcontent-fqv-c89] {
            display: block;
            cursor: pointer
        }

        .product-gallery__thumb_regular[_ngcontent-fqv-c89] {
            width: 100%;
            max-width: calc(16.6666666667% - 8.3333333333px)
        }

        @media (max-width: 1199.9px) {
            .product-gallery__thumb_regular[_ngcontent-fqv-c89] {
                max-width: calc(20% - 8px)
            }
        }

        @media (max-width: 991.9px) {
            .product-gallery__thumb_regular[_ngcontent-fqv-c89] {
                max-width: calc(25% - 7.5px)
            }
        }

        .product-gallery__button-prev[_ngcontent-fqv-c89],
        .product-gallery__button-next[_ngcontent-fqv-c89] {
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

        .product-gallery__button-prev.swiper-button-disabled[_ngcontent-fqv-c89],
        .product-gallery__button-next.swiper-button-disabled[_ngcontent-fqv-c89] {
            display: none
        }

        .product-gallery__button-show[_ngcontent-fqv-c89] {
            opacity: 1
        }

        .product-gallery__button-prev[_ngcontent-fqv-c89] {
            right: 100%;
            -webkit-transform-origin: left center;
            transform-origin: left center;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0Ij48cGF0aCBkPSJNMTUuNDEgMTYuNTlMMTAuODMgMTJsNC41OC00LjU5TDE0IDZsLTYgNiA2IDYgMS40MS0xLjQxeiIvPjxwYXRoIGQ9Ik0wIDBoMjR2MjRIMFYweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==)
        }

        .product-gallery__button-next[_ngcontent-fqv-c89] {
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

        .faq[_ngcontent-fqv-c83] {
            text-align: left;
            font-family: Exo, sans-serif
        }

        .faq__box[_ngcontent-fqv-c83] {
            list-style-type: none;
            margin-top: 0;
            margin-bottom: 0;
            padding: 0
        }

        .faq__header[_ngcontent-fqv-c83] {
            padding: 32px 0;
            border-bottom: 1px solid #E9EBED;
            cursor: pointer;
            color: gray;
            transition: color .2s;
            outline: 0
        }

        .faq__header[_ngcontent-fqv-c83]:hover {
            color: #40d586;
            outline: 0
        }

        .faq_product[_ngcontent-fqv-c83] .faq__header[_ngcontent-fqv-c83] {
            position: relative;
            padding-right: 90px
        }

        .faq__title[_ngcontent-fqv-c83] {
            margin: 0;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f;
            transition: color .3s
        }

        @media (min-width: 992px) {
            .faq__title[_ngcontent-fqv-c83] {
                font-weight: 800;
                font-size: 32px;
                line-height: 32px
            }
        }

        .faq__arrow[_ngcontent-fqv-c83] {
            position: absolute;
            top: 50%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 20px;
            height: 20px
        }

        .faq__arrow[_ngcontent-fqv-c83]:before,
        .faq__arrow[_ngcontent-fqv-c83]:after {
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

        .faq__arrow[_ngcontent-fqv-c83]:before {
            background-image: url(/assets/svg-icons/arrow-right-black.svg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            opacity: 1
        }

        .faq__arrow[_ngcontent-fqv-c83]:after {
            background-image: url(/assets/svg-icons/arrow-right-black.svg);
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
            opacity: 0
        }

        .faq_product-opened[_ngcontent-fqv-c83] .faq__arrow[_ngcontent-fqv-c83]:before {
            opacity: 0
        }

        .faq_product-opened[_ngcontent-fqv-c83] .faq__arrow[_ngcontent-fqv-c83]:after {
            opacity: 1
        }

        .faq__body[_ngcontent-fqv-c83] {
            overflow: hidden
        }

        .faq__content[_ngcontent-fqv-c83] {
            padding: 20px 0
        }

        .faq__content_center[_ngcontent-fqv-c83] {
            text-align: center
        }

        .faq_product[_ngcontent-fqv-c83] .faq__content[_ngcontent-fqv-c83] {
            color: gray;
            font-weight: 400
        }

        .faq__paragraph[_ngcontent-fqv-c83] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 26px
        }

        .faq__img[_ngcontent-fqv-c83] {
            display: block;
            max-width: 100%;
            margin-bottom: 16px
        }

        .faq__bold[_ngcontent-fqv-c83] {
            font-weight: 700
        }

        .faq__link[_ngcontent-fqv-c83] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__link[_ngcontent-fqv-c83]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__h2[_ngcontent-fqv-c83] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__h3[_ngcontent-fqv-c83] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 700;
            line-height: 29px;
            color: #000
        }

        .faq__h4[_ngcontent-fqv-c83] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq_product[_ngcontent-fqv-c83] h2[_ngcontent-fqv-c83] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__content[_ngcontent-fqv-c83] .faq__h2,
        .faq__content[_ngcontent-fqv-c83] h2 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__content[_ngcontent-fqv-c83] .faq__h3,
        .faq__content[_ngcontent-fqv-c83] h3 {
            margin: 0;
            font-size: 28px;
            font-weight: 400;
            line-height: 33.6px;
            color: #000
        }

        .faq__content[_ngcontent-fqv-c83] .faq__h4,
        .faq__content[_ngcontent-fqv-c83] h4 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq__content[_ngcontent-fqv-c83] h5 {
            margin: 0;
            font-size: 20px;
            line-height: 24px;
            color: #000
        }

        .faq__content[_ngcontent-fqv-c83] .faq__link,
        .faq__content[_ngcontent-fqv-c83] a,
        .faq__content[_ngcontent-fqv-c83] a:link {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__content[_ngcontent-fqv-c83] .faq__link:hover,
        .faq__content[_ngcontent-fqv-c83] a:hover,
        .faq__content[_ngcontent-fqv-c83] a:link:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__content[_ngcontent-fqv-c83] .faq__paragraph,
        .faq__content[_ngcontent-fqv-c83] p {
            font-weight: 400;
            font-size: 17px;
            line-height: 25.5px;
            padding: 0;
            margin-top: 0;
            margin-bottom: 16px
        }

        .faq__content[_ngcontent-fqv-c83] .faq__img,
        .faq__content[_ngcontent-fqv-c83] img {
            max-width: 100%;
            height: auto !important
        }

        .faq__content[_ngcontent-fqv-c83] .faq__img {
            display: block
        }

        .faq__content[_ngcontent-fqv-c83] strong {
            font-weight: 700
        }

        .section_faq[_ngcontent-fqv-c83] {
            padding-top: 0;
            padding-bottom: 40px
        }

    </style>
    <style>
        [_nghost-fqv-c87] {
            display: inherit
        }

        .sb-group[_ngcontent-fqv-c87],
        .sb-button[_ngcontent-fqv-c87] {
            display: inline-flex;
            align-items: flex-start
        }

        .sb-group[_ngcontent-fqv-c87] {
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

        .payments[_ngcontent-fqv-c67] {
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
            .payments[_ngcontent-fqv-c67] {
                gap: 15px
            }
        }

        @media (min-width: 992px) {
            .payments[_ngcontent-fqv-c67] {
                padding: 42px 15px;
                gap: 33px
            }
        }

        .payments--nopadding[_ngcontent-fqv-c67] {
            padding: 0
        }

        .payments__payment[_ngcontent-fqv-c67] {
            height: 36px;
            width: calc(20% - 8px);
            max-width: 60px
        }

        @media (min-width: 768px) {
            .payments__payment[_ngcontent-fqv-c67] {
                max-width: 80px
            }
        }

        .payments__payment[_ngcontent-fqv-c67] svg-icon[_ngcontent-fqv-c67] {
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
        [_nghost-fqv-c46] {
            display: block;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

    </style>
    <style>
        [button=facebook][_nghost-fqv-c85],
        [button=facebook] [_nghost-fqv-c85] {
            --button-color: #4267B2
        }

        [button=twitter][_nghost-fqv-c85],
        [button=twitter] [_nghost-fqv-c85] {
            --button-color: #00acee
        }

        [button=google][_nghost-fqv-c85],
        [button=google] [_nghost-fqv-c85] {
            --button-color: #db4437
        }

        [button=mix][_nghost-fqv-c85],
        [button=mix] [_nghost-fqv-c85] {
            --button-color: #ff8226
        }

        [button=line][_nghost-fqv-c85],
        [button=line] [_nghost-fqv-c85] {
            --button-color: #00b900
        }

        [button=linkedin][_nghost-fqv-c85],
        [button=linkedin] [_nghost-fqv-c85] {
            --button-color: #006fa6
        }

        [button=pinterest][_nghost-fqv-c85],
        [button=pinterest] [_nghost-fqv-c85] {
            --button-color: #bd081c
        }

        [button=reddit][_nghost-fqv-c85],
        [button=reddit] [_nghost-fqv-c85] {
            --button-color: #ff4006
        }

        [button=tumblr][_nghost-fqv-c85],
        [button=tumblr] [_nghost-fqv-c85] {
            --button-color: #36465d
        }

        [button=whatsapp][_nghost-fqv-c85],
        [button=whatsapp] [_nghost-fqv-c85] {
            --button-color: #25d366
        }

        [button=messenger][_nghost-fqv-c85],
        [button=messenger] [_nghost-fqv-c85] {
            --button-color: #0080FF
        }

        [button=telegram][_nghost-fqv-c85],
        [button=telegram] [_nghost-fqv-c85] {
            --button-color: #0088cc
        }

        [button=xing][_nghost-fqv-c85],
        [button=xing] [_nghost-fqv-c85] {
            --button-color: #006567
        }

        [button=sms][_nghost-fqv-c85],
        [button=sms] [_nghost-fqv-c85] {
            --button-color: #20c16c
        }

        [button=email][_nghost-fqv-c85],
        [button=email] [_nghost-fqv-c85] {
            --button-color: #FF961C
        }

        [button=viber][_nghost-fqv-c85],
        [button=viber] [_nghost-fqv-c85] {
            --button-color: #665ca7
        }

        [button=vk][_nghost-fqv-c85],
        [button=vk] [_nghost-fqv-c85] {
            --button-color: #4C75A3
        }

        [button=copy][_nghost-fqv-c85],
        [button=copy] [_nghost-fqv-c85] {
            --button-color: #607D8B
        }

        [button=print][_nghost-fqv-c85],
        [button=print] [_nghost-fqv-c85] {
            --button-color: #765AA2
        }

        [button=expand][_nghost-fqv-c85],
        [button=expand] [_nghost-fqv-c85] {
            --button-color: #FF6651
        }

        button[_ngcontent-fqv-c85] {
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

        .sb-icon[_ngcontent-fqv-c85],
        .sb-text[_ngcontent-fqv-c85] {
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .sb-content[_ngcontent-fqv-c85] {
            flex: 1;
            display: flex;
            height: 100%;
            width: 100%;
            position: relative
        }

        .sb-text[_ngcontent-fqv-c85] {
            flex: 1;
            height: 100%;
            white-space: nowrap;
            padding: 0 .7em;
            padding: var(--sb-text-padding, 0 .7em);
            font-weight: 700;
            font-weight: var(--sb-font-weight, bold)
        }

        .sb-icon[_ngcontent-fqv-c85] {
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

        .competitions-wrapper[_ngcontent-fqv-c76] {
            position: relative;
            overflow: hidden
        }

        .section[_ngcontent-fqv-c76] {
            font-family: Exo, sans-serif;
            padding: 48px 0 80px
        }

        @media (min-width: 992px) {
            .section[_ngcontent-fqv-c76] {
                padding: 56px 0 120px
            }
        }

        .section__header[_ngcontent-fqv-c76] {
            font-weight: 800;
            font-size: 28px;
            text-align: left;
            line-height: 32px;
            margin-bottom: 32px;
            color: #00131f;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .section__header[_ngcontent-fqv-c76] {
                text-align: center;
                margin-bottom: 36px;
                font-size: 40px;
                line-height: 48px
            }
        }

        .raffles-nav-container[_ngcontent-fqv-c76] {
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

        [_nghost-fqv-c73] {
            display: block;
            position: relative
        }

        .slider[_ngcontent-fqv-c73] {
            position: relative;
            z-index: 1;
            background-color: #233543;
            height: calc(100vh - 110px);
            max-height: 860px
        }

        @media (max-width: 1199.9px) {
            .slider[_ngcontent-fqv-c73] {
                max-height: 650px
            }
        }

        @media (max-width: 991.9px) {
            .slider[_ngcontent-fqv-c73] {
                max-height: 650px;
                height: calc(100vh - 90px)
            }
        }

        @media (max-width: 767.9px) {
            .slider[_ngcontent-fqv-c73] {
                max-height: 500px
            }
        }

        @media (max-width: 675.9px) {
            .slider[_ngcontent-fqv-c73] {
                max-height: 400px
            }
        }

        @media (max-width: 575.9px) {
            .slider[_ngcontent-fqv-c73] {
                max-height: 342px
            }
        }

        .slider__wrapper[_ngcontent-fqv-c73] {
            z-index: 2;
            height: 100%;
            position: relative
        }

        .slider__enter-btn[_ngcontent-fqv-c73] {
            z-index: 2;
            padding-top: 12px;
            padding-bottom: 24px
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-fqv-c73] {
                padding-top: 24px;
                padding-bottom: 0;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0)
            }
        }

        .slider__enter-btn_secondary[_ngcontent-fqv-c73] {
            padding-left: 20px;
            padding-right: 20px
        }

        .slider__enter-btn[_ngcontent-fqv-c73] button[_ngcontent-fqv-c73] {
            width: 100%;
            cursor: pointer;
            padding: 12px 0;
            background-color: #2aa8f8;
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
            .slider__enter-btn[_ngcontent-fqv-c73] button[_ngcontent-fqv-c73] {
                width: auto;
                padding: 14px 24px 14px 32px;
                margin-left: 0
            }
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-fqv-c73] button[_ngcontent-fqv-c73] {
                font-size: 24px;
                line-height: 28px
            }
        }

        .slider__enter-btn[_ngcontent-fqv-c73] button[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
            width: 24px;
            height: 24px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-fqv-c73] button[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
                width: 29px;
                height: 29px;
                margin-left: 16px
            }
        }

        .slider__button[_ngcontent-fqv-c73] {
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

        .slider__button[_ngcontent-fqv-c73]:focus {
            outline: none
        }

        @media (max-width: 1199.9px) {
            .slider__button[_ngcontent-fqv-c73] {
                width: 77px
            }
        }

        @media (max-width: 767.9px) {
            .slider__button[_ngcontent-fqv-c73] {
                width: 40px
            }
        }

        .slider__button_prev[_ngcontent-fqv-c73] {
            left: 0
        }

        .slider__button_next[_ngcontent-fqv-c73] {
            right: 0
        }

        .slider__icon[_ngcontent-fqv-c73] {
            width: 25px;
            height: 25px;
            -webkit-filter: drop-shadow(0 0 4px rgba(0, 0, 0, .5));
            filter: drop-shadow(0 0 4px rgba(0, 0, 0, .5))
        }

        .slider__button_next[_ngcontent-fqv-c73] .slider__icon[_ngcontent-fqv-c73] {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .slider__button-spacer[_ngcontent-fqv-c73] {
            height: 72px;
            width: 100%;
            background: #00131F
        }

        @media (min-width: 991.9px) {
            .slider__button-spacer[_ngcontent-fqv-c73] {
                display: none
            }
        }

        .slide[_ngcontent-fqv-c73] {
            text-decoration: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: opacity .6s;
            opacity: 0;
            pointer-events: none
        }

        .slide_active[_ngcontent-fqv-c73] {
            opacity: 1;
            pointer-events: all;
            transition: opacity .6s .2s
        }

        .slide__content[_ngcontent-fqv-c73] {
            position: relative;
            height: 100%;
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-end;
            align-items: flex-end
        }

        .slide__image[_ngcontent-fqv-c73] {
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
            .slide__image[_ngcontent-fqv-c73] {
                background-position-y: 60%
            }
        }

        @media (min-width: 768px) {
            .slide__image[_ngcontent-fqv-c73] {
                background-position-y: 58%
            }
        }

        @media (min-width: 992px) {
            .slide__image[_ngcontent-fqv-c73] {
                background-position-y: 58%
            }
        }

        @media (min-width: 1200px) {
            .slide__image[_ngcontent-fqv-c73] {
                background-position-y: 52%
            }
        }

        .slide__image_unloaded[_ngcontent-fqv-c73] {
            opacity: 0
        }

        .slide__video[_ngcontent-fqv-c73] {
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

        .slide__video[_ngcontent-fqv-c73] video[_ngcontent-fqv-c73] {
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

        .slide__video_unloaded[_ngcontent-fqv-c73] {
            opacity: 0 !important
        }

        .slide__overlay[_ngcontent-fqv-c73] {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .slide__texts[_ngcontent-fqv-c73] {
            z-index: 2;
            width: 100%;
            padding: 0 20px
        }

        @media (max-width: 991.9px) {
            .slide__texts[_ngcontent-fqv-c73] {
                margin-bottom: -72px
            }
        }

        @media (min-width: 992px) {
            .slide__texts[_ngcontent-fqv-c73] {
                bottom: 180px;
                position: absolute;
                padding: 0 40px
            }
        }

        @media (min-width: 1200px) {
            .slide__texts[_ngcontent-fqv-c73] {
                bottom: 184px
            }
        }

        .slide__title[_ngcontent-fqv-c73] {
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
            .slide__title[_ngcontent-fqv-c73] {
                font-size: 37px;
                line-height: 34px
            }
        }

        @media (min-width: 768px) {
            .slide__title[_ngcontent-fqv-c73] {
                font-size: 40px;
                line-height: 36px
            }
        }

        @media (min-width: 992px) {
            .slide__title[_ngcontent-fqv-c73] {
                width: 55%
            }
        }

        @media (min-width: 1200px) {
            .slide__title[_ngcontent-fqv-c73] {
                font-size: 65px;
                line-height: 58px
            }
        }

        .slide__subtitle[_ngcontent-fqv-c73] {
            color: #2aa8f8;
            font-weight: 800;
            font-size: 16px;
            line-height: 20px;
            font-family: Exo, sans-serif;
            margin: 8px 0 0;
            text-shadow: 0 0 10px rgba(0, 0, 0, .45)
        }

        @media (min-width: 576px) {
            .slide__subtitle[_ngcontent-fqv-c73] {
                font-size: 20px;
                line-height: 24px
            }
        }

        @media (min-width: 992px) {
            .slide__subtitle[_ngcontent-fqv-c73] {
                font-size: 32px;
                line-height: 32px;
                background: inherit;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0);
                margin-top: 20px;
                width: 55%
            }
        }

        .slide__gradient[_ngcontent-fqv-c73] {
            background: linear-gradient(360deg, #00131F 30.08%, rgba(0, 0, 0, .3) 66.28%, rgba(0, 0, 0, 0) 100%);
            position: absolute;
            bottom: 0;
            height: 126px;
            width: 100%;
            z-index: 1;
            left: 0
        }

        .info-bar[_ngcontent-fqv-c73] {
            background: #00131F;
            padding: 0 20px;
            z-index: 2;
            width: 100%
        }

        @media (min-width: 992px) {
            .info-bar[_ngcontent-fqv-c73] {
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

        .info-bar__counters[_ngcontent-fqv-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            padding: 30px 0
        }

        @media (min-width: 768px) and (max-width: 991.9px) {
            .info-bar__counters[_ngcontent-fqv-c73] {
                padding: 41px 0 35px
            }
        }

        @media (max-width: 991.9px) {
            .info-bar__counters[_ngcontent-fqv-c73] {
                border-top: 1px solid rgba(255, 255, 255, .3);
                border-bottom: 1px solid rgba(255, 255, 255, .3)
            }
        }

        .info-bar__counter[_ngcontent-fqv-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (max-width: 489.9px) {
            .info-bar__counter[_ngcontent-fqv-c73] {
                -webkit-flex: 1 1 45%;
                flex: 1 1 45%
            }
        }

        @media (max-width: 489.9px) {
            .info-bar__counter[_ngcontent-fqv-c73]:first-child {
                -webkit-flex: 0 1 45%;
                flex: 0 1 45%
            }
        }

        @media (min-width: 992px) {
            .info-bar__counter[_ngcontent-fqv-c73]:first-child {
                padding-right: 75px
            }
        }

        .info-bar__icon[_ngcontent-fqv-c73] {
            -webkit-flex: 0 0 48px;
            flex: 0 0 48px;
            height: 48px;
            text-align: center;
            background: #ffffff;
            border-radius: 7px;
            padding: 10px
        }

        @media (min-width: 768px) {
            .info-bar__icon[_ngcontent-fqv-c73] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px;
                padding: 20px
            }
        }

        .info-bar__label[_ngcontent-fqv-c73] {
            padding-left: 12px;
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        @media (min-width: 768px) {
            .info-bar__label[_ngcontent-fqv-c73] {
                padding-left: 30px
            }
        }

        .info-bar__value[_ngcontent-fqv-c73] {
            letter-spacing: .048px;
            font-family: Exo, sans-serif;
            font-weight: 800;
            font-size: 22px;
            line-height: 24px;
            color: #fff
        }

        @media (max-width: 489.9px) {
            .info-bar__value[_ngcontent-fqv-c73] {
                font-size: 18px;
                line-height: 20px
            }
        }

        @media (min-width: 768px) {
            .info-bar__value[_ngcontent-fqv-c73] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .info-bar__help[_ngcontent-fqv-c73] {
            letter-spacing: -.01em;
            font-family: Exo, sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            padding-top: 6px;
            color: #fff
        }

        @media (min-width: 768px) {
            .info-bar__help[_ngcontent-fqv-c73] {
                font-size: 16px;
                line-height: 24px
            }
        }

        .info-bar__trust[_ngcontent-fqv-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (max-width: 991.9px) {
            .info-bar__trust[_ngcontent-fqv-c73] {
                padding: 19px 0 24px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trust[_ngcontent-fqv-c73] {
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

        .info-bar__worldwide-inner[_ngcontent-fqv-c73] {
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        @media (min-width: 992px) {
            .info-bar__worldwide-inner[_ngcontent-fqv-c73] {
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
            .info-bar__worldwide-inner[_ngcontent-fqv-c73] {
                margin-right: 20px;
                padding-right: 30px
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .info-bar__worldwide-inner[_ngcontent-fqv-c73] {
                display: none
            }
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (max-width: 991.9px) {
            .info-bar__trustpilot[_ngcontent-fqv-c73] {
                padding: 19px 0 24px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-fqv-c73] {
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

        .info-bar__trustpilot[_ngcontent-fqv-c73] .star[_ngcontent-fqv-c73] {
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
            .info-bar__trustpilot[_ngcontent-fqv-c73] .star[_ngcontent-fqv-c73] {
                font-size: 16px;
                -webkit-justify-content: end;
                justify-content: end;
                margin-bottom: 4px
            }
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] .star[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
            width: 14px;
            height: 13px;
            margin-right: 5.5px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-fqv-c73] .star[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
                width: 24px;
                height: 24px
            }
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] .stars[_ngcontent-fqv-c73] {
            height: 20px
        }

        @media (min-width: 768px) {
            .info-bar__trustpilot[_ngcontent-fqv-c73] .stars[_ngcontent-fqv-c73] {
                line-height: 12px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-fqv-c73] .stars[_ngcontent-fqv-c73] {
                height: 26px;
                margin-bottom: 4px;
                text-align: right
            }
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] .stars[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
            width: 106px;
            height: 20px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-fqv-c73] .stars[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
                width: 128px;
                height: 100%
            }
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] p[_ngcontent-fqv-c73] {
            margin: 0
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] p[_ngcontent-fqv-c73]:first-of-type {
            font-size: 16px
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] p[_ngcontent-fqv-c73]:last-of-type {
            font-size: 12px
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] p[_ngcontent-fqv-c73] span[_ngcontent-fqv-c73] {
            font-weight: 600
        }

        .info-bar__trustpilot[_ngcontent-fqv-c73] p[_ngcontent-fqv-c73] a[_ngcontent-fqv-c73] {
            text-decoration: none;
            color: #fff
        }

        .info-bar__trustpilot-image-mobile[_ngcontent-fqv-c73] {
            display: none;
            width: 140px;
            height: 20px
        }

        @media (max-width: 991.9px) {
            .info-bar__trustpilot-image-mobile[_ngcontent-fqv-c73] {
                display: inline-block
            }
        }

        .info-bar__trustpilot-image[_ngcontent-fqv-c73] {
            display: none;
            width: 343px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot-image[_ngcontent-fqv-c73] {
                display: inline-block
            }
        }

        @media (max-width: 1240px) {
            .info-bar__trustpilot-image[_ngcontent-fqv-c73] {
                width: 280px
            }
        }

        .info-bar__trustpilot-mobile[_ngcontent-fqv-c73] {
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        .info-bar__trustpilot-trust[_ngcontent-fqv-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot-trust[_ngcontent-fqv-c73] {
                display: none
            }
        }

        .info-bar__payments[_ngcontent-fqv-c73] {
            display: -webkit-flex;
            display: flex
        }

        @media (min-width: 992px) {
            .info-bar__payments[_ngcontent-fqv-c73] {
                display: none
            }
        }

        .info-bar__payment[_ngcontent-fqv-c73] {
            text-align: center;
            background-color: #f5f6f7;
            width: 48px;
            height: 24px;
            font-size: 14px;
            border-radius: 3px
        }

        @media (max-width: 374px) {
            .info-bar__payment[_ngcontent-fqv-c73] {
                width: 40px
            }
        }

        .info-bar__payment[_ngcontent-fqv-c73]:first-child {
            margin-right: 8px
        }

        .info-bar__payment[_ngcontent-fqv-c73] svg-icon[_ngcontent-fqv-c73] {
            width: 100%;
            height: 100%
        }

        .worldwide[_ngcontent-fqv-c73] {
            white-space: nowrap;
            cursor: pointer
        }

        .worldwide__world[_ngcontent-fqv-c73] {
            width: 20px;
            height: auto;
            color: #219653;
            vertical-align: -5px
        }

        .worldwide__label[_ngcontent-fqv-c73] {
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
            .worldwide__label[_ngcontent-fqv-c73] {
                font-size: 16px;
                line-height: 34px;
                text-transform: none
            }
        }

        .worldwide__label2[_ngcontent-fqv-c73] {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            text-align: right;
            letter-spacing: -.01em;
            padding-top: 2px
        }

        @media (max-width: 991.9px) {
            .worldwide__label2[_ngcontent-fqv-c73] {
                display: none
            }
        }

        .worldwide__label2[_ngcontent-fqv-c73] a[_ngcontent-fqv-c73] {
            color: #fff;
            text-decoration: none
        }

        .worldwide__label2[_ngcontent-fqv-c73] a[_ngcontent-fqv-c73]:hover {
            text-decoration: underline
        }

        .worldwide__info-holder[_ngcontent-fqv-c73] {
            vertical-align: -3px;
            padding: 4px
        }

        @media (min-width: 992px) {
            .worldwide__info-holder[_ngcontent-fqv-c73] {
                display: none
            }
        }

        .worldwide__info[_ngcontent-fqv-c73] {
            width: 14px;
            height: auto;
            color: #657a89
        }

        @media (min-width: 992px) {
            .worldwide__info[_ngcontent-fqv-c73] {
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

        .raffles-nav__placeholder[_ngcontent-fqv-c60] {
            width: 100%;
            height: 52px
        }

        @media (min-width: 992px) {
            .raffles-nav__placeholder[_ngcontent-fqv-c60] {
                height: 72px
            }
        }

        .raffles-nav__outer[_ngcontent-fqv-c60] {
            position: absolute;
            background-color: #fff;
            z-index: 2;
            top: 0;
            left: 0;
            right: 0;
            box-shadow: 0 0 32px rgba(0, 19, 31, .08)
        }

        .raffles-nav__inner[_ngcontent-fqv-c60] {
            width: 100%;
            text-align: center;
            overflow: hidden;
            white-space: nowrap
        }

        .raffles-nav__swiper[_ngcontent-fqv-c60] {
            display: block;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: start;
            justify-content: start;
            margin: 0 auto;
            width: auto
        }

        .raffles-nav__item[_ngcontent-fqv-c60] {
            display: inline-block;
            z-index: 10;
            position: relative;
            padding-left: 11px;
            padding-right: 11px
        }

        @media (min-width: 992px) {
            .raffles-nav__item[_ngcontent-fqv-c60] {
                padding-left: 16px;
                padding-right: 16px
            }
        }

        .raffles-nav__link[_ngcontent-fqv-c60] {
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
            .raffles-nav__link[_ngcontent-fqv-c60] {
                font-size: 16px;
                line-height: 26px;
                padding: 23px 0
            }

            .raffles-nav__outer--short[_ngcontent-fqv-c60] .raffles-nav__link[_ngcontent-fqv-c60] {
                padding: 15px 0
            }
        }

        .raffles-nav__link[_ngcontent-fqv-c60]:after {
            transition: opacity .35s ease-in-out;
            opacity: 0;
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 100%;
            background-color: #2aa8f8
        }

        .raffles-nav__link--active[_ngcontent-fqv-c60] {
            color: #2aa8f8
        }

        .raffles-nav__link--active[_ngcontent-fqv-c60]:after {
            opacity: 1
        }

        @media (max-width: 991.9px) {
            .raffles-nav__link-value--full[_ngcontent-fqv-c60] {
                display: none
            }
        }

        @media (min-width: 992px) {
            .raffles-nav__link-value--short[_ngcontent-fqv-c60] {
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

        .why[_ngcontent-fqv-c75] {
            padding: 60px 0 80px;
            background-color: #2aa8f8;
            font-family: Exo, sans-serif
        }

        @media (min-width: 992px) {
            .why[_ngcontent-fqv-c75] {
                padding: 80px 0 120px
            }
        }

        @media (min-width: 992px) {
            .why__steps[_ngcontent-fqv-c75] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center
            }
        }

        @media (max-width: 991.9px) {
            .why__steps[_ngcontent-fqv-c75] {
                max-width: 440px;
                margin: 0 auto
            }
        }

        .why__step[_ngcontent-fqv-c75] {
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
            .why__step[_ngcontent-fqv-c75] {
                padding: 24px;
                margin-right: 2px;
                -webkit-flex: 0 0 33%;
                flex: 0 0 33%
            }
        }

        .why__step[_ngcontent-fqv-c75]:first-child {
            border-radius: 10px 10px 0 0
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-fqv-c75]:first-child {
                border-radius: 10px 0 0 10px
            }
        }

        .why__step[_ngcontent-fqv-c75]:last-child {
            border-radius: 0 0 10px 10px
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-fqv-c75]:last-child {
                border-radius: 0 10px 10px 0
            }
        }

        .why__icon[_ngcontent-fqv-c75] {
            -webkit-flex: 0 0 60px;
            flex: 0 0 60px;
            height: 60px;
            margin-right: 16px
        }

        @media (min-width: 992px) {
            .why__icon[_ngcontent-fqv-c75] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px;
                padding-right: 20px
            }
        }

        .why__icon[_ngcontent-fqv-c75] img[_ngcontent-fqv-c75] {
            width: auto;
            height: 100%
        }

        .why__label[_ngcontent-fqv-c75] {
            -webkit-flex: 1 0 30px;
            flex: 1 0 30px
        }

        .why__title[_ngcontent-fqv-c75] {
            color: #2aa8f8;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px
        }

        @media (min-width: 992px) {
            .why__title[_ngcontent-fqv-c75] {
                font-size: 20px;
                line-height: 24px
            }
        }

        .why__subtitle[_ngcontent-fqv-c75] {
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
            .why__subtitle[_ngcontent-fqv-c75] {
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

        .how[_ngcontent-fqv-c70] {
            padding: 60px 0 80px;
            background-color: #f5f6f7;
            font-family: Exo, sans-serif
        }

        @media (min-width: 992px) {
            .how[_ngcontent-fqv-c70] {
                padding: 80px 0 120px
            }
        }

        @media (min-width: 992px) {
            .how__steps[_ngcontent-fqv-c70] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center
            }
        }

        @media (max-width: 991.9px) {
            .how__steps[_ngcontent-fqv-c70] {
                max-width: 440px;
                margin: 0 auto
            }
        }

        .how__step[_ngcontent-fqv-c70] {
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
            .how__step[_ngcontent-fqv-c70] {
                max-height: none;
                margin-right: 2px;
                padding: 24px;
                -webkit-flex: 0 0 33%;
                flex: 0 0 33%
            }
        }

        .how__step[_ngcontent-fqv-c70]:first-child {
            border-radius: 10px 10px 0 0
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-fqv-c70]:first-child {
                border-radius: 10px 0 0 10px
            }
        }

        .how__step[_ngcontent-fqv-c70]:last-child {
            border-radius: 0 0 10px 10px
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-fqv-c70]:last-child {
                border-radius: 0 10px 10px 0
            }
        }

        .how__icon[_ngcontent-fqv-c70] {
            -webkit-flex: 0 0 60px;
            flex: 0 0 60px;
            height: 60px;
            margin-right: 16px
        }

        @media (min-width: 992px) {
            .how__icon[_ngcontent-fqv-c70] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px
            }
        }

        .how__icon[_ngcontent-fqv-c70] img[_ngcontent-fqv-c70] {
            width: auto;
            height: 100%
        }

        .how__label[_ngcontent-fqv-c70] {
            -webkit-flex: 1 0 30px;
            flex: 1 0 30px
        }

        .how__title[_ngcontent-fqv-c70] {
            margin-bottom: 2px;
            color: #2aa8f8;
            font-weight: 500;
            font-size: 10px;
            line-height: 12px;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .how__title[_ngcontent-fqv-c70] {
                font-size: 12px
            }
        }

        .how__subtitle[_ngcontent-fqv-c70] {
            font-size: 16px;
            line-height: 20px;
            font-weight: 600;
            color: #00131f;
            letter-spacing: -.01em;
            margin-bottom: 0;
            padding-top: 2px
        }

        @media (min-width: 992px) {
            .how__subtitle[_ngcontent-fqv-c70] {
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

        .reviews[_ngcontent-fqv-c68] {
            background: white;
            padding: 30px 15px;
            border-radius: 4px;
            max-width: 780px;
            margin: 0 auto
        }

        @media (min-width: 576px) {
            .reviews[_ngcontent-fqv-c68] {
                padding: 40px 50px
            }
        }

        .reviews__header[_ngcontent-fqv-c68] {
            display: -webkit-flex;
            display: flex
        }

        .reviews__identity[_ngcontent-fqv-c68] {
            text-align: left;
            font-size: 13px;
            line-height: 15px;
            -webkit-flex: 1 0 200px;
            flex: 1 0 200px
        }

        .reviews__logo[_ngcontent-fqv-c68] {
            -webkit-flex: 0 0 68px;
            flex: 0 0 68px;
            text-align: right
        }

        @media (min-width: 576px) {
            .reviews__logo[_ngcontent-fqv-c68] {
                -webkit-flex: 0 0 101px;
                flex: 0 0 101px
            }
        }

        .reviews__logo[_ngcontent-fqv-c68] img[_ngcontent-fqv-c68] {
            width: 60px;
            height: auto
        }

        @media (min-width: 576px) {
            .reviews__logo[_ngcontent-fqv-c68] img[_ngcontent-fqv-c68] {
                width: 93px
            }
        }

        .reviews__title[_ngcontent-fqv-c68] {
            font-size: 28px;
            line-height: 32px
        }

        .reviews__location[_ngcontent-fqv-c68] {
            color: #70757a
        }

        .reviews__rating[_ngcontent-fqv-c68] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 15px 0 17px
        }

        .reviews__rating-average[_ngcontent-fqv-c68] {
            font-size: 32px;
            line-height: 36px;
            margin-right: 11px;
            color: #70757a
        }

        .reviews__stars-box[_ngcontent-fqv-c68] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .reviews__stars[_ngcontent-fqv-c68] {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAWCAYAAAA1vze2AAAAqUlEQVR4AWLwySwkGv/YzgworgwwAIphGHqJXWgX6nl6q55o/GHxCX4bUx9hMK9JYwucFSmAubW2ZifED8Q7IXEgcmRqVNDsgBhBrAMSBJEiqwAGAaBRhiDvBk1A3mkRyb2CXSYLlmWFnbArffoMIrjS6qy3Sm/Z/068CPEbyKpKhfCDyA0yNE95MKtRGe9LiSz9O3hKclv6Y76ictQzqbmjyhIkyVi+8wCta5MKDP5AeAAAAABJRU5ErkJggg==);
            background-size: 25px 22px;
            height: 22px;
            width: 125px
        }

        .review[_ngcontent-fqv-c68] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-start;
            align-items: flex-start;
            font-family: arial, sans-serif;
            border-top: 1px solid #f5f5f5;
            padding: 28px 0
        }

        .review__avatar[_ngcontent-fqv-c68] {
            -webkit-flex: 0 0 47px;
            flex: 0 0 47px
        }

        .review__avatar-img[_ngcontent-fqv-c68] {
            width: 40px;
            height: 40px
        }

        .review__avatar-initial[_ngcontent-fqv-c68] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 24px;
            line-height: 38px;
            padding-top: 2px;
            color: #fff;
            text-align: center
        }

        .review__content[_ngcontent-fqv-c68] {
            -webkit-flex: 1 0 200px;
            flex: 1 0 200px;
            font-size: 13px;
            line-height: 15px;
            color: #000;
            text-align: left
        }

        .review__name[_ngcontent-fqv-c68] {
            font-weight: 700
        }

        .review__counter[_ngcontent-fqv-c68] {
            padding-top: 2px;
            color: #70757a
        }

        .review__stars-date[_ngcontent-fqv-c68] {
            padding-top: 8px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        .review__rating[_ngcontent-fqv-c68] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .review__stars[_ngcontent-fqv-c68] {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAYAAACZ3F9/AAAAZklEQVR4AWL4uYWZCdAJHVMBAIJAAG1DoAtjGarYxxjqwHADnA8HFuWL3E8puH8gAqILPaB34Qq4FAQ1yoo+8ES7NRWKe6u+Ogo0XjtaCmlSd6K/4OQQOF0JKYTsMasgOIRkBfDZATita/85jgoHAAAAAElFTkSuQmCC);
            background-size: 14px 13px;
            height: 13px;
            width: 0;
            display: inline-block
        }

        .review__date[_ngcontent-fqv-c68] {
            padding-left: 8px;
            -webkit-flex: 0 0 100px;
            flex: 0 0 100px;
            color: #70757a
        }

        .review__text[_ngcontent-fqv-c68] {
            padding-top: 8px
        }

        .review__text[_ngcontent-fqv-c68] p {
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

        .download[_ngcontent-fqv-c74] {
            background-color: #2aa8f8;
            text-align: center;
            font-family: Exo, sans-serif;
            padding-bottom: 60px;
            position: relative
        }

        @media (min-width: 992px) {
            .download[_ngcontent-fqv-c74] {
                padding-bottom: 0
            }
        }

        @media (max-width: 377.9px) {
            .download__iphone[_ngcontent-fqv-c74] {
                width: 100%
            }
        }

        .download__header[_ngcontent-fqv-c74] {
            margin: 0;
            padding-top: 60px;
            color: #fff;
            font-weight: 800;
            font-size: 28px;
            line-height: 32px;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .download__header[_ngcontent-fqv-c74] {
                padding-top: 80px;
                font-size: 40px;
                line-height: 48px
            }
        }

        .download__desc[_ngcontent-fqv-c74] {
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            margin: 12px 0 50px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .download__desc[_ngcontent-fqv-c74] {
                font-size: 16px;
                line-height: 24px
            }
        }

        .download__bg[_ngcontent-fqv-c74] {
            background: linear-gradient(180deg, rgba(4, 144, 233, 0) 0%, rgba(4, 144, 233, .614631) 31.77%, #2AA8F8 91.15%);
            height: 225px;
            position: absolute;
            bottom: 60px;
            left: 0;
            width: 100%
        }

        @media (min-width: 992px) {
            .download__bg[_ngcontent-fqv-c74] {
                bottom: 0
            }
        }

        .download__buttons[_ngcontent-fqv-c74] {
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
            .download__buttons[_ngcontent-fqv-c74] {
                -webkit-flex-direction: row;
                flex-direction: row;
                bottom: 50px
            }
        }

        .download[_ngcontent-fqv-c74] .store-button[_ngcontent-fqv-c74] {
            min-width: 197px;
            height: 60px
        }

        @media (min-width: 992px) {
            .download[_ngcontent-fqv-c74] .store-button[_ngcontent-fqv-c74] {
                height: 54px;
                min-width: 177px
            }
        }

        .download[_ngcontent-fqv-c74] .store-button--google[_ngcontent-fqv-c74] {
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .download[_ngcontent-fqv-c74] .store-button--google[_ngcontent-fqv-c74] {
                margin: 0 0 0 17px;
                min-width: 202px
            }
        }

    </style>
    <style>
        .holder[_ngcontent-fqv-c59] {
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

        .winners[_ngcontent-fqv-c69] {
            background-color: #f5f6f7;
            padding-top: 60px;
            font-family: Exo, sans-serif;
            position: relative
        }

        @media (min-width: 768px) {
            .winners[_ngcontent-fqv-c69] {
                padding-top: 80px;
                max-height: 842px;
                overflow: hidden
            }
        }

        .winners__header[_ngcontent-fqv-c69] {
            text-align: center;
            padding-bottom: 64px
        }

        @media (min-width: 768px) {
            .winners__header[_ngcontent-fqv-c69] {
                padding-bottom: 0;
                text-align: left
            }
        }

        .winners__header[_ngcontent-fqv-c69] h2[_ngcontent-fqv-c69] {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 28px;
            line-height: 32px;
            color: #00131f;
            margin: 0 0 24px
        }

        @media (min-width: 992px) {
            .winners__header[_ngcontent-fqv-c69] h2[_ngcontent-fqv-c69] {
                margin: 0;
                font-size: 40px;
                line-height: 48px
            }
        }

        .winners__header[_ngcontent-fqv-c69] a[_ngcontent-fqv-c69] {
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
            .winners__header[_ngcontent-fqv-c69] a[_ngcontent-fqv-c69] {
                position: relative;
                top: 35px;
                font-size: 20px;
                line-height: 24px
            }
        }

        .winners__header[_ngcontent-fqv-c69] a[_ngcontent-fqv-c69] span[_ngcontent-fqv-c69]:first-child {
            margin-right: 19px
        }

        .winners__header[_ngcontent-fqv-c69] a[_ngcontent-fqv-c69] svg-icon[_ngcontent-fqv-c69] {
            width: 20px;
            height: 20px
        }

        .winners__wrapper[_ngcontent-fqv-c69] {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            max-height: 505px;
            overflow: hidden;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 768px) {
            .winners__wrapper[_ngcontent-fqv-c69] {
                grid-template-columns: repeat(3, 1fr);
                max-height: none;
                grid-gap: 20px;
                padding: 0 30px
            }
        }

        @media (min-width: 992px) {
            .winners__wrapper[_ngcontent-fqv-c69] {
                grid-template-columns: repeat(3, 290px);
                max-height: none;
                grid-gap: 20px;
                padding: 0
            }
        }

        @media (min-width: 1200px) {
            .winners__wrapper[_ngcontent-fqv-c69] {
                margin: 0 20px;
                grid-template-columns: repeat(3, 318px)
            }
        }

        .winners__winner[_ngcontent-fqv-c69] {
            position: relative;
            height: 150px;
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            margin-bottom: 16px
        }

        @media (min-width: 768px) {
            .winners__winner[_ngcontent-fqv-c69] {
                height: 272px;
                margin-bottom: 0
            }
        }

        @media (min-width: 992px) {
            .winners__winner[_ngcontent-fqv-c69] {
                height: 272px
            }
        }

        .winners__winner--odd[_ngcontent-fqv-c69] {
            top: 70px;
            right: 8px
        }

        @media (min-width: 768px) {
            .winners__winner--odd[_ngcontent-fqv-c69] {
                top: 0;
                right: 0
            }
        }

        .winners__winner--even[_ngcontent-fqv-c69] {
            left: 8px
        }

        @media (min-width: 768px) {
            .winners__winner--even[_ngcontent-fqv-c69] {
                left: 0
            }
        }

        @media (min-width: 768px) {
            .winners__winner--w-1[_ngcontent-fqv-c69] {
                grid-column: 3
            }

            .winners__winner--w-2[_ngcontent-fqv-c69] {
                grid-row: 2;
                top: 70px
            }

            .winners__winner--w-3[_ngcontent-fqv-c69] {
                grid-column: 2;
                top: -110px
            }

            .winners__winner--w-4[_ngcontent-fqv-c69] {
                grid-column: 3
            }

            .winners__winner--w-5[_ngcontent-fqv-c69] {
                grid-row: 3;
                top: 70px
            }

            .winners__winner--w-6[_ngcontent-fqv-c69] {
                grid-column: 2;
                bottom: 90px
            }

            .winners__winner--w-7[_ngcontent-fqv-c69] {
                grid-column: 3
            }
        }

        .winners__winner[_ngcontent-fqv-c69] img[_ngcontent-fqv-c69] {
            width: 120%
        }

        .winners__bg[_ngcontent-fqv-c69] {
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

        [_nghost-fqv-c65] {
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
            [_nghost-fqv-c65] {
                max-width: 48%;
                padding: 0 5px
            }
        }

        @media (min-width: 992px) {
            [_nghost-fqv-c65] {
                margin-bottom: 35px
            }
        }

        @media (min-width: 1600px) {
            [_nghost-fqv-c65] {
                max-width: 25%
            }
        }

        .raffle-card[_ngcontent-fqv-c65] {
            text-decoration: none;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: 100%;
            background: #F5F6F7
        }

        @media (min-width: 992px) {
            .raffle-card[_ngcontent-fqv-c65] {
                padding-bottom: 24px;
                border-top: 0;
                border-left: 10px;
                border-top: 10px;
                border-right: 0;
                border-radius: 0 0 10px 10px
            }
        }

        .raffle-card--white[_ngcontent-fqv-c65] {
            background: #fff
        }

        .raffle-card[_ngcontent-fqv-c65]:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .05)
        }

        .raffle-card[_ngcontent-fqv-c65]:hover .raffle-card__enter[_ngcontent-fqv-c65] {
            background-color: #2aa8f8;
            color: #fff;
            border-color: #2aa8f8
        }

        .raffle-card[_ngcontent-fqv-c65]:hover .raffle-card__enter-icon--blue[_ngcontent-fqv-c65] {
            display: none !important
        }

        .raffle-card[_ngcontent-fqv-c65]:hover .raffle-card__enter-icon--white[_ngcontent-fqv-c65] {
            display: inline-block !important
        }

        .raffle-card__image[_ngcontent-fqv-c65] {
            width: 100%;
            position: relative
        }

        .raffle-card__image[_ngcontent-fqv-c65] img[_ngcontent-fqv-c65] {
            width: 100%;
            display: block;
            border-radius: 8px 8px 0 0
        }

        .raffle-card__label[_ngcontent-fqv-c65] {
            position: absolute;
            left: 0;
            top: 0;
            padding: 4px 10px;
            font-family: Barlow Condensed;
            text-transform: uppercase;
            letter-spacing: .15rem
        }

        .raffle-card__label_green[_ngcontent-fqv-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__image-red-cover[_ngcontent-fqv-c65] {
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
            .raffle-card__image-red-cover[_ngcontent-fqv-c65] {
                left: 20px;
                right: 20px;
                font-size: 16px;
                padding: 3px
            }
        }

        .raffle-card__draw[_ngcontent-fqv-c65] {
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
            .raffle-card__draw[_ngcontent-fqv-c65] {
                font-size: 7px;
                padding: 5px
            }
        }

        @media (min-width: 992px) {
            .raffle-card__draw[_ngcontent-fqv-c65] {
                font-size: 16px;
                right: 12px;
                left: auto;
                left: initial;
                padding: 11px 16px
            }
        }

        .raffle-card__draw_tomorrow[_ngcontent-fqv-c65] {
            background-color: #2aa8f8;
            color: #fff;
            border: none;
            margin-right: 10px
        }

        .raffle-card__draw_tomorrow[_ngcontent-fqv-c65] span[_ngcontent-fqv-c65] {
            border-radius: 10px;
            color: #fff;
            padding: 1px 3.5px;
            background-color: #007ccd
        }

        @media (min-width: 992px) {
            .raffle-card__draw_tomorrow[_ngcontent-fqv-c65] span[_ngcontent-fqv-c65] {
                font-size: 14px;
                padding: 2px 7.5px
            }
        }

        .raffle-card__wrapper[_ngcontent-fqv-c65] {
            -webkit-flex-grow: 1;
            flex-grow: 1
        }

        .raffle-card__alternative[_ngcontent-fqv-c65] {
            font-weight: 500;
            font-size: 10px;
            line-height: 14px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .raffle-card__alternative[_ngcontent-fqv-c65] {
                font-size: 14px;
                line-height: 20px
            }
        }

        .raffle-card__title[_ngcontent-fqv-c65] {
            font-weight: 600;
            font-size: 14px;
            line-height: 18px;
            letter-spacing: -.01em;
            color: #00131f;
            margin: 0;
            padding: 8px 8px 4px
        }

        @media (min-width: 992px) {
            .raffle-card__title[_ngcontent-fqv-c65] {
                padding: 24px 15px 8px;
                font-size: 24px;
                line-height: 28px
            }
        }

        .raffle-card__price[_ngcontent-fqv-c65] {
            font-weight: 800;
            font-size: 20px;
            line-height: 20px;
            text-transform: uppercase;
            margin-top: 18px
        }

        @media (min-width: 992px) {
            .raffle-card__price[_ngcontent-fqv-c65] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .raffle-card__price-new[_ngcontent-fqv-c65] {
            color: #2aa8f8
        }

        .raffle-card__price-old[_ngcontent-fqv-c65] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 7px
        }

        @media (min-width: 992px) {
            .raffle-card__price-old[_ngcontent-fqv-c65] {
                font-weight: 800;
                font-size: 24px;
                line-height: 32px;
                margin-right: 12px
            }
        }

        .raffle-card__enter[_ngcontent-fqv-c65] {
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
            .raffle-card__enter[_ngcontent-fqv-c65] {
                margin: 13px 24px 0;
                font-size: 20px;
                line-height: 24px;
                padding: 12px 10px;
                border-width: 2px
            }
        }

        .raffle-card__enter-icon[_ngcontent-fqv-c65] {
            width: 20px;
            height: 16px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .raffle-card__enter-icon[_ngcontent-fqv-c65] {
                height: 20px
            }
        }

        .raffle-card__enter-icon--white[_ngcontent-fqv-c65] {
            display: none
        }

        .raffle-card__slider[_ngcontent-fqv-c65] {
            margin-top: 14px;
            padding: 0 8px;
            position: relative
        }

        @media (min-width: 992px) {
            .raffle-card__slider[_ngcontent-fqv-c65] {
                padding: 0 24px;
                margin-top: 28px
            }
        }

        .raffle-card__slider--hidden[_ngcontent-fqv-c65] {
            opacity: 0
        }

        .raffle-card__sold[_ngcontent-fqv-c65] {
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
            .raffle-card__sold[_ngcontent-fqv-c65] {
                top: -7px
            }
        }

        .raffle-card__drawtime[_ngcontent-fqv-c65] {
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
            .raffle-card__drawtime[_ngcontent-fqv-c65] {
                font-size: 14px;
                line-height: 15px;
                padding: 5px 19px;
                top: -12px
            }
        }

        .raffle-card__drawtime--soon[_ngcontent-fqv-c65] {
            background-color: #2aa8f8;
            color: #fff
        }

        .raffle-card__drawtime--urgent[_ngcontent-fqv-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__bottominfo[_ngcontent-fqv-c65] {
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
            .raffle-card__bottominfo[_ngcontent-fqv-c65] {
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

        .ticket-card[_ngcontent-fqv-c82] {
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

        .ticket-card[_ngcontent-fqv-c82]:after,
        .ticket-card[_ngcontent-fqv-c82]:before {
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

            .ticket-card[_ngcontent-fqv-c82]:after,
            .ticket-card[_ngcontent-fqv-c82]:before {
                width: 25px;
                height: 25px;
                top: 42px
            }
        }

        .ticket-card[_ngcontent-fqv-c82]:before {
            left: -12px
        }

        .ticket-card[_ngcontent-fqv-c82]:after {
            right: -12px
        }

        .ticket-card--sold-out[_ngcontent-fqv-c82] .ticket-card__name[_ngcontent-fqv-c82] {
            color: #939ca4
        }

        .ticket-card--sold-out[_ngcontent-fqv-c82] .ticket-card__amount[_ngcontent-fqv-c82] {
            background: #c4c9ce;
            color: #fff
        }

        .ticket-card--win[_ngcontent-fqv-c82] .ticket-card__content[_ngcontent-fqv-c82] {
            background: linear-gradient(to right, rgb(191, 134, 5) 0%, rgb(203, 164, 47) 12%, rgb(214, 180, 100) 29%, rgb(208, 175, 62) 54%, rgb(202, 185, 125) 76%, rgb(199, 170, 88) 87%, rgb(191, 134, 5) 100%)
        }

        .ticket-card--win[_ngcontent-fqv-c82] .ticket-card__name[_ngcontent-fqv-c82] {
            color: #fff;
            font-weight: 600;
            margin-bottom: 14px
        }

        .ticket-card--win[_ngcontent-fqv-c82] .ticket-card__amount[_ngcontent-fqv-c82] {
            background-color: #f5f6f7;
            color: #cfb260
        }

        .ticket-card--loss[_ngcontent-fqv-c82] .ticket-card__content[_ngcontent-fqv-c82] {
            background: linear-gradient(0deg, #E6E9ED, #E6E9ED), #FFFFFF
        }

        .ticket-card--loss[_ngcontent-fqv-c82] .ticket-card__name[_ngcontent-fqv-c82] {
            color: #939ca4;
            font-weight: 600;
            margin-bottom: 14px
        }

        .ticket-card--loss[_ngcontent-fqv-c82] .ticket-card__amount[_ngcontent-fqv-c82] {
            background-color: #f5f6f7;
            color: #939ca4
        }

        .ticket-card__badge[_ngcontent-fqv-c82] {
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

        .ticket-card__name[_ngcontent-fqv-c82] {
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

        .ticket-card__content[_ngcontent-fqv-c82] {
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

        .ticket-card__amount[_ngcontent-fqv-c82] {
            background: #0490e9;
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
        .current-competitions__section[_ngcontent-fqv-c93] {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .current-competitions__data-header[_ngcontent-fqv-c93] {
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

        .current-competitions__result-count[_ngcontent-fqv-c93] {
            font-size: 17px;
            color: gray
        }

        .current-competitions__sort-options[_ngcontent-fqv-c93] {
            font-size: 17px
        }

        .current-competitions__pagination-box[_ngcontent-fqv-c93] {
            width: 100%;
            padding: 10px 15px 40px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        .error404__title[_ngcontent-fqv-c93] {
            font-size: 150px;
            line-height: 1;
            font-weight: 400;
            color: gray;
            margin: 0;
            text-align: center;
            padding-top: 50px;
            padding-bottom: 30px
        }

        .error404__search-form[_ngcontent-fqv-c93] {
            margin-top: 32px;
            display: -webkit-flex;
            display: flex
        }

        .error404__search-submit[_ngcontent-fqv-c93] {
            padding: 0 25px;
            height: 46px;
            margin-left: 6px
        }

        .error404__loader-box[_ngcontent-fqv-c93] {
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

        .error404__loader-icon[_ngcontent-fqv-c93] {
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

        .loader-icon__box[_ngcontent-fqv-c94] {
            text-align: center;
            padding: 10px 0
        }

        .loader-icon__page-box[_ngcontent-fqv-c94] {
            text-align: center;
            padding: 100px 0 300px
        }

        .loader-icon__icon[_ngcontent-fqv-c94] {
            width: 44px;
            height: 44px
        }

        .loader-icon__intext[_ngcontent-fqv-c94] {
            width: 12px;
            height: 12px;
            line-height: inherit
        }

        .loader-icon__button[_ngcontent-fqv-c94] {
            width: 16px;
            height: 16px
        }

        .breadcrumbs[_ngcontent-fqv-c94] {
            display: block;
            margin-top: 0;
            margin-bottom: 25px;
            padding: 0
        }

        .breadcrumbs__item[_ngcontent-fqv-c94] {
            display: inline;
            list-style-type: none;
            font-size: 16px;
            line-height: 24px;
            color: gray
        }

        .breadcrumbs__item[_ngcontent-fqv-c94]:not(:last-child):after {
            margin: 0 4px;
            content: ">"
        }

        .breadcrumbs_link[_ngcontent-fqv-c94] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .3s
        }

        .breadcrumbs_link[_ngcontent-fqv-c94]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .post[_ngcontent-fqv-c94] {
            color: gray
        }

        .post__image[_ngcontent-fqv-c94] {
            display: block;
            width: 100%;
            margin-bottom: 30px
        }

        .post__title[_ngcontent-fqv-c94] {
            margin-top: 0;
            margin-bottom: 8px;
            font-family: Barlow Condensed;
            font-size: 40px;
            line-height: 48px;
            font-weight: 800;
            letter-spacing: .02em
        }

        .post__text[_ngcontent-fqv-c94] {
            margin-top: 16px;
            font-size: 17px;
            line-height: 26px;
            padding-bottom: 60px
        }

    </style>
</head>
@endsection

@section('content')
<div _ngcontent-fqv-c13="" class="website-p7d">
    <div _ngcontent-fqv-c13="">
        <div _ngcontent-fqv-c13="">
            <router-outlet _ngcontent-fqv-c13=""></router-outlet>
            <app-competition-winners _nghost-fqv-c78="" class="ng-star-inserted">
                <app-header _ngcontent-fqv-c78="" _nghost-fqv-c63="">
                    <div _ngcontent-fqv-c63="" class="header-placeholder"></div>
                    <!---->
                    <div _ngcontent-fqv-c63="" class="header-container">
                        <app-install-prompt _ngcontent-fqv-c63="" _nghost-fqv-c62="" class="ng-tns-c62-119 ng-star-inserted">
                            <!---->
                        </app-install-prompt>
                        <!---->
                        <header _ngcontent-fqv-c63="" class="header header--short"><a _ngcontent-fqv-c63="" routerlink="/" title="Go to homepage" class="logo header__logo" href="/"><img _ngcontent-fqv-c63="" src="/assets/svg/logo.svg" alt="7days Performance" class="logo__img"></a>
                            <nav _ngcontent-fqv-c63="" class="header__nav">
                                <ul _ngcontent-fqv-c63="" class="main-nav">
                                    <li _ngcontent-fqv-c63="" class="main-nav__item"><a _ngcontent-fqv-c63="" routerlink="/current-competitions" title="" class="main-nav__link" href="/current-competitions">Cars and Bikes</a></li>
                                    <li _ngcontent-fqv-c63="" class="main-nav__item"><a _ngcontent-fqv-c63="" routerlink="/current-tech-competitions" title="" class="main-nav__link" href="/current-tech-competitions">Tech and Luxury</a></li>
                                    <li _ngcontent-fqv-c63="" class="main-nav__item"><a _ngcontent-fqv-c63="" routerlink="/cash-competitions" title="" class="main-nav__link" href="/cash-competitions">Tax Free Cash</a></li>
                                    <li _ngcontent-fqv-c63="" class="main-nav__item"><a _ngcontent-fqv-c63="" routerlink="/competition-winners/featured" title="" class="main-nav__link" href="/competition-winners/featured">Winners</a></li>
                                    <li _ngcontent-fqv-c63="" class="main-nav__item"><a _ngcontent-fqv-c63="" routerlink="/draw-results" title="" class="main-nav__link" href="/draw-results">Draw Results</a></li>
                                    <li _ngcontent-fqv-c63="" class="main-nav__item"><a _ngcontent-fqv-c63="" routerlink="/faq" title="" class="main-nav__link" href="/faq">FAQ</a></li>
                                </ul><button _ngcontent-fqv-c63="" class="header__button header__button_sm nav-button">
                                    <svg-icon _ngcontent-fqv-c63="" name="hamburger-new" class="nav-button__icon nav-button__icon_hamburger" _nghost-fqv-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M19.167 9.166H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667zM19.167 3.334H.833a.833.833 0 000 1.667h18.334a.833.833 0 000-1.667zM19.167 15H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </button><a _ngcontent-fqv-c63="" routerlink="/cart" class="header__button nav-button" href="/cart"><span _ngcontent-fqv-c63="" class="nav-button__label ng-star-inserted">0</span>
                                    <!---->
                                    <!---->
                                    <svg-icon _ngcontent-fqv-c63="" name="cart-new" class="nav-button__icon nav-button__icon_shopping-cart" _nghost-fqv-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27758)" fill="#00131F">
                                                <path d="M18.927 3.397a2.494 2.494 0 00-1.919-.897H3.535L3.5 2.208A2.5 2.5 0 001.018 0H.833a.833.833 0 000 1.667h.185a.833.833 0 01.828.735l1.147 9.75a4.167 4.167 0 004.138 3.681h8.702a.834.834 0 000-1.666H7.131A2.5 2.5 0 014.78 12.5h9.933a4.166 4.166 0 004.101-3.428l.654-3.628a2.495 2.495 0 00-.542-2.046zm-1.094 1.751l-.655 3.629a2.5 2.5 0 01-2.464 2.056H4.516l-.784-6.666h13.276a.833.833 0 01.825.981zM5.833 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333zM14.167 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27758">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-fqv-c63="" routerlink="/my-account" class="header__button nav-button" href="/my-account">
                                    <svg-icon _ngcontent-fqv-c63="" name="profile-new" class="nav-button__icon nav-button__icon_account" _nghost-fqv-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
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
                        <div _ngcontent-fqv-c63="" class="mobile-menu"><button _ngcontent-fqv-c63="" class="mobile-menu__close">
                                <svg-icon _ngcontent-fqv-c63="" name="close-7-d" class="mobile-menu__close-icon" _nghost-fqv-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M17.692 15.713L8.288 6.308a1.05 1.05 0 00-1.485 0l-.495.495a1.05 1.05 0 000 1.484l9.404 9.405c.41.41 1.075.41 1.485 0l.495-.494c.41-.41.41-1.075 0-1.485z"></path>
                                        <path d="M15.712 6.308l-9.404 9.405a1.05 1.05 0 000 1.485l.494.494c.41.41 1.076.41 1.485 0l4.703-4.702 4.702-4.702a1.05 1.05 0 000-1.485l-.495-.495a1.05 1.05 0 00-1.485 0z"></path>
                                    </svg></svg-icon>
                            </button>
                            <aside _ngcontent-fqv-c63="" class="mobile-menu__panel">
                                <nav _ngcontent-fqv-c63="" class="mobile-menu__nav">
                                    <ul _ngcontent-fqv-c63="" class="mobile-menu__nav-list">
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><span _ngcontent-fqv-c63="" class="mobile-menu__title"> Competitions</span></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/current-competitions" title="" class="mobile-menu__link" href="/current-competitions">Cars &amp; Bikes</a></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/current-tech-competitions" title="" class="mobile-menu__link" href="/current-tech-competitions">Tech &amp; Luxury</a></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/cash-competitions" title="" class="mobile-menu__link" href="/cash-competitions">Cash</a></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/instant-wins" title="" class="mobile-menu__link" href="/instant-wins"> Instant Wins</a></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><span _ngcontent-fqv-c63="" class="mobile-menu__divider"></span></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/competition-winners/featured" title="" class="mobile-menu__link" href="/competition-winners/featured">Winners</a></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/draw-results" title="" class="mobile-menu__link" href="/draw-results">Draw Results</a></li>
                                        <li _ngcontent-fqv-c63="" class="mobile-menu__item"><a _ngcontent-fqv-c63="" routerlink="/faq" title="" class="mobile-menu__link" href="/faq">FAQ</a></li>
                                    </ul>
                                </nav>
                                <div _ngcontent-fqv-c63="" class="mobile-menu__bottom-wrapper">
                                    <p _ngcontent-fqv-c63="" class="mobile-menu__text">7days Social</p>
                                    <div _ngcontent-fqv-c63="" class="mobile-menu__socials"><a _ngcontent-fqv-c63="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-fqv-c63="" name="facebook-7-d" class="mobile-menu__social-icon" _nghost-fqv-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                    <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a><a _ngcontent-fqv-c63="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-fqv-c63="" name="instagram-full" class="mobile-menu__social-icon" _nghost-fqv-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
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
                <h1 _ngcontent-fqv-c78="" class="main-title main-title_light-gray">PREVIOUS WINNERS</h1>
                <section _ngcontent-fqv-c78="" class="section section_post-list">
                    <div _ngcontent-fqv-c78="" class="container">
                        <div _ngcontent-fqv-c78="" class="post-grid">
                            <div _ngcontent-fqv-c78="" class="row">
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/ashley-joseph-won-an-audi-rsq8"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/b401a7f8a435153b48c0d2f2322584c118db6b60.jpg" alt="Ashley Joseph Won An Audi RSQ8!" title="Ashley Joseph Won An Audi RSQ8!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Ashley Joseph Won An Audi RSQ8!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Draw date - 16/04/23 @8PM

                                                    Winning ticket #130571! Ashley&nbsp;Joseph Won an Audi RSQ8 and opted for the cash alternative in one of our luxury 4X4 competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/eric-erasmus-won-a-rolex-batman-gmt-master-ii"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/0adc3527c3c53b516a26155315d08498babe3b84.jpg" alt="Eric Erasmus Won A Rolex Batman GMT Master II!" title="Eric Erasmus Won A Rolex Batman GMT Master II!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Eric Erasmus Won A Rolex Batman GMT Master II!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">&nbsp;Winning ticket #15032! Draw date: 16/04/23. Eric Erasmus won a Rolex Batman GMT Master II and opted for the cash alternative in our latest watch competition!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/joseph-grover-won-5-000-tax-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/17478b63f84db5556c838944cb0fdce3c171258d.jpg" alt="Joseph Grover Won £5,000 Tax Cash!" title="Joseph Grover Won £5,000 Tax Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Joseph Grover Won £5,000 Tax Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #5260! Draw date 16/04/23. Joseph Grover won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/adam-armstrong-won-a-road-legal-sur-ron-lbx-electric-bike"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/9d0ca8ab9014603c650821cf5c0663f104339346.jpg" alt="Adam Armstrong Won A Road Legal Sur Ron LBX Electric Bike!" title="Adam Armstrong Won A Road Legal Sur Ron LBX Electric Bike!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Adam Armstrong Won A Road Legal Sur Ron LBX Electric Bike!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket #1739! Draw date: 16/04/23. Adam Armstrong&nbsp;Won a Road Legal Sur-Ron LBX Electric Bike and opted for the cash alternative&nbsp;in one of our motorbike competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/tom-priestley-won-this-audi-rs3-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/c77ca1aaf97497311d2cec1c33535c155200ea7c.jpg" alt="Tom Priestley Won This Audi RS3 + £1,000 Cash" title="Tom Priestley Won This Audi RS3 + £1,000 Cash">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Tom Priestley Won This Audi RS3 + £1,000 Cash</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket -56420! Draw date: 14/04/23. Tom Priestley&nbsp;Won this Audi RS3 + £1,000 in one of our car competitions! What an awesome win!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/ateeq-saleem-won-a-630bhp-mercedes-c63s-amg-1-000"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/db7d108d4a55cff119305068acf5a687dbfb0823.jpg" alt="Ateeq Saleem Won A 630BHP Mercedes C63s AMG + £1,000!" title="Ateeq Saleem Won A 630BHP Mercedes C63s AMG + £1,000!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Ateeq Saleem Won A 630BHP Mercedes C63s AMG + £1,000!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket -35611! Draw date: 12/04/23. Ateeq Saleem&nbsp;Won a 630BHP Mercedes C63s AMG and opted for the cash a alternative&nbsp;in one of our&nbsp;car competitions</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/matthew-jenkins-won-a-ducati-panigale-899"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/f43ec41c044824ffd6338d6e2e5c49b5a9b55795.jpg" alt="Matthew Jenkins Won A Ducati Panigale 899!" title="Matthew Jenkins Won A Ducati Panigale 899!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Matthew Jenkins Won A Ducati Panigale 899!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #10559! Draw date: 09/04/23. Matthew Jenkins&nbsp;won a Ducati Panigale&nbsp;899 and opted for the cash alternative&nbsp;in one of our superbike&nbsp;competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/peter-duncan-won-a-2021-bmw-m4-competition"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/f4374dbae602a8795a0d7216d1e2687a22dd3e0d.jpg" alt="Peter Duncan Won A 2021 BMW M4 Competition!" title="Peter Duncan Won A 2021 BMW M4 Competition!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Peter Duncan Won A 2021 BMW M4 Competition!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #66898! Draw date: 07/04/23 Peter Duncan Won a 2021 BMW M4 Competition and opted for the cash alternative in one of car&nbsp;competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/michael-young-won-this-mk3-focus-rs-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8a655d8876c63d6934a4039ff318f3d725b73c0b.jpg" alt="Michael Young Won This MK3 Focus RS + £1,000 Cash!" title="Michael Young Won This MK3 Focus RS + £1,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Michael Young Won This MK3 Focus RS + £1,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">
                                                    Winning ticket #3955!
                                                    Michael Young Won This MK3 Focus RS + £1,000 Cash ! Draw Date - 07/04/23 @8PM</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/antony-cousins-won-40-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8670455e1deec3c961294d1a5bfe3d803cd656f5.jpg" alt="Antony Cousins Won £40,000 Tax Free Cash!" title="Antony Cousins Won £40,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Antony Cousins Won £40,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #7628! Draw date 07/04/23. Antony Cousins won £40,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/junior-blackwood-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/5b51111ef496864fa1feeb710534af2b2681408c.jpg" alt="Junior Blackwood Won £5,000 Tax Free Cash!" title="Junior Blackwood Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Junior Blackwood Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #6827! Draw date 07/04/23. Junior Blackwood won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/adam-cann-won-20-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/957f7e9857975f3ea25d2ce236e450310bf14cb8.jpg" alt="Adam Cann Won £20,000 Tax Free Cash!" title="Adam Cann Won £20,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Adam Cann Won £20,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #28682! Draw date: 05/04/23. Adam Cann won&nbsp;£20,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/helen-johnson-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/7a1e5045f6ccbad367798cb319176fee419e0200.jpg" alt="Helen Johnson Won £5,000 Tax Free Cash!" title="Helen Johnson Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Helen Johnson Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #304! Draw date 02/04/23. Helen Johnson won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/rachael-griffiths-won-this-road-legal-sur-ron-lbx-electric-bike"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/ab67f1728513e40496eea6beaf6a02da5ed2c846.jpg" alt="Rachael Griffiths Won A Road Legal Sur Ron LBX Electric Bike!" title="Rachael Griffiths Won A Road Legal Sur Ron LBX Electric Bike!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Rachael Griffiths Won A Road Legal Sur Ron LBX Electric Bike!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket #5646! Draw date: 02/04/23. Rachael Griffiths Won a Road Legal Sur-Ron LBX Electric Bike and opted for the cash alternative&nbsp;in one of our motorbike competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/richard-binns-won-a-husqvarna-701-supermoto"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/a6cec7216538aa6ad2b44c465cca1590c3c618f4.jpg" alt="Richard Binns Won A Husqvarna 701 Supermoto!" title="Richard Binns Won A Husqvarna 701 Supermoto!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Richard Binns Won A Husqvarna 701 Supermoto!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #5140! Draw date: 02/04/23. Richard Binns Won A&nbsp;Husqvarna&nbsp;701 Supermoto&nbsp;in one of our Motorbike competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/hamilton-bowring-won-a-rolex-hulk-submariner"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/7d23e767e407d93a328dcb58ffb1ac08c6f6ebd2.jpg" alt="Hamilton Bowring Won A Rolex Hulk Submariner!" title="Hamilton Bowring Won A Rolex Hulk Submariner!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Hamilton Bowring Won A Rolex Hulk Submariner!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket #1118! Draw date: 02/04/23! Hamilton Bowring won a Rolex Hulk Submariner in one of our recent watch competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/ben-butler-won-this-alfa-giulia-quadrifoglio-1-000"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/b97b49d617c75ba31c267075b053639a985d53e6.jpg" alt="Ben Butler Won This Alfa Giulia Quadrifoglio + £1,000!" title="Ben Butler Won This Alfa Giulia Quadrifoglio + £1,000!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Ben Butler Won This Alfa Giulia Quadrifoglio + £1,000!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #28350! Draw date: 02/04/23. Ben Butler won this Alfa&nbsp;Giulia Quadrifoglio + £1,000 in one of our car competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/sean-moody-won-this-mclaren-600lt-5-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/7723042333c6168f8c506e1bc965270d0ebc7f7e.jpg" alt="Sean Moody Won This McLaren 600LT + £5,000 Cash!" title="Sean Moody Won This McLaren 600LT + £5,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Sean Moody Won This McLaren 600LT + £5,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - 163372! Draw date: 02/04/23. Sean Moody&nbsp;won This McLaren 600LT + £5,000 Cash in one of our&nbsp;supercar competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/alex-bell-won-30-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/ca7cb29f85b9910a21b46667848c894724f13fc7.jpg" alt="Alex Bell Won £30,000 Tax Free Cash!" title="Alex Bell Won £30,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Alex Bell Won £30,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #8320! Draw date: 02/04/23. Alex Bell won&nbsp;£30,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/thomas-walsh-won-a-2022-audi-rs3-saloon-vorsprung"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/9741fadbf328e8795e8c745065a59549107550ae.jpg" alt="Thomas Walsh Won A 2022 Audi RS3 Saloon Vorsprung!" title="Thomas Walsh Won A 2022 Audi RS3 Saloon Vorsprung!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Thomas Walsh Won A 2022 Audi RS3 Saloon Vorsprung!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket -12390! Draw date: 31/03/23. Thomas Walsh&nbsp;Won a 2022&nbsp;Audi RS3 Saloon Vorsprung&nbsp;and opted for the cash alternative&nbsp;in one of our car competitions! What an awesome win!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/majed-nahim-won-this-mercedes-a35-amg-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/d198e7b27907be3796baed0aaea9275f87a92555.jpg" alt="Majed Nahim Won This Mercedes A35 AMG + £1,000 Cash!" title="Majed Nahim Won This Mercedes A35 AMG + £1,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Majed Nahim Won This Mercedes A35 AMG + £1,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - 33502! Draw date: 31/03/23. Majed Nahim&nbsp;won this&nbsp;Mercedes A35 AMG + £1,000 Cash&nbsp;in one of our 99p car competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/romario-stimpson-won-this-2022-velocity-blue-range-rover"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/59fe21e4c93d8d85b99638d0828ce0ba2e76fa4f.jpg" alt="Romario Stimpson Won This  2022 Velocity Blue Range Rover!" title="Romario Stimpson Won This  2022 Velocity Blue Range Rover!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Romario Stimpson Won This 2022 Velocity Blue Range Rover!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket #32996! Draw date 26/03/23 Romario Stimpson&nbsp;won this &nbsp;2022 Velocity Blue Range Rover and opted for the cash alternative&nbsp; in one of our car competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/chay-shepley-won-this-bmw-m2-competition-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/b75d503009996b45d62a67e696b9a6ca12cb1876.jpg" alt="Chay Shepley Won This BMW M2 Competition + £1,000 Cash!" title="Chay Shepley Won This BMW M2 Competition + £1,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Chay Shepley Won This BMW M2 Competition + £1,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #58783! Draw date: 26/03/23. Chay Shepley&nbsp;won this BMW M2 Competition + £1,000 in one of our car competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/dave-busby-won-30-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/2a8cff7e4004e3c1c808e55add143f0ba6b5286a.jpg" alt="Dave Busby Won £30,000 Tax Free Cash!" title="Dave Busby Won £30,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Dave Busby Won £30,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #39725! Draw date: 26/03/23. Dave Busby won&nbsp;£30,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/chris-kitchenside-won-a-rolex-daytona"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/a2243a4f676329ec89f99f6e1e53317c43593841.jpg" alt="Chris Kitchenside Won A Rolex Daytona!" title="Chris Kitchenside Won A Rolex Daytona!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Chris Kitchenside Won A Rolex Daytona!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #26203! Draw date: 26/03/23. Chris Kitchenside&nbsp;won a Rolex Daytona in one of our Rolex&nbsp;watch competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/connor-reynolds-won-this-road-legal-sur-ron-lbx-electric-bike"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/2fae2ca1b53516cb4b7e511d87a460167e7ccaae.jpg" alt="Connor Reynolds Won This Road Legal Sur Ron LBX Electric Bike!" title="Connor Reynolds Won This Road Legal Sur Ron LBX Electric Bike!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Connor Reynolds Won This Road Legal Sur Ron LBX Electric Bike!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket 5087! Draw date: 26/03/23. Connor Reynolds&nbsp;Won This Road Legal Sur-Ron LB-X Electric Bike in one of our motorbike competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/sam-heathcote-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/1163da46bec77e0534efe1be6cc1887a70a41d8e.jpg" alt="Sam Heathcote Won £5,000 Tax Free Cash!" title="Sam Heathcote Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Sam Heathcote Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #7394! Draw date 26/03/23. Sam Heathcote&nbsp;won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/nicola-meredith-won-a-audi-rs6-performance"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/e1d62fb7dfa0c2bcebdbb2edcaa0c8cbdddfb128.jpg" alt="Nicola Meredith Won An Audi RS6 Performance!" title="Nicola Meredith Won An Audi RS6 Performance!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Nicola Meredith Won An Audi RS6 Performance!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - 3346! Draw date: 24/03/23. Nicola Meredith Won an Audi RS6 Performance and opted for the cash alternative in one of our&nbsp;car competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/gareth-booth-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/8a361d63a325f572490c24689787fc03c2058f87.jpg" alt="Gareth Booth Won £5,000 Tax Free Cash!" title="Gareth Booth Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Gareth Booth Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #3687! Draw date 24/03/23. Gareth Booth&nbsp;won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/jordan-williams-won-a-2020-audi-rsq3-vorsprung"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/71491342bb53a7d31006ab6731eab70c1bc4f545.jpg" alt="Jordan Williams Won A 2020 Audi RSQ3 Vorsprung!" title="Jordan Williams Won A 2020 Audi RSQ3 Vorsprung!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Jordan Williams Won A 2020 Audi RSQ3 Vorsprung!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #31456! Draw date: 22/03/23. Jordan Williams&nbsp;won a 2020 Audi Vorsprung RSQ3 and opted for the cash alternative&nbsp;in one of our car competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/david-mckibbin-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/e3c4fd094b6c99bb618369d9d302ca07269af1aa.jpg" alt="David Mckibbin Won £5,000 Tax Free Cash!" title="David Mckibbin Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">David Mckibbin Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #1536! Draw date 22/03/23. David Mckibbin&nbsp;won £5,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/nathan-gilbert-won-a-2021-porsche-gt4-clubsport"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/618569193ed20fae46a5794a6776eddf597ef60f.jpg" alt="Nathan Gilbert Won A 2021 Porsche GT4  Clubsport!" title="Nathan Gilbert Won A 2021 Porsche GT4  Clubsport!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Nathan Gilbert Won A 2021 Porsche GT4 Clubsport!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - 24500! Draw date: 19/03/23. Nathan Gilbert won a stunning Crayon Grey Porsche GT4 Clubsport and opted for the cash alternative!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/robert-findlay-won-this-2022-vw-transporter-campervan-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/ad7c6c780cb44f32fa2c0db9ef04f9f810f86db2.jpg" alt="Robert Findlay Won This 2022 VW Transporter Campervan + £1,000 Cash!" title="Robert Findlay Won This 2022 VW Transporter Campervan + £1,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Robert Findlay Won This 2022 VW Transporter Campervan + £1,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - 9776 ! Draw date: 19/03/23. Robert Findlay won this 2022 VW Transporter&nbsp;Campervan&nbsp;+ £1,000 Cash in one of our camper competitions! What an awesome win!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/scott-millington-won-25-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/5ab5fcc47e56c2ad5c0de97faa4e11a38525556d.jpg" alt="Scott Millington Won £25,000 Tax Free Cash!" title="Scott Millington Won £25,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Scott Millington Won £25,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #39782! Draw date 19/03/23. Scott Millington won £25,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/chris-bennett-won-this-bmw-s1000rr"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/34/d70c8ace0e9b896347abf44184a367729e228aaa.jpg" alt="Chris bennett Won This BMW S1000RR!" title="Chris bennett Won This BMW S1000RR!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Chris bennett Won This BMW S1000RR!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - 7405! Draw date: 19/03/23. Chris Bennett&nbsp;Won This BMW S1000RR in one of our Motorbike&nbsp;competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/dean-doherty-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/e86348592cc727d0b8b18d93799d536d0d0431fc.jpg" alt="Dean Doherty Won £5,000 Tax Free Cash!" title="Dean Doherty Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Dean Doherty Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #511! Draw date: 19/03/23. Dean Doherty won&nbsp;£5,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/craig-tomney-won-this-2021-g80-bmw-m3-1-000"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/eb89ad6ea913bdd6b4b1000797c7b773c907cfe8.jpg" alt="Craig Tomney Won This 2021 G80 BMW M3 + £1,000!" title="Craig Tomney Won This 2021 G80 BMW M3 + £1,000!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Craig Tomney Won This 2021 G80 BMW M3 + £1,000!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #68199! Draw date: 17/03/23 Craig Tomney won this G80 BMW M3 + £1,000 cash in one of our car&nbsp;competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/emyr-morris-won-this-2019-ford-ranger-raptor-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/7056239c55c92074ca788f218a0c62c9e0084b1f.jpg" alt="Emyr Morris Won This 2019 Ford Ranger Raptor + £1,000 Cash!" title="Emyr Morris Won This 2019 Ford Ranger Raptor + £1,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Emyr Morris Won This 2019 Ford Ranger Raptor + £1,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket #52076! Draw date: 17/03/23! Emyr Morris won a Ford Ranger Raptor in one of our latest car competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/lucy-issitt-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/7708cf9dbcf6e2de3e7fa07e48e60a219e560fc7.jpg" alt="Lucy Issitt Won £5,000 Tax Free Cash!" title="Lucy Issitt Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Lucy Issitt Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #3747! Draw date: 17/03/23. Lucy Issitt won&nbsp;£5,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/nuhaz-rahman-won-a-mercedes-glc63s-1-000-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/367bbfba0bca1afecbfa46a63e3d8b3248b7b922.jpg" alt="Nuhaz Rahman Won A Mercedes GLC63s + £1,000 Cash!" title="Nuhaz Rahman Won A Mercedes GLC63s + £1,000 Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Nuhaz Rahman Won A Mercedes GLC63s + £1,000 Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #30047! Draw date: 15/03/23. Nuhaz&nbsp;Rahman won a Mercedes GLC63s and opted for the cash alternative in one of our Mercedes&nbsp;car competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/rashard-akram-won-25-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/534e9c73e9d537b757eec40e5de69bc160a26173.jpg" alt="Rashard Akram Won £25,000 Tax Free Cash!" title="Rashard Akram Won £25,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">Rashard Akram Won £25,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #38050! Draw date 15/03/23. Rashard Akram won £25,000 tax free cash in one of our cash competitions!&nbsp;</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <div _ngcontent-fqv-c78="" class="post-grid__col ng-star-inserted">
                                    <app-post-card _ngcontent-fqv-c78="" type="winner" _nghost-fqv-c77=""><a _ngcontent-fqv-c77="" class="post-card" href="/winner/david-james-bruce-won-5-000-tax-free-cash"><img _ngcontent-fqv-c77="" class="post-card__img" src="https://7days-production.s3.eu-west-2.amazonaws.com/sevendays/upload/media/default/0033/33/667fdb9c0a6e795a31627ef152acf652f2afe74a.jpg" alt="David-James Bruce Won £5,000 Tax Free Cash!" title="David-James Bruce Won £5,000 Tax Free Cash!">
                                            <div _ngcontent-fqv-c77="" class="post-card__content">
                                                <h3 _ngcontent-fqv-c77="" class="post-card__title">David-James Bruce Won £5,000 Tax Free Cash!</h3>
                                                <p _ngcontent-fqv-c77="" class="post-card__description">Winning ticket - #1091! Draw date: 15/03/23. David-James Bruce won&nbsp;£5,000 tax free cash in one of our cash competitions!</p>
                                            </div>
                                        </a></app-post-card>
                                </div>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                            <div _ngcontent-fqv-c78="" class="post-grid__older-posts ng-star-inserted"><button _ngcontent-fqv-c78="" class="button button_blue button_no-shadow">Older posts</button></div>
                            <!---->
                        </div>
                    </div>
                </section>
                <app-footer _ngcontent-fqv-c78="" _nghost-fqv-c64="">
                    <div _ngcontent-fqv-c64="" class="footer">
                        <div _ngcontent-fqv-c64="" class="footer__wrapper">
                            <div _ngcontent-fqv-c64="" class="footer__links"><a _ngcontent-fqv-c64="" routerlink="/" title="" class="footer__logo" href="/"><img _ngcontent-fqv-c64="" src="/assets/svg/logo.svg" alt="7days Performance" class="footer__logo-image"></a>
                                <ul _ngcontent-fqv-c64="">
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/cookie-and-privacy-policy" href="/cookie-and-privacy-policy">Cookie &amp; Privacy Policy</a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/website-terms" href="/website-terms">Website Terms</a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/responsible-gambling" href="/responsible-gambling">Responsible Gambling</a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/reviews" href="/reviews">Reviews</a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/faq" href="/faq">FAQ</a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/security" href="/security">Security</a></li>
                                    <li _ngcontent-fqv-c64="">&nbsp;</li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" routerlink="/about-us" href="/about-us">Our Team</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-fqv-c64="" class="footer__social">
                                <div _ngcontent-fqv-c64="">
                                    <p _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" href="mailto:hello@7daysperformance.co.uk" class="footer__social-email">hello@7daysperformance.co.uk</a></p>
                                    <p _ngcontent-fqv-c64="" class="footer__annotation--light"> 7days Performance - Technology and Marketing powered by <a _ngcontent-fqv-c64="" href="https://sevencanyon.com/" target="_blank" class="footer__annotation--light"><u _ngcontent-fqv-c64="">SevenCanyon</u></a></p>
                                    <p _ngcontent-fqv-c64="" class="footer__annotation--light">© All rights reserved</p>
                                </div>
                                <ul _ngcontent-fqv-c64="">
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-fqv-c64="" name="facebook-new" _nghost-fqv-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm1.668 16.703v8.705h-3.602v-8.704h-1.8v-3h1.8v-1.801c0-2.447 1.016-3.903 3.903-3.903h2.403v3H18.87c-1.124 0-1.198.42-1.198 1.202l-.004 1.502h2.721l-.318 3h-2.403z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-fqv-c64="" name="instagram-new" _nghost-fqv-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.002.503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.164-16-16-16zm-3.518 7.518c.91-.041 1.201-.051 3.519-.051H16c2.319 0 2.608.01 3.518.051.909.042 1.53.186 2.073.397a4.17 4.17 0 011.511.984c.475.474.767.95.985 1.511.21.543.354 1.163.397 2.072.04.91.051 1.2.051 3.518 0 2.318-.01 2.608-.051 3.518-.043.908-.187 1.528-.397 2.071a4.189 4.189 0 01-.985 1.512c-.474.474-.949.767-1.51.985-.543.21-1.164.354-2.072.396-.91.041-1.2.052-3.518.052-2.317 0-2.608-.01-3.518-.052-.909-.042-1.529-.185-2.072-.396a4.18 4.18 0 01-1.511-.985 4.181 4.181 0 01-.984-1.512c-.211-.543-.355-1.163-.397-2.071-.04-.91-.051-1.2-.051-3.518 0-2.317.01-2.608.051-3.519.041-.908.185-1.528.397-2.07A4.19 4.19 0 018.9 9.401c.475-.475.95-.766 1.512-.984.543-.211 1.163-.355 2.071-.397z" fill="#C4C9CE"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.236 9.508h.766c2.278 0 2.548.008 3.448.05.832.037 1.283.176 1.584.293.398.155.682.34.98.638.3.299.484.583.64.981.116.3.255.752.293 1.585.041.9.05 1.17.05 3.447s-.009 2.547-.05 3.447c-.038.832-.177 1.283-.294 1.584-.154.398-.34.682-.638.98a2.637 2.637 0 01-.98.638c-.301.118-.753.256-1.585.294-.9.041-1.17.05-3.448.05-2.279 0-2.549-.009-3.449-.05-.832-.038-1.283-.177-1.584-.294a2.644 2.644 0 01-.981-.638 2.644 2.644 0 01-.64-.98c-.116-.301-.255-.753-.293-1.585-.04-.9-.049-1.17-.049-3.448 0-2.28.008-2.548.049-3.448.038-.832.177-1.283.294-1.584.155-.398.34-.683.639-.981.298-.299.583-.484.98-.639.302-.117.753-.256 1.585-.294.788-.036 1.093-.046 2.683-.048v.002zm5.32 1.417a1.024 1.024 0 100 2.048 1.024 1.024 0 000-2.049zm-8.936 5.578a4.382 4.382 0 118.765 0 4.382 4.382 0 01-8.765 0z" fill="#C4C9CE"></path>
                                                    <path d="M16.003 13.66a2.845 2.845 0 110 5.688 2.845 2.845 0 010-5.689z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-fqv-c64=""><a _ngcontent-fqv-c64="" href="https://www.youtube.com/channel/UCxB-y6oGP1lSCHwoE2hKvmA" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-fqv-c64="" name="youtube-new" _nghost-fqv-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm6.668 10.5a2.166 2.166 0 011.509 1.55c.356 1.366.356 4.217.356 4.217s0 2.852-.356 4.218a2.167 2.167 0 01-1.51 1.55c-1.33.366-6.667.366-6.667.366s-5.337 0-6.668-.366a2.167 2.167 0 01-1.509-1.55c-.356-1.366-.356-4.218-.356-4.218s0-2.851.356-4.217a2.167 2.167 0 011.51-1.55c1.33-.366 6.667-.366 6.667-.366s5.337 0 6.668.366z" fill="#C4C9CE"></path>
                                                    <path d="M14.4 19.703V14.37l4.267 2.666-4.267 2.667z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </app-footer>
            </app-competition-winners>
            <!---->
        </div>
    </div>
</div>
@endsection
