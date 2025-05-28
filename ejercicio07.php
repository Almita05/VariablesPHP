<?php

//Programa que utiliza el operadopr || que significa "O", si no es una opcion entonces compara la siguiente
$rol = "admin";
if($rol == "admin" || $rol == "moderador"){
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}

?>