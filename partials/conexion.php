<?php
require_once('../variables-php/variables-bbdd.php');
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>