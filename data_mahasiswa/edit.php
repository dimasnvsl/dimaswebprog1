<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM siswa WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $email = $data["email"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body style="background-image: url(images/blue.png); background-size: cover;">
  <body>

    <script>
    function cekFile() {
       var cek = document.forms['cekForm']['nim'].value;
      var cek = document.forms['cekForm']['nama'].value;
      var cek = document.forms['cekForm']['username'].value;
      var cek = document.forms['cekForm']['password'].value;
      var cek = document.forms['cekForm']['email'].value;
      var cek1 = document.forms['cekForm']['semester'].value;
      var cek1 = document.forms['cekForm']['kelas'].value;
      var cek1 = document.forms['cekForm']['prodi'].value;
         if(cek==null || cek=="")
         {
           alert("Form harus di isi !!!");
           return false;
         }if(cek1==null || cek1=="")
         {
           alert("Form harus di pilih !!!");
           return false;
         }
    }
    </script>
     <h1>Edit Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Mahasiswa</legend>
        <p>
           <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" ></td>
           </tr>
          </p>
          <p>
            <td>Username</td>
              <td>:</td>
              <td><input type="text" name="username" size="30" value="<?php echo $data['username']; ?>">
              </td>
             </tr>
          </p>       
          <p>
           <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" size="30" value="<?php echo $data['password']; ?>"></td>
           </tr>
          </p>
          <p >
           <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" size="30" value="<?php echo $data['email']; ?>"></td>
           </tr>
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
          <a href="index.php" class="btn btn-danger">Back</a>
        </p>
      </form>
  </body>
</html>