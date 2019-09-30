  
<?php 
session_start();
include 'config.php';
if (!isset($_SESSION["user"])){
  header('Location: http://localhost/library/');
}else  {
    try {
        function chargerClasse($classe)
{
  require '../mesClasses/'.$classe . '.php'; 
}

spl_autoload_register('chargerClasse');
    
    $dbh= new PDO ("$server","$username","$pw");  
    $query = $dbh->prepare("$book");
    $query->setFetchMode(PDO::FETCH_CLASS, 'Books');
    $query->execute(); 
    
        while($livre = $query->fetch()){
    

             echo "<tr><td>"."<a href=\"confirmer.php?idetudiant=".$_POST["idetudiant"]."&idlivre=".$livre->id."\">".$livre->id."</a>"."</td><td>".$livre->titre."</td><td>".$livre->auteur."</td></tr>";
 
        
    }
        
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

    }
?>
