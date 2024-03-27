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


echo "<hr>";

$baju='M'; //ukuran baju
switch ($baju){
    case "L":
        echo "Large";
        break;
    case "M":
        echo "Medium";
        break;
    default:
        echo "Small";
}

echo "<hr>";

// TUGAS - SWITCHCASE
// jika nilai <=0 nilai : buruk
// jika nilai <=40 nilai : kurang
// jika nilai <=70 nilai : cukup
// jika nilai <=80 nilai : memuaskan
// jika nilai <=100 nilai : sangat memuaskan
// selain itu null
//JAWABAN: 
//statement switchcase


$nilai = 80;
switch ($nilai) {
    case $nilai <= 40 :
        echo "$nilai: Nilai Kurang";
        break;
    case $nilai <= 70 :
        echo "$nilai: Nilai cukup";
        break;
    default:
        echo "null";
} 

echo "<hr>";


$nilai2 = 40;
switch ($nilai2){
    case $nilai2 >= 0 && $nilai2 < 35 :
        echo "$nilai2: E";
    break;
    case $nilai2 >= 35 && $nilai2 <60:
        echo "$nilai2: D";
    break;

    default:
        echo "null";
}





?>


