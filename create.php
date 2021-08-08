<?php
    include "config.php";

    if(isset($_POST['submit'])){

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        // SQL QUERY
        $sql = "INSERT INTO users(firstName, lastName, email, password, gender) VALUES
        ('$firstName', '$lastName', '$email', '$password', '$gender')";

        // Execute the query
        $result = $conn->query($sql);

        if($result == TRUE){
            echo "New record created successfully";
            header("location: view.php");
        }else{
            echo "Error:".$sql."<br>".$conn->error;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Signup Form</h2>

    <form action="" method="POST">
    First name:<br>
    <input type="text" name="firstname"><br>
    Last name:<br>
    <input type="text" name="lastname"><br>
    Email:<br>
    <input type="text" name="email"><br>
    Password:<br>
    <input type="password" name="password"><br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female<br><br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
 
</body>
</html>