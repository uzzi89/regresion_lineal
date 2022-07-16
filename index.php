<?php

/*Declaración de variables X,Y*/
$x = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$y = [100, 120, 110, 100, 150, 140, 140, 160, 150, 143, 145, 150];

/*Mandamos a llamar a la función*/
regresionLineal($x, $y);

/*Creación de función para que reciba las variables X,Y*/
function regresionLineal($x, $y)
{
    $n = count($x);
    if (count($y) != $n) {
        die("Los elementos en x no coinciden con los elementos en y");
    }
    
    /*Obtener variables X.Y*/
    $sumaX = array_sum($x);
    $sumaY = array_sum($y);

    /*Declaramos las variables de suma de x y suma de y*/
    $sumaXporX = 0;
    $sumaXporY = 0;

    /*Creación de búcle*/
    for ($i = 0; $i < $n; $i++) {
        $sumaXporX = $sumaXporX + ($x[$i] * $x[$i]);
        $sumaXporY = $sumaXporY + ($x[$i] * $y[$i]);
    }

    /*Obtenemos a w*/
    $w = (($n * $sumaXporY) - ($sumaX * $sumaY)) / (($n * $sumaXporX) - ($sumaX * $sumaX));
    
    /*Obtenemos a bias*/
    $b = ($sumaY - ($w * $sumaX)) / $n;
    echo "w=$w <br>b=$b";
}