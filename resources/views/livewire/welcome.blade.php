<div>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:900&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        .slider-container {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            height: 100vh;
            width: 100vw;
        }

        .slider-container h1 {
            color: #fff;
            font-size: 100px;
            letter-spacing: 5px;
            position: relative;
            z-index: 100;
            text-align: center;
        }

        .slider-container::after {
            background-color: #000;
            content: '';
            position: absolute;
            opacity: 0.3;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
        }

        .slide {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            height: 100%;
            width: 100%;
            transform: scale(1.15);
            transition: opacity .6s ease;
        }

        .slide.active {
            animation: grow 4s linear forwards;
            opacity: 1;
        }

        @keyframes grow {

            0%,
            20% {
                transform: scale(1);
            }

            75%,
            100% {
                transform: scale(1.15);
            }
        }

        .controls-container {
            position: absolute;
            top: 50%;
            right: 10px;
            display: flex;
            flex-direction: column;
            transform: translateY(-50%);
            z-index: 2;
        }

        .control {
            background-color: #fff;
            cursor: pointer;
            opacity: 0.5;
            margin: 6px;
            height: 40px;
            width: 5px;
            transition: opacity 0.3s, background-color 0.3s, transform 0.3s;
        }

        .control.active,
        .control:hover {
            background-color: #fff;
            opacity: 1;
            transform: scale(1.2);
        }

        .bg {
            background: linear-gradient(to bottom, #000000, #00cc00);
            color: #ffffff;
            padding: 20px;
            text-align: center;
            height: fit-content
        }

        @keyframes moveUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10%);
            }
        }

        .anime-image {
            animation: moveUpDown 3s ease-in-out infinite;
            /* Adjust the duration as needed */
        }

        /* Additional styles for demonstration */
        .container {
            text-align: center;
            margin-top: 50px;
        }

        .anim-div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="row">
        <!-- Images from Unsplash -->
        <div class="slider-container">
            <h1>Radar <span class="text-success">X</span> <br>
                <img src="/images/down-gif.gif" alt="" width="50px"></span>
            </h1>

            <div class="slide" style="background-image: url('/images/bg.png')"></div>
            <div class="slide" style="background-image: url('/images/bg.png')"></div>


            <div class="controls-container">
                <div class="control"></div>
                <div class="control"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-12 ">
                <h1>MUSIC</h1>
                <p>Listen to our musics</p>
            </div>
            <div class="col-md-6">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/61sgW29lXEHcAgCfaSmoEj?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 d-flex" style="display: flex;flex-direction:column; justify-content:flex-end">
                <h1 style="">Watch our Videos</h1>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/YnS4RtyILJs?si=o-oCbRpIaGTbGEjr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>


        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center p-5">
                <h3 class="display-3">RADAR-X</h3>
                <li>My Alter Ego</li>
                <small>My Alter Ego</small>

                <div class="anim-div">
                    <img style="height: 100vh;" class="anime-image" src="/images/1.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <script>
        const slides = document.querySelectorAll('.slide');
        const controls = document.querySelectorAll('.control');
        let activeSlide = 0;
        let prevActive = 0;

        changeSlides();
        let int = setInterval(changeSlides, 10000);

        function changeSlides() {
            slides[prevActive].classList.remove('active');
            controls[prevActive].classList.remove('active');

            slides[activeSlide].classList.add('active');
            controls[activeSlide].classList.add('active');

            prevActive = activeSlide++;

            if (activeSlide >= slides.length) {
                activeSlide = 0;
            }

            console.log(prevActive, activeSlide);
        }

        controls.forEach(control => {
            control.addEventListener('click', () => {
                let idx = [...controls].findIndex(c => c === control);
                activeSlide = idx;

                changeSlides();

                clearInterval(int);
                int = setInterval(changeSlides, 1000);
            });
        });
    </script>
</div>`