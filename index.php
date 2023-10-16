<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ma page</title>
</head>
<body>
    <!-- <h1>coucou les amis!</h1> -->
    <a href="opSurVar.php">operation sur la variable</a>
    

<?php
echo "<br>";
//j'affichye le prénom
echo "paul";
echo "<br> ";
echo "ochon";//j'affiche le nom
#ceci est aussi un commentaire
echo "<br> paul ochon";
/*les commentaire vous aideront lorsque vous reviendrez dans 6mois et que vous aurez tout oublié.*/ 
echo "<br>super";
echo"<br>";

/*si vous souhaitez voir les caracteres qui sont utilisés pour entourer les mots*/
echo 'j\'écris à l\'encre de chine';
/* le caractere anti-slash précéde le 2ème apostrophe qui echape ainsi à sa fonction naturelle qui est d'entourer des chaine de caracteres dans le code ici, on mat des guillemets 
au débuts et à la fin du texte et il n'est donc pas nécessaires d'echapper l'apostrophe .Par contre il faut échapper le guillemet du prenom*/

echo "<br>j'envoie des lettre à \"ma dulcinée\"";
/*les variable 
une variable est une conteneur d'une donnée unique, c'est à dire une boite à chaussures qui ne contient q'une seule chaussure.
une variable contient une information temporaire qui peut étre numerique, de ype alphabétique (chaine de caractere), de type date , de type objet ou d'autres types.*/

echo"<br>";
$largeur = 5;
echo $largeur;

/*Le nom d'une variable doit commencer le caractére $ suivi d'une lettre ou un signe _(barre de 8) et ne doit jamais commencer par un chiffre.Les noms des variables sont sensibles à la casse (majuscule/miniscule).

Le signe = sert donc à affecter une valeur à la variable, il s'agit d'un opérateur d'affectation et non le signé égale que l'on utilise dans une operation de calcul. */ 


$prenom = "téo";
$nom = "unique";
$prenom_nom = $prenom."".$nom;
echo"<br>".$prenom_nom;

/**fonction qui s'appliquer aux variable
 * strlen(variable): renvoie la longueur d'une chaine de caractere.
 * substr(variable, debut, longueur): renvoie une partie de la chaine de caracteres
 * trim(variable): supprime les espaces (ou d'autre caractéres) en debut et en fin de chaine.
 * number_format(variable "point ou point virgule", "caractères pour les milliers").
 * round(variable, nombre de décimale): arrondit le nombre.
 * 
 */
$nom2 = "MARIE ROSE";
echo strlen($nom2);// affiche 10 à cause des espaces
echo"<br>";
var_dump($nom2);//affiche string (10) "MARIE ROSE"
echo "<br>";
echo trim ($nom2);//affiche Marie rose sans espace
echo"<br>";
echo substr($nom2, 3, 5);
echo"<br>";
echo $prix = 2050900.7854;
echo "<br>";
echo number_format($prix,2,","," ");//arrondit à la française
echo "<br>";

echo number_format($prix,2,"."," ");//affiche 2 050 900.79 en plaçant 2 décimales après un point et un espace comme séparateur de milliers.
echo "<br>";

echo round ($prix,1);//arrondit à la decimale

//AFFECTATION DE LA VARIABLES PAR VALEUR OU PAR ALIAS
/**
 * lorsqu'on affecte une donnée dans une variable, on dit qu'on affect le variable par valeur.Toutefois on pourrait aussi un alias à une autre variable. on dit parfois qu'on affecte la variable par référence.
 * Pour créer un alias vers une autre variable, on utilise le signe & (et commercial ou perpluette).
 *  
 */
echo"<br>";
$v1 = 'jacques chirac<br>';
$alias = &$v1;//crée un alias vers $v1
$alias = "mon nom est $alias";
echo $alias;

$prenom2 = "Alain";
echo " salut les gars mon nom est :" .$prenom2. " sébastien";
?>
</body>

</html>