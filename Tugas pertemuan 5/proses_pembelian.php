<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $takjil = $_POST["takjil"];
        $jumlah = $_POST["jumlah"];

        $harga_per_takjil = 5000;

        $total_harga = $harga_per_takjil * $jumlah;

        // informasi pembelian
        echo "<h2>Proses Pembelian Takjil</h2>";
        echo "<p>Terima kasih, $nama!</p>";
        echo "<p>Alamat pengiriman: $alamat</p>";
        echo "<p>Anda telah memesan $jumlah porsi $takjil.</p>";
        echo "<p>Total harga yang harus dibayar: Rp $total_harga</p>";
    } else {
        
        // Jika tidak ada data yang dikirim, tampilkan pesan error
        echo "<p>Maaf, tidak ada data yang dikirimkan.</p>";
    }
?>
