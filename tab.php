<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
    <style>
        table,tr,th,td{
            border:1px solid;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Mes Tableaux ici</h1>

        <?php
        $tb = ["Paris","Londres","Rome","Berlin"];
        // echo $tb[1];
        echo "sans count <br>";
        
        for($i=0;$i<3;$i++){
            echo $tb[$i], "<br>";
        }
        echo "<br>", "<br>";
        echo "avec count <br>";
        for($i=0;$i<count($tb);$i++){
            echo $tb[$i], "<br>";
        }
        echo "<br>", "<br>";
        
        $tab = [
            "Paris" => 'france',
            "Rome" => 'italie',
            "Berlin" => 'Allemagne',
            "Berne" => 'Suisse'
        ];
        echo $tab['Berlin'];
        //parcourir un tel tableau, il faut employer la boucle foreach
        foreach($tab as $ville=>$pays){
            echo $ville."->".$pays. "<br>";//->on peut placer juste par une espace on met rien à l'interieur;
        }
        echo "<br>";
        echo "<br>";
       
        // création du tableau de 9 éléments
        for($i=0;$i<=10;$i++){  //la valeur 10 on peut changer
            $tab2[$i] = pow(2,$i);
        }
            
            // $val = "une valeur";
            // echo $val, "<br>";
            //lecture des valeurs du tableau
            echo "les puissances de 2 sont : ", "<br>";
            foreach($tab2 as $val){
                echo $val." : ";

            }
            echo "<br>";
        echo "<br>";
        //créer un tableau associatif dont les clés sont les identifiants et associer à chacun un code aléatoire compris en 100 et 1000
        // puis lit et affiche les cés et les valeurs du tableau
         
        //création du tableau
        for($i=0;$i<=8;$i++){
            $tob["client".$i] = rand(100, 1000);
        }
        //lecture des clés et des valeurs
        foreach($tob as $cle=>$val){
            echo "le client de login <b>$cle</b> a le code <b>$val</br><br/>";
        }
        echo "<br>";
        echo "<br>";
        for($i=0;$i<=10;$i++){
            $tab3[$i] = pow(2,$i);
        }
        //lecture des indices et des valeurs
        foreach($tab3 as $ind=>$val){
            echo "<br><br> 2 puissances $ind vaut $val ";
        }
        echo "Dernier indice" .$ind, " , dernière valeur ", $val, "<br><br>";       

        $Teb = array(
            array ("<b>LIBRAIRIE</b>", "<b>TITRES</b>", "<b>REMISE</b>"),
            array ("FNAC", "GOOGLE SHEETS", "40%"),
            array ("fNAC", "EXCEL", "40%"),
            array ("EXPRESS", "GOOGLE DOCS", "38%"),
            array ("EXPRESS", "GOOGLE SLIDES", "40%")
        );
        echo "<table border width=\"50%\">";
        //lecture de chaque ligne
        foreach ($Teb as list($librairie, $titre, $remise)){
            //j'affiche les données dans des cases d'un tableau
            echo "<tr><td>".$librairie."</td>"."<td> ".$titre."</td>"."<td>".$remise."</td></tr><br>";
        }
           echo "</table>";
           echo "<br>";
        echo "<br>";
        $tablo[1] = "pomme";
        $tablo[2] = "poire";
        $tablo[3] = "orange";
        $tablo[4] = "cerise";
        $tablo[5] = "Mangue";
        //je relie les elements en les affichant dans le browser
        echo "<ol>"; //je prépare une liste numérotée
        for($i=1;$i<=5;$i++){
            echo "<li>" .$tablo[$i]. "</li>";//j'affiche chaque élement de tableau
        }
        echo "</ol>";
        echo "<br>";
        echo "<br>";

        $tablo1[]= "Stylo";
        $tablo1[]= "Crayon";
        $tablo1[]= "Gomme";
        $tablo1[]= "Regle";
        $tablo1[]= "Cahier";
        //je relie les éléments en commençant à 0
        for($i=0;$i<count($tablo1);$i++){
            echo $tablo1[$i]. "<br>";
        }
        echo "<br>";
        echo "<br>";

        $tablo2= ["voiture","velo","Moto","camion","Bateau"];
        echo "<br>";
        print_r($tablo2);

        /*En résumé
        Les tableaux sont des structure de variable complexes à une ou plusieurs dimensions. un indice numérique ou texte permet de recuperer 
        le valeur d'une case d'un tableau. Dans un indice numerique, on utiliser une boucle for ou while pour lire les élément d'un tableau
        Dans le cas d'une indice de type texte, il faut utiliser le boucle foreach.
        Les tableau servent aussi à organiser des matrices d'informations que l'on récupère si besoin en les parcourant à l'aide d'une ou plusieur boucles.*/

        


        
        
               



       

        ?>

    </div>
    
</body>
</html>