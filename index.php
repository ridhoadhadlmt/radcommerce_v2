
<?php
 
  include 'header.php';

  if(isset($_POST['addwishlist'])){

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
    }
  }
  else{
    $item_array = array(
      'id_produk' => $_POST['id_produk']
    );

    $_SESSION['wishlist'][0]= $item_array;
  }
}
  
?>

<!-- Carousel -->

<section class="rc-banner-section bg-white pt-3 pb-3">
  <div class="banner-content">
    <div class="owl-carousel owl-theme banner-slider">
      <?php
        for($i = 1; $i <5; $i++):
      ?> 
      <div class="owl-items">
        <div class="owl-img">
          <img src="assets/img/banner/item1.jpg">
        </div> 
      </div>
      <?php
        endfor
      ?>
    </div>
  </div> 
</section>

<section class="rc-category-section pt-4 pb-4 mt-2 bg-white">
  <div class="container col-md-11">
    <div class="category-content">
      <div class="owl-carousel owl-theme category-slider">
          <?php
            $sql = "SELECT * FROM kategori_produk ORDER BY id_kategori ASC";
            $exe = mysqli_query($koneksi, $sql);
            
            foreach($exe as $kategori):
          ?>
          <a href="">
            <div class="items d-flex">
              <div class="category-img w-50" >
                <img src="assets/img/kategori/<?= $kategori['gambar'] ?>" class="img-fluid">
              </div>
              <div class="category-desc w-50">
                <p class="name"><?= $kategori['nama'] ?></p>
                <small class="total"> Item</small>
              </div>
            </div>
          </a>
          <?php
        endforeach;
          ?>
      </div>
    </div>
    
  </div> 
</section>


<section class="rc-flashsale-section mt-2 mb-2 pt-4 pb-4 bg-white">
  <div class="container col-md-11">
    <div class="flashsale-content">
      <div class="flashsale-title mb-3">
        <p width="">Flashsale</p> 
      </div>
      <div class="row">
        <div class="col-md-3">
          

        </div>
        <div class="col-md-9">
          <div class="owl-carousel owl-theme flashsale-slider">
            <?php 
              $sql = "SELECT * FROM produk LIMIT 3,6";
              $result = mysqli_query($koneksi,$sql);
              foreach($result as $flashsale):
              
            ?>
            <div class="fs-items">
              <a href="">
                <div class="fs-img">
                  <img src="assets/img/produk/<?= $flashsale['gambar'] ?>" >
                </div> 
                <div class="fs-desc">
                  <h6 class="name"><?= $flashsale['nama'];?></h6>
                  <h6 class="price">Rp. <?= number_format($flashsale['harga']);?></h6>
                </div>
              </a>
            </div> 
            <?php
             endforeach;
            ?>  
          </div>
        </div> 
      </div>
    </div> 
  </div> 
</section>

<div class="rc-banner mt-2 mb-2 pt-4 pb-4 bg-white">
  <div class="container-fluid col-md-11">
    <div class="row big-banner my-3">
      <div class="col-md-12">
        <div class="banner-img">
          <img src="assets/img/banner/large-banner.jpg" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="row small-banner my-3">
      <div class="col-md-3">
        <div class="banner-img">
          <img src="assets/img/banner/b1.jpg" class="img-fluid">
        </div>
      </div>
      <div class="col-md-3">
        <div class="banner-img">
        <img src="assets/img/banner/b2.jpg" class="img-fluid">
      </div>
      </div>
      <div class="col-md-3">
        <div class="banner-img">
        <img src="assets/img/banner/b3.jpg" class="img-fluid">
      </div>
      </div>
      <div class="col-md-3">
        <div class="banner-img">
        <img src="assets/img/banner/b4.jpg" class="img-fluid">
      </div>
      </div>
    </div>
  </div>  
</div>

<section class="rc-new-section bg-white pt-4 pb-4 mt-2">
  <div class="container-fluid col-md-11">
    <div class="new-title mb-3">
      Produk terbaru <span class="float-right"><a href="search.php?search=">Lihat semua</a></span>
    </div>
    <div class="new-content">
        <div class="owl-carousel owl-theme new-product">
          <?php
            $sql = "SELECT * FROM produk";
            $result = mysqli_query($koneksi,$sql);
            foreach($result as $new):
          ?> 
          <div class="np-items">
            <a href="detail.php">
              <div class="np-img">
                <img src="assets/img/produk/<?= $new['gambar'] ?>" class="" width="" height="">
              </div>
              <div class="np-desc">
                <p class="name"><?= $new['nama'];?>Laptop</p> 
                <p class="price">Rp. <?= number_format($new['harga']);?>  123.456</p>  
              </div>
            </a>
          </div> 
      <?php
        endforeach;
      ?> 
      </div>
    </div> 
  </div> 
</section>

<section class="rc-best-section bg-white pt-4 pb-4 mt-2">
  <div class="container col-md-11">
    <p>Paling Laris <span class="float-right"><a href="search.php?search=">Lihat semua</a></span></p>     
      <div class="best-content">
          <!-- <div class="wishlist">
              <button class="btn btn-sm btn-wishlist" name="addwishlist">
                <i class="ion ion-md-heart"></i>
              </button>
              <input type="hidden" name="id_produk" value="<?= $hot['id_produk'];?>">  
            </div> -->
            <!-- <div class="cart">
                <button class="btn btn-light  text-white btn-cart" name="addcart">
                  <i class="pe-7s-cart"></i>Add to cart
                </button>
                <input type="hidden" name="id_produk" value="<?= $hot['id_produk'];?>">
              </div> -->
            <div class="owl-carousel owl-theme best-product">
              <?php
                $sql = "SELECT * FROM produk LIMIT 1,6";
                $result = mysqli_query($koneksi,$sql);
                foreach($result as $best):
              ?>
              <div class="bs-items">
                <a href="detail.php">
                  <div class="bs-img">
                    <img src="assets/img/produk/<?= $best['gambar'] ?>" class="" width="" height="">
                  </div>
                  <div class="bs-desc">
                    <p class="name" ><?= $best['nama'];?></p> 
                    <p class="price" ><?= number_format($best['harg_produka']);?></p>
                  </div>
                </a>
              </div>
              <?php
                endforeach;
              ?> 
            </div>
     </div>     
  </div> 
</section>



<?php
include 'footer.php';
?>