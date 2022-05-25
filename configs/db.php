<?php
  include_once('variables.php');
  $con = mysqli_connect($host, $username, $password, $dbname);
  
  if(!$con) {
    die("Connect db failed");
  }
?>