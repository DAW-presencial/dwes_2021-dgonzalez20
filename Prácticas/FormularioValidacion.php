<?php
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba Formulario</title>
    </head>
    <body>
        <?php
         if(isset($_POST['submit'])){
             echo 'El formulario es correcto';
         }
         else {
             generarFormulario();
         }    
       function generarFormulario(){
          /*tOMA COMO PARÁMETRO */
         global $nombre,$apellido,$edad;
       ?>
        <h2> Formulario</h2>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Escriba su nombre" value="<?php echo $nombre;?>"/>
            <input type="text" name="apellido" placeholder="Escriba su apellido" value="<?php echo $apellido;?>"/>
            <input type="text" name="edad" placeholder="Escriba su edad" value="<?php echo $edad;?>">
            <input type="submit" name="submit"/ Enviar Datos>
        </form>
       
       <?php
       }
       ?>
    </body>
</html>