<?php

include 'koneksi.php';

if(isset($_POST['addcart'])){
  // print_r($_POST['id_produk']);

  if(isset($_SESSION['cart'])){
    $item_array_id =  array_column($_SESSION['cart'],'id_produk');

    if(in_array($_POST['id_produk'],$item_array_id)){
      echo "<script>alert('Produk telah ditambahkan di Troli') </script>";
      echo "<script>window.location='index.php'</script>";
    }
    else{
      $count =  count($_SESSION['cart']);    
      $item_array = array(
      'id_produk' => $_POST['id_produk']
    );
    $_SESSION['cart'][$count] = $item_array;
    // print_r($_SESSION['cart']);    
    }
  }
  else{
    $item_array = array(
      'id_produk' => $_POST['id_produk']
    );

    $_SESSION['cart'][0]= $item_array;
    // print_r($_SESSION['cart']);
  }
}

?>