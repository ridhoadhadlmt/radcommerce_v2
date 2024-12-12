<?php
  
if(isset($_POST['tambah'])){
	$nama = $_POST['nama'];
  $slug_merek = '';
  $slug_merek = preg_replace('/[^a-z0-9]+i','-',trim(strtlower($_POST['nama'])));
  $logo_merek = $_POST['logo_merek'];
  $nama_file = $_FILES['logo_merek']['name'];
	$source = $_FILES['logo_merek']['tmp_name'];
	$folder = "../assets/img/merek";
	$table = 'merek';
	$field = array('id_merek','merek_name','merek_slug','merek_logo');
	$value = array("null","'$nama'","'$slug_merek'","'$nama_file'");
	TambahMerek($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  
  <form action="" method="POST" enctype="multiple/form-data"> 
    <div class="card-body">	
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Merek">
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="logo_merek">
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php" class="btn btn-danger">Batal</a>
    </div>	
  </form>
</div>
