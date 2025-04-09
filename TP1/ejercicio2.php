<?php
$IMPARES=[];
$maximo_elementos=18;
$IMP=1;

$INDICE=0;
    while ($INDICE<$maximo_elementos){
        $IMPARES[$INDICE]=$IMP;

        $INDICE++;
        $IMP=$IMP+2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <h2> </H2>
    <div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est possimus, tenetur minus 
        ls sunt voluptas alias laudantium cupiditate inventore!
    </div>
    <p>Mostrar resultado:</p>
    <div style="width: 100%; text-align: center;">
        <?php
            for ($i=17; $i >= 0; $i--) { 
                if ($i>0) {
                    echo "$IMPARES[$i], ";
                } else {
                    echo "$IMPARES[$i]";
                
                }
            }
        ?>
    </div>
</body>
</html>