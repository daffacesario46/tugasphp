<?php

//Fungsi if
//jika umur lebih 20 tahun maka anda dapat mengendarai mobil
//jika umur rata rata lebih 17 tahun, maka anda dapat mengendarai motor
//jika umur lebih 10 tahun, maka anda dapat mengendarai sepeda 
//selain itu tidak bole
$nama = "Daffa Cesario Safi'i";
$umur = 5; //ini yang dapat diubah
if ($umur < 40 && $umur >= 17){
    $ket = 'Dewasa';
} else if ($umur < 17 && $umur >= 9) {
    $ket = 'Remaja';
} else if ($umur < 9 && $umur > 5) {
    $ket = 'Anak - anak';
} else if ($umur <= 5 && $umur > 0) {
    $ket = 'Balita';
} else {
    $ket = 'Orang tua';
}
echo "Nama saya $nama, saya berumur $umur tahun, dan saya adalah $ket";

echo "<hr>";

$nilai = 8;
//cara if
if ($nilai > 6){
    echo "Baik";
} 
else {
    echo "Buruk";
}

echo "<br>";

//cara ternary
echo $nilai>6 ? "baik" : "buruk"; 
?>

