<?php
// Se connecter à la base de données MySQL

// ...

// Sélectionner tous les utilisateurs de la table users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>';
    echo '<button class="btn btn-success validate-btn" data-user-id="' . $row['id'] . '">Valider</button>';
    echo '<button class="btn btn-danger delete-btn" data-user-id="' . $row['id'] . '">Rayer</button>';
    echo '<button class="btn btn-primary reset-password-btn" data-user-id="' . $row['id'] . '">Réinitialiser le mot de passe</button>';
    echo '</td>';
    echo '</tr>';
  }
} else {
  echo '<tr><td colspan="2">Aucun utilisateur trouvé.</td></tr>';
}

$conn->close();
?>
