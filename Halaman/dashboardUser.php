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
        <h3><i class="fa-solid fa-user mb-4"></i> User</h3>
        <table class="table table-dark table-striped">
          <thead>
            <tr class="row-head">
              <th scope="col" class="nomor">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Telepon</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="nomor">1</th>
              <td>Budi</td>
              <td>Budi Laksita</td>
              <td>0288 4244 3411</td>
              <td>budi@gmail.com</td>
              <td>Ds. Lada No. 673, Pagar Alam 67060, Yogyakarta</td>
              <td class="hapus"><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <tr>
              <th class="nomor">2</th>
              <td>Yuliana</td>
              <td>Yuliana Prastuti</td>
              <td>0244 3874 1222</td>
              <td>artanto.prasetyo@gmail.com</td>
              <td>Kpg. HOS. Cjokroaminoto (Pasirkaliki) No. 143, Sorong 58313, Bali</td>
              <td class="hapus"><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <tr>
              <th class="nomor">3</th>
              <td>Eva</td>
              <td>Eva Utami</td>
              <td>0339 3237 050</td>
              <td>atma04@gmail.com</td>
              <td>Jr. Bakaru No. 617, Bukittinggi 58702, Balikpapan</td>
              <td class="hapus"><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <tr>
              <th colspan="7">
                <a href="tambahUser.php" class="tambah-user">Tambah User</a>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Content End -->
    </div>
  </aside>
  <!-- Aside End -->

  <script src="../Assets/js/bootstrap.min.js"></script>
</body>
</html>