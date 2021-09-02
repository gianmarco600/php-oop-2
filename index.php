<?php

require_once 'user.php';
require_once 'primeUser.php';
require_once 'product.php';

try {
    $franco = new User('franco@gmail.com', 'ocnarfoaic', 99);
} catch (Exception $e){
    echo 'eccezione: ' . $e->getMessage();
}

try {
    $franco2 = new User('francoIlVecchio@gmail.com', 'ocnarfoaic', 200);
} catch (Exception $e){
    echo 'eccezione: ' . $e->getMessage();
}

try {
    $superFranco = new PrimeUser('Sfranco@gmail.com', 'Socnarfoaic', 100, '000001');
} catch (Exception $e){
    echo 'eccezione: ' . $e->getMessage();
}

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
<ul> 
        <?php 
        foreach($franco->getAllData() as $elem){ ?>
        <li> 
            <?php echo $elem ?>
        </li>
        <?php } ?>
    </ul>
    <?php 
        $franco->setName('Franco');
        $franco->setSurname('Rossi');
     ?>
    <ul> 
        <?php foreach($franco->getAllData() as $elem){ ?>
        <li> 
            <?php echo $elem ?>
        </li>
        <?php } ?>
    </ul>
    
    <?php 
    $superFranco->setName('Sfranco');
    $superFranco->setSurname('Srossi')
    ?>
    <ul> 
        <?php foreach($superFranco->getAllData() as $elem){ ?>
        <li> 
            <?php echo $elem ?>
        </li>
        <?php } ?>
    </ul>
    <p>aggiungo social link a superFranco</p>
    <?php $superFranco->setFacebookLink('superfranco.facebook.com'); ?>
    <p><?php echo $superFranco->getLinks() ?></p>
    <p>aggiungo social link anche a franco</p>
    <?php $franco->setFacebookLink('franco.facebook.com'); ?>
    <p><?php echo $franco->getLinks() ?></p>
    <p>e anche twitter</p>
    <?php $superFranco->setTwitterLink('superfranco.twitter.com'); ?>
    <p><?php echo $superFranco->getLinks() ?></p>

    <p>creo un prodotto</p>

    <?php $cd = new Product('cd', 'lorem asasdf awefavsb', 'musica', 1);
    ?>

    <p><?php echo $cd->buy($superFranco) ?></p>
    <p>creo un secondo prodotto</p>

    <?php $vinile = new Product('vinile', 'lorem asasdf awefavsb', 'musica', 0);
    ?>

    <p><?php echo $vinile->buy($superFranco) ?></p>
</body>
</html>