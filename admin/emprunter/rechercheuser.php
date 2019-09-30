
<?php 
session_start();
include 'config.php';
if (!isset($_SESSION["user"])){
  header('Location: http://localhost/library/');
}else  {
    function chargerClasse($classe)
{
  require '../mesClasses/'.$classe . '.php'; 
}

spl_autoload_register('chargerClasse');
    
/*class Etudiants {
public $id;
public $cin;
public $nom;
public $prenom;
public $sex;
public $lieu_naissance;
public $specialite; 
}*/
try {
    
    $dbh= new PDO ("$server","$username","$pw");  
    $query = $dbh->prepare("$name");
    $query->setFetchMode(PDO::FETCH_CLASS, 'Etudiants');
    $query->execute(); 
 
    while($user = $query->fetch()){

 
                     echo"<tr><td>"."<a href=\"recherchelivre.php?idetudiant=".$user->id."\">".$user->id."</a>"."</td><td>".$user->cin."</td><td>".$user->nom."</td><td>".$user->prenom."</td><td>".$user->specialite."</td></tr>";

    }
        
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

    }
?>
