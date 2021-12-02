<?php
function factorial ($n){
 if ($n==1) return 1;
 
 //condición de parada 
  else{
 return ($n * factorial ($n-1));
 }
}
echo "Factorial de 10 es: " .factorial(10);
?>