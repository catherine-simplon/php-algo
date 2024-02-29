<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrigé - Ex10 - Atelier1</title>
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
            for ($i=0; $i<20; )
            {
                $tab[$i] = $tab[$i+1] = rand(10, 99); // Car dans l'énoncé on a demandé des entiers de 2 chiffres
                $i=$i+2;
            }
        }

        //24 | 24 | 14 | 14 | 29 | 29 | 39 | 39 | 35 | 35 | 69 | 69 | 86 | 86 | 16 | 16 | 85 | 85 | 85 | 85 | 
        function create_symetric(&$tab)
        {
            $new_tab = array();

            for ($i=0; $i < count($tab); )
            {
                array_push($new_tab, $tab[$i]);
                $i = $i + 2;
            }
            $tab = $new_tab;
            $tab = array_merge($tab, array_reverse($new_tab));
        }
        
        /********************* MAIN CODE ************************/
        $numbers = array();

        create_tab($numbers);
        display_tab($numbers);

        echo '<hr>';

        create_symetric($numbers);
        display_tab($numbers);
        
    ?>
</body>
</html>