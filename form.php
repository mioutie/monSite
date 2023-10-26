<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    ><style>
        fieldset{border:double medium blue; padding:20px;}
        input[type=text],input[type=date]{
            /**Largeur de la zone de saisie */
            width:200px;
            /*position absolu qui ne depend pas des autre objets*/
            position: absolute;
            /*position gauche*/
            left:160px;
            /*famille police*/
            font-family:sans-serif; 
            /*taille du caractère*/
            font-size:14px;
        }
        label{
            font-family:sans-serif;
            font-size:14px;
        }
    </style>
</head>
<body>
<div>
    <h4>Formulaire DWwM</h4>
    <form action= "traitement2.php"methode="POST">
        <fieldset>
            <legend>Identité</legend>
            <label>Prenom</label><input type="text" name="prenom" size= "30"/><br><br>
            <label>Nom</label><input type="text" name="nom" size= "30"/><br><br>
            <label>Date de naissance</label><input type="date" name="dn"/><br><br>
            <label>Email</label><input type="text" name="em"/><br><br>
        </fieldset>

        <fieldset>
            <legend>Localisation professionnelle</legend>
            <input type="radio"name="prof" value = "france">France <br>
            <input type="radio"name="prof" value = "Italie">Italie <br>
            <input type="radio"name="prof" value = "Allemagne">Allemagne <br>
        </fieldset>
        <input type="submit">
</form>   

    
    
</div>




</body>

</html>