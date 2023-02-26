<?php

if (isset($_POST['send'])) {
    $id = $_POST["id"];
    $sure = $_POST["sure"];

    if ($sure === "on") { # IF CONTENT OR TITLE AREN'T EMPTY

        //CONNECT TO DATABASE
        $mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
        $mysqli->query("SET NAMES 'utf8'");
        $sql = $mysqli->query("SELECT `name` FROM `projects` WHERE `id` = '$id'");
        $row = $sql->fetch_assoc();
        $name = $row["name"];
// Check connection
        $sql = "DELETE FROM `projects` WHERE `id` = '$id'";
//        $sql = "INSERT INTO `projects` (`id`, `name`, `image`, `small_discrip`, `discrip`, `design`, `design_descrip`, `design_link`, `link`, `status`)
//VALUES ('', '$name', '$img', '$smallD','$discrip','$design', '$designD', '$designL', '$link','$status')";


        if ($mysqli->query($sql) === TRUE) {
            echo "<div style='width: 100%; height: 100%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>New record deleted successfully</h1> <br/>
            <a href='../../A83hD94dM05Igdr5N.php'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
        } else {
            echo "<div style='width: 100%; height: 100%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>
\"Error: \" . $sql . \"<br>\" . $mysqli->error
</h1> <br/>
            <a href='../../A83hD94dM05Igdr5N.php'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
        }

        $mysqli->close();
    }
    unlink("../../projects/$name.php");
}