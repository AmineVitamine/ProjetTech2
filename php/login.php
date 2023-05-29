<?php
// Se connecter à la base de données MySQL

// ...

// Récupérer les informations d'identification depuis la requête POST
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si l'utilisateur existe et si son compte est validé
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND validated = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // L'utilisateur est connecté avec succès
  echo 'Connexion réussie.';
} else {
  // Les informations d'identification sont invalides ou le compte n'est pas validé
  echo 'Identifiants invalides ou compte non validé.';
}

$conn->close();
?>
