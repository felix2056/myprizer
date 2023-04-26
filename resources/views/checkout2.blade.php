<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7days Performance</title>
    <meta name="description" content="7days Performance">

    <link rel="stylesheet" href="https://7daysperformance.co.uk/app/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://7daysperformance.co.uk/app/checkoutcom/css/style.css">
    <link rel="icon" type="image/png" href="https://7daysperformance.co.uk/app/favicon32x32.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/checkout.css"> --}}

    <style id="apple-pay-btn-font-en-US">
        @font-face {
            font-family: apple-pay-btn-en-US;
            src: url(https://applepay.cdn-apple.com/jsapi/v1/assets/1.0.0/fonts/en-US.woff2) format("woff2"), url(https://applepay.cdn-apple.com/jsapi/v1/assets/1.0.0/fonts/en-US.woff) format("woff");
            font-display: block;
        }

    </style>
    <style id="apple-pay-btn-font-en-GB">
        @font-face {
            font-family: apple-pay-btn-en-GB;
            src: url(https://applepay.cdn-apple.com/jsapi/v1/assets/1.0.0/fonts/en-GB.woff2) format("woff2"), url(https://applepay.cdn-apple.com/jsapi/v1/assets/1.0.0/fonts/en-GB.woff) format("woff");
            font-display: block;
        }

    </style>
    <style type="text/css">
        .gpay-card-info-container {
            padding: 0;
            position: relative;
            min-width: 240px;
            height: 40px;
            min-height: 40px;
            border-radius: 4px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 1px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            cursor: pointer;
            border: 0px;
        }

        .gpay-card-info-container.new_style {
            border-radius: 100vh;
            padding: 0;
            box-sizing: border-box;
            min-height: 48px;
            width: 240px;
            border: 1px solid #747775;
        }

        .gpay-card-info-container.black,
        .gpay-card-info-animation-container.black {
            background-color: #000;
            box-shadow: none;
        }

        .gpay-card-info-container.white,
        .gpay-card-info-animation-container.white {
            background-color: #fff;
        }

        .gpay-card-info-container.black.active {
            background-color: #5f6368;
        }

        .gpay-card-info-container.black.hover,
        .gpay-card-info-animation-container.black.hover {
            background-color: #3c4043;
        }

        .gpay-card-info-container.white.active {
            background-color: #fff;
        }

        .gpay-card-info-container.white.focus {
            box-shadow: #e8e8e8 0 1px 1px 0, #e8e8e8 0 1px 3px;
        }

        .gpay-card-info-container.white.hover,
        .gpay-card-info-animation-container.white.hover {
            background-color: #f8f8f8;
        }

        .gpay-card-info-iframe {
            border: 0;
            display: block;
            height: 100%;
            margin: auto;
            max-width: 100%;
            width: 240px;
        }

        .gpay-card-info-container-fill .gpay-card-info-iframe,
        .gpay-card-info-container-fill-new-style .gpay-card-info-iframe {
            position: absolute;
            top: 0;
            height: 100%;
            width: 100%;
        }

        .gpay-card-info-container-fill,
        .gpay-card-info-container-fill>.gpay-card-info-container {
            width: 100%;
            height: inherit;
        }

        .gpay-card-info-container-fill-new-style,
        .gpay-card-info-container-fill-new-style>.gpay-card-info-container {
            width: 100%;
            height: inherit;
        }

        .gpay-card-info-container-fill .gpay-card-info-placeholder-container,
        .gpay-card-info-container-fill-new-style .gpay-card-info-placeholder-container {
            align-items: center;
            justify-content: center;
            width: 100%;
            padding-top: 3px;
            box-sizing: border-box;
            overflow: hidden;
        }

        .gpay-card-info-container-fill .gpay-card-info-placeholder-svg-container,
        .gpay-card-info-container-fill-new-style .gpay-card-info-placeholder-svg-container {
            position: relative;
            width: 60%;
            height: inherit;
            max-height: 80%;
            margin-right: -20%;
        }

        .gpay-card-info-container-fill .gpay-card-info-placeholder-svg-container>svg {
            position: absolute;
            left: 0;
            height: 100%;
            max-width: 100%;
        }

        .gpay-card-info-container-fill-new-style .gpay-card-info-placeholder-svg-container>svg {
            position: absolute;
            left: 0;
            height: 100%;
            max-width: 100%;
        }

    </style>
    <style type="text/css">
        .gpay-card-info-animation-container {
            display: flex;
            width: 100%;
            position: absolute;
            z-index: 100;
            height: 40px;
            border-radius: 4px;
        }

        .gpay-card-info-animation-container.new_style {
            border-radius: 100vh;
            width: 100%;
            left: 0%;
            top: 0%;
            height: 100%;
            overflow: hidden;
        }

        .gpay-card-info-placeholder-container {
            display: flex;
            width: 100%;
            height: 100%;
            margin: auto;
            justify-content: center;
        }

        .gpay-card-info-animated-progress-bar-container {
            display: flex;
            box-sizing: border-box;
            position: absolute;
            width: 100%;
        }

        .gpay-card-info-animated-progress-bar {
            border-radius: 4px 4px 0px 0px;
            animation-duration: 0.5s;
            animation-fill-mode: forwards;
            animation-iteration-count: 1;
            animation-name: gpayProgressFill;
            animation-timing-function: cubic-bezier(0.97, 0.33, 1, 1);
            background: #caccce;
            width: 100%;
            height: 3px;
            max-height: 3px;
        }

        .gpay-card-info-animated-progress-bar-indicator {
            border-radius: 4px 4px 0px 0px;
            max-width: 20px;
            min-width: 20px;
            height: 3px;
            max-height: 3px;
            background: linear-gradient(to right, #caccce 30%, #acaeaf 60%);
            animation-delay: 0.5s;
            animation-duration: 1.7s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-name: gpayPlaceHolderShimmer;
        }

        .gpay-card-info-animated-progress-bar-new_style {
            border-radius: 4px 4px 0px 0px;
            animation-duration: 0.5s;
            animation-fill-mode: forwards;
            animation-iteration-count: 1;
            animation-name: gpayProgressFill;
            animation-timing-function: cubic-bezier(0.97, 0.33, 1, 1);
            background: #caccce;
            width: 100%;
            height: 2px;
            max-height: 2px;
        }

        .gpay-card-info-animated-progress-bar-indicator-new_style {
            border-radius: 4px 4px 0px 0px;
            max-width: 20px;
            min-width: 20px;
            height: 2px;
            max-height: 2px;
            background: linear-gradient(to right, #caccce 30%, #acaeaf 60%);
            animation-delay: 0.5s;
            animation-duration: 1.7s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-name: gpayPlaceHolderShimmer;
        }

        .gpay-card-info-iframe-fade-in {
            animation-fill-mode: forwards;
            animation-duration: 0.6s;
            animation-name: gpayIframeFadeIn;
        }

        .gpay-card-info-animation-container-fade-out {
            animation-fill-mode: forwards;
            animation-duration: 0.6s;
            animation-name: gpayPlaceHolderFadeOut;
        }

        .gpay-card-info-animation-gpay-logo {
            margin: 13px 7px 0px 39px;
            background-origin: content-box;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            height: 17px;
            max-height: 17px;
            max-width: 41px;
            min-width: 41px;
        }

        .gpay-card-info-animation-gpay-logo.black {
            background-image: url("https://www.gstatic.com/instantbuy/svg/dark_gpay.svg");
        }

        .gpay-card-info-animation-gpay-logo.new_style {
            background-image: url("https://www.gstatic.com/instantbuy/svg/refreshedgraphicaldesign/dark_gpay.svg");
            background-size: contain;
            height: 19px;
            max-height: 19px;
            max-width: 50px;
            min-width: 50px;
        }

        .gpay-card-info-animation-gpay-logo.white {
            background-image: url("https://www.gstatic.com/instantbuy/svg/light_gpay.svg");
        }

        @keyframes gpayPlaceHolderShimmer {
            0% {
                margin-left: 0px;
            }

            100% {
                margin-left: calc(100% - 20px);
            }
        }

        @keyframes gpayIframeFadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes gpayPlaceHolderFadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes gpayProgressFill {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .gpay-card-info-container-fill .gpay-card-info-animation-container {
            top: 0;
            width: 100%;
            height: 100%;
        }

        .gpay-card-info-container-fill-new-style .gpay-card-info-animation-container.new_style {
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 100vh;
            left: 0%;
        }

        .gpay-card-info-container-fill .gpay-card-info-animation-gpay-logo {
            background-position: right;
            margin: 0 0 0 0;
            max-width: none;
            width: 25%;
            height: inherit;
            max-height: 50%;
        }

        .gpay-card-info-container-fill-new-style .gpay-card-info-animation-gpay-logo {
            background-position: right;
            background-size: contain;
            margin: 0 0 0 0;
            max-width: none;
            width: 35%;
            min-width: 35%;
            height: inherit;
            max-height: 50%;
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
                , 'gaData': window['gaData']
                , 'dataLayer': window['dataLayer']
            })
        }, 2000);

    </script>
</head>
<body data-new-gr-c-s-check-loaded="14.1104.0" data-gr-ext-installed="">
    <div class="return-url">
        <a href="/process-via/checkout-redirect/983b9471d905a1952b75a0b81ffcecf31f6d1782/cancel">Cancel the payment and go back to 7days Performance</a>
    </div>

    <div class="trustpayments-form-wrapper shadow-lg">
        <div class="trustpayments-header rounded-top">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        <img class="logo" src="https://7daysperformance.co.uk/app/trustpayments/file/logo.svg">
                    </div>
                    <div class="col text-right">
                        <img class="logo-payments" src="https://7daysperformance.co.uk/app/payment-gateway/checkout-logo.svg">
                        <img class="logo-cards" src="https://7daysperformance.co.uk/app/trustpayments/file/cards.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="error-string" style="display: none;"></div>

        <div class="extra-methods">
            <div id="applepay-container" class="extra-methods__applepay">
                <style>
                    apple-pay-button {
                        --apple-pay-button-width: 240px;
                        --apple-pay-button-height: 30px;
                        --apple-pay-button-border-radius: 4px;
                        --apple-pay-button-padding: 5px 0px;
                    }

                </style>
                <apple-pay-button id="applepay-button" buttonstyle="black" type="pay" locale="en-GB" lang="en-GB" aria-hidden="true" style="display: none;"></apple-pay-button>
            </div>
            <div id="googlepay-container" class="extra-methods__googlepay">
                
            </div>
        </div>

        <form id="reuse-card-form">
        </form>

        <form id="payment-form" method="POST" action="https://7daysperformance.co.uk/process-via/checkout-pay/983b9471d905a1952b75a0b81ffcecf31f6d1782">
            <div class="new-card-wrapper" style="">
                <label for="card-number">Card number</label>
                <div class="input-container card-number">
                    <div class="icon-container">
                        <img id="icon-card-number" src="https://7daysperformance.co.uk/app/checkoutcom/icons/card.svg" alt="PAN">
                    </div>
                    <div class="card-number-frame frame--activated"><input data-fieldidentifier="checkout-fake-input-cardNumber" aria-hidden="true" autocomplete="fake" readonly="true" style="position:absolute;top:-1px;left:0;width:100%;height:1px;border:0;margin:0;padding:0;pointer-events:none;opacity:0;background:transparent;"><iframe id="cardNumber" src="https://js.checkout.com/framesv2/?v=2.28.0&amp;publicKey=pk_aitdq3cgnyx66zebxml5pyj4pe5&amp;iOS=false&amp;schemeChoiceVariant=NONE&amp;isMultiFrame=true&amp;safari=false&amp;lng=en-gb&amp;element=card-number" style="width:100%;height:100%;background:transparent;overflow:hidden;border:0 none transparent;margin:0;padding:0;-webkit-tap-highlight-color:transparent;display:block;position:static;" title="checkout-frames-cardNumber" name="checkout-frames-cardNumber" scrolling="no" tabindex="0"></iframe></div>
                    <div class="icon-container payment-method">
                        <img id="logo-payment-method">
                    </div>
                    <div class="icon-container">
                        <img id="icon-card-number-error" src="https://7daysperformance.co.uk/app/checkoutcom/icons/error.svg">
                    </div>
                </div>

                <div class="date-and-code">
                    <div>
                        <label for="expiry-date">Expiry date</label>
                        <div class="input-container expiry-date">
                            <div class="icon-container">
                                <img id="icon-expiry-date" src="https://7daysperformance.co.uk/app/checkoutcom/icons/exp-date.svg" alt="Expiry date">
                            </div>
                            <div class="expiry-date-frame frame--activated"><input data-fieldidentifier="checkout-fake-input-expiryDate" aria-hidden="true" autocomplete="fake" readonly="true" style="position:absolute;top:-1px;left:0;width:100%;height:1px;border:0;margin:0;padding:0;pointer-events:none;opacity:0;background:transparent;"><iframe id="expiryDate" src="https://js.checkout.com/framesv2/?v=2.28.0&amp;publicKey=pk_aitdq3cgnyx66zebxml5pyj4pe5&amp;iOS=false&amp;schemeChoiceVariant=NONE&amp;isMultiFrame=true&amp;safari=false&amp;lng=en-gb&amp;element=expiry-date" style="width:100%;height:100%;background:transparent;overflow:hidden;border:0 none transparent;margin:0;padding:0;-webkit-tap-highlight-color:transparent;display:block;position:static;" title="checkout-frames-expiryDate" name="checkout-frames-expiryDate" scrolling="no" tabindex="0"></iframe></div>
                            <div class="icon-container">
                                <img id="icon-expiry-date-error" src="https://7daysperformance.co.uk/app/checkoutcom/icons/error.svg">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="cvv">Security code</label>
                        <div class="input-container cvv">
                            <div class="icon-container">
                                <img id="icon-cvv" src="https://7daysperformance.co.uk/app/checkoutcom/icons/cvv.svg" alt="CVV">
                            </div>
                            <div class="cvv-frame frame--activated"><input data-fieldidentifier="checkout-fake-input-cvv" aria-hidden="true" autocomplete="fake" readonly="true" style="position:absolute;top:-1px;left:0;width:100%;height:1px;border:0;margin:0;padding:0;pointer-events:none;opacity:0;background:transparent;"><iframe id="cvv" src="https://js.checkout.com/framesv2/?v=2.28.0&amp;publicKey=pk_aitdq3cgnyx66zebxml5pyj4pe5&amp;iOS=false&amp;schemeChoiceVariant=NONE&amp;isMultiFrame=true&amp;safari=false&amp;lng=en-gb&amp;element=cvv" style="width:100%;height:100%;background:transparent;overflow:hidden;border:0 none transparent;margin:0;padding:0;-webkit-tap-highlight-color:transparent;display:block;position:static;" title="checkout-frames-cvv" name="checkout-frames-cvv" scrolling="no" tabindex="0"></iframe></div>
                            <div class="icon-container">
                                <img id="icon-cvv-error" src="https://7daysperformance.co.uk/app/checkoutcom/icons/error.svg">
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <label>
                        <input type="checkbox" name="remember-card" id="remember-card">
                        Remember the card to use in the future
                    </label>
                </div>
            </div>

            <div class="submit-buttons">
                <button id="pay-button" class="pay-button" disabled="" style="">
                    PAY £427.68
                </button>
                <button id="pay-button-remembered" class="pay-button" style="display: none;">
                    PAY £427.68
                </button>
            </div>

            <div>
                <span class="error-message error-message__card-number"></span>
                <span class="error-message error-message__expiry-date"></span>
                <span class="error-message error-message__cvv"></span>
            </div>

            <p class="success-payment-message"></p>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
    <script src="https://pay.google.com/gp/p/js/pay.js"></script><iframe src="https://pay.google.com/gp/p/ui/payframe?origin=https%3A%2F%2F7daysperformance.co.uk&amp;mid=" height="0" width="0" allowpaymentrequest="true" style="display: none; visibility: hidden;"></iframe>
    <script src="https://applepay.cdn-apple.com/jsapi/v1/apple-pay-sdk.js"></script>
    <apple-pay-merchandising-modal theme="auto"></apple-pay-merchandising-modal> <!-- https://developer.apple.com/documentation/apple_pay_on_the_web/displaying_apple_pay_buttons_using_javascript -->
    <script src="https://7daysperformance.co.uk/app/payment-gateway/js/googlepay.js"></script>
    <script src="https://7daysperformance.co.uk/app/payment-gateway/js/applepay.js"></script>
    <script>
        var googlepayEngine = new GooglepayEngine({
            containerId: 'googlepay-container'
            , environment: 'PRODUCTION'
            , gateway: 'checkoutltd'
            , gatewayMerchantId: 'pk_aitdq3cgnyx66zebxml5pyj4pe5'
            , gpayMerchantId: 'BCR2DN4TXTX5BMZG'
            , gpayMerchantName: '7days Performance'
            , paymentValue: '427.68'
            , paymentCurrency: 'GBP'
            , paymentTid: '983b9471d905a1952b75a0b81ffcecf31f6d1782'
            , onComplete: function(success, response) {
                if (response && response.redirect_url) {
                    window.location.href = response.redirect_url;
                } else {
                    window.location.href = 'https://7daysperformance.co.uk/checkout/order-received/812323435?key=BxMifdOz0rutFQoeo6r1rLb3N3ljTPGQS8dPzAG1681qoC';
                }
            }
            , captureEndpointCallback: function(tid) {
                return '/api/v2/payment/' + tid + '/action/googlepayCapture';
            }
        });
        var applepayEngine = new ApplepayEngine({
            containerId: 'googlepay-container'
            , buttonId: 'applepay-button'
            , paymentValue: '427.68'
            , paymentCurrency: 'GBP'
            , paymentTid: '983b9471d905a1952b75a0b81ffcecf31f6d1782'
            , merchantId: 'merchant.co.uk.7daysperformance.checkout'
            , isDebug: true
            , onComplete: function(success, response) {
                if (response && response.redirect_url) {
                    window.location.href = response.redirect_url;
                } else {
                    window.location.href = 'https://7daysperformance.co.uk/checkout/order-received/812323435?key=BxMifdOz0rutFQoeo6r1rLb3N3ljTPGQS8dPzAG1681qoC';
                }
            }
            , captureEndpointCallback: function(tid) {
                return '/api/v2/payment/' + tid + '/action/applepayCapture';
            }
            , startSessionCallback: function(tid) {
                return '/api/v2/payment/' + tid + '/action/applepayMerchantSession';
            }
        });

        $(document).ready(function() {
            var formEl = $("#payment-form .new-card-wrapper");
            var buttonRememberedCard = $("#pay-button-remembered");
            var buttonNewCard = $("#pay-button");

            buttonNewCard.show();
            buttonRememberedCard.hide();
            formEl.slideDown();
        });

        var payButton = document.getElementById("pay-button");
        var form = document.getElementById("payment-form");

        Frames.init("pk_aitdq3cgnyx66zebxml5pyj4pe5");

        var logos = generateLogos();

        function generateLogos() {
            var logos = {};
            logos["card-number"] = {
                src: "card"
                , alt: "card number logo"
            , };
            logos["expiry-date"] = {
                src: "exp-date"
                , alt: "expiry date logo"
            , };
            logos["cvv"] = {
                src: "cvv"
                , alt: "cvv logo"
            , };
            return logos;
        }

        var errors = {};
        errors["card-number"] = "Please enter a valid card number";
        errors["expiry-date"] = "Please enter a valid expiry date";
        errors["cvv"] = "Please enter a valid cvv code";

        Frames.addEventHandler(
            Frames.Events.FRAME_VALIDATION_CHANGED
            , onValidationChanged
        );

        function onValidationChanged(event) {
            var e = event.element;

            if (event.isValid || event.isEmpty) {
                if (e === "card-number" && !event.isEmpty) {
                    showPaymentMethodIcon();
                }
                setDefaultIcon(e);
                clearErrorIcon(e);
                clearErrorMessage(e);
            } else {
                if (e === "card-number") {
                    clearPaymentMethodIcon();
                }

                setDefaultErrorIcon(e);
                setErrorIcon(e);
                setErrorMessage(e);
            }
        }

        function clearErrorMessage(el) {
            var selector = ".error-message__" + el;
            var message = document.querySelector(selector);
            message.textContent = "";
        }

        function clearErrorIcon(el) {
            var logo = document.getElementById("icon-" + el + "-error");
            logo.style.removeProperty("display");
        }

        function showPaymentMethodIcon(parent, pm) {
            if (parent) parent.classList.add("show");

            var logo = document.getElementById("logo-payment-method");
            if (pm) {
                var name = pm.toLowerCase();
                logo.setAttribute("src", "https://7daysperformance.co.uk/app/checkoutcom/icons/" + name + ".svg");
                logo.setAttribute("alt", pm || "payment method");
            }
            logo.style.removeProperty("display");
        }

        function clearPaymentMethodIcon(parent) {
            if (parent) parent.classList.remove("show");

            var logo = document.getElementById("logo-payment-method");
            logo.style.setProperty("display", "none");
        }

        function setErrorMessage(el) {
            var selector = ".error-message__" + el;
            var message = document.querySelector(selector);
            message.textContent = errors[el];
        }

        function setDefaultIcon(el) {
            var selector = "icon-" + el;
            var logo = document.getElementById(selector);
            logo.setAttribute("src", "https://7daysperformance.co.uk/app/checkoutcom/icons/" + logos[el].src + ".svg");
            logo.setAttribute("alt", logos[el].alt);
        }

        function setDefaultErrorIcon(el) {
            var selector = "icon-" + el;
            var logo = document.getElementById(selector);
            logo.setAttribute("src", "https://7daysperformance.co.uk/app/checkoutcom/icons/" + logos[el].src + "-error.svg");
            logo.setAttribute("alt", logos[el].alt);
        }

        function setErrorIcon(el) {
            var logo = document.getElementById("icon-" + el + "-error");
            logo.style.setProperty("display", "block");
        }

        Frames.addEventHandler(Frames.Events.CARD_VALIDATION_CHANGED, function() {
            payButton.disabled = !Frames.isCardValid();
        });

        Frames.addEventHandler(Frames.Events.CARD_TOKENIZATION_FAILED, function() {
            console.log("CARD_TOKENIZATION_FAILED: %o", error);
            Frames.enableSubmitForm();
        });

        Frames.addEventHandler(Frames.Events.CARD_TOKENIZED, function(data) {
            Frames.addCardToken(form, data.token);
            Frames.submitCard();

            const requestData = JSON.stringify({
                token: data.token
                , save_card: $('#remember-card').is(":checked")
            });

            submitPayment(requestData);
        });

        function submitPayment(jsonData) {
            $('.submit-buttons button').prop('disabled', true);

            $.ajax({
                url: "https://7daysperformance.co.uk/process-via/checkout-pay/983b9471d905a1952b75a0b81ffcecf31f6d1782"
                , data: jsonData
                , type: 'POST'
                , headers: {
                    'Accept': 'application/json'
                    , 'Content-Type': 'application/json'
                }
                , error: function(data, status, jq) {
                    $('.submit-buttons button').prop('disabled', false);

                    var errorsShow = [];

                    if (data.status === 422) {
                        var errors = data.responseJSON.errors;

                        for (var i = 0; i < errors.length; i++) {
                            if (errors.hasOwnProperty(i)) {
                                errorsShow.push(errors[i].message);
                            }
                        }
                    } else if (data.status === 400) {
                        errorsShow.push(data.responseJSON.string);
                    } else {
                        errorsShow.push(data.statusText);
                    }

                    $('.error-string').html(errorsShow.join('<br /> '));
                    $('.error-string').show();
                }
                , success: function(data) {
                    window.location = data.returnPath;
                }
            });
        }

        Frames.addEventHandler(
            Frames.Events.PAYMENT_METHOD_CHANGED
            , paymentMethodChanged
        );

        function paymentMethodChanged(event) {
            var pm = event.paymentMethod;
            var container = document.querySelector(".icon-container.payment-method");

            if (!pm) {
                clearPaymentMethodIcon(container);
            } else {
                clearErrorIcon("card-number");
                showPaymentMethodIcon(container, pm);
            }
        }

        form.addEventListener("submit", onSubmit);

        function onSubmit(event) {
            event.preventDefault();
            if (event.submitter.id === 'pay-button-remembered') {
                return;
            }

            Frames.cardholder = {
                name: "Daniel Felix"
                , billingAddress: {
                    addressLine1: "Leeds"
                    , addressLine2: ""
                    , zip: "100012"
                    , city: "Leeds"
                    , state: ""
                    , country: "GB"
                , }
            };

            Frames.submitCard();
        }

        var gatewayInitiated = false;

        function showButtonsIfAvailable() {
            var cardType = $('input[type="radio"][name="paymentCardId"]:checked').val();

            if (gatewayInitiated) {
                $('#pay-button').show();
            }
        }

        function logPayment(event, value1, value2) {
            var data = {
                event: event
                , value1: value1 ? value1 : null
                , value2: value2 ? value2 : null
            };
            // console.log('logPayment', data);
            $.ajax({
                url: "/api/v2/payment/983b9471d905a1952b75a0b81ffcecf31f6d1782/log"
                , type: "POST"
                , data: JSON.stringify(data)
                , contentType: "application/json; charset=utf-8"
                , dataType: "json"
                , success: function(data) {
                    // console.log('logPayment complete', data);
                }
            });
        }

        $("#reuse-card-form .container").on('click', function() {
            var input = $(this).find('input[type="radio"]');
            var formEl = $("#payment-form .new-card-wrapper");
            var buttonRememberedCard = $("#pay-button-remembered");
            var buttonNewCard = $("#pay-button");

            $('.container.active').removeClass('active');
            $(this).addClass('active');

            input.prop("checked", true);

            showButtonsIfAvailable();

            if (input.val() !== 'new') {
                buttonNewCard.hide();
                buttonRememberedCard.show();
                formEl.slideUp();
            } else {
                buttonNewCard.show();
                buttonRememberedCard.hide();
                formEl.slideDown();
            }

            $('.error-string').hide();
        });

        $("#pay-button-remembered").on('click', function() {
            var jsonData = JSON.stringify($("#reuse-card-form").serializeObject());
            submitPayment(jsonData);
        });

        $.fn.serializeObject = function() {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name]) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };

    </script><iframe src="https://js.checkout.com/framesv2/?v=2.28.0&amp;publicKey=pk_aitdq3cgnyx66zebxml5pyj4pe5&amp;iOS=false&amp;schemeChoiceVariant=NONE&amp;isMultiFrame=true&amp;safari=false&amp;lng=en-gb&amp;element=controller" id="controllerFrame" style="width:100%;height:100%;background:transparent;overflow:hidden;border:0 none transparent;margin:0;padding:0;-webkit-tap-highlight-color:transparent;display:none;position:static;" name="checkout-frames" tabindex="-1"></iframe>


    <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb">
        <section id="shadow-host-companion"></section>
    </div><iframe id="nr-ext-rsicon" style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe>
    <script type="text/javascript" src="chrome-extension://cjfdbemmaeeohgibnhdhlakiahifjjcf/injected.js"></script>
    <div data-lastpass-root="" style="position: absolute !important; top: 0px !important; left: 0px !important; height: 0px !important; width: 0px !important;">
        <div data-lastpass-infield="true" style="position: absolute !important; top: 0px !important; left: 0px !important;"></div>
    </div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>
