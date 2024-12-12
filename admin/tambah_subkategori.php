<?php
  
if(isset($_POST['tambah'])){
	$kategori = $_POST['nama'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = "../assets/img/category/";
    $exe_img = move_uploaded_file($source,$folder.$nama_file);
	$table = 'category';
	$field = array('id_category','name','image');
	$value = array("null","'$kategori'","'$nama_file'");
	createCategory($table,$field,$value);
}
?>

<div class="main-create">
  <div class="main-title">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="" class=""><i class="ion ion-pie-graph"></i> Dashboard</a></li>
      <li class="breadcrumb-item active">Tambah Kategori</li>
    </ol>
  </div>

  <div class="create-form-area">	
    <div class="create-body">
      <form action="" method="POST" enctype="multipart/form-data"> 
        <div class="form-group">
          <input type="text" class="form-control" name="sub_category" placeholder="Sub Kategori">
        </div>
        <div class="form-group">
          <select name="" class="select mb-3 w-100" id="">
            <option value="">Kategori</option>
            <?php
                $sql = "SELECT * FROM kategori";
                $result = mysqli_query($koneksi,$sql);
              ?>
              <?php foreach($result as $kategori): ?>
              <option><?= $kategori['nama']; ?></option>
              <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
          <!-- <input type="text" class="form-control" name="icon" placeholder="Icon"> -->
          <input type="file" class="form-control" name="gambar">
        </div>
        <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
        <a href="index.php?q=subcategory" class="btn btn-danger">Batal</a>
      </form>
    </div>	
  </div>
</div>
