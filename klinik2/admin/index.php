<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
	<meta charset="UTF-8">
	<title>Admin Dashboard - HMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">

	.total{
		height: 120px;
		width: 170px;
		border: 10px solid #1E90FF;
		margin-top: 30px;
		margin-left: 40px;
		float: left;
		text-align: center;
		padding-top: 20px;
	}



	</style>
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";

	?>
<!DOCTYPE html>
<html lang="en">
<head>
		<div class="right">

			<div class="total">
				<b>Jumlah Admin</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM hospital.users WHERE `type`='Admin'";

				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Jumlah Resepsionis</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM hospital.users WHERE `type`='Reception'";

				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Jumlah Dokter</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM hospital.users WHERE type='Family Physician' OR type='Pediatrician' OR type='Surgeon' OR type='Dermatologist' OR type='Dentist'";
				
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Jumlah Petugas Lab</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM hospital.users WHERE `type`='Laboratory'";
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>
			

			<div class="total">
				<b>Jumlah Apoteker</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM hospital.users WHERE `type`='Pharmacy'";
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Jumlah Kasir</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM hospital.users WHERE `type`='Cashier'";
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>



