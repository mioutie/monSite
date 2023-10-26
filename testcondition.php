<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
<header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">&nbsp;Présentation</a>
            <a href="#">&nbsp;Contact</a>
        </nav>
    </header>
    <div class="content">
        <h1>tests condition</h1>
       
    <?php
    $tarif = 800;
    $remise = 0.5;
    $prix_net = $tarif*(1-$remise);
    echo $prix_net;

    if($prix_net >1500)
    echo "<br> super cher";
elseif($prix_net>=1000)
echo "<br> acceptable";
else
echo "<br> on signe où Laïd ?";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Début de mon application code postal";
echo "<br>";
echo "//------------------------------------//";
echo "<br>";

//end_appli_remise

   
//appli_code postal
$code_postal = "91000";
if(substr($code_postal,0,2)=="45")
echo "orleans";
elseif(substr($code_postal,0,2)=="75")
    echo "Paris";
    else{
        echo "Province";
    }
//application avec switch
echo "<br>";
echo "//------------------------------------//";
echo "<br>";

$codePost = "29350";
switch(substr($codePost,0,2)){
    case "69" :
        echo "Lyon";
        break;
    case "33" :
        echo "Bordeaux";
        break;
    case "31" :
        echo "Toulouse";
        break;
    case "45" :
        echo "Orleans";
        break;
    case "18" :
        echo "Bourges";
        break;
    case "13" :
        echo "Marseille";
        break;
        default :
        echo "ailleurs";
}
/*Avec le switch, le code peut tester plusieur cas les un à la suite des autres. Mais switch ne peut tester 
que des égalités contrairement à if ...elseif ou toutes les comparaisons sont possible.*/
echo "<br>";
echo "//------------------------------------//";
echo "<br>";
//Test avec la condition ternaire
/*les condition ternaire sont des expressions dans lesquelles les conditions vraies et fausses sont écrites sur une même
ligne.*/
$c_postal = "75008";


    ?>
    </div>
     <footer>&copy;DWMM 2023</footer>
    
    
    
    
    
    
</body>
</html>