<?php
include('koneksi.php');
$id_file = $_GET['id'];
mysqli_query($koneksi,"delete from fileup where id_file='$id_file'");
?>

<script type="text/javascript">
window.location="view.upload.php";
</script>