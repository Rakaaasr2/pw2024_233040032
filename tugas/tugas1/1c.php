<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1c.php</title>
</head>
<body>
    <style>

        .allkotak {
            display:flex;
            flex-direction;
        }
        
        .kotak {
            width: 50px;
            height: 50px;
            text-align:center;
            line-height: 50px;
            border: 1px solid black;
        }

        .row {
            display:flex;
        }

        .row .kotak {
            background-color:#E74C3C;
        }
    </style>
</body>

<div class="row">
    <div class="kotak">1</div>
</div>
<div class="row">
    <div class="kotak">2</div>
    <div class="kotak">2</div>
</div>
<div class="row">
    <div class="kotak">3</div>
    <div class="kotak">3</div>
    <div class="kotak">3</div>
</div>
</html>