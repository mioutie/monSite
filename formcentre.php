<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ma page</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
<div class="content">
    <h1>LES FORMULAIRE</h1>
    <!--ils sont utilisés pour gestion interaction d'un site et sont à la base des pages web dynamiques "Mise en oeuvre "
    un formulaire html est defini entre les balise <form>et </form>

    method: mode de transmission vers le serveur des informations saisies dans le formulaire.
    action: qui contient le script qui va traiter le formulaire ou les données du formulaire.

    L'attribut method comprend deux types de valeurs: GET ET POST
    GET: se rapporte aux données du formulaire qui seront transmises par URL et utilise la variable segerglobale $_GET.
    POST: se rapporte aux donnée du formulaire qui seront transmises dans le corps de la requéte utilise la variable superglobale 
    $_POST.
    Syntaxe:
    $data = $_GET["dt"]; // GET
    $data = $_POST["dt"];// POST-->

    <!-- <form action="" method="get">
        NOM: <input type="text" name="nom"><br><br>
        Prénom : <input type="text" name="prenom"><br><br>
        <input type="submit">
</form> -->
<!--La methode GET envoie les données sous forme d'une suite de couples nom/ valeur ajoutés à l'URL de la page appelée.
La partie d'une URL précédée par? est appelée caine de requéte. Si la chaine de requête contient plusieurs éléments,
alors chaque élement / valeur doit etre separé par le caractere &amp;
Par ailleur, elle doit pas dépasser 255 caractéres. les données transmises au serveur par la méthode GET sont visibles par les utilisateurs
directement dans la barre d'adresse du navigateur.-->
<!-- <p>Bonjour!</p>
<p>Votre nom est <?php echo $_GET['nom'];?>, et votre prénom est <?php echo $_GET['prenom'];?></p>
<p>Faites un autre essai, <a href="#">cliquez ici</a></p> -->


<!--<form action="" method="post">
        NOM: <input type="text" name="nom"><br><br>
        Prénom : <input type="text" name="prenom"><br><br>
        <input type="submit">
</form>
<p>Votre nom est <?php echo $_POST['nom'];?>, et votre prénom est <?php echo $_POST['prenom'];?></p>

<!--GET ET POST : VARIABLES SUPERGLOBALES
lorsque l'utilisateur valide le formulaire, l'attribut action appelle un programme PHP qui doit traite les données. Les instructions qui 
parmettent de récupérer les valeurs saisies dans le formulaire sont des variable superglobales, c'est à dire des variables qui seront disponibles quel que 
soit le contexte du script. C'est la superglobale $_POST qui nous a permis derécupérer les données fournies par le formulaire via la methode post.
La liste suivante détaille toutes les variables superglobales:
-$_GLOBALS: c'est une association qui a pour but de réferences toutes les variables globales definies dans le contexte d'exécution global
du script. Les noms des variables globales sont des index du tableau.
-$ SERVEUR: il s'agit d'un tableau associatif contenant des informations comme les entêtes, les dossiers et les chemins du script. C'est le serveur
qui crée les entrées du tableau. Par exemple l'expréssion $_SERVEUR['PHP_SELF'] renvoie le nom du fichier appelé avec le dossier à partir de la racine

-$_GET: indique un tableau associatif contenant des valeurs passées au script via le protocole HTTP et la méthode GET.
-$_POST: c'est un tableau associatif qui contient les valeurs passées au script vie la serveur et a methode POST.
-$_COOKIE: renvoie un tableau associatif qui contient des informations concernant le cookie.
-$_SESSION: renvoie un tableau associatif qui contient des informations concernant lA SAISON EN COURS.
-$_REQUEST: c'est un tableau associatif qui contient DES VARIABLES d'environnement qui sont definies 

</div>

-->
<!--<?php echo $_SERVER['PHP_SELF']?>-->

<!--FORMULAIRE-->
<H2>Renseignez les champs</H2>
<div>
    <form action="traitement.php" method="POST">
        <label>Nom:</label>
        <input type="text" placeholder="entrer votre nom ici" maxlenght="30" autofocus="" name="nom"/><br><br>
        <label>Ville:</label>
        <input type="text" placeholder="entrer votre ville ici" maxlenght="30" autofocus="" name="ville"/><br><br>
        <label>Code Postal:</label>
        <input type="text" placeholder="entrer votre Code postal ici" maxlenght="5" pattern="[0-9]{5}" name="cp" required/><br><br>
        <input type="submit"value="validation">

    </form>
</div>





    
    
</div>

</body>

</html>