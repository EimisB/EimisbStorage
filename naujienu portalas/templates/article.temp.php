<?php
include_once '/header.php';
date_default_timezone_set('Europe/Vilnius');
include_once '/comments.inc.php';
?>
          <div class="container-fluid contentContainer">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contentContainerCol">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 in-article-container">
                  <article class="in-article-section">

                    <?php  $straipsnis = getArticleLietuva($id) ?>

                    <p class="in-article-info"> Publikuota: <?php echo $straipsnis['date']; ?> </p>

                    <h3 class="in-article-title"> <?php echo $straipsnis['title']; ?> </h3>

                    <div class="in-image-container">
                      <div class='list-group gallery'>
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="width:100%">
                          <?php
                          articleCoverLietuva($i) ?>
                        </div>
                      </div>
                    </div>

                    <p class="in-article-paragraph"> <?php echo nl2br($straipsnis['content']); ?> </p>

                    <p class="in-article-info">Šaltinis: <?php echo $straipsnis['author_name']; ?></p>
                  </article>
                  <!-- comment block -->
                  <?php

                  if (isset($_SESSION['u_id'])){
                    echo
                    "<form method='POST' action='".setComments()."'>
                      <input type='hidden' name='user_id' value='".$_SESSION['u_id']."'>
                      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                      <textarea class='in-comment-area' name='message'></textarea><br>
                      <button class='in-comment-btn' type='submit' name='commentSubmit'>Komentuoti</button>
                      </form>";
                  } else {
                    echo "<div class='in-comment-login'>Norėdami komentuoti, turite prisijungti!</div><div class='clear-float'></div>";
                  }
                    ?>
                  <!-- end of comment block -->

                  <?php include_once 'ads.php';
                  printAdNumber1();
                  ?>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 in-article-sidebar">
                  <div class="in-sidebar-container">
                    <h3 class="title-h3"><span class="title-span">Komentarai</span></h3>
                    <div class="in-comments-container">


                    </div>
                  </div>
                </div>

                <div class="container_fluid">
                  <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                      <div class="newsTitle">
                        <h3>Taip pat skaitykite</h3>


                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

<?php include_once '/footer.php' ?>
