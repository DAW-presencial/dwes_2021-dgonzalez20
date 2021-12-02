<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda contactos Gonzalez Lastra David con Sesiones</title>
    </head>
    <body>
        <?php
        //Inicio una sesión con nombre cookie_sesion con una duración de 86400(milisegundos) convertido 
        //a horas son 24 horas 
        session_start(['cookie_sesion'=> 86400]); 
        //Hacemos uso de la variable superGlobal Sesion 
        if(!isset($_SESSION['contactos']))
            $_SESSION['contactos']=array();
        if(isset($_REQUEST['enviar']))
        {
            $nombre_contacto= trim($_REQUEST['nombreContacto']); 
            $telefono_contacto=$_REQUEST['telefonoContacto'];
            if(empty($nombre_contacto))
                echo"<p  El campo nombre no ha sido introducido</p><br/>";
                elseif (empty($telefono_contacto)) 
                    unset($_SESSION['contactos'][$nombre_contacto]); 
                else 
                    $_SESSION['contactos'][$nombre_contacto]=$telefono_contacto;  
            }
      ?>
        <h1>Generar nuevo contacto</h1> 
        <form action="" method="get">
            <div style="aling-items:left">
                <label> Nombre del contacto: 
                    <input type"text" name="nombreContacto"/><br>
                </label>
                <label> Telefono del contacto: 
                <input type="number" name="telefonoContacto"/><br>
                </label> 
                <input type="submit" name="enviar" value="Enviar Datos">
            </div>
        </form>
        <<h1>Mostrar agenda general</h1>
        <?php
        if(count($contactos)==0){
            echo "<p> En esta agenda no hay contactos";
        }else{
            echo"<ul>"; 
            foreach ($contactos as $nombre => $telefono) {
                echo "<li>".$nombre.';'.$telefono."</li>";
               
                
            }
            echo "</ul>";
        }

        ?>
    </body>
</html>
