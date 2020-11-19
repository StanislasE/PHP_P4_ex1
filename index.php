<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1</title>
</head>
<body>

    <p>
        <?php
            $jsp = exo('Cet exercice est dur à faire !!!') ;  // Je crée ma function

            echo $jsp ;   // J'affiche la fonction

            function exo($text){      // Je définit les paramètres de ma fonction
                $result = $text ;

                return $result ;      // Je renvoie mon resultat (un echo mais spécifique aux fonctions)
            } ;
        ?>
    </p>

</body>
</html>