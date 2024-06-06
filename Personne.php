<?php
class Personne {
    public $nom;
    public $prenom;
    public $dateNaissance;
    public function __construct($nom, $prenom, $dateNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;

    }
    function presenter(){
        return "je m'appelle ". $this->nom." ".$this->prenom;
    }
    function age(){
        // $date = date("Y");
        $dateNaissance = new DateTime($this->dateNaissance);
        $today = new DateTime('today');
        
        return "  J'ai  : ".date_diff($dateNaissance,$today)->y.  " ans ".date_diff($dateNaissance,$today)->m.  " mois ".date_diff($dateNaissance,$today)->d.  " jour";
    }

}
$personne1 = new Personne ("mariem","amzil","2004/08/22") ;
echo $personne1->presenter();
echo $personne1->age();

?>
