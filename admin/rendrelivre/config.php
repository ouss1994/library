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
       $name='SELECT * from etudiants where nom like "%'.$nom.'%" and id in (select idetudiant from emprunt)';
         /*lise des emprunts*/
             	  $iduser=$_GET['idetudiant'];
       $liste='SELECT * from emprunt where idetudiant='.$iduser.' and status=0'; 
        /*book.php*/
        $livre=$_POST['titre'];
        $book='SELECT * from books where titre like "%'.$livre.'%" ';
/*add.php*/
$ide=$_POST['idemprunt'];
		$retour='update emprunt  set dateRe=CURDATE(),status=1 where id='.$ide.' ';














?>