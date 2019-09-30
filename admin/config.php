<?php
    $hostname = "localhost";
    $dbname = "library";
    $server="mysql:host=$hostname;dbname=$dbname;charset=utf8";    
    $username = "root";
    $pw = "ouss1994";
        
        /*index.php*/
        $login=$_POST['login'];
        $sql = 'SELECT * FROM user';   

?>