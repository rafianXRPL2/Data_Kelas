<?php
include 'koneksi.php';

$NIS = $_GET['NIS'];

mysqli_query($conn, "DELETE FROM siswa WHERE NIS='$NIS'");

echo "
<script>
alert('Data berhasil dihapus');
window.location='index.php';
</script>
";
?>