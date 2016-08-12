<?php

  try {
    // Instancia objeto PDO, conectando no postgreSQL
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=senha5;host=localhost');

    // EXECUTA UMA INSTRUÇÃO sql DE consulta
    $result = $conn->query("SELECT codigo, nome FROM famosos");
    if ($result) {
      // percorre os resultados via fetch()
      while ($row  = $result->fetch(PDO::FETCH_OBJ)) {
        // exibe os dados na tela, acessando o objeto retornado
        echo $row->codigo . ' - ' .
             $row->nome . "<br>\n";
      }
    }
    // fecha conexão
     $conn = null;
  } catch (PDOException $e) {
    print "Erro!: " . $e->getMessage() . "<br/>";
    die();
  }


 ?>
