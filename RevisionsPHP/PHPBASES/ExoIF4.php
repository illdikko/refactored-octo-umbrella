<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

print("En quelle année es-tu? : ");
$annee = read();

print("Entre le nombre d'absence : ");
$absences = read();

$assiduite = (50-$absences)*2;

 if ($assiduite>=80 AND $annee == 1
    OR $assiduite>=70 AND $annee ==2
    OR $assiduite>=60 AND $annee ==3)
{
     print("Bravo! La matière est réussie!");
}

else
{
    print("Désolée, ce n'est pas suffisant.");
}

// if ($assiduite>=80 AND $annee == 1)
// {
//     print("Bravo! La matière est réussie!");
// }

// elseif ($assiduite>=70 AND $annee ==2 )
// {
//     print("Bravo! La matière est réussie!");
// }

// elseif ($assiduite>=60 AND $annee ==3 )
// {
//     print("Bravo! La matière est réussie!");
// }

// else 
// {
//     print("Désolée, ce n'est pas suffisant.");
// }