<!DOCTYPE html>
<html lang="en-BD" class="no-js">

<head>
    <meta charset="UTF-8">
    <title>
        Bike Sharing Service | Jinan
    </title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="img/favicon/favicon.ico" rel="shortcut icon">
    <meta name="msvalidate.01" content="62D708192352CDCE3B73BA9B4A94A95C" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript">
        window.NREUM || (NREUM = {}), __nr_require = function(e, t, n) {
            function r(n) {
                if (!t[n]) {
                    var o = t[n] = {
                        exports: {}
                    };
                    e[n][0].call(o.exports, function(t) {
                        var o = e[n][1][t];
                        return r(o || t)
                    }, o, o.exports)
                }
                return t[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function(e, t, n) {
                function r() {}

                function o(e, t, n) {
                    return function() {
                        return i(e, [f.now()].concat(u(arguments)), t ? null : this, n), t ? void 0 : this
                    }
                }
                var i = e("handle"),
                    a = e(2),
                    u = e(3),
                    c = e("ee").get("tracer"),
                    f = e("loader"),
                    s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    d = "api-",
                    l = d + "ixn-";
                a(p, function(e, t) {
                    s[t] = o(d + t, !0, "api")
                }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), t.exports = newrelic, s.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(e, t) {
                        var n = {},
                            r = this,
                            o = "function" == typeof t;
                        return i(l + "tracer", [f.now(), e, n], r),
                            function() {
                                if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                                    return t.apply(this, arguments)
                                } catch (e) {
                                    throw c.emit("fn-err", [arguments, this, e], n), e
                                } finally {
                                    c.emit("fn-end", [f.now()], n)
                                }
                            }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, t) {
                    m[t] = o(l + t)
                }), newrelic.noticeError = function(e) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, f.now()])
                }
            }, {}],
            2: [function(e, t, n) {
                function r(e, t) {
                    var n = [],
                        r = "",
                        i = 0;
                    for (r in e) o.call(e, r) && (n[i] = t(r, e[r]), i += 1);
                    return n
                }
                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}],
            3: [function(e, t, n) {
                function r(e, t, n) {
                    t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0);
                    for (var r = -1, o = n - t || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[t + r];
                    return i
                }
                t.exports = r
            }, {}],
            4: [function(e, t, n) {
                t.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(e, t, n) {
                function r() {}

                function o(e) {
                    function t(e) {
                        return e && e instanceof r ? e : e ? c(e, u, i) : i()
                    }

                    function n(n, r, o, i) {
                        if (!d.aborted || i) {
                            e && e(n, r, o);
                            for (var a = t(o), u = m(n), c = u.length, f = 0; f < c; f++) u[f].apply(a, r);
                            var p = s[y[n]];
                            return p && p.push([b, n, r, a]), a
                        }
                    }

                    function l(e, t) {
                        v[e] = m(e).concat(t)
                    }

                    function m(e) {
                        return v[e] || []
                    }

                    function w(e) {
                        return p[e] = p[e] || o(n)
                    }

                    function g(e, t) {
                        f(e, function(e, n) {
                            t = t || "feature", y[n] = t, t in s || (s[t] = [])
                        })
                    }
                    var v = {},
                        y = {},
                        b = {
                            on: l,
                            emit: n,
                            get: w,
                            listeners: m,
                            context: t,
                            buffer: g,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
                }
                var u = "nr@context",
                    c = e("gos"),
                    f = e(2),
                    s = {},
                    p = {},
                    d = t.exports = o();
                d.backlog = s
            }, {}],
            gos: [function(e, t, n) {
                function r(e, t, n) {
                    if (o.call(e, t)) return e[t];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, t, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return e[t] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}],
            handle: [function(e, t, n) {
                function r(e, t, n, r) {
                    o.buffer([e], r), o.emit(e, t, n)
                }
                var o = e("ee").get("handle");
                t.exports = r, r.ee = o
            }, {}],
            id: [function(e, t, n) {
                function r(e) {
                    var t = typeof e;
                    return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = e("gos");
                t.exports = r
            }, {}],
            loader: [function(e, t, n) {
                function r() {
                    if (!x++) {
                        var e = h.info = NREUM.info,
                            t = d.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && t)) return s.abort();
                        f(y, function(t, n) {
                            e[t] || (e[t] = n)
                        }), c("mark", ["onload", a() + h.offset], null, "api");
                        var n = d.createElement("script");
                        n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t)
                    }
                }

                function o() {
                    "complete" === d.readyState && i()
                }

                function i() {
                    c("mark", ["domContent", a() + h.offset], null, "api")
                }

                function a() {
                    return E.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - h.offset
                }
                var u = (new Date).getTime(),
                    c = e("handle"),
                    f = e(2),
                    s = e("ee"),
                    p = window,
                    d = p.document,
                    l = "addEventListener",
                    m = "attachEvent",
                    w = p.XMLHttpRequest,
                    g = w && w.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: p.setImmediate,
                    CT: clearTimeout,
                    XHR: w,
                    REQ: p.Request,
                    EV: p.Event,
                    PR: p.Promise,
                    MO: p.MutationObserver
                };
                var v = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1071.min.js"
                    },
                    b = w && g && g[l] && !/CriOS/.test(navigator.userAgent),
                    h = t.exports = {
                        offset: u,
                        now: a,
                        origin: v,
                        features: {},
                        xhrWrappable: b
                    };
                e(1), d[l] ? (d[l]("DOMContentLoaded", i, !1), p[l]("load", r, !1)) : (d[m]("onreadystatechange", o), p[m]("onload", r)), c("mark", ["firstbyte", u], null, "api");
                var x = 0,
                    E = e(4)
            }, {}]
        }, {}, ["loader"]);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type='text/javascript' src='js/security-filter.js'></script>
    <!-- <meta name="description" content=""> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <!-- <script>
			(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:456069,hjsv:5};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
			})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
		</script> -->
    <meta name="apple-itunes-app" content="#">
    <meta name="google-play-app" content="#" app-argument="#">

    <script>
        var stripHtml = (function() {
            var div = document.createElement('div');
            return function(html) {
                var escaped = secureFilters.html(html);
                return escaped;
                /*html = decodeURIComponent(html);
		  	console.log("HTML", html);
		    div.innerHTML = html.replace(/<\/?\w+[^>]*\/?>/g, "");
		    return (div.innerText || div.textContent); // textContent is for firefox*/
            };
        })();
        //inject utm_source into cookies
        function getUrlParams() {
            var rawQueryString = window.location.search;
            if (!rawQueryString) {
                return {};
            }

            rawQueryString = rawQueryString.slice(1);
            var params = {};
            var splitStrings = rawQueryString.split('&');

            for (var i = 0, len = splitStrings.length; i < len; i++) {
                var item = splitStrings[i].split('=');
                params[item[0]] = stripHtml(decodeURIComponent(item[1]));
                console.log(item[0], stripHtml(decodeURIComponent(item[1])));
            }

            return params;
        }

        function setCookie(name, value) {
            document.cookie = name + "=" + value + "; max-age=300; domain=#;path=/; secure";
        }

        var urlParams = getUrlParams();
        if (urlParams.utm_source) {
            setCookie('utm_source', urlParams.utm_source);
        }
        if (urlParams.utm_medium) {
            setCookie('utm_medium', urlParams.utm_medium);
        }
        if (urlParams.utm_content) {
            setCookie('utm_content', urlParams.utm_content);
        }
        if (urlParams.utm_term) {
            setCookie('utm_term', urlParams.utm_term);
        }
        if (urlParams.utm_campaign) {
            setCookie('utm_campaign', urlParams.utm_campaign);
        }
    </script>

    <!-- Schema tag for JSON-LD structured data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Company",
            "url": "#",
            "logo": "img/g-white.png",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "Bangladesh",
                "addressLocality": "Bangladesh",
                "addressRegion": "BD",
                "postalCode": "573972",
                "streetAddress": "28 Sin Ming Lane #01-143 Midview City"
            },
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+65-6570-3925",
                "contactType": "customer service"
            }],
            "email": "mailto:support.sg@abc.com",
            "sameAs": [
                "https://www.wikidata.org/wiki/#",
                "https://en.wikipedia.org/wiki/#",
                "https://www.facebook.com/#",
                "https://twitter.com/#",
                "https://www.instagram.com/#",
                "https://www.youtube.com/channel/#",
                "https://www.linkedin.com/company/#",
                "https://play.google.com/store/apps/#",
                "https://play.google.com/store/apps/#",
                "https://itunes.apple.com/bd/app/#",
                "https://itunes.apple.com/bd/app/#"
            ]
        }
    </script>



    <!-- Start The SEO Framework by Sybre Waaijer -->
    <meta name="robots" content="noydir" />
    <meta name="description" content="For a safe and comfortable ride around Bangladesh, download Jinan. Experience the most convenient way of finding a ride. Or become a driver to enjoy our incentives." />
    <meta property="og:image" content="" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bike Sharing Service | Jinan" />
    <meta property="og:description" content="For a safe and comfortable ride around Bangladesh, download Jinan. Experience the most convenient way of finding a ride. Or become a driver to enjoy our incentives." />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="Jinan" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@" />
    <meta name="twitter:title" content="Bike Sharing Service | Jinan" />
    <meta name="twitter:description" content="For a safe and comfortable ride around Bangladesh, download Jinan. Experience the most convenient way of finding a ride. Or become a driver to enjoy our incentives." />
    <link rel="canonical" href="#" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "#",
            "name": "Jinan",
            "alternateName": "Jinan BD",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "#",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "#",
            "name": "Jinan BD",
            "sameAs": ["https://www.facebook.com/#", "https://twitter.com/#", "https://www.instagram.com/#", "https://www.youtube.com/channel/#", "https://www.linkedin.com/#"]
        }
    </script>
    <meta name="google-site-verification" content="r5O-Vrevs9kL6XgG4NYeK1S3f1U1beiNmV0O2Efzb3M" />
    <meta name="msvalidate.01" content="62D708192352CDCE3B73BA9B4A94A95C" />
    <!-- End The SEO Framework by Sybre Waaijer | 0.00247s -->

    <link rel='dns-prefetch' href='#' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/17225-presscdn-0-73-pagely.netdna-ssl.com\/sg\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.2"
            }
        };
        ! function(a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case "emoji":
                        return b = d([55358, 56794, 8205, 9794, 65039], [55358, 56794, 8203, 9794, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (h = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href='css/bootstrap.css' media='all' />
    <link rel='stylesheet' href='css/common.css' media='' />
    <link rel='stylesheet' href='css/stylesheet.css' media='' />
    <link rel='stylesheet' href='https://17225-presscdn-0-73-pagely.netdna-ssl.com/sg/wp-content/themes/grabsg/fonts/Sanomat/1512-PNDUFW-11oct17.css' media='' />
    <link rel='stylesheet' href='css/tablepress.css' media='all' />
    <link rel='stylesheet' href='css/wpgform.css' media='all' />
    <link rel='stylesheet' href='css/wpglobus.css' media='all' />
    <link rel='stylesheet' href='css/slick/slick.css' media='all' />
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var userSettings = {
            "url": "\/",
            "uid": "0",
            "time": "1516304050",
            "secure": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/utils.js'></script>
    <link rel="alternate" type="application/json+oembed" href="#" />
    <link rel="alternate" type="text/xml+oembed" href="#" />
    <script type="text/javascript">
        var ajaxurl = "#";
    </script>
    <style type="text/css">
        #section-raw-php-user-education-body header {
            display: none
        }

        #section-raw-html-ce-disruption-message-floating-dialog {
            display: none
        }
    </style>
    <link rel="alternate" hreflang="en-BD" href="#" />
    <meta name="google-site-verification" content="#" />
</head>

<body class="home page-template page-template-tpl page-template-tpl-page-sections page-template-tpltpl-page-sections-php page page-id-285 site-id-4">

    <p><img src="img/giphy.gif" style="position: fixed; right: 0; bottom:0; z-index: 99; width: 250px;"></p>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54DG5SF"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


        <!-- /container -->

    <div id="top">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand text-hide bg-size-cover" href="index.php">Jinan</a>
                </div>
                <ul id="nav-main" class="nav navbar-nav hidden-xs">
                     <li class="#">
                        <a href="aboutus.php">
                                About Us                           </a>
                    </li>

                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Services							</a>
                        <ul class="dropdown-menu dropdown-menu-large row list-icons" style="position: fixed; top: 60px;  text-align: center; ">
                            <li class="  col-md-3" style=" display: inline-block;float:none;">
                                <a href="services_ride.php" class="icon-bike">
													Ride													</a>
                            </li>
                            <li class="  col-md-3" style=" display: inline-block;float:none;">
                                <a href="services_car.php" class="icon-car">
													Car												</a>
                            </li>
                            <li class="  col-md-3" style=" display: inline-block;float:none;">
                                <a href="services_rent_a_car.php" class="icon-car">
													Rent a Car													</a>
                            </li>
                        </ul>
                    </li>
                    <li class="#">
                        <a href="terms.php">
                                Terms                          </a>
                    </li>
                    <li class="#">
                        <a href="privacy.php">
                                Privacy                          </a>
                    </li>
                </ul>
                

                <ul id="nav-drive" class="nav navbar-nav navbar-right hidden-xs ">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Download App</a>
                        <ul class="dropdown-menu list-icons">


                            <li class="abc" style="">
                                <a href="#" class="icon-drive-white" style="">
									IOS</a>
                            </li>


                            <li class="abc" style="">
                                <a href="#" class="icon-taxi-drive-white" style="">
									Android</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li>
                        <span style='display:none'>4</span><a href='#'>English</a> </li>
                    <li>
                        <a href="#" rel="nofollow">Bangla</a>
                    </li>
                </ul>
            </nav>
            <a id="cd-menu-trigger" href="#0" class="visible-xs"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>

            <a id="btn-download" href="#" class="visible-xs btn btn-green weight-bold outline text-caps">Driver Sign-Up</a>

        </div>
        <!-- /container -->
    </div>
    <nav class="visible-xs" id="cd-lateral-nav">
        <div class="inner">
            <a href="#" target="_blank" class="btn btn-green btn-block weight-bold outline" rel="nofollow">Login</a>
        </div>
        <ul class="cd-navigation list-unstyled" id="menu-main-navigation">
            <li class="menu-item-has-children menu-item-drive">
                <a href="#">Download App</a>
                <ul id="sub-menu-drive" class="sub-menu list-unstyled list-icons">
                    <li class="link-">
                        <a href="#" class="icon-drive">Android</a>
                    </li>
                    <li class="link-">
                        <a href="#" class="icon-taxi-drive">IOS</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Services</a>
                <ul class="sub-menu list-unstyled list-icons">
                    <li>
                        <a href="#" class="icon-taxi">Taxi</a>
                    </li>
                    <li>
                        <a href="#" class="icon-car">Car</a>
                    </li>
                    <li>
                        <a href="#" class="icon-hitch">Hitch</a>
                    </li>
                    <li>
                        <a href="#" class="icon-share">Share</a>
                    </li>
                    <li>
                        <a href="#" class="icon-coach">Coach</a>
                    </li>
                    <li>
                        <a href="#" class="icon-shuttle">Shuttle</a>
                    </li>
                    <li>
                        <a href="#" class="icon-shuttle">Shuttle Plus</a>
                    </li>
                    <li>
                        <a href="#" class="icon-family">Family</a>
                    </li>
                    <li>
                        <a href="#" class="icon-justgrab">Just</a>
                    </li>
                    <li>
                        <a href="#" class="icon-taxi">Now</a>
                    </li>
                    <li>
                        <a href="#" class="icon-rental">Rental</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Corporate</a>
                <ul class="sub-menu list-unstyled list-icons">
                    <li>
                        <a href="#" class="icon-work">For Business</a>
                    </li>
                    <li>
                        <a href="#" class="icon-partnerships">Partnerships</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <li class="menu-item"><a href="#">Blog</a></li>
            </li>
            <li>
                <a href="#">Press</a>
            </li>
            <li>
                <a href="#" target="_blank">Careers</a>
            </li>
            <li>
                <a href="#">Safety</a>
            </li>
            <li><a href='#'>Help Centre</a></li>
        </ul>
    </nav>
    <div class="wrapper">

        <main role="main">





            <section id="section-carousel-homepage-carousel" class="section section-carousel section--dark">

                <div class="carousel slide" data-ride="carousel" id="carousel-homepage-carousel">            
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-homepage-carousel"></li>
                        <li data-slide-to="1" data-target="#carousel-homepage-carousel"></li>
                        <li data-slide-to="2" data-target="#carousel-homepage-carousel"></li>
                        <li data-slide-to="3" data-target="#carousel-homepage-carousel"></li>
                        <li data-slide-to="4" data-target="#carousel-homepage-carousel"></li>
                    </ol>


                    <div class="carousel-inner" role="listbox">
                        <div class="bg-size-cover item active" style="background-image: url(img/1_hero_banner.jpg);">
                            <div class="carousel-caption">
                                <h1>Bike.Car.Rent A Car</h1>
                                <p>All in one app.</p>
                                <a class="btn btn-lg btn-green text-caps weight-bold" href="#">Download Now!</a> </div>
                        </div>
                        <div class="bg-size-cover item" style="background-image: url(img/Carousel.jpg);">
                            <div class="carousel-caption">
                                <h1>JINAN</span></h1>
                                <p><span style="font-weight: 400; font-size:2em"> Go cashless. <br> Pay seamlessly.</span></p>
                                <a class="btn btn-lg btn-green text-caps weight-bold" href="#">Find out more</a> </div>
                        </div>
                        <div class="bg-size-cover item" style="background-image: url(img/hero.jpg);">
                            <div class="carousel-caption">
                                <h1>Ride into the world of Rewards!</h1>
                                <p></p>
                                <a class="btn btn-lg btn-green text-caps weight-bold" href="#">EXPLORE REWARDS CATALOGUE</a> </div>
                        </div>
                        <div class="bg-size-cover item" style="background-image: url(img/driver.jpg);">
                            <div class="carousel-caption">
                                <h1>EARN. CONNECT. CONTRIBUTE TO SOCIETY.</h1>
                                <p>Partner with us to drive your own livelihood and more.</p>
                                <a class="btn btn-lg btn-green text-caps weight-bold" href="#">SIGN UP NOW</a> </div>
                        </div>
                        <div class="bg-size-cover item" style="background-image: url(img/2_hero_banner.jpg);">
                            <div class="carousel-caption">
                                <h1>Going All Across Bangladesh</h1>
                                <p></p>
                                <a class="btn btn-lg btn-green text-caps weight-bold" href="#">FIND OUT MORE</a> </div>
                        </div>
                    </div>
                    <!-- /carousel-inner -->
                </div>
                <!-- /carousel -->

            </section>


            <section 
                                    id="section-list-group-horizontal-types-of-partnerships" 
                                        class="section section--padded section--light section-list-group-horizontal section-icon-list" 
                                            style="background-color: #ffffff;                                               ">
                    
                                    <div class="container">
                                        
                                        <header><h2>Top Riders</h2></header>                                     
                                        <div class="row"><div class="col-xs-12 col-md-10 col-md-offset-1">                                                                                                                      <div class="row row-horizontal">
                                                                                            <div class="col-xs-12 col-md-3">
                                                    <img src="img/ico-brand.png">
                                                    <h4 class="color-green text-center">J. Ferdous</h4>
                                                    <p class="text-center"><strong>1,00,000 BBDT</strong></p>
                                                </div>
                                                                                            <div class="col-xs-12 col-md-3">
                                                    <img src="img/icon-calendar-2.png">
                                                    <h4 class="color-green text-center">Jahangir Alam</h4>
                                                    <p class="text-center"><strong>2,50,000 BDT</strong></p>
                                                </div>
                                                                                            <div class="col-xs-12 col-md-3">
                                                    <img src="img/ico-fleet.png">
                                                    <h4 class="color-green text-center">Hasan Khandakar</h4>
                                                    <p class="text-center"><strong>4,00,000 BDT</strong></p>
                                                </div>
                                                                                            <div class="col-xs-12 col-md-3">
                                                    <img src="img/ico-situation.png">
                                                    <h4 class="color-green text-center">Niloy Khan</h4>
                                                    <p class="text-center"><strong>1,00,000 BDT</strong></p>
                                                </div>
                                                                                    </div><!-- /row -->
                                                                                
                                        </div></div>                                        
                                    </div>
                                    
                                </section><!-- /section -->




            <section id="section-guide-how-it-works" class="section section--light section-guide" style="												padding-top: 50px;padding-bottom: 0px;">

                <div class="container">
                    <header>
                        <h2>How It Works</h2>
                    </header>
                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1">
                            <div class="carousel carousel--mobileview carousel-fade slide clearfix" data-ride="carousel" id="carousel--mobileview--how-it-works">
                                <!-- Indicators -->
                                <ol class="carousel-indicators steps--4 clearfix">
                                    <li class="active" data-slide-to="0" data-target="#carousel--mobileview--how-it-works" data-step="1">
                                        <h4>Book in Just 2 Taps</h4>
                                        <p>Key in your pick-up and drop-off locations to get your estimated fare.</p>
                                    </li>
                                    <li data-slide-to="1" data-target="#carousel--mobileview--how-it-works" data-step="2">
                                        <h4>Get a Driver</h4>
                                        <p>We will find you the nearest available driver.</p>
                                    </li>
                                    <li data-slide-to="2" data-target="#carousel--mobileview--how-it-works" data-step="3">
                                        <h4>Track Your Driver</h4>
                                        <p>Know your driver’s location and estimated time of arrival in real-time.</p>
                                    </li>
                                    <li data-slide-to="3" data-target="#carousel--mobileview--how-it-works" data-step="4">
                                        <h4>Arrive Safely</h4>
                                        <p>Share your trip details with loved ones for added safety or even just to let them know you’re on your way.</p>
                                    </li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-description visible-xs"></div>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/step/1st_step-7.jpg" />
                                    </div>
                                    <!-- /item -->
                                    <div class="item">
                                        <img src="img/step/2nd_step-5.jpg" />
                                    </div>
                                    <!-- /item -->
                                    <div class="item">
                                        <img src="img/step/3rd_step-4.jpg" />
                                    </div>
                                    <!-- /item -->
                                    <div class="item">
                                        <img src="img/step/4th_step-4.jpg" />
                                    </div>
                                    <!-- /item -->
                                </div>
                                <!-- /carousel-inner -->
                                <div class="carousel-bg"></div>
                            </div>
                            <!-- /carousel -->

                        </div>
                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->
            </section>





            <section id="section-raw-php-user-education-body" class="section section--light section-raw-php bg-size-cover" style="background-image: url(img/g-back.jpg);												padding-top: 0px;padding-bottom: 0px;">

                <div class="container-fluid">

                    <header></header>

                    <style>
                        .step1 .fluid-container {
                            padding-top: 90px;
                            padding-bottom: 85px
                        }

                        .step1 h2 {
                            font-weight: 600;
                            font-size: 2.571em;
                            color: #fff;
                            text-align: center;
                            width: 100%;
                            max-width: 620px;
                            margin-left: auto;
                            margin-right: auto;
                            margin-bottom: 50px;
                            padding-left: 15px;
                            padding-right: 15px;
                        }

                        .step1 .btn {
                            background-color: #fff;
                            color: #00b040;
                            text-transform: uppercase;
                            border-radius: 0;
                            box-shadow: none;
                            padding: 16px 20px 15px;
                            font-size: 1.35em;
                            line-height: 1;
                        }
                    </style>
                    <div class="step1">
                        <div class="row">
                            <div class="fluid-container text-center" style="background-color:#009d3b">
                                <h2>What you should know before your first ride</h2>
                                <a href="#" class="btn btnNext">click to learn</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /container -->
            </section>





            <section id="section-carousel-tooltip-homepage-services" class="section section-carousel-tooltip section--dark">

                <header>
                    <h2>Rides For Everyone</h2>
                </header>
                <div class="carousel carousel-tooltip carousel-fade slide" data-ride="carousel" id="carousel-homepage-services">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-homepage-services"><i class="icon icon--hover icon--service--taxi"></i></li>
                        <li data-slide-to="1" data-target="#carousel-homepage-services"><i class="icon icon--hover icon--service--car"></i></li>
                        <li data-slide-to="2" data-target="#carousel-homepage-services"><i class="icon icon--hover icon--service--hitch"></i></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item item-1 bg-size-cover active" style="background-image: url(img/taxi-2.jpg);">
                            <div class="carousel-caption">
                                <h1>Bike</h1>
                                <p>Ride anywhere with Bike</p>
                                <a href="taxi"><span></span></a>
                            </div>
                        </div>
                        <div class="item item-2 bg-size-cover" style="background-image: url(img/g-car.jpg);">
                            <div class="carousel-caption">
                                <h1>Car</h1>
                                <p>Car for every need</p>
                                <a href="car"><span></span></a>
                            </div>
                        </div>
                        <div class="item item-3 bg-size-cover" style="background-image: url(img/h-car.jpg);">
                            <div class="carousel-caption">
                                <h1>Rent a car</h1>
                                <p>Ride long distance with friends and famiöy</p>
                                <a href="hitch"><span></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /carousel-inner -->
                </div>
                <!-- /carousel -->

            </section>





            <section id="section-download-download-app" class="section section--padded section--dark section-download bg-size-cover" style="background-image: url(img/g-back2.jpg);												">

                <div class="container">
                    <header>
                        <h2>Download App</h2>
                    </header>
                    <div class="dl--well clearfix center-block">
                        <div class="dl--qr-code">
                            <span class="weight-bold block bottom-margin-sm">Scan QR Code</span>
                            <img class="img-responsive img--qr-code" src="img/pax_sg.jpg">
                        </div>
                        <!-- /dl--qr-code -->
                        <div class="dl--stores">
                            <a class="bottom-margin-sm" href="#" onclick="ga('send', { hitType: 'event', eventCategory: 'Website', eventAction: 'Download', eventLabel: 'Web'});" target="_blank"><img class="img-responsive" src="img/app-store.png"></a>
                            <a class="bottom-margin-sm" href="#" onclick="ga('send', { hitType: 'event', eventCategory: 'Website', eventAction: 'Download', eventLabel: 'Web'});" target="_blank"><img class="img-responsive" src="img/google-play.png"></a>
                        </div>
                        <!-- /dl--stores -->
                    </div>

                </div>
                <!-- /container -->
            </section>





            <section id="section-raw-html-ce-disruption-message-floating-dialog" class="section section--padded section-raw-html" style="												">

                <div class="">

                    <header></header>

                    <style>
                        .floating-dialog {
                            position: fixed;
                            bottom: 5%;
                            right: 3%;
                            z-index: 99;
                            max-width: 360px;
                        }

                        .floating-dialog .float-logo {
                            margin: 0 auto 15px;
                        }

                        .floating-dialog .float-logo img {
                            max-width: 80px;
                        }

                        .floating-dialog .box {
                            background-color: #fff;
                            padding: 15px;
                            box-shadow: 0 0 12px rgba(0, 0, 0, 0.15);
                            position: relative;
                            border-radius: 5px
                        }

                        .float-footer {
                            margin: 10px auto;
                        }

                        .btn-contact {
                            background-color: #00BA51;
                            color: #fff;
                            padding: 10px 20px;
                            display: inline-block;
                            border-radius: 3px;
                            line-height: 1;
                        }

                        .btn-contact:hover,
                        .btn-contact:active,
                        .btn-contact:focus {
                            color: #fff !important;
                            text-decoration: none;
                        }

                        .float-close {
                            position: absolute;
                            top: 15px;
                            right: 15px;
                        }

                        .float-close a {
                            color: inherit;
                        }

                        .float-close a:hover,
                        .float-close a:active,
                        .float-close a:focus {
                            color: inherit;
                            text-decoration: none;
                        }
                    </style>
                    <div class="floating-dialog">
                        <div class="box text-center">
                            <div class="float-logo"><img src="img/2_hero_banner.jpg" style=""></div>
                            <div class="float-body">Dear customers, our building management will be running a scheduled maintenance from 10am to 4pm on Tuesday 25 July. During this period, customers calling through our call centre may experience slightly longer wait times. We encourage customers to use our in-app feedback channel and we will respond to you as soon as we can. Thank you.</div>
                            <div class="float-close"><a href="javascript:void(0)">X</a></div>
                            </p>
                        </div>
                    </div>


                </div>
                <!-- /container -->
            </section>





            </section>
            <!-- /section -->

            <section id="section-latest-news" class="section section-grid-news section--light section--padded">

                <div class="container">

                    <header>
                        <h2>Latest News</h2>
                        <p>Explore Our world</p>
                    </header>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 latest">
                            <div class="box bg-size-cover bottom-margin-md" style="background-image:url(img/2_hero_banner.jpg);">
                                <div class="blurb">
                                    <span class="date block">January 17, 2018</span>
                                    <span class="weight-bold">Jinan announces acquisition of Bangladesh-based ride sharing app</span>
                                </div>
                                <div class="excerpt">
                                    <div class="centered-wrapper">
                                        <div class="centered">
                                            <ul>
                                                <li><i>Feature-rich mobile payments platform (NFC, QR-code, audio, P2P and more) to power our pay expansion in 2018</i></li>
                                                <li><em>Leadership team such as Bkash and Rokcet Pay ill join us &#038;D centre</li>
</ul>													<a rel="bookmark" href="#" title="#">Know More</a>
												</div>
											</div>
										</div>
										
									</div><!-- /box -->
									
								</div>
						    								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="box bg-size-cover bottom-margin-md" style="background-image:url(img/depositphotos.jpg);">
										<div class="blurb">
											<span class="date block">January 15, 2018</span>
											<span class="weight-bold">Subscription to Our new service</span>
										</div>
										<div class="excerpt">
											<div class="centered-wrapper">
												<div class="centered">
													<ul>
 	<li><i>Subscription service to us</i></li>
<li><em>Our responses help to us to reach more to the customer</li>
</ul>														<a rel="bookmark" href="#" title="#">Know More</a>
												</div>
											</div>
										</div>
										
									</div><!-- /box -->
									
								</div>
						    								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="box bg-size-cover bottom-margin-md" style="background-image:url(img/depositphotos2.jpg);">
										<div class="blurb">
											<span class="date block">January 11, 2018</span>
											<span class="weight-bold">Hyundai and Kawasaki joining in the Family</span>
										</div>
										<div class="excerpt">
											<div class="centered-wrapper">
												<div class="centered">
													<ul>
 	<li><i>Hyundai joins us</i></li>
<li><em>For long term investment in Bangladesh</li>
<li><em>High end kawasaki models are available at cheap cost</li>
<li><em>Bangldesh to drive more towards motor bike</li>
</ul>	
													<a rel="bookmark" href="#" title="#">Know More</a>
												</div>
											</div>
										</div>
										
									</div><!-- /box -->
									
								</div>
						    								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="box bg-size-cover bottom-margin-md" style="background-image:url(img/depositphotos3.jpg);">
										<div class="blurb">
											<span class="date block">January 8, 2018</span>
											<span class="weight-bold">Appintment of the new Managing Director</span>
										</div>
										<div class="excerpt">
											<div class="centered-wrapper">
												<div class="centered">
													<ul>
 	<li><i>Mr. Mohammad has been appointed as the new managing director of our firm</i></li>
<li><em>Successfully awards the first 100 riders for there achievement</li>
</ul>														<a rel="bookmark" href="#" title="#">Know More</a>
												</div>
											</div>
										</div>
										
									</div><!-- /box -->
									
								</div>
						    								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="box bg-size-cover bottom-margin-md" style="background-image:url(img/depositphotos4.jpg);">
										<div class="blurb">
											<span class="date block">December 19, 2017</span>
											<span class="weight-bold">Ministry of Transport partnership</span>
										</div>
										<div class="excerpt">
											<div class="centered-wrapper">
												<div class="centered">
													<ul>
 	<li><i>Partnership for expansion of our company</i></li>
<li><em>Reaching all corners of Bangladesh</li>
<li><em>Big institution</li>
</ul>	
 													<a rel="bookmark" href="#" title="#">Know More</a>
												</div>
											</div>
										</div>
										
									</div><!-- /box -->
									
								</div>
						    						
					</div><!-- /row -->
					
					<div class="row">
						<div class="col-sm-2 col-sm-offset-5">
							<a href="#" class="btn btn-block btn-primary weight-bold">View More</a>
						</div>
					</div>
					
					
				
				</div><!-- /container -->
			</section>
				
				
	</main>


		<section class="sitemap">
		<div class="container">
	    	<div class="row">
				<div class="footer-secTop">
					<div class="col-sm-12 col-md-3" >
						<div class="footer-about-grab" >
							<div class="grab-logo bottom-margin-md">
								<a href="#"><img src="img/g-white.png" /></a>
							</div>
													<div class="grab-infor">
								<p>Rayerbazar<br />
Dhaka<br />
Bangladesh</p>
							</div>
							<div class="grab-contact top-margin-md">
								<p></p>
								<p><a href="mailto:"></a></p>
							</div>
							            		</div><!-- /footer-about-grab-->
	        		</div><!-- /col-sm-12 col-md-3-->
	        		
	        		
					<div class="col-sm-12 col-md-9 hidden-xs" >
						<div class="row sitemap-container" >
							
							<div class="col-xs-6 col-sm-4 col-md-3" >
																<h4 class="text-caps">Company</h4>
								<ul class="sitemapList" id="menu-company-menu">
									<li class="menu-item" id="menu-item-1040"><a href="#">About</a></li>
																		<li class="menu-item" id="menu-item-1047"><a href="#">Press</a></li>

									<li class="menu-item"><a href="#">Blog</a></li>																		<li class="menu-item" id="menu-item-1039"><a href="#" target="_blank">Careers</a></li>
																			<li class="menu-item" id="menu-item-1038"><a href="#">Security</a></li>
																											<li class="menu-item" id="menu-item-1050"><a href="#">Driver Centre</a></li>
										            				</ul>
	            											</div><!-- /col-xs-6 col-sm-4 col-md-3 -->
							<div class="col-xs-6 col-sm-4 col-md-3" >
								<h4 class="text-caps">Services</h4>
								<ul id="menu-footer-services" class="sitemapList"><li id="menu-item-375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-375"><a href="#">Bike</a></li>
<li id="menu-item-376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href="#">Car</a></li>
<li id="menu-item-377" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-377"><a href="#">Rent a car</a></li>
</ul>	            			</div><!-- /col-xs-6 col-sm-4 col-md-3 -->
				            <div class="col-xs-6 col-sm-4 col-md-3" >
				            	<h4 class="text-caps">Corporate</h4>
								<ul id="menu-footer-corporate" class="sitemapList"><li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380"><a href="#">For Business</a></li>
<li id="menu-item-381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"><a href="#">Partnerships</a></li>
</ul>				            </div><!-- /col-xs-6 col-sm-4 col-md-3 -->
				            				            <div class="col-xs-6 col-sm-4 col-md-3" >
				            	<h4 class="text-caps">Ride</h4>
								<ul id="menu-footer-ride" class="sitemapList"><li id="menu-item-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387"><a href="#">Drive</a></li>
<li id="menu-item-8036" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8036"><a href="#">Safety</a></li>
<li id="menu-item-23658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23658"><a href="#">Help Centre</a></li>
</ul>				            </div><!-- /col-xs-6 col-sm-4 col-md-3 -->
				            	        			</div><!-- /row sitemap-container -->

	        				        		</div><!-- /col-sm-12 col-md-9 -->
					<div class="col-sm-12 col-md-12 hidden-xs" >
						<hr/>
	        		</div>
	    		</div><!-- /footer-secTop-->
	      
	    	</div><!-- /row-->
	    
			<div class="row " >
				<div class="col-sm-6 col-md-3 socialArea" >
					<div class="row hidden-xs">
						<div class="col-xs-12" >
							<h4 class="text-caps">Stay in Touch</h4>
	        			</div>
	        		</div><!-- /row-->
	        		
										<div class="row" >
												<div class="col-xs-3 col-xs-push-2 col-md-4 col-md-push-0" >
							<a target="_blank" href="#" class="fb socialIcon hvr-float-shadow" ><i class="fa fa-facebook fa-2x"></i></a>
						</div>
																		<div class="col-xs-3 col-xs-push-2 col-md-4 col-md-push-0" >
							<a target="_blank" href="#" class="instagram socialIcon hvr-float-shadow" ><i class="fa fa-instagram fa-2x"></i></a>
						</div>
																		<div class="col-xs-3 col-xs-push-2 col-md-4 col-md-push-0" >
							<a target="_blank" href="#" class="twitter socialIcon hvr-float-shadow" ><i class="fa fa-twitter fa-2x"></i></a>
						</div>
							        		</div><!-- /row-->
	    		</div><!-- /col-sm-6 col-md-2 socialArea -->
	    	</div><!-- /row-->
		</div><!-- /container -->
	</section><!-- /sitemap -->
	<footer>
		<div class="container" >
			<div class="row">
				<div class="col-xs-12 col-md-4">
										<ul class="policylist">
													<li><a href="#" >Terms of Service</a></li>
							<li><a href="#" >Privacy Policy</a></li>
												
	        		</ul>
				</div><!-- /col-xs-12 col-md-4 -->
				<div class="col-xs-12 col-md-4">
					<p class="copyright">&copy; Company 2018</p>
				</div>
				<div class="col-xs-12 col-md-4 hidden-xs">
					<ul class="playstore">
											<li><a onClick="#" target="_blank" href="#" ><img src="img/app-store.png" class="img-responsive" /></a></li>
						<li><a onClick="#" target="_blank" href="#" ><img src="img/google-play.png" class="img-responsive" /></a></li>
										</ul>
				</div><!-- /col-xs-12 col-md-4 -->
			</div><!-- /row-->
		</div><!-- /container -->
	</footer><!-- /footer -->
</div><!-- /wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>

<script src="js/kitUtils.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/detectmobile.js"></script>
<script src="js/jquery-data.js"></script>
<script src="js/jquery-data-responsive.js"></script>
<script src="js/jquery-validate.js"></script>
<script src="css/slick/slick.js"></script>
<script src="js/masonry.js"></script>
<script src="js/imageloaded.js"></script>
<script src="js/jquery-flip.js"></script>
<script src="js/main.js"></script>

<style>
#spnPhoneStatus{font-size:10px;padding-top:5px;line-height:12px;}
</style><!-- <script>

$(".btn-download").click(function(event){
	event.preventDefault();
	
	if($.browser.mobile){
		
		var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
		var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
		var isiPod = /ipod/i.test(navigator.userAgent.toLowerCase());
		var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
		
		var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
		var isBlackBerry = /blackberry/i.test(navigator.userAgent.toLowerCase());
		var isWebOS = /webos/i.test(navigator.userAgent.toLowerCase());
		var isWindowsPhone = /windows phone/i.test(navigator.userAgent.toLowerCase());
		
		if($(this).hasClass("driver")){
			if(isiDevice){window.location.href = "#";}
			if (isAndroid){window.location.href = "#";}
			if (isBlackBerry){window.location.href = "/sg/download/driver";}
			if (isWebOS){window.location.href = "/sg/download/driver";}
			if (isWindowsPhone){window.location.href = "/sg/download/driver";}
		}else{
			if(isiDevice){window.location.href = "#";}
			if (isAndroid){window.location.href = "#";}
			if (isBlackBerry){window.location.href = "#";}
			if (isWebOS){window.location.href = "/sg/download/";}
			if (isWindowsPhone){window.location.href = "/sg/download/";}
		}
	
	}
	else{
		if($(this).hasClass("driver")){window.location.href = "/sg/download/driver";}
		else{window.location.href = "/sg/download/";}
	}
});

</script> -->
<!-- <script>

$(".innerLink").click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $(".goHere").offset().top
		}, 1500);
	});

	   $(".section-carousel .carousel .item").css("height" , $(window).height() * 0.70);
   
   
   if($(".driverBanner .floatForm").length){
	    var floatFormHeight = $(".driverBanner .floatForm").offset().top + $(".driverBanner .floatForm").innerHeight();
		var dBannerHeight = $(".driverBanner").height();
	   
	    if((floatFormHeight - dBannerHeight) > 8){
	   
		  var newHeight =  floatFormHeight - 8;
		  var percentage = ($(window).height() - newHeight)/100;
		  percentage = percentage.toFixed(2);
		  

		  $(".driverBanner").css("height" , newHeight);
	   }
	   
   }
   
   if($(window).width() <= 768 ){
		$(".driverBanner").css("height" , ($(window).height() * 0.85) +  $(".driverBanner .floatForm").height() );
	    $(".section-carousel .carousel .item").css("height" , ($(window).height() * 0.85));
   }
   
   
 
	FastClick.attach(document.body);
	
	
