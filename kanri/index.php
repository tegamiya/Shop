<?php
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM book");
  $book = $st->fetchAll();
  require 't_index.php';
?>