<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function NomFonct($nom){
return $nom;
    }
    NomFonct('Helder');
    $nom=NomFonct("Helder");
    
    function nomComplet($nom,$prenom){
    
        return $nom. ' ' .$prenom;
    }
echo nomComplet('SANDOS',$nom);

?>

</body>
</html>