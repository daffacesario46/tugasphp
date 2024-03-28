<?php
//array adalah sekumpulan data
// array numerik dan array asosiatif
//untuk mencetak array memerlukan foreach

//1. array numerik

$ar_buah = ['pepaya', 'Mangga', 'Pisang', 'Anggur', 'Jeruk'];

//cetak index ke ?
echo $ar_buah[4];
echo "<hr>";
//tampilkan jummlah total pada buah

$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

//lihat hasil data buah dengan foreach
foreach($ar_buah as $value){
    echo "$value <br>";
}
echo "<hr>";

//2. array asosiatif
$ar_hewan = [10=>'Babi', 20=>'Monyet','Kucing', 30=>'Anjing','putri galax'];
echo $ar_hewan[10];
echo "<hr>";

//lihat hasil data hewan dengan foreach
foreach($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}


echo "<hr>";


//3. array multidimensi (array dalam array)
//cara 1
$daftar_staf = [
    ["nama" => "Budi ", "Alamat"=>"Depok ", "Telp" => 12345, "status"=>"jomblo "],
    ["nama" => "Alif ", "Alamat"=>"Bogor ", "Telp" => 898123, "status"=>"duda "],
    ["nama" => "Jamal", "Alamat"=>"Mars", "Telp" => 745263, "status"=>"jomblo gatel"],
    
];

foreach($daftar_staf as $namax){
    echo "$namax[status]";
}

//cara 2

$a1=["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"];
$a2=["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"];
$a3=["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"];
$daftar_siswa = [$a1,$a2,$a3];
foreach ($daftar_siswa as $namaxx) {
    echo "$namaxx[nama] <br>";
}


?>