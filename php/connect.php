<?php
$host = 'localhost';
$dbname = 'application_dclic';
$username = 'root';
$password = '';

try {
    $data = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  
    $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 echo 'connexion';
    
} catch(PDOException $e) {
    
    echo "Erreur de connexion : " . $e->getMessage();
}
?>