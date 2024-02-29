<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrigé - Ex9 - Atelier1</title>
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

        function create_tab(&$tab)
        {
            for ($i=0; $i<50; $i++)
            {
                $tab[$i] = rand(10, 99); // Car dans l'énoncé on a demandé des entiers de 2 chiffres
            }
        }
        
        function create_pair_impair($tab, &$tab_pair, &$tab_impair)
        {
            foreach ($tab as $number)
            {
                if (($number % 2) == 0)
                {
                    array_push($tab_pair, $number);
                } else 
                {
                    array_push($tab_impair, $number);
                }
            }
        }
       
        /********************* MAIN CODE ************************/
        $numbers = array();
        $tab_pair = array();
        $tab_impair = array();

        create_tab($numbers);
        display_tab($numbers);

        // Eclatement du tableau
        create_pair_impair($numbers, $tab_pair, $tab_impair);


        echo '<h2> Nombres pairs</h2>';
        display_tab($tab_pair);

        echo '<h2> Nombres impairs</h2>';
        display_tab($tab_impair);

        
    ?>
</body>
</html>