
<?php
include 'dbconnexion.php';
 
     $firstname = $_POST['firstname'] ; 
     $lastname = $_POST['lastname'] ; 
     $email = $_POST['email'] ; 
     $phone = $_POST['phone'] ;
     $req = $bdd->prepare("INSERT INTO students (firstname, lastname,email,phone) VALUES (:param_firstname, :param_lastname,:param_email,:param_phone)");
     $req->bindParam(':param_firstname',$firstname);
     $req->bindParam(':param_lastname',$lastname);
     $req->bindParam(':param_email',$email);
     $req->bindParam(':param_phone',$phone);
     $req->execute();
      header('location:index.php');  
       echo "$nb etudiant a bien été ajoutée ! " ; 
