<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodshala";

  // Connecting to the phpmyadmin mysql database


  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Unable to connect with the database: " . $conn->connect_error);
  }
?>