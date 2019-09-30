<?php
session_start();
include 'config.php';
try {
        function chargerClasse($classe)
{
  require 'mesClasses/'.$classe . '.php'; 
}

spl_autoload_register('chargerClasse');

    $dbh= new PDO ("$server","$username","$pw"); 
    $ok=false;
    
    $query = $dbh->prepare("$sql");
    $query->setFetchMode(PDO::FETCH_CLASS, 'User');
    $query->execute(); 
    
    
    
    
     while($row = $query->fetch()){

        if ($row->login==$_POST['login'] && $row->pass==$_POST['pass']) $ok=true;
        
           }
    if ($ok){
       
        $_SESSION["user"]='wafa';
        header('Location: http://localhost/library/admin/index1.php');
      
        }
      

if(!$ok){               
   $qstring = '?login=err';
    $dbh = null;
     header('Location: http://localhost/library/admin/index.php'.$qstring);
}
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>