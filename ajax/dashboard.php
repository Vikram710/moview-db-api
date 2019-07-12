<?php
session_start();
?>

<html>
    <head>
        <title>php</title>
        <link href="dashboard12.css" rel="stylesheet">
    </head>
    <body>
        <a name="home"></a>
        <div class="main">
            <nav>
                <div class="logo">OMDB </div>

                <ul class="menu-area">
                    <li><a href="#home">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="search.php">Movies</a></li>
                    <li><a href="tvsee.php">Tv shows</a></li>
                    <li class="name"> <?php echo  $_SESSION["username"];?></li>
                </ul>
                <div class="form">
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout" >Log out</button>
                    </form>
                </div>
            </nav>

        </div><br><br><br><br><br>

        <div class="head"><h2>Freatured movies</h2><div id="movies"></div></div><br>
        <div class="head"><h2>Freatured movies</h2><div id="tvshows"></div></div>
             
        <div class="bottom">
            <div class="about"><h2>About</h2><a name="about"></a>This is a wallet manager web application.
            </div>
            <div class="services"><h2>Services</h2><a name="services"></a>You can add your new expenses,view them and also delete them.
            </div>
            <div class="contact"><h2>Contact</h2><a name="contact"></a>vikram710v@gmail.com<br>9962447541
            </div>  
        </div>
        <script src="thumbnail11.js"></script>
    </body>
</html>


