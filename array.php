<?php 
// array(variable yg dapat memiliki banya knilai)
// di php boleh tipe data nya beda
$arr1 = [123, "tulisan", false];
// pasangan key adlh value
// key ialah index yg di mulai dari 0


// untuk membuat array ad 2cara cara lama dan baru
// lama |
$hari = array("senin", "selasa", "rabu", "dll");
//----------------------------------------
// baru |
$bulan = ["januari", "februari", "maret", "dll"];

// cara menampilkan array di layar adlh "menggubakan var_dump() / print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// cara menampilkan 1 elemen pada array
// echo $arr1[0];

// cara menambah kan elemen barupada array
var_dump($hari);
$hari [] = "kamis";
$hari [] = "jum'at";
echo  "<br>";
var_dump($hari);
