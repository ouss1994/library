  
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
    try {
    
    $dbh= new PDO ("$server","$username","$pw");  
    $query = $dbh->prepare("$liste");
    $query->setFetchMode(PDO::FETCH_CLASS, 'Emprunt');
    $query->execute(); 
    
    
      while($list = $query->fetch()){
    

             echo"<tr><td>"."<a href=\"confirmer.php?idemprunt=".$list->id."\">".$list->id."</a>"."</td><td>".$list->idetudiant."</td><td>".$list->idexemplaire."</td><td>".$list->dateEm."</td></tr>";
 
        
    }
        
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

    }
?>
