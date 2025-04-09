<?php
$NATURALES=[];
$maximo_elementos=18;

$INDICE=0;
    while ($INDICE<$maximo_elementos){
        $NATURALES[$INDICE]=$INDICE;

        $INDICE++;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <h2> </H2>
    <div>
        Cargar un arreglo NATURALES  con 18 valores numéricos de manera ascendente.
    </div>
    <p>Mostrar resultado:</p>
    <div style="width: 100%; text-align: center;">
        <?php
            for ($i=0; $i <= 17; $i++) { 
            if ($i<17) {
                echo "$NATURALES[$i], ";
            } else {
                echo   "$NATURALES[$i]";
            }
            }
        ?>
    </div>
</body>
</html>