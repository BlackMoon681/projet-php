


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title >Traveler</title>
   
   <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">

    <link rel="stylesheet" href="../css/Login.css">

<head><title>S'inscirire</title></head>
<div class="center">
  <h1>S'inscrire</h1>
  <form method="POST" action="../Controleur/register.php" enctype="multipart/form-data">
    <div class="inputbox">
    <input type="text" name="name" placeholder="Nom">
    </div>


    <div class="inputbox">
    <input type="email" name="email" placeholder="Email">
    </div>

    <div class="inputbox">
    <input type="password" name="password" placeholder="Password">
    </div>

    <div class="inputbox">
      <input  type="submit" value="Ajouter">
    </div>
    <div class="inputbox">
      <a href="../View/loginclient.php">Vous avait deja un compte ?</a>
    </div>
  </form>
</div>