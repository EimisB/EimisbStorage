<?php
include_once '/db.inc.php';

function setComments() {
  if(isset($_POST['commentSubmit'])) {
    $user_id = $_POST['user_id'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (user_id, date, message)
    VALUES ('$user_id', '$date', '$message')";
    $connection = connect_DB();
    mysqli_query($connection, $sql);
  }
}

function getComments(){
  $sql = "SELECT * FROM comments";
  $connection = connect_DB();
  $result = mysqli_query($connection, $sql);
  while($row = $result->fetch_assoc()){
    $id = $row['user_id'];
    $sql2 = "SELECT * FROM users WHERE user_id='$id'";
    $connection = connect_DB();
    $result2 = mysqli_query($connection, $sql2);
    if ($row2 = $result2->fetch_assoc()){
      echo "<div class='in-comment-box'><p>";
      echo $row2['user_uid']."<br>";
      echo $row['date']."<br><br>";
      echo nl2br($row['message']);
      echo "</p></div>";
    }
  }
}

?>
