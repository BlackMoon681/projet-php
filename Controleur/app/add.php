<?php

if(isset($_POST['title'])){
    require '../app/db_conn.php';

    $title = $_POST['title'];

    if(empty($title)){
        header("Location: ../Task.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res){
            header("Location: ../Task.php?mess=success"); 
        }else {
            header("Location: ../Task.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../Task.php?mess=error");
}