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
    <h1>Rechercher ici</h1>
    <br><br>
    <form action="" method="post">Rchercher un nom : <input type="text" name="recherche">
<input type="submit"value="Rechercher"><br><br><br></form>

    <?php
    $db_server = 'localhost'; //Adresse du serveur Mysql
    $db_user = 'root'; // nom de l'utilisateur
    $db_user_pass =''; //mot de passe
    $db_name= "casse"; //nom de la base de données

    // j'ouvre une connexion au serveur mysql
    $conn = mysqli_connect($db_server,$db_user,$db_user_pass, $db_name);

    //je recupère la recherche
    $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
    //j'écris la requete sql
    $q = $conn->query(
        "select nom,  ville from personne
        where nom like '%$recherche%'
        or ville like '%$recherche%'
        limit 10");

    // j'affiche le resultat
    while($r = mysqli_fetch_array($q)){
        echo 'Résultat de la recherche :' .$r['nom'].','.$r['ville'].'<br/>';
    }

    

    ?>
    
    
</div>

</body>

</html>