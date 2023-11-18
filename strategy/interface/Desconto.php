<?php

// Interface para o cálculo do desconto
interface Desconto {
  public function calcDesconto($salarioBruto);
}