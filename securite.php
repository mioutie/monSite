<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">
    <input type="text" name="nom" placeholder="Nom"/>
    <input type="text" name="prenom" placeholder="Prenom"/>
    <input type="email" name="email" placeholder="Email"/>
    <input type="password" name="motdepasse" placeholder="Mot de passe"/>
    <input type="submit" value="Envoyer"/>
</form>

<?php
//Vérification des données
if(!isset($_POST['nom']) || empty($_POST['nom'])){
    echo "Le nom est obligatoire";
    exit();
}
if(!isset($_POST['prenom']) || empty($_POST['prenom'])){
    echo "Le Prénom est obligatoire";
    exit();
}
if(!isset($_POST['email']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "L'adresse mail est obligatoire et doit être validé";
    exit();
}
if(!isset($_POST['motdepasse']) || empty($_POST['motdepasse'])){
    echo "Le mot de passe est obligatoire";
    exit();
}

// Echappement des données 
$nom = htmlspecialchars($_POST['nom']);// soit htmlspecialcharsecho strip_tags($nom);//
// $nom = $_POST['nom']; //faire attention de ne pas faire comme ce code il faut mettre htmlspecialchars pour que l'application marche bien
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$motdepasse = htmlspecialchars($_POST['motdepasse']);


//Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=secubdb';
$user='root';
$pwd = '';

try{
    $pdo = new PDO ($dsn, $user, $pwd);
}catch(PDOException $e){
    echo 'Erreur de conexion à la base de données : '. $e->getMessage();
    exit();
}
//Insertion des données dans la base de données
$sql = 'INSERT INTO utilisateurs (Nom, Prenom, email, motdepasse) VALUES (?,?,?,?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$nom, $prenom, $email, $motdepasse]);

//Affichage d'un message du succés

echo 'Vos données ont été enregistrées avec succès !';


?>
</body>
</html>