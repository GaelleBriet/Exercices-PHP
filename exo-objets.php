<!-- Écrivez une classe représentant une ville. Elle doit avoir les propriétés nom et département et une méthode affichant « la ville X est dans le département Y ». Créez des objets ville, affectez leurs propriétés, et utilisez la méthode d’affichage. -->


<?php
class Ville
{
  // propriétés nom et département  de la classe Ville:
  public $nom;
  public $departement;


  public function infosVille()
  {
    return "La ville $this->nom est située dans le département $this->departement";
  }
};

$Lyon = new Ville();
$Avignon = new Ville();
$Dijon = new Ville();

$Lyon->nom = "Lyon";
$Lyon->departement = "Rhône";

$Avignon->nom = "Avignon";
$Avignon->departement = "Vaucluse";

$Dijon->nom = "Dijon";
$Dijon->departement = "Côte d'Or";


echo $Lyon->infosVille() . "<br>";
echo $Avignon->infosVille() . "<br>";
echo $Dijon->infosVille() . "<br>";
?>

<!-- Modifiez la classe en la dotant d’un constructeur. Réalisez les mêmes opérations de création d’objets et d’affichage. -->

<?php
class Ville2
{
  private $nom2;
  private $departement2;

  public function __construct($n, $dpt)
  {
    $this->nom2 = $n;
    $this->departement2 = $dpt;
  }

  public function infosVille()
  {
    return "La ville $this->nom2 est située dans le département $this->departement2";
  }
};

$Dole = new Ville2('Dôle', 'Doubs');
$Lons = new Ville2("Lons-le-Saunier", 'Jura');
$Morteau = new Ville2('Morteau', 'Doubs');

echo $Dole->infosVille() . "<br>";
echo $Lons->infosVille() . "<br>";
echo $Morteau->infosVille() . "<br>";

?>

<!-- Créez une classe représentant une personne. Elle doit avoir les propriétés nom, prénom et adresse, ainsi qu’un constructeur et un destructeur. Une méthode getpersonne() doit retourner les coordonnées complètes de la personne. Une méthode setadresse() doit permettre de modifier l’adresse de la personne. Créez des objets personne, et utilisez l’ensemble des méthodes. -->

<?php
class Personne
{
  private $nomPersonne;
  private $prenomPersonne;
  private $adressePersonne;

  public function __construct($n, $p, $a)
  {
    $this->nomPersonne = $n;
    $this->prenomPersonne = $p;
    $this->adressePersonne = $a;
  }

  public function __destruct()
  {
    echo 'ceci va être détruit <br>';
  }

  public function getPersonne()
  {
    return $this->prenomPersonne . " " . $this->nomPersonne . ", " . $this->adressePersonne;
  }

  public function setAdresse($new_adressePersonne)
  {
    $this->adressePersonne = $new_adressePersonne;
  }
};

$Perso1 = new Personne('Briet', 'Gaelle', 'rue tranquille');
$Perso2 = new Personne('Pilloix', 'Louis', 'rue des vacances');

echo $Perso1->getPersonne() . "<br>";
echo $Perso2->setAdresse("10 rue des Vacances d'été") . "<br>";
echo $Perso2->getPersonne() . "<br>";

?>