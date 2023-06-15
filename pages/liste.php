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
<a href="pages/search.php"> <img src="Images/icones/icons8-chercher.svg" alt=""> </a>
    <?php
// Connexion à la base de données
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


<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      background-color: aqua;
    }

    th {
      background-color: #f3f3f3;
    }
  </style>
  
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
      <button type="button" onclick="addButtonClick()">Add</button>
          <button type="button" onclick="deleteButtonClick(<?= $row['id'] ?>)">Delete</button>
          <button type="button" onclick="editButtonClick(<?= $row['id'] ?>, '<?= $row['nom'] ?>', '<?= $row['prenom'] ?>', '<?= $row['birthday'] ?>', '<?= $row['ville'] ?>', '<?= $row['formation'] ?>')">Edit</button>

      </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php
// Fermeture de la connexion à la base de données
$pdo = null;
?>

<script>
    function addButtonClick() {
      // Code à exécuter lorsque le bouton "Add" est cliqué
      // Rediriger vers la page d'ajout 
      window.location.href = "../Index.php";
    }

    function deleteButtonClick(id) {
      // Code à exécuter lorsque le bouton "Delete" est cliqué
      if (confirm("Êtes-vous sûr de vouloir supprimer cet apprenant ?")) {
        // Rediriger vers une page de suppression d'apprenant
        window.location.href = "suppression.php?id=" + id;
      }
    }

    function editButtonClick(id, nom, prenom, birthday, ville, formation) {
  // Rediriger vers la page d'index avec les valeurs actuelles de l'apprenant pour la modification
  window.location.href = "index.php?action=edit&id=" + id + "&nom=" + encodeURIComponent(nom) + "&prenom=" + encodeURIComponent(prenom) + "&birthday=" + encodeURIComponent(birthday) + "&ville=" + encodeURIComponent(ville) + "&formation=" + encodeURIComponent(formation);
}

}
<?php
// Vérifier si le paramètre "id" est passé dans l'URL
if (isset($_GET['id'])) {
    // Récupérer l'identifiant de l'apprenant à supprimer
    $id = $_GET['id'];

    // Connexion à la base de données
    $host = 'localhost';
    $dbname = 'application_dclic';
    $username = 'root';
    $password = '';

    
}
?>


  </script>
</body>
</html>