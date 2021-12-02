<html>
    <head>
        <title>Tablas de multiplicar</title>
    </head>
    <body>

    </body>
</html>

<?php

//Declaración de variables, se usan el segundo y tercer for for 

$valor_tabla;
$valor_multiplicación; 

//Con este for generamos una cabecera para cada una de las tablas */
echo "<table text-aling:center; color:black border=3";
echo"<tr>";
    for($tabla_multiplicar=1;$tabla_multiplicar<=10;$tabla_multiplicar++){
        echo"<td> La tabla del $tabla_multiplicar";
    }
    echo"</tr>";
    echo "<tr>";
    
    // Estos dos estamos indicando el numero de tablas que ha de generar siendo valor_tabla 
    // 1 -10 es decir todos los valor que puede multiplicar,y siendo valor_multiplicación 
    // por la tabla que debe de multiplicar/*
    for($valor_tabla=1;$valor_tabla<=10;$valor_tabla++){
        for($valor_multiplicación=1;$valor_multiplicación<=10;$valor_multiplicación++){
            echo"<td>$valor_tabla x $valor_multiplicación =";
            echo ($valor_tabla*$valor_multiplicación);
            echo "</td>";
        }
        echo"</tr>";
    }
    echo "</table>";
    
// modificar Código 
?>

