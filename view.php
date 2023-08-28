<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
require 'connection.php';
if($conn){
    $slt = "SELECT * FROM `tb1`";
    $query = mysqli_query($conn,$slt);
    if($query){
        while($row=mysqli_fetch_assoc($query)){
            $id = $row['Id'];
            $name = $row['Name'];
            echo "<div class='container d-flex align-item-center justify-content-center'><div class='card mt-4' style='width: 50%;'>
            <ul class='list-group list-group-flush'>
              <li class='list-group-item'>ID : $id</li>
              <li class='list-group-item'>Name : $name</li>
              <a class='btn btn-outline-danger' href='delete.php?dltId=$id'>Delete</a>
              <a class='btn btn-outline-success mt-2' href='update.php?updId=$id'>Update</a>
            </ul>
          </div></div>";
        }
    }
}
?>