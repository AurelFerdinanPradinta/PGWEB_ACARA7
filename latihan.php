<?php
$kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
$luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
$jumlah_penduduk = array(31497, 29886, 47129, 72028, 108675);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>kecamatan</th><th>luas</th><th>jumlah_penduduk</th></tr>";

for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>" . $kecamatan[$i] . "</td><td>" . $luas[$i] . "</td><td>" . $jumlah_penduduk[$i] . "</td></tr>";
}

echo "</table>";
?>
