<?php

// Desarrolla una función con el nombre "perimetroTriángulo" para calcular el perímetro de un triángulo.
// Ten en cuenta que primero hay que validar que las medidas sean correctas para un triángulo. 🤓
// En caso de que no sea un triángulo, la función deberá devolver -1.


// Aquí tu código
function perimetroTriangulo($num1, $num2, $num3)
{
    $r1 = $num1 + $num2;
    $r2 = $num2 + $num3;
    $r3 = $num1 + $num3;
    if ($r1 > $num3 && $r2 > $num1 && $r3 > $num2) { 
        return $num1 + $num2 + $num3;
    } else {
        return -1;
    }
}

// TESTS
assert(perimetroTriangulo(1, 1, 1) == 3);
assert(perimetroTriangulo(2, 2, 2) == 6);
assert(perimetroTriangulo(2, 3, 4) == 9);
assert(perimetroTriangulo(3, 4, 5) == 12);
assert(perimetroTriangulo(1, 1, 3) == -1);
