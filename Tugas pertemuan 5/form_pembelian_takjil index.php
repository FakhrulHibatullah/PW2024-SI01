<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Takjil</title>
</head>
<body>
    <h2>Form Pembelian Takjil</h2>
    <form action="proses_pembelian.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br>
        
        <label for="takjil">Pilih Takjil:</label><br>
        <select id="takjil" name="takjil" required>
            <option value="Kolak">Kolak</option>
            <option value="Es Buah">Es Buah</option>
            <option value="Es Campur">Es Campur</option>
            <option value="Es Kelapa Muda">Es Kelapa Muda</option>
            <!-- Tambahkan opsi lain jika diperlukan -->
        </select><br>
        
        <label for="jumlah">Jumlah:</label><br>
        <input type="number" id="jumlah" name="jumlah" min="1" required><br>
        
        <input type="submit" value="Pesan">
    </form>
</body>
</html>
