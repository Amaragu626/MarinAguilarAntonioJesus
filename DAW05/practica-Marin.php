<?php 

/**
 * Funcion para calcular la suma de dos números enteros mayores que 0
 * 
 * Función que, pasándole dos números enteros mayores que 0 calcula y devulve la suma de ellos.
 * 
 * @param int $numero1 El primer número a sumar
 * @param int $numero2 El segundo número a sumar
 * 
 * @return int La suma si todo es correcto o -1 si alguno o los dos números no es un entero positivo
 * 
 * @author Antonio Jesus Marin Aguilar
 * @version 1.0
 * 
 */
function sumar($numero1, $numero2):int{
    $suma = 0;
    if(is_integer($numero1) && is_integer($numero2) && $numero1 > 0 && $numero2 > 0){
        $suma=$numero1+$numero2;
    }else{
        $suma = -1;
    }
    return $suma;
}

/**
 * Funcion que recibe un año y calcula la diferencia con el año actual
 * 
 * Función que, recibe un año y calcula si ha pasado tiempo desde ese año, si aún queda tiempo para ese año o si es el año actual
 * 
 * @param int $anho El año que se quiere comparar con el año actual
 * 
 * @return string|int Una cadena de texto con la diferencia entre el año actual y el introducido o -1 si el año pasado no es correcto
 * 
 * @author Antonio Jesus Marin Aguilar
 * @version 2.0
 * 
 */
function anhosFaltantesRestantes($anho):string|int{
    $actual = date('Y');
    $resultado;
    if(is_integer($anho) && $anho > 0){
        if($anho > $actual){
            $resultado = 'Faltan '. ($anho - $actual) . ' años para el año ' .$anho;
        }elseif($actual > $anho){
            $resultado = 'Han pasado '. ($actual - $anho) . ' años desde el año ' .$anho;
        }else{
            $resultado = 'Estamos justo en el año ' .$anho;
        }
    }else{
        $resultado =-1;
    }

    return $resultado;
}

?>