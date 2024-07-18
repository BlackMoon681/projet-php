<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "traveleer";
$connect = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete product if delete button is clicked
if (isset($_POST['delete'])) {
    $id_to_delete = $_POST['id_to_delete'];
    $delete_sql = "DELETE FROM `products` WHERE `id` = '$id_to_delete'";
    if (mysqli_query($connect, $delete_sql)) {
        echo "Product deleted successfully";
    } else {
        echo "Error: " . $delete_sql . "<br>" . mysqli_error($connect);
    }
}

// Modify product if modify button is clicked
if (isset($_POST['modify'])) {
    $id_to_modify = $_POST['id_to_modify'];
    $name = $_POST['name'];
    $disc = $_POST['disc'];
    $price = $_POST['price'];
    $rpp = $_POST['rpp'];
    $qte = $_POST['qte'];

    $update_sql = "UPDATE `products` SET 
                   `name` = '$name', 
                   `desc` = '$disc', 
                   `price` = '$price', 
                   `rrp` = '$rpp', 
                   `quantity` = '$qte' 
                   WHERE `id` = '$id_to_modify'";
    if (mysqli_query($connect, $update_sql)) {
        echo "Product modified successfully";
    } else {
        echo "Error: " . $update_sql . "<br>" . mysqli_error($connect);
    }
}

// Fetch products from the database
$sql = "SELECT * FROM `products`";
$result = mysqli_query($connect, $sql);

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Products</title>
    <link rel="stylesheet" href="../css/table.css">
    <style>
        /* Your provided CSS styles */
    </style>
</head>
<body>
<div class="table-wrapper">
<h2>Product List</h2>
<table class="fl-table">
<thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>RRP</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <form class="form-inline" method="POST" action="#">
                    <td class="col col-1"><input type="text" name="id_to_modify" value="<?php echo htmlspecialchars($row['id']); ?>" readonly></td>
                    <td class="col col-1"><input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>"></td>
                    <td class="col col-1"><textarea name="disc"><?php echo htmlspecialchars_decode($row['desc']); ?></textarea></td>
                    <td class="col col-1"><input type="number" name="price" value="<?php echo htmlspecialchars($row['price']); ?>"></td>
                    <td class="col col-1"><input type="number" name="rpp" value="<?php echo htmlspecialchars($row['rrp']); ?>"></td>
                    <td class="col col-1"><input type="number" name="qte" value="<?php echo htmlspecialchars($row['quantity']); ?>"></td>
                    <td class="col col-1">
                        <input type="submit" name="modify" value="Modify" class="btn modify">
                        <input type="submit" name="delete" value="Delete" class="btn delete">
                        <!-- Hidden field to store the ID for delete action -->
                        <input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($row['id']); ?>">
                    </td>
                </form>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
