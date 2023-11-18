<?php
 require './class/Inss.class.php';
 require './class/Ir.class.php';

class Salario {
    private $horasTrabalhadas;
    private $salarioHora;
    private $numeroDependentes;

    public function __construct($horasTrabalhadas, $salarioHora, $numeroDependentes) {
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->salarioHora = $salarioHora;
        $this->numeroDependentes = $numeroDependentes;
    }

    public function calcSalarioLiquido() {
        $salario = $this->horasTrabalhadas * $this->salarioHora + (50 * $this->numeroDependentes);

        $inssStrategy = new Inss();
        $descontoInss = $inssStrategy->calcDesconto($salario);

        $irStrategy = new Ir();
        $descontoIr = $irStrategy->calcDesconto($salario);

        $salarioLiquido = $salario - $descontoInss - $descontoIr;

        return $salarioLiquido;
    }
}

?>
