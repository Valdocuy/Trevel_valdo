<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pemesanan Travel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .detail-container {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .detail-item {
      margin-bottom: 10px;
    }

    .detail-label {
      font-weight: bold;
    }

    .image-container {
      width: 200px;
      height: 200px;
      overflow: hidden;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .image-container img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="detail-container">
          <h2 class="text-center mb-4">Detail Pemesanan Travel</h2>
          <?php
          $servername = "localhost"; 
          $username = "root"; 
          $password = ""; 
          $database = "valdo_trevel"; 

          // Create connection
          $conn = new mysqli($servername, $username, $password, $database);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Initialize $id variable
          $id = null;

          // Check if 'id' parameter is set in the URL
          if(isset($_GET['id'])) {
              // Sanitize the input to prevent SQL injection
              $id = $conn->real_escape_string($_GET['id']);

              // Prepare a SQL statement
              $sql = "SELECT * FROM pemesanan_travel WHERE id = ?";

              // Prepare and bind parameters
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("i", $id);

              // Execute the statement
              $stmt->execute();

              // Get the result set
              $result = $stmt->get_result();

              if ($result->num_rows > 0) {
                  // Output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "<div class='detail-item'><span class='detail-label'>Nama:</span> " . $row["nama"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Alamat:</span> " . $row["alamat"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>No. HP:</span> " . $row["no_hp"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Pilihan Travel:</span> " . $row["pilihan_travel"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Jumlah Orang:</span> " . $row["jumlah_orang"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Transportasi:</span> " . $row["transportasi"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Tanggal Berangkat:</span> " . $row["tanggal_berangkat"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Metode Pembayaran:</span> " . $row["metode_pembayaran"]. "</div>";
                      echo "<div class='detail-item'><span class='detail-label'>Foto Bukti Pembayran:</span> <div class='image-container'><img src='" . $row["bukti_pembayaran"]. "' alt='Foto Bukti'></div></div>";
                      echo "<div class='detail-item'><span class='detail-label'>Foto KTP:</span> <div class='image-container'><img src='" . $row["foto_ktp"]. "' alt='Foto KTP'></div></div>";
                      echo "<div class='detail-item'><span class='detail-label'>Total Biaya:</span> " . $row["total"]. "</div>";
                  }
              } else {
                  echo "0 results";
              }

              // Close statement
              $stmt->close();
          } else {
              echo "Parameter 'id' is missing in the URL.";
          }

          // Close connection
          $conn->close();
          ?>


          <a class="btn btn-warning" href="./index.php"><i class="bi bi-clipboard-plus-fill"></i> Kembali</a>
          <a class="btn btn-warning" href="./tabel.php"><i class="bi bi-clipboard-plus-fill"></i> Data</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
