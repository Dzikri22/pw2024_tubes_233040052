<?php 
$komponen = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas - 4b</title>
</head>
<body>
    <h2>Macam-macam perangkat keras Komputer</h2>
    <ol>
        <?php foreach($komponen as $komp):?>
        <li><?= $komp?></li>
        <?php endforeach; ?>
    </ol><br>

    <!-- yang di tambah dan di urutkan  -->
    <h2>Macam-macam perangkata keras Komputer baru</h2>
    <ol>
        <?php array_push($komponen, "Card Reader", "Modem"); asort($komponen) ?>
        <?php foreach($komponen as $komp):?>
        <li><?= $komp?></li>
        <?php endforeach; ?>
    </ol>


</body>
</html>