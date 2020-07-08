<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include('koneksi.php');       
        $id=$_GET['id'];
    $query_ver = mysqli_query($koneksi,"select * from regist_sementara where id_regist = '$id';");
    $c = mysqli_fetch_array($query_ver);
        if(isset($_POST['verif']))
        {
          $nama = $_POST['nama'];
          $user = $_POST['user'];
          $pass = $_POST['password'];

              $query_input = mysqli_query($koneksi,"insert into user values ('','$nama','$user','$pass')");
          if($query_input)
          {
              echo "<script>alert('Verifikasi Berhasil'); window.location=('dashboardadmin.php')</script>";
          }
          else
          {
              echo "<h1>Verifikasi Gagal</h1>";
          }   
        }
      ?>
      <form method="post" class="form" action="">
        <label style="padding-top:10px">Nama</label>
        <input class="form-content" type="text" name="nama" value="<?php echo $c['nama'] ?>"/>
        <div class="form-border"></div>
        <label style="padding-top:10px">Email</label>
        <input class="form-content" type="text" name="user" value="<?php echo $c['user'] ?>"/>
        <div class="form-border"></div>
        <label style="padding-top:10px">Password</label>
        <input class="form-content" type="password" name="password" value="<?php echo $c['password'] ?>"/>
        <div class="form-border"></div>
        <input class="submit-btn" type="submit" name="verif" value="Verifikasi" />
      </form>
    </div>
  </div>
</body>
</body>
</html>