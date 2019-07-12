
<?php session_start();?>
<html>
<head><link href="search1.css" rel="stylesheet"></head>
<style>
    body{
        background-image:url(pr.jpg); 
    }
    
    ol li:hover{
        background:none;
    }
</style>
<body>
<a name="home"></a>
        <div class="main">
            <nav>
                <div class="logo">OMDB </div>

                <ul class="menu-area">
                    <li><a href="dashboard.php">Home</a></li>
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

        </div><br><br><br><br><br><?php
require "includes/dbh.inc.php";
$user=$_SESSION['username'];
        echo '<h3>Likes</h3><ol>';
        $query1="SELECT movie FROM likes WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                echo'<li>';
                echo $record[$x];
                echo'</li>';
            }
        }
        echo'</ol><h3>Favorites</h3><ol>';
        $query1="SELECT movie FROM fav WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                echo'<li>';
                echo $record[$x];
                echo'</li>';
            }
        }
        echo'</ol><h3>Watched</h3><ol>';
        $query1="SELECT movie FROM fav WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                echo'<li>';
                echo $record[$x];
                echo'</li>';
            }
        }
        echo'</ol><h3>watch later</h3><ol>';
        $query1="SELECT movie FROM fav WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                echo '<li>';
                echo $record[$x];
                echo'</li>';
            }
        }
?>

</body>
</html>
