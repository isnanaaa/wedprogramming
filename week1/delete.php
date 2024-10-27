<?php

require_once "functions.php";

$id = $_GET["id"];

if(delete($id) > 0){
    echo "
    <script>
    alert('Data Deleted!');
    document.location.href='fetch.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Delete Failed');
    document.location.href='fetch.php';
    </script>
    ";
}

?>