<?php
if (isset($_POST['send'])){
    $id = $_POST["id"];
    $newName = $_POST["name"];
    // $newImage = $_POST["get_image"];
    $newSmallD = $_POST["smallD"];
    $newDiscrip = $_POST["discrip"];
    $newOrderedBy = $_POST["orderedBy"];
    $newDesigner = $_POST["designer"];
    $newDeveloper = $_POST["developer"];
    $newTime = $_POST["time"];
    $newDesign = $_POST["design"];
    // $newDesignImg = $_POST["get_designImg"];
    $newDesignD = $_POST["designD"];
    $newDesignL = $_POST["designL"];
    $newLink = $_POST["link"];
    $newStatus = $_POST["status"];
    $newBusiness = $_POST["business"];
    $sure = $_POST["sure"];

    $img_type1 = substr($_FILES['get_image']['type'], 0, 5);
    $img_type2 = substr($_FILES['get_designImg']['type'], 0, 5);
    $img_size = 2*2048*2048;

    // if(empty($newImage)){
    //     echo 'new image is eeeeeeeempty';
    //     echo '</br>';
    // }elseif(!empty($newImage)){
    //     echo "NEW IMAGE ISNOT EMPTY";
    //     echo '</br>';
    // }
    // echo $id;
    // echo '</br>';
    // echo $newStatus;
    // echo '</br>';

    //!------------IMPORT OLD VALUES-------------
    //CONNECT TO DATABASE
    $mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
    $mysqli -> query("SET NAMES 'utf8'");

    $project = $mysqli ->query("SELECT * FROM `projects` WHERE `id`='$id'");
    $mysqli -> close();
    function openProject($project){
        while ($row = mysqli_fetch_assoc($project)) {
            // $GLOBALS["id"] = $row["id"];
            $GLOBALS["name"] = $row["name"];
            $GLOBALS["image"] = $row["image"];
            $GLOBALS["smallD"] = $row["small_discrip"];
            $GLOBALS["discrip"] = $row["discrip"];
            $GLOBALS["orderedBy"] = $row["ordered_by"];
            $GLOBALS["designer"] = $row["designer"];
            $GLOBALS["developer"] = $row["developer"];
            $GLOBALS["time"] = $row["time"];
            $GLOBALS["design"] = $row["design"];
            $GLOBALS["designImg"] = $row["design_img"];
            $GLOBALS["designD"] = $row["design_descrip"];
            $GLOBALS["designL"] = $row["design_link"];
            $GLOBALS["link"] = $row["link"];
            $GLOBALS["status"] = $row["status"];
            $GLOBALS["business"] = $row["business"];

            $GLOBALS["show_img"] = base64_encode($row['image']);
            $GLOBALS["show_designImg"] = base64_encode($row['design_img']);

        }

    }
    openProject($project);
    // echo $time;
    // echo gettype($time)."\n";
    // $time +=100;
    // settype($time, "integer");
    // echo gettype($time)."\n";
    // $time /= 2;
    // echo $time;
    // echo $image;
        // if(empty($image)){
        //     echo 'old image is empty';
        // }if(empty($newImage)){
        //     echo 'new image is empty';
        // }
        // echo "kokot";
        // echo '</br>';

        // echo $newImage;
    //!------------------------------------
    //▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨ NEW DESIGN_IMAGE ▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨

    if(!empty($_FILES['get_designImg']['tmp_name']) and $img_type2 === 'image' and $_FILES['get_designImg']['size'] <= $img_size){
        $newDesignImg = addslashes(file_get_contents($_FILES['get_designImg']['tmp_name']));
    }

    //▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨ NEW PROJECT_IMAGE ▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨▨
    if(!empty($_FILES['get_image']['tmp_name']) and $img_type1 === 'image' and $_FILES['get_image']['size'] <= $img_size){
        $newImg = addslashes(file_get_contents($_FILES['get_image']['tmp_name']));
    }
    if ($sure === "on"){ # IF CONTENT OR TITLE AREN'T EMPTY

        //CONNECT TO DATABASE
        $mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
        $mysqli -> query("SET NAMES 'utf8'");

// Check connection
//!--------------------------------
    //*------VALUES UPDATED?--------
    // echo $newName;
    // echo $newSmallD;
    // echo $newTime;
    // if(empty($newTime)){
    //     echo "empty";
    // }elseif(!empty($newTime)){
    //     echo "not empty";
    // }
    // $newTime = $time;
    // echo $newTime;

    if(empty($newName)){
        $newName = $name;
    }if(empty($newImage)){
        // $show_img = base64_encode($image);
        // echo $show_img;
        // $newImg = $show_img;
        // $newImage = $image;
    }if(empty($newSmallD)){
        $newSmallD = $smallD;
    }if(empty($newDiscrip)){
        $newDiscrip = $discrip;
    }if(empty($newOrderedBy)){
        $newOrderedBy = $orderedBy;
    }if(empty($newDesigner)){
        $newDesigner = $designer;
    }if(empty($newDeveloper)){
        $newDeveloper = $developer;
    }if(empty($newTime)){
        $newTime = $time;
    }if(empty($newDesign)){
        $newDesign = $design;
    }if(empty($newDesignImg)){
        // $newDesignImg = $designImg;
    }if(empty($newDesignD)){
        $newDesignD = $designD;
    }if(empty($newDesignL)){
        $newDesignL = $designL;
    }if(empty($newLink)){
        $newLink = $link;
    }if(empty($newStatus)){
        $newStatus = $status;
    }if(empty($newBusiness)){
        $newBusiness = $business;
    }
    // $show_img = base64_encode($newImage);

    date_default_timezone_set("Europe/Prague");
    //? IF IMAGES NEED TO BE UPDATED
    if(!empty($newImg)){
        $sql2 = "UPDATE `projects` SET `image`='$newImg'  WHERE `id` = '$id'";
        //!------UPDATE PROJECT IMAGE------
        if ($mysqli->query($sql2) === TRUE) {
            echo "</br>";
            echo '<p style="color:#6ce619; font-weight:900;margin:0;">' . date("Y/m/d ~ h:i:s ") . " ⋙ project image is successfully updated ⟲ </p>";
        }else{
            echo "</br>";
            echo '<p style="color:#f03c56; font-weight:900;margin:0;">' . date("Y/m/d ~ h:i:s ") . " ⋙ project image is NOT updated ⟲ </p>";
            echo "</br>";
            echo "\"Error: \" . $sql . \"<br>\" . $mysqli->error";
        }
    }

    if(!empty($newDesignImg)){
        $sql3 = "UPDATE `projects` SET `design_img`='$newDesignImg' WHERE `id` = '$id'";
        //!------UPDATE SCREENSHOT IMAGE------

        if ($mysqli->query($sql3) === TRUE) {
            echo "</br>";
            echo '<p style="color:#6ce619; font-weight:900;margin:0;">' . date("Y/m/d ~ h:i:s ") . " ⋙ screenshot is successfully updated ⟲ </p>";
        }else{
            echo "</br>";
            echo '<p style="color:#f03c56; font-weight:900;margin:0;">' . date("Y/m/d ~ h:i:s ") . " ⋙ screenshot is NOT updated ⟲ </p>";
            echo "</br>";
            echo "\"Error: \" . $sql . \"<br>\" . $mysqli->error";
        }
    }else{
        echo "design image is empty";
    }
    //!---------UPDATE ALL---------
    $sql1 = "UPDATE `projects` SET `name`='$newName', `small_discrip`='$newSmallD', `discrip`='$newDiscrip', `ordered_by`='$newOrderedBy', `designer`='$newDesigner', `developer`='$newDeveloper', `time`='$newTime',`design`='$newDesign',`design_descrip`='$newDesignD',`design_link`='$newDesignL',`link`='$newLink',`status`='$newStatus' ,`business`='$newBusiness' WHERE `id` = '$id'";
    if ($mysqli->query($sql1) === TRUE) {
        echo "</br>";
        echo '<p style="color:#6ce619; font-weight:900;margin:0;">' . date("Y/m/d ~ h:i:s ") . " ⋙ values are successfully updated ⟲ </p>";
        echo "<div style='width: 100%; height: 20%; display: flex;justify-content: center;align-items: center'><div style='text-align: center; font-family: \"Maven Pro\", sans-serif; font-weight: 800'><h1 style='color: #3B3D4A'>New record edited successfully</h1> <br/>
        <a href='../../A83hD94dM05Igdr5N.php' style='text-decoration:none;'><h2 style='color: #f03c56'>BACK</h2></a> <br/></div></div>";
    }else{
        echo "</br>";
        echo '<p style="color:#f03c56; font-weight:900;margin:0;">' . date("Y/m/d ~ h:i:s ") . " ⋙ values are NOT updated ⟲ </p>";
        echo "</br>";
        echo "\"Error: \" . $sql . \"<br>\" . $mysqli->error";
    }
//!--------------------------------

        

        $mysqli -> close();
    }
    $projectName = $newName;

    $file = fopen("../../projects/$newName.php","w+");
    fwrite($file, '
    <!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <?
    require "../source/php/require_f_projects/head.php";
    ?>
    <link rel="stylesheet" href="../styles/project.css">
</head>
<body id="body">
<?
require "../source/php/require_f_projects/menu.php";
?>
<?
$project = "'.$projectName.'";
$mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
$mysqli -> query("SET NAMES \'utf8\'");

$projects = $mysqli ->query("SELECT * FROM `projects` WHERE `name`=\'$project\'");
$mysqli -> close();
function openProject($projects){
    while (($row = $projects->fetch_assoc()) != false) {
        $GLOBALS["id"] = $row["id"];
        $GLOBALS["name"] = $row["name"];
        $GLOBALS["image"] = $row["image"];
        $GLOBALS["smallD"] = $row["small_discrip"];
        $GLOBALS["discrip"] = $row["discrip"];
        $GLOBALS["orderedBy"] = $row["ordered_by"];
        $GLOBALS["designer"] = $row["designer"];
        $GLOBALS["developer"] = $row["developer"];
        $GLOBALS["time"] = $row["time"];
        $GLOBALS["design"] = $row["design"];
        $GLOBALS["designImg"] = $row["design_img"];
        $GLOBALS["designD"] = $row["design_descrip"];
        $GLOBALS["designL"] = $row["design_link"];
        $GLOBALS["link"] = $row["link"];
        $GLOBALS["status"] = $row["status"];
        $GLOBALS["business"] = $row["business"];

        $GLOBALS["show_img"] = base64_encode($row[\'image\']);
        $GLOBALS["show_designImg"] = base64_encode($row[\'design_img\']);

    }

}
openProject($projects);
//DESIGN TYPE
if ($design === \'nice\' | $design === \'Nice\' | $design === \'NICE\'){
    $designColor1 = "#eb5757";
    $designColor2 = "#eb5757";
    $designColor3 = "#eb5757";
}elseif ($design === \'good\' | $design === \'Good\' | $design === \'GOOD\'){
    $designColor1 = "#eb5757";
    $designColor2 = "#eb5757";
    $designColor3 = "#85889A";
}elseif ($design === \'eazy\' | $design === \'Eazy\' | $design === \'EAZY\'){
    $designColor1 = "#eb5757";
    $designColor2 = "#85889A";
    $designColor3 = "#85889A";
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 image ">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8 product">
                    <div class="img">
                        <img src=\'data:image/jpeg;base64, <?=$show_img?> \' alt=\'\'>
                    </div>
                    <div class="share d-flex">
                        <img src="../source/img/project/share.png" id="share" alt="" onclick="share()">
                        <script>
                            function share(){
                                let shareButton = document.getElementById(\'share\');
                                let shareOptions = document.getElementById(\'shareOptions\');

                                shareOptions.classList.toggle(\'active\')
                            }
                        </script>
                        <!-- uSocial -->
                        <div class="shareOptions" id="shareOptions">
                            <script async src="https://usocial.pro/usocial/usocial.js?uid=903ac46812f58458&v=6.1.5" data-script="usocial" charset="utf-8"></script>
                            <div class="uSocial-Share" data-lang="en" data-pid="9319c303f51e8e905f7fb0d86b836def" data-type="share" data-options="rect,style1,default,absolute,horizontal,size32,eachCounter0,counter0,nomobile" data-social="twi,wa,telegram,fb,spoiler"></div>
                        </div>
                        <!-- /uSocial -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 contents">
            <h1><?=
                $name
                ?></h1>
            <ul class="options">
                <li class="list active" data-filter="description">DESCRIPTION</li>
                <li class="list " data-filter="detiles">DETILES</li>
            </ul>
            <table class="description content active">
                <tr>
                    <td>
                        <?=
                        $discrip
                        ?>
                    </td>
                </tr>

            </table>
            <table class="detiles content">
                <tr>
                    <td>ORDERED BY:<p><?=$orderedBy?></p></td>
                    <td>DESIGN:<p><?=$designer?></p></td>
                    <td>DEVELOPER:<p><?=$developer?></p></td>
                    <td>ELAPSED TIME:<p><?=$time?>hours</p></td>
                    <td>WEBSITE LINK:<a href="<?=$link?>"><p><?=$link?></p></a></td>
                    <td>BUSINESS:<p><?=$business?></p></td>
                    <td class="part2">DESIGN:</td>
                    <td>'.$design.':
                        <div class="type" id="_1" style="
                        background: <?=$designColor1?>;
                        margin: 10px;
                        margin-right: 0;
                        height: 10px;
                        width: 25px;
                        border-radius: 10px;"></div>
                        <div class="type" id="_2" style="
                        background: <?=$designColor2?>;
                        margin: 10px;
                        margin-right: 0;
                        height: 10px;
                        width: 25px;
                        border-radius: 10px;"></div>
                        <div class="type" id="_3" style="
                        background: <?=$designColor3?>;
                        margin: 10px;
                        height: 10px;
                        width: 25px;
                        border-radius: 10px;"></div>
                    </td>
                    <td class="design">
                        <img src=\'data:image/jpeg;base64, <?=$show_designImg?> \' style="width: 100%; margin: 24px 0" alt="">
                    </td>
                    <td style="width: 90%">
                        <?=$designD?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $(".content").filter(\'.detiles\').hide(\'1000\');
        $(\'.list\').click(function (){
            const value = $(this).attr(\'data-filter\');
            if (value === \'all\'){
                $(\'.project\').show(1000);
            }else {
                $(".content").not(\'.\' + value).hide(1000);
                $(".content").filter(\'.\' + value).show(1000);
            }
        })
        // add active function

        $(\'.list\').click(function (){
            $(this).addClass(\'active\').siblings().removeClass(\'active\');
        })
    })
</script>
<?
require \'../source/php/require_f_projects/footer.php\';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="source/bootstrap/js/bootstrap.bundle.js"></script>
<script src="source/bootstrap/js/bootstrap.esm.js"></script>
<script src="source/bootstrap/js/bootstrap.js"></script>
</body>
</html>

    ');
    fclose($file);
}