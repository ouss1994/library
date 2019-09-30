<?php
//load the database configuration file
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same cin
                $prevQuery = "SELECT cin FROM etudiants WHERE cin = '".$line[0]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE etudiants SET nom = '".$line[1]."', prenom = '".$line[2]."', sex = '".$line[3]."', lieu_naissance = '".$line[4]."', specialite = '".$line[5]."' WHERE cin = '".$line[0]."'");
                }else{
                    //insert member data into database
                    $db->query("INSERT INTO etudiants (cin, nom, prenom, sex, lieu_naissance, specialite) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."')");
                }
            }
            
             //close opened csv file
            fclose($csvFile);

            $qstring = '?cin=succ';
        }else{
            $qstring = '?cin=err';
        }
    }else{
        $qstring = '?cin=invalid_file';
    }
}

//redirect to the listing page
header("Location: http://localhost/library/admin/importer/".$qstring);