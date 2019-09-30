
<?php
include 'menu.php';
include 'config.php';
/*

try{
    $pdo = new PDO ("$server","$username","$pw");
   

       
    $query = $pdo->prepare("$sql");
    $query->execute();
      
      $rows = $query->fetchAll();










if (count($rows) == 0) 
{
    echo "<table><tr><td style='width:1000px;text-align:center;'>"."<b>Aucun resultat!!!!!"."</td></tr></table>";
} 
else 
{
   
   	include 'entete_table.php'; 
	
    foreach ($rows as $row) 
    {     
         include 'resultat.php'; 
      
    }
   
     include'fin_table.php';
  
}


 

    
      } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

      unset($pdo);
      unset($query);
*/

include 'resultat2.php';
include 'suite.php'; 
 ?>