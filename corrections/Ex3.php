<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex3 - Atelier1</title>
</head>
<body>

    <h4>Exercice 3</h4> 
    <?php
        $nb = mt_rand(2,20);
        $f = 1;
        for ($i=2; $i <= $nb; $i++) { 
            $f*=$i;
        }
        echo "<h2>".$nb."! = ".$f."</h2>";
     ?>                                
    
</body>
</html>