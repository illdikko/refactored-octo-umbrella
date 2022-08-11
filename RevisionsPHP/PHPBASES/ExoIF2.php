<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

print("Quelle est la température de la pièce? : ");
$temp=read();

if (15<$temp and $temp<=25)
{
    print("Il fait bon!");
}

elseif ($temp<= 15)
{
    print("Il fait trop froid!");
}

else 
{
    print("Il fait trop chaud!");
}