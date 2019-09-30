<?php
    $hostname = "localhost";
    $dbname = "library";
    $server="mysql:host=$hostname;dbname=$dbname;charset=utf8";    
    $username = "root";
    $pw = "ouss1994";
        
        /*index.php*/
        $login=$_POST['login'];
        $sql = 'SELECT * FROM user';   

        /*le.php*/
    	  $nom=$_POST['nom'];
       $name='SELECT * from etudiants where nom like "%'.$nom.'%" ';
          
        /*book.php*/
        $livre=$_POST['titre'];
        $book='SELECT * from books where titre like "%'.$livre.'%" ';
/*add.php*/
		$emprunt='INSERT INTO emprunt  VALUES (0,'.$_POST["idetudiant"].','.$_POST["bookid"].',0,CURDATE(),NULL)';














?>