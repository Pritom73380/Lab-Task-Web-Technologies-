<?php
session_start();
require_once('../Models/allDatabase.php');
if(isset($_GET['delete'])){
    $username=$_GET['delete'];
    $status=delete($username);
    if($status){
        header('location:../Views/home.php');
        $_SESSION['mess']="Deleted";
    }
}

 if($res){
      header("location:../Views/home.php");
    }

    
    ?>