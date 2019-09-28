<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
	$nama	= $_POST['nama'];
	$username	= $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE siswa";
  $query .= " nama = '$nama', ";
  $query .= "username='$username', ";
  $query .= "password = '$password', email='$email' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");

?>