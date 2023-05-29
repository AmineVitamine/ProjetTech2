<?php
// Se connecter à la base de données MySQL

// ...

// Récupérer l'ID de l'utilisateur à valider depuis la requête POST
$userId = $_POST['userId'];

// Valider le compte utilisateur en mettant à jour la base de données
$sql = "UPDATE users SET validated = 1 WHERE id = $userId";
if ($conn->query($sql) === TRUE) {
  echo 'Le compte utilisateur a été validé avec succès.';
} else {
  echo 'Une erreur s\'est produite lors de la validation du compte utilisateur : ' . $conn->error;
}

$conn->close();
?>
