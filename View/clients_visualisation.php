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
if (isset($_POST['delete']) && isset($_POST['id_to_delete'])) {
    $id_to_delete = $_POST['id_to_delete'];
    $delete_sql = "DELETE FROM `loginformt` WHERE `ID` = '$id_to_delete'";
    if (mysqli_query($connect, $delete_sql)) {
        echo "Product deleted successfully";
    } else {
        echo "Error: " . $delete_sql . "<br>" . mysqli_error($connect);
    }
}

// Modify product if modify button is clicked
if (isset($_POST['modify']) && isset($_POST['id_to_modify']) && isset($_POST['name'])) {
    $id_to_modify = $_POST['id_to_modify'];
    $new_user = $_POST['name'];

    $update_sql = "UPDATE `loginformt` SET 
                   `User` = '$new_user' 
                   WHERE `ID` = '$id_to_modify'";

    if (mysqli_query($connect, $update_sql)) {
        echo "Product modified successfully";
    } else {
        echo "Error: " . $update_sql . "<br>" . mysqli_error($connect);
    }
}

// Fetch products from the database
$sql = "SELECT * FROM `loginformt`";
$result = mysqli_query($connect, $sql);

// Check if query was successful
if (!$result) {
    die("Error fetching data: " . mysqli_error($connect));
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <link rel="stylesheet" href="../css/table.css"> <!-- Adjust the path to your CSS file -->
    <style>
        .btn {
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="table-wrapper">
        <h2>User Details</h2>
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['ID']); ?></td>
                    <td>
                        <form method="post" action="" style="display:inline;">
                            <input type="text" name="name" value="<?php echo htmlspecialchars($row['User']); ?>">
                            <input type="hidden" name="id_to_modify" value="<?php echo htmlspecialchars($row['ID']); ?>">
                            <input type="submit" name="modify" value="Modify" class="btn modify">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="" style="display:inline;">
                            <input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($row['ID']); ?>">
                            <input type="submit" name="delete" value="Delete" class="btn delete">
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
