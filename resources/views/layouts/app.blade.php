<!DOCTYPE html>
<html lang="en">
@yield('head')

<body data-new-gr-c-s-check-loaded="14.1102.0" data-gr-ext-installed="">
    <div class="lds-css ng-scope" id="bootstrap-loader">
        <div class="lds-spinner" style="width:100%;height:100%">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div> LOADING
    </div>

    <h1 style="opacity:0;visibility:hidden;position:fixed;z-index:-1">7days Performance</h1>
    <p style="opacity:0;visibility:hidden;position:fixed;z-index:-1">
        <strong>Win your dream car from as little as 79p. Guaranteed winners announced live on Facebook regardless of sellout. No rollovers, no extensions. Enter Now!</strong>
    </p>

    <app-root _nghost-bke-c13="" ng-version="14.2.12">
        @yield('content')
    </app-root>

    <script src="runtime.28e0df5dcefbc9cf.js" type="module"></script>
    <script src="polyfills.8515ba8301f12b46.js" type="module"></script>
    <script src="https://7daysperformance.co.uk/main.7ab8dc2cb0e17843.js" type="module"></script>


    <script type="text/javascript" id="">
        (function(b, a) {
            if (!a.__SV) {
                var h, c;
                window.cooladata = a;
                a._i = [];
                a.init = function(m, n, d) {
                    function p(e, f) {
                        var k = f.split(".");
                        2 == k.length && (e = e[k[0]], f = k[1]);
                        e[f] = function() {
                            e.push([f].concat(Array.prototype.slice.call(arguments, 0)))
                        }
                    }
                    var l = a;
                    "undefined" !== typeof d ? l = a[d] = [] : d = "cooladata";
                    h = ["trackEvent", "trackEventLater", "trackPageload", "flush", "setConfig"];
                    for (c = 0; c < h.length; c++) p(l, h[c]);
                    a._i.push([m, n, d])
                };
                a.__SV = 1.2;
                var g = b.createElement("script");
                g.type = "text/javascript";
                g.async = !0;
                g.src = "https://cdn.cooladata.com/tracking/cooladata-latest.min.js";
                b = b.getElementsByTagName("script")[0];
                b.parentNode.insertBefore(g, b)
            }
        })(document, window.cooladata || []);
        cooladata.init({
            app_key: "794e3aztrspx6192icblafioi3z9j0ke"
            , track_pageload: !0
            , img_src_get_request: !0
        });

    </script>

    <script type="text/javascript" id="">
        window.EventRefresherClass = function() {
            $this = this;
            $this.timer = null;
            $this.lastRefresh = 0;
            $this.refresh = function(b) {
                (function(f) {
                    $this.startTimer();
                    var d = Math.floor((new Date).getTime() / 1E3);
                    $this.lastRefresh + 5 > d || ($this.lastRefresh = d, $this.apiRequest("GET", "/user/current/events", null, function(c) {
                        $this.startTimer();
                        if (c && c.length)
                            for (var e in c) try {
                                $this.launchCode(c[e].code)
                            } catch (a) {
                                console.log("Event ERROR"), console.log(a)
                            }
                        f && setTimeout(function() {
                            f()
                        }, 1200)
                    }))
                })(b)
            };
            $this.launchCode = function(b) {
                window.eval(b)
            };
            $this.startTimer = function() {
                $this.timer && clearTimeout($this.timer);
                $this.timer = setTimeout($this.refresh, 6E4)
            };
            $this.apiRequest = function(b, f, d, c) {
                var e = $this.getApiPath()
                    , a = $this.getSessionKey();
                e && a && $this.request(b, e + f, d, c, function(g) {
                    g.setRequestHeader("Authorization", "bearer " + a)
                })
            };
            $this.request = function(b, f, d, c, e) {
                var a = new XMLHttpRequest;
                a.onreadystatechange = function() {
                    4 == a.readyState && 200 == a.status && c(JSON.parse(a.responseText))
                };
                a.open(b, f, !0);
                e && e(a);
                a.send(d ? JSON.stringify(d) : null)
            };
            $this.getApiPath =
                function() {
                    return window.ENVIRONMENT_PARAMETERS && window.ENVIRONMENT_PARAMETERS.api_path ? window.ENVIRONMENT_PARAMETERS.api_path + "/api/v2" : null
                };
            $this.getSessionKey = function() {
                var b = window.localStorage.getItem("auth.token");
                return b ? JSON.parse(b) : null
            }
        };
        window.EventRefresher = new window.EventRefresherClass;

    </script>
    <script type="text/javascript" id="">
        window._tfa = window._tfa || [];
        window._tfa.push({
            notify: "event"
            , name: "page_view"
            , id: 1513087
        });
        ! function(a, b, d, c) {
            document.getElementById(c) || (a.async = 1, a.src = d, a.id = c, b.parentNode.insertBefore(a, b))
        }(document.createElement("script"), document.getElementsByTagName("script")[0], "//cdn.taboola.com/libtrc/unip/1513087/tfa.js", "tb_tfa_script");

    </script>

    <script type="text/javascript" id="">
        setTimeout(function() {
            window.EventRefresher && window.EventRefresher.refresh()
        }, 500);
    </script>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    window.addEventListener('load', () => {
        // update cart items
        updateCartItems();
        
        // add click event to all buttons with class .ticket__add
        document.querySelectorAll('.ticket__add').forEach(button => {
            button.addEventListener('click', event => {
                let product_id = document.querySelector('.product__id').innerHTML;
                let product_title = document.querySelector('.product__title').innerHTML;
                let product_slug = document.querySelector('.product__slug').innerHTML;
                let product_price = document.querySelector('.product__price_unformatted').innerHTML;
                let product_image = document.querySelector('.product-gallery__img').src;
                let ticket_total = document.querySelector('.ticket__total').getElementsByTagName('span')[0].innerHTML;

                product_total = (product_price * ticket_total).toFixed(2); 

                // add product to cart
                let cart = {
                    product_id: product_id,
                    product_title: product_title,
                    product_slug: product_slug,
                    product_price: product_price,
                    product_image: product_image,
                    ticket_total: ticket_total,
                    product_total: product_total
                };

                // append product to cart
                if (localStorage.getItem('cart') === null) {
                    localStorage.setItem('cart', '[]');
                }

                let cart_items = JSON.parse(localStorage.getItem('cart'));

                let exists = cart_items.find(item => item.product_id === cart.product_id);
                if (exists) {
                    // remove existing item from local storage
                    cart_items = cart_items.filter(item => item.product_id !== cart.product_id);
                }

                cart_items.push(cart);
                localStorage.setItem('cart', JSON.stringify(cart_items));

                // update cart count
                let cart_count = document.querySelector('.cart__count');
                cart_count.innerHTML = cart_items.length;

                // show success message
                toastr.success('Product added to cart successfully!', 'Success Alert', {timeOut: 5000});
            })
        });
    });

    function updateCartItems() {
        if (localStorage.getItem('cart') === null) {
            localStorage.setItem('cart', '[]');
        }

        let cart_items = JSON.parse(localStorage.getItem('cart'));

        // update cart count
        let cart_count = document.querySelector('.cart__count');
        cart_count.innerHTML = cart_items.length;
    }
</script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="/assets/js/owl-carousel/owl.carousel.js"></script>
<script src="/assets/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script>
    $(document).ready(function() {
        var owl = $(".slider__wrapper");

        owl.owlCarousel({
            singleItem: true,
            items: 1,
            loop: true,
            navigation : true,
            slideSpeed : 300,
            dots: true,
            autoPlay: 3000,
            stopOnHover : true,
        });

        // Custom Navigation Events
        $(".slider__button_next").click(function(){
            owl.trigger('owl.next');
        })
        $(".slider__button_prev").click(function(){
            owl.trigger('owl.prev');
        })
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.js" integrity="sha512-UOJe4paV6hYWBnS0c9GnIRH8PLm2nFK22uhfAvsTIqd3uwnWsVri1OPn5fJYdLtGY3wB11LGHJ4yPU1WFJeBYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('scripts')

</html>
