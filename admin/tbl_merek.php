<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM merek ORDER BY id_merek ASC");
?>


<div class="main-list">
  <div class="main-title">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="" class=""><i class="ion ion-pie-graph"></i> Dashboard</a></li>
      <li class="breadcrumb-item active">Merek</li>
    </ol>
  </div>
  <div class="table-area">
    <div class="table-header">
      
    </div>  
    <div class="table-body">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th>No</th>
            <th>Nama merek</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach($sql as $merek):
        ?>
          <tr>
            <td><input type="checkbox" name=""></td>
            <td><?= $i ?></td>
            <td><?= $merek['nama'];?></td>
            <td><img src="../assets/img/merek/<?= $merek['logo_merek'];?>" alt=""></td>
            <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
              <!-- <a href="index.php?q=edit_produk&id_produk=<?= $merek['id_produk'];?>" class="btn btn-success">Edit</a>
              <a href="delete_produk.php?id_produk=<?= $merek['id_produk'];?>" class="btn btn-danger">Hapus</a> -->
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

