<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
</head>
<body>
<html>
     <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'application_dclic';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT nom, prenom FROM apprenant
      WHERE nom LIKE '%$recherche%'
      OR prenom LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['nom'].', '.$r['prenom'].' <br />';
     }
?>



</body>
</html>