<?php

require_once 'user.php';
require_once 'primeUser.php';

$franco = new User('franco@gmail.com', 'ocnarfoaic', 99);

$superFranco = new PrimeUser('Sfranco@gmail.com', 'Socnarfoaic', 100, '000001');

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
    <h1><?php echo $franco->getAllData() ?></h1>
    <?php 
        $franco->setName('Franco');
        $franco->setSurname('Rossi');
     ?>
    <h2><?php echo $franco->getAllData() ?></h2>
    
    <h1><?php echo $superFranco->getAllData()?></h1>
    
</body>
</html>