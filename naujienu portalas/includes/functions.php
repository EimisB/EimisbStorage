<?php
// class objLietuva{
function latestLietuvaImg($q){
  $sql = "SELECT file_path, alt_text, a_link FROM image_lietuva ORDER BY id DESC LIMIT 1 OFFSET $q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/lietuva/'.$row['2'].'.php"><img src="'.$row['0'].'"'.$row['1'].'></a>';
}

function latestLietuvaTitle($q){
  $sql = "SELECT title, a_link FROM articles_lietuva ORDER BY id DESC LIMIT 1 OFFSET $q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/lietuva/'.$row['1'].'.php">'.$row['0'].'</a>';
  }
// }

// class objUzsienis{
function latestUzsienisImg($q){
  $sql = "SELECT file_path, alt_text, a_link FROM image_uzsienis ORDER BY id DESC LIMIT 1 OFFSET $q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/uzsienis/'.$row['2'].'.php"><img src="'.$row['0'].'"'.$row['1'].'></a>';
  }

function latestUzsienisTitle($q){
  $sql = "SELECT title, a_link FROM articles_uzsienis ORDER BY id DESC LIMIT 1 OFFSET $q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/uzsienis/'.$row['1'].'.php">'.$row['0'].'</a>';
  }
// }

// class objSilderImg {
function slider1Img(){
  $sql = "SELECT file_path, alt_text, a_link FROM image_lietuva ORDER BY id DESC LIMIT 1";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/lietuva/'.$row['2'].'.php"><img class=sliderImg" src="'.$row['0'].'"'.$row['1'].' width="100%" height="400px"></a>';
  }

function slider2Img(){
  $sql = "SELECT file_path, alt_text, a_link FROM image_uzsienis ORDER BY id DESC LIMIT 1";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/uzsienis/'.$row['2'].'.php"><img class=sliderImg" src="'.$row['0'].'"'.$row['1'].' width="100%" height="400px"></a>';
  }
// }

// class objSliderTitle {
function slider1Title(){
  $sql = "SELECT title, a_link FROM articles_lietuva ORDER BY id DESC LIMIT 1";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/lietuva/'.$row['1'].'.php" style="text-decoration:inherit; color:inherit">'.$row['0'].'</a>';
  }

function slider2Title(){
  $sql = "SELECT title, a_link FROM articles_uzsienis ORDER BY id DESC LIMIT 1";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/uzsienis/'.$row['1'].'.php" style="text-decoration:inherit; color:inherit">'.$row['0'].'</a>';
  }
// }


// most popular of the week

// class objWeekPopLietuva {
function weekPopular($q){
  $sql = "SELECT file_path, alt_text, a_link FROM image_lietuva LIMIT 1 OFFSET $q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/lietuva/'.$row['2'].'.php"><img src="'.$row['0'].'"'.$row['1'].'></a>';
}

function weekPopularTitle($q){
  $sql = "SELECT title, a_link FROM articles_lietuva LIMIT 1 OFFSET $q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/lietuva/'.$row['1'].'.php" style="text-decoration:inherit; color:inherit">'.$row['0'].'</a>';
  }
// }

// class objWeekPopUzienis {
function weekPopular1($q){
  $sql = "SELECT file_path, alt_text, a_link FROM image_uzsienis WHERE id=$q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/uzsienis/'.$row['2'].'.php"><img src="'.$row['0'].'"'.$row['1'].'></a>';
}

function weekPopularTitle1($q){
  $sql = "SELECT title, a_link FROM articles_uzsienis WHERE id=$q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a href="/uzsienis/'.$row['1'].'.php" style="text-decoration:inherit; color:inherit">'.$row['0'].'</a>';
  }
// }


