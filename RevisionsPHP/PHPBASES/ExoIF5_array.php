<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

//Avec ARRAY

$liste_produits=[
    "Ecran" => 150,
    "Clavier" => 95,
    "Souris" => 45,
];

print("Liste des produits disponibles :\n");
foreach ($liste_produits as $cle => $valeur)
{
    print($cle." - Prix: ".$valeur."€"."\n");
}

$liste_qte=[
    "Ecran" => 0,
    "Clavier" => 0,
    "Souris" => 0,
];


print("Quelle quantité désirez vous :\n");
foreach ($liste_qte as $cle => $valeur)
{
    print($cle." - Quantité : ");
    $qte = read();
    $liste_qte[$cle]= $qte;
}

$total_commande = 0;

foreach ($liste_qte as $cle => $valeur)
{
   if ($liste_qte[$cle] >=5)
   {
        $liste_produits[$cle] =  $liste_produits[$cle]*0.9;
   } 
   
   $total_commande+=$liste_qte[$cle]*$liste_produits[$cle];
}

print ("Le total de votre commande s'élève à ".$total_commande." €.");

print("\nSouhaitez-vous être livré? La livraison est gratuite à partir de 100€ d'achat. (Tapez oui/non) : \n");
$livraison = read();
$frais_livraison= $total_commande*0.02;

if ($livraison == "oui" AND $total_commande < 100)
{
    $total += $frais_livraison;
    print("Votre total avec frais de livraison s'élève à : ".$total." €. \n");
}
elseif ($livraison == "oui" AND $total_commande >= 100)
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
    $total_commande = $total_commande*0.8;
    print("Le total de votre commande après réduction fidélité s'élève à ".$total_commande." €.");
}
else
{
    print("Le total final de votre commande s'élève à ".$total_commande." €.");
}

