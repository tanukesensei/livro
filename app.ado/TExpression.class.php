<?php
/*
*  classe TExpression
*   classe abstrata para geernciar expressões
*/
  abstract class TExpression
  {
    // operadores lógicos
    const AND_OPERATOR = 'AND ';
    const OR_OPERATOR = 'OR ';
    //marca método dump como obrigatório
    abstract public function dump();
  }
 ?>
