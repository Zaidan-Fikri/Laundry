<?php 
	require_once('_functions.php');
	$data_account = query("SELECT * FROM master WHERE username = '$_SESSION[master]'");
	
	// echo $_SESSION['master'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rumah Laundry | Dashboard</title>
	<link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
	<link rel="shortcut icon" href="_assets/img/logo/favicon.svg" type="image/x-icon">
</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<a href="<?=url()?>">
					<img src="_assets/img/logo/nav-logo.svg" alt="Rumah Laundry Logo">
				</a>
			</div>
			<ul class="nav-menu">
				<li>
					<span id=""><?= ucfirst($_SESSION['master']) ?></span>
					<ul class="dropdown-menu">
						<li><a href="about.php">Tentang Kami</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="nav-mini">
			<?php 
				if ($data_account[0]['level'] == 'admin') {
					?>
					<a href="karyawan/karyawan.php" class="link-nav">Manage Karyawan</a>
				<?php
				}
				?>
			<?php
				if ($data_account[0]['level'] == 'admin' || $data_account[0]['level'] == 'karyawan') {
													
			?>
			<a href="riwayat_transaksi/riwayat.php" class="link-nav">Riwayat Transaksi</a>
			<a href="paket/paket.php" class="link-nav">Daftar Paket</a>
			<?php 
				}
			?>			
		</div>
	</header>