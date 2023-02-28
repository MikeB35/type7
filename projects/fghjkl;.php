
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
$project = "fghjkl;";
$mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
$mysqli -> query("SET NAMES 'utf8'");

$projects = $mysqli ->query("SELECT * FROM `projects` WHERE `name`='$project'");
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

        $GLOBALS["show_img"] = base64_encode($row['image']);
        $GLOBALS["show_designImg"] = base64_encode($row['design_img']);

    }

}
openProject($projects);
//DESIGN TYPE
if ($design === 'nice' | $design === 'Nice' | $design === 'NICE'){
    $designColor1 = "#eb5757";
    $designColor2 = "#eb5757";
    $designColor3 = "#eb5757";
}elseif ($design === 'good' | $design === 'Good' | $design === 'GOOD'){
    $designColor1 = "#eb5757";
    $designColor2 = "#eb5757";
    $designColor3 = "#85889A";
}elseif ($design === 'eazy' | $design === 'Eazy' | $design === 'EAZY'){
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
                        <img src='data:image/jpeg;base64, <?=$show_img?> ' alt=''>
                    </div>
                    <div class="share d-flex">
                        <img src="../source/img/project/share.png" id="share" alt="" onclick="share()">
                        <script>
                            function share(){
                                let shareButton = document.getElementById('share');
                                let shareOptions = document.getElementById('shareOptions');

                                shareOptions.classList.toggle('active')
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
                    <td>:
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
                        <img src='data:image/jpeg;base64, <?=$show_designImg?> ' style="width: 100%; margin: 24px 0" alt="">
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
        $(".content").filter('.detiles').hide('1000');
        $('.list').click(function (){
            const value = $(this).attr('data-filter');
            if (value === 'all'){
                $('.project').show(1000);
            }else {
                $(".content").not('.' + value).hide(1000);
                $(".content").filter('.' + value).show(1000);
            }
        })
        // add active function

        $('.list').click(function (){
            $(this).addClass('active').siblings().removeClass('active');
        })
    })
</script>
<?
require '../source/php/require_f_projects/footer.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="source/bootstrap/js/bootstrap.bundle.js"></script>
<script src="source/bootstrap/js/bootstrap.esm.js"></script>
<script src="source/bootstrap/js/bootstrap.js"></script>
</body>
</html>

    