<?php

/**
 * Página principal de la calculadora.
 *
 * Incluye las funciones matemáticas y muestra sus resultados.
 *
 * @package Calculadora
 */

require_once 'funciones.php';

$num1 = 10;
$num2 = 5;

try {
    $resultadoSuma = sumar($num1, $num2);
    $resultadoResta = restar($num1, $num2);
    $resultadoMultiplicacion = multiplicar($num1, $num2);
    $resultadoDivision = dividir($num1, $num2);
} catch (InvalidArgumentException $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora básica</title>
</head>
<body>
    <h1>Calculadora de operaciones básicas</h1>

    <p>Primer número: <?= htmlspecialchars((string) $num1) ?></p>
    <p>Segundo número: <?= htmlspecialchars((string) $num2) ?></p>

    <h2>Resultados</h2>

    <?php if (isset($error)): ?>
        <p>Error: <?= htmlspecialchars($error) ?></p>
    <?php else: ?>
        <ul>
            <li>Suma: <?= $resultadoSuma ?></li>
            <li>Resta: <?= $resultadoResta ?></li>
            <li>Multiplicación: <?= $resultadoMultiplicacion ?></li>
            <li>División: <?= $resultadoDivision ?></li>
        </ul>
    <?php endif; ?>
</body>
</html>
