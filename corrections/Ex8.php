<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrigé - Ex8 - Atelier1</title>
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
                $tab[$i] = chr(rand(65, 90)); // Car 'A'=65 et 'Z'=90
            }
        }
        
        function count_char($tab, $char) {
            $count = 0;
            foreach ($tab as $elem)
            {
                if ($elem == $char)
                {
                    $count++;
                }
            }
            return $count;
        }
        /********************* MAIN CODE ************************/
        $letters = array();
        $letters_stat = array(); // tableau résulat 

        // Remplissage du tableau par des lettres en majuscules
        // for ($i=0; $i<50; $i++)
        // {
        //     $numbers[$i] = chr(rand(65, 90)); // Car 'A'=65 et 'Z'=90
        // }

        create_tab($letters);
        display_tab($letters);

        foreach ($letters as $letter)
        {
            $letters_stat[$letter] = count_char($letters, $letter);
        }

        // Affichage du tableau résultat
        foreach ($letters_stat as $letter => $count)
        {
            echo '<p>Nombre d\'apparitions du caractère <strong>' . $letter . '</strong> est <strong>' . $count . '</strong></p>';
        } 


        
    ?>
</body>
</html>