<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>{{env('APP_NAME')}}</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="/frontend/html/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="/frontend/html/css/base.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="/frontend/html/css/main.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="/frontend/html/css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="/frontend/html/css/magnific-popup.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="/frontend/html/css/fonts.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,300,400,400i,600,700,800" rel="stylesheet">
   </head>
   <body>
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#13181d" stroke-width="2"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <div class="block-search-form">
            <div class="block-content">
               <div class="container">
                  <!--end of row-->
                  <div class="row justify-content-center">
                     <div class="col-12 col-md-10 col-lg-8">
                        <form method="get"  >
                           <div class="card  bg-red ">
                              <div class="card-body  row no-gutters align-items-center">
                                 <div class="col-auto">
                                    <i class="icon-search"></i>
                                 </div>
                                 <!--end of col-->
                                 <div class="col">
                                    <input class="form-control form-control-lg form-control-border0" placeholder="Type a keywords..." type="search">
                                 </div>
                                 <!--end of col-->
                                 <div class="col-auto">
                                    <button type="submit" class="btn  btn-primary uppercase border-3">
                                    Search now</button>
                                 </div>
                                 <!--end of col-->
                              </div>
                           </div>
                        </form>
                     </div>
                     <!--end of col-->
                  </div>
                  <!--end of row-->
               </div>
            </div>
         </div>
         <!--Hero section-->
         <section class="hero">
            <!--Main slider-->
            <div class="main-slider slider flexslider">
               <ul class="slides">
                  <li>
                     <div class="background-img overlay zoom">
                        <img src="/frontend/html/img/1.jpg" alt="">
                     </div>
                     <!--Container-->
                     <div class="container hero-content">
                        <!--Row-->
                        <div class="row">
                           <div class="col-sm-12 text-center">
                              <!--Inner hero-->
                              <div class="inner-hero">
                                 <div class="back-rect"></div>
                                 <h1 class="large text-white uppercase mb-0">welcome to {{env("APP_NAME")}}</h1>
                                 <h5 class="mb-0 text-white uppercase">Music Band and Musician Bootstrap Template</h5>
                                 <div class="front-rect"></div>
                              </div>
                           </div>
                           <!--End row-->
                        </div>
                        <!--End container-->
                     </div>
                     <!--End inner hero-->
                  </li>
                  <li>
                     <div class="background-img overlay zoom">
                        <img src="/frontend/html/img/2.jpg" alt="">
                     </div>
                     <!--Container-->
                     <div class="container hero-content">
                        <!--Row-->
                        <div class="row">
                           <div class="col-sm-12 text-center">
                              <!--Inner hero-->
                              <div class="inner-hero">
                                 <h1 class="large text-white uppercase mb-0">limitless</h1>
                                 <h5 class="mb-0 text-white uppercase">New Album Available Everywhere</h5>
                                 <a class="video-play-but popup-youtube" href="https://www.youtube.com/watch?v=Gc2en3nHxA4"></a>
                              </div>
                           </div>
                           <!--End row-->
                        </div>
                        <!--End container-->
                     </div>
                     <!--End inner hero-->
                  </li>
               </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header default">
               <div class=" left-part">
                  <a class="logo scroll" href="#wrapper">
                     <h2 class="mb-0 uppercase">{{env("APP_NAME")}}.</h2>
                  </a>
               </div>
               <div class="right-part">
                  <nav class="main-nav">
                     <div class="toggle-mobile-but">
                        <a href="#" class="mobile-but" >
                           <div class="lines"></div>
                        </a>
                     </div>
                     <ul class="main-menu list-inline">
                        <li><a class="scroll list-inline-item" href="#wrapper">Home</a></li>
                        <li><a class="scroll list-inline-item" href="#about">about</a></li>
                        <li><a class="scroll list-inline-item" href="#discography">discography</a></li>
                        <li><a class="scroll list-inline-item" href="#band">Band</a></li>
                        <li class="dropdown"><a class="scroll list-inline-item" href="#tour">Tours</a>


                        </li>


                        <li><a class="scroll list-inline-item" href="#gallery">Gallery</a></li>
      <li><a class="scroll list-inline-item " href="#news">News</a>

                          

                        </li>
                        <li><a class="scroll list-inline-item" href="#contact">Contact</a></li>
                        
                        <li class="block-helper">
                           <a href="#album" class="scroll"><span ><i class="icon-cd-2"></i></span></a>
                        </li>
                        <li class="block-helper">
                           <span class="icon search-ico"><i class="icon-search"></i></span>
                        </li>
                     </ul>
                  </nav>
               </div>
            </header>
            <!--End header-->
         </section>
         <!--End hero section-->
         <!--Latest album section-->
         <section id="album" class="latest main">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9 ">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <h1 class="uppercase">Latest album</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12  col-lg-4  ">
                     <div class="block-content text-center gap-one-bottom-sm">
                        <div class="block-album-info">
                           <ul>
                           <li><h5 class=" uppercase list-inline-item ">Label</h5> <span>Limitless</span></li>
                           <li><h5 class=" uppercase list-inline-item">Released</h5> <span>March 23/3/18</span></li>
                           <li><h5 class=" uppercase list-inline-item">Genre</h5> <span>Pop/Rock/techno</span></li>
                           <li><h5 class="uppercase list-inline-item">Styles</h5> <span>Revival/Indie Rock</span></li>
                           <li>
                           </ul>
                        </div>
                        <ul class="block-social list-inline mt-4">
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-apple"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-play"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-amazon"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-soundcloud"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-spotify"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-8 col-md-10">
                     <div class="block-tracklist">
                        <audio preload class="album"></audio>
                        <div class="block-content pb-0">
                           <img  class="mb-0" src="/frontend/html/img/album/5.jpg" alt="">
                        </div>
                        <ol class="playlist">
                           <li>
                              <div class="as-link" data-src="mp3/01.mp3">
                                 <!--Row-->
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6 ">
                                       <div class="block-track">
                                          <h6 class="mb-0 opc-70 uppercase">Love alive</h6>
                                          <span>Limitless </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-md-right">
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico" ><i class="icon-download"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <div class="as-link" data-src="mp3/01.mp3">
                                 <!--Row-->
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="block-track">
                                          <h6 class="mb-0 opc-70 uppercase ">Hope</h6>
                                          <span> Limitless</span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-md-right">
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico border-2 toggle-lyrics"><i class="icon-note"></i>Lyrics</a>
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico" ><i class="icon-cart"></i>Purchase</a>
                                    </div>
                                    <div class="col-12 ">
                                       <div class="block-lyrics w-75 text-center mt-3">
                                          <h5 class="mb-4 opc-70 uppercase ">Hope</h5>
                                          <p>Liberian girl
                                             You came and you changed my world
                                             A love so brand new
                                             Liberian girl
                                             You came and you changed my world
                                             A feeling so true
                                          </p>
                                          <p>Liberian girl
                                             You know that you came
                                             And you changed my world
                                             Just like in the movies
                                             With two lovers in a scene
                                             And she says
                                             "Do you love me"
                                             And he says so endlessly
                                             "I love you, Liberian girl"
                                          </p>
                                          <p>Liberian girl
                                             More precious than any pearl
                                             Your love so complete
                                             Liberian girl
                                             You kiss me then,
                                             Ooh, the world
                                             You do this to me
                                             Liberian girl
                                             You know that you came
                                             And you changed my world
                                             Just like in the movies
                                             With two lovers in a scene
                                             And she says
                                             "Do you love me"
                                             And he says so endlessly
                                             "I love you, Liberian girl"
                                          </p>
                                          <p>Liberian girl
                                             You know that you came
                                             And you changed my world
                                             I wait for the day
                                             When you have to say
                                             "I do"… 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <div class="as-link" data-src="mp3/01.mp3">
                                 <!--Row-->
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="block-track">
                                          <h6 class="mb-0 opc-70 uppercase">Bounce out</h6>
                                          <span>Limitless </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-md-right">
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico" ><i class="icon-download"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <div class="as-link" data-src="mp3/01.mp3">
                                 <!--Row-->
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="block-track">
                                          <h6 class="mb-0 opc-70 uppercase">Girls are the same</h6>
                                          <span>Limitless </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-md-right">
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico"><i class="icon-download"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <div class="as-link" data-src="mp3/01.mp3">
                                 <!--Row-->
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="block-track">
                                          <h6 class="mb-0 opc-70 uppercase ">My queen</h6>
                                          <span>Limitless </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-md-right">
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico border-2 toggle-lyrics"><i class="icon-note"></i>Lyrics</a>
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico" ><i class="icon-cart"></i>Purchase</a>
                                    </div>
                                    <div class="col-12 ">
                                       <div class="block-lyrics w-75  text-center mt-3">
                                          <h5 class="mb-4 opc-70 uppercase ">My queen</h5>
                                          <p>Liberian girl
                                             You came and you changed my world
                                             A love so brand new
                                             Liberian girl
                                             You came and you changed my world
                                             A feeling so true
                                          </p>
                                          <p>Liberian girl
                                             You know that you came
                                             And you changed my world
                                             Just like in the movies
                                             With two lovers in a scene
                                             And she says
                                             "Do you love me"
                                             And he says so endlessly
                                             "I love you, Liberian girl"
                                          </p>
                                          <p>Liberian girl
                                             More precious than any pearl
                                             Your love so complete
                                             Liberian girl
                                             You kiss me then,
                                             Ooh, the world
                                             You do this to me
                                             Liberian girl
                                             You know that you came
                                             And you changed my world
                                             Just like in the movies
                                             With two lovers in a scene
                                             And she says
                                             "Do you love me"
                                             And he says so endlessly
                                             "I love you, Liberian girl"
                                          </p>
                                          <p>Liberian girl
                                             You know that you came
                                             And you changed my world
                                             I wait for the day
                                             When you have to say
                                             "I do"… 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li >
                              <div class="as-link" data-src="mp3/01.mp3">
                                 <!--Row-->
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="block-track">
                                          <h6 class="mb-0 opc-70 uppercase">Falling apart</h6>
                                          <span>Limitless </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-md-right">
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico" ><i class="icon-download"></i>Download</a>
                                       <a href="#" class="btn-s uppercase btn btn-primary with-ico" ><i class="icon-basket"></i>Purchase</a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End latest album section-->
         <!--About section-->
         <section id="about" class="about overlay main">
            <div class="background-img" >
               <img  src="/frontend/html/img/25.jpg" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row  vertical-align">
                  <div class="col-lg-5 col-md-12">
                     <div class="front-p">
                        <h1 class="uppercase text-white">A different <br>kind of music</h1>
                        <p class=" w-93">Melbourne is the coastal capital of the southeastern Australian state of Victoria. At the city's centre is the modern Federation Square development, with plazas, bars, and restaurants by the Yarra River. In the Southbank area, the Melbourne Arts Precinct is the site of Arts Centre Melbourne and the National Gallery of Victoria, with Australian and indigenous art.</p>
                         <ul class="block-social list-inline mb-4 mb-lg-0">
                                 <li class="list-inline-item mr-0"><a  href="#"><i class="socicon-apple"></i></a></li>
                                 <li class="list-inline-item mr-0"><a   href="#"><i class="socicon-play"></i></a></li>
                                 <li class="list-inline-item mr-0"><a   href="#"><i class="socicon-amazon"></i></a></li>
                                 <li class="list-inline-item mr-0"><a  href="#"><i class="socicon-spotify"></i></a></li>
                                 <li class="list-inline-item mr-0"><a   href="#"><i class="socicon-soundcloud"></i></a></li>
                              </ul>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="row ">
                        <div class="col-md-4 ">
                           <div class="block-content front-p pt-3 pb-3 text-center rounded bg-red mb-4 mb-lg-0">
                              <h3 class="uppercase mb-0 font-weight-600">upcoming tour </h3>
                              <span class=" p mb-0">Fort Mason Center<br>
                              San Fancisco, CA
                              </span>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="block-content pt-3 pb-3 text-center rounded bg-dark-blue front-p mb-4 mb-lg-0">
                              <h3 class="uppercase mb-0 font-weight-600">location </h3>
                              <span class=" p mb-0">Sunday to Wednesday
                              <br>July 23 to 26, 2017
                              </span>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="block-content front-p">
                              <a class="btn btn-primary uppercase with-ico border-2" href="#"><i class="icon-ticket"></i>Buy a Ticket</a>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End about section-->
         <!--Discography section-->
         <section id="discography" class="discography main">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9 ">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <h1 class="uppercase">Discography</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-3">
                     <div class="block-album block-content">
                        <h5 class="mb-0 opc-70 uppercase">Limitless</h5>
                        <a class="link" href="album-single.html">View Album ›</a>
                        <a href="album-single.html">
                        <img class="animated" src="/frontend/html/img/album/1.jpg" alt="">
                        </a>
                        <ul class="block-social list-inline mb-md-3">
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-apple"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-play"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-amazon"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-soundcloud"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                     <div class="block-album block-content">
                        <h5 class="mb-0 opc-70 uppercase">Set me free</h5>
                        <a class="link" href="album-single.html">View Album ›</a>
                        <a href="album-single.html">
                        <img class="animated" src="/frontend/html/img/album/2.jpg" alt="">
                        </a>
                        <ul class="block-social list-inline mb-md-3">
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-apple"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-play"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-amazon"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-soundcloud"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                     <div class="block-album block-content">
                        <h5 class="mb-0 opc-70 uppercase">How It Feels</h5>
                        <a class="link" href="album-single.html">View Album ›</a>
                        <a href="album-single.html">
                        <img  class="animated" src="/frontend/html/img/album/3.jpg" alt="">
                        </a>
                        <ul class="block-social list-inline mb-md-3">
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-apple"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-play"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-amazon"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-soundcloud"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3">
                     <div class="block-album block-content">
                        <h5 class="mb-0 uppercase opc-70">Tonight</h5>
                        <a class="link" href="album-single.html">View Album ›</a>
                        <a href="album-single.html">
                        <img class="animated"  src="/frontend/html/img/album/4.jpg" alt="">
                        </a>
                        <ul class="block-social list-inline mb-md-3">
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-apple"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-play"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-amazon"></i></a></li>
                           <li class="list-inline-item mr-0"><a href="#"><i class="socicon-soundcloud"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End discography section-->
         <!--Divider section-->
         <section  class="divider overlay">
            <div class="background-img" >
               <img  src="/frontend/html/img/4.jpg" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10 ">
                     <div class="block-content text-center front-p">
                        <h1 class="uppercase">Time left until the upcoming tour </h1>
                        <p class="lead">27 to 31 July 2018 with over 10 show - Cincinnati, Ohio  </p>
                        <div class="countdown uppercase  mb-0"></div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->            
         </section>
         <!--End divider section-->
         <!--Band members section-->
         <section id="band" class="band main ">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <h1 class="uppercase">Band members</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-md-4 col-lg-4">
                     <div class="block-member">
                        <img src="/frontend/html/img/5.jpg" alt="">
                        <div class="member-info">
                           <h6 class="uppercase mb-0 ">Joe Walker</h6>
                           <span class=" mt-0"> Lead vocals,guitars</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                     <div class="block-member">
                        <img src="/frontend/html/img/6.jpg" alt="">
                        <div class="member-info">
                           <h6 class="uppercase mb-0 ">Andrew Smith</h6>
                           <span class=" mt-0"> Lead guitar, bass guitar</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                     <div class="block-member">
                        <img src="/frontend/html/img/7.jpg" alt="">
                        <div class="member-info">
                           <h6 class="uppercase mb-0 ">Jeremy Anderton</h6>
                           <span class=" mt-0">Drums, keyboards</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End band members section-->
         <!--Tours section-->
         <section id="tour" class="tour  main bg-secondary">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center ">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content  gap-one-bottom-md text-center">
                        <div class="block-title ">
                           <h1 class="uppercase">Upcoming tours</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center ">
                  <div class="col-12 col-lg-8 col-md-10">
                     <ul class="block-tabs list-inline gap-one-bottom-sm text-center">
                        <li class="active list-inline-item">
                           <h5 class="uppercase  mb-0">american tour</h5>
                        </li>
                        <li class="list-inline-item">
                           <h5 class="uppercase  mb-0">europeen tour</h5>
                        </li>
                     </ul>
                     <ul class="block-tab">
                        <!--Tab-->
                        <li class="active ">
                           <div class="block-content text-center">
                              <div class="block-video">
                                 <img src="/frontend/html/img/8.jpg" class="background-img mb-0"  alt="" >
                                 <a class="video-play-but popup-youtube" href="https://www.youtube.com/watch?v=Gc2en3nHxA4"></a>
                                 <div class="embed-responsive embed-responsive-16by9">
                                 </div>
                              </div>
                              <p class=" mt-3"><span class="opc-70">The American Tour 2018 -</span> <a class="link" href="#">Booking Enqueries</a> </p>
                           </div>
                           <div class="block-content gap-one-top-sm text-left">
                              <div class="block-content ">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">14 Mar</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Melbourne, AU</h6>
                                       <span>Rod Laver Arena </span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico border-2" href="#"><i class="icon-ticket"></i>Vip</a>
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="block-content ">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">10 Apr</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Washington, DC, USA</h6>
                                       <span>Capital One Arena</span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="block-content ">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">24 May</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Houston, TX, USA</h6>
                                       <span>Arena Theatre</span>
                                    </div>
                                    <div class=" col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico border-2" href="#"><i class="icon-ticket"></i>Vip</a>
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="block-content">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">31 Jun</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Chicago, IL, USA</h6>
                                       <span>United Center</span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="block-content text-center">
                              <div class="block-video">
                                 <img src="/frontend/html/img/9.jpg" class="background-img mb-0"  alt="" >
                                 <a class="video-play-but popup-youtube" href="https://www.youtube.com/watch?v=Gc2en3nHxA4"></a>
                                 <div class="embed-responsive embed-responsive-16by9">
                                 </div>
                              </div>
                              <p class=" mt-3"><span class="opc-70">The Europeen Tour 2018 -</span> <a class="link" href="#">Booking Enqueries</a> </p>
                           </div>
                           <div class="block-content gap-one-top-sm text-left">
                              <div class="block-content ">
                                 <div class="row ">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">24 Jul</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Stockholm, Sweden</h6>
                                       <span>Annexet</span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="block-content ">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">16 Aug</h4>
                                    </div>
                                    <div class=" col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Berlin, Germany</h6>
                                       <span>Mercedes-Benz Arena</span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 float-left text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="block-content ">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">24 Sep</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Monterrey, Mexico</h6>
                                       <span>Machaca </span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico border-2" href="#"><i class="icon-ticket"></i>Vip</a>
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="block-content">
                                 <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                       <h4 class="switch-fot">31 Oct</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <h6 class="mb-0 opc-70 uppercase">Moscow, Russia</h6>
                                       <span>Olimpiyskiy</span>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 text-md-right">
                                       <a class="btn-s uppercase btn btn-primary with-ico border-2" href="#"><i class="icon-ticket"></i>Vip</a>
                                       <a class="btn-s uppercase btn btn-primary with-ico" href="#"><i class="icon-ticket"></i>Buy Ticket</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-12  col-lg-8   col-md-10">
                     <div class="block-content  gap-one-top-sm">
                        <div class="card  border-dashed">
                           <div class="card-body p-5 block-subscribe ">
                              <p class="uppercase text-center mb-4">Subscribe for free downloads and <br>band news updates</p>
                              <form method="get">
                                 <div class="form-row justify-content-center">
                                    <div class="col-12 col-md-9 col-lg-8">
                                       <div class="form-group">
                                          <input class="form-control form-control-lg" name="email" placeholder="Email Address..." type="email">
                                          <span class="text-small mt-2">* We don’t share your information with anyone.</span>
                                       </div>
                                    </div>
                                    <div class="col-auto">
                                       <button type="submit" class="btn  btn-primary uppercase border-3">
                                       Subscribe now</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End tour section-->
         <section class="divider overlay">
            <div class="background-img">
               <img src="/frontend/html/img/24.jpg" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10 ">
                     <div class="block-content text-center front-p">
                        <h1 class="uppercase"> 
