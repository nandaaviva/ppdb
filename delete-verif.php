<?php
include('koneksi.php');
$id_regist = $_GET['id'];
mysqli_query($koneksi,"delete from regist_sementara where id_regist='$id_regist'");
?>

<script type="text/javascript">
window.location="dashboardadmin.php";
</script>