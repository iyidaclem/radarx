<div>

    <style>
        .main_footer {
            background-color: #161616;
            padding: 10px;
            ;

        }

        .footer-item {
            margin: 0;
            padding: 0;
            list-style-type: none;

        }

        .qk-links {
            flex-direction: column;
        }

        .socials {
            display: flex;
            flex-direction: row;
            color: green;
        }

        .socials:hover {
            color: white;
        }
    </style>
    <div class="container-fluid main_footer p-5">
        <div class="row">
            <div class="col-6" style="text-align: left;">
                <h3 class=""><small>SOCIALS</small></h6>
                    <ul class="socials footer-item">
                        <li>
                            <a href="https://linktr.ee/radar_x">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://linktr.ee/radar_x">
                                <i class="bi bi-apple"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/radar_xtraordinary/">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="col-6 text-right" style="text-align: right;">
                <h3 class="">
                    <small>QUICK LINKS</small>
                </h3>
                <ul class="qk-links footer-item">
                    <li><a href="/events">Events</a></li>
                    <li><a href="/community">Contact</a></li>
                </ul>
            </div>
            <div class="col-12 text-center">
                © {{env("APP_NAME")}} {{date("Y")}}
            </div>
        </div>
    </div>
</div>