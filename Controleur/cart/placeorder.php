<?php

// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}
// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}
// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: placeorder.php');
    exit;
}
// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
if ($products_in_cart){
$qq = $products_in_cart[$product['id']];
$ss = (string)$product['name']; }
if (isset($_POST['name'])) {

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email'];





$host="localhost";
$user="root";
$password="";
$db="traveleer";
$connect = mysqli_connect($host,$user,$password,$db);
   
$sql = "INSERT INTO `commande` (`ID`,`name`,`last`,`email`,`service`,`qte`,`total`)
 VALUES ('','$name','$last','$email','$ss','$qq','$subtotal');";
 mysqli_query($connect,$sql); 

 }
 if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypted_pwd = ($password);
    
    
    
    
    $host="localhost";
    $user="root";
    $password="";
    $db="traveleer";
    $connect = mysqli_connect($host,$user,$password,$db);
       
    $sql = "INSERT INTO `client` (`name`,`last`,`email`,`password`)
    VALUES ('$name','$last','$email','$encrypted_pwd');";
    mysqli_query($connect,$sql); }
    
     
    $host="localhost";
    $user="root";
    $password="";
    $db="traveleer";
    
    $link = mysqli_connect($host,$user,$password,$db);
    
    if(isset($_POST['username'])) {
      $uname=$_POST['username'];
      $password=$_POST['password'];
      $sql="SELECT * FROM client WHERE email='".$uname."' AND password='".$password."' limit 1";
      $result=mysqli_query($link,$sql);
      if(mysqli_num_rows($result)==1){
      
        header("location: ../index.php?page=products");      }
      else { echo " Connexion echoué !";
      exit(); 
    }
    }
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

  
 <title >Traveler</title>
   
   <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">



<head><title>S'inscirire</title></head>
<div class="center">
  <h1>S'inscrire</h1>
  <form method="POST" action="#" enctype="multipart/form-data">
    <div class="inputbox">
    <input type="text" name="name" placeholder="Nom">
    </div>
    <div class="inputbox">
    <input type="text" name="last" placeholder="Prenom">
    </div>

    <div class="inputbox">
    <input type="email" name="email" placeholder="Email">
    </div>

    <div class="inputbox">
    <input type="password" name="password" placeholder="Password">
    </div>

    <div class="inputbox">
      <input type="submit" value="Ajouter">
    </div>
    <div class="inputbox">
      <a href="../html/loginclient.php">Vous avait deja un compte ?</a>
    </div>
  </form>
</div>



<?=template_header('Cart')?>
<div class="cart content-wrapper">
    <h1>Panier</h1>
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Services</td>
                    <td>Prix</td>
                    <td>Quantité</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Non produit selectionné</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="../cart/images//<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Supprimer</a>
                    </td>
                    <td class="price">DT <?=$product['price']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">DT <?=$product['price'] * $products_in_cart[$product['id']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Total</span>
            <span class="price">DT <?=$subtotal?></span>
        </div>
        

        <div class="buttons">
                
           <a href="../cart/html/Register.php" >Valider la commmande</a>
        </div>
    </form>
</div>
<div class="center">
  <h1>Connexion Client</h1>
  <form method="POST" action="#">
    <div class="inputbox">
    <input type="name" name="username" placeholder="E-mail">
    </div>
    <div class="inputbox">
    
    <input type="Password" name="password" placeholder=" Mot de passe"> 
    </div>
    <div class="inputbox">
      <input type="submit" value="Ajouter">
    </div>
  </form>
</div>