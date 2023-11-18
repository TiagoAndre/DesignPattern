<?php
require_once __DIR__ . '/../interface/Desconto.php'; 
require_once  __DIR__ . '/Desconto.class.php'; 

class Ir implements Desconto {
    public function calcDesconto($salario) {
        if ($salario <= 500) {
            return 0;
        } else if ($salario > 500 && $salario <= 1000) {
            return $salario * 5 / 100;
        } else {
            return $salario * 7 / 100;
        }
    }
}