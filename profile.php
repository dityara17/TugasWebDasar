<!DOCTYPE html>
<html>
<head>
	<title>Qriya Guru</title>
	<link href="fa/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container full">
			<div class="row">
				<div class="logo">
					<img src="images/woobrain.png" alt="Qriya Guru">
				</div>
				<div class="menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="kategori.html">Kelas</a></li>
						<li><a href="profile.php">Account</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="herolear">
		<h1>Hai, <span> Aditya</span></h1>
	</div>

	<!-- populer -->
	<div class="kelas">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h3>Kelas yang di ikuti</h3>
					<div class="row">
						<div class="col-6">
							<div class="box">
								<div class="img">
									<img src="images/kelas/songket-1543514453.jpg">
								</div>
								<div class="text">
									<h3>Belajar Tenun Songket</h3>
									Tenun songket adalah sebuah seni kriya dari...

								</div>
								<div class="btn">
									<a href="detailkelas.html">Load More </a>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="box">
								<div class="img">
									<img src="images/course_4.jpg">
								</div>
								<div class="text">
									<h3>Belajar Membatik</h3>
									Tenun songket adalah sebuah seni kriya dari...

								</div>
								<div class="btn">
									<a href="detailkelas.html">Load More </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4">
					<h3>Edit Data Diri</h3>
					<form method="post">
						<label>Nama</label>
						<input type="text" name="name" value="Aditya Rizki Pratama"> 
						<label>Jenis kelamin</label>
						<select name="jk">
							<option selected="" value="Laki-laki">Laki-laki</option>
							<option  value="Perempuan">Perempuan</option>
						</select>
						<label>Alamat</label>
						<textarea name="alamat">Semarang</textarea>
						<button type="submit" name="submit">Update</button>
					</form>
					<br> <br>
					<?php if (isset($_POST['submit'])) { ?>
					   <div class="alert">
					   		<p>
					   			Berhasil update data <br>
					   			Nama : <?php echo $_POST['name']; ?> <br>
					   			Jenis Kelamin : <?php echo $_POST['jk']; ?> <br>
					   			Alamat : <?php echo $_POST['alamat']; ?> .
					   		</p>
					   </div>	
					<?php } ?>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="footer">
		<p>&copy; 2019.  All rights reserved by Aditya Rizki Pratama </p>
	</div>

</body>
</html>