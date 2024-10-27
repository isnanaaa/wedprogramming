<?php 
require_once "functions.php";

if(isset($_POST["submit"])){
	if(add($_POST) > 0 ) {
		echo"
		<script>
		alert('Data Submitted!');
		document.location.href='fetch.php';
		</script>
		";
	} else {
		echo"
		<script>
		alert('Submit Failed!');
		document.location.href='fetch.php';
		</script>
		";
	}
}

?>

<html>
	<head>
		<title>Form Registrasi</title>
	</head>
	<body>

		<h3>Form Registrasi</h3>
		<form action="" method="POST">
			<label for="">NIM</label>
			<input type="text" name="nim" id="nim">

			<label for="">Nama</label>
			<input type="text" name="nama" id="nama">

			<button type="submit" name="submit">Submit</button>
		</form>

	</body>
</html>