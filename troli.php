<?php
  include 'header.php';
  
  if(!isset($_SESSION['level'])){
    header('location:auth/login.php');
  }
  else{
    $_SESSION['level'] = 'customer';
  }


  if(isset($_POST['hapus'])){
    // print_r($_GET['id_produk']);
    if($_GET['aksi'] == 'hapus'){
      foreach($_SESSION['cart'] as $key => $value){
        if($value["id_produk"] == $_GET['id_produk']){
          unset($_SESSION['cart'][$key]);
        }
      }

    }
  }



?>

<div class="rc-troli-area pt-3 pb-3">
  <div class="container col-md-11">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
     <li class="breadcrumb-item active">Troli</li>
    </ol>
    <div class="row">
      <div class="col-md-7">
        <?php
          $sql = mysqli_query($koneksi,"SELECT * FROM produk");
          $total = 0;

          if(isset($_SESSION['cart'])){
            $id_produk = array_column($_SESSION['cart'],"id_produk");
            $result = $sql;
          
            while($row = mysqli_fetch_assoc($result)){
              foreach($id_produk as $produk){ 
               if($row['id_produk'] == $produk){ ?>

                <div class="rc-item-area">
                  <form action="troli.php?aksi=hapus&id_produk=<?= $row['id_produk'] ?>" method="POST"> 
                    <div class="item">
                      <div class="item-img">
                        <img src="assets/img/produk/<?= $row['image'];?>">
                      </div>
                      <div class="item-info">
                        <h5 class="nama-produk"><?= $row['nama']; ?></h5>
                        <h6 class="harga">Rp. <?= number_format($row['harga']); ?></h6> 
                      </div>
                      <div class="item-aksi">
                        <input type="number" class="input-number" value="1" name="">
                        <button class="btn btn-hapus" name="hapus">Hapus
                        </button>  

                      </div>
                    </div>
                  </form>
                </div>
               <?php 
               $total = $total + (int)$row['harga']; }
                
              }    
            }

          }
          else{?>
            <h5><i class="ion ion-ios-cart"></i> Troli Masih Kosong</h5>
          <?php }
       
        ?>
      </div>
      <div class="col-md-5">
        <div class="rc-checkout-area">
          <div class="checkout-header">
            <h5>Detail pesanan anda</h5>
            
          </div>
          <div class="checkout-body">
            <div class="detail">
              <h6>Jumlah Barang</h6>
              <h6>Biaya Pengiriman</h6>
              <h6>Total </h6>
            </div>
            <div class="value">
             <?php
              if(isset($_SESSION['cart'])){
                $count = count($_SESSION['cart']);
                echo "<h6>: $count</h6>";
              }
             ?>
             <h6>: Gratis</h6> 
             <h6>: Rp. <?= number_format($total);?></h6>
            </div>
            
          </div>
          <div class="checkout-footer">
            <button class="btn btn-checkout w-100">Checkout</button>
          </div>
        </div> 
      </div>      
    </div>  
  </div> 
</div>

<div class="rc-rekomendasi-area">
  <div class="container col-md-11">
    <div class="row">
      <div class="col-md-7">
        <div class="rc-rekomendasi-produk">
        <h6>Rekomendasi Produk</h6>
          
        </div>
      </div>  
    </div> 
  </div> 
</div>

<?php
require_once 'footer.php';
?>  

<style type="text/css">

.rc-item-area .item{
  display: flex;
  background-color: #FFF;
  margin-bottom: 10px;
  padding: 15px;
  border-radius: 8px;
}
.rc-item-area .item-img{
  width: 10%;
}
.rc-item-area .item-img img{
  object-fit: cover;
  width: 100%;
}
.rc-item-area .item-info{
  width: 50%;
  padding-left: 15px;
}
.rc-item-area .item-info .nama-produk{
  font-family: 'OpenSansSemiBold';
}
.rc-item-area .item-info .harga{
  color: #10C879;
}
.rc-item-area .item-aksi{
  width: 40%;
  margin: 20px auto;
}
.rc-item-area .item-aksi .btn-hapus{
  background-image: linear-gradient(180deg, #E84646, #CC1F1F);
  border-color: #E84646;
  color: #FFF;
  padding: 5px 15px;
  border-radius: 8px;
}
.rc-checkout-area{
  background-color: #FFF;
  border-radius: 8px;
}
.rc-checkout-area .checkout-header{
  padding: 10px 15px;
  border-bottom: 1px solid #F0F0F0;
}
.rc-checkout-area .checkout-body{
  padding: 15px;
  display: flex;
}
.rc-checkout-area .checkout-footer{
  padding: 10px 15px;
}
.rc-checkout-area .checkout-footer .btn{
  background-image: linear-gradient(180deg,#10C879,#57BD91);
  border-color: #10C879;
  color: #FFF;
}
.rc-rekomendasi-produk{
  background-color: #FFF;
  padding: 10px 15px;
}
</style>