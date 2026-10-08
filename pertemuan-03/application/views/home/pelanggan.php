<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1>Data Profil Pelanggan</h1>
    <ul>
        <li><strong>ID Pelanggan:</strong> <?= $id_pelanggan; ?></li>
        <li><strong>Nama Pelanggan:</strong> <?= $nm_pelanggan; ?></li>
        <li><strong>No Telp:</strong> <?= $no_telp; ?></li>
    </ul>

    <!-- Gunakan site_url() untuk navigasi halaman sesuai petunjuk modul O.2 -->
    <a href="<?= site_url(); ?>">Kembali ke Beranda</a>
</body>
</html>