<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="250px" cellspacing="0px" cellpadding="0px">
        <?php
        for ($baris = 1; $baris <= 5; $baris++) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                if (($kolom + $baris) % 2 == 0) {
                    echo "<td height='50px' width='50px' style='background:#000; border:1px black solid;'></td>";
                } else {
                    echo "<td height='50px' width='50px' style='background:#fff; border:1px black solid;' ></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>