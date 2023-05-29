<?php
// Vérifier les informations d'identification de l'utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Vérifier les informations d'identification dans la base de données
  // (Vous devez configurer la connexion à la base de données MySQL)

  // Exemple de code pour vérifier les informations d'identification avec MySQLi
  $conn = new mysqli("localhost", "username", "password", "database");
  if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
  }

  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    // L'utilisateur est authentifié
    // Vous pouvez rediriger vers la page d'accueil ou une autre page sécurisée
    header("Location: home.php");
    exit();
  } else {
    // Les informations d'identification sont incorrectes
    $error = "Les informations d'identification sont incorrectes.";
  }

  $conn->close();
}




