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

    <title>Dashboard Upload</title>
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
            <li class="nav-item inactive">
              <a class="nav-link" href="datamahasiswa.php">Forum Mahasiswa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="datajurusan.php">Forum Jurusan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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
<body>

  
  <div class="table">
      <table border="2" style="margin-top: 200px;">
  <thead>
    <tr>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Ijasah</th>
      <th scope="col">Kartu Keluarga</th>
      <th scope="col">Surat Keterangan Lulus</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        {
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
      <td><a href="delete.upload.php?id=<?php echo $s['id_file'] ?>" class="btn btn-danger">Hapus</a></td> 
    </tr>
  </tbody>
  <?php
                }
              }
                ?>
</table>
    </div>
    </div>
</body>
</html>