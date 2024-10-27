<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "web_sekolah";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function delete($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>
