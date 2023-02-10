<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo"
			<script>
				alert('Anda Harus Login Dulu untuk mengakses Halaman Ini !!');
				document.location.href='index.php'
			</script>";
		}
	}
	?>
	
	
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Aplikasi Catatan Perjalanan</title>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="asset/css/style1.css">
		<style>
		.nav {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			max-width: calc(var(--nav-width) + var(--gap) * 2);
			margin-left: auto;
			margin-right: auto;

		}
		header.header {
			background-color: #000000;
			box-shadow: 0 0 0 1px rgb(53 72 91 / 4%), 0 2px 2px rgb(0 0 0 / 0%), 0 4px 4px rgb(0 0 0 / 1%), 0 10px 8px rgb(0 0 0 / 2%), 0 15px 15px rgb(0 0 0 / 2%), 0 30px 30px rgb(0 0 0 / 2%), 0 70px 65px rgb(0 0 0 / 3%);
			
		}
		.logo{
			color: #A9A9A9;
			font-size: 24px;
			font-weight: 700;
			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.footer{
			font-size: 12px;
			color: #8E8E8E;
			text-align: center;
		}
		</style>
	</head>
	
	<header class="header">
      <nav class="nav">
        <h1 class="logo">Catatan Perjalanan</a></h1>
        <ul class="menu">
  
        </ul>
      </nav>
	  
    </header>
	
	<body>
	<! -- partial:index.partial.html -->
		<div class="login-form">
			<form action="cek_login.php"method="POST">
				<h1><img src="asset/img/logo/mon.png"height="50px"><p>Silahkan Login</h1>
					<div class="content">
						<div class="input-field">
							<input type="number"name="nik" placeholder="Masukan NIK"required>
						</div>
						<div class="input-field">
							<input type="text"name="nama" placeholder="Masukan Nama Lengkap"required>
						</div>
					</div>
		<div class="action">
			<button onclick="window.location.href='register.php'" class="btn mr-2">Saya Pengguna Baru</button>
			<button type="submit">Masuk</button>
		</div>
			</form>
		</div>
<! -- partial -- >
<script src="script.js"></script>

	<div class="footer">© 2023 Perjalanan from Maftuh</div>
	
	</body>
</html>