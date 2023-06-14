<?php 

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST["email"];
    $password=$_POST["mot_de_passe"];

    $serveur = "localhost";
    $user = "root";
    $password = "";

    try{
        $cnp= new PDO("mysql:host=$serveur;dbname=application_dclic",$user, $password);
        $cnp->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO adminis(email,mot_de_passe)
        VALUES('$email', '$password')";
        $cnp->exec($sql);
        echo "Enrégistrement effectué";
    }
        catch(PDOException $error){
            echo "Echec d'enrégistrement   " .$error->getMessage();
    }
}
?>