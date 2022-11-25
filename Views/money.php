<?php 
    $eleccion = $_GET["op"];
    $gano = $_GET["f"];
    $op = $_GET["j"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/money.css">
    <title>Moneda girando</title>
</head>
<body>
    <?php if ($gano == 1) { ?>
        <div class="g">
            <h1>GANASTE</h1>
        </div>
    <?php } else { ?>
        <div class="p">
            <h1>PERDISTE</h1>
        </div>
    <?php } ?>
    <?php echo $eleccion ?>
    <div class="flip-container">
    <div class="card">
    <?php if($eleccion=="Cara") { ?>
        <div class="front">
        <p>Cara</p>
        </div>
        <div class="back">
        <p>Sello</p>
        </div>
    <?php } else { ?>
        <div class="front">
        <p>Sello</p>
        </div>
        <div class="back">
        <p>Cara</p>
        </div>
    <?php } ?>
    </div>
    </div> 

    <div class="dashboard">
        <h3>Tu eleccion fue: <?php if($op == 0){ echo "Cara";} else if($op == 1){ echo "Sello"; } ?></h3>
        <p>Y el sistema escogio: <?php if ($eleccion == "Cara"){ echo "Cara";} else if($eleccion == "Sello") { echo "Sello"; }?></p>
        <a href="../index.php">Volver a jugar</a>
    </div>
</body>
</html>