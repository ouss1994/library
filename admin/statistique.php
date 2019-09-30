<?php
class Statistique {
	 private $nb_livres;
	 private $nb_personnes;
	 private $tt_emprunts;
     private $livre_non_retourner;

	 /*getter*/
	 public function affiche_livres()
	 {
	 	echo $this->nb_livres;
	 }
	 public function affiche_personnes()
	 {
	 	echo $this->nb_personnes;
	 }
	 public function affiche_emprunts()
	 {
	 	echo $this->tt_emprunts;
	 }
	 public function affiche_non_retourner()
	 {
	 	echo $this->livre_non_retourner;
	 }
   /*setter*/
     public function setLivres($pdo)
     { 
     	$query = $pdo->prepare("SELECT count(*) FROM `books`");
        $query->execute();
        $this->nb_livres = $query->fetchColumn(0);
        unset($query);
     }
     
     public function setPersonnes($pdo)
     {
     	$query = $pdo->prepare("SELECT count(*) FROM `etudiants`");
     	$query->execute();
     	$this->nb_personnes = $query->fetchColumn(0);
     	unset($query);
     }
     public function setEmprunts($pdo)
     {
     	$query = $pdo->prepare("SELECT count(*) FROM `emprunt`");
     	$query->execute();
     	$this->tt_emprunts = $query->fetchColumn(0);
     	unset($query);
     }
     public function setNonretourner($pdo)
     {
     	$query = $pdo->prepare("SELECT CONVERT ( count(status)*100 /(select count(*)from `emprunt` ), SIGNED INTEGER ) FROM `emprunt` where status=0 ");
     	$query->execute();
     	$this->livre_non_retourner = $query->fetchColumn(0);
     	unset($query);
     }

     public function __construct()
     { 
$hostname = "localhost";
$dbname = "library";
$server="mysql:host=$hostname;dbname=$dbname;charset=utf8";
$username = "root";
$pw = "ouss1994";
try{
$pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
    
     $this->setEmprunts($pdo);
     	$this->setLivres($pdo);
     	$this->setNonretourner($pdo);
     	$this->setPersonnes($pdo);
} catch (PDOException $e) {
	echo "Failed to get DB handle: " . $e->getMessage() . "\n";
	exit;
}

unset($pdo);
unset($query);
    
     }
     
}


$stat=new Statistique;



?>