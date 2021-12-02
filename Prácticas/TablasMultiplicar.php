<!DOCTYPE html>
<!--
Clic k nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas de multiplicar</title>
    </head>
    <h1>Tablas de multiplicar</h1>
   
        
        <?php
        // For que inicializa la variable valor esta tiene valor inicial 1 
        // siempre y cuando no sea mayor o igual a 10 icrementara en 1 su valor 
        // */
       for ($valor=1;$valor<=10;$valor++){
       echo"<br> La tabla de multiplicar del",$valor,"es";
       for ($operador=1;$operador<=10;$operador++){
           echo "<br>$valor*$operador=",$valor*$operador;  
            }
        }
        ?>
    </body>
</html>
