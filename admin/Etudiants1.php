<?php 

function chargerClasse($classe)
{
  require $classe . '.php'; 
}

spl_autoload_register('chargerClasse');


    $hostname = "localhost";
    $dbname = "library";
    $server="mysql:host=$hostname;dbname=$dbname;charset=utf8";    
    $username = "root";
    $pw = "ouss1994";
    try{
$pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
    

    $query = $pdo->prepare("select * from etudiants");
    
$query->setFetchMode(PDO::FETCH_CLASS, 'Etudiants');
    $query->execute(); 
while($r = $query->fetch())
{echo $r->id ;}
 

 
} catch (PDOException $e) {
	echo "Failed to get DB handle: " . $e->getMessage() . "\n";
	exit;
}

unset($pdo);
unset($query);
    
     
     



?>