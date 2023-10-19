<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $hab = 15230;
    echo $hab;

    $hab = 102;
    echo $hab;

    $ville = " orleans";
    $dep = " centre";
    $titre = $ville .$dep;
    echo $titre;
    echo "<br>";
    $nn = "salut";
    $mm = "bob";
    $pp = "copain";

    $affich = $nn. " ".$mm. ",tu veux etre mon ".$pp." ? ";
    echo $affich;
    echo "<br>";
    $a = 1;
    $b = 3;
    $a = $a + 2;
    echo "premier : " .$a;
    echo "<br>";
    $a = $a * $b;
    echo "deuxième :" .$a;
    $a = $a -1;
    echo "<br>";
    echo "troisième : " .$a;
    echo "<br>";
    $a = $a / 4;
    echo "quatrième : " , $a;
    print("cinquième " .$a);
    //print"cinquième" .$a;


    ?>
    
</body>
</html>