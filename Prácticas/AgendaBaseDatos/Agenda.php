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
    <body
                <label for="nombreContacto "> Nombre del contacto:
                    <input type="text" name="nombreContacto" id="nombreContacto "/><br>
                </label>
                <label for="apellido">Apellido
                    <input type="text" name="apellido" id="apellido">
                </label>
                <label for="telefonoContacto "> Telefono del contacto:
                        <input type="number" name="telefonoContacto" id="telefonoContacto "/><br>
                </label>
                <input type="submit" name="enviar" value="Enviar Datos">
            <br>
      <h1>Que operación CRUD queres realizar </h1>
    </div>
    <input class="opciones crud" type="submit" name="Insertar_Datos" value="Insertar_datos">
        </form>
    </body>
    <?php
    include_once"Operations.php";
    include_once "TablaAgenda.php"
    ?>
</html>
