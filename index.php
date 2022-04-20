<?php

session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
?>

<!doctype html>
<html>
  <head><title>Home Page</title></head>
  <body>
      <h1>Main page</h1><br><br>
        Hey there, <?php 
        echo $user_data['user_name']; ?>

      <a href="logout.php">logout</a>
  </body>
</html>