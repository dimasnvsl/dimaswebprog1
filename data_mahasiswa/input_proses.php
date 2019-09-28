<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email =$_POST['email'];

  
        

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO siswa VALUES ( null,'$nama', '$username','$password','$email')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("gagal menyimpan data: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");



//cek dahulu, jika tombol tambah di klik


 // memasukkan file koneksi ke database
 /*include('koneksi.php');
if(isset($_POST['input'])){
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $nama  = $_POST['nama']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $username  = $_POST['username']; //membuat variabel $username dan datanya dari inputan Semester
 $password  = $_POST['password']; //membuat variabel $password dan datanya dari inputan dropdown Kelas
 $email = $_POST['email']; //membuat variabel $email dan datanya dari inputan dropdown Prodi

//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
 $query = "INSERT INTO mahasiswa VALUES(NULL, '$nama', '$username', '$password', '$email')";
$result = mysqli_query($link, $query);
 //jika query input sukses
 if($result){

  echo "Data berhasil di tambahkan! ";  //Pesan jika proses tambah sukses
  echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah

 }else{

  echo "Gagal menambahkan data! ";  //Pesan jika proses tambah gagal
  echo '<a href="input.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah

 }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 header("location:index.php");

}*/



?>
