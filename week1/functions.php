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

function add($data){
    global $conn;
    
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    
    $sql = "INSERT INTO mahasiswa (nim, nama) VALUES ('".$nim."','".$nama."')";
    
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;

    $id = $data['id'];
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    
    $sql = "UPDATE mahasiswa SET nim = $nim, nama = $nama WHERE id = $id";
    
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

?>
