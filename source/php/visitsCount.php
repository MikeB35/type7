<?php
// phpinfo(INFO_MODULES);
$connection = new mysqli('localhost', 'sqluser', 'password', 'type7eu');

if($connection->connect_error){
    die("Ошибка соединения".$connection->connect_error);
}

if(!$connection->set_charset('utf8')){
    echo "Ошибка установки кодировки UTF8";
}

$todayM = date("F");

$todayD = date("d");

if ($todayD <= 7){
    $todayW = 1;
}elseif ($todayD > 7 && $todayD <= 14){
    $todayW = 2;
}elseif ($todayD > 14 && $todayD <= 21){
    $todayW = 3;
}else{
    $todayW = 4;
}


$query = $connection->query("SELECT * FROM `visits`");
//        DOES THIS ELEMENT EXIST
$months = $connection->query("SELECT * FROM `visits` WHERE `month` = '$todayM' ORDER BY `visits`.`month`");

if ($months->num_rows === 1) {
    //        GO TO THIS ROW
    $thisMonth = $connection->query("SELECT `month`, `week1`, `week2`, `week3`, `week4`, `day` FROM `visits` WHERE `month` = '$todayM'");
    $row = $thisMonth->fetch_assoc();
    //        WHICH WEEK
    $week1 = $row['week1'];
    $week2 = $row['week2'];
    $week3 = $row['week3'];
    $week4 = $row['week4'];
    //       WEEK++
    if ($todayW === 1) {
        $setWeek = $week1 + 1;
    } elseif ($todayW === 2) {
        $setWeek = $week2 + 1;
    } elseif ($todayW === 3) {
        $setWeek = $week3 + 1;
    } elseif ($todayW === 4) {
        $setWeek = $week4 + 1;
    }
    //        DAY++
    $setDay = $row['day'] + 1;
    //        SET VALUES
    if ($todayW === 1) {
        $sql = "UPDATE `visits` SET `week1`='$setWeek',`day`='$setDay' WHERE `month` = '$todayM'";

    } elseif ($todayW === 2) {
        $sql = "UPDATE `visits` SET `week2`='$setWeek',`day`='$setDay' WHERE `month` = '$todayM'";

    } elseif ($todayW === 3) {
        $sql = "UPDATE `visits` SET `week3`='$setWeek',`day`='$setDay' WHERE `month` = '$todayM'";

    } elseif ($todayW === 4) {
        $sql = "UPDATE `visits` SET `week4`='$setWeek',`day`='$setDay' WHERE `month` = '$todayM'";

    }

    //        DONE/ERROR
    if ($connection->query($sql) === TRUE) {
//        echo "<div style='width: 100%; height: 100%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>New record edited successfully</h1> <br/>
//                <a href='../../A83hD94dM05Igdr5N.php'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
    } else {
//        echo "<div style='width: 100%; height: 100%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>
//\"Error: \" . $sql . \"<br>\" . $connection->error</h1> <br/>
//            <a href='../../A83hD94dM05Igdr5N.php'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
//    }
    }
}
else{
        $sql = "INSERT INTO `visits` (`month`, `week1`, `week2`, `week3`, `week4`, `day`)
VALUES ('$todayM','1', '0', '0', '0','0')";
        if ($connection->query($sql) === TRUE) {
//        echo "<div style='width: 100%; height: 100%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>New record created successfully</h1> <br/>
//                <a href='../../A83hD94dM05Igdr5N.php'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
//
        } else {
//        echo "<div style='width: 100%; height: 100%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>
//\"Error: \" . $sql . \"<br>\" . $connection->error
//</h1> <br/>
//            <a href='../../A83hD94dM05Igdr5N.php'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
        }
}
?>