// dailyNews rekomenduoja top 6 articles from table all tables
// class objTop6Lietuva {
  function top6Lietuva($q){
    $sql = "SELECT file_path, alt_text, a_link FROM image_lietuva ORDER BY id DESC LIMIT 1 OFFSET $q";
    $connect = connect_DB();
    $status = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($status))
    echo '<a href="/lietuva/'.$row['2'].'.php"><img src="'.$row['0'].'"'.$row['1'].'></a>';
  }

  function top6LietuvaTitle($q){
    $sql = "SELECT title, a_link FROM articles_lietuva ORDER BY id DESC LIMIT 1 OFFSET $q";
    $connect = connect_DB();
    $status = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($status))
    echo '<a href="/lietuva/'.$row['1'].'.php" style="text-decoration:inherit; color:inherit">'.$row['0'].'</a>';
    }
// }

// class objTop6uzsienis {
  function top6Uzsienis($q){
    $sql = "SELECT file_path, alt_text, a_link FROM image_uzsienis ORDER BY id DESC LIMIT 1 OFFSET $q";
    $connect = connect_DB();
    $status = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($status))
    echo '<a href="/uzsienis/'.$row['2'].'.php"><img src="'.$row['0'].'"'.$row['1'].'></a>';
  }

  function top6UzsienisTitle($q){
    $sql = "SELECT title, a_link FROM articles_uzsienis ORDER BY id DESC LIMIT 1 OFFSET $q";
    $connect = connect_DB();
    $status = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($status))
    echo '<a href="/uzsienis/'.$row['1'].'.php" style="text-decoration:inherit; color:inherit">'.$row['0'].'</a>';
    }
//}
// inner article img function
function articleCoverLietuva($q){
  $sql = "SELECT file_path, alt_text FROM image_lietuva WHERE id=$q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a class="fancybox" rel="ligthbox" '.$row['1'].' href="'.$row['0'].'"><img class="img-responsive" '.$row['1'].' src="'.$row['0'].'"/></a>';
}

function articleCoverUzsienis($q){
  $sql = "SELECT file_path, alt_text FROM image_uzsienis WHERE id=$q";
  $connect = connect_DB();
  $status = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($status))
  echo '<a class="fancybox" rel="ligthbox" '.$row['1'].' href="'.$row['0'].'"><img class="img-responsive" '.$row['1'].' src="'.$row['0'].'"/></a>';
}

// visi straipsniai lietuva

    function getAllLietuva(){
      $sql = "SELECT * FROM image_lietuva ORDER BY id DESC";
      $connection = connect_DB();
      $result = mysqli_query($connection, $sql);
      while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $sql2 = "SELECT * FROM articles_lietuva WHERE id='$id'";
        $connection = connect_DB();
        $result2 = mysqli_query($connection, $sql2);
        if ($row2 = mysqli_fetch_array($result2)){
          echo "<div class='small'>";
          echo '<div class="small-img"><a href="/lietuva/'.$row['a_link'].'.php"><img src="'.$row['file_path'].'"'.$row['alt_text'].'></a></div>';
          echo '<div class="small-title"><a href="/lietuva/'.$row2['a_link'].'.php" style="text-decoration:inherit; color:inherit">'.$row2['title'].'</a></div>';
          echo "</div>";
        }
      }
    }


    function getAllUzsienis(){
      $sql = "SELECT * FROM image_uzsienis ORDER BY id DESC";
      $connection = connect_DB();
      $result = mysqli_query($connection, $sql);
      while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $sql2 = "SELECT * FROM articles_uzsienis WHERE id='$id'";
        $connection = connect_DB();
        $result2 = mysqli_query($connection, $sql2);
        if ($row2 = mysqli_fetch_array($result2)){
          echo "<div class='small'>";
          echo '<div class="small-img"><a href="/uzsienis/'.$row['a_link'].'.php"><img src="'.$row['file_path'].'"'.$row['alt_text'].'></a></div>';
          echo '<div class="small-title"><a href="/uzsienis/'.$row2['a_link'].'.php" style="text-decoration:inherit; color:inherit">'.$row2['title'].'</a></div>';
          echo "</div>";
        }
      }
    }




?>
