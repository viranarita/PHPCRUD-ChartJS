<?php 
include_once("koneksi.php");
$judul = $_POST['judul'];
$pengarang= $_POST['pengarang'];
$tahun= $_POST['tahun_terbit'];
$kategori= $_POST['kategori'];
$query="INSERT INTO tb_buku 
(judul_buku,pengarang,tahun_terbit,kategori) VALUE 
('$judul','$pengarang','$tahun','$kategori')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "input data gagal";
}
?>