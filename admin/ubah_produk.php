<?php

$id = $_GET['id_produk'];
$kondisi = "WHERE id_produk = $id";
$table = 'produk';
$field = '*';
$sql = "SELECT ".$field." FROM ".$table." WHERE id_produk = ".$id."";
$result = mysqli_query($koneksi,$sql);
$fetch = mysqli_fetch_array($result);
?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
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
            echo$sql = "SELECT * FROM kategori_produk";
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
        <input type="text" class="form-control" name="stok" placeholder="Stok">
      </div>
      <div class="form-group">
        <textarea name="deskripsi" class="ckeditor" id="ckeditor"></textarea>
      </div>
      <div class="form-group">
        <input type="file" class="" placeholder="" class="form-control" name="gambar">
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>