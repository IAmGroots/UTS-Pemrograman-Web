<?php
  session_start();

  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $roles = $_POST["roles"];
    
    if($username == "Asep" and $password == "123" and $roles == "admin"){
      $_SESSION["session_username"] = $username;
      $_SESSION["session_password"] = $password;
      $_SESSION["session_namaLengkap"] = "Asep Setiawan";
      $_SESSION["session_telepon"] = "0812 3456 7890";
      $_SESSION["session_email"] = "asep@gmail.com";
      $_SESSION["session_alamat"] = "Jl Laksda M Nazir 11 Bl H, Surabaya";
      header("location: ../Halaman/dashboard.php");
      exit();
    }
    
    if($username == "Budi" and $password == "321" and $roles == "user"){
      $_SESSION["session_username"] = $username;
      $_SESSION["session_password"] = $password;
      $_SESSION["session_namaLengkap"] = "Budi Laksita";
      $_SESSION["session_telepon"] = "0288 4344 3411";
      $_SESSION["session_email"] = "budi@gmail.com";
      $_SESSION["session_alamat"] = "Ds. Lada No. 673, Pagar Alam 67060, Yogyakarta";
      header("location: ../Halaman/user.php");
      exit();
    }

    header("location: ../Halaman/login.html");
  }
?>