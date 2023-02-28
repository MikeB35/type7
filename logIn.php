<?php
//█████████████████████LOG_IN███████████████████████

if (isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $t7code = $_POST['t7code'];

//███████████████████████SECURITY CHECK███████████████████████
    $name = htmlspecialchars($name);
    $password = htmlspecialchars($password);
    $t7code = htmlspecialchars($t7code);

    $name = urldecode($name);
    $password = urldecode($password);
    $t7code = urldecode($t7code);

    $name = trim($name);
    $password = trim($password);
    $t7code = trim($t7code);

//███████████████████████SET COOKIE███████████████████████
//!-------------------SECURITY COOKIE---------------------
    if ($name == ('123' || '123') && $password === '123' && $t7code === '123'){
        $cookieCode = array('gDt4-$8bs-@nDka-Lja2', 'gs6$-Bia7-Gard-D%ja', 'Q843-st67-2tes-Fe34', '472v-74nf-D93s-kjg4');
        setcookie('TRU$TED', $cookieCode[rand(0,3)], time() + 1800);
        print '<script type="text/javascript">window.location.replace("A83hD94dM05Igdr5N.php");</script>';
    }
    else{
        echo '<script>alert("Error: wrong values")</script>';
    }
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
                <input name="password" type="password" aria-label="" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD" required>
            </div>
            <div class="form-group">
                <input name="t7code" type="password" aria-label="" class="form-control" id="exampleInputPassword1" placeholder="T7_CODE" required>
                <small id="emailHelp" class="form-text text-muted">ONE OF THE T7codes</small>
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
