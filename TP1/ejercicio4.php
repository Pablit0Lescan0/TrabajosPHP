<?php
$ORIGEN=[0,2,1,3,6];
$DESTINO=[];
$maximo_elementos=18;
$INDICE=0;
$INDICE2=0;
$INDICE3=0;
           

            //VECTOR 
            for ($i=0; $i <5 ; $i++) { 
               $DESTINO[]=$ORIGEN[$i];
            }     

           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <h2> </H2>
    <div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est possimus, tenetur minus 
        ls sunt voluptas alias laudantium cupiditate inventore!<br>
        hola 
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