		
		<?php
		session_start();
		include 'config.php';
		if (!isset($_SESSION["user"])){
		header('Location: http://localhost/library/');
		}else  {
		try {
		
		 $dbh= new PDO ("$server","$username","$pw");  
echo $emprunt ;		
		 $query = $dbh->prepare($retour);
		 $query->execute(); 
					
					 header('Location: http://localhost/library/admin/rendrelivre/fin.php');
		    } catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		    }
		
		}
		?>