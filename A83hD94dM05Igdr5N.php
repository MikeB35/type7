<?php

if (($_COOKIE['TRU$TED'] === 'gDt4-$8bs-@nDka-Lja2' || 'gs6$-Bia7-Gard-D%ja' || 'Q843-st67-2tes-Fe34' || '472v-74nf-D93s-kjg4') && isset($_COOKIE['TRU$TED'])) {
}else{
    print '<script type="text/javascript">window.location.replace("logIn.php");</script>';

}
//█████████████████████████████████████████████████
//██████████████████████VISITS█████████████████████
//█████████████████████████████████████████████████
$mysqli = new mysqli("localhost","sqluser","password","type7eu") or die("Connect failed: %s\n". $mysqli -> error);
$mysqli->query("SET NAMES 'utf8'");
$allElements = $mysqli->query("SELECT * FROM `visits`");
$todayM = date("F");

$months = $mysqli->query("SELECT * FROM `visits` WHERE `month` = '$todayM' ORDER BY `visits`.`month`");

$row = $months->fetch_assoc();

$week1 = $row['week1'];
$week2 = $row['week2'];
$week3 = $row['week3'];
$week4 = $row['week4'];

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?
    require "source/php/head.php";
    ?>

<!--    <link rel="stylesheet" href="js/chartist-js-develop/dist/chartist.css">-->

    <link rel="stylesheet" href="js/chartist-js-develop/dist/chartist.css">
    <script src="js/chartist-js-develop/dist/chartist.js"></script>
    <link rel="stylesheet" href="A251fDinM9I1N_f/h72@bCYTk82$.css">
<!--    <link rel="stylesheet" href="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">-->

</head>
<body id="body">
<!--█████████████████████MENU███████████████████████-->
<?
require "source/php/menu.php";
?>
<div class="container-fluid">
    <header class="row">
        <div class="col-12 col-lg-6 text">
            <div>
                <h1>WELCOME BACK <h1 class="highlight d-none d-lg-block" >.</h1> </h1>
            </div>
            <div>
                <h1 class="highlight">~</h1><h1>ADMIN</h1><h1 class="highlight">~</h1>
            </div>
        </div>
        <div class="col-12 col-lg-5 statistic">
            <div class="text">
                <h1>VISIT STATS</h1>
                <div>
                    <h3>TOTAL:<?
                        $total = 0;
                        while (($allMonths = $allElements->fetch_assoc()) != false){
                            $day = $allMonths['day'];
                            $total = $total + $day;
                            // echo '<pre>'; print_r($allMonths); echo '</pre>';
                        }

                        echo $total;
                        ?></h3>
                    <h3>~~WEEK: <?
                        echo ($week1 + $week2 + $week3 + $week4) / 4;
                        ?></h3>
                    <h3>~~MONTH:<?
                        echo $week1 + $week2 + $week3 + $week4;
                        ?></h3>
                </div>
            </div>

            <div class="ct-chart ct-golden-section stats" id="stats"">
                <script>
                    let stats = document.getElementById('stats')
                    new Chartist.Line(stats, {
                        labels: ['1. WEEK', '2. WEEK', '3. WEEK', '4. WEEK'],
                        series: [
                            [<?=$week1?>, <?=$week2?>, <?=$week3?>,<?=$week4?>],
                        ]
                    }, {
                        fullWidth: true,
                        chartPadding: {
                            right: 50
                        }
                    });
                </script>
            </div>
    </header>

