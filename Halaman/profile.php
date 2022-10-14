<?php
  session_start();
  if(!isset($_SESSION["session_username"])){
    header("location: ../index.html");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="../Style/profile.css">
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/0d3cd07185.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="containers">
    <form action="../Proses/profile.php" method="POST">
      <div class="inputBox">
        <label for="" class="mt-2">Username</label>
        <input  type="text" class="form-control form-control-sm bg-dark text-white" 
                required 
                name="username" 
                value="<?php echo $_SESSION["session_username"]?>">
      </div>
      <div class="inputBox">
        <label for="" class="mt-2">Nama Lengkap</label>
        <input  type="text"
                class="form-control form-control-sm bg-dark text-white" 
                required 
                name="nama" 
                value="<?php echo $_SESSION["session_namaLengkap"]?>">
      </div>
      <div class="inputBox">
        <label for="" class="mt-2">Telepon</label>
        <input  type="tel" 
                class="form-control form-control-sm bg-dark text-white" 
                required 
                name="telepon"
                value="<?php echo $_SESSION["session_telepon"]?>">
      </div>
      <div class="inputBox">
        <label for="" class="mt-2">Email</label>
        <input  type="email"
                class="form-control form-control-sm bg-dark text-white" 
                required 
                name="email"
                value="<?php echo $_SESSION["session_email"]?>">
      </div>
      <div class="inputBox">
        <label for="" class="mt-2">Alamat</label>
        <textarea class="form-control form-control-sm bg-dark text-white" 
                  required 
                  name="alamat"
                  rows="3"
                  ><?php echo $_SESSION["session_alamat"]?></textarea>
      </div>
      <div class="links">
        <input  type="submit" 
                class="bg-dark form-control form-control-sm mt-2 back" 
                name="back"
                value="Kembali">
        <input  type="submit"
                class="bg-dark form-control form-control-sm mt-2 change" 
                name="change"
                value="Ubah">
      </div>
    </form>
  </div>

  <script src="../Assets/js/bootstrap.min.js"></script>
</body>
</html>