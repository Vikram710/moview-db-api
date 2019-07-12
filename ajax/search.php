<html>
<head>
    <title>Document</title>
    <link href="search1.css" rel="stylesheet">
</head>
<body>
<div class="main">
            <nav>
                <div class="logo">OMDB </div>

                <ul class="menu-area">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="search.php">Movies</a></li>
                    <li><a href="tvsee.php">Tv shows</a></li>
                    <li class="name"> <?php session_start(); echo  $_SESSION["username"];?></li>
                </ul>
                <div class="form">
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout" >Log out</button>
                    </form>
                </div>
            </nav>

        </div><br><br><br><br><br>
        <input type="text" id="title" placeholder="Type the movie name" required>
        <button id="button" onclick="load()">Search</button> 
        <div id="movie"></div>
        <form id="sea" action="includes/like.inc.php" method="POST" hidden >
            <iframe id="video" style="height:425px;width:590px;"></iframe><br>
            <input type="text" id="titlephp" name='title' hidden>
            <input type="submit" name="like" value="Like">
            <input type="submit" name="fav" value="Favorite">
            <input type="submit" name="watched" value="Watched">

            <input type="submit" name="later" value="Watch later">
        </form>
        
        <script src="moviesee1.js"></script>
    
</body>
</html>