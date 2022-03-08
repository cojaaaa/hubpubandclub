<?php 
$conn = new mysqli ("localhost", "root", "", "hub");

$rez = $conn->query("SELECT DATABASE()");
var_dump($rez->fetch_assoc());
?>