<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Naujienu portalas</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link rel="stylesheet" href="/lib/normalize/normalize.css" type="text/css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css" type="text/css">
  <link href="/css/main.css" rel="stylesheet" type="text/css">
</head>
<?php include_once 'includes/db.inc.php';
?>
<body>
  <!--start of whole page container -->
  <div class="container-fluid pageContainer">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wholePage">


<div class="container-fluid headerContainer">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 searchRow">
      <div class="socialMedia">
        <img src="../../img/socialMediaIcons/facebook.png" class="socialIcon" alt="facebook" height="25px" width="25px">
        <img src="../../img/socialMediaIcons/twitter.png" class="socialIcon" alt="twitter" height="25px" width="25px">
        <img src="../../img/socialMediaIcons/google-plus.png" class="socialIcon" alt="google-plus" height="25px" width="25px">
        <img src="../../img/socialMediaIcons/linkedin.png" class="socialIcon" alt="linked-in" height="25px" width="25px">
      </div>

      <!-- log in block -->
      <div class="login-wrapper login-wrapper-active">
        <?php
          if(isset($_SESSION['u_id'])){
            echo '<form class="logout" action="/includes/logout.inc.php" method="post">
              <button type="submit" name="submit">Atsijungti</button>
            </form>';
          } else {
            echo '<form action="/includes/login.inc.php" method="POST" class="login_form">
                    <input class="login" type="text" name="uid" placeholder="Vartotojo vardas">
                    <input class="login" type="password" name="pwd" placeholder="slaptažodis">
                    <button class="login-btn" type="submit" name="submit">Prisijungti</button>
                  </form>
                  <a class="signup-btn" href="signup.php"><button class="signup" type="button" name="signup">Registruotis</button></a>';
          }
         ?>
      </div>
      <div class="clear-float"></div>
      <!-- end of log in block -->

    </div>
    <!-- end of social media/search -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuRow">
      <div class="menuIcon">
        <div class="hamburger">
        </div>
      </div>
      <a href="/index.php"><div class="logo">Naujienos.<span class="logo-span">LT</span></div></a>
      <div class="search-box-wrapper">
        <input type="text" placeholder="Ieškoti..." class="search-box-input">
        <button class="search-box-button">&#128269</button>
      </div>
    </div>
    <div class="clear-float"></div>
    <!-- end of menu -->
  </div>
  <div class="menuPanel">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 leftMenuContainer">
        <ul class="menuTabs">
          <a href="/lietuva.php" style="text-decoration:none"><li class="menuTab1 tab1">LIETUVA</li></a>
          <a href="/uzsienis.php" style="text-decoration:none"><li class="menuTab2">UŽSIENIS</li></a>
          <li class="menuTab3">VERSLAS</li>
          <li class="menuTab4">SPORTAS</li>
          <li class="menuTab5">MOKSLAS</li>
          <li class="menuTab6">SVEIKATA</li>
        </ul>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 rightMenuContainer">
        <div class="lietuva">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsTitle">
              <p class="noPadding h3title">Naujausi įvykiai</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsContent">
              <div class="innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
              <div class="innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
              <div class="hidden-sm hidden-xs innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
              <div class="hidden-md hidden-sm hidden-xs innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear-float"></div>
        <div class="uzsienis">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsTitle">
              <p class="noPadding h3title">Naujausi įvykiai</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsContent">
              <div class="innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
              <div class="innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
              <div class="hidden-sm hidden-xs innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
              <div class="hidden-md hidden-sm hidden-xs innerMenuArticle">
                <div class="inner1">

                </div>
                <div class="inner2">
                  <p class="noPadding innerMenuTitle">

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="verslas">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsTitle">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsContent">
              <div class="innerMenuArticle">
                <h1>Verslas1</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Verslas2</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Verslas3</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Verslas4</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="sportas">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsTitle">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsContent">
              <div class="innerMenuArticle">
                <h1>Sportas1</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Sportas2</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Sportas3</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Sportas4</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="mokslas">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsTitle">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsContent">
              <div class="innerMenuArticle">
                <h1>Mokslas1</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Mokslas2</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Mokslas3</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Mokslas4</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="sveikata">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsTitle">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menuNewsContent">
              <div class="innerMenuArticle">
                <h1>Sveikata1</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Sveikata2</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Sveikata3</h1>
              </div>
              <div class="innerMenuArticle">
                <h1>Sveikata4</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