PRE-SALE OF 'THE upcoming TOUR' </h1>
<div class="block-presale mt-5">
                           <ul>
                           <li><h5 class="uppercase list-inline-item">Pre-Sale Tour 1 :</h5> <span>2/07 - 2/09</span></li>
                           <li><h5 class=" uppercase list-inline-item">Pre-Sale Tour 1 :</h5> <span>2/14 - 2/16</span></li>
                        </ul>
                           <p class=" opc-70 mb-0">All pre-sales begin 12am local and end 6pm local time.</p>
                        </div>
                        <a class="btn btn-primary uppercase with-ico border-2 mt-5" href="#">Click for more info</a>                      
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->            
         </section>
         <!--Gallery section-->
         <section id="gallery" class="gallery main">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center ">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content  gap-one-bottom-md text-center">
                        <!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
                           <h1 class="uppercase indent">Upcoming tours</h1>
                        <i class="icon-camera-7 big-icon adjust-space "></i>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center text-center">
                  <div class="col-12 ">
                     <div class="card-gallery image-gallery">
                        <a href="img/10.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/10.jpg" ></a>
                        <a href="img/11.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/11.jpg" ></a>
                        <a href="img/12.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/12.jpg"></a>
                        <a href="img/13.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/13.jpg" ></a>
                        <a href="img/20.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/20.jpg" ></a>
                        <a href="img/14.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/14.jpg" ></a>
                        <a href="img/15.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/15.jpg" ></a>
                        <a href="img/16.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/16.jpg" ></a>
                        <a href="img/17.jpg" class="popup-image mb-0"><img class="animated" alt="" src="/frontend/html/img/17.jpg" ></a>
                     </div>
                     <a class="btn btn-primary uppercase with-ico mt-5" href="#"><i class="icon-instagram"></i>Follow us @{{env("APP_NAME")}}</a>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End gallery section-->
         <!--News section-->
         <section id="news" class="news main bg-secondary">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center ">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content  gap-one-bottom-md text-center">
                        <div class="block-title ">
                           <h1 class="uppercase">On the blog</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <ul class="news-list">
                  <li class="row align-items-center justify-content-around">
                     <div class="col-12 col-md-6 order-md-2">
                        <div class="block-content">
                           <a href="#"><img alt="" class="img-fluid animated" src="/frontend/html/img/18.jpg"></a>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-5  order-md-1 ">
                        <div class="block-content text-left">
                           <span class="mb-2 opc-70">Nov 10, 2017</span>
                           <h2 >New Single “Por Favor” feat. Fifth Harmony Out Now!</h2>
                           <p class="lead">
                              Melbourne is the coastal capital of the southeastern Australian state of Victoria. At the city's centre is the modern Federation Square development, with plazas, bars, and restaurants by the Yarra River. 
                           </p>
                           <a href="#">Read more ›</a>
                        </div>
                     </div>
                  </li>
                  <li class="row align-items-center justify-content-around">
                     <div class="col-12 col-md-6 order-1">
                        <div class="block-content">
                           <a href="#"><img alt="" class="img-fluid animated" src="/frontend/html/img/19.jpg"></a>
                        </div>
                     </div>
                     <!--end of col-->
                     <div class="col-12 col-md-6 col-lg-5  order-2 text-left">
                        <div class="block-content text-left">
                           <span class="mb-2 opc-70">Nov 10, 2017</span>
                           <h2>Watch The Official Video for “Options” ft. Stephen Marley</h2>
                           <p class="lead">
                              Melbourne is the coastal capital of the southeastern Australian state of Victoria. At the city's centre is the modern Federation Square development, with plazas, bars, and restaurants by the Yarra River. 
                           </p>
                           <a href="#">Read more ›</a>
                        </div>
                     </div>
                     <!--end of col-->
                  </li>
               </ul>
               <div class="block-content text-center">
                  <a class="btn btn-primary with-ico uppercase mt-5 " href="#">
                  View all blog posts</a>
               </div>
            </div>
            <!--End container-->
         </section>
         <!--End news section-->
         <!--Twitter section-->
         <section class="twitter main bg-secondary">
            <!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
               <h1 class="uppercase indent">Upcoming tours</h1>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center ">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content  text-center">
                        <i class="icon-twitter big-icon adjust-space"></i>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-7 col-lg-6">
                     <div class=" tweets mb-5 text-center">
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End twitter section-->  
         <!--Contact section-->
         <section id="contact" class="contact main bg-secondary">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center ">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content  gap-one-bottom-md text-center">
                        <div class="block-title ">
                           <h1 class="uppercase">stay in touche</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                     <ul class="feature-list feature-list-sm text-center row">
                        <li class="col-md-6  col-lg-4">
                           <div class="card text-center" >
                              <div class="card-body">
                                 <h2 class="uppercase ">Booking</h2>
                                 <p class="mb-0"><em class="uppercase h5 opc-70">Benaissa Ghrib</em>
                                    T+(513)352-3209<br>
                                    booking@radax.net
                                 </p>
                              </div>
                           </div>
                        </li>
                        <li class="col-md-6  col-lg-4">
                           <div class="card text-center">
                              <div class="card-body">
                                 <h2 class="uppercase">Press</h2>
                                 <p class="mb-0"><em class="uppercase h5 opc-70">Zakaria Kalal</em>
                                    T+(513)352-3209<br>
                                    press@radax.net
                                 </p>
                              </div>
                           </div>
                        </li>
                        <li class="col-md-6  col-lg-4">
                           <div class="card text-center">
                              <div class="card-body">
                                 <h2 class="uppercase ">info</h2>
                                 <p class=" mb-0"><em class="uppercase h5 opc-70">Youssef Ait</em>
                                    T+(513)352-3209<br>
                                    info@radax.net
                                 </p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-12">
                     <ul class="block-social list-inline text-center mt-4">
                        <li class="list-inline-item">
                           <a href="#"> <i class="socicon-facebook"></i> </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="socicon-instagram"></i> </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="socicon-twitter"></i> </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="socicon-youtube"></i> </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="socicon-apple"></i> </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="socicon-amazon"></i></a> 
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--End container-->
         </section>
         <!--End contact section-->  
         <footer class="pt-5 pb-5 footer">
            <!--Container-->
            <div class="container">
               <div class="row justify-content-between align-items-center">
                  <div class="col-md-6">
                     <small class="small"><span>&copy; 2019 all rights reserved - a product of</span> {{env("APP_NAME")}}.</small>
                  </div>
                  <div class="col-md-6 text-md-right">
                     <ul class="list-inline small">
                        <li class="list-inline-item">
                           <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">Legal</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--End container-->
         </footer>
         <a class="block-top scroll" href="#wrapper">
         <i class="icon-angle-up"></i></a>
      </div>
      <!-- End wrapper-->
      <!--Javascript--> 
      <script src="/frontend/html/js/jquery-1.12.4.min.js"></script>
      <script src="/frontend/html/js/jquery.flexslider-min.js"></script>
      <script src="/frontend/html/js/smooth-scroll.js" ></script>
      <script src="/frontend/html/js/jquery.magnific-popup.min.js" ></script>
      <script src="/frontend/html/js/audio.min.js" ></script>
      <script src="/frontend/html/js/twitterFetcher_min.js" ></script>
      <script src="/frontend/html/js/jquery.countdown.min.js" ></script>
      <script src="/frontend/html/js/placeholders.min.js"></script>
      <script src="/frontend/html/js/script.js"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>

