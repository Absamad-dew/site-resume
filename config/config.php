<?php
  $conn = new mysqli("localhost", "root", "", "site-resume-fitback");
  
  if ($conn->connect_error) {
    die("Ошибка: не удается подключиться: " . $conn->connect_error);
  } 

  echo 'Подключение к базе данных.<br>';

  $result = $conn->query("SELECT name FROM employee");

  echo "Количество строк: $result->num_rows";

?>