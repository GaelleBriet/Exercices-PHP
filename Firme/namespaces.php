<?php

require 'Client.php';
require 'Commercial.php';




use Firme\Client;

$client1 = new Client\Personne('nom2', 'prenom2');

echo $client1->setname('Durand', 'Jeanne');
echo ("<br>");
echo $client1->getname();
echo ("<br>");

$client2 = new Client\Personne('Dupuis', 'Paul');
echo $client2->getname();



use Firme\Commercial;

$commercialPersonne = new Commercial\Personne('nom1', 'prenom1', 01);


echo $commercialPersonne->setname('Dupond', 'Jean');
echo ("<br>");
echo $commercialPersonne->getname();
echo ("<br>");

$commercialClone = new Commercial\Personne('Duprès', 'Laure', 02);
$commercialClone = clone $commercialPersonne;
echo $commercialClone->getname();
