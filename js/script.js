// Mengambil semua gambar dalam slider
const images = document.querySelectorAll('#imageSlider .col-md-2');

// Membuat variabel untuk mengatur waktu muncul kembali
let index = 0;
const interval = 50; // 2 detik

// Menerapkan fungsi untuk mengubah opasitas setelah waktu tertentu
function fadeInOut() {
  // Menampilkan gambar saat ini dengan opasitas penuh
  images[index].style.opacity = 1;
  
  // Menunggu interval sebelum memudar
  setTimeout(() => {
    // Mengatur opasitas gambar saat ini menjadi 0
    images[index].style.opacity = 0;
    
    // Menambahkan indeks untuk mengganti gambar berikutnya
    index = (index + 1) % images.length;
    
    // Memanggil kembali fungsi setelah interval
    setTimeout(fadeInOut, interval);
  }, interval);
}

// Memanggil fungsi untuk memulai efek fadeInOut
fadeInOut();
