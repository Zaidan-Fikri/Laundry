<?php	 
	require_once('_functions.php'); 
	$id_user = $_GET['username'];
	$update = query("SELECT * FROM master WHERE username='$id_user'")[0];
?>

<?php if (isset($_POST['update'])) : ?>
	<?php if (update_pass($_POST) > 0) :?>
		<!-- Statement 1 -->
		<div class="alert">
			<div class="box">
				<img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
				<p>Data Berhasil Di Ubah</p>
				<button onclick="window.location='http://localhost/Laundry/login.php'" class="btn-alert">Ok</button>
			</div>
		</div>

		<?php else : ?>
			<!-- Statement 2 -->
			<div class="alert">
				<div class="box">
				<img src="<?=url('_assets/img/gagal.png')?>" height="68" alt="alert gagal">
					<p>Data Gagal Di Ubah</p>
					<button onclick="window.location='http://localhost/Laundry/login.php'" class="btn-alert">Ok</button>
				</div>
			</div>
	<?php endif ?>
<?php endif ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rumah Laundry | Login</title>
	<link rel="stylesheet" href="_assets/css/login.css">
	<link rel="shortcut icon" href="_assets/img/logo/favicon-svg.svg" type="image/x-icon">
</head>
<body>
<div class="box">
		<div class="box-content">
			<div class="col box__left">
				<div class="logo">
					<img src="_assets/img/logo/logo.png" alt="">
				</div>
				<div class="box__left-title">
					<h4>Forgot Password</h4>
				</div>

				<div class="box__left-form">
					<form action="" method="post">
						<input type="hidden" name="id_user" value="<?= $update['id_user'] ?>">
						<input type="hidden" name="username" value="<?= $update['username'] ?>">
						<div class="box__left-form-group">
							<div class="input-form">
								<input type="password" name="password" placeholder="New Password" value="<?= $update['password'] ?>">
							</div>
						</div>

						<div class="box__left-form-group">
							<button type="submit" name="update" class="btn-login mt-1" >Submit</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col box__right">
				<div class="box__right-content">
					<div class="text__right">
						<h1>Admin Laundry</h1>
					</div>

					<img src="_assets/img/orang.png" alt="" class="box-img-orang">
					<img src="_assets/img/celana.png" alt="" class="box-img-celana">
					<img src="_assets/img/kaos.png" alt="" class="box-img-kaos">
					<img src="_assets/img/kemeja.png" alt="" class="box-img-kemeja">

					<!-- Bubble Variasi -->
					<div class="bubble-1"></div>
					<div class="bubble-2"></div>
					<div class="bubble-3"></div>
					<div class="bubble-4"></div>
					<div class="bubble-5"></div>
					<div class="bubble-6"></div>

					<!-- Garis Variasi -->
					<div class="garis garis-sm garis-1"></div>
					<div class="garis garis-md garis-2"></div>
					<div class="garis garis-sm garis-3"></div>
					<div class="garis garis-md garis-4"></div>
					<div class="garis garis-md garis-5"></div>
					<div class="garis garis-lg garis-6"></div>
					<div class="garis garis-lg garis-7"></div>
					<div class="garis garis-xl garis-8"></div>
					<div class="garis garis-sm garis-9"></div>
					<div class="garis garis-md garis-10"></div>
					<div class="garis garis-sm garis-11"></div>
					<div class="garis garis-md garis-12"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>