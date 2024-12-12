<?php
include 'header.php';
?>

<div class="rc-search pt-4 pb-4 bg-white">
 <div class="container-fluid col-md-11">
  <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="index.php">Home</a></li>
   <li class="breadcrumb-item">Search</li>
   <li class="breadcrumb-item active"></li>		
  </ol>
 
  <div class="row">
  	<div class="col-md-3">
  	 <div class="accordion" id="accordion">
	 	<div class="card" id="result">
	 	 <?php
	 	 	$sql = "SELECT DISTINCT kategori FROM produk ORDER BY kategori";
	 	 	$result = $koneksi->query($sql);
	 	 ?>	
	      	<div class="card-header  bg-white" id="">
		      <a class="" type="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          Kategori <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
	      	  </a>
	      	</div>
	      <div id="collapseOne" class="collapse show" aria-labelledby="" data-parent="#accordion">
	        <div class="card-body">
        	<?php
         		foreach($result as $kategori):
         	?>	
	         <p href=""><input type="checkbox" value="<?= $kategori['kategori'];?>" id="kategori" name=""> <span class="produk_check pl-2"><?= $kategori['kategori'];?></span></p>
	         <?php
	         	endforeach;
	         ?>
	      	</div>
	      </div>
	    </div>

	    <div class="card" id="result">
    	 <?php
		 	$sql = "SELECT DISTINCT merek FROM produk ORDER BY merek";
		 	$result = $koneksi->query($sql);
		 ?>
	      <div class="card-header bg-white" id="">
		          <a class="" type="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	          merek <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
	          </a>
	        
	      </div>
	      <div id="collapseTwo" class="collapse" aria-labelledby="" data-parent="#accordion">
	        <div class="card-body">
	        <?php
         		foreach($result as $merek):
         	?>	
	         <p href=""><input type="checkbox" name="" value="<?= $merek['merek'];?>" id="merek"> <span class="produk_check pl-2"><?= $merek['merek'];?></span></p>
	         <?php
	         	endforeach;
	         ?>
	        </div>
	      </div>
	    </div>
	    <div class="card" id="rating">
	      <div class="card-header  bg-white" id="">
		    <a class="" type="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	          Rating <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
	        </a> 
	      </div>
	      <div id="collapseThree" class="collapse" aria-labelledby="" data-parent="#accordion">
	        <div class="card-body">
	        <?php
	          for($i=1; $i<=5;$i++){?>
	          <input type="checkbox" name="">
	        	<?php 
        		 for($j=5; $j>=$i; $j--){?>
        		 <i class="ion ion-md-star"></i>	
        		 <?php } 		
        		 echo "</br>";
	          }
	        ?>	

	        </div>
	      </div>
	    </div>
	  </div>
  	</div>
  	<div class="col-md-9">
  	 <div class="rc-search-result">
  	    <p>Hasil pencarian</p><hr>	
  	    <div class="row">
  	      <?php
  	     	$search = $_GET['search'];
			$sql = "SELECT * FROM produk WHERE nama LIKE '$search%' ORDER BY id_produk DESC";
			$result_search = mysqli_query($koneksi,$sql);
			$row = mysqli_num_rows($result_search);	
  	      	foreach($result_search as $result):
  	      ?>	
  	      <div class="col-md-3 mb-2">
  	      	<div class="card item">
  	      	  <a href="detailProduk.php?id_produk=<?= $result['id_produk'];?>">
  	      	  	<div class="card-img">
  	      	  	  <img src="assets/img/produk/<?= $result['gambar'];?>">
  	      	    </div>	
  	      	    <div class="card-body">
  	      	  	  <p class="nama-produk mb-0" id="nama"><?= $result['nama'];?></p>
  	      	  	  <p class="harga mb-0" id="harga">Rp. <?= $result['harga'];?></p>
  	      	    </div>
  	      	    </a>	
  	      	</div>
  	      </div>
  	      <?php
  	      	endforeach;
  	      ?>	

  	      <?php
			if(isset($_POST['action'])){
				if(isset($_POST['kategori'])){
					$kategori = implode("','", $_POST['kategori']);
					$sql .="AND kategori IN(".$kategori.")";
				}
				if(isset($_POST['merek'])){
					$merek = implode("','", $_POST['merek']);
					$sql .="AND merek IN(".$merek.")";
				}

				echo$result = mysqli_query($koneksi,$sql);
				$output = '';
				if(mysqli_num_rows($result)> 0){
					while($data = mysqli_fetch_assoc($result)){
						$output.= '<div class="col-md-3 mb-2">
			  	      	<div class="card p-2">
			  	      	  <div class="card-body">
			  	      	  	<img src="assets/img/produk/"'.$data['image'].'" class="" width="100%" height="150">
			  	      	  	<p class="card-text" id="nama">'.$data['nama'].'</p>
			  	      	  	<div class="d-flex">
			  	      	  	  <button class="btn btn-addcart w-50 text-white" name="addcart"><i class="ti-shopping-cart"></i></button>
			  	      	  	  <input type="hidden" name="">
			  	      	  	  <button class="btn btn-wishlist w-50 text-white" name="addwishlist"><i class="ti-heart"></i></button><input type="hidden" name="">
			  	      	  	</div>
			  	      	  </div>	
			  	      	</div>
			  	      </div>';
					}
				}
				else{
					$output = "<p> Produk tidak ada </p>";
				}
			}

		  ?>
  	      </div>
  	    </div>	
  	  </div>
    </div>	
  </div>	
</div>

<?php
include 'footer.php';
?>

<style type="text/css">

.rc-search .accordion #rating .pe-7s-star{
	color: #EDED3E;
} 	
.rc-search .accordion .card{
	border: 1px solid #F0F0F0;
}
.rc-search .accordion .card-header{
	border-bottom: 1px solid #F0F0F0;
}
.rc-search-result .item{
	border: 2px solid #F0F0F0;
}
.rc-search-result .item:hover{
	box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 6px 0px;
}
.rc-search-result .item a{
	text-decoration: none;
}
.rc-search-result .card-img{
	padding: 20px;
	position: relative;
}
.rc-search-result .card-img img{
	object-fit: cover;
	width: 100%;
}
.rc-search-result .item .nama-produk{
	font-size: 16px;
	display: block;
	font-family: 'EpilogueSemiBold';
    display: -webkit-box;
    max-height: 42px;
    min-height: 42px;
    font-size: 14px;
    line-height: 1.5;
    -webkit-line-clamp: 2;
    color: #000;
   	-webkit-box-orient: vertical; 
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 0;
    white-space: normal;
    margin: 0 0 4px;
}
.rc-search-result .item .harga{
	color: #555;
	font-family: 'EpilogueLight';
}
</style>