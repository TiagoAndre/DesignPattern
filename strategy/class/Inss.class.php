<?php
require_once __DIR__ . '/../interface/Desconto.php'; 
require_once  __DIR__ . '/Desconto.class.php'; 

class Inss implements Desconto {
  public function calcDesconto($salarioBruto) {
      if ($salarioBruto <= 1000) {
          return $salarioBruto * 8.5 / 100;
      } else {
          return $salarioBruto * 9 / 100;
      }
  }
}