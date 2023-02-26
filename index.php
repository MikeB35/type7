<?php
require "source/php/visitsCount.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?
    require "source/php/head.php";
    ?>
    <link rel="stylesheet" href="styles/index.css">
    
</head>
<body id="body">
<?
require "source/php/menu.php";
?>
<div class="container-fluid">
    <header class="row">
        <img src="source/img/plus.png" id="leftTop" class="plus" alt="">
        <img src="source/img/plus.png" id="rightTop" class="plus" alt="">
        <img src="source/img/plus.png" id="rightBottom" class="plus" alt="">
        <img src="source/img/plus.png" id="leftBottom" class="plus" alt="">

        <div class="col-md-2">
            <div class="type7"><h1 class="t7">TYPE7<h1 class="highlight">.</h1></h1></div>
            <h1 class="comm">COMMUNITY</h1>
        </div>
        <div class="col-md-5 infoCard">
            <div class="card">
<!--█████████████████████borders███████████████████████-->
                <img src="source/img/topCardLine.png" id="leftTopLine">
                <img src="source/img/rightCardLine.png" id="rightTopLine">
                <img src="source/img/topCardLine.png" id="rightBottomLine">
                <img src="source/img/rightCardLine.png" id="leftBottomLine">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 topSubtitle">NEW</h6>
                    <h5 class="card-title">WEB DEVELOPMENT</h5>
                    <h6 class="card-subtitle mb-2 bottSubtitle">COMPANY</h6>
                    <p class="card-text">Type7 community is a new web development
                        company, which works in Czech Budweis. Do
                        you need a website for your business or just for
                        personal use? Don't worry we are here for this.
                        Just choose a website type and tell us all
                        information to create your order.</p>
                    <a href="error404.php" class="card-link"><span>MORE</span></a>
                </div>
            </div>
        </div>
        <div class=" d-none d-lg-block col-md-5 image">
            <img src="source/img/T7(3)%201.png" alt="type7" id="image" onload="load()">
        </div>
        <script>
            function load(){
                //BY_T7Logo
                setTimeout(() => {
                    anime({
                        targets: '#image',
                        translateX: -900,
                        rotate: '-1turn',
                        opacity: 1
                    })
                }, 300);
            }

        </script>
    </header>


    <section class="row part2">
        <h1 class="shadowText">ABOUT</h1>
        <img src="source/img/middleLine.png" class="middleLine" alt="">
        <div class="d-none d-lg-block col-lg-6 image">
            <img src="source/img/Part2.png" alt="">
        </div>
        <div class="col-md-10 col-lg-5 infoCard">
            <div class="card">
                <!--█████████████████████borders███████████████████████-->
                <img src="source/img/topCardLine.png" id="leftTopLine" alt="">
                <img src="source/img/rightCardLine.png" id="rightTopLine" alt="">
                <img src="source/img/topCardLine.png" id="rightBottomLine" alt="">
                <img src="source/img/rightCardLine.png" id="leftBottomLine" alt="">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 topSubtitle">WE ARE A</h6>
                    <h5 class="card-title">TEAM</h5>
