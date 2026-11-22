<?php

// =====================================
// 1. KONEKSI DATABASE
// =====================================

require_once 'koneksi.php';


// =====================================
// 2. MEMANGGIL QUERY DATA BARANG
// =====================================

require_once 'index/query.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <!-- Pengaturan karakter -->
    <meta charset="UTF-8">

    <!-- Pengaturan responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Memanggil CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Judul halaman -->
    <title>Data Barang</title>

</head>

<body>

    <!-- =====================================
         3. CONTAINER UTAMA
    ====================================== -->

    <div class="container">

        <h1>Data Barang</h1>

        <div class="main">

            <!-- =====================================
                 4. NOTIFIKASI
            ====================================== -->

            <?php if (isset($_GET['status']) && $_GET['status'] == 'berhasil'): ?>

                <div class="alert-success">
                    Data barang berhasil ditambahkan!
                </div>

            <?php endif; ?>


            <!-- =====================================
                 5. TOMBOL TAMBAH BARANG
            ====================================== -->

            <div class="toolbar">

                <a href="tambah.php" class="btn-tambah">
                    + Tambah Barang
                </a>

            </div>


            <!-- =====================================
                 6. MENAMPILKAN TABEL DATA
            ====================================== -->

            <?php require 'index/tabel.php'; ?>

        </div>

    </div>

</body>

</html>