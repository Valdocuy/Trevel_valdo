<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "valdo_trevel"; 
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$pilihan_travel = $_POST['pilihan_travel'];
$jumlah_orang = $_POST['jumlah_orang'];
$transportasi = $_POST['transportasi'];
$tanggal_berangkat = $_POST['tanggal_berangkat'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$total_biaya = $_POST['total'];

// Validasi dan pindahkan berkas ke direktori yang ditentukan
$target_dir = "uploads/";
$target_bukti_pembayaran = $target_dir . basename($_FILES["bukti_pembayaran"]["name"]);
$target_foto_ktp = $target_dir . basename($_FILES["foto_ktp"]["name"]);

if (move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"], $target_bukti_pembayaran) && move_uploaded_file($_FILES["foto_ktp"]["tmp_name"], $target_foto_ktp)) {
    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO pemesanan_travel (nama, alamat, no_hp, pilihan_travel, jumlah_orang, transportasi, tanggal_berangkat, metode_pembayaran, bukti_pembayaran, foto_ktp, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("sssssssssss", $nama, $alamat, $no_hp, $pilihan_travel, $jumlah_orang, $transportasi, $tanggal_berangkat, $metode_pembayaran, $target_bukti_pembayaran, $target_foto_ktp, $total_biaya);
    
    // Execute statement
    if ($stmt->execute()) {
        header("Location: ./info.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Gagal mengunggah berkas.";
}

$conn->close();
?>
