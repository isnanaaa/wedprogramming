<?php

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
}

?>
