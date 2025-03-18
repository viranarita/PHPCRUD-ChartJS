<?php 
include_once ("koneksi.php");
$query= "SELECT * FROM tb_buku";
$hasil= mysqli_query ($conn, $query);
?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Koleksi Buku</title>
 <script type="text/javascript" src="Chart.js"></script>
 
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
 <title> Koleksi Buku</title>
 </head>
 <body>
 <div class="alert alert-success text-center" role="alert" 
> <h2>DATA KOLEKSI BUKU 
PERPUSTAKAAN</h2>
 </div>
 <a href="tambahbuku.php" class="btn btn-primary

mb-1 mt-1"><i class="fas fa-user-plus mr-
2"></i>Tambah Buku</a>
 <table class ="table table-bordered">
 <thead class="thead-light">
 <tr>
<th scope="col">Id_Buku</th>
<th scope="col">Judul Buku</th>
<th scope="col">Pengarang</th>
<th scope="col">Tahun Terbit</th>
<th scope="col">Kategori</th>
<th scope="col">Aksi</th>   
 </tr>
 </thead>
 <tbody>
 <?php $nomor=1;
while ($data=mysqli_fetch_array ($hasil)){?>
 <tr>
<th scope="row"> <?php echo $nomor; ?> </th>
<td> <?php echo $data['judul_buku']; ?> </td>
<td> <?php echo $data['pengarang']; ?> </td>
<td> <?php echo $data['tahun_terbit']; ?> </td>
<td> <?php echo $data['kategori']; ?> </td>
<td> <a href="ubahbuku.php?id=<?php echo
$data['id_buku'] ?>">Edit</a> 
| <a href="hapusbuku.php?id=<?php echo $data['id_buku']; ?>" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
   Delete
</a>

</tr>
 <?php $nomor++; } ?>
 </tbody>
</table>
<div style="
    width: 500px; 
    height: 500px; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    margin: auto;">
    <canvas id="myChart"></canvas>
</div>

    <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["pemrograman", "anak", "komedi"],
				datasets: [{
					label: '# of Votes',
					data: [2,5,1],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-
3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
wFDMVNA/GpGFF93hXpG5KkN" 
crossorigin="anonymous"></script>
 <script 
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q" 
crossorigin="anonymous"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl" 
crossorigin="anonymous"></script>
 </body>
 </html>