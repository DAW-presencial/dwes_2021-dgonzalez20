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
    <h2> Agenda Contactos Gonzalez Lastra David </h2>
    <form method="post" name="Formulario">
        <label for="nombre" Nombre Contaacto</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre ">
        <label for="apellido">Apellido Contacto</label>
        <input type="text" name="apellido" id="apellido" placeholder="Escriba su apellido">
        <label for="direccion">Dirección </label>
        <input type="text" name="direccion" id="direccion" placeholder="¿Dpmde vive?">
        <label for="correo">Correo electrónico</label>
        <input name="correo_electronico" id="correo" placeholder="Con que correo podemos contactar con usted ">
        <h2> Que operación quieres realizar</h2>
        <input type="submit" value="Añadir Contacto a la agenda" name="añadir_datos">
        <input type="submit" value="Mostrar Datos" name="mostar_datos">
        <input type="submit" value="Borrar Datos" name="borrar_datos">
        <input type="submit" value="Editar_Datos" name="editar_datos">
    </form>



    <?php
    include_once"Operations.php";
    include_once "TablaAgenda.php"
    ?>
</html>