<!--                    <h6 class="card-subtitle mb-2 bottSubtitle">COMPANY</h6>-->
                    <p class="card-text">We are a team of professional web developers.
                        Our company created "Mike" in 2020, in the
                        Czech republic, yes we are a Czech company.
                        Our community has been supported by the Albion
                        Cech company, with which we work. We are an
                        ambitious team and we'll work hard to make your
                        website awesome.</p>
                    <a href="error404.php" class="card-link"><span>MORE</span></a>
                </div>
            </div>
        </div>
        <h1 class="shadowText" id="team">TEAM</h1>
    </section>


    <section class="row part3">
        <img src="source/img/middleLine.png" class="middleLine" alt="">
        <h1 class="shadowText">WEBSITES</h1>
        <div class="col-md-10 col-lg-6 infoCard">
            <div class="card">
                <!--█████████████████████borders███████████████████████-->
                <img src="source/img/topCardLine.png" id="leftTopLine" alt="">
                <img src="source/img/rightCardLine.png" id="rightTopLine" alt="">
                <img src="source/img/topCardLine.png" id="rightBottomLine" alt="">
                <img src="source/img/rightCardLine.png" id="leftBottomLine" alt="">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 topSubtitle">THE MOST</h6>
                    <h5 class="card-title">POPULAR WEBS</h5>
                    <!--                    <h6 class="card-subtitle mb-2 bottSubtitle">COMPANY</h6>-->
                    <p class="card-text">Between all types of websites, our users prefer
                        "Visit Card Pro" or "Promotion Landing", these
                        web pages aren't expensive, but very useful.
                        People decides on their own how their website
                        should look like, but if you don't have any idea,
                        we'll help you and make your order together.</p>
                    <a href="error404.php" class="card-link"><span>MORE</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 popularCard" id="_1">
            <div class="card">
                <div class="card-body">
                    <div class="popularHeading row">
                        <h1>1<h1 class="highlight">.</h1></h1>
                        <h5>VISIT<br>
                            CARD PRO</h5>
                    </div>
                    <!--                    <h6 class="card-subtitle mb-2 bottSubtitle">COMPANY</h6>-->
                    <p class="card-text">THIS TYPE OF WEBSITES
                        IS THE MOST POPULAR
                        BETWEEN OUR USERS</p>
                    <a href="error404.php" class="card-link"><span>MORE</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 popularCard" id="_2">
            <div class="card">
                <div class="card-body">
                    <div class="popularHeading row">
                        <h1>2<h1 class="highlight">.</h1></h1>
                        <h5>LANDING<br>
                            PROMO</h5>
                    </div>
                    <!--                    <h6 class="card-subtitle mb-2 bottSubtitle">COMPANY</h6>-->
                    <p class="card-text">THIS TYPE OF WEBSITES
                        IS SECOND IN
                        POPULARITY
                        BETWEEN OUR USERS</p>
                    <a href="error404.php" class="card-link"><span>MORE</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="row ask">
        <img src="source/img/middleLine.png" class="middleLine" alt="">
        <h1 class="shadowText">TELL US</h1>
        <div class="d-none d-lg-block col-lg-6 form">
            <form method="post" action="source/php/sendMail.php">
                <div class="form-group left">
                    <input name="name" type="text" aria-label="" class="form-control" id="nameInput" aria-describedby="emailHelp" placeholder="NAME" required>
                </div>
                <div class="form-group right">
                    <input name="theme" type="text" aria-label="" class="form-control" id="exampleInputPassword1" placeholder="THEME" required>
                </div>
                <div class="form-group left">
                    <input name="email" type="email" aria-label="" class="form-control" id="exampleInputPassword1" placeholder="E-MAIL" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group right">
                    <textarea name="message" type="text" aria-label="" rows="5" class="form-control" id="exampleInputPassword1" placeholder="MESSAGE" required></textarea>
                </div>
                <button type="submit" class="btn" name="sendMail"><span>SEND</span></button>
            </form>
        </div>
        <div class="col-10 col-lg-6 infoCard">
            <div class="card">
                <!--█████████████████████borders███████████████████████-->
                <img src="source/img/topCardLine.png" id="leftTopLine" alt="">
                <img src="source/img/rightCardLine.png" id="rightTopLine" alt="">
                <img src="source/img/topCardLine.png" id="rightBottomLine" alt="">
                <img src="source/img/rightCardLine.png" id="leftBottomLine" alt="">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 topSubtitle">GOT A QUESTION?</h6>
                    <h5 class="card-title">JUST ASK</h5>
                    <!--                    <h6 class="card-subtitle mb-2 bottSubtitle">COMPANY</h6>-->
                    <p class="card-text">If you want to ask anything, just text us a
                        message and we'll answer as soon as possible.
                        But before sending a message take care if you
                        wrote your e-mail correctly, cause we'll use it to
                        answer you and also please write the theme of
                        your message</p>
<!--                    <a href="#" class="card-link"><span>MORE</span></a>-->
                </div>
            </div>
        </div>
        <div class="d-block d-lg-none col-lg-6 form">
            <form method="post" action="source/php/sendMail.php">
                <div class="form-group left">
                    <input name="name" type="text" class="form-control" placeholder="NAME" required>
                </div>
                <div class="form-group right">
                    <input name="theme" type="text" class="form-control" placeholder="SUBJECT" required>
                </div>
                <div class="form-group left">
                    <input name="email" type="email" class="form-control" placeholder="E-MAIL" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group right">
                    <textarea name="message" type="text" aria-label="" rows="5" class="form-control" placeholder="MESSAGE"></textarea>
                </div>
                <button type="submit" class="btn" name="sendMail"><span>SEND</span></button>
            </form>
        </div>
    </section>
    <?
    require 'source/php/footer.php';
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->


<script src="source/bootstrap/js/bootstrap.bundle.js"></script>
<script src="source/bootstrap/js/bootstrap.esm.js"></script>
<script src="source/bootstrap/js/bootstrap.js"></script>
</body>
</html>