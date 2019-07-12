<?php
session_start();
?>

<html>
    <head>
        <title>php</title>
        <link href="signup12.css" rel="stylesheet">
    </head>
    <body>
        <div class="form">
        <div class="logo"></div>Please fill in this form to create an account!<br><br>
            <form action="includes/signup.inc.php" method="post">

            <?php   

                if(isset($_GET['username'])){
                    $username=$_GET['username'];
                    echo' <input type="username" name="username" placeholder="Username" value='.$username.' ><br>';

                }
                else{
                    echo'<input type="username" name="username" placeholder="Username" ><br>';
                }

                if(isset($_GET['email'])){
                    $email=$_GET['email'];
                    echo'<input type="email" name="email" placeholder="Email" value='.$email.'><br>';
                }
                else{
                    echo'<input type="email" name="email" placeholder="Email"><br>';
                }
                ?>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="password" name="confirm_password" placeholder="Confirm password" ><br>
                <button type="submit" name="submit">Sign up</button><br>
            </form>

            <?php
                $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($url,"error=emptyfields")==true){
                    echo '<p class="error">Fill up all fields.</p>';
                    exit();
                }
                else if(strpos($url,"error=invalidemail")==true){
                    echo '<p class="error">Invalid email id.</p>';
                    exit();                    
                }
                else if(strpos($url,"error=invalidusername")==true){
                    echo '<p class="error">Invalid username.</p>';
                    exit();}
                else if(strpos($url,"error=usernametaken")==true){
                    echo '<p class="error">Username already taken.</p>';
                    exit();}
                else if(strpos($url,"error=smallpassword")==true){
                    echo '<p class="error">Password is too short.</p>';
                    exit();}
                else if(strpos($url,"error=passwordnotmatch")==true){
                    echo '<p class="error">Password did not match.</p>';
                    exit();}

                ?>


        </div>
    </body>
</html>