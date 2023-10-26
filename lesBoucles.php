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
        <h1>Les Boucles</h1>
        <!--Elles permettent d'executer plusieur fois des blocs de code en fonction de la valeur d'une variable on distingue
        les boucles while, for, foreach--> 
       
    <?php
    // la boucle while
    /*elle execute un bloc de ligne code tant que le condition est vraie.*/
    $a=1;
    //tant que la variable est inferieur à 10
    while($a<=10){
        echo "La valeur est : $a<br>";
        //j'incrémente la valeur de a
        $a++;
        

    }
    // la boucle Do...While
    /**
     * cette boucle ressemble à la précédente mais le code est executé avant la condition ne soit testée. En d'autre , 
     * vous etez sur que le 1er passage sera effectué dabns la boucle même si la condition s'avère fausse.
     * 
     */

     // je definis l'envirennement francais
     setlocale(LC_TIME,['fr', 'fra', 'french']);
     //j'initialise une variable
     $nombre = 0;
     //faire
     do{
        //je recupère la date du jour avec la formatage et le nombre du jour 
        $d1 = date("d/m/Y", strtotime('+'.$nombre. 'days'));
        //j'affiche la date
        echo "<p>" .$d1. "</p>";
        //j'incrimente la variable
        $nombre++;
        // tant que la variable est inferieur ou egale à 15
        
     }
     while($nombre <=15);
    /*NOTION D'INCREMENTATION ET E DECREMENTATION*/
    echo "<br>"; echo "<br>";
    echo "NOTION D'INCREMENTATION ET E DECREMENTATION";
    $x = 20;
    echo "<br>";echo "<br>";
    echo 'x = ',$x;
    echo "<br>";
    $y = 12;
    echo "<br>";echo "<br>";
    echo 'y = ',$y;
    echo "<br>";
    $x++; //Incremente
    $y--;//décrémente
    echo 'la variable $x est incrémentée et veut :..' .$x. 'et $y est décrémentée et vaut maintenant = ' .$y. '.';
    // La BOUCLE FOR
    /*Elle indique de répéter une action un certain nombre de fois en fonction de la valeur d'un pointeur.
    La structure posséde trois paramètres: un début, un test et une incrémentation qui s'effectuent à la fin de chaque passage dans 
    la boucle */
    echo "<br>";echo "<br>";
    echo "BOUCLE FOR";
    for($p=0; $p<=5; $p++){
        echo "Je dis bonjour avec la boucle for : ".$p."<br>";
    }
    //LA BOUCLE FOREACH
    /**
     * 
     */
    echo "<br>";echo "<br>";
    echo "BOUCLE FOREACH";
    echo "<br>";
    $T["janvier"] = "école";
    echo "<br>";
    $T["septembre"] = "vacances";
    foreach($T as $mois =>$periode){
        echo $mois. "===>" .$periode. "<br>";
    }
    
    echo "<h2> Révisez votre table de multiplication </h2>";
    //Debut du tableau
    echo "<table border =\"2\" style=\"background-color:yellow\">
    <tr>
    <th>&nbsp; x &nbsp; </th>";
    //créer une premiere ligne
    for($i=1; $i<10;$i++){
        echo "<th>&nbsp; $i&nbsp; </th>";
    }
    echo "</tr>";
    //fin de la boucle
    //création du corps de la table
    //boucles de creation du contenu de la table
    for($i=1;$i<10;$i++){
        echo "<tr><th>&nbsp; $i&nbsp; </th>";
        //remplissage de la table
    for($j=1;$j<10;$j++){
        echo "<td style=\"background-color:red;color:white\">&nbsp; &nbsp; <br>".$i*$j. "&nbsp; &nbsp; </td>";
    }
    echo "</b></tr>";
    //fin de la boucle</td>;
    }
    echo "</table>";
    for ($i=1;$i<7;$i++){
        echo "<h$i>Mon titre H$i</h$i><br>";
    }
    
    ?>
    </div>
     <footer>&copy;DWMM 2023</footer>
    
    
    
    
    
    
</body>
</html>