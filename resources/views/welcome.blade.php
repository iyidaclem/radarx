<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{env("APP_NAME")}}</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/frontend2/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar d-flex justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand " href="/">
                            <h1 class="text-light" style="white-space:nowrap">{{env("APP_NAME")}}</h1>
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler" style="position:fixed; top: 0; right:5%">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="/">Home</a></li>

                                    <li><a href="#aboutt">About</a></li>
                                    <li><a href="#video">Videos</a></li>
                                    <li><a href="#Images">Events</a></li>
                                    <li><a href="/merch">Merch</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <!-- <li><a href="">login</a></li> -->
                                </ul>


                                <!-- Nav End -->
                            </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div id="gallery" class="single-welcome-slide bg-img bg-overlay" style="background: url(img/bg-img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-12 col-xl-6">

                            <video style="position: absolute; width: 100vw;height: auto;  margin-top: -50%; margin-left: -0%; filter: brightness(50%); " src="/videos/house.mov" autoplay controls muted loop></video>
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms"><br>welcome to Radar X</h2>
                                <!-- <p data-animation="bounceInDown" data-delay="500ms">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, accusamus facilis. Velit beatae eaque illo numquam asperiores placeat praesentium, incidunt voluptas voluptate odio, magni dolor vitae temporibus voluptatibus repellat illum!.</p> -->
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(/images/FRONTBN.png);">
                <div class="container-fluid h-100">
                    <div class="row h-100 w-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-12 col-xl-6">
                            <video style="position: absolute; width: 100vw;height: auto;  margin-top: -50%; margin-left: -0%; filter: brightness(50%); " src="/videos/house.mov" autoplay controls muted loop></video>
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms">Radar X <br></h2>
                                <!-- <p data-animation="bounceInUp" data-delay="500ms">I Code website very instinctively. I see how it is taken like that. I do not follow certain styles, philosophies or teachers.</p> -->
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br> <br> <br>
    <!-- Welcome Area End -->

    <section id="about" class="follow-area clearfix">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2> Our Videos </h2>
                        <p>view our videos gallary</p>
                    </div>
                </div>



                <div id="video" class="col-12">
                    <div class="video">

                        <!-- <video src="video/Season of the Witch 2011.mp4" controls></video> -->
                        <iframe width="100%" height="500px" id="wtfDpsZVjSw" src="https://www.youtube.com/embed/wtfDpsZVjSw" title="See You in Valhalla | English Full Movie | Comedy Drama" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                        <div class="btnni">
                            <div class="btn2">
                                <a id="video dNt1QR1ecuM" href="" class="btnn">Charm</a>
                                <a id="video zUU1bIWpH5" href="" class="btnn">Dumebi</a>
                                <a id="video LboPHhUyIbo" href="" class="btnn">Dirty</a>
                                <a id="video" href="" class="btnn">calm down</a>
                                <a id="video" href="" class="btnn">Bounce</a>
                            </div>
                            <div class="btn2">

                                <a id="video" href="" class="btnn">Bounce</a>
                                <a id="video" href="" class="btnn">calm down</a>
                                <a id="video" href="" class="btnn">Bounce</a>
                                <a id=" FhhuOw_ypy0" href="" class="btnn">Bad commando</a>
                                <a id="video EJIDnsi7r8o" href="btnn" class="btnn">iron man</a>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </section><br> <br> <br>

    <!-- Gallery Area Start -->
    <section id="Images" class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2> Our Gallery </h2>
                        <p>view our gallary images </p>
                    </div>
                </div>
            </div>
        </div>
        <br> <br> <br>
        <!-- Gallery Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-12 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="single-portfolio-content">
                    <img src="/images/1.png" alt="">
                    <div class="hover-content">
                        <a href="/images/1.png" class="portfolio-img">+</a>
                    </div>
                </div>
            </div>
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-12 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="single-portfolio-content">
                    <img src="/images/2.jpeg" alt="">
                    <div class="hover-content">
                        <a href="/images/2.jpeg" class="portfolio-img">+</a>
                    </div>
                </div>
            </div>
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-12 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="single-portfolio-content">
                    <img src="/images/3.jpeg" alt="">
                    <div class="hover-content">
                        <a href="/images/3.jpeg" class="portfolio-img">+</a>
                    </div>
                </div>
            </div>
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-12 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="single-portfolio-content">
                    <img src="/images/4.jpeg" alt="">
                    <div class="hover-content">
                        <a href="/images/4.jpeg" class="portfolio-img">+</a>
                    </div>
                </div>
            </div>
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-12 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="single-portfolio-content">
                    <img src="/images/5.jpeg" alt="">
                    <div class="hover-content">
                        <a href="/images/5.jpeg" class="portfolio-img">+</a>
                    </div>
                </div>
            </div>
            <!-- Single Gallery Item -->
            <div class="col-12 col-sm-6 col-lg-12 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="single-portfolio-content">
                    <img src="/images/6.jpeg" alt="">
                    <div class="hover-content">
                        <a href="/images/6.jpeg" class="portfolio-img">+</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Area End -->


    <!-- Gallery Area End -->

    <!-- Why About us Area Start -->
    <section id="aboutt" class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>About {{env('APP_NAME')}}</h2>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <img style="height: 300px; width:auto" src="/images/1.png" alt="">
                </div>
            </div>

            <div class="row">
                <!-- Single About us Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <!-- <div class="chosse-us-icon">
                            <i class="fa fa-film" aria-hidden="true"></i>
                        </div> -->
                        <!-- <h4>Hello</h4> -->
                        <p>
                            Introducing Radar X, known to the world as "THE VYBE MAGIXIAN." He's a Transformative Junkie, an artist whose work
                            opens the door to boundless possibilities and defies limits, echoing the mantra that "anything is possible" with every
                            note and brushstroke. Radar X's creative process is a symphony of expression, where he seamlessly blends various art forms.
                            In his world, music, visuals, and words converge to create a breathtaking tapestry of creativity.
                        </p>
                    </div>
                </div>

                <!-- Single About us Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <!-- <div class="chosse-us-icon">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div> -->
                        <!-- <h4>Abundant Experience</h4> -->
                        <p>
                            But Radar X's journey goes beyond this lifetime; it extends across lifetimes, marking a cosmic odyssey of
                            evolution that transcends boundaries and challenges norms. His artistry isn't confined to the studio or the stage.
                            Radar X is an energetic creative who fuses stage theatre, poetry, and tricks into his live performances. He describes his
                            genre as Afro-future, as he not only experiments with his music but also with the perspective at which his sound is interpreted,
                            using visual branding elements to enhance the experience
                        </p>
                    </div>
                </div>

                <!-- Single About us Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                        <!-- <div class="chosse-us-icon">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                        </div> -->
                        <!-- <h4>Modern Equipments</h4> -->
                        <p>
                            Yet, beyond his art, Radar X possesses a unique superpower — that of building bridges. He's dedicated to connecting
                            Africa through the enchantment of entertainment and technology. He nurtures a community of MagiXians, catalysts for a
                            cultural renaissance, seamlessly merging tradition with innovation. In the enchanting world of Radar X, the Vybe Magixian,
                            the future of Afro creations unfolds, where every
                            moment is a testament to the limitless possibilities of art and the power of connectivity. 🌟🎶✨
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us Area End -->

    <section id="contact" class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <!-- Leave A Reply -->
                <div class="alime-contact-form mt-50">
                    <h4 class="mb-30">Contact us</h4>

                    <!-- Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-6 col-md-6 col-sm-12">
                                <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                            </div>
                            <div class="col-6 col-md-6 col-sm-12">
                                <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                            </div>
                            <div class="col-6 col-sm-12">
                                <input type="text" name="website" class="form-control mb-30" placeholder="Title">
                            </div>
                            <div class="col-6 col-sm-12">
                                <textarea name="message" class="form-control mb-3 col-sm-12" placeholder="Messages"></textarea>
                            </div>
                            <div class="col-6 col-sm-12">
                                <button type="submit" class="btn bg-danger text-light alime-btn btn-2 mt-15">Send Messages</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </div>
    </div>
    </div>
    </div>
    <!-- Comment Area End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="https://linktr.ee/radar_x" target="_blank">
            <div class="icons">

                <i class="fa fa-youtube text-danger "></i>
                <i class="fa fa-facebook text-primary"></i>
                <i class="fa fa-whatsapp text-success"></i>
                <i class="fa fa-twitter text-primary"></i>
                <i class="fa fa-instagram text-danger"></i>
            </div>
        </a>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="copywrite-text">
                        <p style="text-align: center; width: 100%; margin-left: 50%;">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved! </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="/frontend2/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="/frontend2/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/frontend2/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="/frontend2/js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="/frontend2/js/default-assets/active.js"></script>

</body>

</html>