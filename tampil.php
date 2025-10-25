<?php
session_start();

// Cek apakah sudah login dan ada biodata
if (!isset($_SESSION['loggedin']) || !isset($_SESSION['biodata'])) {
    header("Location: login.php");
    exit;
}

$biodata = $_SESSION['biodata'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Biodata Anda</h1>
        <table class="biodata-table">
            <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td>:</td>
                <td><?php echo htmlspecialchars($biodata['nama']); ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>:</td>
                <td><?php echo htmlspecialchars($biodata['email']); ?></td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td>:</td>
                <td><?php echo htmlspecialchars($biodata['alamat']); ?></td>
            </tr>
            <tr>
                <td><strong>Telepon</strong></td>
                <td>:</td>
                <td><?php echo htmlspecialchars($biodata['telepon']); ?></td>
            </tr>
            <tr>
                <td><strong>Tanggal Lahir</strong></td>
                <td>:</td>
                <td><?php echo htmlspecialchars($biodata['tanggal_lahir']); ?></td>
            </tr>
            <tr>
                <td><strong>Jenis Kelamin</strong></td>
                <td>:</td>
                <td><?php echo htmlspecialchars($biodata['jenis_kelamin']); ?></td>
            </tr>
        </table>
        <div class="button-group">
            <a href="index.php" class="btn">Home</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>
