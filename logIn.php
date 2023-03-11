<?php
//█████████████████████LOG_IN███████████████████████

if (isset($_POST['login'])){
    $name = $_POST['name'];
    $login = $_POST['email'];
    $password = $_POST['password'];

//███████████████████████SECURITY CHECK███████████████████████
    $name = htmlspecialchars($name);
    $login = htmlspecialchars($login);
    $password = htmlspecialchars($password);

    $name = urldecode($name);
    $login = urldecode($login);
    $password = urldecode($password);

    $name = trim($name);
    $login = trim($login);
    $password = trim($password);


    //!---------------DATABASE CONNECTION---------------
    $mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
    $mysqli->query("SET NAMES 'utf8'");
    
    //?GET ADMIN RECORD IF EXISTS
    $admin = $mysqli->query("SELECT * FROM `admins` WHERE `name` = '$name'");
    $adminExists = $admin->fetch_assoc();
    
    //?GET MODERATOR RECORD IF EXISTS
    $mods = $mysqli->query("SELECT * FROM `moderators` WHERE `name` = '$name'");
    $modExits = $mods->fetch_assoc();

    //?GET USERS RECORD IF EXISTS
    $users = $mysqli->query("SELECT * FROM `users` WHERE `name` = '$name'");
    $userExits = $users->fetch_assoc();

    if(!empty($adminExists['name'])){ //? FOR ADMINS
        // $row = $admin->fetch_assoc();
        //? r => REAL (values from database)
        $rLogin = $adminExists['login'];
        $rPassword = $adminExists['password'];
        $rSecurityKey = $adminExists['security-key'];
        //!-------------------SECURITY COOKIE---------------------
        if ($login === $rLogin && $password === $rPassword){
            // $cookieCode = array('gDt4-$8bs-@nDka-Lja2', 'gs6$-Bia7-Gard-D%ja', 'Q843-st67-2tes-Fe34', '472v-74nf-D93s-kjg4');
            // setcookie('TRU$TED', $cookieCode[rand(0,3)], time() + 1800);
            setcookie('TRU$TED', $rSecurityKey, time() + 1800);
            print '<script type="text/javascript">window.location.replace("A83hD94dM05Igdr5N.php");</script>';
        }
        else{
            echo '<script>alert("Error: Your login or password is wrong, try again")</script>'; 
        }
    }elseif(!empty($modExits['name'])){ //? FOR MODERATORS
        // $row = $mods->fetch_assoc();
        //? r => REAL (values from database)
        $rLogin = $modExits['login'];
        $rPassword = $modExits['password'];
        $rSecurityKey = $modExits['security-key'];
        //!-------------------SECURITY COOKIE---------------------
        if (($login === $rLogin) && ($password === $rPassword)){
            // $cookieCode = array('gDt4-$8bs-@nDka-Lja2', 'gs6$-Bia7-Gard-D%ja', 'Q843-st67-2tes-Fe34', '472v-74nf-D93s-kjg4');
            // setcookie('TRU$TED', $cookieCode[rand(0,3)], time() + 1800);
            setcookie('TRU$TED', $rSecurityKey, time() + 1800);
            print '<script type="text/javascript">window.location.replace("A83hD94dM05Igdr5N.php");</script>';
        }
        else{
            echo '<script>alert("Error: Your login or password is wrong, try again")</script>'; 
        }
    }elseif(!empty($userExits['name'])){ //? FOR USERS
        // $row = $mods->fetch_assoc();
        //? r => REAL (values from database)
        $rLogin = $userExits['login'];
        $rPassword = $userExits['password'];
        $rSecurityKey = $userExits['security-key'];
        //!-------------------SECURITY COOKIE---------------------
        if (($login === $rLogin) && ($password === $rPassword)){
            // $cookieCode = array('gDt4-$8bs-@nDka-Lja2', 'gs6$-Bia7-Gard-D%ja', 'Q843-st67-2tes-Fe34', '472v-74nf-D93s-kjg4');
            // setcookie('TRU$TED', $cookieCode[rand(0,3)], time() + 1800);
            setcookie('TRU$TED', $rSecurityKey, time() + 1800);
            print '<script type="text/javascript">window.location.replace("error404.php");</script>';
        }
        else{
            echo '<script>alert("Error: wrong values")</script>';
        }
    }
    else{
        echo '<script>alert("Error: Your login or password is wrong, try again")</script>'; 
    }

    //!-------------------------------------------------


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?

    require "source/php/head.php";
    ?>
    <link rel="stylesheet" href="A251fDinM9I1N_f/logIn.css">
</head>
<body id="body">
<?
require "source/php/menu.php";
?>
<div class="logForm">
    <div class="col-md-6 form">
        <h1 class="shadowText">LOG IN</h1>
        <form method="post" action="logIn.php">
            <div class="form-group">
                <input name="name" type="text" aria-label="" class="form-control" id="nameInput" aria-describedby="emailHelp" placeholder="NAME" required>
            </div>
            <div class="form-group">
                <input name="email" type="email" aria-label="" class="form-control" id="exampleInputPassword1" placeholder="EMAIL" required>
                <!-- <small id="emailHelp" class="form-text text-muted">ONE OF THE T7codes</small> -->
            </div>
            <div class="form-group">
                <input name="password" type="password" aria-label="" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD" required>
            </div>
            
            <button name="login" type="submit" class="btn"><span>LOG IN</span></button>
        </form>
    </div>
</div>
<?


require 'source/php/footer.php';
?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



<script src="source/bootstrap/js/bootstrap.bundle.js"></script>
<script src="source/bootstrap/js/bootstrap.esm.js"></script>
<script src="source/bootstrap/js/bootstrap.js"></script>
</body>
</html>
