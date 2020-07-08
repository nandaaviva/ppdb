<?php
session_start();
if($_SESSION['username']){
  
}
else{
  header('location: mahasiswa.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View Data</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
        <img src="mahasiswa.jpg" alt="logo" style="width:100px;">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboardmahasiswa.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
        <a class="nav-link disabled" href="logout2.php">Logout</a>
      </li>
          </ul>
          <form method="POST" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari" name="cari"> 
        <input type="submit" value="cari" class="btn btn-outline-success my-2 my-sm-0">
      </form>
      </nav>
    </header>
    <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Selamat Datang Mahasiswa</h1>  
           <h3>Universitas Surabaya</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      
      <?php
    include("koneksi.php");
    ?>
    <div align="center">
    <table border="solid" width="1000px" class="content-table">
                <tr bgcolor="#E5E5E5" align="center">
                        <th>No</th>
                        <th>Foto</th><br>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Asal</th>
                </tr>
                <?php
                if(isset($_POST['cari']))
                {
                  $cari = $_POST['cari'];
                  $q = mysqli_query($koneksi,"select * from nama_mhs where asal like '%".$cari."%'");				
                }
                else
                {
                  $q = mysqli_query($koneksi,"select * from nama_mhs");		
                }
                    
                    $i=1;
                    while($c =mysqli_fetch_array($q))
                    {
                 ?>
                <tr bgcolor="#E5E5E5" align="center">
                <td><?php echo $i; ?></td>
                <td><img src="<?php echo $c['upload'];?>" width="150px"></td>
                <td align="center"><?php echo $c['nama'];?></td>
                <td><?php echo $c['alamat_mhs'];?></td>
                <td><?php echo $c['tanggal_lahir'];?></td>
                <td><?php echo $c['jenis_kelamin'];?> </td>
                <td><?php echo $c['jurusan'];?></td>
                <td><?php echo $c['asal'];?></td>
                <?php
                $i++;
                }
                ?>
        </table>
      </div>
</body>
</html>