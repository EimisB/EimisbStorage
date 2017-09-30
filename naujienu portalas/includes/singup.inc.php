<?php
include_once '/db.inc.php';

if(isset($_POST['submit'])){

  $connection = connect_DB();

    $first = mysqli_real_escape_string($connection, $_POST['first']);
    $last = mysqli_real_escape_string($connection, $_POST['last']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $uid = mysqli_real_escape_string($connection, $_POST['uid']);
    $pwd = mysqli_real_escape_string($connection, $_POST['pwd']);

    //tikrinti ar nera tusciu lauku i ivestis
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
      header("Location: /html/signup.php?singup=empty");
      exit();
    } else {
      //patikrinti ar irasyti duomenys yra validus
      if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        ob_start();
        header("Location: /html/signup.php?singup=invalid");
        exit();
      } else {
        // patikrinti ar email yra teisingas
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: /html/signup.php?singup=email");
          exit();
        } else {
          $sql = "SELECT * FROM users WHERE user_uid='$uid'";
          $result = mysqli_query($connection, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0) {
            header("Location: /html/signup.php?singup=usertaken");
            exit();
          } else {
            // padaryti pwd neperskaitomu
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            // prideti vartotoja i duomenu baze
            $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
            mysqli_query($connection, $sql);
            header("Location: /index.php?singup=success");
            exit();
          }

        }
      }
    }


} else {
  header("Location: /index.php");
  exit();
}
