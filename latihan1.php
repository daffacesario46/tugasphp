<?php

//ini single comment
/*komentar 1
komentar 2
komentar 3*/

//cetak
echo 'Belajar PHP <br>';
echo '<br>';
echo "Saya sengan belajar \"PHP\"";
echo '<br>';
echo "Belajar MySQL";
echo '<hr>';


//variabel user
$nama="Dono warkop"; //data string
$alamat="Bogor raya"; //data string
$umur=30; //data integer
$berat=70.5; //data float
$_pekerjaan="Karyawan"; //data string
echo $nama;
echo $alamat;
echo $umur;
echo $berat;
echo "<br>";
echo "nama saya $nama alamat di $alamat <br>";
echo 'nama saya'. $nama .'alamat di'.$alamat. '<br>';
echo "umur saya: $umur <br>";
echo "berat saya: $berat <br>";
echo 'pekerjaan saya: ' .$_pekerjaan. '<br>';
echo "<hr>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable user</title>
</head>
<body>
    
    <h2> Nama Saya :<?php echo $nama?></h2>
    <h2> Umur Saya :<?= $umur ?>Tahun</h2>

</body>
</html>

<?php

//variabel system
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";

//variabel konstanta
//define untuk memanggil variabel konstanta
define('PELAJARAN', 'PHP dasar');
echo "ini matakuliah:".PELAJARAN;

echo "<hr>";


$a="100";
$b="50";
echo $a+$b;
echo "<hr>";

define('PHI',3.14);
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>jari jarinya adalah: <?= $jari2 ?></p>
</body>
</html>

<hr>

<?php

//tipe data string
$itungstring="Belajar PHP di kampus merdeka";
var_dump($itungstring);
echo "<br>";


//mengetahui tipe variabel
$huruf="dono";
$hasil=gettype($huruf);
echo $hasil;
echo "<br>";


$bil1=100;
$hasil=gettype($bil1);
echo $hasil;
echo "<br>";

$bil2=170.5;
$hasil=gettype($bil2);
echo $hasil;
echo "<br>";

?>