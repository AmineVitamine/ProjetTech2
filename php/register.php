<?php
// Se connecter à la base de données MySQL

// ...

// Récupérer les informations du formulaire d'inscription depuis la requête POST
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si l'utilisateur existe déjà dans la base de données
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // L'utilisateur existe déjà
  echo 'Un compte avec cette adresse e-mail existe déjà.';
} else {
  // Insérer le nouvel utilisateur dans la base de données
  $sql = "INSERT INTO users (email, [password], validated) VALUES ('$email', '$password', 0)";
  if ($conn->query($sql) === TRUE) {
    echo 'Compte créé avec succès. Veuillez attendre la validation de l\'administrateur.';
  } else {
    echo 'Une erreur s\'est produite lors de la création du compte : ' . $conn->error;
  }
}

$conn->close();
?>
