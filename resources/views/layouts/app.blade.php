<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Metas -->
   <meta charset="utf-8">
   <title>{{env('APP_NAME')}}</title>
   <meta name="description" content="Radar Xtraodinary">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Css -->
   <link href="/frontend/html/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
   <link href="/frontend/html/css/base.css" rel="stylesheet" type="text/css" media="all" />
   <link href="/frontend/html/css/main.css" rel="stylesheet" type="text/css" media="all" />
   <link href="/frontend/html/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
   <link href="/frontend/html/css/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />
   <link href="/frontend/html/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
   <link href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,300,400,400i,600,700,800" rel="stylesheet">
   @livewireStyles
</head>

<body>
   <!-- Preloader -->
   <div class="loader">
      <!-- Preloader inner -->
      <div class="loader-inner">
         <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <circle class="spinner" cx="50" cy="50" r="21" fill="#13181d" stroke-width="2" />
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
                     <form method="get">
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
                     @yield("page_cover")
                     <!-- <img src="/frontend/html/img/1.jpg" alt=""> -->
                  </div>
                  <!--Container-->
                  <div class="container hero-content">
                     <!--Row-->
                     <div class="row">
                        <div class="col-sm-12 text-center">
                           <!--Inner hero-->
                           <div class="inner-hero">
                              <!-- <div class="back-rect"></div> -->
                              @yield("cover_content")
                              <!-- <h1 class="large text-white uppercase mb-0">welcome to {{env("APP_NAME")}}</h1>
                              <h5 class="mb-0 text-white uppercase">Live performace & new releases</h5> -->
                              <!-- <div class="front-rect"></div> -->
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
               <a class="logo scroll" href="/">
                  <h2 class="mb-0 uppercase">{{env("APP_NAME")}}.</h2>
               </a>
            </div>
            <div class="right-part">
               <nav class="main-nav">
                  <div class="toggle-mobile-but">
                     <a href="#" class="mobile-but">
                        <div class="lines"></div>
                     </a>
                  </div>
                  <ul class="main-menu list-inline">
                     @if(Auth::check())
                     <li><a class="scroll list-inline-item" href="/home">Dashboard</a></li>
                     @else
                     <li><a class="scroll list-inline-item" href="/">Home</a></li>
                      @endif
                     <li><a class="scroll list-inline-item" href="/#about">about</a></li>
                     <li><a class="scroll list-inline-item" href="/videos">Videos</a></li>
                     <li><a class="scroll list-inline-item" href="/merch">Merch</a></li>
                     <li class="dropdown"><a class="scroll list-inline-item" href="/community">Community</a>
                     </li>
                     <li><a class="scroll list-inline-item" href="/gallery">Gallery</a></li>
                     </li>
                     <li><a class="scroll list-inline-item" href="/contact">Contact</a></li>

                     <li class="block-helper">
                        <a href="#album" class="scroll"><span><i class="icon-cd-2"></i></span></a>
                     </li>
                     <li class="block-helper">
                        <span class="icon search-ico"><i class="icon-search"></i></span>
                     </li>
                     <li class="block-helper">
                        @if(Auth::check())
                        <button class="btn btn-danger" onclick="document.getElementById('loginbtn').click()">Logout</button>
                        <form action="{{route('logout')}}" method="post">
                           @csrf
                           <input class="d-none" id="loginbtn" type="submit" value="Logout">
                        </form>
                        @else
                        <a href="/login">Login</a>
                        @endif
                     </li>
                  </ul>
               </nav>
            </div>
         </header>
         <!--End header-->
      </section>
      <main class="py-4">
         @yield('content')
      </main>

      <!--Contact section-->
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
   <script src="/frontend/html/js/smooth-scroll.js"></script>
   <script src="/frontend/html/js/jquery.magnific-popup.min.js"></script>
   <script src="/frontend/html/js/audio.min.js"></script>
   <script src="/frontend/html/js/twitterFetcher_min.js"></script>
   <script src="/frontend/html/js/jquery.countdown.min.js"></script>
   <script src="/frontend/html/js/placeholders.min.js"></script>
   <script src="/frontend/html/js/script.js"></script>
   <!-- Google analytics -->
   <!-- End google analytics -->
   @livewireScripts
</body>

</html>