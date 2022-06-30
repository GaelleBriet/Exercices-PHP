<!-- Ecrire un script qui affiche date et heure courantes sous les formes : -->
<!-- Mon, 25 Jan 2016 23:31:01 +0100                                        -->
<!-- Monday/January/2016                                                    -->
<!-- 25/Jan/2016                                                            -->
<!-- 25-01-16                                                               -->
<!-- 23h: 31m: 01s                                                          -->

<?php
echo date('D, d M Y H:i:s O') . "<br>";
?>

<?php
echo date('l/F/Y') . "<br>";
?>

<?php
echo date('d/M/Y') . "<br>";
?>

<?php
echo date('d-m-y') . "<br>";
?>

<?php
echo date('H: i: s');
echo "<br>";
?>

<!-- Afficher la date courante en français sous les formes suivantes : -->
<!-- lundi 25 janvier 2016, 23:37                                      -->
<!-- 25 janvier 2016                                                   -->


<?php

$date = new DateTime();
$dateFormatter = IntlDateFormatter::create(
  Locale::getDefault(),
  IntlDateFormatter::FULL,
  IntlDateFormatter::FULL,
  date_default_timezone_get(),
  IntlDateFormatter::GREGORIAN,
  'EEEE d MMMM yyyy, kk:mm'
);
echo ($dateFormatter->format($date)) . "<br>";


$date = new DateTime();
$dateFormatter = IntlDateFormatter::create(
  Locale::getDefault(),
  IntlDateFormatter::FULL,
  IntlDateFormatter::FULL,
  date_default_timezone_get(),
  IntlDateFormatter::GREGORIAN,
  'd MMMM yyyy'
);
echo ($dateFormatter->format($date)) . "<br>";

?>

<!-- Faire une fonction qui prend une date en entrée et qui retourne le jour de la semaine de cette date. -->


<?php

function trouveJour($month, $day, $year)
{
  return (date('l', mktime(0, 0, 0, $month, $day, $year)));
};

echo "le 1er janvier 2022 est un : " . trouveJour(01, 01, 2022) . "<br>";
echo "je suis née un : " . date('l', mktime(0, 0, 0, 10, 15, 1982)) . "<br>";

?>

<!-- Calculer de l'âge à l'instant t -->

<?php
$date2 = time();
echo "timestamp actuel : " . $date2 . "<br>"; // obtenir le timestamp à l'instant t

?>

<?php
$date_naissance = mktime(0, 0, 0, 10, 15, 1982);
$maintenant = time();
$mon_age = $maintenant - $date_naissance;
echo "j'ai " . round($mon_age / 60 / 60 / 24 / 365, 1) . " ans" . "<br>";

// sec en mn -> /60
// mn en h -> /60
// h en jr -> /24
// jr en année -> /365
?>

<!-- Vérifiez si la date du 29 février 2010 est valide  -->

<?php
// checkdate(month, day, year)
var_dump(checkdate(02, 29, 2010)) . "<br>";
?>

<!-- Rédigez le script qui teste si le 1 Mai 2016 est un vendredi ou un lundi , si oui il affiche « Week-end prolongé !» -->

<?php
function trouveFerie($month, $day, $year)
{
  return (date('l', mktime(0, 0, 0, $month, $day, $year)));
};

if (trouveFerie(05, 01, 2016) == "Monday" || trouveFerie(05, 01, 2016) == "Friday") {
  echo "Week-end prolongé !" . "<br>";
} else {
  echo "Au boulot !";
};
?>