<?php

$opcion = $_POST["op"];

$random = rand(0,1);
$Num = "";

if ($random == 0) {
    $Num = 0;
}else{
    $Num = 1;
}

if ($opcion == 0) {
    if ($Num == 0) {
        $eleccion = "Cara";
        echo "El programa escogio: Cara y usted eligio: Cara<br>";
        header('location:../Views/money.php?op=Cara&&f=1&&j=0');
    } else {
        $eleccion = "Sello";
        echo "El programa escogio: Sello y usted eligio: Cara<br>";
        echo "Perdio";
        header('location:../Views/money.php?op=Sello&&f=0&&j=0');
    }
} else {    
    if ($Num == 1) {
        $eleccion = "Sello";
        echo "El programa escogio: Sello y usted eligio: Sello<br>";
        echo "GANO";
        header('location:../Views/money.php?op=Sello&&f=1&&j=1');
    } else {
        $eleccion = "Cara";
        echo "El programa escogio: Cara y usted eligio: Sello<br>";
        echo "Perdio";
        header('location:../Views/money.php?op=Cara&&f=0&&j=1');
    }
}

/*echo "<br><a href='../index.php'>volver</a>";
echo "<br><a href='../Views/money.php'>Moenda girando</a>";*/

?>