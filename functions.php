<?php

function generatePassword($iterations, $digits, $password) {
    for ($i = 0; $i < $iterations; $i++) { 
        $passwordArray = explode(" ", $digits);
        $randomNumber = rand(0, count($passwordArray) - 1);
        $password .= $passwordArray[$randomNumber];
    }

    return $password;
}

?>