<?php

$host='localhost';
$dbname='gatepass';
$username='root';
$password='';

$conn= new mysqli($host, $username, $password, $dbname);
if (mysqli_connect_errno()){
    echo "Failed to connect to database" .  mysqli_connect_error();
}
?>