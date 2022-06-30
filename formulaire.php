<!-- Créez une classe nommée form représentant un formulaire HTML. Le constructeur doit créer le code d’en-tête du formulaire en utilisant les éléments <form> et <fieldset>. Une méthode settext() doit permettre d’ajouter une zone de texte. Une méthode setsubmit() doit permettre d’ajouter un bouton d’envoi. Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML correspondants. La méthode getform() doit retourner tout le code HTML de création du formulaire. Créez des objets form, et ajoutez-y deux zones de texte et un bouton d’envoi. Testez l’affichage obtenu. Le fichier contenant la définition de la classe form est indépendant ce qui permet son inclusion dans d’autres scripts en vue de l’utilisation de la classe ou de son extension.-->

<?php


class Form
{

  protected $header;
  protected $footer;
  protected $text;
  protected $valeur;

  public function __construct(string $action, string $method, string $titre)
  {
    $this->header = "<form action='$action' method='$method'><fieldset>$titre<br>";
    $this->footer = "</fieldset></form>";
  }

  public  function settext(string $name, string $intitule)
  {
    $this->text .= "<label for='$name'>$intitule :  </label><input type='text' name='$name'/><br>";
  }

  public  function setsubmit(string $valeur)
  {
    $this->valeur = "<input type='submit' value='$valeur' />";
  }

  public function getform()
  {
    return $this->header . $this->text . $this->valeur  . $this->footer;
  }
};

$form = new Form2('form.php', 'POST', 'Formulaire');
$form->settext('prenom', 'Votre prénom');
$form->settext('nom', 'Votre nom');
$form->settext('email', 'Votre adresse e-mail');
$form->settext('message', 'Votre message');
$form->setsubmit('Envoyer votre message');
$form->setradio('chat', 'chat', 'Chat');
$form->setradio('chien', 'chien', 'Chien');
$form->setradio('furet', 'furet', 'Furet');
$form->setcheckbox('Homme', 'homme');
$form->setcheckbox('Femme', 'femme');

echo $form->getForm();

/* Créez un objet à partir de la classe form2 de l’exercice 5, puis créez-en un clone. Modifiez certaines caractéristiques de cet objet, et affichez les deux formulaires obtenus. */

$formclone = clone $form;
$formclone->setcheckbox('majeur', 'majeur');
$formclone->setcheckbox('mineur', 'mineur');
echo $formclone->getForm();


/* Créez une sous-classe nommée form2 en dérivant la classe form de l’exercice 4. Cette nouvelle classe doit permettre de créer des formulaires ayant en plus des boutons radio et des cases à cocher. Elle doit donc avoir les méthodes supplémentaires qui correspondent à ces créations. Créez des objets, et testez le résultat. */


class Form2 extends Form
{
  private $radio;
  private $checkbox;

  public  function setradio($name, $value, $label)
  {
    $this->radio .= "<input type='radio' name='$name' value='$value' /><label for='$value'>$label</label><br>";
  }

  public  function setcheckbox($label, $name,)
  {
    $this->checkbox .= "<input type='checkbox' id='$name' name='$name' /><label for='$name'>$label</label><br>";
  }

  public  function getform()
  {
    return $this->header . $this->text . $this->radio . $this->checkbox . $this->valeur  . $this->footer;
  }
};





?>