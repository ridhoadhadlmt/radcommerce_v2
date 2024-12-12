<?php
  session_start();
  include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>radcommerce</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
  <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  

</head>
<body>

<header class="header-wrapper">
  <div class="top-nav"> 
    <nav class="navbar navbar-expand-md">
      <div class="container col-md-11">
        <div class="logo-area" >
          <a href="" class="navbar-merek">radcommerce</a>     
        </div>
        
        <div class="search-area py-3 px-3">
          <form action="" class="form-search" method="GET">
            <div class="input-group">
              <select class="category" name="category"  id="category">
                <option value="" data-display="Semua Kategori">Semua Kategori</option>
                <?php
                  $sql = "SELECT * FROM kategori_produk";
                  $result = mysqli_query($koneksi,$sql);
                ?>
                <?php foreach($result as $kategori): ?>
                  <option><?= $kategori['nama']; ?></option>
                <?php endforeach ?>
              </select>
              <input type="text" name="" class="form-control" placeholder="Cari apa..?">
              <div class="input-group-append">
                <button class="btn btn-default"><i class="ion ion-ios-search"></i></button>
              </div>   
            </div>
          </form>
        </div>
        <div class="cart-area">
          <a href="" class="">
            <img src="{{ asset('img/icon/add-to-basket.svg') }}" width="30" alt=""> 
            
            <span class="cart-count">
              
              <?php
                if(isset($_SESSION['cart'])){
                  $count = count($_SESSION['cart']);
                  echo $count;
                }
                else{
                  echo "0";
                }
              ?>
            
          </a>
        </div>
        
      </div>
    </nav>
  </div>
  <div class="bottom-nav">
    <nav class="navbar navbar-expand-md py-3 bg-white">
      <div class="container col-md-11">
        
        <div class="auth-area d-flex ml-auto">
          <form action="">

            <button class="btn btn-login">Masuk</button>
          </form>
          <form action="">
            <button class="btn btn-register">Daftar</button>

          </form>
          
        </div>
      </div>
    </nav>
  </div>
</header>