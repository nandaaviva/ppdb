<?php
session_start();
if($_SESSION['admin']){
  
}
else{
  header('location: admin.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard Admin</title>
  </head>
  <body>
  

<?php include("koneksi.php"); ?>  
 <head>  
  <title>Admin Universitas Surabaya</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <script type="text/javascript" src="js/jquery.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script>  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>  
 <header>
  
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
        <img src="admin.jpg" alt="logo" style="width:100px;">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item inactive">
              <a class="nav-link" href="dashboardadmin.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="datamahasiswa.php">Forum Mahasiswa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="datajurusan.php">Forum Jurusan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="view.upload.php">Forum Upload <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
      
      <a href="logout.php" class="btn btn-outline-danger">Logout</a>
        </div>
      </nav>
    </header>
    <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Selamat Datang Admin</h1>  
           <h3>Universitas Surabaya</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
      <div class="btn-tambah" align="center">
      <a href="form-mhs.php"><button type="submit" name="tambah" value="tambah">Tambah</button></a>
      </div>
 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
   <thead>  
     <tr>  
     <th>Foto</th>
       <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Jurusan</th>
        <th>Asal</th>
       <th colspan="2"> Tindakan</th>
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  
     <?php  
     $sql = "SELECT * FROM nama_mhs";  
     $query = mysqli_query($koneksi, $sql);  
     while($siswa = mysqli_fetch_array($query))
     { 
        ?>
      <tr>  
       <td><img src="<?php echo $siswa['upload']; ?>" width="200px" ></td>
       <td><?php echo $siswa['nama'];?></td>
       <td><?php echo $siswa['tanggal_lahir'];?></td>
       <td><?php echo $siswa['jenis_kelamin'];?></td>
       <td><?php echo $siswa['alamat_mhs'];?></td>
       <td><?php echo $siswa['jurusan'];?></td>
       <td><?php echo $siswa['asal'];?></td>
        
       <td><a href="update-mhs.php?id=<?php echo $siswa['id_mhs'] ?>" class="btn btn-info">Update</a></td>   
       <td><a href="delete-mhs.php?id=<?php echo $siswa['id_mhs'] ?>" class="btn btn-danger">Hapus</a></td>   
      </tr>
       <?php  
     }  
     ?>  
   </tbody>  
   <nav class="text-center">  

   </nav> 
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>  
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>