<?php
require 'connection.php';
if($conn){
    error_reporting(0);
    $name = $_POST['name'];
    $inst = "INSERT INTO `tb1`( `Name`) VALUES ('$name')";
    $sql = mysqli_query($conn,$inst);
    if($sql){
        echo "<script>alert('data inserted Successfully')</script>";
    }else{
        echo "!!Error Show";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
        .center-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            text-align: center;
        }
    </style>
<body class="">
<div class="center-container">
        <div class="form-container">
            <h2>Create Page</h2>
            <form method="POST">
                <input type="text" class="form-control w-100" name="name">
                <button class="btn btn-primary mt-3" type="submit">Login</button>
            </form>
            <a href="view.php" class="btn btn-info mt-3" type="submit">Read Data</a>
        </div>
    </div>
</body>
</html>