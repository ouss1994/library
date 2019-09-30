<?php 
     

include 'config.php';
 

try{
    $pdo1 = new PDO ("$server","$username","$pw");
   

       
    $query = $pdo1->prepare("$new10");
    $query->execute();
      
    
      
 for ($i = 1; $i <= 10; $i++)

      {  
    	
        $row = $query->fetch();
        
        include 'div.php';

       }
  

    
  
    
      } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

      unset($pdo1);
      unset($query);

   
  ?>
 