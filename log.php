<?php
// echo "D";
if(!isset($_SESSION['email']))
  {
    echo "H";
    header("Location: login.php");
    exit();
  }

?>
