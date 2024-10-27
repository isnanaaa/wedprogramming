<?php 
// require_once "db.php";
require_once "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT 10");

//$sql = "SELECT nim, nama FROM mahasiswa ORDER BY nama LIMIT 10";

//$result = $conn->query($sql) or die($conn->error);

//while($row = $result->fetch_assoc()){
//    echo $row['nim'];
//    echo "&nbsp;";
//    echo $row['nama'];
//    echo "<br>";
//}


//$conn->close();

//new
// $conn = mysqli_connect($host, $username, $password, $dbname);

// $result = mysqli_query($conn, "SELECT * FROM mahasiswa LIMIT 10");

// while ( $mhs = mysqli_fetch_assoc($result) ){
//     var_dump($mhs);
// }

?>

<html>
<head>
    <title>Tugas 1</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No</th>
    <th>Aksi</th>
    <th>NIM</th>
    <th>Nama</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row) : ?>

<tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Update</a> |
            <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
    </tr>
<?php $i++ ?>
<?php endforeach; ?>

</table>

</body>
</html>