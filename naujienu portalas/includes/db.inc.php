<?php

define( "USERNAME", "eimantas"); // root // DB - username
define( "PASSWORD", "eimantas"); // root // DB - password
define( "DB_NAME", "mydb"); // root
define( "SERVERNAME", "localhost"); // root

function connect_DB(){
//prisijungimas prie duomenu mazes
$connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );

if ($connection) {
  // prisijungei prie DB
} else {
  echo "<script>console.log( 'Prisijungti nepavyko' );</script>" . mysqli_connect_error();
}
return $connection;
}
// connect_DB();


//f-ja uploadImageLietuva($id, $name, $file_path, $alt_text, $gallery_path, $date)
function uploadToTable($name, $file_path, $alt_text, $gallery_path, $a_link) {
    $sql = "INSERT INTO image_lietuva VALUES ('', '$name', '$file_path','$alt_text','$gallery_path', '$a_link',NOW())";
    $connect = connect_DB();
    $status = mysqli_query($connect, $sql);
    if( !$status) {
      echo "<script>console.log('nepavyko papildyt image_lietuva');</script>" . mysqli_error($connect) . " <br>";
   } else {
        echo "<script>console.log('pavyko papildyt image_lietuva');</script>";
   }
}
// uploadToTable('img4.jpg','img/uzsienis/4/img4.jpg','alt="Ispanija-per-Brexit-derybas-nesieks-susigrąžinti-Gibraltaro"','img/uzsienis/4/gallery/','a_link');


// f-ja createArticle($id, $title, $content, $author_name, $date)
function createArticle($title, $content, $author_name) {
    $sql = "INSERT INTO articles_uzsienis
            VALUES ('', '$title', '$content', '$author_name', NOW())";
    $connect = connect_DB();
    $status = mysqli_query($connect, $sql);
    if( !$status) {
      echo "<script>console.log('nepavyko sukurti straipsnio');</script>" . mysqli_error($connect);
   } else {
        echo "<script>console.log('straipsni sukurti pavyko');</script>";
   }
}
// createArticle(
// "",
// "",
// "15min.lt");

function getArticleLietuva($id) {
      $sql = "SELECT * FROM articles_lietuva
              WHERE  id = $id";
      $connect = connect_DB();
      $results = mysqli_query($connect, $sql);
      // mysqli_fetch_assoc - suskaldo gautus rezultatus i masyva (rows)
      $data = mysqli_fetch_assoc($results);
      if( $data > 0 ) {
          // viskas gerai
      } else {
          echo " NR: $id tokio  straipsnio neradome!!! <br>";
      }
      return $data;
}

function getArticleUzsienis($id) {
      $sql = "SELECT * FROM articles_uzsienis
              WHERE  id = $id";
      $connect = connect_DB();
      $results = mysqli_query($connect, $sql);
      // mysqli_fetch_assoc - suskaldo gautus rezultatus i masyva (rows)
      $data = mysqli_fetch_assoc($results);
      if( $data > 0 ) {
          // viskas gerai
      } else {
          echo " NR: $id tokio  straipsnio neradome!!! <br>";
      }
      return $data;
}


/*-------------------------all articles------------------------------------------------------------*/

// function getArticles($straipsniuSkaicius = 9999 ) {
//       $sql = "SELECT  * FROM articles  LIMIT $straipsniuSkaicius";
//       $connect = connect_DB();
//       $results = mysqli_query($connect, $sql);
//       if( !$results) {
//         echo "Neapvyko rasti  straipsniu!!! ". mysqli_error($connect) . " <br>";
//      }  else {
//         // kadangi mums grista daug duomenu, juos reik sudalinti dalimis
//         // mysqli_num_rows - suskaldysime result'atus eilutemis ir  tikriname ar radome kazka pagal uzklausa
//         mysqli_num_rows($results);
//      }
//       return $results;
// }
// $visiStraipsniai = getArticles(4);
// print_r($visiStraipsniai);
// $data = mysqli_fetch_assoc($results);


/*----------------------------------------------------------------------------------------------------*/

// function getArticlesByTittle($searchTerm ) {
//       $sql = " SELECT * FROM articles
//                 WHERE title like '%$searchTerm%'; ";
//       $connect = connect_DB();
//       $results = mysqli_query($connect, $sql);
//       if( !$results) {
//         echo "Neapvyko rasti  straipsniu!!! ". mysqli_error($connect) . " <br>";
//      }  else {
//         // kadangi mums grista daug duomenu, juos reik sudalinti dalimis
//         // mysqli_num_rows - suskaldysime result'atus eilutemis ir  tikriname ar radome kazka pagal uzklausa
//         mysqli_num_rows($results);
//      }
//       return $results;
// }

// $ieskomasStraipsnis =  getArticlesByTittle("Zuvis");
// //TESTUOJAME
// // print_r($ieskomasStraipsnis);
// // $data = mysqli_fetch_row($ieskomasStraipsnis);
// // if ($data) {
// //   echo "Radome: " . $data[1] ;
// // } else {
// //   echo "Neradomoe ieskomos frazes <br />";
// // }


?>
