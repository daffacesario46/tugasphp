<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);
    
    echo "<h2>Data Mahasiswa</h2>";
    echo "<table border='1'>";
    echo "<tr><th>NIM</th>
        <th>Nama</th>
        <th>Kuliah</th>
        <th>Matakuliah</th>
        <th>Nilai</th>
        <th>Grade</th>
        <th>Predikat</th>
        <th>Status</th> 
        </tr>";
    echo "<tr>";
    echo "<td>" . $mahasiswa->nim . "</td>";
    echo "<td>" . $mahasiswa->nama . "</td>";
    echo "<td>" . $mahasiswa->kuliah . "</td>";
    echo "<td>" . $mahasiswa->matakuliah . "</td>";
    echo "<td>" . $mahasiswa->nilai . "</td>";
    echo "<td>" . $mahasiswa->grade . "</td>";
    echo "<td>" . $mahasiswa->predikat . "</td>";
    echo "<td>" . $mahasiswa->status . "</td>";

    echo "</tr>";
    echo "</table>";
}
?>

<style>
    table {
        margin: 0 auto; 
        width: 80%; 
        border-collapse: collapse; 
    }
    h2 {
        text-align: center;
    }
    th, td {
        padding: 8px; 
        border: 1px solid #ddd; 
        text-align: center; 
    }
    th {
        background-color: #f2f2f2; 
    }
</style>