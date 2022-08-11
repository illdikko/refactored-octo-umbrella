<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

print("Entre un premier nombre : ");
$first_num = read();
print("Entre un deuxième nombre : ");
$second_num = read();

$addition = $first_num + $second_num;
$substraction = $first_num - $second_num;
$multiplication = $first_num * $second_num;
$division = $first_num / $second_num;

print(
    "\n\nRésultat de l'addition : " . $addition .
    "\n\nRésultat de la soustraction : " . $substraction .
    "\n\nRésultat de la multiplication : " . $multiplication .
    "\n\nRésultat de la division : " . $division
);
