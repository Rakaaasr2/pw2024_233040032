<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
    <style>
        .flex {
            display: flex;
        }

        .kotak {
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            color: white;
            border: 2px solid black;
            background-color: red;
        }

        .kotak1 {
            background-color: black;
        }

        .kotak2 {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="flex">
            <?php for ($j = 1; $j <= 5; $j++) { ?>
                <?php if (($i + $j) % 2 == 0) { ?>
                    <div class="kotak kotak1"></div>
                <?php } else { ?>
                    <div class="kotak kotak2"></div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>