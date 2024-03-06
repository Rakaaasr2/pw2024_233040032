<?php
// 1. membuat array
$hari = array ('senin','selasa','rabu','kamis');
$bulan = ['Januari','Februari','Maret','April'];
$mahasiswa = ['sandika', 3.1, false];




// 2. mencetak isi array
// Mencetak 1 nilai pada array,menggunakan index
// index di mulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";




// 3. memanipulasi isi array
// menambah isi array
// di akhir : [] atau array_push();
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "Mei");
print_r($bulan);
echo "<br>";

// di awal : array_unshift();
array_unshift ($mahasiswa, "233040032");
print_r($mahasiswa);
echo "<hr>";

// menghapus isi array
// di belakang : array_popp ();
// di depan : array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);

