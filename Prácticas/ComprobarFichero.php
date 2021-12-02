<?php
copy($_FILES['SubirFichero']['temp_name'],$_FILES['SubirFichero']['name']);
echo "El fichero se ha subido correctamente";
$Destino=$_FILES['SubirFichero']['name']; 
echo "<img src=\"$Destino\">";
        
?>
