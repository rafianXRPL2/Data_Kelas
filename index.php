<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Data Siswa</title>
    
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            font-family: 'Nunito', sans-serif;
            color: #334155;
            padding: 40px 5%;
            margin: 0;
            position: relative; 
            z-index: 0;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("foto/image.png") ;
            background-size: cover;
            filter: brightness(40%); 
            z-index: -1; 
        }
        
        h2 {
            text-shadow: -2px -2px  #ffffff,  2px -2px  #ffffff,-2px  2px  #ffffff,2px  2px  #ffffff;
            color: #0e64e6; 
            font-weight: 900;
            font-size: 4rem;
            margin-bottom: 30px;
            letter-spacing: 2px;
            
        }

        .btn-tambah {
            display: inline-block;
            background-color: #FBBF24; 
            color: #1E293B; 
            text-decoration: none;
            padding: 12px 24px;
            font-weight: bold;
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(251, 191, 36, 0.3);
            transition: all 0.3s ;
            margin-bottom: 20px;
        }

        .btn-tambah:hover {
            background-color: #F59E0B; 
            color: #FAFAFA;
            transform: translateY(-2px);
        }

        .btn-edit, .btn-hapus {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            color: #FFFFFF;
            transition: all 0.2s;
            margin: 2px;
        }

        .btn-edit {
            background-color: #10B981; 
            box-shadow: 0 2px 4px rgba(16, 185, 129, 0.2);
        }

        .btn-edit:hover {
            background-color: #059669;
        }

        .btn-hapus {
            background-color: #EF4444; 
            box-shadow: 0 2px 4px rgba(239, 68, 68, 0.2);
        }

        .btn-hapus:hover {
            background-color: #DC2626;
        }

        table {
            width: 100%;
            border-collapse: collapse; 
            background-color: #FFFFFF;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        }

        th {
            background-color: #0e64e6; 
            color: #FFFFFF;
            font-weight: 700;
            font-size: 1rem;
            padding: 15px;
            text-align: center;
            border-right: 1px solid rgba(255, 255, 255, 0.3); 
        }


        td {
            padding: 15px;
            font-weight: 700;
            border-bottom: 1px solid #E2E8F0; 
            font-size: 16px;
            border-right: 1px solid #E2E8F0; 
        }

        td:last-child {
            border-right: none;
        }
    </style>
</head>
<body>

<h2><center>BIODATA SISWA</center></h2>

<a class="btn-tambah" href="tambah.php"><i class="fa-solid fa-plus"></i> Tambah Data</a>

<table>
    <div class="kolom">
    <tr>
        <th>NIS</th>
        <th>NAMA SISWA</th>
        <th>KELAS</th>
        <th>TANGGAL LAHIR</th>
        <th style="width: 15%;">Aksi</th>
    </tr>
    </div>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM siswa");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $d['NIS']; ?> </td>
    <td><?php echo $d['NAMA']; ?></td>
    <td><?php echo $d['KELAS']; ?></td>
    <td><?php echo $d['TANGGAL_LAHIR']; ?></td>
    <td>
        <a class="btn-edit" href="edit.php?NIS=<?php echo $d['NIS']; ?>" onclick="return confirm('Yakin ingin mengubah data?')"><i class="fa-solid fa-pen"></i> Edit</a>
        <a class="btn-hapus" href="hapus.php?NIS=<?php echo $d['NIS']; ?>" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa-solid fa-trash"></i> Hapus</a>
    </td>
</tr>

<?php
}
?>

</table>
</body>
</html>