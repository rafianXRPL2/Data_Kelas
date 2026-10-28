<?php
include 'koneksi.php';

$NIS = $_POST['NIS'];
$NAMA = $_POST['NAMA'];
$KELAS = $_POST['KELAS'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];

mysqli_query($conn, 
"INSERT INTO siswa(NIS, NAMA, KELAS, TANGGAL_LAHIR) 
VALUES('$NIS','$NAMA','$KELAS','$TANGGAL_LAHIR')");

echo "
<script>
alert('Data berhasil ditambahkan');
window.location='index.php';
</script>
";
?>