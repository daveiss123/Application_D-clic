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

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparer et exécuter la requête de suppression
        $sql = "DELETE FROM apprenant WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Rediriger vers une page de confirmation ou une autre page appropriée
        header("Location: ../pages/liste.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
