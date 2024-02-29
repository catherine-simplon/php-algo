<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex2 - Atelier1</title>
</head>
<body>

    <h4>Exercice 2</h4> 
    <?php
        echo '<ul>';
        for ($i=6; $i < 100; $i++) { 
            if (($i % 3 == 0) && ($i % 5 == 0)){
                echo '<li>'.$i.'</li>';
            }                                
        }
        echo '</ul>';
     ?>                                
    
</body>
</html>