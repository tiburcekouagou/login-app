<?php

if(isset($_POST['submit'])) {
  // Grabbing the data
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwd_repeat = $_POST['pwd_repeat'];
  $email = $_POST['email'];

  // Instantiate SignupContr class
  include "../classes/dbh.classes.php";
  include "../classes/signup.classes.php";
  include "../classes/signup-contr.classes.php";
  $signup = new SignupContr($uid, $pwd, $pwd_repeat, $email);

  // Running error handlers and user signup
  $signup->signupUser();

  // Going to back to front page
  header("location: ../index.php?error=none");
}