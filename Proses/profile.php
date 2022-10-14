<?php
  session_start();

  if(isset($_POST["back"]) and $_SESSION["session_username"] == "Asep"){
    header("location: ../Halaman/dashboard.php");
    exit();
  }
  if(isset($_POST["back"]) and $_SESSION["session_username"] == "Budi"){
    header("location: ../Halaman/user.php");
    exit();
  }

  if(isset($_POST["change"]) and $_SESSION["session_username"] == "Asep"){
    header("location: ../Halaman/dashboard.php");
    exit();
  }
  if(isset($_POST["change"]) and $_SESSION["session_username"] == "Budi"){
    header("location: ../Halaman/user.php");
    exit();
  }
?>