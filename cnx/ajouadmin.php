<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];

    // Connexion à la base de données en utilisant PDO
    $dsn = 'mysql:host=localhost;dbname=application_dclic';
    $username = 'root';
    $password_db = '';

    try {
        $conn = new PDO($dsn, $username, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insertion de l'administrateur dans la base de données
        $query = "INSERT INTO adminis (email, mot_de_passe) VALUES (:email, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Administrateur ajouté avec succès.";

        $conn = null;
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
}
?>
