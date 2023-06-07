<?php 

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $birthday=$_POST["birthday"];
    $ville=$_POST["ville"];
    $formation=$_POST["formation"];

    $serveur = "localhost";
    $user = "root";
    $password = "";

    try{
        $cnp= new PDO("mysql:host=$serveur;dbname=application_dclic",$user, $password);
        $cnp->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO apprenant(nom, prenom, birthday, ville,formation)
        VALUES('$nom', '$prenom', '$birthday' , '$ville' ,'$formation')";
        $cnp->exec($sql);
        echo "Formulaire soumis avec succès";
    }
        catch(PDOException $error){
            echo "Echec de soumission du formulaire" .$error->getMessage();
    }
}
?>