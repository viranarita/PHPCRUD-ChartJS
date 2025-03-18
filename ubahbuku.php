<?php
include_once("koneksi.php");

// Pastikan parameter id tersedia
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "Error: ID buku tidak ditemukan.";
    exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM tb_buku WHERE id_buku = '$id'";
$hasil = mysqli_query($conn, $query);

if (!$hasil || mysqli_num_rows($hasil) == 0) {
    echo "Error: Data buku tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="alert alert-success text-center">
            <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
        </div>
        <h1 class="mb-4">Ubah Koleksi Buku</h1>

        <form method="post" action="prosesubahbuku.php">
            
            <!-- ID buku -->
            <div class="form-group row">
                <label for="id_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                <div class="col-sm-6">
                <input type="text" name="id" value="<?php echo $data['id_buku']; ?>" readonly class="form-control">
                    <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-6">
                    <input type="text" name="judul" class="form-control" value="<?php echo $data['judul_buku']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-6">
                    <input type="text" name="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-6">
                    <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-6">
                    <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-primary mb-1 mt-1 ml-0"><i class="fas fa-user-plus mr-0"></i>Koleksi Buku</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
