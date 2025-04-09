<?php
$IMPARES=[];
$RESULTADO=[];
$NATURALES=[];
$maximo_elementos=18;
$min_elementos=3;
$IMP=1;
$INDICE=0;
$INDICE2=0;
$INDICE3=0;
            //VECTOR IMPARES
            while ($INDICE<$maximo_elementos){
                $IMPARES[$INDICE]=$IMP;

                $INDICE++;
                $IMP=$IMP+2;
            }

                    //VECTOR NATURALES
                    while ($INDICE2<$maximo_elementos){
                        $NATURALES[$INDICE2]=$INDICE2;

                        $INDICE2++;
                        }


            //VECTOR RESULTADO
            for ($i=0; $i <3 ; $i++) { 
               $RESULTADO[]=$NATURALES[$i];
            }     

            for ($i=15; $i <18 ; $i++) { 
                $RESULTADO[]=$IMPARES[$i];
             }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
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
                 for ($i=0; $i <count($RESULTADO) ; $i++) { 
                    if ($i<5) { 
                    echo "$RESULTADO[$i] , ";
                 } else {
                    echo "$RESULTADO[$i] ";
                 }
                }
        ?>
    </div>
</body>
</html>