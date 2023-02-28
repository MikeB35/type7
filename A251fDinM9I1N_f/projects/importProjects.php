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
        $business = $row["business"];
        $status = $row["status"];

        $show_img = base64_encode($row['image']);
        $show_designImg = base64_encode($row['design_img']);
        echo "
                <tr>
                    <th scope=row>$id</th>
                    <td>$name</td>
                    <td><img src='data:image/jpeg;base64, $show_img ' alt=''></td>
                    <td>$smallD</td>
                    <td>$discrip</td>
                    <td>$orderedBy</td>
                    <td>$designer</td>
                    <td>$developer</td>
                    <td>$time</td>
                    <td>$design</td>
                    <td><img src='data:image/jpeg;base64, $show_designImg ' alt=''></td>
                    <td>$designD</td>
                    <td>$designL</td>
                    <td>$link</td>
                    <td>$business</td>
                    <td>$status</td>
                </tr>";
    }
}
// if ($projects->fetch_assoc()!= false) {
//     create($projects);
// }
create($projects);
?>