<?php
//looping dengan FOR
// hitung pengulangan 1 sampai dengan 10
for($x=1;$x<=10;$x=$x+2){ //bisa menggunakan $x++ atau $x=$x-1
    echo "$x <br>";
}

for($y=10;$y>=1;$y=$y-1){ //bisa menggunakan $y-- atau $y=$y-1
    echo "$y <br>";
}

echo "<hr>";

//looping dengan WHILE
$j=1;
while($j<=10){
    echo "$j <br>";
    $j++;
}

echo "<hr>";

$n=10;
while($n>=1){
    echo "$n <br>";
    $n--;
}

echo "<hr>";
?>

<form>
    Jumlah siswa:
    <?php
    for($z=1;$z<=10;$z=$z+2){//bisa menggunakan $x++ atau $x=$x-1
        echo '<input type="radio" value="$z">'.$z;
    }
    ?>

</form>