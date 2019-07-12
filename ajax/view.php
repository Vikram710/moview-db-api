<html>
<head><link href="search1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body onload="load()">
<div class="main">
            <nav>
                <div class="logo">OMDB </div>

                <ul class="menu-area">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="search.php">Movies</a></li>
                    <li><a href="tvsee.php">Tv shows</a></li>
                    <li class="name"> <?php session_start();echo  $_SESSION["username"];?></li>
                </ul>
                <div class="form">
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout" >Log out</button>
                    </form>
                </div>
            </nav>

        </div><br><br><br><br><br>
    <?php
        $title=$_GET['title'];
        $title1=$_GET['title1'];
        echo '<input type="text" id="title" value="'.$title.'" hidden>';
        echo '<input type="text" id="title1" value="'.$title1.'"hidden>';
    
    ?>
    <div id="movie"></div>
    <form action="includes/like.inc.php" method="POST">
            <input type="text" id="titlephp" name='title' value="" hidden>
            <iframe id="video" style="height:425px;width:590px;">  </iframe><br>
            <input type="submit" name="like" value="Like">
            <input type="submit" name="fav" value="Favorite">
            <input type="submit" name="watched" value="Watched">
            <input type="submit" name="later" value="Watch later">
        </form>

    <script src="thumbview123.js"></script>
</body>
</html>