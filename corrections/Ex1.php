<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex1 - Atelier1</title>
</head>
<body>

    <h4>Exercice 1</h4> 
    <?php
        $x = "PostgreSQL";
        $y = "MySQL";
        $z =& $x;
        $x = "PHP 17";
        $y =& $x;
        echo '<kbd>$x</kbd> = <b>"'.$x.'"</b><br>';
        echo '<kbd>$y</kbd> = <b>"'.$y.'"</b><br>';
        echo '<kbd>$z</kbd> = <b>"'.$z.'"</b><br>';            
    ?>                               
    
</body>
</html>
