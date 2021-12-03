<?php
/*Obtengo el valor de la variable input_post, los datos del input post cuando pulsen enviar
 * */
if (filter_input(INPUT_POST,"enviar",FILTER_SANITIZE_STRING)){
var_dump($_FILES);
}
foreach ($_FILES as $file) {
if($file["error"]==0){
if (move_uploaded_file($file['temp_name'],"/Formulario Exsamen".$file["name"])){
}

/*Mostramos el contenido de todos atributos*/
/*Genero un array de un formulario en pase a filter input por post
Interrogo si tengo los datso por post, si los tengo me genero una variable que */
if((isset($_POST["formulario_examen"])))
    $formulario_exsamen=$_POST["formulario_examen"];
else
$formulario_exsamen=array();
if((isset($_POST["enviar"])))
    /*Interrogo si el botonha llegado y paso los valores del input  */
$nombre=filter_input(INPUT_POST,"nombre");
$apellido=filter_input(INPUT_POST,"apellido");
$nacimiento=filter_input(INPUT_POST,"nacimiento");
$fichero1=filter_input(INPUT_POST,"fichero1");
$fichero2=filter_input(INPUT_POST,"fichero2");

/*Mostrar datos */
if (count($formulario_exsamen)==0) {
    echo "En este formulario no hay datos";
}
else{
    echo "<ul>"
    $formulario_exsamen as $nombre => $nombre) {
        echo"<li>"el nombre es ;.$nombre;."El apelldo es ".$apellido;"la fecha de nacimiento es ";$nacimiento ."</li>";

    }
            echo "</ul>";
        }


}
}
}

?>

<head>Formulario Exsamen</head>
<body>
<form action="" method="POST" ENCTYPE="multipart/form-data " name="formulario_exsamen "
<label> Nombre</label>
<input type="text" name="nombre" id="nombre">

<label> Apellido </label>
<input type="text" name="apellido" id="apellido">

<label> Fecha de nacimiento</label>
<input type="datetime-local" name="nacimiento">

<!-- Control fichero 1-->
<label Fichero 1</label>
<input type="file" name="fichero_1[]" id="fichero1">

<!-- Control Fichero 2-->
<label Fichero 2 </label>
<input type="file" name="fichreo_2[]" id="fichero2">
<input type="submit" name="enviar" id="enviar">Enviar
</body>
</html>