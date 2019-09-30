<?php 
session_start();
include 'dbConfig.php';

if (!isset($_SESSION["user"])){
  header('Location: http://localhost/library/');
}else  {
    try {
    
        $dbh= new PDO ("$server","$username","$pw");  
        
        $prevQuery = "SELECT cin FROM etudiants WHERE cin = '".$_POST['cin']."'";
     	$query = $dbh->prepare($prevQuery);
        $query->execute();
        $prevResult = $query->fetchColumn(0);
         unset($query);
              
              
               
                if($prevResult> 0){

		$query = $dbh->prepare("UPDATE etudiants SET nom = '".$_POST['nom']."', prenom = '".$_POST['prenom']."', sex = '".$_POST['sex']."', lieu_naissance = '".$_POST['lieu']."', specialite = '".$_POST['specialite']."' WHERE cin = '".$_POST['cin']."'");
		$query->execute(); 
        unset($query);
               
                           $qstring = '?ajout=succ';
 
                }else{

        $query = $dbh->prepare("INSERT INTO etudiants (cin, nom, prenom, sex, lieu_naissance, specialite) VALUES ('".$_POST['cin']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['sex']."','".$_POST['lieu']."','".$_POST['specialite']."')");
		$query->execute(); 
        unset($query);
                $qstring = '?ajout=succ';
}
                
            header("Location: http://localhost/library/admin/inscription/".$qstring);


		} catch (PDOException $e) {
		
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		    }
		
		}

                ?>
