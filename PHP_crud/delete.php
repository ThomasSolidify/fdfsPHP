<?php
    include "dcon.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `student` where id=$id";
        $con->query($sql);
    }
    header('location:/PHP_crud/index.php');
    exit;
?>