<?php
        declare(strict_types = 1);
        function concatString(string $text1, string $text2) : string 
        {
        return "Voici deux chaînes de caractères: $text1 et $text2";
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.3</title>
</head>
<body>
    <h1>Exercice 3 Partie 4 : Les fonctions PHP</h1>
    <p><?= concatString('Frodon','Sam')?></p>
    
</body>
</html>