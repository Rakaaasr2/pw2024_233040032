<?php
$binatang = ["😺", "🐨", "🐵", "🐮", "🐼", "🐊","👻","👽"];
$makanan = ['🍩','🍝','🍿','🥟','🌮'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    
    <h2> <i>Daftar Binatang </i></h2>
    <ol>
        <?php for ($i = 0; $i < count ($binatang); $i++) { ?>
        <li> <?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>

    <h2> <i> Daftar Makanan  </i></h2>
    <ul>
    <?php for ($i = 0; $i < count ($makanan); $i++) { ?>
        <li> <?php echo $makanan[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h3> Binatang-Binatang</h3>
    <ol>
        <?php foreach($binatang as $b) { ?>
        <li> <?php echo $b ?> </li>
        <?php } ?>
    </ol>

    <hr>

    <h2>Daftar makanan</h2>
    <ol>
        <?php foreach ($makanan as $m) : ?>
        <li> <?= $m; ?> </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>
