<?php
//CONNECT TO DATABASE
$mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
$mysqli -> query("SET NAMES 'utf8'");
// Check connection
//echo "string <br />";
//if ($mysqli->connect_error) {
//    die("Connection failed: " . $mysqli->connect_error);
//}
//else {
//    echo "Has been successfuly connected <br />";
//}
$projects = $mysqli ->query("SELECT * FROM `projects`");
//echo "kokos";
$mysqli -> close();


function create($projects){
    while (($row = $projects->fetch_assoc()) != false){
        $id= $row["id"];
        $name = $row["name"];
        $image = $row["image"];
        $smallD = $row["small_discrip"];
        $discrip= $row["discrip"];
        $orderedBy = $row["ordered_by"];
        $designer = $row["designer"];
        $developer = $row["developer"];
        $time = $row["time"];
        $design = $row["design"];
        $designImg = $row["design_img"];
        $designD = $row["design_descrip"];
        $designL = $row["design_link"];
        $link = $row["link"];
        $status = $row["status"];
        $business = $row["business"];

//        WHAT STATUS
        if ($status === ('done' | 'DONE' | 'Done')){
            $textColor = '#3B3D4A';
            $statusColor = '#9CF03C';
            $status = 'DONE';
        }elseif ($status === ('in process' | 'IN PROCESS' | 'In process')){
            $textColor = '#3B3D4A';
            $statusColor = '#FFB12B';
            $status = 'IN PROCESS';
        }elseif ($status === ('planned' | 'PLANNED' | 'Planned')){
            $textColor = '#FFFFFF';
            $statusColor = '#3CF0F0';
            $status = 'IN PROCESS';
        }else{
            $textColor = '#FFFFFF';
            $statusColor = '#eb5757';
            $status = 'ERROR';
        }


        //        WHAT business
        if (($business === 'big business') | ($business === 'BIG BUSINESS') | ($business === 'Big business')){
            $GLOBALS["businessType"] = "bigB";
        }elseif (($status === 'medium business') | ($status === 'MEDIUM BUSINESS') | ($status === 'Medium business')){
            $GLOBALS["businessType"]= "mediumB";
        }elseif (($status === 'small business') | ($status === 'SMALL BUSINESS') | ($status === 'Small business')){
            $businessType = "smallB";
        }
        $show_img = base64_encode($row['image']);
        $show_designImg = base64_encode($row['design_img']);
        echo "
                <div class=\"col-10 col-md-4 col-lg-3 project $business\">
            <span class=\"badge badge-pill\" style='color: $textColor; background: $statusColor;'>$status</span>
            <div class=\"head\">
                <img src='data:image/jpeg;base64, $show_img ' alt=\"type7\">
            </div>
            <div class=\"middleLine\"></div>
            <div class=\"content\">
                <h3>$name</h3>
                <a href=\"projects/$name.php\" class=\"card-link\"><span>MORE</span></a>
            </div>
        </div>
                ";
    }
}
if ($projects->fetch_assoc()!= false) {
    create($projects);
}
?>