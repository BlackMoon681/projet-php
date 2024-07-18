
<!DOCTYPE html>
<html lang="en">
<head>
<title >Traveler</title>
   
   <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Login.css">
        <title>Login Form in PHP With Session</title>
</head>
<body>

<div class="center">
  <h1>S'inscrire</h1>
  <form action="../Controleur/loginclient.php" method="post">
    <div class="inputbox">
    <input type="text" name="email" placeholder=" Email" class="inputbox">
    </div>
    <div class="inputbox">
    </div>
    <div class="inputbox">
    <input type="password" name="password" placeholder=" Mot de passe" class="inputbox">
    </div>
    <div class="inputbox">
    </div>
    <div class="inputbox">
    <button type="submit" class="inputbox" name="Login">Connecter</button>
    </div>
  </form>
</div>
  

</body>
</html>
<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>