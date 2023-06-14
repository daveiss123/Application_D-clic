<?php
session_start();

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

        // Vérification des informations d'authentification
        $query = "SELECT * FROM adminis WHERE email=:email AND mot_de_passe=:password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $admin = $stmt->fetch();

        if ($admin) {
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: ../pages/liste.php");
            exit();

        } else {
            echo "Informations d'authentification incorrectes.";
        }

        $conn = null;
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
}
?>
