<!DOCTYPE html>
<html>

<head>
	<title>LATIHAN</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>UNDANGAN</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Undangan
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from undangan where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
					</div>

					<div class="form-group">
						<label>Nohp</label>
						<textarea class="form-control" name="nohp"><?= $row['nohp']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$nohp = $_POST['nohp'];
                    $id = $_POST['id'];
					//query mengubah barang
					mysqli_query($koneksi, "update undangan set nama='$nama', alamat='$alamat', nohp='$nohp' where id='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='crud1.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>