<H1Realizando prueba de Cokkies y Sesiones </H1>

<?php

if (isset($_COOKIE['Licencias '])){
    setcookie("Licencias",++$_COOKIE["Control de Licencias"]);
    echo "El numero de registo ".$_COOKIE["Licencias "];
    }
else{
    echo "El es la primera licencia";
    setcookie("Licencias", $_COOKIE["Control de Licencias"]=1);

}
?>