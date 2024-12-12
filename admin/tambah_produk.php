<?php
  
if(isset($_POST['tambah'])){
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$merek = $_POST['merek'];
	$kategori = $_POST['kategori'];
	$stok = $_POST['stok'];
  $deskripsi = $_POST['deskripsi'];
	$nama_file = $_FILES['gambar']['name'];
	$source = $_FILES['gambar']['tmp_name'];
	$folder = "../assets/img/produk/";
	$exe_img = move_uploaded_file($source,$folder.$nama_file);

	$table = 'produk';
	$field = array('nama,harga,merek,kategori,stok,deskripsi,gambar');
	$value = array("'$nama'","'$harga'","'$merek'","'$kategori'","'$stok'","'$deskripsi'","'$nama_file'");
	createProduct($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
      <div class="form-group">
        <input type="file" class="" placeholder="" class="form-control-file" name="gambar">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Nama Produk" name="nama">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Harga" name="harga">
      </div>  
      <div class="form-group">
        <select class="select-merek form-control" id="merek" name="merek">
          <option>Pilih Merek</option>
          <?php
            $sql = "SELECT * FROM merek ORDER BY merek.nama ASC";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $kategori):
          ?>
          <option><?= $kategori['nama'];?></option>
          <?php
            endforeach;
          ?> 
        </select>
      </div>        
      <div class="form-group">
        <select class="select-kategori form-control" id="kategori" name="kategori">
        <option value="">Kategori</option>
          <?php
            echo$sql = "SELECT * FROM kategori";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $kategori):
          ?>
          <option><?= $kategori['nama'];?></option>
          <?php
            endforeach;
          ?> 
        </select>
      </div>
      <div class="form-group">
        <select class="select-kategori form-control" id="kategori" name="kategori">
        <option value="">Subkategori</option>
          <?php
            echo$sql = "SELECT * FROM subkategori";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $subkategori):
          ?>
          <option><?= $subkategori['nama_subkategori'];?></option>
          <?php
            endforeach;
          ?> 
        </select>
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="stok" placeholder="Stok">
      </div>
      
      <div class="form-group">
        <textarea name="deskripsi" class="ckeditor" id="ckeditor"></textarea>
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
