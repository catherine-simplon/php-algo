<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex11 - Atelier1</title>
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

               
        /********************* MAIN CODE ************************/
        $liste_amis = array(
            "Leboss"   => array("Gilles", 45, "Lyon"),
            "Leroux"   => array("Bertrand", 18, "Paris"),
            "Organ"    => array("Ingrid", 12, "Grenoble"),
            "Dupont"   => array("Alain", 20, "Paris"),
            "Vendue"   => array("Rosalie", 50, "Marseille")
        );
        echo array_keys($liste_amis);
        echo '<p>*************** foreach ********************</p>';
        foreach($liste_amis as $nom=>$infos) 
        { 
            echo '<ul>';
                echo '<li>' . $nom . '</li>';
                // Affichage des informations pour chaque nom
                echo '<ul>';
                foreach ($infos as $info)
                {
                    echo '<li>' . $info . '</li>';
                }
                echo '</ul>';
            echo '</ul>';
        }

        echo '<p>*************** for (METHOD 1) ********************</p>';
        // METHOD1
        reset($liste_amis);
        for($i=0; $element=each($liste_amis); $i++) 
        { 
            echo '<ul>';
                echo '<li>' . $element['key'] . '</li>';
                echo '<ul>';
                for($j=0;$coord=each($element[1]);$j++) 
                { 
                    echo '<li>' . $coord[1] . '</li>';
                } 
                echo '</ul>';
            echo '</ul>'; 
        } 

        echo '<p>*************** for (METHOD 2) ********************</p>';
        // METHOD 2
        $keys = array_keys($liste_amis);
        for($i=0; $i < count($keys); ++$i) {
            echo '<ul>';
                echo '<li>' . $keys[$i] . '</li>';
                echo '<ul>';
                $infos = $liste_amis[$keys[$i]];
                    for ($j=0; $j<count($infos); $j++)
                    {
                        echo '<li>' . $infos[$j] . '</li>';
                    }
                echo '</ul>';
            echo '</ul>';
        }

        echo '<p>*************** while ********************</p>';
        reset($liste_amis);
        while($element=each($liste_amis)) 
        { 
            echo '<ul>';
                echo '<li>' . $element['key'] . '</li>';
                echo '<ul>';
                while($coord=each($element[1])) 
                { 
                    echo '<li>' . $coord[1] . '</li>';
                } 
                echo '</ul>';
            echo '</ul>'; 
        } 

    ?>
</body>
</html>