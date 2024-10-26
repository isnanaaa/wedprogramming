<?php 
// require_once "db.php";
require_once "functions.php";

//$sql = "SELECT nim, nama FROM mahasiswa ORDER BY nama LIMIT 10";

//$result = $conn->query($sql) or die($conn->error);

//while($row = $result->fetch_assoc()){
//    echo $row['nim'];
//    echo "&nbsp;";
//    echo $row['nama'];
//    echo "<br>";
//}


//$conn->close();

$conn = mysqli_connect($host, $username, $password, $dbname);

$result = mysqli_query($conn, "SELECT * FROM mahasiswa LIMIT 10");
var_dump($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 1</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

<?php?>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Nim</th>
    <th>Nama</th>
</tr>

<tr>
        <td>1</td>
        <td>
            <a href="">Update</a> |
            <a href="">Delete</a>
        </td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
    </tr>
</table>

</body>
</html>