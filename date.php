<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travaux sur les dates</title>
</head>
<body>
    <?php
    /**
     * pour manipuler les dates on utilise un groupe date/heure aussi appelé times- stamp qui est issu de la notation UNIX.
     * PHP utilise le fiseau horaire qui defini par defaut dans la rubrique [Date] du fichier php.ini.ce fichier regoupe 
     * tous les paramettre de base. On peut ouvrir ce fichier avec n'importe quel éditeur.
     * [Date]
     * ;date.timezone = "Europe/eBerlin"
     * vous pouvez recuperer le nom fuseau horaire en cour par le code ci-dessous.
     */
    //je recupère le fuseau horaire local
    $fuseau = date_default_timezone_get (); //affiche UTC
    echo $fuseau;
    /**
     * 
     */
    echo date("j m y")."<br>"; // afficha la date en forme 17 10 23
    echo date ("j m y"). "<br>";// affiche la date complete à la française 
    echo date ("j M Y"). "<br>";// affiche le 17 oct 2023
    //setlocale(LC_TIME?"fr_FR");//en français
    echo strftime("%a"). "<br>";
    echo date ("D F Y"). "<br>";
    echo date ("D d M Y"). "<br>";
    /**
     * am ou pm
     * AM OU PM
     * lE JOUR DU MOIS SUR 2 CHIFFRES
     * le jour de la semaine en anglais sur 3 lettres
     * le nom du mois en anglais
     * le jour sur un chiffre
     * le numero du mois sur deux chiffres
     * le numero du mois en anglais sur 3lettres 
     * le numero du mois sur un chiffre  
     * l'année sur 2 chiffre
     * l'année sur 4 chifffres
     * le numero du jour de la semaine (0 à 6 en commençant par le dimanche)
     * Il est à noter que pour afficher les dates dans un forma local par exemple en francais il fdaut utiliser 
     * l'instruction "strftime avec les param_ètres.
     */
    echo strftime("%A"). "<br>";
    setlocale(LC_TIME, "french");//on definit le francais 
    echo strftime("%a"). "<br>";
    echo strftime ("%a"). "<br>";//affiche tues
    echo strftime ("%A %d %B %Y")."<br>";
    echo strftime ("%d/%m/%Y"). "<br>";// en format 17/10/2023
    echo strftime ("%d-%m-%Y"). "<br>";//en format 17-10-2023

    /**comparaison de deux dates */
    $Date1 = "02-09-2023";
    $Date2 = "15-09-2023";

    // je transforme les en timestamp
    $t1 = strtotime($Date1);
    echo "le 04/09/2023 est égal à . " .$t1. "secondes<br>";
    
    $t2 = strtotime($Date2);
    echo "le 17/10/2023 est égal à . " .$t2. "secondes<br>";

    if($t1 < $t2){
        echo "la premiere date est bien avant la 2éme date <br>";

    }else{
        echo "la deuxieme date est bien avant la 1ère <br>";
    }
    /**
     * TESTER LA VALIDITÉ D'UNE DATE
     * D'une manière générale PHP est employé pour repondre à une interaction d'un client qui envoie ses information
     * vers un serveur par l'intermediaire d'un formulaire. Si la personne transfère des dates, le programme PHP
     * devra valider avant de les utiliser. PHp posséde pour se faire, une fonction qui peut aider à tester les dates 
     * à traiter: checkdate().
     * Ctte fonction est un booléen qui renvoi true ou false. les parametre entrée sont le mois de la date à tester, le jour et l'année. 
     * Bien evidement le mois doit etre compris entre le 1 et le 12, le jour doit entre compris entre 1 et 31 et les année entre 1 et 32767.
     * les années bisextiles sont prises en compte.
     */

     echo checkdate(12,25,2022);
     echo "<br>";
     if(checkdate(10,25,2021)==false){
        echo "mauvaise date";
     }
     else{
        echo "bonne date";
     }
     // date et heures
     $dateTemps = date("Y-m-d H:i:s");
     echo "date actuelle: $dateTemps";


    ?>

    
</body>
</html>