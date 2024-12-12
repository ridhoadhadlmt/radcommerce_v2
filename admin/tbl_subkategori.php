<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM subkategori ORDER BY id_subkategori ASC");
?>


<div class="main-list">
  <div class="main-title">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="" class=""><i class="ion ion-pie-graph"></i> Dashboard</a></li>
      <li class="breadcrumb-item active">Subkategori</li>
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
            <th>Nama SubKategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach($sql as $kategori):
        ?>
          <tr>
            <td><input type="checkbox" name=""></td>
            <td><?= $i ?></td>
            <td><?= $kategori['nama_subkategori'] ?></td>
            <td>
              <a href="" class="btn btn-success">Edit</a>
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
