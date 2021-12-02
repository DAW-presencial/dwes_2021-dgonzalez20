<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Práctica de subida de ficheros </h2>
        <!--En mi caso genero un fichreo de control por post y VITAL multipart/form-data, sino no vamos 
        a poder subir ficheros-->
        <form action="ComprobarFichero.php " method="POST " enctype="multipart/form-data">
            <label> Subir archivos: 
                <input type="file" name="FicheroSubida" value="SubirFichero">
            </label>
            <input type="submit" value="Subir fichero ">
        </form>

    </body>
</html>
