<?php
$NUMS=[];
$n=10;
  
  for ($i=0;$i<$n;$i++)
  	$NUMS[$i]=$i;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 9</title>
</head>
<body>
    <h2> </H2>
    <div>
   Cargar un arreglo NATURALES  con N valores numéricos de manera ascendente. y sumar todos sus valores. Imprimir el resultado.

    </div>
    <p>Mostrar resultado:</p>
    <div style="width: 100%; text-align: center;">
          <?php
            for ($i = 0; $i < $n; $i++) {
                if ($i > 0) {
                    echo ", ";
                }
                echo $NUMS[$i];
          
            }
        ?>
        <?php
        	$RESULTADO=0;

        	for ($i = 0; $i < $n; $i++){
        		$RESULTADO+=$NUMS[$i];
        	}
        	echo "<br>";
        	echo "la suma de todos los numeros es ";
        	echo $RESULTADO;
        ?>
       
    </div>
</body>
</html>