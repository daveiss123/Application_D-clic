<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="shortcut icon" href="Images/Logo.png" type="image/x-icon">
    <title>Formulaire d'inscription</title>
</head>

<body>
    <header>
        <section class="header">
   <img src="Images/Logo.png" alt="" id="loghaut">  
   <div class="programme">PROGAMME D_CLIC AU BURKINA FASO</div>
   <img src="Images/Flag_of_Burkina_Faso.svg.png" alt="" id="bf">
        </section>

<nav>
    <ul class="groupliennav" >
        <li class="elemenlistnav"> <a class="liennav" href="Index.html">INSCRIPTION</a> </li>
    <li class="elemenlistnav" > <a class="liennav"  href="pages/liste.html">LISTE</a> </li>
</ul>
</nav>
    
</header>

<section class="section2"><p class="text_section2">
    "D-CLIC est un programme de formation intensif conçu pour
    vous propulser dans le monde du développement.<br>
    Que vous soyez débutant ou que vous souhaitiez approfondir
    vos compétences.
    D-CLIC vous offre une opportunité unique d'apprendre
    auprès d'experts du domaine.
    Plongez dans un environnement d'apprentissage dynamique
    et interactif, et découvrez les fondamentaux ainsi que
    les dernières tendances en matière de développement.<br>
    Rejoignez-nous et donnez un coup d'accélérateur
    à votre carrière dans le domaine passionnant du développement !"</p>
</section>

<section class="section3">
   <p class="form"> Formulaire d'inscription</p>

   <form action="traitement.php" method="post">
    <input type="text" placeholder="Nom" name="nom" required > <br><br>
    <input type="text" placeholder="Prenom" name="prenom" required > <br><br>
    <input type="date" placeholder="Date de naissance" name="birthday" required > <br><br>
    <input type="text" placeholder="Ville d'origine" name="ville" required > <br><br>
    <input type="text" placeholder="Formation de base" name="formation" required > <br><br>
    <button type="submit">ENREGISTRER</button>
   </form>
</section>
   
</body>

<footer>
<section class="fone">
    <div class="foot1"><img src="Images/Logo.png" alt="" class="logofoot"> <p>Formez-vous au numérique</p></div>
    <div class="foot2"><P>D_CLIC BURKINA <br><br> <br>Contact : (00226) </P></div>
    <div class="foot3">
        <br><br><br>60 07 41 65<br><br>57 38 30 99
    </div>
</section class="fwo">
<section>
 <p class="fwo"> SISE A OUAGADOUGOU, Pate d'Oie Avenue Joseph wersinkin</p>
<a href="https://facebook.com/">  <img src="Images/icones/icons8-facebook.svg" class="icone"></a>
<a href="https://instagram.com/">  <img src="Images/icones/icons8-instagram-94.png" class="icone" id="insta"></a>

<a href="https://linkin.com/">  <img src="Images/icones/icons8-linkedin.svg" class="icone"></a>
</section>
</footer>
</html>

/*
