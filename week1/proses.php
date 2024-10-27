<?php 

require_once "functions.php";

$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);

$sql = "INSERT INTO mahasiswa (nim, nama) VALUES ('".$nim."','".$nama."')";

if($conn->query($sql) === TRUE){
	echo "<script>
	alert('Data Added Successfully');
	<script/>";
}

else{
	echo "Error ".$conn->error;
}

$conn->close();

 ?>
 