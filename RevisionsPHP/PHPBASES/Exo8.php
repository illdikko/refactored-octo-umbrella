<?php

function read()
{
    $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
    $input = fgets($fr, 128);        // read a maximum of 128 characters
    $input = rtrim($input);         // trim any trailing spaces.
    fclose($fr);                   // close the file handle
    return $input;                  // return the text entered
}

$nom_produit1 = "Pommes";
$prix_produit1 = 3;
$nom_produit2 = "Oranges";
$prix_produit2 = 5;
$nom_produit3 = "Fraises";
$prix_produit3 = 4;

print(
    "Voici la liste des produits disponibles : \n".
    $nom_produit1." au prix de ".$prix_produit1." euros.\n".
    $nom_produit2." au prix de ".$prix_produit2." euros.\n".
    $nom_produit3." au prix de ".$prix_produit3." euros.\n"
);


print("Quel quantité de ".$nom_produit1." souhaitez vous? : ");
$qt_produit1 = read();
print("Quel quantité de ".$nom_produit2." souhaitez vous? : ");
$qt_produit2 = read();
print("Quel quantité de ".$nom_produit3." souhaitez vous? : ");
$qt_produit3 = read();


$total_commande = ($prix_produit1*$qt_produit1)+($prix_produit2*$qt_produit2)+($prix_produit3*$qt_produit3);

print("Le total de votre commande s'élève à ".$total_commande." euros.");