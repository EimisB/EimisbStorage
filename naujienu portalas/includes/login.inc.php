<?php

session_start();
include_once '/db.inc.php';

if(isset($_POST['submit'])) { //tikrina ar post metodu buvo paspausta submit

  $connection = connect_DB();

  $uid = mysqli_real_escape_string($connection, $_POST['uid']);
  $pwd = mysqli_real_escape_string($connection, $_POST['pwd']);

  // if teiginiai tvarkyti klaidas
  if(empty($uid) || empty($pwd)) {
    header("Location: /index.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
    $result = mysqli_query($connection, $sql);
    $resultsCheck = mysqli_num_rows($result); // tikrina kiek eiluciu isvede duomenu baze
    if ($resultsCheck < 1) {
      header("Location: /index.php?login=error");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) { //suskaldo array gauta is duomenu bazes
        // atkoduoti slaptazodi
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($hashedPwdCheck == false){
          header("Location: /index.php?login=error");
          exit();
        } elseif ($hashedPwdCheck == true) { //elseif nes dar turi patikrint ar tikrai atitinka slaptazodis pries darant kita uzduoti
          // prijungti vartotoja
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: /index.php?login=success");
          exit();
        }
      }
    }
  }
} else {
  header("Location: /index.php?login=error");
  exit();
}

 ?>
