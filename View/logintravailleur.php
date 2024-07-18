
 <title >Traveler</title>
   
   <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">

 <style>
<?php include 'C:/xampp/htdocs/Traveler/css/Login.css';
 ?>
 
</style>
<head><title>Connexion Travailleur</title></head>
<div class="center">
  <h1>Connexion Travailleur</h1>
  <form method="POST"  action="../Controleur/logintravailleur.php">
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
</div>
