<?php 
include '../koneksi.php';
include '../function.php';

if(isset($_GET['q'])){
  $q = $_GET['q'];
}
else{
  $q = null;
}
?>



<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/nice-select.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  
  
</head>
<body>
<div class="wrapper">
  <div class="sidebar-wrapper">  
    
    <div class="sidebar-menu">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link"><i class="ion ion-ios-pie"></i> Dashboard</a>
        </li>
        
        <li class="nav-item" >
          <a href="index.php?q=tbl_produk" class="nav-link">Produk</a>
                
        </li>
        <li class="nav-item">
          <a href="index.php?q=merek" class="nav-link">Merek</a>
                 
        </li>
        <li class="nav-item" >
          <a href="index.php?q=kategori" class="nav-link">Kategori</a>
               
        </li>
        <li class="nav-item" >
          <a href="index.php?q=subkategori" class="nav-link">Subkategori</a>
                
        </li>
        </li>
        <li class="nav-item">
          <a href="index.php?q=spanduk" class="nav-link">Spanduk</a>
                 
        </li>
      </ul>
    </div>
  </div>
  <div class="main-wrapper">
    <div class="main-header">
      <div class="header-logo">
        <a href="index.php" class="navbar-merek">rad-commerce</a> 
      </div>
      <nav class="navbar navbar-expand-md">
        <button class="btn btn-toggle" id="menu-toggle"><i class="ion ion-ios-menu"></i></button>
        <form method="GET" action="" class="form-search">
          <input type="text" class="form-control" placeholder="Search.." name="">
          <button class="btn btn-search"><i class="ion ion-ios-search"></i></button>
          
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link text-black-50">
              <i class="ion ion-ios-notifications"></i>
              <span class="badge badge-danger">0</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="ion ion-ios-mail"></i>
              <span class="badge badge-info">1</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul> 
      </nav>
    </div>
    <div class="main-content">
    
      <?php
        if($q == null){
          include 'dashboard.php';
        }
        else{
          if($q == 'produk'){
            include 'tbl_produk.php';
          }
          if($q == 'tambah_produk'){
            include 'tambah_produk.php';
          }
          if($q == 'ubah_produk'){
            include 'ubah_produk.php';
          }
          if($q == 'kategori'){
            include 'tbl_kategori.php';
          }
          if($q == 'tambah_kategori'){
            include 'tambah_kategori.php';
          }
          if($q == 'ubah_kategori'){
            include 'ubah_kategori.php';
          }
          if($q == 'subkategori'){
            include 'tbl_subkategori.php';
          }
          if($q == 'tambah_subkategori'){
            include 'tambah_subkategori.php';
          }
          if($q == 'merek'){
            include 'tbl_merek.php';
          }
          if($q == 'tambah_merek'){
            include 'tambah_merek.php';
          }
          if($q == 'ubah_merek'){
            include 'ubah_merek.php';
          }

          
        }

      ?>
    </div>
  </div>

</div>






  <script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../assets/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.nice-select.min.js"></script>
  <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../assets/js/main.js"></script>
</body>

</html>