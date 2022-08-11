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
$soustraction = $first_num - $second_num;
$multiplication = $first_num * $second_num;
$division = $first_num / $second_num;

print(
    "Choisissez parmis ces 4 opérations celle que vous souhaitez réaliser : addition (tapez \"add\"),
     soustraction (tapez \"sous\"), multiplication (tapez \"multi\") ou division (tapez \"div\").\n");
$operation = read();

if ($operation == "add")
{
    print("Le résultat est ". $addition);
}

elseif ($operation == "sous")
{
    print("Le résultat est ". $soustraction);
}

elseif ($operation == "multi")
{
    print("Le résultat est ". $multiplication);
}

elseif ($operation == "div")
{
    if ($second_num != 0) 
    {
        print("La division par 0 est impossible");
    }

    else 
    {
        print("Le résultat est ". $division);
    }
}