<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piramid kebalik</title>

    <style>
        .box {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: blueviolet;
            color: black;
            text-align: center;
            line-height: 50px;
            border: 1px solid blue;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '<div class="box">' . $j . '</div>';
        }
        echo "<br>";
    }
    ?>

</body>

</html>