<?php
// Se connecter à la base de données MySQL
$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die('Erreur de connexion à la base de données : ' . $conn->connect_error);
}

// Récupérer les données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si l'utilisateur est l'administrateur
if ($email == 'admin@example.com') {
  echo 'Vous êtes l\'administrateur.';
} else {
  // Insérer les données dans la table des utilisateurs
  $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo 'Compte créé avec succès.';
  } else {
    echo 'Erreur lors de la création du compte : ' . $conn->error;
  }
}

// Fermer la connexion à la base de données
$conn->close();
?>
