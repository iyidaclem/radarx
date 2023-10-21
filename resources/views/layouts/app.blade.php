<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>

    <link rel="shortcut icon" type="image/x-icon" href="imges/logo.webp">

    <link href="/radar-x/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="/radar-x/css/style.css" rel="stylesheet" type="text/css">

    <link href="/radar-x/css/plugin.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="/radar-x/css/line-icons.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body style="background-image:url('/radar-x/images/bg/team-bg1.png');">

    <div id="preloader">
        <div id="status"></div>
    </div>



    <header class="main_header_area headerstye-1">

        <div class="header_menu w-100 ">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center k justify-content-between w-100 pb-2 pt-2">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="/">
                                <h1 class="text-muted">Radar X</h1>
                            </a>
                        </div>

                        <div class="navbar-collapse1 d-lg-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li><a class="pp" href="/">Home</a></li>
                                <li><a class="pp" href="/events">Events</a></li>
                                <li><a class="pp" href="/merch">merch</a></li>
                            </ul>

                            <style>
                                .pp:hover {
                                    color: white !important;
                                }

                                li:hover {
                                    border-bottom: 4px solid orangered;
                                }

                                .io:hover {
                                    color: black !important;
                                }

                                @media (max-width:900px) {
                                    .slicknav_menu {
                                        width: 100%;
                                        margin-left: 20%;
                                        /* position: relative; */
                                    }
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="slicknav-mobile" style="top: 20%; right: 100%; z-index: 99999">
                    <ul class="d-none bg-danger">

                        <li><a class="io" href="/">Home</a></li>
                        <li><a class="io" href="/event">Events</a></li>
                        <li><a class="io" href="/merch">merch</a></li>
                    </ul>
                </div>
        </div>
        </div>
        </div>
        </nav>
        </div>

    </header>


    @yield("content")


    <footer style="background-image:url(images/bg/team-bg.png);" class="pt-10 bubbles">


        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2023 Radar<span class="text-danger">-x</span>. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="mid-overlay"></div>
    </footer>


    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/radar-x/js/jquery-3.4.1.min.js"></script>
    <script src="/radar-x/js/bootstrap.min.js"></script>
    <script src="/radar-x/js/plugin.js"></script>
    <script src="/radar-x/js/particles.js"></script>
    <script src="/radar-x/js/particlerun.js"></script>
    <script src="/radar-x/js/main.js"></script>
    <script src="/radar-x/js/custom-swiper.js"></script>
    <script src="/radar-x/js/custom-nav.js"></script>
    <script src="/radar-x/js/custom-date.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'75a2f8ab8f58b95c',m:'DL3ICSyke_XqYSZnVZFVnlcrmqU6nxgtf563QIIjscQ-1665778362-0-AS2nl5VWyjAceTvWkRa/y28fT6KB3w+KlLS13JbH5Y5hs1ewSetIUyHxgvAWQnzb8hphwhZ8/4cnn2eBxRC4l4nkwyTOMfdZ+qtC66qk3+OIPoJUN9MxxK64sa+RaXF06g==',s:[0xd21309c626,0x6c0774f670],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

</html>