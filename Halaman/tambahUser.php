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
  <title>Admin</title>
  <link rel="stylesheet" href="../Style/dashboard.css">
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/0d3cd07185.js" crossorigin="anonymous"></script>
  <script>
    function produk() {
      alert("Website masih dalam tahap Pengembangan")
    }
  </script>
</head>

<body>
  <!-- Navigation Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand px-lg-1" href=""><strong>Dashboard Admin LOGO</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <li class="nav-item logout">
            <a class="nav-link active" href="../Proses/logout.php">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation End -->

  <!-- Aside Start -->
  <aside class="container mt-3">
    <div class="row">
      <div class="col-md-2 text-bg-danger b-radius-left">
        <ul class="nav flex-column">
          <li class="nav-item">
            <hr class="bg-secondary">
            </hr>
            <a href="dashboard.php" class="nav-link text-white p-2"><i class="fa-solid fa-house"></i>
              <span>Dashboard</span></a>
          </li>
          <li class="nav-item">
            <hr class="bg-secondary">
            </hr>
            <a href="dashboardUser.php" class="nav-link text-white p-2"><i class="fa-solid fa-user"></i>
              <span>User</span></a>
          </li>
          <li class="nav-item">
            <hr class="bg-secondary">
            </hr>
            <a href="dashboard.php" class="nav-link text-white p-2" onclick="produk()"><i class="fa-solid fa-box"></i>
              <span>Produk</span></a>
          </li>
          <hr class="bg-secondary">
          </hr>
        </ul>
      </div>

      <!-- Content Start -->
      <div class="col-md-10 text-white b-radius-right menu">
        <h3><i class="fa-solid fa-user mb-4"></i> Tambah User</h3>
        <form action="dashboardUser.php" method="POST">
          <div class="inputBox">
            <label for="">Username</label>
            <input type="text" class="form-control form-control-sm bg-dark text-white" required name="username" id="" placeholder="Username">
          </div>
          <div class="inputBox">
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control form-control-sm bg-dark text-white" required name="nama" id="" placeholder="Nama Lengkap">
          </div>
          <div class="inputBox">
            <label for="">Telepon</label>
            <input type="tel" class="form-control form-control-sm bg-dark text-white" required name="telepon" id="" placeholder="Nomor Telepon">
          </div>
          <div class="inputBox">
            <label for="">Email</label>
            <input type="email" class="form-control form-control-sm bg-dark text-white" required name="email" id="" placeholder="Email">
          </div>
          <div class="inputBox">
            <label for="">Alamat</label>
            <textarea class="form-control form-control-sm bg-dark text-white" id="" required name="alamat"rows="3" placeholder="Alamat"></textarea>
          </div>
          <input type="submit" class="bg-dark" value="Tambah User">
        </form>
      </div>
      <!-- Content End -->
    </div>
  </aside>
  <!-- Aside End -->

  <script src="../Assets/js/bootstrap.min.js"></script>
</body>
</html>