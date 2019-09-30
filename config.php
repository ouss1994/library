<?php


    $hostname = "localhost";
    $dbname = "library";
    $server="mysql:host=$hostname;dbname=$dbname;charset=utf8";    
    $username = "root";
    $pw = "ouss1994";
   
   $title=$_POST['search'];
   $sql = 'SELECT distinct inv,titre,auteur FROM books where titre like "%'.$title.'%"';    
   $new10='SELECT * FROM `books` order by id DESC LIMIT 10'; 
   
   
   /*tableau*/
   
   $dtableau="<table style='border:1px ;' ><th></th><th style='text-align:center;border:thin solid #6495ed;'>INV</th><th style='text-align:center;border:thin solid #6495ed;'>TITRE</th><th style='text-align:center;border:thin solid #6495ed;'>AUTEUR</th></tr>"; 
   $ftableau="</table>";
   $dligne="<tr><td style='width:60px;'></td><td style='border:thin solid #6495ed;text-align:center;width:200px;' >"; 
   $mligne="</td><td style='border:thin solid #6495ed;text-align:justify;width:850px; '>";  
    $mligne2="</td><td style='border:thin solid #6495ed;text-align:justify;width:170px;'>";
   $fligne="</td></tr>";
  
   ?>