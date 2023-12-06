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
        
        echo "<br/>";
        echo "<br/>";

        echo "Autre types de fonctions avancées";

        /*
        1) FONCTION STATIQUE
        Une variable statique déclarée à l'interieur d'une fonction à l'aide de l'instruction static permet à une variable garder sa valeur à
        chaque appel de la fonction. L'initialisation d'une variable static se fait au debut de la fonction et à chaque appel de la fonction
        dans le script et elle gardera la valeur ou dernier appel*/ 

        function stat_fonc(){
            static $cpt = 0;
            $cpt++;
            echo $cpt;
        }
        echo "<br/>Au premier affichage, cpt est: " ; stat_fonc();
        echo "<br/>";
        //doit afficher 2 car le premier appel initialise $cpt à 0 une seule fois et l'incrémente de 1

        echo "Au deuxième affiche, cpt vaut :"; stat_fonc();
        echo "<br/>";

        echo "Au troisième affiche, cpt vaut dorénavant : "; stat_fonc();
        echo "<br/>";

        /*
        2) FONCTION AVANCEES 
        Il existe trois fonctions utilisées dans la gestion des arguments passés à une fonction dans PHP. Il s'agir de :
        - func_get_arg qui permet de lire un argment spécifique
        - func_get_args pour obtenir l'ensemble des arguments sous forme d'un tableau
        func_num_args pour connaitre le nombre d'arguents reçu par la fonction

        */ 

        // function gest_args(){
        //     $numargs = func_num_args();
        //     echo "Nombre d'arguments : $numargs\n <br/>";
        //     if($numargs>=2){
        //         echo "Le premier argument est : " .func_get_arg(0) . "\n <br/>";
        //         echo "Le deuxième argument est : " .func_get_arg(1) . "\n <br/>";
        //         echo "Le troisième argument est : " .func_get_arg(2) . "\n <br/>";
                
                
        //     }
        // }
        // gest_args(108,89,654);

        function gestion_args_1(){//y a pas de paramettre donc il ona donner $numargs 
                $numargs = func_num_args();//grace à ca qu'on peut afficher le gestion_ergs_1(89,654)
                echo "<u> gestion_arg_1</u>";
                echo "<br/>Nombre d'arguments : $numargs\n <br/>"; // Affiche le nombre d'arguments renseignés à l'appel de la fonction
        }
        gestion_args_1(89,654);

        echo "<br/>";
        echo "<br/>";

        function gestion_args_2(){
                $numargs = func_num_args();
                echo "<u>gestion_arg_2</u>";
                echo "<br/>Nombre d'arguments de la fonction 2: $numargs\n <br/>";
                if($numargs>=2){
                    echo "Le premier argument est : " .func_get_arg(0) . "\n <br/>";
                    echo "Le deuxième argument est : " .func_get_arg(1) . "\n <br/>";
                    echo "Le troisième argument est : " .func_get_arg(2) . "\n <br/>";
                }
            }
            gestion_args_2(25,2500,1000);





        /*
        3) FONCTION DYNAMIQUE
        Vous pouvez vous trouver dans le cas où vous ne savez pas quelle fonction devra être appelée à un moment précis dans un script donné.
         Pour cela, il suffit de placer dans une variable le nom d'une fonction, puis d'utiliser cette variable comme une fonction.*/
         
         echo "<br/>";
         echo "<br/>";
         function ecrire($texte){
            print($texte);
         }
         function ecrireEnGras($texte){
            print("<b>$texte</b>");
         }
         $fonction_var = "ecrire";
         $fonction_var ("toto"); //affiche toto
         echo "<br/>";
         echo "<br/>";
         $fonction_var = "ecrireEnGras";
         $fonction_var("toto"); //affiche toto en gras

         /*
         
        4) LA RECURSIVITE
        Le langage PHP supporte les fonctions récursives. Une fonction recursive est une fonction qui s'appelle elle-même.
        Un exemple simple présentant le principe de la récursivité: Affichage à l'envers d'une chaine de caractère.*/
        $str = "Hello World !";

        reverse_r($str);
        function reverse_r($str){
            if(strlen($str) > 0){
                //sbstr retourne le premier caractére
                reverse_r(substr($str, 1)); //appel récursif
                echo "<br/>";
                echo substr($str, 0, 1); //Affiche un caractére
                return;
            }
        }
        /*
        Les fonctions recursives sont principalement utilisées pour naviguer dans les structures de données dynamiques (liste et arbre).
        Autrement, dans de nombreux cas, la recursivité est équivalente à une répétition (ou itération). Les fonctions récursives sont plus lentes et
        consomment plus de mémoire que les itérations.*/

    $str_1 = "Hello world !";
    reverse_r($str_1);
    function reverse_r_1($str_1){
        for($i=1; $i<=strlen($str_1); $i++){
            echo substr($str_1, -$i, 1); //affiche un caractère en partant de la fin
        }
        return;
    }



         
         

        

    ?>
    </div>
    
</body>
</html>