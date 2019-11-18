
<?php
include 'dbconnexion.php';
$rep=$bdd->prepare('DELETE FROM students WHERE id =:param_id');
$rep->bindParam(':param_id',$_GET['id']);
$rep->execute();
header('location:index.php');  
?>

