<?php
include('koneksi.php');
$id_mhs = $_GET['id'];
mysqli_query($koneksi,"delete from nama_mhs where id_mhs='$id_mhs'");
?>

<script type="text/javascript">
window.location="datamahasiswa.php";
</script>