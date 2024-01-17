<?php


function playAgain(): bool {
    /*
    return filter_var( // filtral para bool e não string
        readline("\nDeseja jogar novamente? (true/false): "),
        FILTER_VALIDATE_BOOLEAN
    );    ou

    */

    $result = readline("\nDeseja jogar novamente? (s/n): ");
if ($result === 's'){
    return true;
}else {return false;}

return $result === 's' ? true : false;

}