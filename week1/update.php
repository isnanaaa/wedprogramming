<?php 

require_once "functions.php";
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])){
    if(update($_POST) > 0){
        echo"
        <script>
        alert('Data Updated!');
        document.location.href='fetch.php';
        </script>
        ";
    } else {
        echo"
        <script>
        alert('Update Failed!');
        document.location.href='fetch.php';
        </script>
        ";
    }
}

?>

<html>
<head>
    <title>Update Data</title>
</head>
<body>
    
<h3>Form Update Data</h3>
		<form action="" method="POST">

        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

			<label for="nim">NIM</label>
			<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">

			<label for="">Nama</label>
			<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">

			<button type="submit" name="Submit">Update</button>
		</form>

</body>
</html>
 