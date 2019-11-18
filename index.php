<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
<body>
<h1> Liste des étudiants </h1>
<a href="create.php"> nouvel étudiant </a>
  
<table border="1">
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>phone</th>
            <th>opération </th>
        </tr>
        <?php
    include 'dbconnexion.php';
$req = $bdd->prepare('SELECT * FROM students'); 
$req->execute();
while ($donnees = $req->fetch()) 
{ 
     while($data = $req->fetch()){
            echo '<tr>';
            echo '<td>'.$data['id'].'</td>' ;
            echo '<td>'.$data['firstname'].'</td>' ;
            echo '<td>'.$data['lastname'].'</td>' ;
            echo '<td>'.$data['email'].'</td>' ;
            echo '<td>'.$data['phone'].'</td>' ;
            echo '<td> <a href="edit.php?id='.$data['id'].'">Editer </a></td>';
            echo '<td> <a href="delete.php?id='.$data['id'].'">Supprimer </a></td>';
            
           
         
        }
} 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>