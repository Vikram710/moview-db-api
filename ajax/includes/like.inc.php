<?php
    session_start();
    $act=0;
    if(isset($_POST["like"])){
        require "dbh.inc.php";
        $title=$_POST['title'];
        $user=$_SESSION['username'];
        $exists=0;
        echo$title;
        echo$user;
        $query1="SELECT movie FROM likes WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                if($record[$x]==$title){
                    $exists=1;
                }
            }
        }
        
        if($exists ==0){
            mysqli_stmt_close($stmt1);
            $query="INSERT INTO likes(movie,user) VALUES(?,?) ";
            $stmt=mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt,"ss",$title,$user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            $act=1;
        }
    }
    else if(isset($_POST["fav"])){
        require "dbh.inc.php";
        $title=$_POST['title'];
        $user=$_SESSION['username'];
        $exists=0;
        echo$title;
        echo$user;
        $query1="SELECT movie FROM fav WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                if($record[$x]==$title){
                    $exists=1;
                }
            }
        }
        
        if($exists ==0){
            mysqli_stmt_close($stmt1);
            $query="INSERT INTO fav (movie,user) VALUES(?,?) ";
            $stmt=mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt,"ss",$title,$user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            $act=2;
        }
    }
    else if(isset($_POST["watched"])){
        require "dbh.inc.php";
        $title=$_POST['title'];
        $user=$_SESSION['username'];
        $exists=0;
        echo$title;
        echo$user;
        $query1="SELECT movie FROM watched WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                if($record[$x]==$title){
                    $exists=1;
                }
            }
        }
        
        if($exists ==0){
            mysqli_stmt_close($stmt1);
            $query="INSERT INTO watched(movie,user) VALUES(?,?) ";
            $stmt=mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt,"ss",$title,$user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            $act=3;
        }
    }

    else if(isset($_POST["later"])){
        require "dbh.inc.php";
        $title=$_POST['title'];
        $user=$_SESSION['username'];
        $exists=0;
        echo$title;
        echo$user;
        $query1="SELECT movie FROM later WHERE user=?";
        $stmt1=mysqli_prepare($conn, $query1);
    
        mysqli_stmt_bind_param($stmt1,"s",$user);
        mysqli_stmt_execute($stmt1);
        $result=mysqli_stmt_get_result($stmt1);
        while($record=mysqli_fetch_array($result)){
            
            for($x = 0; $x < count($record)/2; $x++) {
                if($record[$x]==$title){
                    $exists=1;
                }
            }
        }
        
        if($exists ==0){
            mysqli_stmt_close($stmt1);
            $query="INSERT INTO later(movie,user) VALUES(?,?) ";
            $stmt=mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt,"ss",$title,$user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            $act=4;
        }
    }
    //header("Location:../search.php?".$act."");
    //exit();

