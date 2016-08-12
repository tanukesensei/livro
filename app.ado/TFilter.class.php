<?php
/*
* classe TFilter
* Esta classe provê uma interferência para definição de filtros de seleção
*/
class TFilter extends TExpression
{
  private $variable; // variavel
  private $operator; // operador
  private $value; //valor
  /*
  * método __construct()
  * instancia um novo filtro
  * @param $variable = variavel
  * @param $operator = operador (>,<)
  * @param $value = valor a ser comparado
  */
  public function __construct($variable, $operator, $value)
  {
    //armazena as propriedades
    $this->variable = $variable;
    $this->operator = $operator;
    // transforma o valor de acordo com certas regras
    // antes de atribuir à propriedade $this->value
    $this->value = $this->transform($value);
  }

  /*
  * método transform()
  * recebe um valor e faz as modificações necessárias
  * para ele ser interpretado pelo banco de dados
  * podendo ser um integer/string/boolean ou array.
  * @param $value = valor a ser transformado
  */
  private function transform($value)
  {
    // caso sejaum array
    if (is_array($value)) {
      // percorre os valores
      foreach ($value as $x)
      {
        // se for um inteiro
        if (is_integer($x)) {
          $foo[] = $x;
        }
        elseif (is_string($x))
        {
          // se for string, adiciona aspas
          $foo[] = "'$x'";
        }
      }
      // converte o array em string separada por ","
      $result = '(' . implode(',', $foo) . ')';
    }
    // caso seja uma string
    elseif (is_string($value))
    {
      // adiciona aspas
      $result = "'$value'";
    }
    // caso seja valor nulo
    elseif (is_null($value))
    {
      //armazena NULL
      $result = 'NULL';
    }
    // Caso seja booleano
    elseif (is_bool($value))
    {
      //armazena TRUE ou FALSE
      $result = $value ? 'TRUE' : 'FALSE';
    }
    else
    {
      $result = $value;
    }
    // retorna o valor
    return $result;
  }

  /*
  * método dump()
  * retorna o filtro em forma de expressão
  */
  public function dump()
  {
    // concatena a expressão
    return "{$this->variable} {$this->operator} {$this->value}";
  }
}
 ?>
