<nav class="navbar navbar-expand-lg">
    <div class="col-2 col-lg-3 mainLink">
        <a class="navbar-brand" href="../index.php">
            <h1>TYPE7<h1 class="highlight">.</h1></h1>
        </a>
    </div>
    <div class="col-md-6 links d-none d-lg-block">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../error404.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../projects.php">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../error404.php">CONTACTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../error404.php">WEBSITES</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="col-5 col-lg-3 more">
        <ul class="navbar-nav">
            <li class="nav-item dropdown language col-4 d-none d-lg-block">
                <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="../source/img/language.png" alt="language">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../error404.php">ENGLISH</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../error404.php">RUSSIAN</a>
                    <a class="dropdown-item" href="../error404.php">CZECH</a>
                </div>
            </li>
            <li class="nav-item otherLinks col-4" onclick="openMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#eb5757" class="bi bi-grid-3x2-gap-fill" viewBox="0 0 16 16">
                    <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V9z"/>
                </svg>
            </li>
        </ul>
    </div>
</nav>
<script>

    function openMenu(){
        let body = document.getElementById('body');
        body.classList.toggle('active');
        let menu = document.getElementById('moreMenu');
        menu.classList.toggle('active');
    }

</script>
<div class="moreMenu" id="moreMenu">
    <a href="../logIn.php"><img src="../source/img/7.png" alt="" class="_7"></a>
    <div class="menuItems">
        <img src="../source/img/plus.png" id="leftTop" alt="">
        <img src="../source/img/plus.png" id="rightTop" alt="">
        <img src="../source/img/plus.png" id="rightBottom" alt="">
        <img src="../source/img/plus.png" id="leftBottom" alt="">

        <img src="../source/img/topCardLine.png" id="leftTopLine" alt="">
        <img src="../source/img/rightCardLine.png" id="rightTopLine" alt="">
        <img src="../source/img/topCardLine.png" id="rightBottomLine" alt="">
        <img src="../source/img/rightCardLine.png" id="leftBottomLine" alt="">
        <ul>
            <li class="mainLinks d-lg-none">
                <a href="../error404.php">ABOUT US</a>
            </li>
            <li class="mainLinks d-lg-none">
                <a href="../projects.php">PROJECTS</a>
            </li>
            <li class="mainLinks d-lg-none">
                <a href="../error404.php">CONTACTS</a>
            </li>
            <li class="mainLinks d-lg-none">
                <a href="../error404.php">WEBSITES</a>
            </li>
            <li>
                <a href="../error404.php">1. PAGE</a>
            </li>
            <li>
                <a href="../error404.php">2. PAGE</a>
            </li>
            <li>
                <a href="../error404.php">3. PAGE</a>
            </li>
            <li>
                <a href="../error404.php">4. PAGE</a>
            </li>
        </ul>
    </div>
</div>