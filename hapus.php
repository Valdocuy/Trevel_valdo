<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "valdo_trevel";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM pemesanan_travel WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ./tabel.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
