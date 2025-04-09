<?php
$ORIGEN=[0,2,1,3,5,6,4,9,8,7,10];

       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 6</title>
</head>
<body>
    <h2> </H2>
    <div>
    Dado el arreglo NUM que contiene números desordenados del 0 al 10, copiar todos los valores de NUM excepto el 8. 

    <p>Mostrar resultado:</p>
    <div style="width: 100%; text-align: center;">
        <?php
            $contador = 0;
            $total = count($ORIGEN);

            for ($i = 0; $i < $total; $i++) {

                if ($ORIGEN[$i] != 8) {

                    if ($contador > 0 ) {
                        echo ", ";
                    }
                        echo $ORIGEN[$i]; 
                    $contador++;

                }
            }
        ?>
    </div>
</body>
</html>