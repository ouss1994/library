<?php
//load the database configuration file
include 'dbConfig.php';

if(!empty($_GET['cin'])){
    switch($_GET['cin']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<!-- importation librairie jquery et fonction pagination -->
<script src="jquery.js"></script>
<script src="pagination.js"></script>
</head>
<body>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Members list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Members</a>
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Cin</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Sex</th>
                      <th>Spécialité</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //get records from database
                    $query = $db->query("SELECT * FROM etudiants ORDER BY id DESC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['cin']; ?></td>
                      <td><?php echo $row['nom']; ?></td>
                      <td><?php echo $row['prenom']; ?></td>
                      <td><?php echo $row['sex']; ?></td>
                      <td><?php echo $row['specialite'];?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- div contenant la génération de la pagination -->
<div class="paginator"></div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    pagination(50,'table tr td','.paginator',1);
});
</script>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
