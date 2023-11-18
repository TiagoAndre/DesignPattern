<?php

 require './class/Salario.class.php';

$horasTrabalhadas = 160;
$salarioHora = 15;
$numDependentes = 1;

$calculadora = new Salario($horasTrabalhadas, $salarioHora, $numDependentes);
$salarioColaborador = $calculadora->calcSalarioLiquido();

echo "Salário Líquido Calculado: R$ " . number_format($salarioColaborador, 2, ',', '.');

?>
