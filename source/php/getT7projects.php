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
$projects = $mysqli -> query("SELECT * FROM `projects`");
//echo "kokos";
$mysqli -> close();


function create($projects){
    while ($row = mysqli_fetch_assoc($projects)){
        // echo '<pre>'; print_r($row); echo '</pre>';
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
        if (($status == 'done') || ($status == 'DONE') || ($status == 'Done')){
            $textColor = '#3B3D4A';
            $statusColor = '#9CF03C';
            $status = 'DONE';
        }elseif (($status == 'in process') || ($status == 'IN PROCESS') || ($status =='In process')){
            $textColor = '#3B3D4A';
            $statusColor = '#FFB12B';
            $status = 'IN PROCESS';
        }elseif (($status == 'planned') || ($status == 'PLANNED') || ($status == 'Planned')){
            $textColor = '#3B3D4A';
            $statusColor = '#fc3';
            $status = 'PLANNED';
        }else{
            $textColor = '#FFFFFF';
            $statusColor = '#eb5757';
            $status = 'ERROR';
        }
        //        WHAT business
        if(($business == 'big') || ($business == 'BIG') || ($business == 'Big')){
            // $GLOBALS["businessType"] = "bigB";
            $businessType = "bigB";
            // global $businessType;
        }elseif (($business == 'medium') || ($business == 'MEDIUM') || ($business == 'Medium')){
            // $GLOBALS["businessType"]= "mediumB";
            $businessType = "mediumB";
            // global $businessType;
        }elseif (($business == 'small') || ($business == 'SMALL') || ($business == 'Small')){
            $businessType = "smallB";
            // global $businessType;

        }
        $show_img = base64_encode($row['image']);
        $show_designImg = base64_encode($row['design_img']);
        echo "
                <div class=\"col-10 col-md-4 col-lg-3 project $businessType\">
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
// if ($projects->fetch_assoc()!= false) {
//     create($projects);
// }
create($projects);
?>