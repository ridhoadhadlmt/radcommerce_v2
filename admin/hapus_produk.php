<?php

$id = $_GET['id_produk'];

$table = 'produk';
$kondisi = "WHERE id_produk = $id";

deleteProduct($table,$kondisi);
?>