<div>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .mobile-menu {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        #toggle-menu {
            background-color: #333;
            color: #fff;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: none;
        }

        .menu-list li {
            padding: 10px 0;
        }

        .menu-list a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }

        @media screen and (max-width: 600px) {
            .menu-list {
                display: block;
            }

            .menu-list li {
                border-top: 1px solid #555;
            }
        }
    </style>

    <div class="mobile-menu">
        <button id="toggle-menu">☰ Menu</button>
        <ul class="menu-list">
            <li><a class="io" href="/">Home</a></li>
            <li><a class="io" href="/event">Events</a></li>
            <li><a class="io" href="/merch">Merch</a></li>
        </ul>
    </div>

    <script>
        document.getElementById('toggle-menu').addEventListener('click', function() {
            var menuList = document.querySelector('.menu-list');
            menuList.style.display = menuList.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</div>