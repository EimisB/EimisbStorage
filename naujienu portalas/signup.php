<?php include_once 'html/header.php' ?>

<section class="signup-container">
  <div class="signup-wrapper">
    <h2>Registracija</h2>
    <form class="signup-form" action="/includes/singup.inc.php" method="post">
      <input type="text" name="first" placeholder="Vardas">
      <input type="text" name="last" placeholder="Pavardė">
      <input type="text" name="email" placeholder="El. paštas">
      <input type="text" name="uid" placeholder="Vartotojo vardas">
      <input type="password" name="pwd" placeholder="Slaptažodis">
      <button type="submit" name="submit">Registruotis</button>
    </form>
  </div>
</section>


<?php include_once 'html/footer.php' ?>
