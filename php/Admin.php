<!DOCTYPE html>
<html>
<head>
    <title>Administrateur</title>
</head>

<body>
    <h1>Connectez-vous en tant qu'administrateur</h1>
    <form method="POST" action="loginadmin.php">
        <label>Email:</label>
        <input type="text" name="email" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>
        <button type="submit">Valider</button>
    </form>

    <h1>Ajouter un administrateur</h1>
    <form method="POST" action="../cnx/ajouadmin.php">
        <label>Email:</label>
        <input type="text" name="email" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="mot_de_passe" required><br>
        <button type="submit">Ajouter</button>
    </form>

</body>

</html>
