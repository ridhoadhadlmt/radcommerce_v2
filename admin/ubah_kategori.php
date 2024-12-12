<?php

$id = $_GET['id_kategori'];
$table = 'kategori';
$field = '*';
$sql = "SELECT ".$field." FROM ".$table." WHERE id_kategori = ".$id."";
$result = mysqli_query($koneksi,$sql);
$fetch = mysqli_fetch_array($result);

if(isset($_POST['ubah'])){
	$kategori = $_POST['nama'];
	$slug_kategori = $_POST['slug_kategori'];
  $nama_file = $_FILES['gambar']['name'];
  $source = $_FILES['gambar']['tmp_name'];
  $folder = "../assets/img/kategori/";
  $exe_img = move_uploaded_file($source,$folder.$nama_file);
	$table = 'kategori';
	$field = array('id_kategori','nama','slug_kategori','gambar_kategori');
	$value = array("null","'$kategori'", "'$slug_kategori'","'$nama_file'");
	UpdateCategory($table,$field,$id);
}

?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" value="<?= $fetch['nama']?>"  name="nama" placeholder="Kategori">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" value="<?= $fetch['slug_kategori']?>" name="slug_kategori" placeholder="Slug Kategori">
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="gambar">
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Ubah</button>
      <a href="index.php" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
