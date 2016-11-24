<?php
$conn = new mysqli("localhost","root","","smki_bisa");
if ($conn->connect_errno) {
    echo "Failed to connectto MySQL: 
    (" . $conn->connect_errno. ") ". $conn->connect_error;
}
?>