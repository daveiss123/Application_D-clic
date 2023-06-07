<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="../css/liste.css">
</head>

<body>
    <?php
// Connexion à la base de données (remplacez les valeurs par vos propres informations de connexion)
$host = 'localhost';
$dbname = 'application_dclic';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données: " . $e->getMessage();
  exit();
}

// Requête pour récupérer les données depuis la base de données
$query = "SELECT id, nom, prenom, birthday, ville, formation FROM apprenant";
$stmt = $pdo->query($query);
$databaseRows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
  <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Date de naissance</th>
    <th>Ville</th>
    <th>Formation</th>
    <th>Action</th>
  </tr>

  <?php foreach ($databaseRows as $row) : ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nom'] ?></td>
      <td><?= $row['prenom'] ?></td>
      <td><?= $row['birthday'] ?></td>
      <td><?= $row['ville'] ?></td>
      <td><?= $row['formation'] ?></td>
      <td>
        <button type="button">Add</button>
        <button type="button">Delete 2</button>
        <button type="button">Edit 3</button>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php
// Fermeture de la connexion à la base de données
$pdo = null;
?>

</body>
</html>