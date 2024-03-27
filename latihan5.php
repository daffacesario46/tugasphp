<?php

$siswa = 'Budi Santoso';
$matakuliah = 'PHP';
$nilai = 90;






$ket = ($nilai >= 60) ?"Lulus":"Bagus";

if ($nilai >= 85 && $nilai <=100) $grade = 'A';
else if ($nilai >= 75 && $nilai <= 85) $grade = 'B';
else $grade = '';

switch ($grade) {
    case 'A':
        $predikat = 'Memuaskan';
        break;
    case 'B':
        $predikat = 'Lumayan';
        break;
        default:
        $predikat = '';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Nama Siswa: <?php echo $siswa ?> </h1>
    <h1> Mata Kuliah: <?php echo $matakuliah ?> </h1>
    <h1> Nilai Siswa: <?php echo $nilai ?> </h1>
    <h1> Keterangan: <?php echo $ket ?> </h1>
    <h1> Predikat: <?php echo $predikat ?> </h1>
    <h1> Grade: <?php echo $grade ?> </h1>
</body>
</html>