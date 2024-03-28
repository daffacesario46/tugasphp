<?php
$a1 = ['kode' => '111', 'buah' => 'Apel', 'harga' => 20000, 'jumlah' => 4];
$a2 = ['kode' => '112', 'buah' => 'Anggur', 'harga' => 15000, 'jumlah' => 5];
$a3 = ['kode' => '113', 'buah' => 'Mangga', 'harga' => 30000, 'jumlah' => 5];
$a4 = ['kode' => '114', 'buah' => 'Pisang', 'harga' => 40000, 'jumlah' => 5];
$a5 = ['kode' => '115', 'buah' => 'Jeruk', 'harga' => 25000, 'jumlah' => 5];

$ar_buah = [$a1, $a2, $a3, $a4, $a5];

//deklarasikan nama nama judul pada table header menggunakan looping array

$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah beli', 'Harga kotor', 'Diskon', 'Harga bayar'];

//fungsi agregat di array
$jumlah_harga = array_column($ar_buah, 'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$jumlah_transaksi = count($ar_buah);
$harga_rata = $harga_total / $jumlah_transaksi;


$keterangan = [
    'Harga total' => $harga_total,
    'Harga tertinggi' => $harga_tertinggi,
    'Harga terendah' => $harga_terendah,
    'Jumlah transaksi' => $jumlah_transaksi,
    'Rata rata harga' => $harga_rata
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar buah-buahan</title>
</head>
<body>
    <h3 align="center">Daftar buah buahan</h3>
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
            foreach ($ar_buah as $buah){
                //bruto=harga*jumlah
                $bruto = $buah ['harga']*$buah['jumlah'];
                //diskon = jika durian dengan jumlah beli >= 5 dapat diskon 20% selain itu hanya 10% saja
                $diskon = ($buah ['buah'] == 'Jeruk' && $buah['jumlah'] >=5) ? 0.2 : 0.1 ;
                $harga_diskon = $diskon * $bruto ;
                $harga_bayar = $bruto - $harga_diskon;
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $buah['kode'] ?></td>
                <td><?= $buah['buah'] ?></td>
                <td><?= $buah['harga'] ?></td>
                <td><?= $buah['jumlah'] ?></td>
                <td><?= $bruto ?></td>
                <td><?= $harga_diskon ?></td>
                <td><?= $harga_bayar ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
                foreach($keterangan as $ket => $hasil){
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