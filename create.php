<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></head>
<body>
    <h1>Nouvel étudiant : </h1>
    <form method="post" action="store.php">         
         <div class="rows">
           <div calss="col-md-6">
             <div class="form-groupe">
   <label> Firstname : </label> 
   <input type="text" name="firstname" placeholder=" Firstname goes here"><br>   </div></div>
   <div calss="col-md-6">
             <div class="form-groupe">
   <label>Lastname: </label> 
   <input type="text" name="lastname" placeholder=" Lastname goes here" ><br>
</div></div>
<div calss="col md-6">
             <div class="form-groupe">
   <label>Email : </label> 
   <input type="text" name="email" placeholder="name@exemple.com"><br>
   </div></div>
   <div calss="col-md-6">
             <div class="form-groupe"> <label>Phone: </label> 
   <input type="text" name="phone"placeholder="ex: 55533655"><br></div></div>
         </div>
         <div class="rows">
           <div class="row-md-4">
   <input type="submit" name="submit" value="Insérer">   
           </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>