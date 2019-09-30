  
<?php 
session_start();
include 'config.php';
if (!isset($_SESSION["user"])){
  header('Location: http://localhost/library/');
}else  {
    try {
    
    $dbh= new PDO ("$server","$username","$pw");  
    $query = $dbh->prepare("$name");
    $query->execute(); 
    $rows = $query->fetchAll();
    
    foreach($rows as $row) {
    

             echo"<tr><td>"."<a href=\"user1.php?idetudiant=".$row['id']."\">".$row['id']."</a>"."</td><td>".$row['cin']."</td><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['specialite']."</td></tr>";
 
        
    }
        
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

    }
?>
