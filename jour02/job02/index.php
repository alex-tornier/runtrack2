<?php
for ($i = 1; $i <= 1337; $i++) {
    
    //afficher sauf 26 37 88 1111 3233
    
    if ($i === 26 or $i === 37 or $i === 88 or $i === 1111 or $i === 3233){
        echo "<br>";
    }
    
    //retour à la ligne entre chaque nombre
    
    else{echo "$i<br>";}
    }

?>