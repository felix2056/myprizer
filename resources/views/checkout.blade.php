@extends('layouts.app')

@section('content')
<div _ngcontent-cym-c13="" class="website-p7d">
    <div _ngcontent-cym-c13="">
        <div _ngcontent-cym-c13="">
            <router-outlet _ngcontent-cym-c13=""></router-outlet>
            <app-checkout _nghost-cym-c118="" class="ng-tns-c118-16 ng-star-inserted">
                <app-header _ngcontent-cym-c118="" class="ng-tns-c118-16" _nghost-cym-c63="">
                    <div _ngcontent-cym-c63="" class="header-placeholder"></div>
                    <!---->
                    <div _ngcontent-cym-c63="" class="header-container">
                        <app-install-prompt _ngcontent-cym-c63="" _nghost-cym-c62="" class="ng-tns-c62-17 ng-star-inserted">
                            <!---->
                        </app-install-prompt>
                        <!---->
                        <header _ngcontent-cym-c63="" class="header"><a _ngcontent-cym-c63="" routerlink="/" title="Go to homepage" class="logo header__logo" href="/"><img _ngcontent-cym-c63="" src="/assets/svg/logo.svg" alt="7days Performance" class="logo__img"></a>
                            <nav _ngcontent-cym-c63="" class="header__nav">
                                <ul _ngcontent-cym-c63="" class="main-nav">
                                    <li _ngcontent-cym-c63="" class="main-nav__item"><a _ngcontent-cym-c63="" routerlink="/current-competitions" title="" class="main-nav__link" href="/current-competitions">Cars and Bikes</a></li>
                                    <li _ngcontent-cym-c63="" class="main-nav__item"><a _ngcontent-cym-c63="" routerlink="/current-tech-competitions" title="" class="main-nav__link" href="/current-tech-competitions">Tech and Luxury</a></li>
                                    <li _ngcontent-cym-c63="" class="main-nav__item"><a _ngcontent-cym-c63="" routerlink="/cash-competitions" title="" class="main-nav__link" href="/cash-competitions">Tax Free Cash</a></li>
                                    <li _ngcontent-cym-c63="" class="main-nav__item"><a _ngcontent-cym-c63="" routerlink="/competition-winners/featured" title="" class="main-nav__link" href="/competition-winners/featured">Winners</a></li>
                                    <li _ngcontent-cym-c63="" class="main-nav__item"><a _ngcontent-cym-c63="" routerlink="/draw-results" title="" class="main-nav__link" href="/draw-results">Draw Results</a></li>
                                    <li _ngcontent-cym-c63="" class="main-nav__item"><a _ngcontent-cym-c63="" routerlink="/faq" title="" class="main-nav__link" href="/faq">FAQ</a></li>
                                </ul><button _ngcontent-cym-c63="" class="header__button header__button_sm nav-button">
                                    <svg-icon _ngcontent-cym-c63="" name="hamburger-new" class="nav-button__icon nav-button__icon_hamburger" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <path d="M19.167 9.166H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667zM19.167 3.334H.833a.833.833 0 000 1.667h18.334a.833.833 0 000-1.667zM19.167 15H.833a.833.833 0 100 1.667h18.334a.833.833 0 000-1.667z" fill="#00131F"></path>
                                        </svg></svg-icon>
                                </button><a _ngcontent-cym-c63="" routerlink="/cart" class="header__button nav-button" href="/cart"><span _ngcontent-cym-c63="" class="nav-button__label ng-star-inserted">432</span>
                                    <!---->
                                    <!---->
                                    <svg-icon _ngcontent-cym-c63="" name="cart-new" class="nav-button__icon nav-button__icon_shopping-cart" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
                                            <g clip-path="url(#clip0_869_27758)" fill="#00131F">
                                                <path d="M18.927 3.397a2.494 2.494 0 00-1.919-.897H3.535L3.5 2.208A2.5 2.5 0 001.018 0H.833a.833.833 0 000 1.667h.185a.833.833 0 01.828.735l1.147 9.75a4.167 4.167 0 004.138 3.681h8.702a.834.834 0 000-1.666H7.131A2.5 2.5 0 014.78 12.5h9.933a4.166 4.166 0 004.101-3.428l.654-3.628a2.495 2.495 0 00-.542-2.046zm-1.094 1.751l-.655 3.629a2.5 2.5 0 01-2.464 2.056H4.516l-.784-6.666h13.276a.833.833 0 01.825.981zM5.833 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333zM14.167 20a1.667 1.667 0 100-3.333 1.667 1.667 0 000 3.333z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_869_27758">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg></svg-icon>
                                </a><a _ngcontent-cym-c63="" routerlink="/my-account" class="header__button nav-button" href="/my-account">
                                    <svg-icon _ngcontent-cym-c63="" name="profile-new" class="nav-button__icon nav-button__icon_account" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="fill: currentcolor;">
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
                        <div _ngcontent-cym-c63="" class="mobile-menu"><button _ngcontent-cym-c63="" class="mobile-menu__close">
                                <svg-icon _ngcontent-cym-c63="" name="close-7-d" class="mobile-menu__close-icon" _nghost-cym-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                        <path d="M17.692 15.713L8.288 6.308a1.05 1.05 0 00-1.485 0l-.495.495a1.05 1.05 0 000 1.484l9.404 9.405c.41.41 1.075.41 1.485 0l.495-.494c.41-.41.41-1.075 0-1.485z"></path>
                                        <path d="M15.712 6.308l-9.404 9.405a1.05 1.05 0 000 1.485l.494.494c.41.41 1.076.41 1.485 0l4.703-4.702 4.702-4.702a1.05 1.05 0 000-1.485l-.495-.495a1.05 1.05 0 00-1.485 0z"></path>
                                    </svg></svg-icon>
                            </button>
                            <aside _ngcontent-cym-c63="" class="mobile-menu__panel">
                                <nav _ngcontent-cym-c63="" class="mobile-menu__nav">
                                    <ul _ngcontent-cym-c63="" class="mobile-menu__nav-list">
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><span _ngcontent-cym-c63="" class="mobile-menu__title"> Competitions</span></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/current-competitions" title="" class="mobile-menu__link" href="/current-competitions">Cars &amp; Bikes</a></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/current-tech-competitions" title="" class="mobile-menu__link" href="/current-tech-competitions">Tech &amp; Luxury</a></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/cash-competitions" title="" class="mobile-menu__link" href="/cash-competitions">Cash</a></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/instant-wins" title="" class="mobile-menu__link" href="/instant-wins"> Instant Wins</a></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><span _ngcontent-cym-c63="" class="mobile-menu__divider"></span></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/competition-winners/featured" title="" class="mobile-menu__link" href="/competition-winners/featured">Winners</a></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/draw-results" title="" class="mobile-menu__link" href="/draw-results">Draw Results</a></li>
                                        <li _ngcontent-cym-c63="" class="mobile-menu__item"><a _ngcontent-cym-c63="" routerlink="/faq" title="" class="mobile-menu__link" href="/faq">FAQ</a></li>
                                    </ul>
                                </nav>
                                <div _ngcontent-cym-c63="" class="mobile-menu__bottom-wrapper">
                                    <p _ngcontent-cym-c63="" class="mobile-menu__text">7days Social</p>
                                    <div _ngcontent-cym-c63="" class="mobile-menu__socials"><a _ngcontent-cym-c63="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-cym-c63="" name="facebook-7-d" class="mobile-menu__social-icon" _nghost-cym-c61="" role="img"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
                                                    <path d="M20.25 1H3.75A2.752 2.752 0 001 3.75v16.5A2.753 2.753 0 003.75 23h16.5A2.753 2.753 0 0023 20.25V3.75A2.753 2.753 0 0020.25 1z" fill="#3B5999"></path>
                                                    <path d="M16.5 12V9c0-.828.672-.75 1.5-.75h1.5V4.5h-3A4.5 4.5 0 0012 9v3H9v3.75h3V24h4.5v-8.25h2.25l1.5-3.75H16.5z" fill="#fff"></path>
                                                </svg></svg-icon>
                                        </a><a _ngcontent-cym-c63="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="mobile-menu__social-link">
                                            <svg-icon _ngcontent-cym-c63="" name="instagram-full" class="mobile-menu__social-icon" _nghost-cym-c61="" role="img"><svg viewBox="0 0 132 132" xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="fill: currentcolor;">
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
                <app-top-availability-message _ngcontent-cym-c118="" class="ng-tns-c118-16" _nghost-cym-c66="">
                    <!---->
                </app-top-availability-message>
                <!---->
                <section _ngcontent-cym-c118="" class="section section_checkout ng-tns-c118-16 ng-star-inserted">
                    <!---->
                    <!---->
                    <!---->
                    <div _ngcontent-cym-c118="" class="container container_cart ng-tns-c118-16">
                        <div _ngcontent-cym-c118="" class="alert-list alert-list--margin-minus10px ng-tns-c118-16 ng-star-inserted">
                            <div _ngcontent-cym-c118="" class="alert alert_light-blue alert-list__item alert-list__item--lighter-font alert-list__item--short ng-tns-c118-16">
                                <p _ngcontent-cym-c118="" class="alert__text ng-tns-c118-16"> Have a coupon? <a _ngcontent-cym-c118="" href="javascript:void(0)" class="alert__link ng-tns-c118-16">Click here to enter your code</a></p>
                            </div>
                        </div>
                        <!---->
                        <div _ngcontent-cym-c118="" class="coupon-form__outer ng-tns-c118-16 ng-trigger ng-trigger-toggleCoupon" style="height: 0px;">
                            <form _ngcontent-cym-c118="" novalidate="" class="ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                <div _ngcontent-cym-c118="" class="coupon-form ng-tns-c118-16">
                                    <div _ngcontent-cym-c118="" class="coupon-form__label ng-tns-c118-16">If you have a coupon code, please apply it below.</div>
                                    <div _ngcontent-cym-c118="" class="coupon-form__inputs ng-tns-c118-16"><input _ngcontent-cym-c118="" type="text" placeholder="Coupon code" formcontrolname="code" class="coupon-form__input-text ng-tns-c118-16 ng-untouched ng-pristine ng-invalid"><button _ngcontent-cym-c118="" class="coupon-form__submit ng-tns-c118-16">Apply coupon</button></div>
                                </div>
                            </form>
                        </div>
                        <!---->
                        <h2 _ngcontent-cym-c118="" class="checkout__title pt-3 ng-tns-c118-16">Billing details</h2>
                        <div _ngcontent-cym-c118="" class="alert-list alert-list--margin-minus10px mb-4 ng-tns-c118-16 ng-star-inserted">
                            <div _ngcontent-cym-c118="" class="alert alert_blue alert-list__item alert-list__item--smaller-font alert-list__item--short ng-tns-c118-16">
                                <p _ngcontent-cym-c118="" class="alert__text ng-tns-c118-16"> Have an account? <a _ngcontent-cym-c118="" href="javascript:void(0)" class="alert__link alert__link_dark ng-tns-c118-16">Log in here</a></p>
                            </div>
                        </div>
                        <!---->
                        <div _ngcontent-cym-c118="" class="auth__outer ng-tns-c118-16 ng-trigger ng-trigger-toggleLogin" style="height: 0px; margin-top: 0px;">
                            <form _ngcontent-cym-c118="" novalidate="" class="ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                <div _ngcontent-cym-c118="" class="auth__box ng-tns-c118-16">
                                    <div _ngcontent-cym-c118="" class="auth__introduction ng-tns-c118-16"> If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section. </div><label _ngcontent-cym-c118="" class="auth__label ng-tns-c118-16 ng-star-inserted" style=""><span _ngcontent-cym-c118="" class="auth__label-text auth__label-text_blue ng-tns-c118-16">Username or email *</span><input _ngcontent-cym-c118="" type="text" inputmode="email" fixonchange="" class="auth__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                        <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                    </label>
                                    <!----><label _ngcontent-cym-c118="" class="auth__label ng-tns-c118-16 ng-star-inserted" style=""><span _ngcontent-cym-c118="" class="auth__label-text auth__label-text_blue ng-tns-c118-16">Password *</span><input _ngcontent-cym-c118="" type="password" fixonchange="" class="auth__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                        <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                    </label>
                                    <!----><label _ngcontent-cym-c118="" class="auth__label auth__label_checkbox ng-tns-c118-16"><input _ngcontent-cym-c118="" type="checkbox" class="auth__checkbox ng-tns-c118-16 ng-untouched ng-pristine ng-valid"><span _ngcontent-cym-c118="" class="auth__label-text auth__label-text_blue ng-tns-c118-16">Remember me</span></label>
                                    <div _ngcontent-cym-c118="" class="text-center ng-tns-c118-16"><button _ngcontent-cym-c118="" type="submit" class="button button_green button_no-shadow auth__button ng-tns-c118-16">Log In</button></div>
                                    <p _ngcontent-cym-c118="" class="auth__text auth__text_center ng-tns-c118-16"><a _ngcontent-cym-c118="" routerlink="/my-account/lost-password" class="auth__link ng-tns-c118-16" href="/my-account/lost-password">Lost your password?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form _ngcontent-cym-c118="" novalidate="" class="ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                        <div _ngcontent-cym-c118="" class="container container-cart ng-tns-c118-16">
                            <!---->
                            <div _ngcontent-cym-c118="" class="checkout ng-tns-c118-16">
                                <div _ngcontent-cym-c118="" class="checkout__form checkout-form ng-tns-c118-16">
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="first-name" class="checkout-form__label ng-tns-c118-16"> First name <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="first-name" type="text" formcontrolname="firstName" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                        <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="last-name" class="checkout-form__label ng-tns-c118-16"> Last name <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="last-name" type="text" formcontrolname="lastName" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="region" class="checkout-form__label ng-tns-c118-16"> Country / Region <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><select _ngcontent-cym-c118="" id="region" formcontrolname="country" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-valid ng-star-inserted">
                                            <option _ngcontent-cym-c118="" value="" class="ng-tns-c118-16">Select a country / region…</option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="3"> Afghanistan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="6"> Albania </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="60"> Algeria </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="11"> American Samoa </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="1"> Andorra </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="8"> Angola </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="5"> Anguilla </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="9"> Antarctica </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="4"> Antigua and Barbuda </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="10"> Argentina </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="7"> Armenia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="14"> Aruba </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="13"> Australia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="12"> Austria </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="15"> Azerbaijan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="30"> Bahamas </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="22"> Bahrain </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="18"> Bangladesh </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="17"> Barbados </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="34"> Belarus </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="19"> Belgium </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="35"> Belize </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="24"> Benin </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="26"> Bermuda </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="31"> Bhutan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="28"> Bolivia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="16"> Bosnia and Herzegovina </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="33"> Botswana </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="32"> Bouvet Island </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="29"> Brazil </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="105"> British Indian Ocean Territory </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="239"> British Virgin Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="27"> Brunei </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="21"> Bulgaria </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="20"> Burkina Faso </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="23"> Burundi </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="116"> Cambodia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="45"> Cameroon </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="36"> Canada </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="50"> Cape Verde </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="123"> Cayman Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="39"> Central African Republic </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="215"> Chad </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="44"> Chile </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="46"> China </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="52"> Christmas Island </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="37"> Cocos Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="47"> Colombia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="118"> Comoros </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="43"> Cook Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="48"> Costa Rica </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="97"> Croatia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="49"> Cuba </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="51"> Curacao </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="53"> Cyprus </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="54"> Czech Republic </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="38"> Democratic Republic of the Congo </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="57"> Denmark </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="56"> Djibouti </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="58"> Dominica </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="59"> Dominican Republic </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="221"> East Timor </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="61"> Ecuador </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="63"> Egypt </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="210"> El Salvador </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="87"> Equatorial Guinea </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="65"> Eritrea </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="62"> Estonia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="67"> Ethiopia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="70"> Falkland Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="72"> Faroe Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="69"> Fiji </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="68"> Finland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="73"> France </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="79"> French Guiana </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="174"> French Polynesia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="216"> French Southern and Antarctic Lands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="75"> Gabon </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="84"> Gambia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="78"> Georgia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="55"> Germany </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="81"> Ghana </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="82"> Gibraltar </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="88"> Greece </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="83"> Greenland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="77"> Grenada </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="86"> Guadeloupe </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="91"> Guam </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="90"> Guatemala </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="80"> Guernsey </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="85"> Guinea </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="92"> Guinea Bissau </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="93"> Guyana </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="98"> Haiti </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="95"> Heard Island and McDonald Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="96"> Honduras </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="94"> Hong Kong </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="99"> Hungary </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="108"> Iceland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="104"> India </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="100"> Indonesia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="107"> Iran </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="106"> Iraq </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="101"> Ireland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="103"> Isle of Man </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="102"> Israel </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="109"> Italy </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="42"> Ivory Coast </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="111"> Jamaica </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="113"> Japan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="110"> Jersey </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="112"> Jordan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="124"> Kazakhstan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="114"> Kenya </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="117"> Kiribati </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="245"> Kosovo </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="122"> Kuwait </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="115"> Kyrgyzstan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="125"> Laos </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="134"> Latvia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="126"> Lebanon </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="131"> Lesotho </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="130"> Liberia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="135"> Libya </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="128"> Liechtenstein </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="132"> Lithuania </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="133"> Luxembourg </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="147"> Macau </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="143"> Macedonia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="141"> Madagascar </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="155"> Malawi </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="157"> Malaysia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="154"> Maldives </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="144"> Mali </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="152"> Malta </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="142"> Marshall Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="149"> Martinique </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="150"> Mauritania </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="153"> Mauritius </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="247"> Mayotte </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="156"> Mexico </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="71"> Micronesia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="138"> Moldova </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="137"> Monaco </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="146"> Mongolia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="139"> Montenegro </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="151"> Montserrat </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="136"> Morocco </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="158"> Mozambique </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="145"> Myanmar </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="159"> Namibia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="168"> Nauru </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="167"> Nepal </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="165"> Netherlands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="251"> Netherlands Antilles </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="160"> New Caledonia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="170"> New Zealand </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="164"> Nicaragua </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="161"> Niger </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="163"> Nigeria </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="169"> Niue </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="162"> Norfolk Island </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="120"> North Korea </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="148"> Northern Mariana Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="166"> Norway </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="171"> Oman </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="177"> Pakistan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="185"> Palau </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="182"> Palestine </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="172"> Panama </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="175"> Papua New Guinea </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="186"> Paraguay </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="173"> Peru </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="176"> Philippines </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="180"> Pitcairn </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="178"> Poland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="184"> Portugal </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="181"> Puerto Rico </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="187"> Qatar </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="40"> Republic of the Congo </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="188"> Reunion </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="189"> Romania </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="191"> Russia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="192"> Rwanda </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="25"> Saint Barthelemy </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="199"> Saint Helena </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="119"> Saint Kitts and Nevis </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="127"> Saint Lucia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="140"> Saint Martin </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="179"> Saint Pierre and Miquelon </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="237"> Saint Vincent and the Grenadines </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="244"> Samoa </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="204"> San Marino </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="209"> Sao Tome and Principe </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="193"> Saudi Arabia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="205"> Senegal </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="190"> Serbia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="195"> Seychelles </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="203"> Sierra Leone </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="198"> Singapore </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="211"> Sint Maarten </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="202"> Slovakia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="200"> Slovenia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="194"> Solomon Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="206"> Somalia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="248"> South Africa </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="89"> South Georgia and the Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="121"> South Korea </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="208"> South Sudan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="66"> Spain </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="129"> Sri Lanka </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="196"> Sudan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="207"> Suriname </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="201"> Svalbard and Jan Mayen </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="213"> Swaziland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="197"> Sweden </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="41"> Switzerland </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="212"> Syria </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="228"> Taiwan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="219"> Tajikistan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="229"> Tanzania </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="218"> Thailand </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="217"> Togo </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="220"> Tokelau </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="224"> Tonga </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="226"> Trinidad and Tobago </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="223"> Tunisia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="225"> Turkey </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="222"> Turkmenistan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="214"> Turks and Caicos Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="227"> Tuvalu </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="240"> U.S. Virgin Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="231"> Uganda </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="230"> Ukraine </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="2"> United Arab Emirates </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="76"> United Kingdom </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="233"> United States </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="232"> United States Minor Outlying Islands </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="234"> Uruguay </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="235"> Uzbekistan </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="242"> Vanuatu </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="236"> Vatican </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="238"> Venezuela </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="241"> Vietnam </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="243"> Wallis and Futuna </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="64"> Western Sahara </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="246"> Yemen </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="249"> Zambia </option>
                                            <option _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted" value="250"> Zimbabwe </option>
                                            <!---->
                                        </select>
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="address1" class="checkout-form__label ng-tns-c118-16"> Street address <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="address1" type="text" placeholder="House number and street name" formcontrolname="address1" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16"><label _ngcontent-cym-c118="" class="checkout-form__label ng-tns-c118-16"></label><input _ngcontent-cym-c118="" id="address2" type="text" placeholder="Apartment, suite, unit, etc. (optional)" formcontrolname="address2" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-valid"></div>
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="city" class="checkout-form__label ng-tns-c118-16"> Town / City <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="city" type="text" formcontrolname="city" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16"><label _ngcontent-cym-c118="" for="country" class="checkout-form__label ng-tns-c118-16"> State / County </label><input _ngcontent-cym-c118="" id="country" type="text" formcontrolname="state" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-valid"></div>
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="postcode" class="checkout-form__label ng-tns-c118-16"> Postcode <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="postcode" type="text" formcontrolname="postcode" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="phone" class="checkout-form__label ng-tns-c118-16"> Phone <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label>
                                        <div _ngcontent-cym-c118="" class="checkout-form__input-group ng-tns-c118-16">
                                            <ng-select _ngcontent-cym-c118="" formcontrolname="phoneCountry" bindlabel="id" bindvalue="id" class="ng-select__tight checkout-form__ngselect checkout-form__input--size2 ng-tns-c118-16 ng-select-searchable ng-select ng-select-single ng-untouched ng-pristine ng-valid">
                                                <div class="ng-select-container ng-has-value">
                                                    <div class="ng-value-container">
                                                        <div class="ng-placeholder"></div>
                                                        <div class="ng-value ng-star-inserted">
                                                            <!----><img _ngcontent-cym-c118="" alt="" class="flag ng-tns-c118-16 ng-star-inserted" src="/assets/flags/1x1/gb.svg"> +44
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <div role="combobox" aria-haspopup="listbox" class="ng-input" aria-expanded="false"><input aria-autocomplete="list" type="text" autocorrect="off" autocapitalize="off" autocomplete="aea385992f2c"></div>
                                                    </div>
                                                    <!---->
                                                    <!----><span class="ng-arrow-wrapper"><span class="ng-arrow"></span></span>
                                                </div>
                                                <!---->
                                            </ng-select><input _ngcontent-cym-c118="" id="phone" inputmode="tel" type="tel" formcontrolname="phone" class="checkout-form__input checkout-form__input--size-fill ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        </div>
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" class="checkout-form__label ng-tns-c118-16"> Date of birth <abbr _ngcontent-cym-c118="" title="required" class="simple-input__required-asterisk ng-tns-c118-16">*</abbr></label>
                                        <div _ngcontent-cym-c118="" class="checkout-form__input-group ng-tns-c118-16">
                                            <app-date-of-birth-picker _ngcontent-cym-c118="" class="ng-tns-c118-16" _nghost-cym-c100="">
                                                <div _ngcontent-cym-c100="" class="form-group ng-untouched ng-pristine ng-invalid">
                                                    <div _ngcontent-cym-c100="" class="form-group__col"><select _ngcontent-cym-c100="" name="day" id="day" formcontrolname="day" class="form-group__control ng-untouched ng-pristine ng-invalid">
                                                            <option _ngcontent-cym-c100="" value="" hidden="">Day</option>
                                                            <option _ngcontent-cym-c100="" value="1" class="ng-star-inserted">01</option>
                                                            <option _ngcontent-cym-c100="" value="2" class="ng-star-inserted">02</option>
                                                            <option _ngcontent-cym-c100="" value="3" class="ng-star-inserted">03</option>
                                                            <option _ngcontent-cym-c100="" value="4" class="ng-star-inserted">04</option>
                                                            <option _ngcontent-cym-c100="" value="5" class="ng-star-inserted">05</option>
                                                            <option _ngcontent-cym-c100="" value="6" class="ng-star-inserted">06</option>
                                                            <option _ngcontent-cym-c100="" value="7" class="ng-star-inserted">07</option>
                                                            <option _ngcontent-cym-c100="" value="8" class="ng-star-inserted">08</option>
                                                            <option _ngcontent-cym-c100="" value="9" class="ng-star-inserted">09</option>
                                                            <option _ngcontent-cym-c100="" value="10" class="ng-star-inserted">10</option>
                                                            <option _ngcontent-cym-c100="" value="11" class="ng-star-inserted">11</option>
                                                            <option _ngcontent-cym-c100="" value="12" class="ng-star-inserted">12</option>
                                                            <option _ngcontent-cym-c100="" value="13" class="ng-star-inserted">13</option>
                                                            <option _ngcontent-cym-c100="" value="14" class="ng-star-inserted">14</option>
                                                            <option _ngcontent-cym-c100="" value="15" class="ng-star-inserted">15</option>
                                                            <option _ngcontent-cym-c100="" value="16" class="ng-star-inserted">16</option>
                                                            <option _ngcontent-cym-c100="" value="17" class="ng-star-inserted">17</option>
                                                            <option _ngcontent-cym-c100="" value="18" class="ng-star-inserted">18</option>
                                                            <option _ngcontent-cym-c100="" value="19" class="ng-star-inserted">19</option>
                                                            <option _ngcontent-cym-c100="" value="20" class="ng-star-inserted">20</option>
                                                            <option _ngcontent-cym-c100="" value="21" class="ng-star-inserted">21</option>
                                                            <option _ngcontent-cym-c100="" value="22" class="ng-star-inserted">22</option>
                                                            <option _ngcontent-cym-c100="" value="23" class="ng-star-inserted">23</option>
                                                            <option _ngcontent-cym-c100="" value="24" class="ng-star-inserted">24</option>
                                                            <option _ngcontent-cym-c100="" value="25" class="ng-star-inserted">25</option>
                                                            <option _ngcontent-cym-c100="" value="26" class="ng-star-inserted">26</option>
                                                            <option _ngcontent-cym-c100="" value="27" class="ng-star-inserted">27</option>
                                                            <option _ngcontent-cym-c100="" value="28" class="ng-star-inserted">28</option>
                                                            <option _ngcontent-cym-c100="" value="29" class="ng-star-inserted">29</option>
                                                            <option _ngcontent-cym-c100="" value="30" class="ng-star-inserted">30</option>
                                                            <option _ngcontent-cym-c100="" value="31" class="ng-star-inserted">31</option>
                                                            <!---->
                                                        </select></div>
                                                    <div _ngcontent-cym-c100="" class="form-group__col"><select _ngcontent-cym-c100="" name="month" id="month" formcontrolname="month" class="form-group__control ng-untouched ng-pristine ng-invalid">
                                                            <option _ngcontent-cym-c100="" value="" hidden="">Month</option>
                                                            <option _ngcontent-cym-c100="" value="0" class="ng-star-inserted">Jan</option>
                                                            <option _ngcontent-cym-c100="" value="1" class="ng-star-inserted">Feb</option>
                                                            <option _ngcontent-cym-c100="" value="2" class="ng-star-inserted">Mar</option>
                                                            <option _ngcontent-cym-c100="" value="3" class="ng-star-inserted">Apr</option>
                                                            <option _ngcontent-cym-c100="" value="4" class="ng-star-inserted">May</option>
                                                            <option _ngcontent-cym-c100="" value="5" class="ng-star-inserted">Jun</option>
                                                            <option _ngcontent-cym-c100="" value="6" class="ng-star-inserted">Jul</option>
                                                            <option _ngcontent-cym-c100="" value="7" class="ng-star-inserted">Aug</option>
                                                            <option _ngcontent-cym-c100="" value="8" class="ng-star-inserted">Sep</option>
                                                            <option _ngcontent-cym-c100="" value="9" class="ng-star-inserted">Oct</option>
                                                            <option _ngcontent-cym-c100="" value="10" class="ng-star-inserted">Nov</option>
                                                            <option _ngcontent-cym-c100="" value="11" class="ng-star-inserted">Dec</option>
                                                            <!---->
                                                        </select></div>
                                                    <div _ngcontent-cym-c100="" class="form-group__col"><select _ngcontent-cym-c100="" name="year" id="year" formcontrolname="year" class="form-group__control ng-untouched ng-pristine ng-invalid">
                                                            <option _ngcontent-cym-c100="" value="" hidden="">Year</option>
                                                            <option _ngcontent-cym-c100="" value="2023" class="ng-star-inserted">2023</option>
                                                            <option _ngcontent-cym-c100="" value="2022" class="ng-star-inserted">2022</option>
                                                            <option _ngcontent-cym-c100="" value="2021" class="ng-star-inserted">2021</option>
                                                            <option _ngcontent-cym-c100="" value="2020" class="ng-star-inserted">2020</option>
                                                            <option _ngcontent-cym-c100="" value="2019" class="ng-star-inserted">2019</option>
                                                            <option _ngcontent-cym-c100="" value="2018" class="ng-star-inserted">2018</option>
                                                            <option _ngcontent-cym-c100="" value="2017" class="ng-star-inserted">2017</option>
                                                            <option _ngcontent-cym-c100="" value="2016" class="ng-star-inserted">2016</option>
                                                            <option _ngcontent-cym-c100="" value="2015" class="ng-star-inserted">2015</option>
                                                            <option _ngcontent-cym-c100="" value="2014" class="ng-star-inserted">2014</option>
                                                            <option _ngcontent-cym-c100="" value="2013" class="ng-star-inserted">2013</option>
                                                            <option _ngcontent-cym-c100="" value="2012" class="ng-star-inserted">2012</option>
                                                            <option _ngcontent-cym-c100="" value="2011" class="ng-star-inserted">2011</option>
                                                            <option _ngcontent-cym-c100="" value="2010" class="ng-star-inserted">2010</option>
                                                            <option _ngcontent-cym-c100="" value="2009" class="ng-star-inserted">2009</option>
                                                            <option _ngcontent-cym-c100="" value="2008" class="ng-star-inserted">2008</option>
                                                            <option _ngcontent-cym-c100="" value="2007" class="ng-star-inserted">2007</option>
                                                            <option _ngcontent-cym-c100="" value="2006" class="ng-star-inserted">2006</option>
                                                            <option _ngcontent-cym-c100="" value="2005" class="ng-star-inserted">2005</option>
                                                            <option _ngcontent-cym-c100="" value="2004" class="ng-star-inserted">2004</option>
                                                            <option _ngcontent-cym-c100="" value="2003" class="ng-star-inserted">2003</option>
                                                            <option _ngcontent-cym-c100="" value="2002" class="ng-star-inserted">2002</option>
                                                            <option _ngcontent-cym-c100="" value="2001" class="ng-star-inserted">2001</option>
                                                            <option _ngcontent-cym-c100="" value="2000" class="ng-star-inserted">2000</option>
                                                            <option _ngcontent-cym-c100="" value="1999" class="ng-star-inserted">1999</option>
                                                            <option _ngcontent-cym-c100="" value="1998" class="ng-star-inserted">1998</option>
                                                            <option _ngcontent-cym-c100="" value="1997" class="ng-star-inserted">1997</option>
                                                            <option _ngcontent-cym-c100="" value="1996" class="ng-star-inserted">1996</option>
                                                            <option _ngcontent-cym-c100="" value="1995" class="ng-star-inserted">1995</option>
                                                            <option _ngcontent-cym-c100="" value="1994" class="ng-star-inserted">1994</option>
                                                            <option _ngcontent-cym-c100="" value="1993" class="ng-star-inserted">1993</option>
                                                            <option _ngcontent-cym-c100="" value="1992" class="ng-star-inserted">1992</option>
                                                            <option _ngcontent-cym-c100="" value="1991" class="ng-star-inserted">1991</option>
                                                            <option _ngcontent-cym-c100="" value="1990" class="ng-star-inserted">1990</option>
                                                            <option _ngcontent-cym-c100="" value="1989" class="ng-star-inserted">1989</option>
                                                            <option _ngcontent-cym-c100="" value="1988" class="ng-star-inserted">1988</option>
                                                            <option _ngcontent-cym-c100="" value="1987" class="ng-star-inserted">1987</option>
                                                            <option _ngcontent-cym-c100="" value="1986" class="ng-star-inserted">1986</option>
                                                            <option _ngcontent-cym-c100="" value="1985" class="ng-star-inserted">1985</option>
                                                            <option _ngcontent-cym-c100="" value="1984" class="ng-star-inserted">1984</option>
                                                            <option _ngcontent-cym-c100="" value="1983" class="ng-star-inserted">1983</option>
                                                            <option _ngcontent-cym-c100="" value="1982" class="ng-star-inserted">1982</option>
                                                            <option _ngcontent-cym-c100="" value="1981" class="ng-star-inserted">1981</option>
                                                            <option _ngcontent-cym-c100="" value="1980" class="ng-star-inserted">1980</option>
                                                            <option _ngcontent-cym-c100="" value="1979" class="ng-star-inserted">1979</option>
                                                            <option _ngcontent-cym-c100="" value="1978" class="ng-star-inserted">1978</option>
                                                            <option _ngcontent-cym-c100="" value="1977" class="ng-star-inserted">1977</option>
                                                            <option _ngcontent-cym-c100="" value="1976" class="ng-star-inserted">1976</option>
                                                            <option _ngcontent-cym-c100="" value="1975" class="ng-star-inserted">1975</option>
                                                            <option _ngcontent-cym-c100="" value="1974" class="ng-star-inserted">1974</option>
                                                            <option _ngcontent-cym-c100="" value="1973" class="ng-star-inserted">1973</option>
                                                            <option _ngcontent-cym-c100="" value="1972" class="ng-star-inserted">1972</option>
                                                            <option _ngcontent-cym-c100="" value="1971" class="ng-star-inserted">1971</option>
                                                            <option _ngcontent-cym-c100="" value="1970" class="ng-star-inserted">1970</option>
                                                            <option _ngcontent-cym-c100="" value="1969" class="ng-star-inserted">1969</option>
                                                            <option _ngcontent-cym-c100="" value="1968" class="ng-star-inserted">1968</option>
                                                            <option _ngcontent-cym-c100="" value="1967" class="ng-star-inserted">1967</option>
                                                            <option _ngcontent-cym-c100="" value="1966" class="ng-star-inserted">1966</option>
                                                            <option _ngcontent-cym-c100="" value="1965" class="ng-star-inserted">1965</option>
                                                            <option _ngcontent-cym-c100="" value="1964" class="ng-star-inserted">1964</option>
                                                            <option _ngcontent-cym-c100="" value="1963" class="ng-star-inserted">1963</option>
                                                            <option _ngcontent-cym-c100="" value="1962" class="ng-star-inserted">1962</option>
                                                            <option _ngcontent-cym-c100="" value="1961" class="ng-star-inserted">1961</option>
                                                            <option _ngcontent-cym-c100="" value="1960" class="ng-star-inserted">1960</option>
                                                            <option _ngcontent-cym-c100="" value="1959" class="ng-star-inserted">1959</option>
                                                            <option _ngcontent-cym-c100="" value="1958" class="ng-star-inserted">1958</option>
                                                            <option _ngcontent-cym-c100="" value="1957" class="ng-star-inserted">1957</option>
                                                            <option _ngcontent-cym-c100="" value="1956" class="ng-star-inserted">1956</option>
                                                            <option _ngcontent-cym-c100="" value="1955" class="ng-star-inserted">1955</option>
                                                            <option _ngcontent-cym-c100="" value="1954" class="ng-star-inserted">1954</option>
                                                            <option _ngcontent-cym-c100="" value="1953" class="ng-star-inserted">1953</option>
                                                            <option _ngcontent-cym-c100="" value="1952" class="ng-star-inserted">1952</option>
                                                            <option _ngcontent-cym-c100="" value="1951" class="ng-star-inserted">1951</option>
                                                            <option _ngcontent-cym-c100="" value="1950" class="ng-star-inserted">1950</option>
                                                            <option _ngcontent-cym-c100="" value="1949" class="ng-star-inserted">1949</option>
                                                            <option _ngcontent-cym-c100="" value="1948" class="ng-star-inserted">1948</option>
                                                            <option _ngcontent-cym-c100="" value="1947" class="ng-star-inserted">1947</option>
                                                            <option _ngcontent-cym-c100="" value="1946" class="ng-star-inserted">1946</option>
                                                            <option _ngcontent-cym-c100="" value="1945" class="ng-star-inserted">1945</option>
                                                            <option _ngcontent-cym-c100="" value="1944" class="ng-star-inserted">1944</option>
                                                            <option _ngcontent-cym-c100="" value="1943" class="ng-star-inserted">1943</option>
                                                            <option _ngcontent-cym-c100="" value="1942" class="ng-star-inserted">1942</option>
                                                            <option _ngcontent-cym-c100="" value="1941" class="ng-star-inserted">1941</option>
                                                            <option _ngcontent-cym-c100="" value="1940" class="ng-star-inserted">1940</option>
                                                            <option _ngcontent-cym-c100="" value="1939" class="ng-star-inserted">1939</option>
                                                            <option _ngcontent-cym-c100="" value="1938" class="ng-star-inserted">1938</option>
                                                            <option _ngcontent-cym-c100="" value="1937" class="ng-star-inserted">1937</option>
                                                            <option _ngcontent-cym-c100="" value="1936" class="ng-star-inserted">1936</option>
                                                            <option _ngcontent-cym-c100="" value="1935" class="ng-star-inserted">1935</option>
                                                            <option _ngcontent-cym-c100="" value="1934" class="ng-star-inserted">1934</option>
                                                            <option _ngcontent-cym-c100="" value="1933" class="ng-star-inserted">1933</option>
                                                            <option _ngcontent-cym-c100="" value="1932" class="ng-star-inserted">1932</option>
                                                            <option _ngcontent-cym-c100="" value="1931" class="ng-star-inserted">1931</option>
                                                            <option _ngcontent-cym-c100="" value="1930" class="ng-star-inserted">1930</option>
                                                            <option _ngcontent-cym-c100="" value="1929" class="ng-star-inserted">1929</option>
                                                            <option _ngcontent-cym-c100="" value="1928" class="ng-star-inserted">1928</option>
                                                            <option _ngcontent-cym-c100="" value="1927" class="ng-star-inserted">1927</option>
                                                            <option _ngcontent-cym-c100="" value="1926" class="ng-star-inserted">1926</option>
                                                            <option _ngcontent-cym-c100="" value="1925" class="ng-star-inserted">1925</option>
                                                            <option _ngcontent-cym-c100="" value="1924" class="ng-star-inserted">1924</option>
                                                            <option _ngcontent-cym-c100="" value="1923" class="ng-star-inserted">1923</option>
                                                            <option _ngcontent-cym-c100="" value="1922" class="ng-star-inserted">1922</option>
                                                            <option _ngcontent-cym-c100="" value="1921" class="ng-star-inserted">1921</option>
                                                            <option _ngcontent-cym-c100="" value="1920" class="ng-star-inserted">1920</option>
                                                            <option _ngcontent-cym-c100="" value="1919" class="ng-star-inserted">1919</option>
                                                            <option _ngcontent-cym-c100="" value="1918" class="ng-star-inserted">1918</option>
                                                            <option _ngcontent-cym-c100="" value="1917" class="ng-star-inserted">1917</option>
                                                            <option _ngcontent-cym-c100="" value="1916" class="ng-star-inserted">1916</option>
                                                            <option _ngcontent-cym-c100="" value="1915" class="ng-star-inserted">1915</option>
                                                            <option _ngcontent-cym-c100="" value="1914" class="ng-star-inserted">1914</option>
                                                            <option _ngcontent-cym-c100="" value="1913" class="ng-star-inserted">1913</option>
                                                            <option _ngcontent-cym-c100="" value="1912" class="ng-star-inserted">1912</option>
                                                            <option _ngcontent-cym-c100="" value="1911" class="ng-star-inserted">1911</option>
                                                            <option _ngcontent-cym-c100="" value="1910" class="ng-star-inserted">1910</option>
                                                            <option _ngcontent-cym-c100="" value="1909" class="ng-star-inserted">1909</option>
                                                            <option _ngcontent-cym-c100="" value="1908" class="ng-star-inserted">1908</option>
                                                            <option _ngcontent-cym-c100="" value="1907" class="ng-star-inserted">1907</option>
                                                            <option _ngcontent-cym-c100="" value="1906" class="ng-star-inserted">1906</option>
                                                            <option _ngcontent-cym-c100="" value="1905" class="ng-star-inserted">1905</option>
                                                            <option _ngcontent-cym-c100="" value="1904" class="ng-star-inserted">1904</option>
                                                            <!---->
                                                        </select></div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </app-date-of-birth-picker>
                                        </div>
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="email" class="checkout-form__label ng-tns-c118-16"> Email address <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="email" inputmode="email" type="email" formcontrolname="email" fixonchange="" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="username" class="checkout-form__label ng-tns-c118-16"> Account username <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="username" type="text" formcontrolname="username" fixonchange="" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-form__group ng-tns-c118-16 ng-star-inserted"><label _ngcontent-cym-c118="" for="username" class="checkout-form__label ng-tns-c118-16"> Create account password <abbr _ngcontent-cym-c118="" title="required" class="checkout-form__abbr ng-tns-c118-16">*</abbr></label><input _ngcontent-cym-c118="" id="password" type="password" formcontrolname="password" fixonchange="" class="checkout-form__input ng-tns-c118-16 ng-untouched ng-pristine ng-invalid">
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                                <div _ngcontent-cym-c118="" class="checkout__order checkout-order ng-tns-c118-16">
                                    <h2 _ngcontent-cym-c118="" class="checkout__title ng-tns-c118-16">Your order</h2>
                                    <table _ngcontent-cym-c118="" class="checkout-order__table ng-tns-c118-16">
                                        <tr _ngcontent-cym-c118="" class="ng-tns-c118-16">
                                            <th _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">Product</strong></th>
                                            <th _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">Subtotal</strong></th>
                                        </tr>
                                        <tr _ngcontent-cym-c118="" class="ng-tns-c118-16 ng-star-inserted">
                                            <td _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16">
                                                <p _ngcontent-cym-c118="" class="checkout-order__text ng-tns-c118-16">Win This 630BHP Mercedes C63s AMG + £1,000 Cash! <strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">× 432</strong></p>
                                                <p _ngcontent-cym-c118="" class="checkout-order__text ng-tns-c118-16 ng-star-inserted"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">Answer:</strong> A45 AMG</p>
                                                <!---->
                                            </td>
                                            <td _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">£427.68</strong></td>
                                        </tr>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <tr _ngcontent-cym-c118="" class="ng-tns-c118-16">
                                            <td _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">Subtotal</strong></td>
                                            <td _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">£427.68</strong></td>
                                        </tr>
                                        <!---->
                                        <!---->
                                        <tr _ngcontent-cym-c118="" class="ng-tns-c118-16">
                                            <td _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">Total</strong></td>
                                            <td _ngcontent-cym-c118="" class="checkout-order__table-cell ng-tns-c118-16"><strong _ngcontent-cym-c118="" class="checkout-order__text-bold ng-tns-c118-16">£427.68</strong></td>
                                        </tr>
                                    </table>
                                    <div _ngcontent-cym-c118="" class="checkout-order__panel-list ng-tns-c118-16 ng-star-inserted">
                                        <div _ngcontent-cym-c118="" class="checkout-order__panel ng-tns-c118-16 ng-star-inserted">
                                            <div _ngcontent-cym-c118="" class="ng-tns-c118-16"> Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a _ngcontent-cym-c118="" href="/cookie-and-privacy-policy" target="_blank" class="checkout-order__link ng-tns-c118-16">privacy policy</a>. </div>
                                            <div _ngcontent-cym-c118="" class="checkout-order__agree-check ng-tns-c118-16"><input _ngcontent-cym-c118="" type="checkbox" id="privacy" value="1" class="ng-tns-c118-16 ng-untouched ng-pristine ng-invalid"><label _ngcontent-cym-c118="" for="privacy" class="checkout-order__text ng-tns-c118-16"> I am 18 years old or over and I have read and agree to the website <a _ngcontent-cym-c118="" href="/terms-and-conditions" target="_blank" class="checkout-order__link ng-tns-c118-16">terms and conditions</a></label>
                                                <!---->
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-order__submit-container ng-tns-c118-16 ng-star-inserted">
                                        <div _ngcontent-cym-c118="" class="checkout-order__submit--card-icon ng-tns-c118-16 ng-star-inserted"><span _ngcontent-cym-c118="" class="ng-tns-c118-16">We accept:</span>
                                            <svg-icon _ngcontent-cym-c118="" name="visa" class="ng-tns-c118-16" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 24" style="fill: currentcolor;">
                                                    <rect y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.739 7.533a7.21 7.21 0 00-2.496-.428c-2.752 0-4.691 1.381-4.707 3.36-.015 1.464 1.384 2.28 2.44 2.767 1.084.499 1.449.817 1.443 1.263-.007.682-.865.994-1.666.994-1.114 0-1.706-.154-2.621-.534l-.36-.162-.39 2.28c.651.284 1.853.53 3.102.543 2.928 0 4.83-1.365 4.85-3.479.01-1.158-.731-2.04-2.337-2.766-.975-.472-1.57-.787-1.564-1.263 0-.423.504-.876 1.594-.876a5.138 5.138 0 012.085.39l.25.117.377-2.206zm-12.885 9.932l1.741-10.182h2.785l-1.742 10.182h-2.784zM35.728 7.292h2.153l2.254 10.176H37.55s-.255-1.17-.338-1.526c-.216 0-1.115 0-1.96-.002h-.007l-1.6-.002c-.109.276-.587 1.53-.587 1.53h-2.925l4.136-9.331c.294-.664.792-.845 1.46-.845zm-1.281 6.563c.23-.586 1.11-2.847 1.11-2.847-.008.014.046-.126.12-.317.078-.202.177-.459.25-.654l.187.878.646 2.94h-2.313zm-21.656.379l2.726-6.944h2.95l-4.384 10.163-2.947.004L8.643 8.55c1.768.882 3.35 2.644 3.857 4.272l.291 1.41z" fill="#1A1F71"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.261 7.283H5.77l-.036.212c3.494.844 5.806 2.88 6.766 5.328l-.977-4.68c-.168-.645-.657-.837-1.262-.86z" fill="#F9A51A"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-cym-c118="" name="mastercard-new" class="ng-tns-c118-16" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 24" style="fill: currentcolor;">
                                                    <rect x=".189" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.672 20.483c4.851 0 8.785-3.85 8.785-8.6s-3.934-8.6-8.785-8.6c-4.852 0-8.786 3.85-8.786 8.6s3.934 8.6 8.786 8.6z" fill="#F79E1B"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.574 20.483c4.852 0 8.785-3.85 8.785-8.6s-3.933-8.6-8.785-8.6-8.785 3.85-8.785 8.6 3.933 8.6 8.785 8.6z" fill="#EB001B"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.123 5.215c-1.975 1.577-3.236 3.978-3.236 6.668s1.261 5.091 3.236 6.668c1.976-1.577 3.237-3.978 3.237-6.668s-1.261-5.091-3.237-6.668z" fill="#FF5F00"></path>
                                                </svg></svg-icon>
                                            <svg-icon _ngcontent-cym-c118="" name="google-pay" class="ng-tns-c118-16" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 24" style="fill: currentcolor;">
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
                                            <svg-icon _ngcontent-cym-c118="" name="apple-pay-new" class="ng-tns-c118-16" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 24" style="fill: currentcolor;">
                                                    <rect x=".132" y=".416" width="45.868" height="22.934" rx="1.911" fill="#F5F6F7"></rect>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.779 6.535c.064.572-.17 1.146-.519 1.558-.349.412-.92.733-1.48.69-.076-.56.206-1.143.53-1.508.36-.413.967-.72 1.469-.74zm1.81 3.329c-.092.054-1.085.648-1.074 1.853.014 1.443 1.266 1.945 1.337 1.973l.003.001-.004.012a5.336 5.336 0 01-.688 1.376c-.415.593-.846 1.186-1.526 1.198-.326.006-.545-.087-.772-.183-.237-.1-.484-.204-.874-.204-.41 0-.668.107-.917.21-.216.09-.424.178-.718.189-.656.024-1.155-.643-1.574-1.235-.857-1.21-1.512-3.421-.633-4.915a2.449 2.449 0 012.064-1.222c.365-.007.719.13 1.029.25.236.092.447.174.617.174.153 0 .358-.08.598-.172.376-.145.837-.323 1.312-.276.325.014 1.238.13 1.824.968a.28.28 0 00-.005.003z" fill="#192A36"></path>
                                                    <path d="M20.543 15.238h1.024v-2.929h2.07c1.54 0 2.633-1.086 2.633-2.644v-.011c0-1.558-1.092-2.622-2.633-2.622h-3.094v8.206zm2.832-7.296c1.172 0 1.848.643 1.848 1.723v.012c0 1.08-.676 1.723-1.848 1.723h-1.808V7.942h1.808zm5.301 7.404c.825 0 1.467-.358 1.854-1.012h.09v.904h.99v-4.197C31.61 9.768 30.774 9 29.28 9c-1.308 0-2.24.648-2.4 1.61l-.006.033h.99l.006-.017c.159-.477.642-.75 1.376-.75.915 0 1.376.409 1.376 1.165v.558l-1.757.108c-1.428.085-2.235.716-2.235 1.808v.011c0 1.115.881 1.82 2.047 1.82zm-1.035-1.842v-.012c0-.608.41-.938 1.342-.995l1.638-.102v.557c0 .876-.734 1.535-1.74 1.535-.711 0-1.24-.364-1.24-.983zm5.472 3.884c1.086 0 1.592-.399 2.098-1.775l2.394-6.505h-1.04l-1.678 5.044h-.091l-1.683-5.044h-1.058l2.269 6.136-.114.364c-.222.705-.563.96-1.126.96-.136 0-.29-.005-.41-.028v.814a2.9 2.9 0 00.439.034z" fill="#192A36"></path>
                                                </svg></svg-icon>
                                        </div>
                                        <!---->
                                        <!----><a href="/checkout-2" _ngcontent-cym-c118="" type="button" class="button button_no-shadow button_green checkout-order__submit ng-tns-c118-16">
                                            <!---->
                                            <!---->Pay with card
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!----></a>
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <div _ngcontent-cym-c118="" class="checkout-order__submit-container ng-tns-c118-16 ng-star-inserted">
                                        <!----><button _ngcontent-cym-c118="" type="button" class="button button_no-shadow button_green checkout-order__submit ng-tns-c118-16 checkout-order__submit--paypal">
                                            <!---->
                                            <!---->
                                            <!---->Pay with <svg-icon _ngcontent-cym-c118="" name="paypal-name" class="checkout-order__submit--paypal-icon ng-tns-c118-16 ng-star-inserted" _nghost-cym-c61="" role="img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.6 7.1" class="svg-icon" style="fill: currentcolor;">
                                                    <path class="svg-icon__paypal svg-icon__paypal_light" d="M18 0h-2c-.1 0-.2.1-.3.2l-.8 5.3c0 .1.1.2.2.2h1.1c.1 0 .2-.1.2-.2l.1-1.5c0-.1.1-.2.3-.2h.7c1.4 0 2.2-.7 2.4-2 .1-.5 0-1-.2-1.3-.5-.3-1-.5-1.7-.5m.2 2c-.1.7-.7.7-1.2.7h-.4l.2-1.4c0-.1.1-.1.2-.1h.1c.4 0 .7 0 .9.2.2.1.2.3.2.6"></path>
                                                    <path class="svg-icon__paypal" d="M3.2 0h-2C1.1 0 .9.1.9.2L0 5.6c0 .1.1.2.2.2h1c.1 0 .2-.1.3-.2L1.7 4c0-.1.1-.2.3-.2h.7c1.4 0 2.2-.7 2.4-2 .1-.5 0-1-.2-1.3C4.4.2 4 0 3.2 0m.3 2c-.2.7-.7.7-1.2.7H2l.2-1.4c0-.1.1-.1.2-.1h.1c.4 0 .7 0 .9.2.1.1.1.3.1.6M9.4 1.9h-1s-.1.1-.1.2l-.1.3v-.2c-.3-.3-.7-.4-1.2-.4-1.1 0-2.1.8-2.2 2-.1.6.1 1.1.4 1.5s.7.5 1.3.5c.9 0 1.4-.5 1.4-.5l-.1.3c0 .1.1.2.2.2h.9c.1 0 .2-.1.3-.2l.5-3.4c-.1-.1-.2-.3-.3-.3m-1.3 2c-.1.5-.5 1-1.1 1-.3 0-.5-.1-.7-.2-.2-.3-.2-.5-.2-.8.1-.5.5-1 1.1-1 .3 0 .5.1.7.2.1.2.2.5.2.8"></path>
                                                    <path class="svg-icon__paypal svg-icon__paypal_light" d="M24.2 1.9h-1c-.1 0-.2.1-.2.2v.3l-.1-.1c-.2-.3-.7-.4-1.1-.4-1.1 0-2.1.8-2.2 2-.1.6.1 1.1.4 1.5s.7.5 1.3.5c.9 0 1.4-.5 1.4-.5l-.1.3c0 .1.1.2.2.2h.9c.1 0 .2-.1.3-.2l.5-3.4c-.2-.2-.2-.4-.3-.4m-1.4 2c-.1.5-.5 1-1.1 1-.3 0-.5-.1-.7-.2-.1-.2-.2-.4-.2-.7.1-.5.5-1 1.1-1 .3 0 .5.1.7.2.2.1.2.4.2.7"></path>
                                                    <path class="svg-icon__paypal" d="M14.7 1.9h-1c-.1 0-.2.1-.2.1l-1.3 2.1-.6-1.9c-.2-.1-.2-.2-.4-.2h-1c-.1 0-.2.1-.2.2l1.1 3.2-1 1.4c-.1.1 0 .3.1.3h1c.1 0 .2-.1.2-.1l3.3-4.8c.2-.1.1-.3 0-.3"></path>
                                                    <path class="svg-icon__paypal svg-icon__paypal_light" d="M25.3.2l-.8 5.4c0 .1.1.2.2.2h.8c.1 0 .2-.1.3-.2l.8-5.3c0-.1-.1-.2-.2-.2h-1c0-.1 0 0-.1.1"></path>
                                                </svg></svg-icon>
                                            <!---->
                                            <!---->
                                            <!----></button>
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </form>
                    <div _ngcontent-cym-c118="" class="container container_cart ng-tns-c118-16 d-none">
                        <div _ngcontent-cym-c118="" class="checkout ng-tns-c118-16">
                            <div _ngcontent-cym-c118="" class="checkout__form checkout__form_card-details ng-tns-c118-16">
                                <app-card-form _ngcontent-cym-c118="" class="ng-tns-c118-16" _nghost-cym-c117="">
                                    <form _ngcontent-cym-c117="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                        <div _ngcontent-cym-c117="">
                                            <h2 _ngcontent-cym-c117="" class="checkout__title checkout__title_mt">Card details</h2>
                                            <!---->
                                            <div _ngcontent-cym-c117="" class="card-details__card-list ng-star-inserted">
                                                <div _ngcontent-cym-c117="" class="checkout-form__group"><label _ngcontent-cym-c117="" for="card-number" class="checkout-form__label"> Payment card number <abbr _ngcontent-cym-c117="" title="required" class="checkout-form__abbr">*</abbr></label><input _ngcontent-cym-c117="" id="card-number" inputmode="numeric" formcontrolname="cardNumber" type="text" autocomplete="cc-number" class="checkout-form__input ng-untouched ng-pristine ng-invalid">
                                                    <!---->
                                                </div>
                                                <div _ngcontent-cym-c117="" class="checkout-form__group"><label _ngcontent-cym-c117="" for="expire-date" class="checkout-form__label"> Expire Date <abbr _ngcontent-cym-c117="" title="required" class="checkout-form__abbr">*</abbr></label><input _ngcontent-cym-c117="" id="expire-date" formcontrolname="cardDate" inputmode="numeric" type="text" placeholder="MM / YY" autocomplete="cc-exp" class="checkout-form__input ng-untouched ng-pristine ng-invalid">
                                                    <!---->
                                                </div>
                                                <div _ngcontent-cym-c117="" class="checkout-form__group"><label _ngcontent-cym-c117="" for="security-code" class="checkout-form__label"> Security code <abbr _ngcontent-cym-c117="" title="required" class="checkout-form__abbr">*</abbr><span _ngcontent-cym-c117="" class="checkout-form__question"><span _ngcontent-cym-c117="">
                                                                <svg-icon _ngcontent-cym-c117="" name="question" _nghost-cym-c61="" role="img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill: currentcolor;">
                                                                        <circle cx="256" cy="378.5" r="25"></circle>
                                                                        <path d="M256 0C114.516 0 0 114.497 0 256c0 141.484 114.497 256 256 256 141.484 0 256-114.497 256-256C512 114.516 397.503 0 256 0zm0 472c-119.377 0-216-96.607-216-216 0-119.377 96.607-216 216-216 119.377 0 216 96.607 216 216 0 119.377-96.607 216-216 216z"></path>
                                                                        <path d="M256 128.5c-44.112 0-80 35.888-80 80 0 11.046 8.954 20 20 20s20-8.954 20-20c0-22.056 17.944-40 40-40s40 17.944 40 40-17.944 40-40 40c-11.046 0-20 8.954-20 20v50c0 11.046 8.954 20 20 20s20-8.954 20-20v-32.531c34.466-8.903 60-40.26 60-77.469 0-44.112-35.888-80-80-80z"></path>
                                                                    </svg></svg-icon>
                                                            </span>
                                                            <div _ngcontent-cym-c117="" class="checkout-form__hint"><img _ngcontent-cym-c117="" src="/assets/images/cvv-explanation.jpg" alt="cvv explanation"></div>
                                                        </span></label><input _ngcontent-cym-c117="" id="security-code" inputmode="numeric" formcontrolname="securityCode" type="text" maxlength="4" autocomplete="cc-csc" class="checkout-form__input ng-untouched ng-pristine ng-invalid">
                                                    <!---->
                                                </div>
                                                <div _ngcontent-cym-c117="" class="checkout-form__group ng-star-inserted"><label _ngcontent-cym-c117="" class="checkout-form__label"></label>
                                                    <div _ngcontent-cym-c117="" class="checkout-order__save-info"><input _ngcontent-cym-c117="" type="checkbox" id="save-info" formcontrolname="saveCard" class="ng-untouched ng-pristine ng-invalid"><label _ngcontent-cym-c117="" for="save-info" class="checkout-order__text checkout-order__text_sm"> Save payment information to my account for future purchases * </label>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <!---->
                                            <div _ngcontent-cym-c117="" class="checkout-form__button"><button _ngcontent-cym-c117="" type="submit" class="button button_no-shadow button_green checkout-order__submit button_disabled">
                                                    <!----> Pay using Card </button>
                                                <div _ngcontent-cym-c117="" class="checkout-form__info">
                                                    <svg-icon _ngcontent-cym-c117="" name="lock" class="checkout-form__info-icon" _nghost-cym-c61="" role="img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 535.5 535.5" style="fill: currentcolor;">
                                                            <path d="M420.75 178.5h-25.5v-51c0-71.4-56.1-127.5-127.5-127.5s-127.5 56.1-127.5 127.5v51h-25.5c-28.05 0-51 22.95-51 51v255c0 28.05 22.95 51 51 51h306c28.05 0 51-22.95 51-51v-255c0-28.05-22.95-51-51-51zm-153 229.5c-28.05 0-51-22.95-51-51s22.95-51 51-51 51 22.95 51 51-22.95 51-51 51zm79.05-229.5H188.7v-51c0-43.35 35.7-79.05 79.05-79.05 43.35 0 79.05 35.7 79.05 79.05v51z"></path>
                                                        </svg></svg-icon> Your payment is processed by&nbsp;
                                                    <!---->
                                                    <!----><a _ngcontent-cym-c117="" href="https://www.trustpayments.com/" target="_blank" class="checkout-form__info-link ng-star-inserted">Trustpayments</a>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </app-card-form>
                            </div>
                        </div>
                    </div>
                </section>
                <!---->
                <app-footer _ngcontent-cym-c118="" class="ng-tns-c118-16" _nghost-cym-c64="">
                    <div _ngcontent-cym-c64="" class="footer">
                        <div _ngcontent-cym-c64="" class="footer__wrapper">
                            <div _ngcontent-cym-c64="" class="footer__links"><a _ngcontent-cym-c64="" routerlink="/" title="" class="footer__logo" href="/"><img _ngcontent-cym-c64="" src="/assets/svg/logo.svg" alt="7days Performance" class="footer__logo-image"></a>
                                <ul _ngcontent-cym-c64="">
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/cookie-and-privacy-policy" href="/cookie-and-privacy-policy">Cookie &amp; Privacy Policy</a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/website-terms" href="/website-terms">Website Terms</a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/responsible-gambling" href="/responsible-gambling">Responsible Gambling</a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/reviews" href="/reviews">Reviews</a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/faq" href="/faq">FAQ</a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/security" href="/security">Security</a></li>
                                    <li _ngcontent-cym-c64="">&nbsp;</li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" routerlink="/about-us" href="/about-us">Our Team</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-cym-c64="" class="footer__social">
                                <div _ngcontent-cym-c64="">
                                    <p _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" href="mailto:hello@7daysperformance.co.uk" class="footer__social-email">hello@7daysperformance.co.uk</a></p>
                                    <p _ngcontent-cym-c64="" class="footer__annotation--light"> 7days Performance - Technology and Marketing powered by <a _ngcontent-cym-c64="" href="https://sevencanyon.com/" target="_blank" class="footer__annotation--light"><u _ngcontent-cym-c64="">SevenCanyon</u></a></p>
                                    <p _ngcontent-cym-c64="" class="footer__annotation--light">© All rights reserved</p>
                                </div>
                                <ul _ngcontent-cym-c64="">
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" href="https://www.facebook.com/7daysPerformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-cym-c64="" name="facebook-new" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm1.668 16.703v8.705h-3.602v-8.704h-1.8v-3h1.8v-1.801c0-2.447 1.016-3.903 3.903-3.903h2.403v3H18.87c-1.124 0-1.198.42-1.198 1.202l-.004 1.502h2.721l-.318 3h-2.403z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" href="https://www.instagram.com/7daysperformance/" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-cym-c64="" name="instagram-new" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.002.503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.164-16-16-16zm-3.518 7.518c.91-.041 1.201-.051 3.519-.051H16c2.319 0 2.608.01 3.518.051.909.042 1.53.186 2.073.397a4.17 4.17 0 011.511.984c.475.474.767.95.985 1.511.21.543.354 1.163.397 2.072.04.91.051 1.2.051 3.518 0 2.318-.01 2.608-.051 3.518-.043.908-.187 1.528-.397 2.071a4.189 4.189 0 01-.985 1.512c-.474.474-.949.767-1.51.985-.543.21-1.164.354-2.072.396-.91.041-1.2.052-3.518.052-2.317 0-2.608-.01-3.518-.052-.909-.042-1.529-.185-2.072-.396a4.18 4.18 0 01-1.511-.985 4.181 4.181 0 01-.984-1.512c-.211-.543-.355-1.163-.397-2.071-.04-.91-.051-1.2-.051-3.518 0-2.317.01-2.608.051-3.519.041-.908.185-1.528.397-2.07A4.19 4.19 0 018.9 9.401c.475-.475.95-.766 1.512-.984.543-.211 1.163-.355 2.071-.397z" fill="#C4C9CE"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.236 9.508h.766c2.278 0 2.548.008 3.448.05.832.037 1.283.176 1.584.293.398.155.682.34.98.638.3.299.484.583.64.981.116.3.255.752.293 1.585.041.9.05 1.17.05 3.447s-.009 2.547-.05 3.447c-.038.832-.177 1.283-.294 1.584-.154.398-.34.682-.638.98a2.637 2.637 0 01-.98.638c-.301.118-.753.256-1.585.294-.9.041-1.17.05-3.448.05-2.279 0-2.549-.009-3.449-.05-.832-.038-1.283-.177-1.584-.294a2.644 2.644 0 01-.981-.638 2.644 2.644 0 01-.64-.98c-.116-.301-.255-.753-.293-1.585-.04-.9-.049-1.17-.049-3.448 0-2.28.008-2.548.049-3.448.038-.832.177-1.283.294-1.584.155-.398.34-.683.639-.981.298-.299.583-.484.98-.639.302-.117.753-.256 1.585-.294.788-.036 1.093-.046 2.683-.048v.002zm5.32 1.417a1.024 1.024 0 100 2.048 1.024 1.024 0 000-2.049zm-8.936 5.578a4.382 4.382 0 118.765 0 4.382 4.382 0 01-8.765 0z" fill="#C4C9CE"></path>
                                                    <path d="M16.003 13.66a2.845 2.845 0 110 5.688 2.845 2.845 0 010-5.689z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                    <li _ngcontent-cym-c64=""><a _ngcontent-cym-c64="" href="https://www.youtube.com/channel/UCxB-y6oGP1lSCHwoE2hKvmA" target="_blank" rel="nofollow" title="" class="footer__social-link">
                                            <svg-icon _ngcontent-cym-c64="" name="youtube-new" _nghost-cym-c61="" role="img"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33" style="fill: currentcolor;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 .503c-8.837 0-16 7.164-16 16 0 8.837 7.163 16 16 16s16-7.163 16-16c0-8.836-7.163-16-16-16zm6.668 10.5a2.166 2.166 0 011.509 1.55c.356 1.366.356 4.217.356 4.217s0 2.852-.356 4.218a2.167 2.167 0 01-1.51 1.55c-1.33.366-6.667.366-6.667.366s-5.337 0-6.668-.366a2.167 2.167 0 01-1.509-1.55c-.356-1.366-.356-4.218-.356-4.218s0-2.851.356-4.217a2.167 2.167 0 011.51-1.55c1.33-.366 6.667-.366 6.667-.366s5.337 0 6.668.366z" fill="#C4C9CE"></path>
                                                    <path d="M14.4 19.703V14.37l4.267 2.666-4.267 2.667z" fill="#C4C9CE"></path>
                                                </svg></svg-icon>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </app-footer>
            </app-checkout>
            <!---->
        </div>
    </div>
