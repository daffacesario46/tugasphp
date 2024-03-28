<?php

$a1 = ['Nama' => "Jocelyn Alva Jonetta", 'NIM' => "11501", 'Nilai' => 95];
$a2 = ['Nama' => "Cindy Putri Mardian", 'NIM' => "11502", 'Nilai' => 75];
$a3 = ['Nama' => "Januar Dwi Ayu Lestari", 'NIM' => "11503", 'Nilai' => 85];
$a4 = ['Nama' => "Danar Riko Al-harits", 'NIM' => "11504", 'Nilai' => 40];
$a5 = ['Nama' => "Mochamad Arifin Kurniawan", 'NIM' => "11505", 'Nilai' => 60];
$a6 = ['Nama' => "Viviana Hanifa", 'NIM' => "11506", 'Nilai' => 70];
$a7 = ['Nama' => "Ivan Ibrahim", 'NIM' => "11507", 'Nilai' => 50];
$a8 = ['Nama' => "Jenengan Joko Sutino", 'NIM' => "11508", 'Nilai' => 80];
$a9 = ['Nama' => "Mangkubumi Adisubroto", 'NIM' => "11509", 'Nilai' => 30];
$a10 = ['Nama' => "Mangundikusumo Diharjono", 'NIM' => "11510", 'Nilai' => 10];

$ar_mahasiswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];

//pendeklarasian nama judul pada table header

$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


//fungsi agregat di array
$jumlah_nilai = array_column($ar_mahasiswa, 'Nilai');
$nilai_total = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_mahasiswa = count($ar_mahasiswa);
$nilai_rata = $nilai_total / $jumlah_mahasiswa;

$keterangan_nilai = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata Rata' => $nilai_rata,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $nilai_total

];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        tfoot th {
            background-color: #ccc;
        }

        tfoot th, tfoot td {
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 align="center">Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){ ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($ar_mahasiswa as $mahasiswa){
                $keterangan = ($mahasiswa ['Nilai'] >= 65) ? "Lulus" : "Tidak Lulus";

                if ($mahasiswa['Nilai'] >= 85 && $mahasiswa['Nilai'] <= 100) $grade = 'A';
                else if ($mahasiswa['Nilai'] >= 75 && $mahasiswa['Nilai'] <= 85) $grade = 'B';
                else if ($mahasiswa['Nilai'] >= 65 && $mahasiswa['Nilai'] <= 75) $grade = 'C';
                else if ($mahasiswa['Nilai'] >= 45 && $mahasiswa['Nilai'] <= 65) $grade = 'D';
                else if ($mahasiswa['Nilai'] >= 0 && $mahasiswa['Nilai'] <= 45) $grade = 'E';
                else $grade = '';

                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Buruk';
                        break;
                    default:
                        $predikat = '';
                        break;
                }



            
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mahasiswa['Nama'] ?></td>
                <td><?= $mahasiswa['NIM'] ?></td>
                <td><?= $mahasiswa['Nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>


            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php
                foreach($keterangan_nilai as $ket => $hasil){
            ?>
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>

            <?php } ?>
        </tfoot>
    </table>
</body>
</html>