<?php

//compte de 2 a 1000    (1 ne compte pas vraiment)

for ($i = 2; $i <= 1000; $i++) {

    $premier=true;

    for ($x = 2; $x <= $i-1; $x++) {

        $test=$i%$x;

        //"if" apres chaque test si le nombre est divisible il est pas premier 

        if ($test===0){

            $premier=false;

            //"break;" met fin a la boucle

            break;
        }

}

//"if" le nombre est premier on l'écrit

if ($premier==true){
    echo "$i<br>";
}
}
?>