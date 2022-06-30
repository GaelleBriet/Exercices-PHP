<?php

namespace Firme\Commercial {
  class Personne
  {
    private $nom;
    private $prenom;
    protected $code;

    public function __construct($nom, $prenom, $code)
    {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->code = $code;
    }

    public function __clone()
    {
      $this->nom = $this->nom . '(clone)';
    }

    function setname($newnom, $newprenom)
    {
      $this->nom = $newnom;
      $this->prenom = $newprenom;
    }

    function getname()
    {
      return "Commercial : " . $this->nom . ", " . $this->prenom . ", " . $this->code . ".";
    }
  }
}