<?
$mysqli->close();
?>
    <div class="row projects">
        <div class="col-md-12 table">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">SMALL_DISCRIP.</th>
                    <th scope="col">DISCRIP.</th>
                    <th scope="col">ORDERED_BY</th>
                    <th scope="col">DESIGNER</th>
                    <th scope="col">DEVELOPER</th>
                    <th scope="col">TIME</th>
                    <th scope="col">DESIGN</th>
                    <th scope="col">DESIGN_IMG</th>
                    <th scope="col">DESIGN_DESCRIP.</th>
                    <th scope="col">DESIGN_LINK</th>
                    <th scope="col">LINK</th>
                    <th scope="col">BUSINESS</th>
                    <th scope="col">STATUS</th>
                </tr>
                </thead>
                <tbody>
                <?
                require 'A251fDinM9I1N_f/projects/importProjects.php';
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row createProjectForm">
        <h1>CREATE NEW PROJECT</h1>
        <div class="col-md-12 createProject">
            <div class="col-md-6 form">
                <form action="A251fDinM9I1N_f/projects/createProject.php" enctype="multipart/form-data" name="createProject" method="post">
                    <div class="form-group">
                        <input name="id" type="number" aria-label="" class="form-control" id="nameInput"  placeholder="ID" >
                    </div>
                    <div class="form-group">
                        <input name="name" type="text" aria-label="" class="form-control" id="nameInput"  placeholder="NAME" >
                    </div>
                    <div class="form-group">
                        <label for="image">FILE INPUT</label>
                        <input name="get_image" type="file" class="form-control-file" id="image">
                    </div>

                    <div class="form-group">
                        <textarea name="smallD" type="text" aria-label="" rows="5" class="form-control" id="" placeholder="SMALL DESCRIP."></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="discrip" type="text" aria-label="" rows="12" class="form-control" id="nameInput" placeholder="DESCRIP."></textarea>
                    </div>

                    <div class="form-group">
                        <input name="orderedBy" type="text" aria-label="" class="form-control" placeholder="ORDERED_BY">
                    </div>
                    <div class="form-group">
                        <input name="designer" type="text" aria-label="" class="form-control" placeholder="DESIGNER">
                    </div>
                    <div class="form-group">
                        <input name="developer" type="text" aria-label="" class="form-control" placeholder="DEVELOPER">
                    </div>
                    <div class="form-group">
                        <input name="time" type="text" aria-label="" class="form-control" placeholder="TIME">
                    </div>

                    <div class="form-group">
                        <input name="design" type="text" aria-label="" class="form-control" placeholder="DESIGN (EAZY/HARDER/NICE)">
                    </div>
                    <div class="form-group">
                        <label for="image">FILE INPUT</label>
                        <input name="get_designImg" type="file" class="form-control-file" id="DESIGN_IMAGE">
                    </div>
                    <div class="form-group">
                        <textarea name="designD" type="text" aria-label="" rows="9" class="form-control" id="nameInput" placeholder="DESIGN DESCRIP."></textarea>
                    </div>
                    <div class="form-group">
                        <input name="designL" type="text" aria-label="" class="form-control" placeholder="DESIGN LINK">
                    </div>
                    <div class="form-group">
                        <input name="link" type="text" aria-label="" class="form-control" placeholder="LINK">
                    </div>
                    <div class="form-group">
                        <input name="status" type="text" aria-label="" class="form-control" placeholder="STATUS">
                    </div>
                    <div class="form-group">
                        <input name="business" type="text" aria-label="" class="form-control" placeholder="BUSINESS">
                    </div>
                    <div class="form-check">
                        <input name="sure" type="checkbox" class="form-check-input" id="sure" required>
                        <label class="form-check-label" for="sure">ARE YOU SURE?</label>
                    </div>
                    <button type="submit" class="btn" name="send"><span>CREATE</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row editProjectForm">
        <h1>EDIT EXIST PROJECT</h1>
        <div class="col-md-12 editProject">
            <div class="col-md-6 form">
                <form enctype="multipart/form-data" method="post" action="A251fDinM9I1N_f/projects/editProject.php">
                    <div class="form-group">
                        <input name="id" type="text" aria-label="" class="form-control" id="nameInput"  placeholder="ID" >
                    </div>
                    <div class="form-group">
                        <input name="name" type="text" aria-label="" class="form-control" id="nameInput"  placeholder="NAME" >
                    </div>
                    <div class="form-group">
                        <label for="image">FILE INPUT</label>
                        <input name="get_image" type="file" class="form-control-file" id="image">
                    </div>

                    <div class="form-group">
                        <textarea name="smallD" type="text" aria-label="" rows="5" class="form-control" id="" placeholder="SMALL DESCRIP."></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="discrip" type="text" aria-label="" rows="12" class="form-control" id="nameInput" placeholder="DESCRIP."></textarea>
                    </div>

                    <div class="form-group">
                        <input name="orderedBy" type="text" aria-label="" class="form-control" placeholder="ORDERED_BY">
                    </div>
                    <div class="form-group">
                        <input name="designer" type="text" aria-label="" class="form-control" placeholder="DESIGNER">
                    </div>
                    <div class="form-group">
                        <input name="developer" type="text" aria-label="" class="form-control" placeholder="DEVELOPER">
                    </div>
                    <div class="form-group">
                        <input name="time" type="text" aria-label="" class="form-control" placeholder="TIME">
                    </div>

                    <div class="form-group">
                        <input name="design" type="text" aria-label="" class="form-control" placeholder="DESIGN (EAZY/HARDER/NICE)">
                    </div>
                    <div class="form-group">
                        <label for="image">FILE INPUT</label>
                        <input name="get_designImg" type="file" class="form-control-file" id="DESIGN_IMAGE">
                    </div>
                    <div class="form-group">
                        <textarea name="designD" type="text" aria-label="" rows="9" class="form-control" id="nameInput" placeholder="DESIGN DESCRIP."></textarea>
                    </div>
                    <div class="form-group">
                        <input name="designL" type="text" aria-label="" class="form-control" placeholder="DESIGN LINK">
                    </div>
                    <div class="form-group">
                        <input name="link" type="text" aria-label="" class="form-control" placeholder="LINK">
                    </div>
                    <div class="form-group">
                        <input name="status" type="text" aria-label="" class="form-control" placeholder="STATUS">
                    </div>
                    <div class="form-group">
                        <input name="business" type="text" aria-label="" class="form-control" placeholder="BUSINESS">
                    </div>
                    <div class="form-check">
                        <input name="sure" type="checkbox" class="form-check-input" id="sure" required>
                        <label class="form-check-label" for="sure">ARE YOU SURE?</label>
                    </div>

                    <button type="submit" class="btn" name="send"><span>EDIT</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row deleteProjectForm">
        <h1>DELETE EXIST PROJECT</h1>
        <div class="col-md-12 deleteProject">
            <div class="col-md-6 form">
                <form method="post" action="A251fDinM9I1N_f/projects/deleteProject.php">
                    <div class="form-group">
                        <input name="id" type="number" aria-label="" class="form-control" id="nameInput"  placeholder="ID">
                    </div>
                    <div class="form-check">
                        <input name="sure" type="checkbox" class="form-check-input" id="sure" required>
                        <label class="form-check-label" for="sure">ARE YOU SURE?</label>
                    </div>
                    <button type="submit" class="btn" name="send"><span>DELETE</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?
require 'source/php/footer.php';
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="source/bootstrap/js/bootstrap.bundle.js"></script>
<script src="source/bootstrap/js/bootstrap.esm.js"></script>
<script src="source/bootstrap/js/bootstrap.js"></script>
</body>
</html>
