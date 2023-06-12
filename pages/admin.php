<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
</head>
<body>
<form action="admin.php" method="POST">
        <label for="email">Adresse mail</label placeholder="Entrez votre adresse mail">
        <input type="text" name="email">
        <label for="mot_de_passe">Mot de passe</label>
        <input type="text" name="mot_de_passe" placeholder="code">

    <button type="submit">S'enrégister</button>
    </form>

    <?php
// Étape 2 : Récupérer les valeurs saisies par l'utilisateur
$email = $_POST['email'];
$password = $_POST['mot_de_passe'];

// Étape 3 : Valider les données saisies
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application_dclic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour vérifier si l'email et le mot de passe correspondent à un administrateur
    $sql = "SELECT * FROM adminis WHERE email = $email AND mot_de_passe = $password";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        // Étape 4 : Authentifier l'utilisateur
        header("Location: ../Index.php");
    } else {
        // Étape 5 : Afficher un message d'erreur
        echo "Identifiants incorrects";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

$conn = null;
?>


</body>
</html>