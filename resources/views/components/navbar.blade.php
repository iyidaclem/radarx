<div>

    <style>
        .main_nav {
            background-color: #161616;
            padding: 10px;
            justify-content: center;
            align-items: center;
        }

        .nav_ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
            justify-content: space-evenly;
        }

        .show {
            display: block !important;
        }

        #btn2 {
            display: none;
        }

        li {
            margin: 10px;
            cursor: pointer;
        }

        a {

            color: white !important;
            text-decoration: none !important;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }



        li {
            /* Set initial text decoration properties */
            text-decoration: none;
            text-decoration-color: transparent;
            text-decoration-line: none;
            text-decoration-thickness: 0;

            /* Add transition for a smooth animation */
            transition: text-decoration 0.3s ease-in-out,
                text-decoration-color 0.3s ease-in-out,
                text-decoration-line 0.3s ease-in-out,
                text-decoration-thickness 0.6s ease-in-out;
        }

        li:hover {
            /* Change text decoration properties on hover */
            text-decoration: underline;
            text-decoration-color: green;
            text-decoration-line: underline;
            text-decoration-thickness: 4px;
        }


        .menu {
            display: flex;
            flex-direction: row;
            justify-content: right;
            align-items: center;
        }

        @media screen and (max-width: 768px) {
            .nav_ul {
                position: fixed !important;
                top: 0 !important;
                width: 100vw !important;
                height: 100vh !important;
                z-index: 99999 !important;
                background-color: #161616 !important;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                left: -100%;
                align-self: center;
                justify-self: center;
                padding-top: 10%;

            }

            .togglers {
                position: fixed;
                top: 25px;
                right: 10px;
                text-align: right;

            }

            .toggler {
                font-size: xx-large;
                cursor: pointer;
            }
        }
    </style>

    <div class="container-fluid main_nav">
        <div class="row d-flex">
            <div class="col-4">
                <div class="d-flex align-items-center justify-items-center">
                    <a href="/">
                        <h3>RADAR </h3>
                        <img src="/images/logo.png" alt="" height="50px">
                    </a>
                </div>
            </div>
            <div class="col-8 menu">
                <ul class="nav_ul">
                    @if(auth::check())
                    <li><a href="/home">Dashboard</a></li>
                    @else
                    <li><a href="/">Home</a></li>
                    @endif
                    <li><a href="/events">Events</a></li>
                    <li><a href="/merch">Merch</a></li>
                    <li><a href="/community">Community</a></li>
                    <li><a href="/xdezigna">Xdezigna</a></li>
                    @if(auth::check())
                    <li><a class="btn btn-danger" href="javascript:void" onclick="document.getElementById('logout').click()">Logout</a></li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input class="d-none" type="submit" value="Logout" id="logout">
                    </form>
                    @endif
                </ul>
            </div>
            <div class="col-8 d-md-none togglers" style="z-index: 999999;">
                <i class="toggler bi bi-list" id="btn1"></i>
                <i class="toggler bi bi-x-lg" id="btn2"></i>
            </div>
        </div>
    </div>

    <script>
        $("#btn1").click(() => {
            $("#btn2").show();
            $("#btn1").hide();
            $("ul").css("left", "0%");
        });

        $("#btn2").click(() => {
            $("#btn1").show();
            $("#btn2").hide();
            $("ul").css("left", "-100%");
        });
    </script>
</div>