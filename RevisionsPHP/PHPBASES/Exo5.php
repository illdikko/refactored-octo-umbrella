<?php

$ticket_price = 13;
$discount = 0.1;

$discount_price = $ticket_price -($ticket_price*$discount);

print ("Tarif normal :".$ticket_price."€"."\nPrix réduit :".$discount_price."€");