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
      var cek = document.forms['cekForm']['nama'].value;
      var cek = document.forms['cekForm']['username'].value;
      var cek = document.forms['cekForm']['password'].value;
      var cek = document.forms['cekForm']['email'].value;
         if(cek==null || cek=="")
         {
           alert("Form harus di isi !!!");
           return false;
         }
    }
</script>
      <h1>Input Data</h1>
    <div class="container">
      <form id="form_siswa" action="input_proses.php" method="post" name="cekForm" onSubmit="return cekFile()">
        <fieldset>
        <legend>Input Data siswa</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="">
          </p>
          <p>
         <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" size="30">
            </td>
           </tr>
         </p>
         <p>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" size="30"></td>
           </tr>
         </p>
         <p>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" size="30" ></td>
           </tr>
         </p>
        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
           <a href="index.php" class="btn btn-danger">Back</a>
        </p>
    </div>
  </body>
</html>