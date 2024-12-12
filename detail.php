
<?php
  include 'header.php';

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
  if(isset($_POST['addwishlist'])){
    // print_r($_POST['id_produk']);

    if(isset($_SESSION['wishlist'])){
      $item_array_id =  array_column($_SESSION['wishlist'],'id_produk');

      if(in_array($_POST['id_produk'],$item_array_id)){
        echo "<script>alert('Produk telah ditambahkan di Wishlist') </script>";
        echo "<script>window.location='index.php'</script>";
      }
      else{
        $count =  count($_SESSION['wishlist']);    
        $item_array = array(
        'id_produk' => $_POST['id_produk']
      );
      $_SESSION['wishlist'][$count] = $item_array;
      // print_r($_SESSION['wishlist']);    
      }
    }
    else{
      $item_array = array(
        'id_produk' => $_POST['id_produk']
      );

      $_SESSION['wishlist'][0]= $item_array;
      // print_r($_SESSION['wishlist']);
    }
  }


?>
<div class="rc-detail-section mb-2 pt-4 pb-4 bg-white">
  <?php
    $id = $_GET['id_produk'];
    $kondisi = "WHERE id_produk = $id";
    $sql = "SELECT * FROM produk WHERE id_produk = $id";
    $exe = mysqli_query($koneksi,$sql);
    $ftch = mysqli_fetch_assoc($exe);
  ?>
  <div class="container col-md-11" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><?= $ftch['kategori'];?></li>
      <li class="breadcrumb-item active"><?= $ftch['merek'];?></li>
    </ol>
    <div class="detail-content">
      <div class="card">
        <div class="card-body">
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-4">
                <div class="detail-img">
                  <img src="assets/img/produk/<?= $ftch['gambar'];?>" class="img-fluid" alt=""> 
                </div>
              </div> 
              <div class="col-md-8">
                <div class="detail-info">
                    <h3 class="name"><?= $ftch['nama'];?></h3> 
                    <h6 class="merek">Merek : <?= $ftch['merek'];?></h6>
                    <hr>
                    <h6 class="price">Harga : <span>Rp. <?= number_format($ftch['harga']);?></span></h6>
                    <hr>
                    <h6 class="total">Jumlah : 
                      <div class="qty-cta d-inline">
                        <div class="btn-group">
                         <button class="btn btn-sm btn-minus"><i class="ion ion-android-remove"></i></button>
                          <input type="text" value="1" class="" name="">
                         <button class="btn btn-sm btn-plus"><i class="ion ion-android-add"></i></button> 
                        </div>
                        <!-- <input type="number" value="1" class="" name=""> -->
                      </div>  
                    </h6>
                    <hr>
                    <div class="order-cta d-flex">
                      <div class="cart mr-2">
                        <button class="btn btn-cart" name="addcart">
                        Tambah Troli
                        </button>
                        <input type="hidden" name="id_produk" value="<?= $ftch['id_produk'];?>">
                      </div>
                      <div class="wishlist">
                        <button class="btn btn-wishlist" name="addwishlist" id="wishlist" style="">
                        Wishlist
                        </button>
                        <input type="hidden" name="id_produk" value="<?= $ftch['id_produk'];?>">
                      </div>
                    
                    </div>
                  <hr>
                  <h6>Spesifikasi</h6> 
                  <p><?= $ftch['deskripsi']?></p>
                </div>
              </div> 
            </div>
          </form>     
        </div>
      </div>
    </div>
  </div> 
</div>

<?php
require_once 'footer.php';
?>

