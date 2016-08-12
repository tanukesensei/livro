<?php

  //Abre conexão com Postgres
  $conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=senha5");

  // Define consulta que será realizada
  $query = 'SELECT codigo, nome FROM famosos';

  // Envia consulta ao banco de dados
  $result = pg_query($conn, $query);

  if ($result) {
    // percorre resultados da pesquisa
    while($row = pg_fetch_assoc($result)){
      echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
    }
  }

  // fecha a conexão
  pg_close($conn);
 ?>
