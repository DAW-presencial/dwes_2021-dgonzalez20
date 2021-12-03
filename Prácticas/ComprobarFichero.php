<?php
$archivo=$_FILES['SubirFichero[]g']['temp_name'];
$extemsion=pathinfo($archivo,PATHINFO_EXTENSION);
 if (move_uploaded_file($archivo,"nuevoarchivo.pdf".$extemsion));
 echo "El fichero se ha subido correctamente";
?>
