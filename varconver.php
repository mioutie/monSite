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
    <h1>Conversion de variable</h1>
    <?php
    $var = "3.5 kilometres";
    $var2 = (double) $var;
    echo "\$var2=" ,$var2, "<br>";//affiche 3.5
    $var3 = (integer) $var2;
    echo "\$var",$var3,"<br>";
    $var4 = (boolean)$var3;
    echo "\$var4=",$var4, "<br>";

    /*vous avec la posibilité de modifier le type de la variable elle-même au moyen de la fonction type().*/
    echo settype($var, "float");
    echo "<br>";
    echo "<br>";
    echo "utilisation de settype()";
    echo "<br>";

    $vall = "35.5 ans ";
    settype($var,"double");
    echo "\$var=",$vall,"<br>";
    echo "<br>";
    settype($vall, "integer");
    echo "\$vall=",$vall, "<br>";
    echo "<br>";
    settype($vall, "boolean");
    echo "\$vall=",$vall, "<br>";

    // Controler l'etat d'une variable
    /*lors de l'envoi de donnée d'un formulaire vers le serveur, le script qui reçoit les informations doit pouvoir detecter l'existence 
    d'une réponse dans les champs du formulaire. Les fonction isset() et empty() permettent ce type
    de controle.
    La fonction isset () retourne une valeur false ou 0 si la variable existe mais n'est pas initialisée ou si elle à la valeur NULL
    et la retourne TRUE ou 1 si elle a une valeur quelconque. Il peut y avoir plusieur paramètre n'est pas initialisée, a une des valeurs
    suivantes: , NULL, FALSE, la chaine "0", ou est un tableau vide, et la valeur FALSE si elle a une quelconque autre valeur.*/
    
    $a = null;
    if(isset ($a)){
        echo "\$a existe déja <br>";

    }else{
        echo "\$a n'existe pas <br>";
    }
    if(empty ($a)){
        echo "\$b est vide <br>";

    }else{
        echo "\$b à la valeur $a <br>";
    } // il est censé afficher : $a n'existe pas et $a est vide
    $b = 0;
    if(isset ($b)){
        echo "\$b existe déja <br>";

    }else{
        echo "\$b n'existe pas <br>";
    }
    if(empty ($b)){
        echo "\$b est vide <br>";

    }else{
        echo "\$b à la valeur $b <br>";
    }
    $b = 1;
    if(isset ($c)){
        echo "\$c existe déja <br>";

    }else{
        echo "\$c n'existe pas <br>";
    }
    if(empty ($c)){
        echo "\$c est vide <br>";

    }else{
        echo "\$c à la valeur $c <br>";
    }
    /*Pour la variable $a à la valeur NULL, isset() retourne également FALSE et empty() TRUE. Pour $b, qui à la valeur 0,
    isset() permet de detecter l'existence de cette variable bien que empty() la declare vide. Il en irait de même si $b était chaine vide.
    Pour une valeur numérique affecté à la valeur $c, les deux fonctions retournent TRUE. Ces fonctions, et en particulier isset(), 
    vous permettront de verifier si un utilisateur à bien rempli tous les champs d'un formulaire.*/
    //LES ENTIERS
    $entier = 0b1101;
    echo $entier;

    
    
    ?>
    
    
</div>

</body>

</html>