<?php
  
if(isset($_POST['tambah'])){
	$kategori = $_POST['nama'];
	$slug_kategori = $_POST['slug_kategori'];
  $nama_file = $_FILES['gambar']['name'];
  $source = $_FILES['gambar']['tmp_name'];
  $folder = "../assets/img/kategori/";
  $exe_img = move_uploaded_file($source,$folder.$nama_file);
	$table = 'kategori';
	$field = array('id_kategori','nama','slug_kategori','gambar_kategori');
	$value = array("null","'$kategori'","'$slug_kategori'","'$nama_file'");
	createCategory($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Kategori">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="slug_kategori" placeholder="Slug Kategori">
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="gambar">
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
