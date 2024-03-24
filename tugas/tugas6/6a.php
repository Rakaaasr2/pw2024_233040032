<?php

$angka = 0;

if (isset($_GET["angka"])) {
    $angka = $_GET["angka"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a</title>
    <style>
    .flex {
        display: flex;
        gap: 2px;
    }

    .KOTAK1,
    .KOTAK2 {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: white;
        margin: 2px;
        border: 1px solid black;
        border-radius: 3px;
        background-color: Aqua;
    }

    .KOTAK2 {
        background-color: white;
        color: black;
    }
    </style>
</head>

<body>
    <a href="latihan6a.php?angka=<?= $angka ?>"></a>

    <?php
    for ($i = $angka; $i >= 1; $i--) { ?>
    <div class="flex">
        <?php for ($j = 1; $j <= $i; $j++) : ?>
        <?php if ($i % 2 == 0) : ?>
        <div class="KOTAK1"><?= $i  ?></div>
        <?php else : ?>
        <div class="KOTAK2"><?= $i ?></div>
        <?php endif ?>
        <?php endfor ?>
    </div>
    <?php } ?>
</body>

</html>