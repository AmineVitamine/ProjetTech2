<?php
// Se connecter à la base de données MySQL

// ...

// Récupérer l'ID de l'utilisateur dont le mot de passe doit être réinitialisé depuis la requête POST
$userId = $_POST['userId'];

// Générer un nouveau mot de passe aléatoire
$newPassword = generateRandomPassword(); // Fonction pour générer un mot de passe aléatoire

// Mettre à jour le mot de passe de l'utilisateur dans la base de données
$sql = "UPDATE users SET password = '$newPassword' WHERE id = $userId";
if ($conn->query($sql) === TRUE) {
  echo 'Le mot de passe de l\'utilisateur a été réinitialisé avec succès. Le nouveau mot de passe est : ' . $newPassword;
} else {
  echo 'Une erreur s\'est produite lors de la réinitialisation du mot de passe de l\'utilisateur : ' . $conn->error;
}

$conn->close();
?>
