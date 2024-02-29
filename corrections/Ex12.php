<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrigé - Ex12 - Atelier1</title>
    <style>
        table, tr, td {
            color: white;
            font-weight: bold;
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: 100%;
            text-align: center;
        }

        table td {
            padding: 10px 0 10px 0;
        }
    </style>
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
            "Leboss"   => 'red',
            "Leroux"   => 'black',
            "Organ"    => 'blue',
            "Dupont"   => 'green',
            "Vendue"   => 'yellowgreen'
        );
        

        echo '<table>';
            echo '<tr>';
            foreach ($liste_amis as $nom => $color)
            {
                echo '<td style="background-color:' . $color .'">' . $nom . '</td>';
            }
            echo '</tr>';
        echo '</table>';

    ?>
</body>
</html>