<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori ASC");
?>

<div class="content-hero">
  <h4 class="content-title">
    <i class="ion ion-ios-pie">
    </i>
    Kategori
  </h4>
</div>
<div class="d-flex justify-content-between">
  <div class="content-breadcrumb">
    <nav class="breadcrumb bg-transparent pl-0">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item active">Kategori</li>
    </nav>
  </div>
  <div class="content-cta">
    <a href="index.php?q=tambah_kategori" class="btn btn-primary btn-md">Tambah Data</a>
    <!-- <button class="btn btn-primary btn-md"><i class="ion ion-md-add"></i> Tambah Data</button> -->
  </div>

</div>
<div class="main-card card">
  <div class="card-body table-area">
    <div class="table-header">
      
    </div>  
    <div class="table-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover ">
          <thead class="text-center">
            <tr>
              <th width="5%">#</th>
              <th width="5%">No</th>
              <th width="15%">Kategori</th>
              <th width="15%">Slug Kategori</th>
              <th width="30%">Gambar</th>
              <th width="45%">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
          <?php
          $i = 1;
          foreach($sql as $kategori):
          ?>
            <tr>
              <td width="5%"><input type="checkbox" name=""></td>
              <td width="5%"><?= $i ?></td>
              <td width="15%"><?= $kategori['nama'] ?></td>
              <td width="15%"><?= $kategori['slug_kategori'] ?></td>
              <td width="25%"><img src="../assets/img/kategori/<?= $kategori['gambar_kategori'] ?>" width="15%"  alt=""></td>
              <td width="35%">
                <a href="index.php?q=ubah_kategori&id_kategori=<?= $kategori['id_kategori']?>" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <?php
            $i++;
          endforeach;
            ?>
          </tbody>
        </table>

      </div>
    </div> 
  </div>
</div>
