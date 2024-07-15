<!-- 
 -->
 <!DOCTYPE html>
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        body {
            margin: 0;
            font-family:serif;
        }

        nav {
            background-color: #ffffff;
            padding: 10px 0;
            position: sticky;
            z-index: 9999;
            max-width: 100%;
            width:100%;
            margin:0;
            border-bottom: 2px solid #ccc; 

        }

        .navbar, .menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 100%;
            width:100%;
            font-size:24px;
        }

        .navbar li {
            margin-top: 0px;
            display: inline;
            margin-right: 15px;
        }

        .navbar li.logo {
            margin-right: 10px; 
            margin-left:0;
        }

        .navbar .user-cart-container li.cart {
            margin-right: 20px; 
        }


        .navbar li.logo img {
            max-width:300px !important;

        }

        .navbar li a {
            color: #264653;
            text-decoration: none;
        }



        @media (max-width: 1100px){
            .navbar li a i {
                font-size:35px;
            }
            .navbar li {
                font-size:20px;
            }
            
        }

        .navbar li a.active {
            color: #F4A261; 
        }


        @media (max-width: 1000px) {
            .menu li {
                display: none;
            }
            

            .menu.visible {
                display: flex;
                flex-direction: column; 
                position: absolute;
                top: 100px; 
                width: 400px; 
                background-color: #ffffff; 
                box-shadow: -5px 0 10px rgba(0, 0, 0, 0.3); 
                right: 0;
                padding: 10px;


            }

            .menu.visible li:not(.logo) {
                display: block;
                text-align: center;
                padding: 10px 20px; 
                width: 100%; 
                justify-content:center;
                align-items:center;
                font-size:25px;
                box-sizing: border-box;
                margin-right:0px; 
            }
        }


    </style>

     <title>Portfolio - Header</title>

 </head>
 <body>

    <nav>
        <ul class="navbar" id="nav">
            <li class="logo"><a href="browse.php>"><img src="logo.png"></a></li>
            <div class="menu" id="menu">
                <li><a href="browse.php">Browse</a></li>
                <li><a href="sell_book.php">Sell</a></li>
                <li><a href="about.php">About</a></li>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="toggleMenu()" style="text-decoration: none;">
                 <i class="fa fa-bars" id="menuIcon"></i>
            </a>
            
        </ul>
    </nav>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            const menuIcon = document.getElementById('menuIcon');
    
            menu.classList.toggle('visible');
        
            if (menu.classList.contains('visible')) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            } else {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }
        }
        window.addEventListener('resize', function() {
            const menu = document.getElementById('menu');
            const menuIcon = document.getElementById('menuIcon');
            
            if (menu.classList.contains('visible') && window.innerWidth > 1000) {
                menu.classList.remove('visible');
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }
        });

    </script>
 </body>
 </html>
