<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex5 - Atelier1</title>
</head>
<body>

    <h4>Exercice 5</h4> 
    <?php
        echo '<table>';
        // 1ère ligne
        echo "<tr><td></td>";
        for ($c=1;$c<11;$c++) {
            echo "<th>$c</th>";
        }
        echo "</tr>\n";
        // toutes les lignes
        for ($l=1;$l<11;$l++) {
            // 1 ligne
            echo "<tr><th>$l</th>";
            for ($c=1;$c<11;$c++) {
                $r=$c*$l;
                echo "<td>$r</td>";
            }
            echo "</tr>\n";
        }
        echo '</table>';
     ?>                                
    
</body>
</html>