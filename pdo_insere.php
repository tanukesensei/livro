<?php

  try {
    // Instancia objeto PDO, conectando no postgreSQL
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=senha5;host=localhost');

    // Executa uma série de instruções SQL
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Veríssimo')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')");

    // fecha a conexão
    $conn = null;
  } catch (PDOException $e) {
    // Caso ocorra uma execução, exibe na tela
    print "Erro!: " . $e->getMessage() . "\n";
    die();
  }


 ?>
