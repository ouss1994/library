
<?php

include 'config.php';

try{
    $pdo = new PDO ("$server","$username","$pw");
   

       
    $query = $pdo->prepare("$sql");
    $query->execute();
      
       echo $dtableau ;
      for($i=0; $row = $query->fetch(); $i++){
    	
    	echo  $dligne.$row['inv'].$mligne.$row['titre'].$mligne.$row['auteur'].$fligne;   

    }
     echo $ftableau;
   
    
      } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

      unset($pdo);
      unset($query);

 ?>