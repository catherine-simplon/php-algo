<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex7 - Atelier1</title>
</head>
<body>
    <?php
        /********************* FUNCTIONS ************************/
        function display_tab($tab)
        {
            foreach ($tab as $number)
            {
                echo $number . ' | ';
            }
        }

        function search_max ($tab)
        {
            $max = $tab[0];
            foreach ($tab as $number)
            {
                if ($number > $max)
                    $max = $number;
            }
            return $max;
        }

        function search_min ($tab)
        {
            $min = $tab[0];
            foreach ($tab as $number)
            {
                if ($number < $min)
                    $min = $number;
            }
            return $min;
        }
        /********************* MAIN CODE ************************/
        $numbers = array();

        // Remplissage du tableau par des nombres aléatoires de 2 chiffres
        for ($i=0; $i<50; $i++)
        {
            $numbers[$i] = rand(10, 99); // Car dans l'énoncé on a demandé des entiers de 2 chiffres
        }

        display_tab($numbers);

        // METHOD 1 : Utilisation des fonctions personnalisées
        echo '<p> La max est <strong>' . search_max($numbers) . '</strong></p>';
        echo '<p> La min est <strong>' . search_min($numbers) . '</strong></p>';

        // METHOD 2 : Utilisation des fonctions par défaut de PHP
        echo '<p> La max est <strong>' . max($numbers) . '</strong></p>';
        echo '<p> La min est <strong>' . min($numbers) . '</strong></p>';


        
    ?>
</body>
</html>