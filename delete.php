<?php
require 'connection.php';

if(isset($_GET['dltId'])){
    $id = $_GET['dltId'];
    $dlt = "DELETE FROM `tb1` WHERE Id = $id";
    $query = mysqli_query($conn,$dlt);
    if($query){
        header("location: view.php");
    }
}
?>