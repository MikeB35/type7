    <!DOCTYPE html>
    <html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <?
        require "source/php/head.php";
        ?>
        <link rel="stylesheet" href="styles/projects.css">
    </head>
<body id="body">
<?
require "source/php/menu.php";
?>

<div class="container-fluid">
    <header class="row">
        <div class="col-md-8 heading">
            <h1>OUR PROJECTS</h1>
        </div>
        <div class="col-md-4 ">
        </div>
    </header>
    <div class="d-none d-md-block row filter">
        <div class="col-md-12 options">
            <div class="topLine"></div>
            <ul>
                <li class="list active" data-filter="all">ALL</li>
                <li class="list" data-filter="smallB">SMALL BUSINESS</li>
                <li class="list" data-filter="mediumB">MEDIUM BUSINESS</li>
                <li class="list" data-filter="bigB">BIG BUSINESS</li>
            </ul>
            <div class="bottomLine"></div>
        </div>
    </div>
    <div class="row projects">
        <?
        require 'source/php/getT7projects.php';
        ?>
</div>
<script>
    $(document).ready(function (){
        $('.list').click(function (){
            const value = $(this).attr('data-filter');
            if (value === 'all'){
                $('.project').show('1000');
            }else {
                $(".project").not('.' + value).hide('1000');
                $(".project").filter('.' + value).show('1000');
            }
        })
        // add active function

        $('.list').click(function (){
            $(this).addClass('active').siblings().removeClass('active');
        })
    })
</script>
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
