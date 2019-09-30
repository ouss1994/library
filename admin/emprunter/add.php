		
		<?php
		session_start();
		include 'config.php';
		if (!isset($_SESSION["user"])){
		header('Location: http://localhost/library/');
		}else  {
		try {
		
		 $dbh= new PDO ("$server","$username","$pw");  

		 $query = $dbh->prepare("$emprunt");
		 $query->execute(); 
					
		header('Location: http://localhost/library/admin/emprunter/fin.php');





		    } catch (PDOException $e) {
		
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		    }
		
		}








		?>