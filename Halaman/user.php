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
  <title>User</title>
  <link rel="stylesheet" href="../Style/user.css">
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Style/home.css">
  <script src="https://kit.fontawesome.com/0d3cd07185.js" crossorigin="anonymous"></script>
  <script>
    function cart() {
      alert("Website masih dalam tahap Pengembangan")
    }

    function search() {
      alert("Website masih dalam tahap Pengembangan")
    }

    function bell() {
      alert("Website masih dalam tahap Pengembangan")
    }
  </script>
</head>
<body>
  <!-- Navigation Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand px-lg-1" href=""><strong>LOGO</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto my-3 my-lg-2">
          <input class="form-control me-2" type="search" placeholder="Minimalis Furniture" aria-label="Search">
          <button class="btn btn-dark" type="submit" onclick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="" onclick="cart()"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" onclick="bell()"><i class="fa-solid fa-bell"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i></a>
          </li>
          <li class="nav-item logout">
            <a class="nav-link active" href="../Proses/logout.php">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation End -->

  <!-- Banner Start -->
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../Assets/images/banner-1.jpg" class="d-block w-100 img-fluid" alt="banner-images">
        </div>
        <div class="carousel-item">
          <img src="../Assets/images/banner-2.jpg" class="d-block w-100 img-fluid" alt="banner-images">
        </div>
        <div class="carousel-item">
          <img src="../Assets/images/banner-3.jpg" class="d-block w-100 img-fluid" alt="banner-images">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Banner End -->

  <!-- Category Start -->
  <div class="container mt-5">
    <div class="judul-category">
      <h4 class="text-center">Kategori</h4>
    </div>
    <div class="row text-center row-container">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="../Assets/images/category-1.jpg" class="img-category mt-3" alt="category-images"></a>
          <p class="m-2">Kamar Tidur</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="../Assets/images/category-2.jpg" class="img-category mt-3" alt="category-images"></a>
          <p class="m-2">Ruang Keluarga</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="../Assets/images/category-3.jpg" class="img-category mt-3" alt="category-images"></a>
          <p class="m-2">Ruang Kerja</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="../Assets/images/category-4.jpg" class="img-category mt-3" alt="category-images"></a>
          <p class="m-2">Outdoor</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="../Assets/images/category-5.jpg" class="img-category mt-3" alt="category-images"></a>>
          <p class="m-2">Sofa</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="../Assets/images/category-6.jpg" class="img-category mt-3" alt="category-images"></a>
          <p class="m-2">Ruang Makan</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Category End -->

  <!-- Product Start -->
  <div class="container mt-5">
    <div class="judul-product mb-4">
      <h4 class="text-center">Produk Pilihan Untukmu</h4>
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product1.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Sofa</h6>
            <p class="card-text"><strong>Rp 1.000.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product2.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 500.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product3.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kasur</h6>
            <p class="card-text"><strong>Rp 300.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product4.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kasur</h6>
            <p class="card-text"><strong>Rp 2.500.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product5.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 2.000.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product6.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 750.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product7.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 250.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product8.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 300.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product9.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 350.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product10.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kursi</h6>
            <p class="card-text"><strong>Rp 400.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product11.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Kasur</h6>
            <p class="card-text"><strong>Rp 3.000.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="card text-center">
          <img src="../Assets/images/product12.jpg" class="card-img-top" alt="product-images">
          <div class="card-body">
            <h6 class="card-title">Meja</h6>
            <p class="card-text"><strong>Rp 200.000</strong></p>
            <a href="" class="btn btn-dark d-grid">+ Keranjang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product End -->

  <!-- Footer Start -->
  <footer class="bg-dark p-4 mt-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <span class="teks">Copyright &copy 2022 by <strong>Muhammad Hadiseptian Nursukamto</strong></span>
        </div>
        <div class="col">
          <a href="" class="text-decoration-none">
            <img src="../Assets/images/facebook.png" alt="social-media-images" class="ms-2">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../Assets/images/instagram.png" alt="social-media-images" class="ms-2">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../Assets/images/linkedin.png" alt="social-media-images" class="ms-2 linkedin">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <script src="../Assets/js/bootstrap.min.js"></script>
</body>
</html>