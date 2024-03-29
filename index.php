<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investasi Tabungan PHP</title>
</head>
<body>
    <?php
    // Fungsi untuk menghitung nilai investasi tabungan
    function hitungInvestasi($setoranBulanan, $tingkatBunga, $jangkaWaktu) {
        $nilaiInvestasi = 0;
        for ($i = 1; $i <= $jangkaWaktu; $i++) {
            $nilaiInvestasi = ($nilaiInvestasi + $setoranBulanan) * (1 + ($tingkatBunga / 100));
        }
        return $nilaiInvestasi;
    }
    ?>

    <h1>Investasi Tabungan PHP</h1>

    <form method="post" action="">
        <label for="setoran_bulanan">Jumlah Setoran Bulanan:</label>
        <input type="number" name="setoran_bulanan" required>
        <br>
        <label for="tingkat_bunga">Tingkat Bunga Tahunan (%):</label>
        <input type="number" name="tingkat_bunga" required>
        <br>
        <label for="jangka_waktu">Jangka Waktu Investasi (tahun):</label>
        <input type="number" name="jangka_waktu" required>
        <br>
        <input type="submit" name="hitung" value="Hitung Nilai Investasi">
    </form>

    <?php
    // Memproses form perhitungan
    if (isset($_POST['hitung'])) {
        $setoranBulanan = $_POST['setoran_bulanan'];
        $tingkatBunga = $_POST['tingkat_bunga'];
        $jangkaWaktu = $_POST['jangka_waktu'];

        $nilaiInvestasi = hitungInvestasi($setoranBulanan, $tingkatBunga, $jangkaWaktu);

        echo "<p>Nilai investasi tabungan setelah $jangkaWaktu tahun adalah: $nilaiInvestasi</p>";
    }
    ?>
</body>
</html>