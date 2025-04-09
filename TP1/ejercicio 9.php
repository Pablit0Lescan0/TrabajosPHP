<?php
$IMP = []; 
$n = 10;
$numero = $n * 2 - 1; 

            for ($i = 0; $i < $n; $i++) {
                $IMP[$i] = $numero;
                $numero -= 2; 
            }

$IMP_ORIGINAL = $IMP;

$t = $IMP[0];
$IMP[0] = $IMP[$n - 1];
$IMP[$n - 1] = $t;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h2>Ejercicio 9</h2>
    <div>
        Se genera un arreglo con los primeros <?php echo $n; ?> números impares en orden descendente. 
        Luego, se intercambia el primer y último valor.
    </div>

    <p><center>Vector original:<p></center></p>
    <div style="width: 100%; text-align: center;">
        <?php
            for ($i = 0; $i < $n; $i++) {
                if ($i > 0) {
                    echo ", ";
                }
                echo $IMP_ORIGINAL[$i]; 
            }
        ?>
    </div>

    <p><center>Vector después del intercambio:<p></center>
    <div style="width: 100%; text-align: center;">
        <?php
            for ($i = 0; $i < $n; $i++) {
                if ($i > 0) {
                    echo ", ";
                }
                echo $IMP[$i]; 
            }
        ?>
    </div>
</body>
</html>