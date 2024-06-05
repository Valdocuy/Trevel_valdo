<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pemesanan Travel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .table-container {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Adjust table columns width */
    .table-responsive table th,
    .table-responsive table td {
      white-space: nowrap;
      min-width: 150px;
    }

    /* Adjust table font size */
    .table-responsive table {
      font-size: 14px;
    }
  </style>
</head>
<body>


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="table-container">
          <h2 class="text-left mb-4">Data Pemesanan Travel</h2>
          <a class="btn btn-warning" href="./index.php"><i class="bi bi-clipboard-plus-fill"></i> Kembali</a><br>
          <div class="table-responsive mt-4">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Pilihan Travel</th>
                  <th>Jumlah Orang</th>
                  <th>Transportasi</th>
                  <th>Tanggal Berangkat</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $database = "valdo_trevel"; 
                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                  die("Koneksi gagal: " . $conn->connect_error);
                }

                $sql = "SELECT id, nama, pilihan_travel, jumlah_orang, transportasi, tanggal_berangkat, total FROM pemesanan_travel";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nama"]. "</td>";
                    echo "<td>" . $row["pilihan_travel"]. "</td>";
                    echo "<td>" . $row["jumlah_orang"]. "</td>";
                    echo "<td>" . $row["transportasi"]. "</td>";
                    echo "<td>" . $row["tanggal_berangkat"]. "</td>";
                    echo "<td>" . $row["total"]. "</td>";
                    echo "<td>";
                    echo "<a href='./detail.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Detail</a>";
                    echo "<button class='btn btn-danger btn-sm' onclick='hapus(" . $row['id'] . ")'>Hapus</button>";
                    echo "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='7'>0 results</td></tr>";
                }
                $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function hapus(id) {
      if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = "./hapus.php?id=" + id;
      }
    }

    function detail(id) {
      // Implement detail function if needed
    }
  </script>
</body>
</html>
