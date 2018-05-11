<?php
session_start();
// header( "refresh:0;url=index.php" );
session_destroy();
header("Location: index.php");
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.'; 
die();