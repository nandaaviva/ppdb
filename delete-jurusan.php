<?php
include('koneksi.php');
$id = $_GET['id'];
mysqli_query($koneksi,"delete from jurusan where id='$id'");
?>

<script type="text/javascript">
window.location="datajurusan.php";
</script>