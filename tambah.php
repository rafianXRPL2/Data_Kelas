<?php 
// 1. BAGIAN LOGIKA PHP (Harus di paling atas agar koneksi database berjalan)
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <title>Tambah Data Siswa</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        body {
            color: #334155;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url("foto/foto\ 71\ \(3\).jpg") center/cover;
            filter: brightness(40%); 
            z-index: -1; 
        }
        
        .form-container {
            background-color: rgba(250, 250, 250, 0.9);
            width: 100%;
            max-width: 450px;
            padding: 35px;
            border-radius: 16px;
            border-top: 8px solid #0EA5E9; 
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #0EA5E9;
            font-weight: 900;
            font-size: 24px;
            margin-bottom: 25px;
            text-align: center;
            text-transform: uppercase;
        }

        label {
            display: block;
            font-weight: 700;
            margin-bottom: 8px;
            color: #475569;
            font-size: 15px;
        }

        .user-form input, .user-form select {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 5px;
            border: 2px solid #E2E8F0;
            border-radius: 10px;
            font-size: 15px;
            color: #334155;
            outline: none;
            transition: all 0.3s ease;
            background-color: #F8FAFC;
        }

        .user-form input:focus, .user-form select:focus {
            border-color: #0EA5E9; 
            background-color: #FFFFFF;
            box-shadow: 0 4px rgba(14, 165, 233, 0.15);
        }

        /* Validasi Pesan Error */
        .error-msg {
            font-size: 13px;
            color: #EF4444; 
            font-weight: 700;
            margin-bottom: 15px;
            display: block;
            opacity: 0;
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .user-form :user-invalid {
            border-color: #EF4444;
            background-color: #FEF2F2; 
        }
        
        .user-form :user-invalid + .error-msg {
            opacity: 1;
            transform: translateY(0);
        }

        .user-form :user-valid {
            border-color: #10B981; 
            background-color: #F0FDF4; 
        }

        /* Tombol */
        .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 15px;
        }

        .btn-kembali, button[type="submit"] {
            padding: 14px;
            font-size: 16px;
            font-weight: 700;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            color: #FFFFFF;
        }

        .btn-kembali {
            flex: 1;
            background-color: #94A3B8; 
        }
        
        .btn-kembali:hover { 
            background-color: #64748B; 
            transform: translateY(-2px); 
        }

        button[type="submit"] {
            flex: 2;
            background-color: #10B981; 
            box-shadow: 0 4px 6px rgba(16, 185, 129, 0.2);
        }
        
        button[type="submit"]:hover { 
            background-color: #059669; 
            transform: translateY(-2px); 
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Tambah Data Siswa</h2>

    <form method="POST" action="simpan.php" class="user-form">

        <label for="NIS">NIS :</label>
        <input type="text" id="NIS" name="NIS" placeholder="Masukkan NIS siswa..." required>
        <span class="error-msg">NIS wajib diisi!</span>

        <label for="NAMA">Nama Lengkap :</label>
        <input type="text" id="NAMA" name="NAMA" placeholder="Masukkan nama lengkap..." required>
        <span class="error-msg">Nama wajib diisi!</span>

        <label for="KELAS">Kelas :</label>
        <select id="KELAS" name="KELAS" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="XI RPL 1">XI RPL 1</option>
            <option value="XI RPL 2">XI RPL 2</option>
            <option value="XI DKV 1">XI DKV 1</option>
            <option value="XI DKV 2">XI DKV 2</option>
            <option value="XI ANM 1">XI ANM 1</option>
            <option value="XI ANM 2">XI ANM 2</option>
        </select>  
        <span class="error-msg">Silakan pilih kelas!</span>

        <label for="TANGGAL_LAHIR">Tanggal Lahir :</label>
        <input type="date" id="TANGGAL_LAHIR" name="TANGGAL_LAHIR" required>
        <span class="error-msg">Tanggal lahir wajib diisi!</span>

        <div class="btn-group">
            <a href="index.php" class="btn-kembali">Batal</a>
            <button type="submit">Simpan</button>
        </div>

    </form>
</div>

</body>
</html>