<!-- Créez une classe abstraite représentant une personne. Elle déclare les propriétés nom et prénom et un constructeur. Créez une classe client dérivée de la classe personne en y ajoutant la propriété adresse et une méthode setcoord() qui affiche les coordonnées complètes de la personne. Créez une classe électeur dérivée de la même classe abstraite, et ajoutez-y deux propriétés bureau_de_vote et vote, ainsi qu’une méthode avoter(), qui enregistre si une personne a voté dans la propriété vote. Les propriétés nom et prenom qui sont déclarées private dans la classe abstraite (repères 1 et 2) sont redéfinies comme public dans la classe electeur (repères 3 et 4) car sinon nous ne pourrions pas les lire lors du contrôle du vote( repères 5 et 6) car la classe electeur ne possède pas de méthode getinfo(). -->

<?php



abstract class Personne
{
  protected $nom;
  protected $prenom;

  public function __construct($n,  $p)
  {
    $this->nom = $n;
    $this->prenom = $p;
  }
};



class Client extends Personne
{
  protected $adresse;

  public function __construct($n,  $p, $a)
  {
    parent::__construct($n, $p);
    $this->adresse = $a;
  }


  public function setcoord()
  {
    return "Coordonées du client : " . $this->nom . " " . $this->prenom . ", " . $this->adresse . "." . "<br>";
  }
};



class Electeur extends Personne
{
  public $bureau_de_vote;
  protected $vote;
  public $nom;
  public $prenom;

  public function __construct($n,  $p, $b)
  {
    parent::__construct($n, $p);
    $this->bureau_de_vote = $b;
  }

  public function avoter($v, $n, $p, $b)
  {
    $this->vote = $v;
    if ($v == true) {
      return "L'électeur : " . $n . " " . $p .  " a voté dans le " . $b . ".";
    }
  }
};

$test = new Client("Dupond", "Jean", "rue des oiseaux");
echo $test->setcoord();

$deux = new Electeur("Dupuis", "Marie", "bureau numéro 11");
$trois = new Electeur("Durand", "Jeanne", "bureau numéro 5");

echo $deux->avoter(true, "Dupuis", "Marie", "bureau numéro 11");
echo $trois->avoter(false, "Durand", "Jeanne", "bureau numéro 5");






?>