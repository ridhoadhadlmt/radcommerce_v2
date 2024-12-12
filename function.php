<?php

function createProduct($table,$field,$value){
	global $koneksi;

	$fieldCreate = implode(",", $field);
	$valueCreate = implode(",", $value);

	$sql = "INSERT INTO ".$table."(".$fieldCreate.") VALUES (".$valueCreate.") ";
	$result = mysqli_query($koneksi,$sql);

	if($result){
		echo "<script>Swal.fire('Berhasil')</script>";	
		// header('location:index.php?q=produk');
	}
	else{
		// header('location:index.php?q=tambah_produk');
	}
}
function TambahMerek($table,$field,$value){
	global $koneksi;

	$fieldCreate = implode(",", $field);
	$valueCreate = implode(",", $value);

	$sql = "INSERT INTO ".$table."(".$fieldCreate.") VALUES (".$valueCreate.") ";
	$result = mysqli_query($koneksi,$sql);

	if($result){
		// echo "<script>Swal.fire('Berhasil')</script>";	
		// header('location:index.php?q=produk');
		
	}
	else{
		echo $sql;
		// header('location:index.php?q=tambah_produk');
	}
}	
function deleteProduct($table,$kondisi=''){
	global $koneksi;

	$sql = "DELETE FROM $table $kondisi";
	$result = mysqli_query($koneksi,$sql);
	if($result){
	}
	else{
	}
}



function createmerek($table,$field,$value){
	global $koneksi;

	$fieldCreate = implode(",", $field);
	$valueCreate = implode(",", $value);

	$sql = "INSERT INTO ".$table."(".$fieldCreate.") VALUES (".$valueCreate.") ";
	$result = mysqli_query($koneksi,$sql);

	if($result){
		echo "<script>Swal.fire('Berhasil')</script>";	
		// header('location:index.php?q=merek');
	}
	else{
		echo $sql;
		// header('location:index.php?q=tambah_merek');
	}
}	
function createCategory($table,$field,$value){
	global $koneksi;

	$fieldCreate = implode(",", $field);
	$valueCreate = implode(",", $value);

	$sql = "INSERT INTO ".$table."(".$fieldCreate.") VALUES (".$valueCreate.") ";
	$result = mysqli_query($koneksi,$sql);

	if($result){
		echo "<script>Swal.fire('Berhasil')</script>";	
		// header('location:index.php?q=kategori_produk');
	}
	else{
		echo $sql;
		// header('location:index.php?q=tambah_merek');
	}
}
function updateCategory($table,$field,$id=''){
	global $koneksi;

	$fieldUpdate = implode(",", $field);
	$sql = "UPDATE $table SET $field WHERE $id";
	$result = mysqli_query($koneksi,$sql);

	if($result){
		echo "<script>Swal.fire('Berhasil')</script>";	
		// header('location:index.php?q=kategori_produk');
	}
	else{
		echo $sql;
		// header('location:index.php?q=tambah_merek');
	}
}	
?>