<?php
//PENGULANGAN / LOOPING
//for, while, do while, foreach
//while
//nilai awal / initial value
//2.kondisi terminasi / saat looping berhenti
//3.increment / Decrement
$i = 10 ;
while ($i >=1) {
    echo " Hello world $i x <br>";
    $i = $i - 1;
}

echo "<hr>";

for($i = 1; $i <= 10; $i = $i +2 )  {
    echo "Hello World $i <br>";
}