<?php

if(isset($_POST['submit'])) {
  // Grabbing the data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  // Instantiate SignupContr class
  include "../classes/dbh.classes.php";
  include "../classes/login.classes.php";
  include "../classes/login-contr.classes.php";
  $signup = new LoginContr($uid, $pwd);

  // Running error handlers and user signup
  $signup->LoginUser();

  // Going to back to front page
  header("location: ../index.php?error=none");
}