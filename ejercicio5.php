<?php

// Crea una funcion llamada "slug" que reciba un string y lo convierta en un slug.
// Un slug es una versión de un string para hacerlo legible en una URL, por ej: "Hola Mundo" se convierte en "hola-mundo".
// El string deberá ser convertido a minúsculas y los espacios deberán ser reemplazados por guiones.
// La función deberá devolver el nuevo string.
// Si el string está vacío deberá devolver "error".


// Aquí tu código

function slug($frase)

{
    if (empty($frase)) {
        return "error";
    } else {
        $remplazo = strtolower($frase);
        $remplazo = str_replace(" ", "-", $remplazo);
        echo $remplazo. "<br>";
        return $remplazo;
    }

}


// TESTS
assert(slug("Hola Mundo") == "hola-mundo");
assert(slug("Hola Mundo Cruel") == "hola-mundo-cruel");
assert(slug("Hola") == "hola");
assert(slug("") == "error");
assert(slug(" ") == "error");

/**
 * Pista 😁
 * https://www.php.net/manual/es/function.strtolower.php
 * https://www.php.net/manual/es/function.str-replace.php 
 **/