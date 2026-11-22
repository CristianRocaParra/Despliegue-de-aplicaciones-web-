<?php

/**
 * Suma dos números.
 *
 * @param float $a Primer número que se va a sumar.
 * @param float $b Segundo número que se va a sumar.
 *
 * @return float Resultado de la suma.
 */
function sumar(float $a, float $b): float
{
    return $a + $b;
}

/**
 * Resta el segundo número al primero.
 *
 * @param float $a Número al que se le resta el segundo.
 * @param float $b Número que se resta.
 *
 * @return float Resultado de la resta.
 */
function restar(float $a, float $b): float
{
    return $a - $b;
}

/**
 * Multiplica dos números.
 *
 * @param float $a Primer número que se va a multiplicar.
 * @param float $b Segundo número que se va a multiplicar.
 *
 * @return float Resultado de la multiplicación.
 */
function multiplicar(float $a, float $b): float
{
    return $a * $b;
}

/**
 * Divide el primer número entre el segundo.
 *
 * @param float $a Dividendo.
 * @param float $b Divisor, que no puede ser cero.
 *
 * @return float Resultado de la división.
 *
 * @throws InvalidArgumentException Si el divisor es cero.
 */
function dividir(float $a, float $b): float
{
    if ($b == 0.0) {
        throw new InvalidArgumentException(
            "No se puede dividir entre cero."
        );
    }

    return $a / $b;
}
