<?php  
include '../Controleur/loginadmin.php'



?>
 <title >Traveler</title>
   
   <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">

 <style>
<?php include 'C:/xampp/htdocs/Traveler/css/Login.css';
 ?>
</style>
<head><title>Connexion Admin</title></head>
<div class="center">
  <h1>Connexion Admin</h1>
  <form method="POST" action="#">
    <div class="inputbox">
    <input type="name" name="username" placeholder="E-mail">
    </div>
    <div class="inputbox">
    
    <input type="password" name="password" placeholder=" Mot de passe"> 
    </div>
    <div class="inputbox">
      <input type="submit" value="Connecter">
    </div>
  </form>   
  
  <a href="../View/logintravailleur.php">Vous etes un travailleur ? </a>
  </div>
