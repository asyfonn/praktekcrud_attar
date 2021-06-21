<!DOCTYPE html>
<html>
<head>
	<title>LATIHAN</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>LATIHAN</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<h1>Undangan Pernikahan</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				TAMU UNDANGAN <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
                            <th>nomor</th>
							<th>nama</th>
							<th>alamat</th>
							<th>nohp</th>
						</tr>
					</thead>
                    <tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from undangan") or die(mysqli_error($koneksi));
							//script untuk menampilkan data barang

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama']; //untuk menampilkan nama ?></td>
						<td><?= $row['alamat']; ?></td>
						<td><?= $row['nohp']; ?></td>
						<td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>