</script> -->

<script type='text/javascript' src='js/blankshield.js'></script>
<script type='text/javascript' src='js/tabnapping.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGlobus = {"version":"1.9.7.3","language":"en","enabledLanguages":["en"]};
/* ]]> */
</script>
<script type='text/javascript' src='js/wpglobonus.js'></script>
<script type='text/javascript' src='js/embed.min.js'></script>
    
	
<!-- Eloqua Code -->
<script type="text/javascript">
var _elqQ = _elqQ || [];
_elqQ.push(['elqSetSiteId', '629252191']);
_elqQ.push(['elqTrackPageView']);
(function () {
function async_load() {
var s = document.createElement('script'); s.type = 'text/javascript';
s.async = true; s.src = '//img.en25.com/i/elqCfg.min.js';
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore (s, x);
}
if (window.addEventListener) window.addEventListener('DOMContentLoaded',
async_load, false);
else if (window.attachEvent) window.attachEvent('onload', async_load);
})();</script>
<!-- End Eloqua Code -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"8267985d0f","applicationID":"75909284","transactionName":"blQHYBdUCEUEB0FcDlceJFcRXAlYShBFWUxJUAJRSEYDVRENWlsS","queueTime":0,"applicationTime":382,"atts":"QhMEFl9OG0s=","errorBeacon":"bam.nr-data.net","agent":""}</script></body></html>
