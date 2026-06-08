<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "mvc_balbo";
$conexao = new mysqli($servername, $username, $password, $bd);

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}