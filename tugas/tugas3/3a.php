<?php
echo "<h4> Menghitung Luas Lingkaran </h4>";
function LuasLingkaran($i)
{
    $luas = 3.14 * $i *$i;

    echo "jari-jari = $i cm <br>";
    echo "Luas Lingkaran = $luas cm²";
    return $luas;
};

LuasLingkaran(10);
echo "<hr>";

echo "<h4> Menghitung Luas Lingkaran </h4>";
function KelilingLingkaran($i)
{
    $keliling = 2 * 3.14 * $i;

    echo "Jari-Jari = $i cm <br>";
    echo "KelilingLingkaran = $keliling cm";
    return $keliling;
};

KelilingLingkaran(20);
echo "<hr>";

