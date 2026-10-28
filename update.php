<?php
include 'koneksi.php';

$NIS = $_POST['NIS'];
$NAMA = $_POST['NAMA'];
$KELAS = $_POST['KELAS'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];

mysqli_query($conn, 
"UPDATE siswa 
SET NAMA='$NAMA', 
KELAS='$KELAS', 
TANGGAL_LAHIR='$TANGGAL_LAHIR' 
WHERE NIS='$NIS'");

echo "
<script>
alert('Data berhasil di ubah');
window.location='index.php';
</script>
";

?>