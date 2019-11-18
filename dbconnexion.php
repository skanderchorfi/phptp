
<?php 

try {   $bdd = new PDO('mysql:host=localhost;dbname=dsi2x;charset=utf8', 'root', ''); 
} catch(Exception $e) 
{ die('Erreur : '.$e->getMessage());   }