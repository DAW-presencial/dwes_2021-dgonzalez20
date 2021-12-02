<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contactos Gonzalez Lastra David </title>
    </head>
    <body>
        <?php
        /*Consultamos en la variable POST,si se ha generado este array, en caso de que no se haya generado, lo generamos un array,
         * Comprobamos si el botón submit ha sido enviado.
         */
        if(isset($_GET['contactos']))
            $contactos=$_GET['contactos'];
        else
            $contactos=array();

        if(isset($_GET['enviar']))
        {
            /*Declaramos las variables, filter_input es para filtrar el valor del input
             lo guardamos en la variable input get seguido del nombre que ira en el id de los inputs */
            $nombre_contacto=filter_input(INPUT_GET,'nombreContacto');
            $telefono_contacto=filter_input(INPUT_GET,'telefonoContacto');
            if(empty($nombre_contacto))
            {
                echo"<p El campo nombre no ha sido introducido</p><br/>";

            }
            elseif(empty($telefono_contacto))
            {
                unset($contactos[$nombre_contacto]);

            }
            else
            {
              $contactos[$nombre_contacto]=$telefono_contacto;

        }
        }
        ?>
        <h1>Generar nuevo contacto</h1>
      <form>
            <div style=" aling-items:left">
                <?php
                foreach ($contactos as $nombre => $telefono) {
            echo '<input type="hidden" name="contactos['.$nombre.']"';
            echo 'value="'.$telefono.'"/>';
        }
        ?>
                <label> Nombre del contacto:
                    <input type"text" name="nombreContacto"/><br>
                </label>
                <label> Telefono del contacto:
                <input type="number" name="telefonoContacto"/><br>
                </label>
                <input type="submit" name="enviar" value="Enviar Datos">
            </div>
        </form>
        <br>
        <h1>Agenda general</h1>
        <?php
        /*Comprobamos que la longitud de la agenda sea exsactamente igual a 0 posiciones en este objeto */
        if(count($contactos)==0 ){
        echo "<p>No existen contactos en la agenda.</p>";
        }
        else {
            echo"<ul>";
            foreach ($contactos as $nombre => $telefono) {
                echo"<li>".$nombre.';'.$telefono ."</li>";

            }
            echo "</ul>";
        }
        ?>
    </body>
</html>

?>