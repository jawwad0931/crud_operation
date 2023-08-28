<?php
require 'connection.php';
if(isset($_GET['updId'])){
    $id = $_GET['updId'];
    $slt = "SELECT * FROM `tb1` WHERE Id = $id";
    $query = mysqli_query($conn,$slt);
    if($query){
        $row = mysqli_fetch_assoc($query);
    }
}
?>

<?php
require 'connection.php';
if(isset($_GET['Idupd'])){
    error_reporting(0);
    $id = $_GET['Idupd'];
    $name = $_POST['name'];
    $upd = "UPDATE `tb1` SET `Name`='$name' WHERE Id = $id";
    $sql = mysqli_query($conn,$upd);
    if($upd){
        echo "<div class='alert alert-success' role='alert'>
        Data Inserted Sucessful...
      </div>";
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
            <h2>Update Page</h2>
            <form method="POST" action="update.php?Idupd=<?php echo $id ?>">
                <input type="text" class="form-control w-100" name="name" value="<?php echo $row['Name'] ?>">
                <button class="btn btn-primary mt-3" type="submit">Update</button>
            </form>
            <a href="view.php" class="btn btn-warning mt-3" type="submit">Read Data</a>
        </div>
    </div>
</body>
</html>