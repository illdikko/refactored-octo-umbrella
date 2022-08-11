<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

//Sans ARRAY

$item1 = "Ecran";
$item1_price = 150;
$item2 ="clavier";
$item2_price = 95;
$item3= "Souris";
$item3_price = 100;

print("Liste des produits disponibles :\n"
.$item1." - Prix: ".$item1_price."€"."\n"
.$item2." - Prix: ".$item2_price."€"."\n"
.$item3." - Prix: ".$item3_price."€"."\n");

Print("Quel quantité de ".$item1." souhaitez vous? : ");
$qt_item1 = read();
print("Quel quantité de ".$item2." souhaitez vous? : ");
$qt_item2 = read();
print("Quel quantité de ".$item3." souhaitez vous? : ");
$qt_item3 = read();


if ($qt_item1 >= 5)
{
    $item1_price = $item1_price*0.9;
}
elseif ($qt_item2 >= 5)
{
    $item2_price = $item2_price*0.9;    
}
elseif ($qt_item3 >= 5)
{
    $item3_price = $item3_price*0.9;
}

$total = ($item1_price*$qt_item1)+($item2_price*$qt_item2)+($item3_price*$qt_item3);

print("Souhaitez-vous être livré? La livraison est gratuite à partir de 100€ d'achat. (Tapez oui/non) : \n");
$livraison = read();
$frais_livraison= $total*0.02;


if ($livraison = "oui" AND $total < 100)
{
    $total += $frais_livraison;
    print("Votre total avec frais de livraison s'élève à : ".$total." €. \n");
}
elseif ($livraison = "oui" AND $total >= 100)
{
    print("Vous bénéficiez d'une livraison gratuite. \n");
}
else
{
    print("Le retrait des marchandises se fera au magasin. \n");
}

print("Avez-vous une carte de fidélité? (Tapez oui ou non) : \n");
$fid_card =read();
$reduc_fid = 0.8;

if ($fid_card == "oui")
{   
    $total = $total*0.8;
    print("Le total de votre commande après réduction fidélité s'élève à ".$total." €.");
}
else
{
    print("Le total final de votre commande s'élève à ".$total." €.");
}

