<?php

namespace Firme\Client {
  class Personne
  {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom)
    {
      $this->nom = $nom;
      $this->prenom = $prenom;
    }

    function setname($newnom, $newprenom)
    {
      $this->nom = $newnom;
      $this->prenom = $newprenom;
    }

    function getname()
    {
      return "Client : " . $this->nom . ", " . $this->prenom . ".";
    }
  }
}
