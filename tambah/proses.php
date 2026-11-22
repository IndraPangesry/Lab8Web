<?php

// Memanggil koneksi database
require_once '../koneksi.php';

// Memastikan data dikirim menggunakan POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Mengambil data dari formulir
    $kategori   = trim($_POST['kategori']);
    $nama       = trim($_POST['nama']);
    $gambar     = trim($_POST['gambar']);
    $harga_beli = (int) $_POST['harga_beli'];
    $harga_jual = (int) $_POST['harga_jual'];
    $stok       = (int) $_POST['stok'];

    // Menyiapkan query INSERT
    $sql = "INSERT INTO data_barang
            (kategori, nama, gambar, harga_beli, harga_jual, stok)
            VALUES (?, ?, ?, ?, ?, ?)";

    // Menggunakan prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Query gagal disiapkan: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param(
        $stmt,
        "sssiii",
        $kategori,
        $nama,
        $gambar,
        $harga_beli,
        $harga_jual,
        $stok
    );

    // Menjalankan query
    if (mysqli_stmt_execute($stmt)) {

        mysqli_stmt_close($stmt);

        // Kembali ke halaman utama
        header("Location: ../index.php?status=berhasil");
        exit;

    } else {

        echo "Gagal menambahkan data: "
             . htmlspecialchars(mysqli_stmt_error($stmt));

    }

    mysqli_stmt_close($stmt);

} else {

    header("Location: ../tambah.php");
    exit;

}

?>