<?php
require_once '../koneksi.php';

if (isset($_POST['submit'])) {

    $id         = (int) $_POST['id'];
    $nama       = trim($_POST['nama']);
    $kategori   = trim($_POST['kategori']);
    $harga_beli = (int) $_POST['harga_beli'];
    $harga_jual = (int) $_POST['harga_jual'];
    $stok       = (int) $_POST['stok'];

    // Mengambil gambar lama
    $query = "SELECT gambar FROM data_barang WHERE id_barang = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $data_lama = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if (!$data_lama) {
        die("Data barang tidak ditemukan.");
    }

    $gambar = $data_lama['gambar'];

    // Memproses gambar baru jika diunggah
    if (isset($_FILES['file_gambar']) &&
        $_FILES['file_gambar']['error'] === UPLOAD_ERR_OK) {

        $filename = basename($_FILES['file_gambar']['name']);
        $filename = preg_replace('/[^A-Za-z0-9._-]/', '_', $filename);

        $destination = '../gambar/' . $filename;

        if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename;
        } else {
            die("Gagal mengunggah gambar.");
        }
    }

    // Memperbarui data barang
    $query = "UPDATE data_barang
              SET nama = ?, kategori = ?, harga_beli = ?,
                  harga_jual = ?, stok = ?, gambar = ?
              WHERE id_barang = ?";

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param(
        $stmt,
        "ssiiisi",
        $nama,
        $kategori,
        $harga_beli,
        $harga_jual,
        $stok,
        $gambar,
        $id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../index.php?status=diubah");
        exit;
    } else {
        echo "Gagal mengubah data: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}
?>