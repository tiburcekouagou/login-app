<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <nav>
      <div>
        <h3>Tiburce Kouagou</h3>
        <ul class="menu-main">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Current Sales</a></li>
          <li><a href="#">Member+</a></li>
        </ul>
      </div>
      <ul class="menu-member">
        <?php if (isset($_SESSION["userid"])) : ?>
          <li><a href="#"><?= $_SESSION['useruid'] ?></a></li>
          <li><a href="#" class="header-login-a">LOGOUT</a></li>
        <?php else : ?>
          <li><a href="#">SIGN UP</a></li>
          <li><a href="#" class="header-login-a">LOGIN</a></li>
        <?php endif ?>
      </ul>
    </nav>
  </header>
  <section class="index-intro">
    <div class="index-intro-bg">
      <div class="wraper">
        <div class="index-intro-c1">
          <div class="video"></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quia?</p>
        </div>
        <div class="index-intro-c2">
          <h2>We make <br>professional<br> gear</h2>
          <a href="#">FIND OUR GEAR HERE</a>
        </div>
      </div>
    </div>
  </section>
  <section class="index-login">
    <div class="wrapper">
      <div class="index-login-signup">
        <h4>SIGN UP</h4>
        <p>Don't have an account yet ? Sign up here!</p>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="email" name="email" placeholder="E-mail">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd-repeat" placeholder="Repeat password">
          <br>
          <button type="submit" name="submit">SIGN UP</button>
        </form>
      </div>
      <div class="index-login-login">
        <h4>LOG IN</h4>
        <p>Don't have an account yet ? Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <br>
          <button type="submit" name="submit">Login</button>
        </form>
      </div>
    </div>
  </section>
</body>

</html>