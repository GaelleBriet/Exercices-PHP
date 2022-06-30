<?php

// namespace Firme\Client {
//   class Personne
//   {
//     private $nom;
//     private $prenom;

//     public function __construct($nom, $prenom)
//     {
//       $this->nom = $nom;
//       $this->prenom = $prenom;
//     }

//     function setname($newnom, $newprenom)
//     {
//       $this->nom = $newnom;
//       $this->prenom = $newprenom;
//     }

//     function getname()
//     {
//       return "Client : " . $this->nom . ", " . $this->prenom . ".";
//     }
//   }
// }







// namespace Firme\Commercial {
//   class Personne
//   {
//     private $nom;
//     private $prenom;

//     public function __construct($nom, $prenom)
//     {
//       $this->nom = $nom;
//       $this->prenom = $prenom;
//     }

//     function setname($newnom, $newprenom)
//     {
//       $this->nom = $newnom;
//       $this->prenom = $newprenom;
//     }

//     function getname()
//     {
//       return "Commercial : " . $this->nom . ", " . $this->prenom . ".";
//     }
//   }
// }



// namespace {

//   use Firme\Commercial\Personne;

//   $commercialPersonne = new Personne('nom1', 'prenom1');


//   echo $commercialPersonne->setname('Dupond', 'Jean');
//   echo ("<br>");
//   echo $commercialPersonne->getname();
//   echo ("<br>");
// }

// namespace {

//   use Firme\Client\Personne;

//   $client1 = new Personne('nom2', 'prenom2');

//   echo $client1->setname('Durand', 'Jeanne');
//   echo ("<br>");
//   echo $client1->getname();
//   echo ("<br>");

//   $client2 = new Personne('Dupuis', 'Paul');
//   echo $client2->getname();
// }
