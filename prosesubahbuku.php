<?php
include_once("koneksi.php");

// Pastikan semua data tersedia
if (isset($_POST['id']) && isset($_POST['judul']) && isset($_POST['pengarang']) && isset($_POST['tahun_terbit']) && isset($_POST['kategori'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];

    // Mencegah SQL Injection
    $id = mysqli_real_escape_string($conn, $id);
    $judul = mysqli_real_escape_string($conn, $judul);
    $pengarang = mysqli_real_escape_string($conn, $pengarang);
    $tahun = mysqli_real_escape_string($conn, $tahun);
    $kategori = mysqli_real_escape_string($conn, $kategori);

    $query = "UPDATE tb_buku SET judul_buku='$judul', pengarang='$pengarang', tahun_terbit='$tahun', kategori='$kategori' WHERE id_buku='$id'";

    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        header('location:index.php');
    } else {
        echo "Update data gagal: " . mysqli_error($conn);
    }
} else {
    echo "Error: Data tidak lengkap.";
}
?>