</div>
@endsection

@section('styles')
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

        .product[_ngcontent-cym-c88] {
            font-family: Exo, sans-serif;
            text-align: center
        }

        @media (min-width: 992px) {
            .product[_ngcontent-cym-c88] {
                text-align: left;
                padding-top: 40px
            }
        }

        @media (max-width: 991.4px) {
            .product[_ngcontent-cym-c88]>.container[_ngcontent-cym-c88] {
                margin: 0;
                padding: 0;
                width: 100%;
                max-width: 100%
            }
        }

        .product__top-details[_ngcontent-cym-c88] {
            display: block
        }

        @media (min-width: 992px) {
            .product__top-details[_ngcontent-cym-c88] {
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
            .product__details-left[_ngcontent-cym-c88] {
                max-width: 450px;
                margin: 0 auto
            }
        }

        @media (min-width: 992px) {
            .product__details-left[_ngcontent-cym-c88] {
                -webkit-flex: 0 0 48%;
                flex: 0 0 48%;
                margin-bottom: 40px
            }
        }

        @media (min-width: 992px) {
            .product__details-right[_ngcontent-cym-c88] {
                -webkit-flex: 0 0 46%;
                flex: 0 0 46%
            }
        }

        .product__details-right-content[_ngcontent-cym-c88] {
            padding: 0 20px;
            max-width: 440px;
            margin: 0 auto
        }

        @media (min-width: 992px) {
            .product__details-right-content[_ngcontent-cym-c88] {
                padding: 0;
                max-width: 100%
            }
        }

        .product__title[_ngcontent-cym-c88] {
            font-weight: 900;
            font-size: 28px;
            line-height: 32px;
            text-transform: uppercase;
            color: #00131f;
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .product__title[_ngcontent-cym-c88] {
                font-weight: 800;
                font-size: 40px;
                line-height: 48px;
                margin-top: 24px
            }
        }

        .product__alternative[_ngcontent-cym-c88] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__alternative[_ngcontent-cym-c88] {
                font-weight: 500;
                font-size: 14px;
                line-height: 20px
            }
        }

        .product__price[_ngcontent-cym-c88] {
            font-weight: 900;
            font-size: 28px;
            line-height: 32px;
            color: #2aa8f8;
            text-align: center;
            text-transform: uppercase;
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .product__price[_ngcontent-cym-c88] {
                text-align: left;
                font-weight: 800;
                font-size: 40px;
                line-height: 48px;
                margin: 16px 0 19px
            }
        }

        .product__price-old[_ngcontent-cym-c88] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 11px
        }

        @media (min-width: 992px) {
            .product__price-old[_ngcontent-cym-c88] {
                font-weight: 700;
                font-size: 32px;
                line-height: 42px;
                margin-right: 16px
            }
        }

        .product__discount-timer[_ngcontent-cym-c88] {
            display: -webkit-flex;
            display: flex;
            font-weight: 500;
            font-size: 14px;
            line-height: 20px;
            margin: 8px 0 9px;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__discount-timer[_ngcontent-cym-c88] {
                text-align: left;
                margin-bottom: 19px
            }
        }

        .product__discount-label[_ngcontent-cym-c88] {
            color: #939ca4
        }

        .product__discount-clock[_ngcontent-cym-c88] {
            color: #00131f
        }

        .product__sold[_ngcontent-cym-c88] {
            font-weight: 500;
            font-size: 12px;
            line-height: 16px;
            text-transform: uppercase;
            color: #939ca4;
            margin-bottom: 7px
        }

        @media (min-width: 992px) {
            .product__sold[_ngcontent-cym-c88] {
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 12px
            }
        }

        .product__conditions[_ngcontent-cym-c88] {
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
            .product__conditions[_ngcontent-cym-c88] {
                gap: 16px
            }
        }

        .product__condition[_ngcontent-cym-c88] {
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
            .product__condition[_ngcontent-cym-c88] {
                margin-top: 0;
                -webkit-flex-direction: row;
                flex-direction: row;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                -webkit-flex: 0 0 calc(50% - 8px);
                flex: 0 0 calc(50% - 8px)
            }
        }

        .product__condition[_ngcontent-cym-c88]:first-child span[_ngcontent-cym-c88] {
            width: 100%
        }

        @media (min-width: 992px) {
            .product__condition[_ngcontent-cym-c88]:first-child span[_ngcontent-cym-c88] {
                width: auto
            }
        }

        .product__condition-label[_ngcontent-cym-c88] {
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
            .product__condition-label[_ngcontent-cym-c88] {
                width: auto;
                margin: 2px 0 0 8px
            }
        }

        @media (min-width: 1200px) {
            .product__condition-label[_ngcontent-cym-c88] {
                white-space: nowrap
            }
        }

        .product__condition-icon[_ngcontent-cym-c88] {
            height: 24px;
            width: 24px;
            color: #fff
        }

        .product__condition-icon--gray[_ngcontent-cym-c88] {
            color: #939ca4 !important
        }

        .product__condition-icon--h-short[_ngcontent-cym-c88] {
            width: 20px;
            height: 23px
        }

        .product__info-holder[_ngcontent-cym-c88] {
            vertical-align: baseline;
            position: relative;
            font-size: 14px;
            line-height: 14px
        }

        .product__info-outer[_ngcontent-cym-c88] {
            cursor: pointer;
            padding: 5px;
            position: absolute;
            top: -4px;
            left: 0
        }

        .product__info-icon[_ngcontent-cym-c88] {
            width: 16px;
            height: 16px;
            color: #0490e9
        }

        .product__postalentry[_ngcontent-cym-c88] {
            font-size: 14px;
            text-align: left
        }

        .product__trustpilot[_ngcontent-cym-c88] {
            padding: 35px 0;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            border-bottom: 1px solid #E9EBED
        }

        .product__trustpilot[_ngcontent-cym-c88] svg-icon[_ngcontent-cym-c88]:first-child {
            width: 106px;
            height: 20px;
            margin-right: 13px
        }

        .product__trustpilot[_ngcontent-cym-c88] svg-icon[_ngcontent-cym-c88]:nth-child(2) {
            width: 14px;
            height: 13.2px;
            display: -webkit-flex;
            display: flex;
            margin-right: 4px
        }

        .product__trustpilot[_ngcontent-cym-c88] span[_ngcontent-cym-c88] {
            font-size: 12px;
            color: #00131f;
            font-weight: 700
        }

        .product__instant[_ngcontent-cym-c88] {
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        .product__instant-title[_ngcontent-cym-c88] {
            font-weight: 700;
            font-size: 20px;
            line-height: 1;
            margin: 0;
            padding-bottom: 30px;
            color: #00131f;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__instant-title[_ngcontent-cym-c88] {
                font-weight: 800;
                font-size: 32px;
                line-height: 32px;
                text-align: left;
                text-transform: uppercase;
                padding-bottom: 40px
            }
        }

        .product__instant-sort-icon[_ngcontent-cym-c88] {
            width: 24px;
            height: 14px
        }

        .product__instant-sort[_ngcontent-cym-c88] {
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

        .product__instant-sort[_ngcontent-cym-c88] select[_ngcontent-cym-c88] {
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

        .product__instant-sort[_ngcontent-cym-c88] select[_ngcontent-cym-c88]::-ms-expand {
            display: none
        }

        .product__instant-tickets[_ngcontent-cym-c88] {
            display: -webkit-flex;
            display: flex;
            gap: 7px;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .product__instant-ticket[_ngcontent-cym-c88] {
            width: calc(25% - 5.25px)
        }

        @media (max-width: 767.9px) {
            .product__instant-ticket[_ngcontent-cym-c88] {
                width: calc(33.3333333333% - 4.6666666667px)
            }
        }

        @media (max-width: 489.9px) {
            .product__instant-ticket[_ngcontent-cym-c88] {
                width: calc(50% - 3.5px)
            }
        }

        .product__main-details[_ngcontent-cym-c88] {
            text-align: left;
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        .product__main-details[_ngcontent-cym-c88] h3[_ngcontent-cym-c88] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .product__main-details[_ngcontent-cym-c88] h3[_ngcontent-cym-c88] {
                font-weight: 500;
                font-size: 14px
            }
        }

        .product__main-details[_ngcontent-cym-c88] ul[_ngcontent-cym-c88] {
            padding-left: 15px
        }

        .product__main-details[_ngcontent-cym-c88] ul[_ngcontent-cym-c88] li[_ngcontent-cym-c88] {
            font-weight: 600;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: -.01em;
            color: #000;
            margin-bottom: 12px;
            list-style: square
        }

        @media (min-width: 992px) {
            .product__main-details[_ngcontent-cym-c88] ul[_ngcontent-cym-c88] li[_ngcontent-cym-c88] {
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;
                color: #00131f
            }
        }

        .product__main-details[_ngcontent-cym-c88] ul[_ngcontent-cym-c88] li[_ngcontent-cym-c88] a[_ngcontent-cym-c88] {
            color: #2aa8f8
        }

        .product__share[_ngcontent-cym-c88] {
            padding-bottom: 40px;
            border-bottom: 1px solid #E9EBED
        }

        @media (min-width: 992px) {
            .product__share[_ngcontent-cym-c88] {
                border-bottom: none;
                padding-bottom: 72px
            }
        }

        .product__share-label[_ngcontent-cym-c88] {
            text-align: left;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            color: #939ca4;
            margin-bottom: 12px
        }

        @media (min-width: 992px) {
            .product__share-label[_ngcontent-cym-c88] {
                font-size: 14px
            }
        }

        .product__share-icons[_ngcontent-cym-c88] {
            display: grid
        }

        .product__payments[_ngcontent-cym-c88] {
            padding: 28px 0
        }

        @media (min-width: 992px) {
            .product__payments[_ngcontent-cym-c88] {
                padding: 42px 0
            }
        }

        .product__error[_ngcontent-cym-c88] {
            color: red;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.2;
            text-align: center;
            padding-top: 4px
        }

        .product__slider-label[_ngcontent-cym-c88] {
            font-weight: 500;
            font-size: 11px;
            line-height: 11px;
            text-transform: uppercase;
            color: #939ca4;
            text-align: center;
            padding-top: 8px
        }

        @media (min-width: 992px) {
            .product__slider-label[_ngcontent-cym-c88] {
                font-size: 12px;
                line-height: 12px;
                padding-top: 8px
            }
        }

        .product__slider[_ngcontent-cym-c88] * {
            cursor: default !important
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal {
            margin: 0;
            height: 5px;
            background: #E9EBED;
            border: none;
            cursor: auto
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-cym-c88] .noUi-horizontal {
                height: 7px
            }
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal-shadowcsshost-no-combinator {
            margin: 0
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal .noUi-tooltip {
            display: none
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal.noUi-target,
        .product__slider[_ngcontent-cym-c88] .noUi-horizontal.noUi-target * {
            touch-action: pan-y !important
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle {
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
            .product__slider[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle {
                width: 21px;
                height: 21px;
                top: -8px
            }
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle:before,
        .product__slider[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .product__slider[_ngcontent-cym-c88] .noUi-horizontal .noUi-connect {
            background: #2AA8F8
        }

        @media (min-width: 992px) {
            .product__slider[_ngcontent-cym-c88] .min .noUi-handle {
                right: -20px
            }
        }

        .product__slider[_ngcontent-cym-c88] .increaseRight .noUi-horizontal .noUi-handle {
            right: -1px
        }

        .product[_ngcontent-cym-c88] .sub-alert_error[_ngcontent-cym-c88] {
            margin-top: -10px;
            position: relative;
            padding-bottom: 20px;
            color: #e33333
        }

        .product__drawtime-container[_ngcontent-cym-c88] {
            margin: 20px 0 0;
            text-align: center
        }

        @media (min-width: 992px) {
            .product__drawtime-container[_ngcontent-cym-c88] {
                text-align: left;
                margin: 0
            }
        }

        .product__drawtime[_ngcontent-cym-c88] {
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
            .product__drawtime[_ngcontent-cym-c88] {
                text-align: left;
                margin-left: 0
            }
        }

        @media (min-width: 992px) {
            .product__drawtime[_ngcontent-cym-c88] {
                font-size: 16px
            }
        }

        .product__drawtime--soon[_ngcontent-cym-c88] {
            background-color: #2aa8f8;
            color: #fff
        }

        .product__drawtime--urgent[_ngcontent-cym-c88] {
            background-color: #40d586;
            color: #fff
        }

        .ticket__question[_ngcontent-cym-c88] h3[_ngcontent-cym-c88] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            text-align: center;
            margin-top: 32px;
            margin-bottom: 0;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-cym-c88] h3[_ngcontent-cym-c88] {
                text-align: left;
                margin-top: 24px
            }
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-cym-c88] h3[_ngcontent-cym-c88] {
                font-size: 14px
            }
        }

        .ticket__question[_ngcontent-cym-c88] h2[_ngcontent-cym-c88] {
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
            .ticket__question[_ngcontent-cym-c88] h2[_ngcontent-cym-c88] {
                text-align: left;
                margin: 11px 0 24px
            }
        }

        @media (min-width: 992px) {
            .ticket__question[_ngcontent-cym-c88] h2[_ngcontent-cym-c88] {
                font-weight: 600;
                font-size: 24px;
                line-height: 28px
            }
        }

        .ticket__answers[_ngcontent-cym-c88] {
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
            .ticket__answers[_ngcontent-cym-c88] {
                margin-bottom: 24px;
                gap: 8px
            }
        }

        .ticket__answer[_ngcontent-cym-c88] {
            text-align: center;
            -webkit-flex: 1 0 47%;
            flex: 1 0 47%
        }

        .ticket__answer[_ngcontent-cym-c88] .bg[_ngcontent-cym-c88] {
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
            .ticket__answer[_ngcontent-cym-c88] .bg[_ngcontent-cym-c88] {
                font-size: 11px
            }
        }

        @media (min-width: 992px) {
            .ticket__answer[_ngcontent-cym-c88] .bg[_ngcontent-cym-c88] {
                font-size: 16px;
                font-weight: 600
            }
        }

        .ticket__answer[_ngcontent-cym-c88] .bg[_ngcontent-cym-c88] .text[_ngcontent-cym-c88] {
            display: block;
            -webkit-flex: 0 1 auto;
            flex: 0 1 auto;
            text-align: center;
            position: relative
        }

        .ticket__answer[_ngcontent-cym-c88] .bg[_ngcontent-cym-c88] .text[_ngcontent-cym-c88]>.text2[_ngcontent-cym-c88] {
            display: inline;
            width: auto;
            position: relative
        }

        .ticket__answer[_ngcontent-cym-c88] input[_ngcontent-cym-c88] {
            display: none
        }

        .ticket__answer[_ngcontent-cym-c88] input[_ngcontent-cym-c88]:checked+.bg[_ngcontent-cym-c88] {
            border: 1.5px solid #2AA8F8;
            background-color: #fff;
            color: #2aa8f8;
            position: relative
        }

        .ticket__answer[_ngcontent-cym-c88] input[_ngcontent-cym-c88]:checked+.bg[_ngcontent-cym-c88] .text[_ngcontent-cym-c88] .text2[_ngcontent-cym-c88]:before {
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

        .ticket__tickets[_ngcontent-cym-c88] {
            background-color: #f5f6f7;
            border: 1px solid #E9EBED;
            padding: 32px 0
        }

        @media (min-width: 992px) {
            .ticket__tickets[_ngcontent-cym-c88] {
                padding: 24px 32px;
                border-radius: 12px
            }
        }

        .ticket__tickets[_ngcontent-cym-c88] h2[_ngcontent-cym-c88] {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #00131f;
            letter-spacing: -.01em;
            margin: 0 0 60px
        }

        @media (min-width: 992px) {
            .ticket__tickets[_ngcontent-cym-c88] h2[_ngcontent-cym-c88] {
                font-weight: 600;
                font-size: 24px;
                line-height: 28px;
                margin-bottom: 76px
            }
        }

        .ticket__entry-option[_ngcontent-cym-c88] {
            background: #E9EBED;
            border-radius: 4px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: stretch;
            align-items: stretch;
            width: 100%;
            max-width: 240px;
            margin: 32px auto 8px;
            font-weight: 700;
            color: #939ca4;
            font-size: 8px;
            line-height: 8px;
            text-transform: uppercase;
            text-align: center
        }

        @media (min-width: 992px) {
            .ticket__entry-option[_ngcontent-cym-c88] {
                margin-top: 24px
            }
        }

        .ticket__entry-option[_ngcontent-cym-c88] div[_ngcontent-cym-c88] {
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

        .ticket__entry-option[_ngcontent-cym-c88] div[_ngcontent-cym-c88]>span[_ngcontent-cym-c88] {
            display: block
        }

        .ticket__entry-option--active[_ngcontent-cym-c88] {
            border: 1px solid #939CA4 !important;
            background-color: #fff;
            border-radius: 4px
        }

        .ticket__entry-option--free[_ngcontent-cym-c88] {
            margin-top: 32px
        }

        .ticket__labels[_ngcontent-cym-c88] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .ticket__label[_ngcontent-cym-c88] {
            font-weight: 600;
            font-size: 12px;
            line-height: 12px;
            color: #6e7a84
        }

        .ticket__quantities[_ngcontent-cym-c88] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 12px
        }

        .ticket__quantity[_ngcontent-cym-c88] {
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

        .ticket__quantity--disabled[_ngcontent-cym-c88] {
            background-color: #e9ebed;
            box-shadow: none;
            color: #c4c9ce
        }

        .ticket__total[_ngcontent-cym-c88] {
            color: #6e7a84;
            font-weight: 500;
            font-size: 16px;
            line-height: 20px
        }

        @media (min-width: 992px) {
            .ticket__total[_ngcontent-cym-c88] {
                font-size: 20px;
                line-height: 24px
            }
        }

        .ticket__total[_ngcontent-cym-c88] span[_ngcontent-cym-c88] {
            font-weight: 900
        }

        .ticket__add[_ngcontent-cym-c88] {
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
            .ticket__add[_ngcontent-cym-c88] {
                font-weight: 600;
                font-size: 20px;
                line-height: 24px;
                letter-spacing: -.01em
            }
        }

        .ticket__add[_ngcontent-cym-c88]:hover {
            background-color: #52b8f9
        }

        .ticket__add[_ngcontent-cym-c88]:disabled {
            opacity: .4;
            cursor: default;
            pointer-events: none;
            -webkit-filter: saturate(10%);
            filter: saturate(10%)
        }

        .ticket__add-ticket[_ngcontent-cym-c88] {
            margin-left: 12px;
            height: 24px;
            width: 24px
        }

        .ticket__add-loading[_ngcontent-cym-c88] {
            margin-right: 8px;
            height: 20px;
            width: 20px
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal {
            height: 5px;
            background: #E9EBED;
            border: none;
            position: relative
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal:after {
            content: "";
            position: absolute;
            right: 1px;
            width: 1px;
            height: 5.5px;
            bottom: -5.5px;
            background: #6E7A84
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal:before {
            content: "";
            position: absolute;
            left: 1px;
            width: 1px;
            height: 5.5px;
            bottom: -5.5px;
            background: #6E7A84
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle {
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

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle:before,
        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-handle:after {
            display: none
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-connect {
            background: #2AA8F8
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-origin {
            transition: none !important
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-tooltip {
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

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-tooltip:before {
            transition: border-top-color .2s;
            position: absolute;
            bottom: -5px;
            left: calc(50% - 1.5px);
            content: "";
            width: 2px;
            height: 5px;
            background-color: #2aa8f8
        }

        .ticket[_ngcontent-cym-c88] .noUi-horizontal .noUi-tooltip:after {
            content: "";
            display: inline-block;
            width: 12px;
            height: 16px;
            background: url(/assets/svg-icons/ticket-small.svg);
            background-size: cover;
            background-position: center;
            margin-left: 5px
        }

        .ticket[_ngcontent-cym-c88] .min .noUi-tooltip {
            width: 60px;
            left: 25px
        }

        .ticket[_ngcontent-cym-c88] .min .noUi-tooltip:before {
            left: 10px
        }

        .ticket[_ngcontent-cym-c88] .max .noUi-tooltip {
            left: -26px;
            width: 82px
        }

        .ticket[_ngcontent-cym-c88] .max .noUi-tooltip:before {
            right: 5.5px;
            left: auto;
            left: initial
        }

        .ticket[_ngcontent-cym-c88] .noUi-target {
            box-shadow: none
        }

        @media (max-width: 767.9px) {
            .ticket[_ngcontent-cym-c88] .noUi-target {
                width: 100%
            }
        }

        .product-rating[_ngcontent-cym-c88] {
            margin: 32px 0;
            border-bottom: 1px solid #E9EBED;
            padding-bottom: 32px
        }

        @media (min-width: 992px) {
            .product-rating[_ngcontent-cym-c88] {
                margin: 40px 0;
                padding-bottom: 40px
            }
        }

        .preview[_ngcontent-cym-c88] {
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
            .preview[_ngcontent-cym-c88] {
                position: absolute;
                left: 0;
                top: 0
            }
        }

        @media (max-width: 767.9px) {
            .preview[_ngcontent-cym-c88] {
                text-align: center
            }

            .preview[_ngcontent-cym-c88] br[_ngcontent-cym-c88] {
                display: none
            }
        }

        .preview__outer[_ngcontent-cym-c88] {
            position: relative
        }

        .closed-raffle[_ngcontent-cym-c88] {
            text-align: center;
            padding: 70px 0 35px
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

        .header[_ngcontent-cym-c63] {
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
            .header[_ngcontent-cym-c63] {
                height: 100px
            }
        }

        @media (min-width: 992px) {
            .header--short[_ngcontent-cym-c63] {
                height: 62px
            }
        }

        .header__nav[_ngcontent-cym-c63] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            margin-left: auto
        }

        @media (min-width: 1200px) {
            .header__button_sm[_ngcontent-cym-c63] {
                display: none !important
            }
        }

        .logo[_ngcontent-cym-c63] {
            padding: 0 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (min-width: 576px) {
            .logo[_ngcontent-cym-c63] {
                padding: 0 30px
            }
        }

        @media (min-width: 768px) {
            .logo[_ngcontent-cym-c63] {
                padding: 0 40px
            }
        }

        .logo__img[_ngcontent-cym-c63] {
            width: auto;
            height: 35px;
            transition: width .2s ease-in-out, height .2s ease-in-out
        }

        @media (min-width: 330px) {
            .logo__img[_ngcontent-cym-c63] {
                height: 40px
            }
        }

        @media (min-width: 360px) {
            .logo__img[_ngcontent-cym-c63] {
                height: 45px
            }
        }

        @media (min-width: 992px) {
            .logo__img[_ngcontent-cym-c63] {
                height: 56px
            }
        }

        @media (min-width: 768px) {
            .header--short[_ngcontent-cym-c63] .logo__img[_ngcontent-cym-c63] {
                height: 45px
            }
        }

        .main-nav[_ngcontent-cym-c63] {
            display: none
        }

        @media (min-width: 1200px) {
            .main-nav[_ngcontent-cym-c63] {
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

        .main-nav__item[_ngcontent-cym-c63] {
            height: 100%
        }

        .main-nav__link[_ngcontent-cym-c63] {
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
            .main-nav__link[_ngcontent-cym-c63] {
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

        .nav-button[_ngcontent-cym-c63] {
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
            .nav-button[_ngcontent-cym-c63] {
                width: 81px
            }
        }

        @media (min-width: 992px) {
            .nav-button[_ngcontent-cym-c63] {
                width: 101px
            }
        }

        .nav-button[_ngcontent-cym-c63]:hover,
        .nav-button[_ngcontent-cym-c63]:focus {
            outline: 0;
            background-color: #f6f7f9
        }

        .nav-button__icon[_ngcontent-cym-c63] {
            color: #6e7191;
            width: 20px;
            height: 20px
        }

        .nav-button__icon_hamburger[_ngcontent-cym-c63] {
            width: 24px;
            height: 24px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_hamburger[_ngcontent-cym-c63] {
                height: 22px;
                width: 20px
            }
        }

        .nav-button__icon_shopping-cart[_ngcontent-cym-c63] {
            width: 22px;
            height: 22px
        }

        @media (max-width: 767.9px) {
            .nav-button__icon_shopping-cart[_ngcontent-cym-c63] {
                width: 20px;
                height: 20px
            }
        }

        .nav-button__label[_ngcontent-cym-c63] {
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
            .nav-button__label[_ngcontent-cym-c63] {
                min-width: 22px;
                height: 22px;
                line-height: 22px;
                padding: 0 4px;
                font-size: 14px
            }
        }

        .nav-button__loading[_ngcontent-cym-c63] {
            display: inline-block;
            width: 14px
        }

        .mobile-menu[_ngcontent-cym-c63] {
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

        .mobile-menu_shown[_ngcontent-cym-c63] {
            background-color: rgba(0, 0, 0, .78);
            pointer-events: all
        }

        .mobile-menu__panel[_ngcontent-cym-c63] {
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

        .mobile-menu_shown[_ngcontent-cym-c63] .mobile-menu__panel[_ngcontent-cym-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close[_ngcontent-cym-c63] {
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

        .mobile-menu__close[_ngcontent-cym-c63]:hover,
        .mobile-menu__close[_ngcontent-cym-c63]:focus {
            color: #ea1c0d;
            outline: none
        }

        .mobile-menu_shown[_ngcontent-cym-c63] .mobile-menu__close[_ngcontent-cym-c63] {
            -webkit-transform: translateX(0);
            transform: translate(0)
        }

        .mobile-menu__close-icon[_ngcontent-cym-c63] {
            width: 60px;
            height: 60px
        }

        .mobile-menu__nav[_ngcontent-cym-c63] {
            margin-bottom: 25px;
            padding: 0 13px 37px;
            border-bottom: 1px solid #0a2539
        }

        .mobile-menu__nav-list[_ngcontent-cym-c63] {
            margin: 0;
            padding: 0
        }

        .mobile-menu__item[_ngcontent-cym-c63] {
            list-style-type: none
        }

        .mobile-menu__divider[_ngcontent-cym-c63] {
            height: 1px;
            display: block;
            margin: 13px;
            width: calc(100% - 26px);
            background-color: #5a7b93
        }

        .mobile-menu__title[_ngcontent-cym-c63] {
            color: #449bd8;
            font-size: 14px;
            display: block;
            padding: 16px 13px 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase
        }

        .mobile-menu__link[_ngcontent-cym-c63] {
            display: inline-block;
            font-size: 16px;
            line-height: 1;
            padding: 13px;
            color: #f6f7f9;
            cursor: pointer;
            transition: color .3s;
            text-decoration: none
        }

        .mobile-menu__link[_ngcontent-cym-c63]:hover {
            color: #d7dce5
        }

        .mobile-menu__bottom-wrapper[_ngcontent-cym-c63] {
            padding: 0 25.5px
        }

        .mobile-menu__text[_ngcontent-cym-c63] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
            line-height: 29px;
            color: #fff
        }

        .mobile-menu__socials[_ngcontent-cym-c63] {
            display: -webkit-flex;
            display: flex;
            margin: 0 -12px
        }

        .mobile-menu__social-link[_ngcontent-cym-c63] {
            display: inline-block;
            padding: 0 12px;
            text-decoration: none
        }

        .mobile-menu__social-icon[_ngcontent-cym-c63] {
            width: 40px;
            height: 40px
        }

        .native-nav[_ngcontent-cym-c63] {
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

        .native-nav__button[_ngcontent-cym-c63] {
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

        .native-nav__button[_ngcontent-cym-c63]:hover {
            color: rgba(0, 0, 0, .7);
            text-decoration: none
        }

        .native-nav__button_inactive[_ngcontent-cym-c63] {
            color: rgba(0, 0, 0, .3) !important
        }

        .native-nav__icon[_ngcontent-cym-c63] {
            font-size: 15px;
            line-height: 18px
        }

        .native-nav__label[_ngcontent-cym-c63] {
            font-size: 12px;
            line-height: 18px;
            padding-top: 1px
        }

        .header-container[_ngcontent-cym-c63] {
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

        .header-placeholder[_ngcontent-cym-c63] {
            height: 100px;
            width: 100%
        }

        @media (max-width: 991.9px) {
            .header-placeholder[_ngcontent-cym-c63] {
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

        .footer[_ngcontent-cym-c64] {
            text-align: center;
            padding: 40px 0;
            font-family: Exo, sans-serif;
            background-color: #f5f6f7
        }

        @media (min-width: 992px) {
            .footer[_ngcontent-cym-c64] {
                padding: 80px 40px
            }
        }

        .footer[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] {
            padding: 0
        }

        .footer[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] li[_ngcontent-cym-c64] {
            list-style: none
        }

        @media (min-width: 992px) {
            .footer__wrapper[_ngcontent-cym-c64] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }

        .footer__logo[_ngcontent-cym-c64] {
            display: inline-block
        }

        .footer__logo-image[_ngcontent-cym-c64] {
            height: 45px;
            display: inline-block
        }

        @media (min-width: 992px) {
            .footer__logo-image[_ngcontent-cym-c64] {
                height: 55px
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-cym-c64] {
                display: -webkit-flex;
                display: flex
            }
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] {
                text-align: left;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin: 0 0 0 104px;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content
            }
        }

        .footer__links[_ngcontent-cym-c64] li[_ngcontent-cym-c64] {
            margin-bottom: 12px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .footer__links[_ngcontent-cym-c64] li[_ngcontent-cym-c64] {
                margin-right: 137px
            }
        }

        .footer__links[_ngcontent-cym-c64] li[_ngcontent-cym-c64] a[_ngcontent-cym-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__links[_ngcontent-cym-c64] li[_ngcontent-cym-c64] a[_ngcontent-cym-c64]:hover {
            text-decoration: underline
        }

        .footer__social-email[_ngcontent-cym-c64] {
            color: #00131f;
            text-decoration: none
        }

        .footer__social-email[_ngcontent-cym-c64]:hover {
            text-decoration: underline
        }

        .footer__social[_ngcontent-cym-c64] {
            margin-top: 20px
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-cym-c64] {
                margin-top: 0;
                text-align: right
            }
        }

        .footer__social[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 992px) {
            .footer__social[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] {
                -webkit-justify-content: end;
                justify-content: end;
                margin-top: 96px;
                margin-bottom: 0
            }
        }

        .footer__social[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] li[_ngcontent-cym-c64] {
            margin: 0 6px
        }

        .footer__social[_ngcontent-cym-c64] ul[_ngcontent-cym-c64] li[_ngcontent-cym-c64] svg-icon[_ngcontent-cym-c64] {
            width: 32px;
            height: 32px
        }

        .footer__social[_ngcontent-cym-c64] p[_ngcontent-cym-c64] {
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f
        }

        .footer__social[_ngcontent-cym-c64] p.footer__annotation--light[_ngcontent-cym-c64],
        .footer__social[_ngcontent-cym-c64] p[_ngcontent-cym-c64] a.footer__annotation--light[_ngcontent-cym-c64] {
            color: rgba(0, 19, 31, .33)
        }

        .footer__social-link[_ngcontent-cym-c64]:hover {
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

    </style>
    <style>
        [_nghost-cym-c61] {
            display: inline-block;
            width: 100%;
            height: 100%
        }

        [_nghost-cym-c61] .svg-icon,
        [_nghost-cym-c61] svg {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            fill: currentColor
        }

        [_nghost-cym-c61] .svg-icon {
            width: auto;
            height: 100%;
            display: block
        }

        [_nghost-cym-c61] .svg-icon_star-path {
            fill: #000064
        }

        [_nghost-cym-c61] .svg-icon__fill_trustpilot {
            fill: #13b57a
        }

        [_nghost-cym-c61] .svg-icon__fill_default {
            fill: #fff
        }

        [_nghost-cym-c61] .svg-icon__cart-wheel {
            stroke: none;
            fill: #010101
        }

        [_nghost-cym-c61] .svg-icon__paypal {
            fill: #263b80
        }

        [_nghost-cym-c61] .svg-icon__paypal_light {
            fill: #139ad6
        }

        [_nghost-cym-c61] .svg-icon__paypal_shadow {
            fill: #139ad6
        }

        [_nghost-cym-c61] .svg-icon__paypal_cross {
            fill: #232c65
        }

        [_nghost-cym-c61] .svg-icon__facebook-full_letter {
            opacity: 0
        }

        [_nghost-cym-c61] .svg-icon__check {
            fill: none;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        [_nghost-cym-c61] .svg-icon__receive-email-line {
            stroke: currentColor
        }

        [_nghost-cym-c61] .svg-icon__circle {
            fill: none;
            stroke: currentColor
        }

        [_nghost-cym-c61] .svg-icon svg {
            width: 100%;
            height: 100%;
            display: inline-block
        }

        .spinning[_nghost-cym-c61] {
            -webkit-animation: rotate 1s linear infinite;
            animation: rotate 1s linear infinite;
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .svg-icon__footer-facebook[_nghost-cym-c61] .svg-icon__facebook-full_letter,
        .svg-icon__footer-facebook [_nghost-cym-c61] .svg-icon__facebook-full_letter {
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

        [_nghost-cym-c62] {
            display: block
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] {
            background-color: #00131f
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] .prompt-img__wrapper[_ngcontent-cym-c62] {
            overflow: hidden;
            border-radius: 8px;
            max-width: 40px;
            height: 40px;
            margin-right: 8px
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] .prompt-img__wrapper[_ngcontent-cym-c62] img[_ngcontent-cym-c62] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] .prompt-close-icon[_ngcontent-cym-c62] {
            max-width: 14px;
            height: 14px;
            margin-right: 12px;
            cursor: pointer;
            -webkit-filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%);
            filter: invert(85%) sepia(5%) saturate(8%) hue-rotate(3deg) brightness(90%) contrast(82%)
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] .prompt__content-title[_ngcontent-cym-c62] {
            color: #f5f6f7;
            font-size: 16px
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] .prompt__content-category[_ngcontent-cym-c62] {
            color: #b9b9b9;
            font-size: 10px
        }

        [_nghost-cym-c62] .prompt-container[_ngcontent-cym-c62] .prompt-btn[_ngcontent-cym-c62] {
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
            [_nghost-cym-c62] {
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

        .product-gallery__img[_ngcontent-cym-c87] {
            display: block;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .product-gallery__image-text-cover[_ngcontent-cym-c87] {
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

        .product-gallery__image-red-cover[_ngcontent-cym-c87] {
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
            .product-gallery__image-red-cover[_ngcontent-cym-c87] {
                left: 15px;
                right: 15px;
                font-size: 16px
            }
        }

        .product-gallery__photo[_ngcontent-cym-c87] {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
            position: relative
        }

        .product-gallery__thumb-carousel[_ngcontent-cym-c87] {
            width: calc(100% - 60px);
            margin: 10px auto 0;
            position: relative
        }

        @media (min-width: 992px) {
            .product-gallery__thumb-carousel[_ngcontent-cym-c87] {
                display: none
            }
        }

        .product-gallery__thumb-list[_ngcontent-cym-c87] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            gap: 10px;
            margin-top: 10px
        }

        @media (max-width: 991.9px) {
            .product-gallery__thumb-list[_ngcontent-cym-c87] {
                display: none
            }
        }

        .product-gallery__thumb[_ngcontent-cym-c87] {
            display: block;
            cursor: pointer
        }

        .product-gallery__thumb_regular[_ngcontent-cym-c87] {
            width: 100%;
            max-width: calc(16.6666666667% - 8.3333333333px)
        }

        @media (max-width: 1199.9px) {
            .product-gallery__thumb_regular[_ngcontent-cym-c87] {
                max-width: calc(20% - 8px)
            }
        }

        @media (max-width: 991.9px) {
            .product-gallery__thumb_regular[_ngcontent-cym-c87] {
                max-width: calc(25% - 7.5px)
            }
        }

        .product-gallery__button-prev[_ngcontent-cym-c87],
        .product-gallery__button-next[_ngcontent-cym-c87] {
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

        .product-gallery__button-prev.swiper-button-disabled[_ngcontent-cym-c87],
        .product-gallery__button-next.swiper-button-disabled[_ngcontent-cym-c87] {
            display: none
        }

        .product-gallery__button-show[_ngcontent-cym-c87] {
            opacity: 1
        }

        .product-gallery__button-prev[_ngcontent-cym-c87] {
            right: 100%;
            -webkit-transform-origin: left center;
            transform-origin: left center;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0Ij48cGF0aCBkPSJNMTUuNDEgMTYuNTlMMTAuODMgMTJsNC41OC00LjU5TDE0IDZsLTYgNiA2IDYgMS40MS0xLjQxeiIvPjxwYXRoIGQ9Ik0wIDBoMjR2MjRIMFYweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==)
        }

        .product-gallery__button-next[_ngcontent-cym-c87] {
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

        .faq[_ngcontent-cym-c81] {
            text-align: left;
            font-family: Exo, sans-serif
        }

        .faq__box[_ngcontent-cym-c81] {
            list-style-type: none;
            margin-top: 0;
            margin-bottom: 0;
            padding: 0
        }

        .faq__header[_ngcontent-cym-c81] {
            padding: 32px 0;
            border-bottom: 1px solid #E9EBED;
            cursor: pointer;
            color: gray;
            transition: color .2s;
            outline: 0
        }

        .faq__header[_ngcontent-cym-c81]:hover {
            color: #40d586;
            outline: 0
        }

        .faq_product[_ngcontent-cym-c81] .faq__header[_ngcontent-cym-c81] {
            position: relative;
            padding-right: 90px
        }

        .faq__title[_ngcontent-cym-c81] {
            margin: 0;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            letter-spacing: -.01em;
            color: #00131f;
            transition: color .3s
        }

        @media (min-width: 992px) {
            .faq__title[_ngcontent-cym-c81] {
                font-weight: 800;
                font-size: 32px;
                line-height: 32px
            }
        }

        .faq__arrow[_ngcontent-cym-c81] {
            position: absolute;
            top: 50%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 20px;
            height: 20px
        }

        .faq__arrow[_ngcontent-cym-c81]:before,
        .faq__arrow[_ngcontent-cym-c81]:after {
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

        .faq__arrow[_ngcontent-cym-c81]:before {
            background-image: url(/assets/svg-icons/arrow-right-black.svg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            opacity: 1
        }

        .faq__arrow[_ngcontent-cym-c81]:after {
            background-image: url(/assets/svg-icons/arrow-right-black.svg);
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
            opacity: 0
        }

        .faq_product-opened[_ngcontent-cym-c81] .faq__arrow[_ngcontent-cym-c81]:before {
            opacity: 0
        }

        .faq_product-opened[_ngcontent-cym-c81] .faq__arrow[_ngcontent-cym-c81]:after {
            opacity: 1
        }

        .faq__body[_ngcontent-cym-c81] {
            overflow: hidden
        }

        .faq__content[_ngcontent-cym-c81] {
            padding: 20px 0
        }

        .faq__content_center[_ngcontent-cym-c81] {
            text-align: center
        }

        .faq_product[_ngcontent-cym-c81] .faq__content[_ngcontent-cym-c81] {
            color: gray;
            font-weight: 400
        }

        .faq__paragraph[_ngcontent-cym-c81] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 26px
        }

        .faq__img[_ngcontent-cym-c81] {
            display: block;
            max-width: 100%;
            margin-bottom: 16px
        }

        .faq__bold[_ngcontent-cym-c81] {
            font-weight: 700
        }

        .faq__link[_ngcontent-cym-c81] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__link[_ngcontent-cym-c81]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__h2[_ngcontent-cym-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__h3[_ngcontent-cym-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 700;
            line-height: 29px;
            color: #000
        }

        .faq__h4[_ngcontent-cym-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq_product[_ngcontent-cym-c81] h2[_ngcontent-cym-c81] {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__content[_ngcontent-cym-c81] .faq__h2,
        .faq__content[_ngcontent-cym-c81] h2 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000
        }

        .faq__content[_ngcontent-cym-c81] .faq__h3,
        .faq__content[_ngcontent-cym-c81] h3 {
            margin: 0;
            font-size: 28px;
            font-weight: 400;
            line-height: 33.6px;
            color: #000
        }

        .faq__content[_ngcontent-cym-c81] .faq__h4,
        .faq__content[_ngcontent-cym-c81] h4 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000
        }

        .faq__content[_ngcontent-cym-c81] h5 {
            margin: 0;
            font-size: 20px;
            line-height: 24px;
            color: #000
        }

        .faq__content[_ngcontent-cym-c81] .faq__link,
        .faq__content[_ngcontent-cym-c81] a,
        .faq__content[_ngcontent-cym-c81] a:link {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .2s
        }

        .faq__content[_ngcontent-cym-c81] .faq__link:hover,
        .faq__content[_ngcontent-cym-c81] a:hover,
        .faq__content[_ngcontent-cym-c81] a:link:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .faq__content[_ngcontent-cym-c81] .faq__paragraph,
        .faq__content[_ngcontent-cym-c81] p {
            font-weight: 400;
            font-size: 17px;
            line-height: 25.5px;
            padding: 0;
            margin-top: 0;
            margin-bottom: 16px
        }

        .faq__content[_ngcontent-cym-c81] .faq__img,
        .faq__content[_ngcontent-cym-c81] img {
            max-width: 100%;
            height: auto !important
        }

        .faq__content[_ngcontent-cym-c81] .faq__img {
            display: block
        }

        .faq__content[_ngcontent-cym-c81] strong {
            font-weight: 700
        }

        .section_faq[_ngcontent-cym-c81] {
            padding-top: 0;
            padding-bottom: 40px
        }

    </style>
    <style>
        [_nghost-cym-c85] {
            display: inherit
        }

        .sb-group[_ngcontent-cym-c85],
        .sb-button[_ngcontent-cym-c85] {
            display: inline-flex;
            align-items: flex-start
        }

        .sb-group[_ngcontent-cym-c85] {
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

        .payments[_ngcontent-cym-c67] {
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
            .payments[_ngcontent-cym-c67] {
                gap: 15px
            }
        }

        @media (min-width: 992px) {
            .payments[_ngcontent-cym-c67] {
                padding: 42px 15px;
                gap: 33px
            }
        }

        .payments--nopadding[_ngcontent-cym-c67] {
            padding: 0
        }

        .payments__payment[_ngcontent-cym-c67] {
            height: 36px;
            width: calc(20% - 8px);
            max-width: 60px
        }

        @media (min-width: 768px) {
            .payments__payment[_ngcontent-cym-c67] {
                max-width: 80px
            }
        }

        .payments__payment[_ngcontent-cym-c67] svg-icon[_ngcontent-cym-c67] {
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
        [_nghost-cym-c46] {
            display: block;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

    </style>
    <style>
        [button=facebook][_nghost-cym-c83],
        [button=facebook] [_nghost-cym-c83] {
            --button-color: #4267B2
        }

        [button=twitter][_nghost-cym-c83],
        [button=twitter] [_nghost-cym-c83] {
            --button-color: #00acee
        }

        [button=google][_nghost-cym-c83],
        [button=google] [_nghost-cym-c83] {
            --button-color: #db4437
        }

        [button=mix][_nghost-cym-c83],
        [button=mix] [_nghost-cym-c83] {
            --button-color: #ff8226
        }

        [button=line][_nghost-cym-c83],
        [button=line] [_nghost-cym-c83] {
            --button-color: #00b900
        }

        [button=linkedin][_nghost-cym-c83],
        [button=linkedin] [_nghost-cym-c83] {
            --button-color: #006fa6
        }

        [button=pinterest][_nghost-cym-c83],
        [button=pinterest] [_nghost-cym-c83] {
            --button-color: #bd081c
        }

        [button=reddit][_nghost-cym-c83],
        [button=reddit] [_nghost-cym-c83] {
            --button-color: #ff4006
        }

        [button=tumblr][_nghost-cym-c83],
        [button=tumblr] [_nghost-cym-c83] {
            --button-color: #36465d
        }

        [button=whatsapp][_nghost-cym-c83],
        [button=whatsapp] [_nghost-cym-c83] {
            --button-color: #25d366
        }

        [button=messenger][_nghost-cym-c83],
        [button=messenger] [_nghost-cym-c83] {
            --button-color: #0080FF
        }

        [button=telegram][_nghost-cym-c83],
        [button=telegram] [_nghost-cym-c83] {
            --button-color: #0088cc
        }

        [button=xing][_nghost-cym-c83],
        [button=xing] [_nghost-cym-c83] {
            --button-color: #006567
        }

        [button=sms][_nghost-cym-c83],
        [button=sms] [_nghost-cym-c83] {
            --button-color: #20c16c
        }

        [button=email][_nghost-cym-c83],
        [button=email] [_nghost-cym-c83] {
            --button-color: #FF961C
        }

        [button=viber][_nghost-cym-c83],
        [button=viber] [_nghost-cym-c83] {
            --button-color: #665ca7
        }

        [button=vk][_nghost-cym-c83],
        [button=vk] [_nghost-cym-c83] {
            --button-color: #4C75A3
        }

        [button=copy][_nghost-cym-c83],
        [button=copy] [_nghost-cym-c83] {
            --button-color: #607D8B
        }

        [button=print][_nghost-cym-c83],
        [button=print] [_nghost-cym-c83] {
            --button-color: #765AA2
        }

        [button=expand][_nghost-cym-c83],
        [button=expand] [_nghost-cym-c83] {
            --button-color: #FF6651
        }

        button[_ngcontent-cym-c83] {
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

        .sb-icon[_ngcontent-cym-c83],
        .sb-text[_ngcontent-cym-c83] {
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .sb-content[_ngcontent-cym-c83] {
            flex: 1;
            display: flex;
            height: 100%;
            width: 100%;
            position: relative
        }

        .sb-text[_ngcontent-cym-c83] {
            flex: 1;
            height: 100%;
            white-space: nowrap;
            padding: 0 .7em;
            padding: var(--sb-text-padding, 0 .7em);
            font-weight: 700;
            font-weight: var(--sb-font-weight, bold)
        }

        .sb-icon[_ngcontent-cym-c83] {
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

        .competitions-wrapper[_ngcontent-cym-c76] {
            position: relative;
            overflow: hidden
        }

        .section[_ngcontent-cym-c76] {
            font-family: Exo, sans-serif;
            padding: 48px 0 80px
        }

        @media (min-width: 992px) {
            .section[_ngcontent-cym-c76] {
                padding: 56px 0 120px
            }
        }

        .section__header[_ngcontent-cym-c76] {
            font-weight: 800;
            font-size: 28px;
            text-align: left;
            line-height: 32px;
            margin-bottom: 32px;
            color: #00131f;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .section__header[_ngcontent-cym-c76] {
                text-align: center;
                margin-bottom: 36px;
                font-size: 40px;
                line-height: 48px
            }
        }

        .raffles-nav-container[_ngcontent-cym-c76] {
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

        [_nghost-cym-c73] {
            display: block;
            position: relative
        }

        .slider[_ngcontent-cym-c73] {
            position: relative;
            z-index: 1;
            background-color: #233543;
            height: calc(100vh - 110px);
            max-height: 860px
        }

        @media (max-width: 1199.9px) {
            .slider[_ngcontent-cym-c73] {
                max-height: 650px
            }
        }

        @media (max-width: 991.9px) {
            .slider[_ngcontent-cym-c73] {
                max-height: 650px;
                height: calc(100vh - 90px)
            }
        }

        @media (max-width: 767.9px) {
            .slider[_ngcontent-cym-c73] {
                max-height: 500px
            }
        }

        @media (max-width: 675.9px) {
            .slider[_ngcontent-cym-c73] {
                max-height: 400px
            }
        }

        @media (max-width: 575.9px) {
            .slider[_ngcontent-cym-c73] {
                max-height: 342px
            }
        }

        .slider__wrapper[_ngcontent-cym-c73] {
            z-index: 2;
            height: 100%;
            position: relative
        }

        .slider__enter-btn[_ngcontent-cym-c73] {
            z-index: 2;
            padding-top: 12px;
            padding-bottom: 24px
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-cym-c73] {
                padding-top: 24px;
                padding-bottom: 0;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0)
            }
        }

        .slider__enter-btn_secondary[_ngcontent-cym-c73] {
            padding-left: 20px;
            padding-right: 20px
        }

        .slider__enter-btn[_ngcontent-cym-c73] button[_ngcontent-cym-c73] {
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
            .slider__enter-btn[_ngcontent-cym-c73] button[_ngcontent-cym-c73] {
                width: auto;
                padding: 14px 24px 14px 32px;
                margin-left: 0
            }
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-cym-c73] button[_ngcontent-cym-c73] {
                font-size: 24px;
                line-height: 28px
            }
        }

        .slider__enter-btn[_ngcontent-cym-c73] button[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
            width: 24px;
            height: 24px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .slider__enter-btn[_ngcontent-cym-c73] button[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
                width: 29px;
                height: 29px;
                margin-left: 16px
            }
        }

        .slider__button[_ngcontent-cym-c73] {
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

        .slider__button[_ngcontent-cym-c73]:focus {
            outline: none
        }

        @media (max-width: 1199.9px) {
            .slider__button[_ngcontent-cym-c73] {
                width: 77px
            }
        }

        @media (max-width: 767.9px) {
            .slider__button[_ngcontent-cym-c73] {
                width: 40px
            }
        }

        .slider__button_prev[_ngcontent-cym-c73] {
            left: 0
        }

        .slider__button_next[_ngcontent-cym-c73] {
            right: 0
        }

        .slider__icon[_ngcontent-cym-c73] {
            width: 25px;
            height: 25px;
            -webkit-filter: drop-shadow(0 0 4px rgba(0, 0, 0, .5));
            filter: drop-shadow(0 0 4px rgba(0, 0, 0, .5))
        }

        .slider__button_next[_ngcontent-cym-c73] .slider__icon[_ngcontent-cym-c73] {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .slider__button-spacer[_ngcontent-cym-c73] {
            height: 72px;
            width: 100%;
            background: #00131F
        }

        @media (min-width: 991.9px) {
            .slider__button-spacer[_ngcontent-cym-c73] {
                display: none
            }
        }

        .slide[_ngcontent-cym-c73] {
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

        .slide_active[_ngcontent-cym-c73] {
            opacity: 1;
            pointer-events: all;
            transition: opacity .6s .2s
        }

        .slide__content[_ngcontent-cym-c73] {
            position: relative;
            height: 100%;
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-end;
            align-items: flex-end
        }

        .slide__image[_ngcontent-cym-c73] {
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
            .slide__image[_ngcontent-cym-c73] {
                background-position-y: 60%
            }
        }

        @media (min-width: 768px) {
            .slide__image[_ngcontent-cym-c73] {
                background-position-y: 58%
            }
        }

        @media (min-width: 992px) {
            .slide__image[_ngcontent-cym-c73] {
                background-position-y: 58%
            }
        }

        @media (min-width: 1200px) {
            .slide__image[_ngcontent-cym-c73] {
                background-position-y: 52%
            }
        }

        .slide__image_unloaded[_ngcontent-cym-c73] {
            opacity: 0
        }

        .slide__video[_ngcontent-cym-c73] {
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

        .slide__video[_ngcontent-cym-c73] video[_ngcontent-cym-c73] {
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

        .slide__video_unloaded[_ngcontent-cym-c73] {
            opacity: 0 !important
        }

        .slide__overlay[_ngcontent-cym-c73] {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .slide__texts[_ngcontent-cym-c73] {
            z-index: 2;
            width: 100%;
            padding: 0 20px
        }

        @media (max-width: 991.9px) {
            .slide__texts[_ngcontent-cym-c73] {
                margin-bottom: -72px
            }
        }

        @media (min-width: 992px) {
            .slide__texts[_ngcontent-cym-c73] {
                bottom: 180px;
                position: absolute;
                padding: 0 40px
            }
        }

        @media (min-width: 1200px) {
            .slide__texts[_ngcontent-cym-c73] {
                bottom: 184px
            }
        }

        .slide__title[_ngcontent-cym-c73] {
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
            .slide__title[_ngcontent-cym-c73] {
                font-size: 37px;
                line-height: 34px
            }
        }

        @media (min-width: 768px) {
            .slide__title[_ngcontent-cym-c73] {
                font-size: 40px;
                line-height: 36px
            }
        }

        @media (min-width: 992px) {
            .slide__title[_ngcontent-cym-c73] {
                width: 55%
            }
        }

        @media (min-width: 1200px) {
            .slide__title[_ngcontent-cym-c73] {
                font-size: 65px;
                line-height: 58px
            }
        }

        .slide__subtitle[_ngcontent-cym-c73] {
            color: #2aa8f8;
            font-weight: 800;
            font-size: 16px;
            line-height: 20px;
            font-family: Exo, sans-serif;
            margin: 8px 0 0;
            text-shadow: 0 0 10px rgba(0, 0, 0, .45)
        }

        @media (min-width: 576px) {
            .slide__subtitle[_ngcontent-cym-c73] {
                font-size: 20px;
                line-height: 24px
            }
        }

        @media (min-width: 992px) {
            .slide__subtitle[_ngcontent-cym-c73] {
                font-size: 32px;
                line-height: 32px;
                background: inherit;
                -webkit-backdrop-filter: blur(0);
                backdrop-filter: blur(0);
                margin-top: 20px;
                width: 55%
            }
        }

        .slide__gradient[_ngcontent-cym-c73] {
            background: linear-gradient(360deg, #00131F 30.08%, rgba(0, 0, 0, .3) 66.28%, rgba(0, 0, 0, 0) 100%);
            position: absolute;
            bottom: 0;
            height: 126px;
            width: 100%;
            z-index: 1;
            left: 0
        }

        .info-bar[_ngcontent-cym-c73] {
            background: #00131F;
            padding: 0 20px;
            z-index: 2;
            width: 100%
        }

        @media (min-width: 992px) {
            .info-bar[_ngcontent-cym-c73] {
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

        .info-bar__counters[_ngcontent-cym-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            padding: 30px 0
        }

        @media (min-width: 768px) and (max-width: 991.9px) {
            .info-bar__counters[_ngcontent-cym-c73] {
                padding: 41px 0 35px
            }
        }

        @media (max-width: 991.9px) {
            .info-bar__counters[_ngcontent-cym-c73] {
                border-top: 1px solid rgba(255, 255, 255, .3);
                border-bottom: 1px solid rgba(255, 255, 255, .3)
            }
        }

        .info-bar__counter[_ngcontent-cym-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        @media (max-width: 489.9px) {
            .info-bar__counter[_ngcontent-cym-c73] {
                -webkit-flex: 1 1 45%;
                flex: 1 1 45%
            }
        }

        @media (max-width: 489.9px) {
            .info-bar__counter[_ngcontent-cym-c73]:first-child {
                -webkit-flex: 0 1 45%;
                flex: 0 1 45%
            }
        }

        @media (min-width: 992px) {
            .info-bar__counter[_ngcontent-cym-c73]:first-child {
                padding-right: 75px
            }
        }

        .info-bar__icon[_ngcontent-cym-c73] {
            -webkit-flex: 0 0 48px;
            flex: 0 0 48px;
            height: 48px;
            text-align: center;
            background: #ffffff;
            border-radius: 7px;
            padding: 10px
        }

        @media (min-width: 768px) {
            .info-bar__icon[_ngcontent-cym-c73] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px;
                padding: 20px
            }
        }

        .info-bar__label[_ngcontent-cym-c73] {
            padding-left: 12px;
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        @media (min-width: 768px) {
            .info-bar__label[_ngcontent-cym-c73] {
                padding-left: 30px
            }
        }

        .info-bar__value[_ngcontent-cym-c73] {
            letter-spacing: .048px;
            font-family: Exo, sans-serif;
            font-weight: 800;
            font-size: 22px;
            line-height: 24px;
            color: #fff
        }

        @media (max-width: 489.9px) {
            .info-bar__value[_ngcontent-cym-c73] {
                font-size: 18px;
                line-height: 20px
            }
        }

        @media (min-width: 768px) {
            .info-bar__value[_ngcontent-cym-c73] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .info-bar__help[_ngcontent-cym-c73] {
            letter-spacing: -.01em;
            font-family: Exo, sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            padding-top: 6px;
            color: #fff
        }

        @media (min-width: 768px) {
            .info-bar__help[_ngcontent-cym-c73] {
                font-size: 16px;
                line-height: 24px
            }
        }

        .info-bar__trust[_ngcontent-cym-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (max-width: 991.9px) {
            .info-bar__trust[_ngcontent-cym-c73] {
                padding: 19px 0 24px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trust[_ngcontent-cym-c73] {
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

        .info-bar__worldwide-inner[_ngcontent-cym-c73] {
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        @media (min-width: 992px) {
            .info-bar__worldwide-inner[_ngcontent-cym-c73] {
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
            .info-bar__worldwide-inner[_ngcontent-cym-c73] {
                margin-right: 20px;
                padding-right: 30px
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .info-bar__worldwide-inner[_ngcontent-cym-c73] {
                display: none
            }
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (max-width: 991.9px) {
            .info-bar__trustpilot[_ngcontent-cym-c73] {
                padding: 19px 0 24px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-cym-c73] {
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

        .info-bar__trustpilot[_ngcontent-cym-c73] .star[_ngcontent-cym-c73] {
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
            .info-bar__trustpilot[_ngcontent-cym-c73] .star[_ngcontent-cym-c73] {
                font-size: 16px;
                -webkit-justify-content: end;
                justify-content: end;
                margin-bottom: 4px
            }
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] .star[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
            width: 14px;
            height: 13px;
            margin-right: 5.5px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-cym-c73] .star[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
                width: 24px;
                height: 24px
            }
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] .stars[_ngcontent-cym-c73] {
            height: 20px
        }

        @media (min-width: 768px) {
            .info-bar__trustpilot[_ngcontent-cym-c73] .stars[_ngcontent-cym-c73] {
                line-height: 12px
            }
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-cym-c73] .stars[_ngcontent-cym-c73] {
                height: 26px;
                margin-bottom: 4px;
                text-align: right
            }
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] .stars[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
            width: 106px;
            height: 20px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot[_ngcontent-cym-c73] .stars[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
                width: 128px;
                height: 100%
            }
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] p[_ngcontent-cym-c73] {
            margin: 0
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] p[_ngcontent-cym-c73]:first-of-type {
            font-size: 16px
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] p[_ngcontent-cym-c73]:last-of-type {
            font-size: 12px
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] p[_ngcontent-cym-c73] span[_ngcontent-cym-c73] {
            font-weight: 600
        }

        .info-bar__trustpilot[_ngcontent-cym-c73] p[_ngcontent-cym-c73] a[_ngcontent-cym-c73] {
            text-decoration: none;
            color: #fff
        }

        .info-bar__trustpilot-image-mobile[_ngcontent-cym-c73] {
            display: none;
            width: 140px;
            height: 20px
        }

        @media (max-width: 991.9px) {
            .info-bar__trustpilot-image-mobile[_ngcontent-cym-c73] {
                display: inline-block
            }
        }

        .info-bar__trustpilot-image[_ngcontent-cym-c73] {
            display: none;
            width: 343px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot-image[_ngcontent-cym-c73] {
                display: inline-block
            }
        }

        @media (max-width: 1240px) {
            .info-bar__trustpilot-image[_ngcontent-cym-c73] {
                width: 280px
            }
        }

        .info-bar__trustpilot-mobile[_ngcontent-cym-c73] {
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        .info-bar__trustpilot-trust[_ngcontent-cym-c73] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex: 0 1 250px;
            flex: 0 1 250px
        }

        @media (min-width: 992px) {
            .info-bar__trustpilot-trust[_ngcontent-cym-c73] {
                display: none
            }
        }

        .info-bar__payments[_ngcontent-cym-c73] {
            display: -webkit-flex;
            display: flex
        }

        @media (min-width: 992px) {
            .info-bar__payments[_ngcontent-cym-c73] {
                display: none
            }
        }

        .info-bar__payment[_ngcontent-cym-c73] {
            text-align: center;
            background-color: #f5f6f7;
            width: 48px;
            height: 24px;
            font-size: 14px;
            border-radius: 3px
        }

        @media (max-width: 374px) {
            .info-bar__payment[_ngcontent-cym-c73] {
                width: 40px
            }
        }

        .info-bar__payment[_ngcontent-cym-c73]:first-child {
            margin-right: 8px
        }

        .info-bar__payment[_ngcontent-cym-c73] svg-icon[_ngcontent-cym-c73] {
            width: 100%;
            height: 100%
        }

        .worldwide[_ngcontent-cym-c73] {
            white-space: nowrap;
            cursor: pointer
        }

        .worldwide__world[_ngcontent-cym-c73] {
            width: 20px;
            height: auto;
            color: #219653;
            vertical-align: -5px
        }

        .worldwide__label[_ngcontent-cym-c73] {
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
            .worldwide__label[_ngcontent-cym-c73] {
                font-size: 16px;
                line-height: 34px;
                text-transform: none
            }
        }

        .worldwide__label2[_ngcontent-cym-c73] {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            text-align: right;
            letter-spacing: -.01em;
            padding-top: 2px
        }

        @media (max-width: 991.9px) {
            .worldwide__label2[_ngcontent-cym-c73] {
                display: none
            }
        }

        .worldwide__label2[_ngcontent-cym-c73] a[_ngcontent-cym-c73] {
            color: #fff;
            text-decoration: none
        }

        .worldwide__label2[_ngcontent-cym-c73] a[_ngcontent-cym-c73]:hover {
            text-decoration: underline
        }

        .worldwide__info-holder[_ngcontent-cym-c73] {
            vertical-align: -3px;
            padding: 4px
        }

        @media (min-width: 992px) {
            .worldwide__info-holder[_ngcontent-cym-c73] {
                display: none
            }
        }

        .worldwide__info[_ngcontent-cym-c73] {
            width: 14px;
            height: auto;
            color: #657a89
        }

        @media (min-width: 992px) {
            .worldwide__info[_ngcontent-cym-c73] {
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

        .raffles-nav__placeholder[_ngcontent-cym-c60] {
            width: 100%;
            height: 52px
        }

        @media (min-width: 992px) {
            .raffles-nav__placeholder[_ngcontent-cym-c60] {
                height: 72px
            }
        }

        .raffles-nav__outer[_ngcontent-cym-c60] {
            position: absolute;
            background-color: #fff;
            z-index: 2;
            top: 0;
            left: 0;
            right: 0;
            box-shadow: 0 0 32px rgba(0, 19, 31, .08)
        }

        .raffles-nav__inner[_ngcontent-cym-c60] {
            width: 100%;
            text-align: center;
            overflow: hidden;
            white-space: nowrap
        }

        .raffles-nav__swiper[_ngcontent-cym-c60] {
            display: block;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: start;
            justify-content: start;
            margin: 0 auto;
            width: auto
        }

        .raffles-nav__item[_ngcontent-cym-c60] {
            display: inline-block;
            z-index: 10;
            position: relative;
            padding-left: 11px;
            padding-right: 11px
        }

        @media (min-width: 992px) {
            .raffles-nav__item[_ngcontent-cym-c60] {
                padding-left: 16px;
                padding-right: 16px
            }
        }

        .raffles-nav__link[_ngcontent-cym-c60] {
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
            .raffles-nav__link[_ngcontent-cym-c60] {
                font-size: 16px;
                line-height: 26px;
                padding: 23px 0
            }

            .raffles-nav__outer--short[_ngcontent-cym-c60] .raffles-nav__link[_ngcontent-cym-c60] {
                padding: 15px 0
            }
        }

        .raffles-nav__link[_ngcontent-cym-c60]:after {
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

        .raffles-nav__link--active[_ngcontent-cym-c60] {
            color: #2aa8f8
        }

        .raffles-nav__link--active[_ngcontent-cym-c60]:after {
            opacity: 1
        }

        @media (max-width: 991.9px) {
            .raffles-nav__link-value--full[_ngcontent-cym-c60] {
                display: none
            }
        }

        @media (min-width: 992px) {
            .raffles-nav__link-value--short[_ngcontent-cym-c60] {
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

        .why[_ngcontent-cym-c75] {
            padding: 60px 0 80px;
            background-color: #2aa8f8;
            font-family: Exo, sans-serif
        }

        @media (min-width: 992px) {
            .why[_ngcontent-cym-c75] {
                padding: 80px 0 120px
            }
        }

        @media (min-width: 992px) {
            .why__steps[_ngcontent-cym-c75] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center
            }
        }

        @media (max-width: 991.9px) {
            .why__steps[_ngcontent-cym-c75] {
                max-width: 440px;
                margin: 0 auto
            }
        }

        .why__step[_ngcontent-cym-c75] {
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
            .why__step[_ngcontent-cym-c75] {
                padding: 24px;
                margin-right: 2px;
                -webkit-flex: 0 0 33%;
                flex: 0 0 33%
            }
        }

        .why__step[_ngcontent-cym-c75]:first-child {
            border-radius: 10px 10px 0 0
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-cym-c75]:first-child {
                border-radius: 10px 0 0 10px
            }
        }

        .why__step[_ngcontent-cym-c75]:last-child {
            border-radius: 0 0 10px 10px
        }

        @media (min-width: 992px) {
            .why__step[_ngcontent-cym-c75]:last-child {
                border-radius: 0 10px 10px 0
            }
        }

        .why__icon[_ngcontent-cym-c75] {
            -webkit-flex: 0 0 60px;
            flex: 0 0 60px;
            height: 60px;
            margin-right: 16px
        }

        @media (min-width: 992px) {
            .why__icon[_ngcontent-cym-c75] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px;
                padding-right: 20px
            }
        }

        .why__icon[_ngcontent-cym-c75] img[_ngcontent-cym-c75] {
            width: auto;
            height: 100%
        }

        .why__label[_ngcontent-cym-c75] {
            -webkit-flex: 1 0 30px;
            flex: 1 0 30px
        }

        .why__title[_ngcontent-cym-c75] {
            color: #2aa8f8;
            font-weight: 600;
            font-size: 16px;
            line-height: 20px
        }

        @media (min-width: 992px) {
            .why__title[_ngcontent-cym-c75] {
                font-size: 20px;
                line-height: 24px
            }
        }

        .why__subtitle[_ngcontent-cym-c75] {
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
            .why__subtitle[_ngcontent-cym-c75] {
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

        .how[_ngcontent-cym-c70] {
            padding: 60px 0 80px;
            background-color: #f5f6f7;
            font-family: Exo, sans-serif
        }

        @media (min-width: 992px) {
            .how[_ngcontent-cym-c70] {
                padding: 80px 0 120px
            }
        }

        @media (min-width: 992px) {
            .how__steps[_ngcontent-cym-c70] {
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center
            }
        }

        @media (max-width: 991.9px) {
            .how__steps[_ngcontent-cym-c70] {
                max-width: 440px;
                margin: 0 auto
            }
        }

        .how__step[_ngcontent-cym-c70] {
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
            .how__step[_ngcontent-cym-c70] {
                max-height: none;
                margin-right: 2px;
                padding: 24px;
                -webkit-flex: 0 0 33%;
                flex: 0 0 33%
            }
        }

        .how__step[_ngcontent-cym-c70]:first-child {
            border-radius: 10px 10px 0 0
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-cym-c70]:first-child {
                border-radius: 10px 0 0 10px
            }
        }

        .how__step[_ngcontent-cym-c70]:last-child {
            border-radius: 0 0 10px 10px
        }

        @media (min-width: 992px) {
            .how__step[_ngcontent-cym-c70]:last-child {
                border-radius: 0 10px 10px 0
            }
        }

        .how__icon[_ngcontent-cym-c70] {
            -webkit-flex: 0 0 60px;
            flex: 0 0 60px;
            height: 60px;
            margin-right: 16px
        }

        @media (min-width: 992px) {
            .how__icon[_ngcontent-cym-c70] {
                -webkit-flex: 0 0 72px;
                flex: 0 0 72px;
                height: 72px
            }
        }

        .how__icon[_ngcontent-cym-c70] img[_ngcontent-cym-c70] {
            width: auto;
            height: 100%
        }

        .how__label[_ngcontent-cym-c70] {
            -webkit-flex: 1 0 30px;
            flex: 1 0 30px
        }

        .how__title[_ngcontent-cym-c70] {
            margin-bottom: 2px;
            color: #2aa8f8;
            font-weight: 500;
            font-size: 10px;
            line-height: 12px;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .how__title[_ngcontent-cym-c70] {
                font-size: 12px
            }
        }

        .how__subtitle[_ngcontent-cym-c70] {
            font-size: 16px;
            line-height: 20px;
            font-weight: 600;
            color: #00131f;
            letter-spacing: -.01em;
            margin-bottom: 0;
            padding-top: 2px
        }

        @media (min-width: 992px) {
            .how__subtitle[_ngcontent-cym-c70] {
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

        .reviews[_ngcontent-cym-c68] {
            background: white;
            padding: 30px 15px;
            border-radius: 4px;
            max-width: 780px;
            margin: 0 auto
        }

        @media (min-width: 576px) {
            .reviews[_ngcontent-cym-c68] {
                padding: 40px 50px
            }
        }

        .reviews__header[_ngcontent-cym-c68] {
            display: -webkit-flex;
            display: flex
        }

        .reviews__identity[_ngcontent-cym-c68] {
            text-align: left;
            font-size: 13px;
            line-height: 15px;
            -webkit-flex: 1 0 200px;
            flex: 1 0 200px
        }

        .reviews__logo[_ngcontent-cym-c68] {
            -webkit-flex: 0 0 68px;
            flex: 0 0 68px;
            text-align: right
        }

        @media (min-width: 576px) {
            .reviews__logo[_ngcontent-cym-c68] {
                -webkit-flex: 0 0 101px;
                flex: 0 0 101px
            }
        }

        .reviews__logo[_ngcontent-cym-c68] img[_ngcontent-cym-c68] {
            width: 60px;
            height: auto
        }

        @media (min-width: 576px) {
            .reviews__logo[_ngcontent-cym-c68] img[_ngcontent-cym-c68] {
                width: 93px
            }
        }

        .reviews__title[_ngcontent-cym-c68] {
            font-size: 28px;
            line-height: 32px
        }

        .reviews__location[_ngcontent-cym-c68] {
            color: #70757a
        }

        .reviews__rating[_ngcontent-cym-c68] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 15px 0 17px
        }

        .reviews__rating-average[_ngcontent-cym-c68] {
            font-size: 32px;
            line-height: 36px;
            margin-right: 11px;
            color: #70757a
        }

        .reviews__stars-box[_ngcontent-cym-c68] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .reviews__stars[_ngcontent-cym-c68] {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAWCAYAAAA1vze2AAAAqUlEQVR4AWLwySwkGv/YzgworgwwAIphGHqJXWgX6nl6q55o/GHxCX4bUx9hMK9JYwucFSmAubW2ZifED8Q7IXEgcmRqVNDsgBhBrAMSBJEiqwAGAaBRhiDvBk1A3mkRyb2CXSYLlmWFnbArffoMIrjS6qy3Sm/Z/068CPEbyKpKhfCDyA0yNE95MKtRGe9LiSz9O3hKclv6Y76ictQzqbmjyhIkyVi+8wCta5MKDP5AeAAAAABJRU5ErkJggg==);
            background-size: 25px 22px;
            height: 22px;
            width: 125px
        }

        .review[_ngcontent-cym-c68] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-start;
            align-items: flex-start;
            font-family: arial, sans-serif;
            border-top: 1px solid #f5f5f5;
            padding: 28px 0
        }

        .review__avatar[_ngcontent-cym-c68] {
            -webkit-flex: 0 0 47px;
            flex: 0 0 47px
        }

        .review__avatar-img[_ngcontent-cym-c68] {
            width: 40px;
            height: 40px
        }

        .review__avatar-initial[_ngcontent-cym-c68] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 24px;
            line-height: 38px;
            padding-top: 2px;
            color: #fff;
            text-align: center
        }

        .review__content[_ngcontent-cym-c68] {
            -webkit-flex: 1 0 200px;
            flex: 1 0 200px;
            font-size: 13px;
            line-height: 15px;
            color: #000;
            text-align: left
        }

        .review__name[_ngcontent-cym-c68] {
            font-weight: 700
        }

        .review__counter[_ngcontent-cym-c68] {
            padding-top: 2px;
            color: #70757a
        }

        .review__stars-date[_ngcontent-cym-c68] {
            padding-top: 8px;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        .review__rating[_ngcontent-cym-c68] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto
        }

        .review__stars[_ngcontent-cym-c68] {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAYAAACZ3F9/AAAAZklEQVR4AWL4uYWZCdAJHVMBAIJAAG1DoAtjGarYxxjqwHADnA8HFuWL3E8puH8gAqILPaB34Qq4FAQ1yoo+8ES7NRWKe6u+Ogo0XjtaCmlSd6K/4OQQOF0JKYTsMasgOIRkBfDZATita/85jgoHAAAAAElFTkSuQmCC);
            background-size: 14px 13px;
            height: 13px;
            width: 0;
            display: inline-block
        }

        .review__date[_ngcontent-cym-c68] {
            padding-left: 8px;
            -webkit-flex: 0 0 100px;
            flex: 0 0 100px;
            color: #70757a
        }

        .review__text[_ngcontent-cym-c68] {
            padding-top: 8px
        }

        .review__text[_ngcontent-cym-c68] p {
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

        .download[_ngcontent-cym-c74] {
            background-color: #2aa8f8;
            text-align: center;
            font-family: Exo, sans-serif;
            padding-bottom: 60px;
            position: relative
        }

        @media (min-width: 992px) {
            .download[_ngcontent-cym-c74] {
                padding-bottom: 0
            }
        }

        @media (max-width: 377.9px) {
            .download__iphone[_ngcontent-cym-c74] {
                width: 100%
            }
        }

        .download__header[_ngcontent-cym-c74] {
            margin: 0;
            padding-top: 60px;
            color: #fff;
            font-weight: 800;
            font-size: 28px;
            line-height: 32px;
            text-transform: uppercase
        }

        @media (min-width: 992px) {
            .download__header[_ngcontent-cym-c74] {
                padding-top: 80px;
                font-size: 40px;
                line-height: 48px
            }
        }

        .download__desc[_ngcontent-cym-c74] {
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            margin: 12px 0 50px;
            letter-spacing: -.01em
        }

        @media (min-width: 992px) {
            .download__desc[_ngcontent-cym-c74] {
                font-size: 16px;
                line-height: 24px
            }
        }

        .download__bg[_ngcontent-cym-c74] {
            background: linear-gradient(180deg, rgba(4, 144, 233, 0) 0%, rgba(4, 144, 233, .614631) 31.77%, #2AA8F8 91.15%);
            height: 225px;
            position: absolute;
            bottom: 60px;
            left: 0;
            width: 100%
        }

        @media (min-width: 992px) {
            .download__bg[_ngcontent-cym-c74] {
                bottom: 0
            }
        }

        .download__buttons[_ngcontent-cym-c74] {
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
            .download__buttons[_ngcontent-cym-c74] {
                -webkit-flex-direction: row;
                flex-direction: row;
                bottom: 50px
            }
        }

        .download[_ngcontent-cym-c74] .store-button[_ngcontent-cym-c74] {
            min-width: 197px;
            height: 60px
        }

        @media (min-width: 992px) {
            .download[_ngcontent-cym-c74] .store-button[_ngcontent-cym-c74] {
                height: 54px;
                min-width: 177px
            }
        }

        .download[_ngcontent-cym-c74] .store-button--google[_ngcontent-cym-c74] {
            margin-top: 8px
        }

        @media (min-width: 992px) {
            .download[_ngcontent-cym-c74] .store-button--google[_ngcontent-cym-c74] {
                margin: 0 0 0 17px;
                min-width: 202px
            }
        }

    </style>
    <style>
        .holder[_ngcontent-cym-c59] {
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

        [_nghost-cym-c65] {
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
            [_nghost-cym-c65] {
                max-width: 48%;
                padding: 0 5px
            }
        }

        @media (min-width: 992px) {
            [_nghost-cym-c65] {
                margin-bottom: 35px
            }
        }

        @media (min-width: 1600px) {
            [_nghost-cym-c65] {
                max-width: 25%
            }
        }

        .raffle-card[_ngcontent-cym-c65] {
            text-decoration: none;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: 100%;
            background: #F5F6F7
        }

        @media (min-width: 992px) {
            .raffle-card[_ngcontent-cym-c65] {
                padding-bottom: 24px;
                border-top: 0;
                border-left: 10px;
                border-top: 10px;
                border-right: 0;
                border-radius: 0 0 10px 10px
            }
        }

        .raffle-card--white[_ngcontent-cym-c65] {
            background: #fff
        }

        .raffle-card[_ngcontent-cym-c65]:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .05)
        }

        .raffle-card[_ngcontent-cym-c65]:hover .raffle-card__enter[_ngcontent-cym-c65] {
            background-color: #2aa8f8;
            color: #fff;
            border-color: #2aa8f8
        }

        .raffle-card[_ngcontent-cym-c65]:hover .raffle-card__enter-icon--blue[_ngcontent-cym-c65] {
            display: none !important
        }

        .raffle-card[_ngcontent-cym-c65]:hover .raffle-card__enter-icon--white[_ngcontent-cym-c65] {
            display: inline-block !important
        }

        .raffle-card__image[_ngcontent-cym-c65] {
            width: 100%;
            position: relative
        }

        .raffle-card__image[_ngcontent-cym-c65] img[_ngcontent-cym-c65] {
            width: 100%;
            display: block;
            border-radius: 8px 8px 0 0
        }

        .raffle-card__label[_ngcontent-cym-c65] {
            position: absolute;
            left: 0;
            top: 0;
            padding: 4px 10px;
            font-family: Barlow Condensed;
            text-transform: uppercase;
            letter-spacing: .15rem
        }

        .raffle-card__label_green[_ngcontent-cym-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__image-red-cover[_ngcontent-cym-c65] {
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
            .raffle-card__image-red-cover[_ngcontent-cym-c65] {
                left: 20px;
                right: 20px;
                font-size: 16px;
                padding: 3px
            }
        }

        .raffle-card__draw[_ngcontent-cym-c65] {
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
            .raffle-card__draw[_ngcontent-cym-c65] {
                font-size: 7px;
                padding: 5px
            }
        }

        @media (min-width: 992px) {
            .raffle-card__draw[_ngcontent-cym-c65] {
                font-size: 16px;
                right: 12px;
                left: auto;
                left: initial;
                padding: 11px 16px
            }
        }

        .raffle-card__draw_tomorrow[_ngcontent-cym-c65] {
            background-color: #2aa8f8;
            color: #fff;
            border: none;
            margin-right: 10px
        }

        .raffle-card__draw_tomorrow[_ngcontent-cym-c65] span[_ngcontent-cym-c65] {
            border-radius: 10px;
            color: #fff;
            padding: 1px 3.5px;
            background-color: #007ccd
        }

        @media (min-width: 992px) {
            .raffle-card__draw_tomorrow[_ngcontent-cym-c65] span[_ngcontent-cym-c65] {
                font-size: 14px;
                padding: 2px 7.5px
            }
        }

        .raffle-card__wrapper[_ngcontent-cym-c65] {
            -webkit-flex-grow: 1;
            flex-grow: 1
        }

        .raffle-card__alternative[_ngcontent-cym-c65] {
            font-weight: 500;
            font-size: 10px;
            line-height: 14px;
            color: #939ca4
        }

        @media (min-width: 992px) {
            .raffle-card__alternative[_ngcontent-cym-c65] {
                font-size: 14px;
                line-height: 20px
            }
        }

        .raffle-card__title[_ngcontent-cym-c65] {
            font-weight: 600;
            font-size: 14px;
            line-height: 18px;
            letter-spacing: -.01em;
            color: #00131f;
            margin: 0;
            padding: 8px 8px 4px
        }

        @media (min-width: 992px) {
            .raffle-card__title[_ngcontent-cym-c65] {
                padding: 24px 15px 8px;
                font-size: 24px;
                line-height: 28px
            }
        }

        .raffle-card__price[_ngcontent-cym-c65] {
            font-weight: 800;
            font-size: 20px;
            line-height: 20px;
            text-transform: uppercase;
            margin-top: 18px
        }

        @media (min-width: 992px) {
            .raffle-card__price[_ngcontent-cym-c65] {
                font-size: 32px;
                line-height: 32px
            }
        }

        .raffle-card__price-new[_ngcontent-cym-c65] {
            color: #2aa8f8
        }

        .raffle-card__price-old[_ngcontent-cym-c65] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 7px
        }

        @media (min-width: 992px) {
            .raffle-card__price-old[_ngcontent-cym-c65] {
                font-weight: 800;
                font-size: 24px;
                line-height: 32px;
                margin-right: 12px
            }
        }

        .raffle-card__enter[_ngcontent-cym-c65] {
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
            .raffle-card__enter[_ngcontent-cym-c65] {
                margin: 13px 24px 0;
                font-size: 20px;
                line-height: 24px;
                padding: 12px 10px;
                border-width: 2px
            }
        }

        .raffle-card__enter-icon[_ngcontent-cym-c65] {
            width: 20px;
            height: 16px;
            margin-left: 12px
        }

        @media (min-width: 992px) {
            .raffle-card__enter-icon[_ngcontent-cym-c65] {
                height: 20px
            }
        }

        .raffle-card__enter-icon--white[_ngcontent-cym-c65] {
            display: none
        }

        .raffle-card__slider[_ngcontent-cym-c65] {
            margin-top: 14px;
            padding: 0 8px;
            position: relative
        }

        @media (min-width: 992px) {
            .raffle-card__slider[_ngcontent-cym-c65] {
                padding: 0 24px;
                margin-top: 28px
            }
        }

        .raffle-card__slider--hidden[_ngcontent-cym-c65] {
            opacity: 0
        }

        .raffle-card__sold[_ngcontent-cym-c65] {
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
            .raffle-card__sold[_ngcontent-cym-c65] {
                top: -7px
            }
        }

        .raffle-card__drawtime[_ngcontent-cym-c65] {
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
            .raffle-card__drawtime[_ngcontent-cym-c65] {
                font-size: 14px;
                line-height: 15px;
                padding: 5px 19px;
                top: -12px
            }
        }

        .raffle-card__drawtime--soon[_ngcontent-cym-c65] {
            background-color: #2aa8f8;
            color: #fff
        }

        .raffle-card__drawtime--urgent[_ngcontent-cym-c65] {
            background-color: #40d586;
            color: #fff
        }

        .raffle-card__bottominfo[_ngcontent-cym-c65] {
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
            .raffle-card__bottominfo[_ngcontent-cym-c65] {
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

        .winners[_ngcontent-cym-c69] {
            background-color: #f5f6f7;
            padding-top: 60px;
            font-family: Exo, sans-serif;
            position: relative
        }

        @media (min-width: 768px) {
            .winners[_ngcontent-cym-c69] {
                padding-top: 80px;
                max-height: 842px;
                overflow: hidden
            }
        }

        .winners__header[_ngcontent-cym-c69] {
            text-align: center;
            padding-bottom: 64px
        }

        @media (min-width: 768px) {
            .winners__header[_ngcontent-cym-c69] {
                padding-bottom: 0;
                text-align: left
            }
        }

        .winners__header[_ngcontent-cym-c69] h2[_ngcontent-cym-c69] {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 28px;
            line-height: 32px;
            color: #00131f;
            margin: 0 0 24px
        }

        @media (min-width: 992px) {
            .winners__header[_ngcontent-cym-c69] h2[_ngcontent-cym-c69] {
                margin: 0;
                font-size: 40px;
                line-height: 48px
            }
        }

        .winners__header[_ngcontent-cym-c69] a[_ngcontent-cym-c69] {
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
            .winners__header[_ngcontent-cym-c69] a[_ngcontent-cym-c69] {
                position: relative;
                top: 35px;
                font-size: 20px;
                line-height: 24px
            }
        }

        .winners__header[_ngcontent-cym-c69] a[_ngcontent-cym-c69] span[_ngcontent-cym-c69]:first-child {
            margin-right: 19px
        }

        .winners__header[_ngcontent-cym-c69] a[_ngcontent-cym-c69] svg-icon[_ngcontent-cym-c69] {
            width: 20px;
            height: 20px
        }

        .winners__wrapper[_ngcontent-cym-c69] {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            max-height: 505px;
            overflow: hidden;
            -webkit-justify-content: center;
            justify-content: center
        }

        @media (min-width: 768px) {
            .winners__wrapper[_ngcontent-cym-c69] {
                grid-template-columns: repeat(3, 1fr);
                max-height: none;
                grid-gap: 20px;
                padding: 0 30px
            }
        }

        @media (min-width: 992px) {
            .winners__wrapper[_ngcontent-cym-c69] {
                grid-template-columns: repeat(3, 290px);
                max-height: none;
                grid-gap: 20px;
                padding: 0
            }
        }

        @media (min-width: 1200px) {
            .winners__wrapper[_ngcontent-cym-c69] {
                margin: 0 20px;
                grid-template-columns: repeat(3, 318px)
            }
        }

        .winners__winner[_ngcontent-cym-c69] {
            position: relative;
            height: 150px;
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            margin-bottom: 16px
        }

        @media (min-width: 768px) {
            .winners__winner[_ngcontent-cym-c69] {
                height: 272px;
                margin-bottom: 0
            }
        }

        @media (min-width: 992px) {
            .winners__winner[_ngcontent-cym-c69] {
                height: 272px
            }
        }

        .winners__winner--odd[_ngcontent-cym-c69] {
            top: 70px;
            right: 8px
        }

        @media (min-width: 768px) {
            .winners__winner--odd[_ngcontent-cym-c69] {
                top: 0;
                right: 0
            }
        }

        .winners__winner--even[_ngcontent-cym-c69] {
            left: 8px
        }

        @media (min-width: 768px) {
            .winners__winner--even[_ngcontent-cym-c69] {
                left: 0
            }
        }

        @media (min-width: 768px) {
            .winners__winner--w-1[_ngcontent-cym-c69] {
                grid-column: 3
            }

            .winners__winner--w-2[_ngcontent-cym-c69] {
                grid-row: 2;
                top: 70px
            }

            .winners__winner--w-3[_ngcontent-cym-c69] {
                grid-column: 2;
                top: -110px
            }

            .winners__winner--w-4[_ngcontent-cym-c69] {
                grid-column: 3
            }

            .winners__winner--w-5[_ngcontent-cym-c69] {
                grid-row: 3;
                top: 70px
            }

            .winners__winner--w-6[_ngcontent-cym-c69] {
                grid-column: 2;
                bottom: 90px
            }

            .winners__winner--w-7[_ngcontent-cym-c69] {
                grid-column: 3
            }
        }

        .winners__winner[_ngcontent-cym-c69] img[_ngcontent-cym-c69] {
            width: 120%
        }

        .winners__bg[_ngcontent-cym-c69] {
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
        .mat-dialog-container {
            display: block;
            padding: 24px;
            border-radius: 4px;
            box-sizing: border-box;
            overflow: auto;
            outline: 0;
            width: 100%;
            height: 100%;
            min-height: inherit;
            max-height: inherit
        }

        .cdk-high-contrast-active .mat-dialog-container {
            outline: solid 1px
        }

        .mat-dialog-content {
            display: block;
            margin: 0 -24px;
            padding: 0 24px;
            max-height: 65vh;
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        .mat-dialog-title {
            margin: 0 0 20px;
            display: block
        }

        .mat-dialog-actions {
            padding: 8px 0;
            display: flex;
            flex-wrap: wrap;
            min-height: 52px;
            align-items: center;
            box-sizing: content-box;
            margin-bottom: -24px
        }

        .mat-dialog-actions.mat-dialog-actions-align-center,
        .mat-dialog-actions[align=center] {
            justify-content: center
        }

        .mat-dialog-actions.mat-dialog-actions-align-end,
        .mat-dialog-actions[align=end] {
            justify-content: flex-end
        }

        .mat-dialog-actions .mat-button-base+.mat-button-base,
        .mat-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base {
            margin-left: 8px
        }

        [dir=rtl] .mat-dialog-actions .mat-button-base+.mat-button-base,
        [dir=rtl] .mat-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base {
            margin-left: 0;
            margin-right: 8px
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

        .product-dialog .mat-dialog-container {
            position: relative;
            max-width: 450px;
            padding: 20px !important
        }

        .product-dialog .mat-dialog-container .button {
            font-size: 16px;
            line-height: 1;
            font-weight: 600;
            width: 100%;
            border-radius: 8px;
            min-height: 44px;
            padding: 10px 0;
            display: -webkit-flex;
            display: flex;
            -webkit-flex: 1 0 40%;
            flex: 1 0 40%;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            max-width: 340px;
            margin: auto
        }

        .product-dialog__title[_ngcontent-cym-c77] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: -.01em;
            color: #00131f
        }

        .product-dialog__product[_ngcontent-cym-c77] {
            display: -webkit-flex;
            display: flex
        }

        .product-dialog__product-left[_ngcontent-cym-c77] {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto;
            max-width: 124px
        }

        .product-dialog__product-right[_ngcontent-cym-c77] {
            -webkit-flex: 4 1 auto;
            flex: 4 1 auto;
            padding-left: 16px;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .product-dialog__product-image[_ngcontent-cym-c77] {
            max-width: 100%;
            width: auto;
            max-height: 140px;
            height: auto;
            display: inline-block
        }

        .product-dialog__product-title[_ngcontent-cym-c77] {
            font-weight: 600;
            font-size: 14px;
            line-height: 1.2;
            letter-spacing: -.01em;
            color: #00131f;
            padding-top: 10px
        }

        .product-dialog__product-tickets[_ngcontent-cym-c77] {
            font-weight: 700;
            font-size: 20px;
            line-height: 1.2;
            letter-spacing: -.01em;
            color: #2aa8f8;
            margin-top: 12px
        }

        .product-dialog__product-actions[_ngcontent-cym-c77] {
            display: -webkit-flex;
            display: flex;
            padding: 20px 0;
            gap: 12px
        }

        .product-dialog__product-actions[_ngcontent-cym-c77] .button[_ngcontent-cym-c77] {
            -webkit-flex: 1 0 40%;
            flex: 1 0 40%
        }

        .product-dialog__promo[_ngcontent-cym-c77] {
            border-top: 1px solid #E9EBED
        }

        .product-dialog__body[_ngcontent-cym-c77] {
            padding-top: 20px;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: -.01em;
            color: #00131f;
            text-align: center;
            margin-bottom: 20px
        }

        .product-dialog__body[_ngcontent-cym-c77] strong,
        .product-dialog__body[_ngcontent-cym-c77] b {
            font-weight: 700
        }

        .product-dialog__body[_ngcontent-cym-c77] p:first-child {
            margin-top: 0
        }

        .product-dialog__body[_ngcontent-cym-c77] img {
            margin-bottom: 0;
            max-width: 240px;
            height: auto
        }

        .product-dialog__text[_ngcontent-cym-c77] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 1.5;
            color: gray
        }

        .product-dialog__text-bold[_ngcontent-cym-c77] {
            font-weight: 700
        }

        .product-dialog__footer_buttons[_ngcontent-cym-c77] {
            text-align: center;
            border-radius: 2px
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

        .alert-list__item[_ngcontent-cym-c96] {
            margin-bottom: 25px
        }

        .alert-list__item--short[_ngcontent-cym-c96] {
            padding-top: 10px !important;
            padding-bottom: 10px !important
        }

        .alert-list__item--lighter-font[_ngcontent-cym-c96] p[_ngcontent-cym-c96],
        .alert-list__item--lighter-font[_ngcontent-cym-c96] p[_ngcontent-cym-c96] a[_ngcontent-cym-c96] {
            font-size: 16px;
            font-weight: 300
        }

        .alert-list__item--smaller-font[_ngcontent-cym-c96] p[_ngcontent-cym-c96],
        .alert-list__item--smaller-font[_ngcontent-cym-c96] p[_ngcontent-cym-c96] a[_ngcontent-cym-c96] {
            font-size: 16px
        }

        .alert-list--margin-minus10px[_ngcontent-cym-c96] {
            margin-left: -10px;
            margin-right: -10px
        }

        .alert[_ngcontent-cym-c96] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 18px 25px;
            border-width: 1px;
            border-style: solid
        }

        .alert_column[_ngcontent-cym-c96] {
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .alert_blue[_ngcontent-cym-c96] {
            background-color: #cce9fe;
            border-color: #b8e0fe
        }

        .alert_light-blue[_ngcontent-cym-c96] {
            background: #ecf9ff;
            border-color: #ecf9ff
        }

        .alert_green[_ngcontent-cym-c96] {
            background-color: #d9f7e7;
            border-color: #caf3dd
        }

        .alert_warn[_ngcontent-cym-c96] {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert_error[_ngcontent-cym-c96] {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            font-weight: 400;
            margin-bottom: 50px;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .alert_text-left[_ngcontent-cym-c96] {
            text-align: left;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .alert_mt[_ngcontent-cym-c96] {
            margin-top: 50px
        }

        .alert_mb[_ngcontent-cym-c96] {
            margin-bottom: 30px
        }

        .alert__text[_ngcontent-cym-c96],
        .alert__link[_ngcontent-cym-c96] {
            margin: 0;
            font-size: 17px;
            line-height: 26px;
            font-weight: 400;
            text-align: center
        }

        .alert_blue[_ngcontent-cym-c96] .alert__text[_ngcontent-cym-c96],
        .alert_light-blue[_ngcontent-cym-c96] .alert__text[_ngcontent-cym-c96],
        .alert_blue[_ngcontent-cym-c96] .alert__link[_ngcontent-cym-c96],
        .alert_light-blue[_ngcontent-cym-c96] .alert__link[_ngcontent-cym-c96] {
            color: #124264
        }

        .alert_green[_ngcontent-cym-c96] .alert__text[_ngcontent-cym-c96],
        .alert_green[_ngcontent-cym-c96] .alert__link[_ngcontent-cym-c96] {
            color: #216f46
        }

        .alert__text_d-blue[_ngcontent-cym-c96],
        .alert__link_d-blue[_ngcontent-cym-c96] {
            color: #124264
        }

        .alert__link[_ngcontent-cym-c96] {
            font-size: 17px;
            line-height: 26px;
            font-weight: 400;
            text-decoration: none
        }

        .alert__link[_ngcontent-cym-c96]:hover {
            text-decoration: underline
        }

        .alert_blue[_ngcontent-cym-c96] .alert__link[_ngcontent-cym-c96],
        .alert_light-blue[_ngcontent-cym-c96] .alert__link[_ngcontent-cym-c96],
        .alert_warn[_ngcontent-cym-c96] .alert__link[_ngcontent-cym-c96] {
            color: #3fa9f5
        }

        .alert__link_right[_ngcontent-cym-c96] {
            margin-left: auto
        }

        .alert__link_green[_ngcontent-cym-c96] {
            color: #216f46
        }

        .alert__link_d-blue[_ngcontent-cym-c96] {
            color: #124264
        }

        .alert__link_dark[_ngcontent-cym-c96] {
            color: #357 !important;
            text-decoration: underline;
            font-weight: 600
        }

        .alert__action[_ngcontent-cym-c96] {
            margin-left: auto;
            padding: 0;
            border-width: 0;
            background-color: rgba(255, 255, 255, 0);
            cursor: pointer;
            text-decoration: none;
            transition: color .3s
        }

        .alert_green[_ngcontent-cym-c96] .alert__action[_ngcontent-cym-c96]:hover {
            color: #40d586
        }

        .alert__action_d-blue[_ngcontent-cym-c96] {
            color: #124264
        }

        .cart-table[_ngcontent-cym-c96] {
            width: 100%;
            font-size: 16px;
            line-height: 1;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 47px
        }

        @media (max-width: 767.9px) {
            .cart-table[_ngcontent-cym-c96] {
                font-size: 14px;
                margin-top: 20px
            }
        }

        .cart-table__row[_ngcontent-cym-c96] {
            position: relative;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            align-items: center;
            -webkit-align-content: center;
            align-content: center;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            border-bottom: solid 1px #e5e5e5;
            width: 100%;
            padding: 10px
        }

        @media (max-width: 767.9px) {
            .cart-table__row[_ngcontent-cym-c96] {
                padding: 15px 0 10px 93px;
                min-height: 101px;
                -webkit-align-items: flex-start;
                align-items: flex-start
            }
        }

        .cart-table__row[_ngcontent-cym-c96]:first-of-type {
            border-top: solid 1px #e5e5e5
        }

        .cart-table__row_updating[_ngcontent-cym-c96] {
            opacity: .5;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%)
        }

        .cart-table__cell[_ngcontent-cym-c96] {
            position: relative;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-align-items: center;
            align-items: center;
            -webkit-align-content: center;
            align-content: center
        }

        .cart-table__cell_image[_ngcontent-cym-c96] {
            max-width: 120px;
            min-width: 93px;
            width: 10.9%;
            max-height: 90px;
            min-height: 70px
        }

        @media (max-width: 991.9px) {
            .cart-table__cell_image[_ngcontent-cym-c96] {
                width: 13.9%
            }
        }

        @media (max-width: 767.9px) {
            .cart-table__cell_image[_ngcontent-cym-c96] {
                position: absolute;
                left: 0;
                top: 16px;
                bottom: 15px;
                height: 70px;
                width: 10.9%
            }
        }

        .cart-table__cell_image[_ngcontent-cym-c96] a[_ngcontent-cym-c96] {
            font-size: 0
        }

        .cart-table__cell_image[_ngcontent-cym-c96] img[_ngcontent-cym-c96] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .cart-table__cell_name[_ngcontent-cym-c96] {
            max-width: 500px;
            width: 45%;
            padding-left: 29px;
            padding-right: 20px;
            font-weight: 500;
            line-height: 1.1;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            align-items: flex-start
        }

        @media (max-width: 991.9px) {
            .cart-table__cell_name[_ngcontent-cym-c96] {
                width: 43%
            }
        }

        @media (max-width: 767.9px) {
            .cart-table__cell_name[_ngcontent-cym-c96] {
                max-width: 100%;
                width: 100%;
                padding-left: 12px;
                padding-right: 20px;
                margin-bottom: 5px;
                line-height: 1.11
            }
        }

        .cart-table__cell_quantity[_ngcontent-cym-c96] {
            max-width: 287px;
            width: 23.3%;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media (max-width: 991.9px) {
            .cart-table__cell_quantity[_ngcontent-cym-c96] {
                width: 22.3%
            }
        }

        @media (max-width: 767.9px) {
            .cart-table__cell_quantity[_ngcontent-cym-c96] {
                width: auto;
                padding-left: 12px
            }
        }

        .cart-table__cell_price[_ngcontent-cym-c96] {
            max-width: 165px;
            width: 14.9%;
            padding-left: 29px
        }

        @media (max-width: 767.9px) {
            .cart-table__cell_price[_ngcontent-cym-c96] {
                width: auto;
                padding-left: 14px;
                height: 24px;
                line-height: .5
            }
        }

        .cart-table__cell_remove[_ngcontent-cym-c96] {
            width: 5.9%;
            max-width: 68px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            padding-right: 7px;
            padding-top: 4px
        }

        @media (max-width: 767.9px) {
            .cart-table__cell_remove[_ngcontent-cym-c96] {
                position: absolute;
                right: 0;
                top: 18px;
                padding: 0
            }
        }

        .cart-table__link[_ngcontent-cym-c96] {
            color: #3fa9f5;
            text-decoration: none;
            font-size: 16px
        }

        @media (max-width: 767.9px) {
            .cart-table__link[_ngcontent-cym-c96] {
                font-size: 14px
            }
        }

        @media (max-width: 377.9px) {
            .cart-table__link[_ngcontent-cym-c96] {
                font-size: 13px
            }
        }

        .cart-table__link[_ngcontent-cym-c96]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .cart-table__remove[_ngcontent-cym-c96] {
            border: none;
            background-color: transparent;
            font-size: 23px;
            line-height: .5;
            color: #bcbcbc;
            cursor: pointer;
            padding: 0
        }

        .cart-table__text[_ngcontent-cym-c96] {
            margin: 0;
            color: gray;
            font-size: 16px;
            line-height: 1
        }

        @media (max-width: 767.9px) {
            .cart-table__text[_ngcontent-cym-c96] {
                font-size: 14px
            }
        }

        .cart-table__answer[_ngcontent-cym-c96] {
            color: #8b8b8b;
            line-height: 1;
            margin: 0;
            padding-top: 7px
        }

        @media (max-width: 767.9px) {
            .cart-table__answer[_ngcontent-cym-c96] {
                font-size: 12px;
                padding-top: 0;
                margin: 4px 0
            }
        }

        .cart-table__text-bold[_ngcontent-cym-c96] {
            margin: 0;
            font-weight: 700;
            color: gray
        }

        .cart-table__price[_ngcontent-cym-c96] {
            font-weight: 500;
            color: #495057
        }

        .cart-table__original-price[_ngcontent-cym-c96] {
            font-weight: 400;
            color: #adbdc8;
            text-decoration: line-through;
            padding-left: 5px
        }

        .cart-table__quantity[_ngcontent-cym-c96] {
            border: 1px solid #e9e9e9;
            border-radius: 4px;
            box-shadow: 0 0 4px rgba(0, 0, 0, .08);
            display: -webkit-flex;
            display: flex
        }

        .cart-table__quantity[_ngcontent-cym-c96] button[_ngcontent-cym-c96] {
            background-color: transparent;
            border: none;
            width: 30px;
            height: 30px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            color: #2aa8f8;
            line-height: .5;
            font-weight: 700;
            font-size: 18px;
            padding: 0;
            cursor: pointer
        }

        .cart-table__quantity[_ngcontent-cym-c96] button[_ngcontent-cym-c96]:disabled {
            background-color: #f9f9f9;
            box-shadow: none;
            color: #c4c9ce
        }

        @media (max-width: 767.9px) {
            .cart-table__quantity[_ngcontent-cym-c96] button[_ngcontent-cym-c96] {
                width: 18px;
                height: 22px
            }
        }

        .cart-table__quantity[_ngcontent-cym-c96] input[_ngcontent-cym-c96] {
            border: none;
            height: 30px;
            min-width: 41px;
            padding: 0;
            text-align: center;
            color: #495057;
            font-weight: 600;
            font-size: 16px;
            border-left: 1px solid #e9e9e9;
            border-right: 1px solid #e9e9e9
        }

        @media (max-width: 767.9px) {
            .cart-table__quantity[_ngcontent-cym-c96] input[_ngcontent-cym-c96] {
                font-size: 14px;
                padding-top: 2px;
                min-width: 33px;
                height: 22px
            }
        }

        .cart-table__bottom-wrapper[_ngcontent-cym-c96] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            width: 100%;
            margin-top: 20px;
            padding: 0 10px
        }

        @media (max-width: 991.9px) {
            .cart-table__bottom-wrapper[_ngcontent-cym-c96] {
                margin-top: 15px;
                padding: 0
            }
        }

        .cart-table__addons[_ngcontent-cym-c96]>div[_ngcontent-cym-c96] {
            margin-bottom: 10px
        }

        .cart-table__coupon[_ngcontent-cym-c96] {
            display: -webkit-flex;
            display: flex
        }

        .cart-table__coupon[_ngcontent-cym-c96] form[_ngcontent-cym-c96] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: flex-start;
            align-items: flex-start
        }

        .cart-table__coupon-input[_ngcontent-cym-c96] {
            width: 145px;
            padding: 9px 10px 7px;
            height: 31px;
            font-size: 14px;
            line-height: 1;
            border-radius: 4px 0 0 4px;
            border: 1px solid #e9ecef;
            background-color: #f6f7f9
        }

        @media (max-width: 575.9px) {
            .cart-table__coupon-input[_ngcontent-cym-c96] {
                width: 129px;
                font-size: 12px;
                height: 25px;
                padding: 5px 10px
            }
        }

        .cart-table__coupon-button[_ngcontent-cym-c96] {
            width: 108px;
            height: 31px;
            border-radius: 0 4px 4px 0;
            background-color: #2aa8f8;
            font-size: 14px;
            font-weight: 500;
            line-height: 1;
            padding: 3px 10px 0;
            color: #fff
        }

        @media (max-width: 575.9px) {
            .cart-table__coupon-button[_ngcontent-cym-c96] {
                width: 93px;
                height: 25px;
                font-size: 12px;
                padding: 0
            }
        }

        .cart-table__quantity-error[_ngcontent-cym-c96] {
            color: #dc3545;
            font-size: 13px;
            font-weight: 400;
            margin-top: 5px;
            width: 100%
        }

        .cart-table__reset-link[_ngcontent-cym-c96] {
            color: #3fa9f5;
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
            margin: 12px 30px
        }

        .cart-table__reset-link[_ngcontent-cym-c96]:hover {
            text-decoration: underline
        }

        .cart-total[_ngcontent-cym-c96] {
            width: 50%;
            max-width: 420px;
            padding-top: 15px
        }

        @media (max-width: 767.9px) {
            .cart-total[_ngcontent-cym-c96] {
                max-width: 370px;
                width: 100%;
                padding-top: 50px;
                margin: 0 auto
            }
        }

        .cart-total__table[_ngcontent-cym-c96] {
            width: 100%
        }

        .cart-total__row[_ngcontent-cym-c96] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            align-items: center;
            margin-bottom: 11px;
            font-weight: 500
        }

        .cart-total__row[_ngcontent-cym-c96]:last-of-type {
            font-weight: 800;
            margin-bottom: 0
        }

        .cart-total__cell[_ngcontent-cym-c96] {
            font-size: 18px;
            line-height: 1;
            color: #000
        }

        @media (max-width: 767.9px) {
            .cart-total__cell[_ngcontent-cym-c96] {
                font-size: 14px
            }
        }

        @media (max-width: 767.9px) {
            .cart-total__cell--large[_ngcontent-cym-c96] {
                font-size: 18px
            }
        }

        @media (max-width: 377.9px) {
            .cart-total__cell--large[_ngcontent-cym-c96] {
                font-size: 16px
            }
        }

        .cart-total__cell_coupon-value[_ngcontent-cym-c96] {
            color: #00ac51
        }

        .cart-total__checkout[_ngcontent-cym-c96] {
            width: 100%;
            margin-top: 31px
        }

        @media (max-width: 767.9px) {
            .cart-total__checkout[_ngcontent-cym-c96] {
                margin-top: 27px
            }
        }

        .cart-total__remove-coupon[_ngcontent-cym-c96] {
            font-weight: 400;
            font-size: 14px;
            color: #2aa8f8;
            transition: color .3s ease;
            text-decoration: none
        }

        .cart-total__remove-coupon[_ngcontent-cym-c96]:hover {
            text-decoration: underline
        }

        .cart-total__checkout-note[_ngcontent-cym-c96] {
            display: inline-block;
            margin-top: 8px;
            font-size: 16px
        }

        @media (max-width: 767.9px) {
            .cart-total__checkout-note[_ngcontent-cym-c96] {
                font-size: 14px
            }
        }

        .cart-total__asterisk[_ngcontent-cym-c96] {
            color: #dc3545;
            font-style: normal
        }

        @media (max-width: 767.9px) {
            .cart__items-container[_ngcontent-cym-c96] {
                max-width: 500px
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

        .loader-icon__box[_ngcontent-cym-c95] {
            text-align: center;
            padding: 10px 0
        }

        .loader-icon__page-box[_ngcontent-cym-c95] {
            text-align: center;
            padding: 100px 0 300px
        }

        .loader-icon__icon[_ngcontent-cym-c95] {
            width: 44px;
            height: 44px
        }

        .loader-icon__intext[_ngcontent-cym-c95] {
            width: 12px;
            height: 12px;
            line-height: inherit
        }

        .loader-icon__button[_ngcontent-cym-c95] {
            width: 16px;
            height: 16px
        }

        @media (max-width: 575.9px) {
            .section_last-chance[_ngcontent-cym-c95] .container_cart[_ngcontent-cym-c95] {
                padding: 0
            }
        }

        .section_last-chance[_ngcontent-cym-c95] .border[_ngcontent-cym-c95] {
            margin-top: 40px;
            border-top: solid 1px #e5e5e5
        }

        @media (max-width: 767.9px) {
            .section_last-chance[_ngcontent-cym-c95] .border[_ngcontent-cym-c95] {
                margin-top: 25px
            }
        }

        .last-chance[_ngcontent-cym-c95] {
            width: 100%;
            padding: 37px 0
        }

        @media (max-width: 767.9px) {
            .last-chance[_ngcontent-cym-c95] {
                padding: 31px 0
            }
        }

        .last-chance__title[_ngcontent-cym-c95] {
            margin: 0 0 48px;
            text-align: center;
            text-transform: uppercase;
            color: #000;
            font-size: 30px;
            font-weight: 700;
            line-height: 1;
            letter-spacing: -1.2px
        }

        @media (max-width: 767.9px) {
            .last-chance__title[_ngcontent-cym-c95] {
                margin-bottom: 24px;
                font-size: 20px;
                letter-spacing: normal
            }
        }

        .last-chance__carousel[_ngcontent-cym-c95] {
            width: 100%;
            margin: 0 auto
        }

        @media (max-width: 575.9px) {
            .last-chance__carousel[_ngcontent-cym-c95] {
                width: calc(100% - 16px)
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

        .slide-card[_ngcontent-cym-c94] {
            text-decoration: none;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: 100%;
            width: 100%;
            padding: 20px 3px 5px;
            box-sizing: border-box
        }

        .slide-card__image[_ngcontent-cym-c94] {
            width: 100%;
            position: relative
        }

        .slide-card__image[_ngcontent-cym-c94] img[_ngcontent-cym-c94] {
            width: 100%;
            display: block
        }

        .slide-card__wrapper[_ngcontent-cym-c94] {
            -webkit-flex-grow: 1;
            flex-grow: 1;
            padding-top: 12px
        }

        .slide-card__title[_ngcontent-cym-c94] {
            color: #3fa9f5;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.1;
            margin: 0;
            text-align: left;
            min-height: 46px
        }

        .slide-card__title[_ngcontent-cym-c94]>a[_ngcontent-cym-c94] {
            color: #3fa9f5;
            text-decoration: none;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        .slide-card__price[_ngcontent-cym-c94] {
            font-size: 16px;
            font-weight: 500;
            color: #000;
            line-height: 1;
            text-transform: uppercase;
            margin: 8px 0 4px
        }

        @media (max-width: 575.9px) {
            .slide-card__price[_ngcontent-cym-c94] {
                font-size: 14px;
                margin: 2px 0 4px
            }
        }

        .slide-card__price-old[_ngcontent-cym-c94] {
            color: #e33333;
            text-decoration: line-through;
            margin-right: 7px
        }

        .slide-card__drawtime[_ngcontent-cym-c94] {
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
            .slide-card__drawtime[_ngcontent-cym-c94] {
                top: -12px
            }
        }

        .slide-card__drawtime--soon[_ngcontent-cym-c94] {
            background-color: #2aa8f8;
            color: #fff
        }

        .slide-card__drawtime--urgent[_ngcontent-cym-c94] {
            background-color: #40d586;
            color: #fff
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

        .alert-list__item[_ngcontent-cym-c118] {
            margin-bottom: 25px
        }

        .alert-list__item--short[_ngcontent-cym-c118] {
            padding-top: 10px !important;
            padding-bottom: 10px !important
        }

        .alert-list__item--lighter-font[_ngcontent-cym-c118] p[_ngcontent-cym-c118],
        .alert-list__item--lighter-font[_ngcontent-cym-c118] p[_ngcontent-cym-c118] a[_ngcontent-cym-c118] {
            font-size: 16px;
            font-weight: 300
        }

        .alert-list__item--smaller-font[_ngcontent-cym-c118] p[_ngcontent-cym-c118],
        .alert-list__item--smaller-font[_ngcontent-cym-c118] p[_ngcontent-cym-c118] a[_ngcontent-cym-c118] {
            font-size: 16px
        }

        .alert-list--margin-minus10px[_ngcontent-cym-c118] {
            margin-left: -10px;
            margin-right: -10px
        }

        .alert[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 18px 25px;
            border-width: 1px;
            border-style: solid
        }

        .alert_column[_ngcontent-cym-c118] {
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .alert_blue[_ngcontent-cym-c118] {
            background-color: #cce9fe;
            border-color: #b8e0fe
        }

        .alert_light-blue[_ngcontent-cym-c118] {
            background: #ecf9ff;
            border-color: #ecf9ff
        }

        .alert_green[_ngcontent-cym-c118] {
            background-color: #d9f7e7;
            border-color: #caf3dd
        }

        .alert_warn[_ngcontent-cym-c118] {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert_error[_ngcontent-cym-c118] {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            font-weight: 400;
            margin-bottom: 50px;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .alert_text-left[_ngcontent-cym-c118] {
            text-align: left;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .alert_mt[_ngcontent-cym-c118] {
            margin-top: 50px
        }

        .alert_mb[_ngcontent-cym-c118] {
            margin-bottom: 30px
        }

        .alert__text[_ngcontent-cym-c118],
        .alert__link[_ngcontent-cym-c118] {
            margin: 0;
            font-size: 17px;
            line-height: 26px;
            font-weight: 400;
            text-align: center
        }

        .alert_blue[_ngcontent-cym-c118] .alert__text[_ngcontent-cym-c118],
        .alert_light-blue[_ngcontent-cym-c118] .alert__text[_ngcontent-cym-c118],
        .alert_blue[_ngcontent-cym-c118] .alert__link[_ngcontent-cym-c118],
        .alert_light-blue[_ngcontent-cym-c118] .alert__link[_ngcontent-cym-c118] {
            color: #124264
        }

        .alert_green[_ngcontent-cym-c118] .alert__text[_ngcontent-cym-c118],
        .alert_green[_ngcontent-cym-c118] .alert__link[_ngcontent-cym-c118] {
            color: #216f46
        }

        .alert__text_d-blue[_ngcontent-cym-c118],
        .alert__link_d-blue[_ngcontent-cym-c118] {
            color: #124264
        }

        .alert__link[_ngcontent-cym-c118] {
            font-size: 17px;
            line-height: 26px;
            font-weight: 400;
            text-decoration: none
        }

        .alert__link[_ngcontent-cym-c118]:hover {
            text-decoration: underline
        }

        .alert_blue[_ngcontent-cym-c118] .alert__link[_ngcontent-cym-c118],
        .alert_light-blue[_ngcontent-cym-c118] .alert__link[_ngcontent-cym-c118],
        .alert_warn[_ngcontent-cym-c118] .alert__link[_ngcontent-cym-c118] {
            color: #3fa9f5
        }

        .alert__link_right[_ngcontent-cym-c118] {
            margin-left: auto
        }

        .alert__link_green[_ngcontent-cym-c118] {
            color: #216f46
        }

        .alert__link_d-blue[_ngcontent-cym-c118] {
            color: #124264
        }

        .alert__link_dark[_ngcontent-cym-c118] {
            color: #357 !important;
            text-decoration: underline;
            font-weight: 600
        }

        .alert__action[_ngcontent-cym-c118] {
            margin-left: auto;
            padding: 0;
            border-width: 0;
            background-color: rgba(255, 255, 255, 0);
            cursor: pointer;
            text-decoration: none;
            transition: color .3s
        }

        .alert_green[_ngcontent-cym-c118] .alert__action[_ngcontent-cym-c118]:hover {
            color: #40d586
        }

        .alert__action_d-blue[_ngcontent-cym-c118] {
            color: #124264
        }

        .coupon[_ngcontent-cym-c118] {
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

        .coupon[_ngcontent-cym-c118]:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        .coupon__wrapper[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        .coupon__icon[_ngcontent-cym-c118] {
            width: 24px;
            height: 24px;
            color: rgba(255, 255, 255, 0);
            stroke: #2b2d42
        }

        .coupon__body[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: center;
            justify-content: center;
            padding: 0 8px
        }

        .coupon__credit[_ngcontent-cym-c118] {
            margin-top: 6px;
            margin-bottom: 4px;
            font-size: 14px;
            line-height: 14px;
            font-weight: 700;
            color: #d90429
        }

        .coupon__number[_ngcontent-cym-c118] {
            margin-top: 0;
            margin-bottom: 4px;
            font-size: 12px;
            line-height: 12px;
            color: #2b2d42
        }

        .coupon__date[_ngcontent-cym-c118] {
            margin: 0;
            font-size: 12px;
            line-height: 12px;
            color: #2b2d42
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

        .coupon-list[_ngcontent-cym-c118] {
            margin-bottom: 30px
        }

        .coupon-list__title[_ngcontent-cym-c118] {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 32px;
            line-height: 39px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__title_account[_ngcontent-cym-c118] {
            margin-bottom: 8px
        }

        .coupon-list__subtitle-row[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin-bottom: 8px
        }

        .coupon-list__subtitle[_ngcontent-cym-c118] {
            margin: 0;
            font-size: 24px;
            line-height: 28.8px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__print-button[_ngcontent-cym-c118] {
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

        .coupon-list__print-button[_ngcontent-cym-c118]:hover {
            color: #0b85dc
        }

        .coupon-list__print-button[_ngcontent-cym-c118]:focus {
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .coupon-list__text[_ngcontent-cym-c118] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 25.5px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__row[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -4px
        }

        .coupon-list__col[_ngcontent-cym-c118] {
            margin: 0 4px 8px
        }

        .coupon-list__total-text[_ngcontent-cym-c118] {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 16px;
            line-height: 24px;
            color: gray;
            text-align: right
        }

        .coupon-list__total-bold-text[_ngcontent-cym-c118] {
            font-size: 24px;
            line-height: 36px;
            font-weight: 700
        }

        .ng-select[_ngcontent-cym-c118] {
            width: auto;
            display: inline-block
        }

        .ng-select.ng-invalid.ng-touched[_ngcontent-cym-c118] .ng-select-container {
            border-color: #dc3545;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 0 3px #fde6e8
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c118] .ng-select-container {
            min-width: 60px;
            width: auto
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c118] .ng-select-container .ng-value-container {
            padding-left: 3px
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c118] .ng-select-container .ng-value-container .ng-input {
            padding-left: 3px;
            padding-right: 10px;
            padding-top: 2px
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c118] .ng-select-container .ng-arrow-wrapper {
            padding-right: 1px;
            width: auto
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c118] .ng-select-container .ng-arrow-wrapper .ng-arrow {
            -webkit-transform: scale(.7);
            transform: scale(.7);
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .ng-select[_ngcontent-cym-c118] .ng-select-container {
            padding: 10px 0;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s;
            height: auto;
            border-radius: 0
        }

        .ng-select[_ngcontent-cym-c118] .ng-select-container:focus {
            background-color: #fff;
            border-color: #b8dffb;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .ng-select[_ngcontent-cym-c118] .ng-dropdown-panel {
            width: auto;
            max-width: 280px
        }

        .ng-select[_ngcontent-cym-c118] .ng-dropdown-panel .ng-option {
            font-size: 14px
        }

        .checkout-form__group[_ngcontent-cym-c118] {
            margin-bottom: 16px;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media (max-width: 575.9px) {
            .checkout-form__group[_ngcontent-cym-c118] {
                -webkit-flex-direction: column;
                flex-direction: column
            }
        }

        .checkout-form__group_has-error[_ngcontent-cym-c118] .checkout-form__label[_ngcontent-cym-c118] {
            color: #dc3545
        }

        .checkout-form__error[_ngcontent-cym-c118] {
            display: block;
            font-size: 16px;
            color: #dc3545;
            -webkit-flex: 0 0 100%;
            flex: 0 0 100%
        }

        @media (min-width: 992px) {
            .checkout-form__error[_ngcontent-cym-c118] {
                padding-left: 230px
            }
        }

        .checkout-form__message[_ngcontent-cym-c118] {
            display: block;
            font-size: 16px;
            -webkit-flex: 0 0 100%;
            flex: 0 0 100%
        }

        @media (min-width: 992px) {
            .checkout-form__message[_ngcontent-cym-c118] {
                padding-left: 230px
            }
        }

        .checkout-form__error-message[_ngcontent-cym-c118] {
            display: block;
            font-size: 16px;
            color: #dc3545;
            width: 100%
        }

        @media (min-width: 992px) {
            .checkout-form__error-message[_ngcontent-cym-c118] {
                padding-left: 230px
            }
        }

        .checkout-form__label[_ngcontent-cym-c118] {
            display: block;
            padding-top: 4px;
            margin-bottom: 8px;
            font-size: 17px;
            line-height: 26px;
            font-weight: 700;
            color: #124264;
            -webkit-flex: 0 0 230px;
            flex: 0 0 230px
        }

        @media (max-width: 575.9px) {
            .checkout-form__label[_ngcontent-cym-c118] {
                -webkit-flex: 0 0 100%;
                flex: 0 0 100%
            }
        }

        .checkout-form__abbr[_ngcontent-cym-c118] {
            margin-right: 5px;
            cursor: help
        }

        .checkout-form__input-group[_ngcontent-cym-c118] {
            -webkit-flex: 1 0 350px;
            flex: 1 0 350px;
            display: -webkit-flex;
            display: flex;
            -webkit-column-gap: 5px;
            -moz-column-gap: 5px;
            column-gap: 5px
        }

        @media (max-width: 575.9px) {
            .checkout-form__input-group[_ngcontent-cym-c118] {
                -webkit-flex: 0 0 auto;
                flex: 0 0 auto
            }
        }

        .checkout-form__input[_ngcontent-cym-c118] {
            display: block;
            -webkit-flex: 1 0 350px;
            flex: 1 0 350px;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s
        }

        @media (max-width: 575.9px) {
            .checkout-form__input[_ngcontent-cym-c118] {
                -webkit-flex: 0 0 auto;
                flex: 0 0 auto
            }
        }

        .checkout-form__input[_ngcontent-cym-c118]:focus {
            background-color: #fff;
            border-color: #b8dffb;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .checkout-form__input--size2[_ngcontent-cym-c118] {
            -webkit-flex: 0 0 auto !important;
            flex: 0 0 auto !important
        }

        .checkout-form__input--size-fill[_ngcontent-cym-c118] {
            -webkit-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
            width: 100px
        }

        .checkout-form__ngselect[_ngcontent-cym-c118] {
            -webkit-flex: 1 0 350px;
            flex: 1 0 350px
        }

        @media (max-width: 575.9px) {
            .checkout-form__ngselect[_ngcontent-cym-c118] {
                -webkit-flex: 0 0 auto;
                flex: 0 0 auto
            }
        }

        .checkout-form[_ngcontent-cym-c118] select.checkout-form__input[_ngcontent-cym-c118] {
            max-width: 100%
        }

        .checkout-form__note[_ngcontent-cym-c118] {
            margin-top: 7px;
            margin-bottom: 0;
            font-size: 9px;
            line-height: 14px;
            color: gray;
            padding-left: 210px
        }

        @media (max-width: 575.9px) {
            .checkout-form__note[_ngcontent-cym-c118] {
                padding-left: 0
            }
        }

        .checkout-form__note-link[_ngcontent-cym-c118] {
            color: gray;
            text-decoration: none
        }

        .checkout-form__button[_ngcontent-cym-c118] {
            width: 340px;
            margin: 25px 0 30px auto;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            align-items: center
        }

        @media (max-width: 575.9px) {
            .checkout-form__button[_ngcontent-cym-c118] {
                width: 100%;
                margin-left: 0
            }
        }

        .checkout-form__info[_ngcontent-cym-c118] {
            font-size: 14px;
            color: #999;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 40px
        }

        .checkout-form__info-icon[_ngcontent-cym-c118] {
            width: 20px;
            height: 20px;
            margin: -4px 6px 0 0
        }

        .checkout-form__info-link[_ngcontent-cym-c118] {
            color: #999
        }

        .checkout-form__question[_ngcontent-cym-c118] {
            width: 18px;
            height: 18px;
            display: -webkit-inline-flex;
            display: inline-flex;
            color: #999;
            margin: 0 0 0 10px;
            vertical-align: -2px;
            cursor: pointer;
            position: relative
        }

        .checkout-form__hint[_ngcontent-cym-c118] {
            position: absolute;
            top: 0;
            left: -75px;
            padding: 10px;
            border-radius: 3px;
            background: #fff;
            z-index: 1;
            box-shadow: 0 0 14px rgba(0, 0, 0, .2);
            opacity: 0;
            -webkit-transform: scale(.2) translate(0px, -130px);
            transform: scale(.2) translateY(-130px);
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            transition: opacity .4s ease, -webkit-transform 1s ease;
            transition: transform 1s ease, opacity .4s ease;
            transition: transform 1s ease, opacity .4s ease, -webkit-transform 1s ease;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }

        @media (min-width: 490px) {
            .checkout-form__hint[_ngcontent-cym-c118] {
                left: 25px;
                -webkit-transform: scale(.2) translate(-75px, -30px);
                transform: scale(.2) translate(-75px, -30px);
                -webkit-transform-origin: 0 0;
                transform-origin: 0 0
            }
        }

        .checkout-form__hint_active[_ngcontent-cym-c118] {
            pointer-events: all;
            opacity: 1;
            -webkit-transform: scale(1) translate(0, 0);
            transform: scale(1) translate(0);
            transition: opacity .3s ease, -webkit-transform .35s cubic-bezier(.075, .82, .165, 1);
            transition: transform .35s cubic-bezier(.075, .82, .165, 1), opacity .3s ease;
            transition: transform .35s cubic-bezier(.075, .82, .165, 1), opacity .3s ease, -webkit-transform .35s cubic-bezier(.075, .82, .165, 1)
        }

        @media (min-width: 490px) {
            .checkout-form__hint_active[_ngcontent-cym-c118] {
                -webkit-transform: scale(1) translate(0, 0);
                transform: scale(1) translate(0)
            }
        }

        .checkout-order[_ngcontent-cym-c118] {
            font-size: 16px;
            line-height: 24px;
            color: gray
        }

        .checkout-order__table[_ngcontent-cym-c118] {
            width: 100%;
            margin-bottom: 16px;
            border-collapse: collapse;
            color: #124264
        }

        .checkout-order__table-cell[_ngcontent-cym-c118] {
            padding: 12px;
            border: 1px solid #f6f7f9
        }

        .checkout-order__text-bold[_ngcontent-cym-c118] {
            color: #124264;
            font-weight: 700
        }

        .checkout-order__text[_ngcontent-cym-c118] {
            margin-top: 0;
            margin-bottom: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .checkout-order__text_sm[_ngcontent-cym-c118] {
            font-size: 15px
        }

        .checkout-order__panel-list[_ngcontent-cym-c118] {
            margin-bottom: 16px
        }

        .checkout-order__panel[_ngcontent-cym-c118] {
            padding: 12px;
            border: 1px solid #f6f7f9
        }

        .checkout-order__image[_ngcontent-cym-c118] {
            max-width: 100%
        }

        .checkout-order__agree-check[_ngcontent-cym-c118] {
            padding-top: 30px;
            padding-bottom: 30px;
            position: relative
        }

        .checkout-order__agree-check-error[_ngcontent-cym-c118] {
            display: block;
            min-height: 25px;
            margin-bottom: -25px
        }

        .checkout-order__link[_ngcontent-cym-c118] {
            color: #3fa9f5;
            text-decoration: none
        }

        .checkout-order__link[_ngcontent-cym-c118]:hover {
            text-decoration: underline
        }

        .checkout-order__submit[_ngcontent-cym-c118] {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            position: relative
        }

        .checkout-order__submit--paypal[_ngcontent-cym-c118] {
            background: #ffc439;
            color: #2c2e2f;
            font-weight: 500
        }

        .checkout-order__submit--card-icon[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            gap: 10px;
            font-size: 12px;
            color: #000;
            width: 100%;
            -webkit-justify-content: center;
            justify-content: center;
            margin-bottom: 15px;
            -webkit-align-items: center;
            align-items: center
        }

        .checkout-order__submit--card-icon[_ngcontent-cym-c118] svg-icon[_ngcontent-cym-c118] {
            max-width: 45px
        }

        .checkout-order__submit--paypal-icon[_ngcontent-cym-c118] {
            height: 21px;
            width: auto;
            display: inline-block;
            vertical-align: -5px;
            margin-left: 2px
        }

        @media (max-width: 991.9px) {
            .checkout-order__submit--paypal-icon[_ngcontent-cym-c118] {
                height: 18px;
                vertical-align: -4px;
                margin-left: 3px
            }
        }

        .checkout-order__submit--utrust[_ngcontent-cym-c118] {
            background: #E9EBED;
            color: #274444
        }

        .checkout-order__submit-help[_ngcontent-cym-c118] {
            font-size: 11px;
            text-align: center;
            color: #495a66
        }

        .checkout-order__submit-container[_ngcontent-cym-c118] {
            padding: 10px 0
        }

        .checkout-order__remove-coupon[_ngcontent-cym-c118] {
            font-weight: 400;
            color: #3fa9f5;
            transition: color .3s ease;
            text-decoration: none
        }

        .checkout-order__remove-coupon[_ngcontent-cym-c118]:hover {
            text-decoration: underline;
            color: #0b85dc
        }

        .checkout-order__save-info[_ngcontent-cym-c118] {
            padding-bottom: 25px;
            position: relative
        }

        .checkout-order__error[_ngcontent-cym-c118] {
            display: block;
            min-height: 25px;
            margin-bottom: -25px
        }

        .payment-method[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .payment-method__item[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 0 20px;
            cursor: pointer
        }

        .payment-method__input[_ngcontent-cym-c118] {
            display: none
        }

        .payment-method__input[_ngcontent-cym-c118]:checked+span[_ngcontent-cym-c118] {
            color: #5db771;
            opacity: 1
        }

        .payment-method__input[_ngcontent-cym-c118]:checked+span[_ngcontent-cym-c118]+span[_ngcontent-cym-c118] {
            opacity: 1
        }

        .payment-method__icon[_ngcontent-cym-c118] {
            -webkit-flex: 0 0 30px;
            flex: 0 0 30px;
            height: 30px;
            margin: 0 20px 0 0;
            opacity: .2
        }

        .payment-method__type[_ngcontent-cym-c118] {
            width: 100%;
            opacity: .2;
            margin: 15px 0
        }

        .payment-method__img[_ngcontent-cym-c118] {
            max-width: 100%
        }

        .payment-method__type_paypal {
            width: 120px !important
        }

        .card-details[_ngcontent-cym-c118] {
            margin-bottom: 50px
        }

        @media (min-width: 768px) {
            .card-details[_ngcontent-cym-c118] {
                padding-left: 30px
            }
        }

        @media (min-width: 768px) {
            .card-details__card-list[_ngcontent-cym-c118] {
                padding-left: 30px
            }
        }

        .card-details__item[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            font-size: 14px;
            margin-bottom: 15px;
            transition: opacity .35s ease;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            max-width: 340px
        }

        @media (max-width: 767.9px) {
            .card-details__item[_ngcontent-cym-c118] {
                font-size: 13px
            }
        }

        .card-details__item_disabled[_ngcontent-cym-c118] {
            opacity: .5
        }

        .card-details__input[_ngcontent-cym-c118] {
            margin: 0 30px 0 10px
        }

        @media (max-width: 767.9px) {
            .card-details__input[_ngcontent-cym-c118] {
                margin: 0 20px 0 8px
            }
        }

        .card-details__icon[_ngcontent-cym-c118] {
            height: 28px;
            width: 28px;
            margin: 0 30px 0 0
        }

        @media (max-width: 767.9px) {
            .card-details__icon[_ngcontent-cym-c118] {
                margin: 0 15px 0 0
            }
        }

        .card-details__expires[_ngcontent-cym-c118] {
            margin-left: 30px
        }

        @media (max-width: 767.9px) {
            .card-details__expires[_ngcontent-cym-c118] {
                margin-left: 15px
            }
        }

        .card-details__code[_ngcontent-cym-c118] {
            width: 100%;
            display: none;
            -webkit-align-items: center;
            align-items: center;
            padding-bottom: 32px;
            position: relative
        }

        .card-details__item_active[_ngcontent-cym-c118] .card-details__code[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex
        }

        .card-details__code-label[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            margin-left: auto
        }

        .card-details__code-input[_ngcontent-cym-c118] {
            display: block;
            width: 96px;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s;
            margin: 0 0 0 16px
        }

        .card-details__code-error[_ngcontent-cym-c118] {
            position: absolute;
            left: 12px;
            bottom: 0;
            white-space: nowrap;
            font-size: 14px
        }

        .coupon-form[_ngcontent-cym-c118] {
            padding: 30px 15px;
            background: #f6f7f9;
            margin-bottom: 30px
        }

        .coupon-form__outer[_ngcontent-cym-c118] {
            margin-top: 25px;
            overflow: hidden
        }

        .coupon-form__label[_ngcontent-cym-c118] {
            text-align: center;
            margin-bottom: 16px;
            color: gray
        }

        .coupon-form__inputs[_ngcontent-cym-c118] {
            text-align: center
        }

        .coupon-form__input-text[_ngcontent-cym-c118] {
            display: inline-block;
            padding: 7.5px 15px;
            max-width: 215px;
            width: 100%;
            height: 56px;
            text-align: left;
            font-family: inherit;
            font-size: 17px;
            line-height: 25.5px;
            font-weight: 400;
            color: #000;
            background: white;
            border: 1px solid black
        }

        .coupon-form__submit[_ngcontent-cym-c118] {
            cursor: pointer;
            font-family: inherit;
            margin-left: 20px;
            padding: 7.5px 15px;
            max-width: 215px;
            width: 100%;
            height: 56px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            line-height: 25.5px;
            font-weight: 700;
            color: #000;
            background: rgb(239, 239, 239);
            border: 1px solid rgb(239, 239, 239)
        }

        @media (max-width: 767.9px) {
            .coupon-form__submit[_ngcontent-cym-c118] {
                display: block;
                margin: 10px auto 0
            }
        }

        .auth__box[_ngcontent-cym-c118] {
            padding: 15px;
            border: 1px solid #dee2e6;
            margin-bottom: 30px
        }

        .auth__introduction[_ngcontent-cym-c118] {
            margin-bottom: 16px;
            font-size: 17px;
            color: gray
        }

        .auth__outer[_ngcontent-cym-c118] {
            margin-top: 25px;
            overflow: hidden
        }

        .auth__outer_updating[_ngcontent-cym-c118] {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%)
        }

        .auth__label[_ngcontent-cym-c118] {
            display: block;
            margin-bottom: 16px
        }

        .auth__label-text[_ngcontent-cym-c118] {
            display: block;
            width: 100%;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 17px;
            line-height: 26px;
            font-weight: 700;
            color: gray
        }

        .auth__label-text_blue[_ngcontent-cym-c118] {
            color: #124264
        }

        .auth__label_checkbox[_ngcontent-cym-c118] .auth__label-text[_ngcontent-cym-c118] {
            display: inline-block;
            width: auto;
            margin-bottom: 0
        }

        .auth__label_has-error[_ngcontent-cym-c118] .auth__label-text[_ngcontent-cym-c118] {
            color: #dc3545
        }

        .auth__input[_ngcontent-cym-c118] {
            width: 100%;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: box-shadow .3s
        }

        .auth__input[_ngcontent-cym-c118]:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .auth__checkbox[_ngcontent-cym-c118] {
            margin-right: 6px;
            cursor: pointer
        }

        .auth__button[_ngcontent-cym-c118] {
            width: 100%;
            max-width: 140px;
            margin: 16px auto
        }

        .auth__text[_ngcontent-cym-c118] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 26px;
            color: gray
        }

        .auth__text_center[_ngcontent-cym-c118] {
            text-align: center
        }

        .auth__link[_ngcontent-cym-c118] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .3s;
            cursor: pointer
        }

        .auth__link[_ngcontent-cym-c118]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .auth__message[_ngcontent-cym-c118] {
            font-size: 16px
        }

        .auth__label_has-error[_ngcontent-cym-c118] .auth__message[_ngcontent-cym-c118],
        .auth__message_error[_ngcontent-cym-c118] {
            color: #dc3545
        }

        .auth__message-description[_ngcontent-cym-c118] {
            margin-top: 6px;
            color: gray;
            line-height: 1.6;
            display: inline-block;
            font-size: 13px
        }

        .checkout[_ngcontent-cym-c118] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -15px
        }

        .checkout__form[_ngcontent-cym-c118] {
            width: 100%;
            max-width: 66.66666%;
            padding: 0 30px 0 15px
        }

        @media (max-width: 767.9px) {
            .checkout__form[_ngcontent-cym-c118] {
                max-width: 100%;
                margin-bottom: 14px;
                padding-right: 15px
            }
        }

        .checkout__form_updating[_ngcontent-cym-c118] {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            opacity: .5
        }

        @media (max-width: 767.9px) {
            .checkout__form_card-details[_ngcontent-cym-c118] {
                margin-top: 30px
            }
        }

        .checkout__order[_ngcontent-cym-c118] {
            width: 100%;
            max-width: 33.33333%;
            padding: 0 15px
        }

        @media (max-width: 767.9px) {
            .checkout__order[_ngcontent-cym-c118] {
                max-width: 100%
            }
        }

        .checkout__title[_ngcontent-cym-c118] {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 32px;
            line-height: 39px;
            font-weight: 400;
            color: gray
        }

        .checkout__title_mt[_ngcontent-cym-c118] {
            margin-top: 50px
        }

        @media (max-width: 767.9px) {
            .checkout__title_mt[_ngcontent-cym-c118] {
                margin-top: 0
            }
        }

        .checkout__title_payment[_ngcontent-cym-c118] {
            margin-top: 30px;
            font-size: 24px
        }

        .is-processing[_ngcontent-cym-c118] {
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
            opacity: .7;
            pointer-events: none
        }

        .spinner-place-order[_ngcontent-cym-c118] {
            height: 16px;
            width: 16px;
            color: #fff;
            margin-right: 5px
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

        .alert-list__item[_ngcontent-cym-c117] {
            margin-bottom: 25px
        }

        .alert-list__item--short[_ngcontent-cym-c117] {
            padding-top: 10px !important;
            padding-bottom: 10px !important
        }

        .alert-list__item--lighter-font[_ngcontent-cym-c117] p[_ngcontent-cym-c117],
        .alert-list__item--lighter-font[_ngcontent-cym-c117] p[_ngcontent-cym-c117] a[_ngcontent-cym-c117] {
            font-size: 16px;
            font-weight: 300
        }

        .alert-list__item--smaller-font[_ngcontent-cym-c117] p[_ngcontent-cym-c117],
        .alert-list__item--smaller-font[_ngcontent-cym-c117] p[_ngcontent-cym-c117] a[_ngcontent-cym-c117] {
            font-size: 16px
        }

        .alert-list--margin-minus10px[_ngcontent-cym-c117] {
            margin-left: -10px;
            margin-right: -10px
        }

        .alert[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 18px 25px;
            border-width: 1px;
            border-style: solid
        }

        .alert_column[_ngcontent-cym-c117] {
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .alert_blue[_ngcontent-cym-c117] {
            background-color: #cce9fe;
            border-color: #b8e0fe
        }

        .alert_light-blue[_ngcontent-cym-c117] {
            background: #ecf9ff;
            border-color: #ecf9ff
        }

        .alert_green[_ngcontent-cym-c117] {
            background-color: #d9f7e7;
            border-color: #caf3dd
        }

        .alert_warn[_ngcontent-cym-c117] {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert_error[_ngcontent-cym-c117] {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            font-weight: 400;
            margin-bottom: 50px;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .alert_text-left[_ngcontent-cym-c117] {
            text-align: left;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .alert_mt[_ngcontent-cym-c117] {
            margin-top: 50px
        }

        .alert_mb[_ngcontent-cym-c117] {
            margin-bottom: 30px
        }

        .alert__text[_ngcontent-cym-c117],
        .alert__link[_ngcontent-cym-c117] {
            margin: 0;
            font-size: 17px;
            line-height: 26px;
            font-weight: 400;
            text-align: center
        }

        .alert_blue[_ngcontent-cym-c117] .alert__text[_ngcontent-cym-c117],
        .alert_light-blue[_ngcontent-cym-c117] .alert__text[_ngcontent-cym-c117],
        .alert_blue[_ngcontent-cym-c117] .alert__link[_ngcontent-cym-c117],
        .alert_light-blue[_ngcontent-cym-c117] .alert__link[_ngcontent-cym-c117] {
            color: #124264
        }

        .alert_green[_ngcontent-cym-c117] .alert__text[_ngcontent-cym-c117],
        .alert_green[_ngcontent-cym-c117] .alert__link[_ngcontent-cym-c117] {
            color: #216f46
        }

        .alert__text_d-blue[_ngcontent-cym-c117],
        .alert__link_d-blue[_ngcontent-cym-c117] {
            color: #124264
        }

        .alert__link[_ngcontent-cym-c117] {
            font-size: 17px;
            line-height: 26px;
            font-weight: 400;
            text-decoration: none
        }

        .alert__link[_ngcontent-cym-c117]:hover {
            text-decoration: underline
        }

        .alert_blue[_ngcontent-cym-c117] .alert__link[_ngcontent-cym-c117],
        .alert_light-blue[_ngcontent-cym-c117] .alert__link[_ngcontent-cym-c117],
        .alert_warn[_ngcontent-cym-c117] .alert__link[_ngcontent-cym-c117] {
            color: #3fa9f5
        }

        .alert__link_right[_ngcontent-cym-c117] {
            margin-left: auto
        }

        .alert__link_green[_ngcontent-cym-c117] {
            color: #216f46
        }

        .alert__link_d-blue[_ngcontent-cym-c117] {
            color: #124264
        }

        .alert__link_dark[_ngcontent-cym-c117] {
            color: #357 !important;
            text-decoration: underline;
            font-weight: 600
        }

        .alert__action[_ngcontent-cym-c117] {
            margin-left: auto;
            padding: 0;
            border-width: 0;
            background-color: rgba(255, 255, 255, 0);
            cursor: pointer;
            text-decoration: none;
            transition: color .3s
        }

        .alert_green[_ngcontent-cym-c117] .alert__action[_ngcontent-cym-c117]:hover {
            color: #40d586
        }

        .alert__action_d-blue[_ngcontent-cym-c117] {
            color: #124264
        }

        .coupon[_ngcontent-cym-c117] {
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

        .coupon[_ngcontent-cym-c117]:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        .coupon__wrapper[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center
        }

        .coupon__icon[_ngcontent-cym-c117] {
            width: 24px;
            height: 24px;
            color: rgba(255, 255, 255, 0);
            stroke: #2b2d42
        }

        .coupon__body[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: center;
            justify-content: center;
            padding: 0 8px
        }

        .coupon__credit[_ngcontent-cym-c117] {
            margin-top: 6px;
            margin-bottom: 4px;
            font-size: 14px;
            line-height: 14px;
            font-weight: 700;
            color: #d90429
        }

        .coupon__number[_ngcontent-cym-c117] {
            margin-top: 0;
            margin-bottom: 4px;
            font-size: 12px;
            line-height: 12px;
            color: #2b2d42
        }

        .coupon__date[_ngcontent-cym-c117] {
            margin: 0;
            font-size: 12px;
            line-height: 12px;
            color: #2b2d42
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

        .coupon-list[_ngcontent-cym-c117] {
            margin-bottom: 30px
        }

        .coupon-list__title[_ngcontent-cym-c117] {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 32px;
            line-height: 39px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__title_account[_ngcontent-cym-c117] {
            margin-bottom: 8px
        }

        .coupon-list__subtitle-row[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin-bottom: 8px
        }

        .coupon-list__subtitle[_ngcontent-cym-c117] {
            margin: 0;
            font-size: 24px;
            line-height: 28.8px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__print-button[_ngcontent-cym-c117] {
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

        .coupon-list__print-button[_ngcontent-cym-c117]:hover {
            color: #0b85dc
        }

        .coupon-list__print-button[_ngcontent-cym-c117]:focus {
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .coupon-list__text[_ngcontent-cym-c117] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 25.5px;
            font-weight: 400;
            color: gray
        }

        .coupon-list__row[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -4px
        }

        .coupon-list__col[_ngcontent-cym-c117] {
            margin: 0 4px 8px
        }

        .coupon-list__total-text[_ngcontent-cym-c117] {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 16px;
            line-height: 24px;
            color: gray;
            text-align: right
        }

        .coupon-list__total-bold-text[_ngcontent-cym-c117] {
            font-size: 24px;
            line-height: 36px;
            font-weight: 700
        }

        .ng-select[_ngcontent-cym-c117] {
            width: auto;
            display: inline-block
        }

        .ng-select.ng-invalid.ng-touched[_ngcontent-cym-c117] .ng-select-container {
            border-color: #dc3545;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 0 3px #fde6e8
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c117] .ng-select-container {
            min-width: 60px;
            width: auto
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c117] .ng-select-container .ng-value-container {
            padding-left: 3px
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c117] .ng-select-container .ng-value-container .ng-input {
            padding-left: 3px;
            padding-right: 10px;
            padding-top: 2px
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c117] .ng-select-container .ng-arrow-wrapper {
            padding-right: 1px;
            width: auto
        }

        .ng-select.ng-select__tight[_ngcontent-cym-c117] .ng-select-container .ng-arrow-wrapper .ng-arrow {
            -webkit-transform: scale(.7);
            transform: scale(.7);
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .ng-select[_ngcontent-cym-c117] .ng-select-container {
            padding: 10px 0;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s;
            height: auto;
            border-radius: 0
        }

        .ng-select[_ngcontent-cym-c117] .ng-select-container:focus {
            background-color: #fff;
            border-color: #b8dffb;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .ng-select[_ngcontent-cym-c117] .ng-dropdown-panel {
            width: auto;
            max-width: 280px
        }

        .ng-select[_ngcontent-cym-c117] .ng-dropdown-panel .ng-option {
            font-size: 14px
        }

        .checkout-form__group[_ngcontent-cym-c117] {
            margin-bottom: 16px;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media (max-width: 575.9px) {
            .checkout-form__group[_ngcontent-cym-c117] {
                -webkit-flex-direction: column;
                flex-direction: column
            }
        }

        .checkout-form__group_has-error[_ngcontent-cym-c117] .checkout-form__label[_ngcontent-cym-c117] {
            color: #dc3545
        }

        .checkout-form__error[_ngcontent-cym-c117] {
            display: block;
            font-size: 16px;
            color: #dc3545;
            -webkit-flex: 0 0 100%;
            flex: 0 0 100%
        }

        @media (min-width: 992px) {
            .checkout-form__error[_ngcontent-cym-c117] {
                padding-left: 230px
            }
        }

        .checkout-form__message[_ngcontent-cym-c117] {
            display: block;
            font-size: 16px;
            -webkit-flex: 0 0 100%;
            flex: 0 0 100%
        }

        @media (min-width: 992px) {
            .checkout-form__message[_ngcontent-cym-c117] {
                padding-left: 230px
            }
        }

        .checkout-form__error-message[_ngcontent-cym-c117] {
            display: block;
            font-size: 16px;
            color: #dc3545;
            width: 100%
        }

        @media (min-width: 992px) {
            .checkout-form__error-message[_ngcontent-cym-c117] {
                padding-left: 230px
            }
        }

        .checkout-form__label[_ngcontent-cym-c117] {
            display: block;
            padding-top: 4px;
            margin-bottom: 8px;
            font-size: 17px;
            line-height: 26px;
            font-weight: 700;
            color: #124264;
            -webkit-flex: 0 0 230px;
            flex: 0 0 230px
        }

        @media (max-width: 575.9px) {
            .checkout-form__label[_ngcontent-cym-c117] {
                -webkit-flex: 0 0 100%;
                flex: 0 0 100%
            }
        }

        .checkout-form__abbr[_ngcontent-cym-c117] {
            margin-right: 5px;
            cursor: help
        }

        .checkout-form__input-group[_ngcontent-cym-c117] {
            -webkit-flex: 1 0 350px;
            flex: 1 0 350px;
            display: -webkit-flex;
            display: flex;
            -webkit-column-gap: 5px;
            -moz-column-gap: 5px;
            column-gap: 5px
        }

        @media (max-width: 575.9px) {
            .checkout-form__input-group[_ngcontent-cym-c117] {
                -webkit-flex: 0 0 auto;
                flex: 0 0 auto
            }
        }

        .checkout-form__input[_ngcontent-cym-c117] {
            display: block;
            -webkit-flex: 1 0 350px;
            flex: 1 0 350px;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s
        }

        @media (max-width: 575.9px) {
            .checkout-form__input[_ngcontent-cym-c117] {
                -webkit-flex: 0 0 auto;
                flex: 0 0 auto
            }
        }

        .checkout-form__input[_ngcontent-cym-c117]:focus {
            background-color: #fff;
            border-color: #b8dffb;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .checkout-form__input--size2[_ngcontent-cym-c117] {
            -webkit-flex: 0 0 auto !important;
            flex: 0 0 auto !important
        }

        .checkout-form__input--size-fill[_ngcontent-cym-c117] {
            -webkit-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
            width: 100px
        }

        .checkout-form__ngselect[_ngcontent-cym-c117] {
            -webkit-flex: 1 0 350px;
            flex: 1 0 350px
        }

        @media (max-width: 575.9px) {
            .checkout-form__ngselect[_ngcontent-cym-c117] {
                -webkit-flex: 0 0 auto;
                flex: 0 0 auto
            }
        }

        .checkout-form[_ngcontent-cym-c117] select.checkout-form__input[_ngcontent-cym-c117] {
            max-width: 100%
        }

        .checkout-form__note[_ngcontent-cym-c117] {
            margin-top: 7px;
            margin-bottom: 0;
            font-size: 9px;
            line-height: 14px;
            color: gray;
            padding-left: 210px
        }

        @media (max-width: 575.9px) {
            .checkout-form__note[_ngcontent-cym-c117] {
                padding-left: 0
            }
        }

        .checkout-form__note-link[_ngcontent-cym-c117] {
            color: gray;
            text-decoration: none
        }

        .checkout-form__button[_ngcontent-cym-c117] {
            width: 340px;
            margin: 25px 0 30px auto;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            align-items: center
        }

        @media (max-width: 575.9px) {
            .checkout-form__button[_ngcontent-cym-c117] {
                width: 100%;
                margin-left: 0
            }
        }

        .checkout-form__info[_ngcontent-cym-c117] {
            font-size: 14px;
            color: #999;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            margin-top: 40px
        }

        .checkout-form__info-icon[_ngcontent-cym-c117] {
            width: 20px;
            height: 20px;
            margin: -4px 6px 0 0
        }

        .checkout-form__info-link[_ngcontent-cym-c117] {
            color: #999
        }

        .checkout-form__question[_ngcontent-cym-c117] {
            width: 18px;
            height: 18px;
            display: -webkit-inline-flex;
            display: inline-flex;
            color: #999;
            margin: 0 0 0 10px;
            vertical-align: -2px;
            cursor: pointer;
            position: relative
        }

        .checkout-form__hint[_ngcontent-cym-c117] {
            position: absolute;
            top: 0;
            left: -75px;
            padding: 10px;
            border-radius: 3px;
            background: #fff;
            z-index: 1;
            box-shadow: 0 0 14px rgba(0, 0, 0, .2);
            opacity: 0;
            -webkit-transform: scale(.2) translate(0px, -130px);
            transform: scale(.2) translateY(-130px);
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            transition: opacity .4s ease, -webkit-transform 1s ease;
            transition: transform 1s ease, opacity .4s ease;
            transition: transform 1s ease, opacity .4s ease, -webkit-transform 1s ease;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }

        @media (min-width: 490px) {
            .checkout-form__hint[_ngcontent-cym-c117] {
                left: 25px;
                -webkit-transform: scale(.2) translate(-75px, -30px);
                transform: scale(.2) translate(-75px, -30px);
                -webkit-transform-origin: 0 0;
                transform-origin: 0 0
            }
        }

        .checkout-form__hint_active[_ngcontent-cym-c117] {
            pointer-events: all;
            opacity: 1;
            -webkit-transform: scale(1) translate(0, 0);
            transform: scale(1) translate(0);
            transition: opacity .3s ease, -webkit-transform .35s cubic-bezier(.075, .82, .165, 1);
            transition: transform .35s cubic-bezier(.075, .82, .165, 1), opacity .3s ease;
            transition: transform .35s cubic-bezier(.075, .82, .165, 1), opacity .3s ease, -webkit-transform .35s cubic-bezier(.075, .82, .165, 1)
        }

        @media (min-width: 490px) {
            .checkout-form__hint_active[_ngcontent-cym-c117] {
                -webkit-transform: scale(1) translate(0, 0);
                transform: scale(1) translate(0)
            }
        }

        .checkout-order[_ngcontent-cym-c117] {
            font-size: 16px;
            line-height: 24px;
            color: gray
        }

        .checkout-order__table[_ngcontent-cym-c117] {
            width: 100%;
            margin-bottom: 16px;
            border-collapse: collapse;
            color: #124264
        }

        .checkout-order__table-cell[_ngcontent-cym-c117] {
            padding: 12px;
            border: 1px solid #f6f7f9
        }

        .checkout-order__text-bold[_ngcontent-cym-c117] {
            color: #124264;
            font-weight: 700
        }

        .checkout-order__text[_ngcontent-cym-c117] {
            margin-top: 0;
            margin-bottom: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .checkout-order__text_sm[_ngcontent-cym-c117] {
            font-size: 15px
        }

        .checkout-order__panel-list[_ngcontent-cym-c117] {
            margin-bottom: 16px
        }

        .checkout-order__panel[_ngcontent-cym-c117] {
            padding: 12px;
            border: 1px solid #f6f7f9
        }

        .checkout-order__image[_ngcontent-cym-c117] {
            max-width: 100%
        }

        .checkout-order__agree-check[_ngcontent-cym-c117] {
            padding-top: 30px;
            padding-bottom: 30px;
            position: relative
        }

        .checkout-order__agree-check-error[_ngcontent-cym-c117] {
            display: block;
            min-height: 25px;
            margin-bottom: -25px
        }

        .checkout-order__link[_ngcontent-cym-c117] {
            color: #3fa9f5;
            text-decoration: none
        }

        .checkout-order__link[_ngcontent-cym-c117]:hover {
            text-decoration: underline
        }

        .checkout-order__submit[_ngcontent-cym-c117] {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            position: relative
        }

        .checkout-order__submit--paypal[_ngcontent-cym-c117] {
            background: #ffc439;
            color: #2c2e2f;
            font-weight: 500
        }

        .checkout-order__submit--card-icon[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            gap: 10px;
            font-size: 12px;
            color: #000;
            width: 100%;
            -webkit-justify-content: center;
            justify-content: center;
            margin-bottom: 15px;
            -webkit-align-items: center;
            align-items: center
        }

        .checkout-order__submit--card-icon[_ngcontent-cym-c117] svg-icon[_ngcontent-cym-c117] {
            max-width: 45px
        }

        .checkout-order__submit--paypal-icon[_ngcontent-cym-c117] {
            height: 21px;
            width: auto;
            display: inline-block;
            vertical-align: -5px;
            margin-left: 2px
        }

        @media (max-width: 991.9px) {
            .checkout-order__submit--paypal-icon[_ngcontent-cym-c117] {
                height: 18px;
                vertical-align: -4px;
                margin-left: 3px
            }
        }

        .checkout-order__submit--utrust[_ngcontent-cym-c117] {
            background: #E9EBED;
            color: #274444
        }

        .checkout-order__submit-help[_ngcontent-cym-c117] {
            font-size: 11px;
            text-align: center;
            color: #495a66
        }

        .checkout-order__submit-container[_ngcontent-cym-c117] {
            padding: 10px 0
        }

        .checkout-order__remove-coupon[_ngcontent-cym-c117] {
            font-weight: 400;
            color: #3fa9f5;
            transition: color .3s ease;
            text-decoration: none
        }

        .checkout-order__remove-coupon[_ngcontent-cym-c117]:hover {
            text-decoration: underline;
            color: #0b85dc
        }

        .checkout-order__save-info[_ngcontent-cym-c117] {
            padding-bottom: 25px;
            position: relative
        }

        .checkout-order__error[_ngcontent-cym-c117] {
            display: block;
            min-height: 25px;
            margin-bottom: -25px
        }

        .payment-method[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .payment-method__item[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 0 20px;
            cursor: pointer
        }

        .payment-method__input[_ngcontent-cym-c117] {
            display: none
        }

        .payment-method__input[_ngcontent-cym-c117]:checked+span[_ngcontent-cym-c117] {
            color: #5db771;
            opacity: 1
        }

        .payment-method__input[_ngcontent-cym-c117]:checked+span[_ngcontent-cym-c117]+span[_ngcontent-cym-c117] {
            opacity: 1
        }

        .payment-method__icon[_ngcontent-cym-c117] {
            -webkit-flex: 0 0 30px;
            flex: 0 0 30px;
            height: 30px;
            margin: 0 20px 0 0;
            opacity: .2
        }

        .payment-method__type[_ngcontent-cym-c117] {
            width: 100%;
            opacity: .2;
            margin: 15px 0
        }

        .payment-method__img[_ngcontent-cym-c117] {
            max-width: 100%
        }

        .payment-method__type_paypal {
            width: 120px !important
        }

        .card-details[_ngcontent-cym-c117] {
            margin-bottom: 50px
        }

        @media (min-width: 768px) {
            .card-details[_ngcontent-cym-c117] {
                padding-left: 30px
            }
        }

        @media (min-width: 768px) {
            .card-details__card-list[_ngcontent-cym-c117] {
                padding-left: 30px
            }
        }

        .card-details__item[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            font-size: 14px;
            margin-bottom: 15px;
            transition: opacity .35s ease;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            max-width: 340px
        }

        @media (max-width: 767.9px) {
            .card-details__item[_ngcontent-cym-c117] {
                font-size: 13px
            }
        }

        .card-details__item_disabled[_ngcontent-cym-c117] {
            opacity: .5
        }

        .card-details__input[_ngcontent-cym-c117] {
            margin: 0 30px 0 10px
        }

        @media (max-width: 767.9px) {
            .card-details__input[_ngcontent-cym-c117] {
                margin: 0 20px 0 8px
            }
        }

        .card-details__icon[_ngcontent-cym-c117] {
            height: 28px;
            width: 28px;
            margin: 0 30px 0 0
        }

        @media (max-width: 767.9px) {
            .card-details__icon[_ngcontent-cym-c117] {
                margin: 0 15px 0 0
            }
        }

        .card-details__expires[_ngcontent-cym-c117] {
            margin-left: 30px
        }

        @media (max-width: 767.9px) {
            .card-details__expires[_ngcontent-cym-c117] {
                margin-left: 15px
            }
        }

        .card-details__code[_ngcontent-cym-c117] {
            width: 100%;
            display: none;
            -webkit-align-items: center;
            align-items: center;
            padding-bottom: 32px;
            position: relative
        }

        .card-details__item_active[_ngcontent-cym-c117] .card-details__code[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex
        }

        .card-details__code-label[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            margin-left: auto
        }

        .card-details__code-input[_ngcontent-cym-c117] {
            display: block;
            width: 96px;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s;
            margin: 0 0 0 16px
        }

        .card-details__code-error[_ngcontent-cym-c117] {
            position: absolute;
            left: 12px;
            bottom: 0;
            white-space: nowrap;
            font-size: 14px
        }

        .coupon-form[_ngcontent-cym-c117] {
            padding: 30px 15px;
            background: #f6f7f9;
            margin-bottom: 30px
        }

        .coupon-form__outer[_ngcontent-cym-c117] {
            margin-top: 25px;
            overflow: hidden
        }

        .coupon-form__label[_ngcontent-cym-c117] {
            text-align: center;
            margin-bottom: 16px;
            color: gray
        }

        .coupon-form__inputs[_ngcontent-cym-c117] {
            text-align: center
        }

        .coupon-form__input-text[_ngcontent-cym-c117] {
            display: inline-block;
            padding: 7.5px 15px;
            max-width: 215px;
            width: 100%;
            height: 56px;
            text-align: left;
            font-family: inherit;
            font-size: 17px;
            line-height: 25.5px;
            font-weight: 400;
            color: #000;
            background: white;
            border: 1px solid black
        }

        .coupon-form__submit[_ngcontent-cym-c117] {
            cursor: pointer;
            font-family: inherit;
            margin-left: 20px;
            padding: 7.5px 15px;
            max-width: 215px;
            width: 100%;
            height: 56px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            line-height: 25.5px;
            font-weight: 700;
            color: #000;
            background: rgb(239, 239, 239);
            border: 1px solid rgb(239, 239, 239)
        }

        @media (max-width: 767.9px) {
            .coupon-form__submit[_ngcontent-cym-c117] {
                display: block;
                margin: 10px auto 0
            }
        }

        .auth__box[_ngcontent-cym-c117] {
            padding: 15px;
            border: 1px solid #dee2e6;
            margin-bottom: 30px
        }

        .auth__introduction[_ngcontent-cym-c117] {
            margin-bottom: 16px;
            font-size: 17px;
            color: gray
        }

        .auth__outer[_ngcontent-cym-c117] {
            margin-top: 25px;
            overflow: hidden
        }

        .auth__outer_updating[_ngcontent-cym-c117] {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%)
        }

        .auth__label[_ngcontent-cym-c117] {
            display: block;
            margin-bottom: 16px
        }

        .auth__label-text[_ngcontent-cym-c117] {
            display: block;
            width: 100%;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 17px;
            line-height: 26px;
            font-weight: 700;
            color: gray
        }

        .auth__label-text_blue[_ngcontent-cym-c117] {
            color: #124264
        }

        .auth__label_checkbox[_ngcontent-cym-c117] .auth__label-text[_ngcontent-cym-c117] {
            display: inline-block;
            width: auto;
            margin-bottom: 0
        }

        .auth__label_has-error[_ngcontent-cym-c117] .auth__label-text[_ngcontent-cym-c117] {
            color: #dc3545
        }

        .auth__input[_ngcontent-cym-c117] {
            width: 100%;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: box-shadow .3s
        }

        .auth__input[_ngcontent-cym-c117]:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(63, 169, 245, .25)
        }

        .auth__checkbox[_ngcontent-cym-c117] {
            margin-right: 6px;
            cursor: pointer
        }

        .auth__button[_ngcontent-cym-c117] {
            width: 100%;
            max-width: 140px;
            margin: 16px auto
        }

        .auth__text[_ngcontent-cym-c117] {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 17px;
            line-height: 26px;
            color: gray
        }

        .auth__text_center[_ngcontent-cym-c117] {
            text-align: center
        }

        .auth__link[_ngcontent-cym-c117] {
            color: #3fa9f5;
            text-decoration: none;
            transition: color .3s;
            cursor: pointer
        }

        .auth__link[_ngcontent-cym-c117]:hover {
            color: #0b85dc;
            text-decoration: underline
        }

        .auth__message[_ngcontent-cym-c117] {
            font-size: 16px
        }

        .auth__label_has-error[_ngcontent-cym-c117] .auth__message[_ngcontent-cym-c117],
        .auth__message_error[_ngcontent-cym-c117] {
            color: #dc3545
        }

        .auth__message-description[_ngcontent-cym-c117] {
            margin-top: 6px;
            color: gray;
            line-height: 1.6;
            display: inline-block;
            font-size: 13px
        }

        .checkout[_ngcontent-cym-c117] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -15px
        }

        .checkout__form[_ngcontent-cym-c117] {
            width: 100%;
            max-width: 66.66666%;
            padding: 0 30px 0 15px
        }

        @media (max-width: 767.9px) {
            .checkout__form[_ngcontent-cym-c117] {
                max-width: 100%;
                margin-bottom: 14px;
                padding-right: 15px
            }
        }

        .checkout__form_updating[_ngcontent-cym-c117] {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            opacity: .5
        }

        @media (max-width: 767.9px) {
            .checkout__form_card-details[_ngcontent-cym-c117] {
                margin-top: 30px
            }
        }

        .checkout__order[_ngcontent-cym-c117] {
            width: 100%;
            max-width: 33.33333%;
            padding: 0 15px
        }

        @media (max-width: 767.9px) {
            .checkout__order[_ngcontent-cym-c117] {
                max-width: 100%
            }
        }

        .checkout__title[_ngcontent-cym-c117] {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 32px;
            line-height: 39px;
            font-weight: 400;
            color: gray
        }

        .checkout__title_mt[_ngcontent-cym-c117] {
            margin-top: 50px
        }

        @media (max-width: 767.9px) {
            .checkout__title_mt[_ngcontent-cym-c117] {
                margin-top: 0
            }
        }

        .checkout__title_payment[_ngcontent-cym-c117] {
            margin-top: 30px;
            font-size: 24px
        }

        .is-processing[_ngcontent-cym-c117] {
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
            opacity: .7;
            pointer-events: none
        }

        .spinner-place-order[_ngcontent-cym-c117] {
            height: 16px;
            width: 16px;
            color: #fff;
            margin-right: 5px
        }

    </style>
    <style>
        @charset "UTF-8";

        .ng-select {
            position: relative;
            display: block;
            box-sizing: border-box
        }

        .ng-select div,
        .ng-select input,
        .ng-select span {
            box-sizing: border-box
        }

        .ng-select [hidden] {
            display: none
        }

        .ng-select.ng-select-searchable .ng-select-container .ng-value-container .ng-input {
            opacity: 1
        }

        .ng-select.ng-select-opened .ng-select-container {
            z-index: 1001
        }

        .ng-select.ng-select-disabled .ng-select-container .ng-value-container .ng-placeholder,
        .ng-select.ng-select-disabled .ng-select-container .ng-value-container .ng-value {
            -webkit-user-select: none;
            user-select: none;
            cursor: default
        }

        .ng-select.ng-select-disabled .ng-arrow-wrapper {
            cursor: default
        }

        .ng-select.ng-select-filtered .ng-placeholder {
            display: none
        }

        .ng-select .ng-select-container {
            cursor: default;
            display: flex;
            outline: none;
            overflow: hidden;
            position: relative;
            width: 100%
        }

        .ng-select .ng-select-container .ng-value-container {
            display: flex;
            flex: 1
        }

        .ng-select .ng-select-container .ng-value-container .ng-input {
            opacity: 0
        }

        .ng-select .ng-select-container .ng-value-container .ng-input>input {
            box-sizing: content-box;
            background: none transparent;
            border: 0 none;
            box-shadow: none;
            outline: none;
            padding: 0;
            cursor: default;
            width: 100%
        }

        .ng-select .ng-select-container .ng-value-container .ng-input>input::-ms-clear {
            display: none
        }

        .ng-select .ng-select-container .ng-value-container .ng-input>input[readonly] {
            -webkit-user-select: none;
            user-select: none;
            width: 0;
            padding: 0
        }

        .ng-select.ng-select-single.ng-select-filtered .ng-select-container .ng-value-container .ng-value {
            visibility: hidden
        }

        .ng-select.ng-select-single .ng-select-container .ng-value-container,
        .ng-select.ng-select-single .ng-select-container .ng-value-container .ng-value {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .ng-select.ng-select-single .ng-select-container .ng-value-container .ng-value .ng-value-icon {
            display: none
        }

        .ng-select.ng-select-single .ng-select-container .ng-value-container .ng-input {
            position: absolute;
            left: 0;
            width: 100%
        }

        .ng-select.ng-select-multiple.ng-select-disabled>.ng-select-container .ng-value-container .ng-value .ng-value-icon {
            display: none
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container {
            flex-wrap: wrap
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-placeholder {
            position: absolute
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value {
            white-space: nowrap
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value.ng-value-disabled .ng-value-icon {
            display: none
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon {
            cursor: pointer
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-input {
            flex: 1;
            z-index: 2
        }

        .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-placeholder {
            z-index: 1
        }

        .ng-select .ng-clear-wrapper {
            cursor: pointer;
            position: relative;
            width: 17px;
            -webkit-user-select: none;
            user-select: none
        }

        .ng-select .ng-clear-wrapper .ng-clear {
            display: inline-block;
            font-size: 18px;
            line-height: 1;
            pointer-events: none
        }

        .ng-select .ng-spinner-loader {
            border-radius: 50%;
            width: 17px;
            height: 17px;
            margin-right: 5px;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 2px solid rgba(66, 66, 66, .2);
            border-right: 2px solid rgba(66, 66, 66, .2);
            border-bottom: 2px solid rgba(66, 66, 66, .2);
            border-left: 2px solid #424242;
            transform: translateZ(0);
            animation: load8 .8s infinite linear
        }

        .ng-select .ng-spinner-loader:after {
            border-radius: 50%;
            width: 17px;
            height: 17px
        }

        @keyframes load8 {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }

        .ng-select .ng-arrow-wrapper {
            cursor: pointer;
            position: relative;
            text-align: center;
            -webkit-user-select: none;
            user-select: none
        }

        .ng-select .ng-arrow-wrapper .ng-arrow {
            pointer-events: none;
            display: inline-block;
            height: 0;
            width: 0;
            position: relative
        }

        .ng-dropdown-panel {
            box-sizing: border-box;
            position: absolute;
            opacity: 0;
            width: 100%;
            z-index: 1050;
            -webkit-overflow-scrolling: touch
        }

        .ng-dropdown-panel .ng-dropdown-panel-items {
            display: block;
            height: auto;
            box-sizing: border-box;
            max-height: 240px;
            overflow-y: auto
        }

        .ng-dropdown-panel .ng-dropdown-panel-items .ng-optgroup {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .ng-dropdown-panel .ng-dropdown-panel-items .ng-option {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .ng-dropdown-panel .ng-dropdown-panel-items .ng-option .ng-option-label:empty:before {
            content: "\200b"
        }

        .ng-dropdown-panel .ng-dropdown-panel-items .ng-option .highlighted {
            font-weight: 700;
            text-decoration: underline
        }

        .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.disabled {
            cursor: default
        }

        .ng-dropdown-panel .scroll-host {
            overflow: hidden;
            overflow-y: auto;
            position: relative;
            display: block;
            -webkit-overflow-scrolling: touch
        }

        .ng-dropdown-panel .scrollable-content {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute
        }

        .ng-dropdown-panel .total-padding {
            width: 1px;
            opacity: 0
        }

    </style>
    <style>
        app-date-of-birth-picker {
            display: -webkit-flex;
            display: flex;
            width: 100%
        }

        .form-group[_ngcontent-cym-c100] {
            display: -webkit-flex;
            display: flex;
            gap: 10px;
            width: 100%;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .form-group__col[_ngcontent-cym-c100] {
            width: calc(33.3333333333% - 6.6666666667px)
        }

        .form-group__control[_ngcontent-cym-c100] {
            display: block;
            width: 100%;
            padding: 10px 12px;
            background-color: #f6f7f9;
            border: 1px solid #d8dadd;
            font-size: 16px;
            line-height: 24px;
            color: #495057;
            transition: all .3s
        }

        .form-group__hint[_ngcontent-cym-c100] {
            font-size: 17px;
            font-weight: 400;
            color: gray;
            font-style: italic;
            width: 100%
        }

        .form-group__hint--error[_ngcontent-cym-c100] {
            color: #f44
        }

    </style>
@endsection
