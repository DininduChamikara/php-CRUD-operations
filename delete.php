<?php
include "config.php";

if(isset($_GET['id'])){

    $user_id = $_GET['id'];

    // Query 
    $sql = "DELETE FROM users WHERE id = '$user_id'";

    // Execute
    $result = $conn->query($sql);

        if($result == TRUE){
            echo "Delete successfully";
            header("location: view.php");
        }else{
            echo "Error:".$sql. "<br>".$conn->error;
        }
}

?>