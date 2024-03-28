<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="10" align="center">
        <thead>
            <tr bgcolor="yellow">
                <th>Nomor</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($no=1;$no<=10;$no++){
                //tentukan warna genap dan ganjil memakai ternary
                //jika no modulus (%) 2 tidak ada sisa 0 
                    $warna = ($no % 2 == 0) ? 'white' : 'pink' ;

                    echo "<tr bgcolor='$warna'>";
                    echo "<td>$no</td>";
                    echo "<td>Siswa $no</td>";
                    echo "<td>jl.Bogor raya no. $no</td>";
                }

            ?>
        </tbody>
    </table>
</body>
</html>