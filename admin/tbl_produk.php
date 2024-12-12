<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM product ORDER BY id_product DESC");
?>

<div class="main-list">
  <div class="main-title">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="" class=""><i class="ion ion-pie-graph"></i> Dashboard</a></li>
      <li class="breadcrumb-item active">Produk</li>
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
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Merek</th>
            <th>Kategori</th>
            <th>Sub Kategori</th>
            <th>Total</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach($sql as $produk):
        ?>
          <tr>
            <td><input type="checkbox" name=""></td>
            <td><?= $produk['id_product'];?></td>
            <td><?= $produk['name'];?></td>
            <td><?= $produk['price'];?></td>
            <td><?= $produk['merek'];?></td>
            <td><?= $produk['category'];?></td>
            <td><?= $produk['subcategory'];?></td>
            <td><?= $produk['quantity'];?></td>
            <td><?= $produk['description'];?></td>
            <td><?= $produk['image'];?></td>
            <td>
              <a href="index.php?q=edit_produk&id_produk=<?= $produk['id_produk'];?>" class="btn btn-sm btn-success">Edit</a>
              <a href="delete_produk.php?id_produk=<?= $produk['id_produk'];?>" class="btn btn-sm btn-danger">Hapus</a>
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

