<?php


    $hostname = "localhost";
    $dbname = "library";
    $server="mysql:host=$hostname;dbname=$dbname;charset=utf8";    
    $username = "root";
    $pw = "ouss1994";
   
   $title=$_POST['search'];
   $sql = 'SELECT distinct * FROM books where titre like "%'.$title.'%"';    
   /**tableau**/
   $dtableau="<table style='border:1px solid black;' ><th> INV</th><th>TITRE</th><th>AUTEUR</th></tr>"; 
   $ftableau="</table>";
   $dligne="<tr><td style='border:1px solid black;width:100px;' >"; 
   $mligne="</td><td style='border:1px solid black ;'>";  
   $fligne="</td></tr>";
  
   
   ?>