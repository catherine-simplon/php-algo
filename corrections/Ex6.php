<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Corrigé - Ex6 - Atelier1</title>
</head>
<body>

    <h4>Exercice 6</h4> 
    <?php
       $compteur=0;
       do
       {
           $nb1 = mt_rand(0,1000);                        
           $compteur++;
           $nb2 = mt_rand(0,1000);
           echo "$nb1 |  $nb2    <br/>";
       }while (($nb1 % 2!=0) OR ($nb2 % 2==0));
       echo "Résultat obtenu en $compteur coups";
     ?>                                
    
</body>
</html>