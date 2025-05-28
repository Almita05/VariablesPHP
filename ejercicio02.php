<?php
// con este simbolo podemos definir una variable en php
$numero = 9;

//con el simblo de % significa el resultado de la division entre dos, es decir el residuo de esa
//división
//es lógico, si dividimos el numero entre 2, si el resultado es 0 el residuo, es obvio que es par
if ($numero % 2 == 0){
    echo "$numero es par";
}
//pero si dividmos el numero entre dos y aun sobra quiere decir que no es par
else {
    echo "$numero es impar";
}

?>