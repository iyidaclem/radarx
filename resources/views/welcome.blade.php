@extends('layouts.app')
@section("page_cover")
<img src="/frontend/html/img/1.jpg" alt="">
@endsection

@section("cover_content")
<div class="back-rect"></div>
<h1 class="large text-white uppercase mb-0">welcome to {{env("APP_NAME")}}</h1>
<h5 class="mb-0 text-white uppercase">Live performace & new releases</h5>
<div class="front-rect"></div>
@endsection

@section('content')
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
                  <h1 class="uppercase">Videos</h1>
                  <video id="currentvideo" width="100%" height="auto" autoplay loop muted controls>
                     <source src="/videos/Website.mov">
                  </video>
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
         <div class="col-12 col-lg-8 col-md-10">
            <div class="block-tracklist">
               <audio preload class="album"></audio>
               <div class="block-content pb-0">
                  <img class="mb-0" src="/frontend/html/img/album/5.jpg" alt="">
               </div>
               <ol class="playlist">
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
   <div class="background-img">
      <img src="/frontend/html/img/25.jpg" alt="">
   </div>
   <!--Container-->
   <div class="container">
      <!--Row-->
      <div class="row  vertical-align">
         <div class="col-lg-4 col-md-12">
            <div class="front-p">
               <h1 class="uppercase text-white">About RadarX</h1>
               <p class=" w-93">
                  Introducing Radar X, known to the world as "THE VYBE MAGIXIAN." He's a Transformative Junkie,
                  an artist whose work opens the door to boundless possibilities and defies limits, echoing the
                  mantra that "anything is possible" with every note and brushstroke.

                  Radar X's creative process is a symphony of expression, where he seamlessly blends various art forms.
                  In his world, music, visuals, and words converge to create a breathtaking tapestry of creativity.

               </p>

            </div>
         </div>
         <div class="col-lg-4">

            <div class="block-content front-p pt-3 pb-3 text-center rounded bg-red mb-4 mb-lg-0">
               <p>But Radar X's journey goes beyond this lifetime; it extends across lifetimes, marking a cosmic odyssey
                  of
                  evolution that transcends boundaries and challenges norms.

                  His artistry isn't confined to the studio or the stage. Radar X is an energetic creative who fuses
                  stage
                  theatre, poetry, and tricks into his live performances. He describes his genre as Afro-future, as he
                  not
                  only experiments with his music but also with the perspective at which his sound is interpreted, using
                  visual
                  branding elements to enhance the experience.</p>
            </div>

         </div>
         <div class="col-md-4">
            <div class="block-content pt-3 pb-3 text-center rounded bg-dark-blue front-p mb-4 mb-lg-0">
               <p>Yet, beyond his art, Radar X possesses a unique superpower — that of building bridges. He's dedicated
                  to
                  connecting Africa through the enchantment of entertainment and technology. He nurtures a community of
                  MagiXians,
                  catalysts for a cultural renaissance, seamlessly merging tradition with innovation.

                  In the enchanting world of Radar X, the Vybe Magixian, the future of Afro creations unfolds, where
                  every
                  moment is a testament to the limitless possibilities of art and the power of connectivity. 🌟🎶✨</p>

            </div>
            <ul class="block-social list-inline mb-4 mb-lg-0">
               <li class="list-inline-item mr-0"><a href="#"><i class="socicon-apple"></i></a></li>
               <li class="list-inline-item mr-0"><a href="#"><i class="socicon-play"></i></a></li>
               <li class="list-inline-item mr-0"><a href="#"><i class="socicon-amazon"></i></a></li>
               <li class="list-inline-item mr-0"><a href="#"><i class="socicon-spotify"></i></a></li>
               <li class="list-inline-item mr-0"><a href="#"><i class="socicon-soundcloud"></i></a></li>
            </ul>
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
               <a class="link" href="#">View Album ›</a>
               <a href="#">
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
               <a class="link" href="#">View Album ›</a>
               <a href="#">
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
               <a class="link" href="#">View Album ›</a>
               <a href="#">
                  <img class="animated" src="/frontend/html/img/album/3.jpg" alt="">
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
               <a class="link" href="#">View Album ›</a>
               <a href="#">
                  <img class="animated" src="/frontend/html/img/album/4.jpg" alt="">
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
<section class="divider overlay">
   <div class="background-img">
      <img src="/frontend/html/img/4.jpg" alt="">
   </div>
   <!--Container-->
   <div class="container">
      <!--Row-->
      <div class="row justify-content-center">
         <div class="col-12 col-lg-10 ">
            <div class="block-content text-center front-p">
               <h1 class="uppercase">Time left until the upcoming tour </h1>
               <p class="lead">Count down... </p>
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
                  <h1 class="uppercase"></h1>
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
               <!-- <div class="member-info">
                           <h6 class="uppercase mb-0 ">Joe Walker</h6>
                           <span class=" mt-0"> Lead vocals,guitars</span>
                        </div> -->
            </div>
         </div>
         <div class="col-md-4 col-lg-4">
            <div class="block-member">
               <img src="/frontend/html/img/6.jpg" alt="">
               <!-- <div class="member-info">
                           <h6 class="uppercase mb-0 ">Andrew Smith</h6>
                           <span class=" mt-0"> Lead guitar, bass guitar</span>
                        </div> -->
            </div>
         </div>
         <div class="col-md-4 col-lg-4">
            <div class="block-member">
               <img src="/frontend/html/img/7.jpg" alt="">
               <!-- <div class="member-info">
                           <h6 class="uppercase mb-0 ">Jeremy Anderton</h6>
                           <span class=" mt-0">Drums, keyboards</span>
                        </div> -->
            </div>
         </div>
      </div>
      <!--End row-->
   </div>
   <!--End container-->
</section>
@endsection