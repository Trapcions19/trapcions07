<?php
$nama ="Agung";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Haloo, selamat datang <?php echo "Agung Gumelar";?></h1>
    <h2>Ini orang ganteng <?php 
    //contoh pemanggilan variabel//
    echo " $nama"; ?></h2>
    <p><?php 
     // ini contoh php dalam php //
    echo"ini adalah paragraf ";?> </p>
    <?php 
    // ini adalah contoh html dalam php //
   echo "<h1>Hallo Agung Gumelar</h1>"
    ?>
</body>
</html>