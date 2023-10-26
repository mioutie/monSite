<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les fonction en php</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
<div class="content">
    <h1>Les Fonctions en php</h1>
    <!--une fonction correspond à une serie d'instructions qui effectuent une tache spécifique.Pour exécuter une fonction il faut appeler
    la fonction par son nom en plaçant ou non des paramettre. On parle souvent de fonctions personnalisées quand on écrit soi-même
    les instructions mais on parle aussi de fonction php ou predefinies quand on utilise une commandes qui effectuent une tache, comme par 
    exemple "strval", "strtotime",ou d'autre encore.-->
    
    <?php
    function bonjour(){
        print("Salut Jean");
    }
    bonjour();
    echo "<br>";
    function bonjour1($prenom){
        print("salut  ".$prenom);
    }
    bonjour1("Anissa");

    //operateur numerique dans les fonctions
    function addition($nbre1,$nbre2){
        $resultat = $nbre1 + $nbre2;
        echo "<br>". $resultat;
    }
    addition(1,2);
    echo "<br>";
    function calculTva(){
        return 100*1.2;
    }
    //j'exécute ma fonction calcultva en l'appelant
    echo "fonction calcul tva 1 :".calculTva(). "<br>";
    echo "<br>";
    function calculTva2($nombre){
        return $nombre*1.2;
    }
    //Exécution de la fonction
    echo calculTva2(500). "<br>";
    echo calculTva2(2500). "<br>";
    
    echo "<br>";
    function calculTva3($montant, $taux){
        return $montant * $taux;
    }
    //Exécute notre fonction
    echo "500€ avec un taux de 5.5% font ".calculTva3(500,1.055). "<br>";
    echo "4000€ avec un taux de 20% font ".calculTva3(4000,1.2). "<br>";
    echo "<br>";
    function afficherDate($jr, $mois, $annee){
        echo $jr. " ".$mois. " ".$annee;
    }
    //Execuion de la fonction
    afficherDate(25, "octobre", 2023);

    function volume($largeur, $longueur, $hauteur){
        echo "Le volume est :".$largeur*$longueur*$hauteur;
    }
    volume(10,10,10);
    //volume ($a,$b,$c);

    echo "<br>";
    function test ($nom){
        echo $nom;
    }
    //NOTION DE PORTEE DE VARIABLE
    /*la portée de variables indique l'emplacement dans laquel elle est accessible. une variable peut être locale ou globale.
    *Toute variable définie en dehors d'une fonction à une portée globale.
    *Toute fonction definie à l'interieur d'une fonction aura une portée locale à la fonction. Cela signifie que la variable ne sera accessible
    qu'au sein de la fonction et sera détruite dès la fin de l'exécution de ladite fonction.
    *Toute variable définie dans une fonction avec le mot clé global sera considérée comme global et pour changer de valeur dans les diffents
    script*/
    function calcul_remise($h1){
        global $taux_remise;
        $taux_remise = 0.3;
        return $h1 * $taux_remise;

    }
    //je definis une fonction qui calcule la tva
    function calcTva($h2){
        global $taux_tva;
        $taux_tva=0.2;
        return $h2*$taux_tva;
    }
    $ht = 100;//le hort taxe
    //je récupere la remise à deduire
    $remise = calcul_remise($ht);
    echo "La remise est :".$remise. "<br>";

    //je recupere la tva à ajouter
    $tva = calctva($ht);
    echo "La tva est :".$tva. "<br>";

    //calcule ttc
    $ttc = $ht -$remise+$tva;
    //je récupére le ttc
    echo "Le ttc est : ".$ttc. "<br>";
    //$nom
    //majoration du taux de la tva
    $major = $taux_tva*10;
    echo $major;

    echo "<br>";
    echo "<br>";
     
    //Calcule de l'aire de carré
    function carre($c){
        echo "l'aire du carré est : ".$c*$c;
        }
        carre(2);

    ?>
    </div>
    
</body>
</html>