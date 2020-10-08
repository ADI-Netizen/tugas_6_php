<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jambu = 15000;
    $kardus = 2000;
    ?>

    ==================================================================================<br>
    Harga Jambu = Rp <?= $jambu ?> /Kg <br>
    Harga Kardus = Rp <?= $kardus ?> /pcs <br>
    Total Penjualan (Dus dan Jambu) = Rp
    <?php
    $totalJambu = 6 * $jambu;
    $totalDus = (2 + 6) * $kardus;
    $totalPenjualan = $totalJambu + $totalDus;
    echo $totalPenjualan;
    ?> <br>
    ==================================================================================
</body>

</html>