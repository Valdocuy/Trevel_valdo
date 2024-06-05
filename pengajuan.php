<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pemesanan Travel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-container {
      background-color: #f8f9fa;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-submit {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="form-container">
          <h2 class="text-center mb-4">Formulir Pemesanan Travel</h2>
          <form action="koneksi.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <!-- Bagian Input Data Diri -->
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                  <label for="no_hp">No. HP:</label>
                  <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <!-- Bagian Pilihan Travel -->
                <div class="form-group">
                  <label for="pilihan_travel">Pilihan Travel:</label>
                  <select class="form-control" id="pilihan_travel" name="pilihan_travel" required onchange="calculateTotal()">
                    <option value="">Pilih Travel</option>
                    <option value="Travel Jepang" data-harga="500000">Travel Jepang - Rp 1.000.000</option>
                    <option value="Travel Korea" data-harga="700000">Travel Korea - Rp 1.100.000</option>
                    <option value="Travel Bromo" data-harga="900000">Travel Bromo - Rp 1.000.000</option>
                    <option value="Travel kanada" data-harga="1100000">Travel Kanada - Rp 1.100.000</option>
                  </select>
                </div>
                <!-- Bagian Jumlah Orang -->
                <div class="form-group">
                  <label for="jumlah_orang">Jumlah Orang yang Ikut Travel:</label>
                  <input type="number" class="form-control" id="jumlah_orang" name="jumlah_orang" min="1" required onchange="calculateTotal()">
                </div>
                <!-- Bagian Pilihan Transportasi -->
                <div class="form-group">
                  <label for="transportasi">Transportasi:</label>
                  <select class="form-control" id="transportasi" name="transportasi" required>
                    <option value="">Pilih Transportasi</option>
                    <option value="pesawat">Pesawat</option>
                    <option value="kereta">Kereta</option>
                    <option value="bis">Bis</option>
                  </select>
                </div>

              </div>
              <div class="col-md-6">
                <!-- Bagian Tanggal Berangkat -->
                <div class="form-group">
                  <label for="tanggal_berangkat">Tanggal Berangkat:</label>
                  <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" required>
                </div>
                
                <!-- Bagian Metode Pembayaran -->
                <div class="form-group">
                  <label for="metode_pembayaran">Metode Pembayaran:</label>
                  <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required onchange="showBank()">
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="bca">Transfer BCA</option>
                    <option value="bni">Transfer BNI</option>
                    <option value="bri">Transfer BRI</option>
                  </select>
                </div>
                <!-- Bagian Informasi Bank -->
                <div class="form-group" id="bank_section" style="display:none;">
                  <div class="alert alert-success" role="alert" id="bank_message"></div>
                </div>
                <!-- Bagian Upload Bukti Pembayaran -->
                <div class="form-group">
                  <label for="bukti_pembayaran">Bukti Pembayaran:</label>
                  <input type="file" class="form-control-file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                </div>
                <!-- Bagian Upload Foto KTP -->
                <div class="form-group">
                  <label for="foto_ktp">Foto KTP:</label>
                  <input type="file" class="form-control-file" id="foto_ktp" name="foto_ktp" required>
                </div>
                <!-- Bagian Total Biaya (Hidden) -->
            <div class="form-group">
              <label for="total">Total Biaya:</label>
              <input type="text" class="form-control" id="total" name="total" readonly>
            </div>

            <!-- Bagian Tombol Submit -->
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btn-submit">Submit</button>
                <a href="./index.php" class="btn btn-warning btn-block btn-submit">Kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript untuk Menampilkan Informasi Bank -->
  <script>
    function showBank() {
      var metode_pembayaran = document.getElementById("metode_pembayaran").value;
      var bank_section = document.getElementById("bank_section");
      var bank_message = document.getElementById("bank_message");

      if (metode_pembayaran === "bca") {
        bank_message.innerHTML = "Silahkan transfer ke nomor rekening BCA berikut: 0987654321";
        bank_section.style.display = "block";
      } else if (metode_pembayaran === "bni") {
        bank_message.innerHTML = "Silahkan transfer ke nomor rekening BNI berikut: 1234567890";
        bank_section.style.display = "block";
      } else if (metode_pembayaran === "bri") {
        bank_message.innerHTML = "Silahkan transfer ke nomor rekening BRI berikut: 1357924680";
        bank_section.style.display = "block";
      } else {
        bank_section.style.display = "none";
      }
    }

    // JavaScript untuk Menghitung Total Biaya
    function calculateTotal() {
      var harga_per_orang = document.getElementById("pilihan_travel").selectedOptions[0].getAttribute("data-harga");
      var jumlah_orang = document.getElementById("jumlah_orang").value;
      var total = parseInt(harga_per_orang) * parseInt(jumlah_orang);
      document.getElementById("total").value = total; // Menyimpan nilai total biaya dalam format angka tanpa "Rp"
    }
  </script>
</body>
</html>
