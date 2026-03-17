<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "Checkpoint";

$conn = new mysqli($host, $user, $pass, $banco);

if($conn->connect_error) {
    die("Falha na conexão com o banco: " . $conn->connect_error);
}
?>
