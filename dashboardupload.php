<?php
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Mahasiswa</title>
    <style type="text/css">
    a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, black, white);
  background-repeat: no-repeat;
  background-size: 3000px;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
.card {
  background: white;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 540px;
  margin: 2rem auto 8.1rem auto;
  width: 329px;
  margin-left:3%;
}
.card-content {
  padding: 12px 44px;
}
.card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 3px;
  text-align: center;
}
.signup {
  color: black;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
.submit-btn {
  background: -webkit-linear-gradient(right, black, white);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px blue;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 30px;
  margin: 0 auto;
  margin-top: 120px;
  transition: 0.25s;
  width: 153px;
  margin-left:-30px;
}
.submit-btn:hover {
  box-shadow: 0px 1px 18px white;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;

}
.form-border {
  background: -webkit-linear-gradient(right, blue, black);
  height: 1px;
  width: 100%;

}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, blue, black);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
.table 
{
    margin-left:150%;
    margin-top:-100%;
    width:150%;
}
  </style>
</head>
<body>
  <?php
if(isset($_POST['up']))
      {
        $nama= $_POST['nama'];
        $dir = "pdf/";
        $nf = basename($_FILES['ijasah']['name']);
        $url = $dir.$nf;
        $nf1 = basename($_FILES['kk']['name']);
        $url1 = $dir.$nf1;
        $nf2 = basename($_FILES['skl']['name']);
        $url2 = $dir.$nf2;

        if (move_uploaded_file($_FILES['ijasah']['tmp_name'], $url) && move_uploaded_file($_FILES['kk']['tmp_name'], $url1) && move_uploaded_file($_FILES['skl']['tmp_name'], $url2))
        {
          $query = mysqli_query($koneksi,"insert into fileup values ('','$nama','$url','$url1','$url2')");
          if($query)
          {
            echo "<script type='text/javascript'>
                alert('Upload Berhasil');</script>" ;
          } 
          else
          {
            echo "<script type='text/javascript'>
                alert('Upload Gagal');</script>" ;
          } 
        }
        else
        {
            echo "<script type='text/javascript'>
                alert('Upload Gagal');</script>" ;
        } 

      }
?>
<div class="card">
    <div class="card-content">
      <div class="card-title">
        <h3> - Upload File -</h3>
        <div class="underline-title"></div>
      </div>
     <?php 

     ?>
        <form method="post" class="form" action="" enctype="multipart/form-data">
        <label style="padding-top:10px">Nama :</label>
        <input class="form-content" type="text" name="nama" />
        <div class="form-border"></div>
        <label style="padding-top:10px">Ijasah :</label>
        <input class="form-content" type="file" name="ijasah"/>
        <div class="form-border"></div>
        <label style="padding-top:10px">Kartu Keluarga :</label>
        <input class="form-content" type="file" name="kk"/>
        <div class="form-border"></div>
        <label style="padding-top:10px">Surat Keterangan Lulus :</label>
        <input class="form-content" type="file" name="skl"/>
        <div class="form-border"></div>
        <input class="submit-btn" type="submit" name="up" value="Upload" />
        <a align="center" style="padding-top: 5px; margin-left: 130px; margin-top:-33px; "  href="dashboardmahasiswa.php" class="submit-btn">.........Kembali</a>
      </form>
      </div>
     
<div class="table">
      <table border="2">
  <thead>
    <tr>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Ijasah</th>
      <th scope="col">Kartu Keluarga</th>
      <th scope="col">Surat Keterangan Lulus</th>
    </tr>
  </thead>
  <tbody>
  <?php

        $query = mysqli_query($koneksi,"select*from fileup;");
        $a = mysqli_fetch_array($query);
        while($s =mysqli_fetch_array($query))
        {
      ?>
    <tr>
      <td><?php echo $s['nama'];?></td>
      <td><?php echo $s['ijazah'];?></td>
      <td><?php echo $s['kk'];?></td>
      <td><?php echo $s['skl'];?></td>  
    </tr>
  </tbody>
  <?php
                }
                ?>
</table>
    </div>
    </div>
</body>
</html>