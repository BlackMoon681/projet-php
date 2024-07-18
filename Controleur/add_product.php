<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $disc = $_POST['disc'];
    $price = $_POST['price'];
    $rpp = $_POST['rpp'];
    $qte = $_POST['qte'];
    $file = $_FILES['image']['name'];
    $target_dir = "C:/xampp/htdocs/Traveler/Controleur/cart/images/";
    $target_file = $target_dir . basename($file);

    // Sanitize inputs
    $id = htmlspecialchars($id);
    $name = htmlspecialchars($name);
    $disc = htmlspecialchars($disc);
    $price = htmlspecialchars($price);
    $rpp = htmlspecialchars($rpp);
    $qte = htmlspecialchars($qte);

    // Start the session
    session_start();

    // Database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "traveleer";
    $connect = mysqli_connect($host, $user, $password, $db);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query
    $sql = "INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) 
            VALUES ('$id', '$name', '$disc', '$price', '$rpp', '$qte', '$file')";

    // Check if the directory exists and has write permissions
    if (!is_dir($target_dir) || !is_writable($target_dir)) {
        die("The directory does not exist or is not writable.");
    }

    // Check for file upload errors
    if ($_FILES['image']['error'] != UPLOAD_ERR_OK) {
        die("File upload error: " . $_FILES['image']['error']);
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Execute the query
        if (mysqli_query($connect, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Close the connection
    mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traveler</title>
    <link rel="icon" href="../Traveler/imageshead_logo-removebg-preview.png">
    <link rel="stylesheet" href="../css/Login.css">
</head>
<body>
<div class="center">
    <h1>Ajouter un produit</h1>
    <form method="POST" action="#" enctype="multipart/form-data">
        <div class="inputbox">
            <input type="id" name="id" placeholder="ID">
        </div>
        <div class="inputbox">
            <input type="text" name="name" placeholder="nom">
        </div>
        <div class="inputbox">
            <input type="text" name="disc" placeholder="Description">
        </div>
        <div class="inputbox">
            <input type="number" name="price" placeholder="Prix">
        </div>
        <div class="inputbox">
            <input type="number" name="rpp" placeholder="rpp">
        </div>
        <div class="inputbox">
            <input type="number" name="qte" placeholder="quantités">
        </div>
        <div class="inputbox">
            <input type="file" name="image" placeholder="img">
        </div>
        <div class="inputbox">
            <input type="submit" value="ajouter">
        </div>
    </form>
</div>
</body>
</html>
