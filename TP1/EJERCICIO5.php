<?php
$ORIGEN=[0,2,1,3,6];
$DESTINO=[];
$INDICE_decendente=count($ORIGEN) -1;
$INDICE_ascendente=0;

            //VECTOR 
           while ($INDICE_decendente>= 0) {
             $DESTINO[$INDICE_ascendente]=$ORIGEN[$INDICE_decendente];
                $INDICE_decendente--;
                 $INDICE_ascendente++;
            
           } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>
<body>
    <h2> </H2>
    <div>
    Dados dos arreglos ORIGEN Y DESTINO, cargar de manera manual y desordenada ORIGEN y pasar cada uno de los elementos de ORIGEN  a DESTINO pero en el orden inverso.
    </div>
    <p>Mostrar resultado:</p>
    <div style="width: 100%; text-align: center;">
        <?php
                    //MOSTRAR resultado
                 for ($i=0; $i <count($DESTINO) ; $i++) { 
                    if ($i<4) { 
                    echo "$DESTINO[$i] , ";
                 } else {
                    echo "$DESTINO[$i] ";
                 }
                }
        ?>
    </div>
</body>
</html>