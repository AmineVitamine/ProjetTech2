<?php
// Se connecter à la base de données MySQL

// ...

// Récupérer l'ID de l'utilisateur à rayer depuis la requête POST
$userId = $_POST['userId'];

// Supprimer le compte utilisateur de la base de données
$sql = "DELETE FROM users WHERE id = $userId";
if ($conn->query($sql) === TRUE) {
  echo 'Le compte utilisateur a été rayé avec succès.';
} else {
  echo 'Une erreur s\'est produite lors du rayage du compte utilisateur : ' . $conn->error;
}

$conn->close();
?>
