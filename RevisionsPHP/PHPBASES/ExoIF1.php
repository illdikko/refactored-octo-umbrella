<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

print("Quel est la longueur de la pièce? : ");
$longueur = read();
print("Quel est la largeur de la pièce? : ");
$largeur = read();

$surface = $longueur*$largeur;

if($longueur == $largeur)
{
    print("La chambre est carrée! Elle a une surface de ".$surface." m².");
}

else
{
    print("La pièce a une surface de ".$surface." m².");
}