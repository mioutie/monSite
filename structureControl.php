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
        <h1>Voici mon contenu</h1>
        <!--LE STRUCTURES DE CONTROLE EN PHP-->
    <!--elles permettent d'exécuter des blocs en fonction d'une condition qui doit être vérifiée. on distingue le structure 
    conditionnelles (ou tests) et les structures de boucles

les structures conditionnes : if,if...else et else if ou switch et les ternaires-->
    <?php
    //test if
    $a = 2;
    if($a >1) {
       echo" la variable $a est plus grand que 1.";
    }
    //test if ...else
    $b = 5;
    $c = 7;
    if($a > $c){
        echo "Est if els : La variable $b est plus grand que $c.<br>";
    }else{
        echo "test if else : La $b est plus petit ou egale à $c.<br>";
    }

    // test elseif
    $d = 6;
    $e = 6;
    if($d < $e){
        echo "la variable $d est plus petit que $e";
}elseif ($d > $e){
    echo "la variable $d est plus grand $e";
}else {
    echo "la variable $d est égale à $e";
}
//operateur de comparaison
 /*
  ==égale à
  != different de
  >strictement inferieur à
  <strictement inferieur à
  >= superieur ou égale à
  <= inferieur ou égale à

  */
  // on utilise la fonction var_dump() pour observer le comportement de nos tests. Elle renvoie une valeur booleen (true ou false).
  $nbre = 5;
  $nbre2 = 10;
  echo "la condition 1 est : ",var_dump($nbre == $nbre2);echo "<br>";
  echo "la condition 2 est : ",var_dump($nbre != $nbre2);echo "<br>";
  echo "la condition 3 est : ",var_dump($nbre > $nbre2);echo "<br>";
  echo "la condition 4 est : ",var_dump($nbre < $nbre2);echo "<br>";
  echo "la condition 5 est : ",var_dump($nbre >= $nbre2);echo "<br>";
  echo "la condition 6 est : ",var_dump($nbre <= $nbre2);echo "<br>";
  
  // les operateur logique
  /*permettent de combiner des testes et des condition.*/
  $nb = 15;
  $nb1 = 8;
  $nb2 = 1;

  if ($nb && $nb1 && $nb2)
  echo "les variable $nb, $nb1, $nb2 contiennent des valeur différentes <br/>";
else
echo "une de variable contient false comme valeur <br>";

if($nb>=10|| $nb1 >=10 || $nb2 >=10)
echo "la variable $nb2 à une valeur equivalente à false<br>";
if (!$nb2)
echo "la variable $nb2 à une valeur equivalente à false<br>";
else 
echo "la variable $nb2 à une valeur equivalente à true<br>";
    ?>
    
    </div>
    <footer>&copy;DWMM2023</footer>
    
    
    
</body>
</html>