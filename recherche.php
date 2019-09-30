
<?php
include 'menu.php';
include 'config.php';
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
             
    
    foreach ($rows as $row) 
    {     
   
              echo"<tr><td>".$row['inv']."</td><td>".$row['titre']."</td><td>".$row['auteur']."</td></tr>";
 
      
    }
              echo"</tbody></table>"; 
              
   
    
  
}   
      } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }
 include'fin_table.php';
      unset($pdo);
      unset($query);


 ?>
 