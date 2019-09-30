<?php
    $hostname = "localhost";
    $dbname = "library";
    $server="mysql:host=$hostname;dbname=$dbname;charset=utf8";    
    $username = "root";
    $pw = "ouss1994";
        
        

    	  $val=$_POST['nom'];
       $name='SELECT * from etudiants where cin="'.$val.'" or nom like "%'.$val.'%"  ';
          

      $iduser=$_GET['idetudiant'];
      $liste='SELECT * from etudiants where id='.$iduser.' '; 
                 
      $id=$_POST['id'];
      $del='DELETE from etudiants where id='.$id.' ';









?>