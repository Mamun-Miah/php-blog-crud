<?php
    $id = $_GET["id"];
    if($id) {
    include("../includes/include.php");
    $sqlDelete = "DELETE FROM posts WHERE id = $id";
    
    if(mysqli_query($conn, $sqlDelete)) {
        
        header("Location:./index.php");
    }
    
    // $result = mysqli_query($conn, $sqlDelete);
    // header("Location:./templates-backend/index.php")
    }
?>