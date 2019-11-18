<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<h1>Editer  étudiant : </h1>
<?php
require 'dbconnexion.php';
$req=$bdd->prepare('SELECT * FROM students WHERE id = :param_id');
$req->bindParam(':param_id', $_GET['id']);
$req->execute();
$data = $req->fetch();
?>
<form method="post" action="update.php">         
         
   <label> Firstname : </label> 
   <input type="text" name="firstname" value ="<?= $data['firstname'] ?>" ><br>   
   <label>Lastname: </label> 
   <input type="text" name="lastname" value ="<?= $data ['lastname'] ?> " ><br>
   <label>Email : </label> 
   <input type="text" name="email" value ="<?= $data ['email'] ?> "><br>
   <label>Phone: </label> 
   <input type="text" name="phone" value ="<?= $data ['phone'] ?> "><br>
   <input type="number" name="id" id="id" hidden value="<?= $data['id']?>">
   <input type="submit" name="submit" value="Insérer">   

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>