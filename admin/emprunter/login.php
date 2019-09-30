<?php
session_start();
include 'config.php';
try {
    $dbh= new PDO ("$server","$username","$pw"); 
    $ok=false;
    
    $query = $dbh->prepare("$sql");
    $query->execute(); 
    $rows = $query->fetchAll();
    
    
    
    foreach($rows as $row) {

        if ($row['login']==$_POST['login'] && $row['pass']==$_POST['pass']) $ok=true;
        
    }
    if ($ok){
       
        $_SESSION["user"]='wafa';
        header('Location: http://localhost/library/admin/dash.php');
echo "bonjour";        
        }
        echo "non";
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>