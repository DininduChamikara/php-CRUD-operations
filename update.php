<?php
include "config.php";

if(isset($_GET['id'])){

    $user_id = $_GET['id'];

    // query 
    $sql = "Select * from users where id = '$user_id'";

    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()){
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $email =$row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $id = $row['id'];
               
    }
}

if(isset($_POST['update'])){
    
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $id = $_POST['user_id'];
    
    
    //query;
    $sql = "UPDATE users set firstName = '$firstName', lastName = '$lastName', email = '$email', password ='$password', gender = '$gender' where id = '$user_id'";
    
    $conn->query($sql);
    
    if($result == TRUE){
           echo "New record Updated successfully";
           header("location: view.php");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}

?>

<!DOCTYPE html>
<html lang="">
<head>
    
    <title></title>
   
</head>

<body>
   <h2>Signup Form</h2>
    
    <form action="" method="POST">
     First Name:<br>
    <input type="text" name="firstname" value ="<?php echo $firstname; ?>">
     <input type="hidden" name ="user_id" value="<?php echo $id; ?>">
    <br>
    
    Last Name:<br>
    <input type="text" name="lastname" value = "<?php echo $lastname; ?>">
    <br>
    
    Email:<br>
    <input type ="text" name="email" value ="<?php echo $email; ?>">
    <br>
    
    Password:<br>
    <input type="password" name="password" value ="<?php echo $password; ?>">
    <br>
    
    Gender:<br>
    <input type="radio" name="gender" value="Male"  <?php if($gender == 'Male'){echo "checked";} ?> >Male
    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){echo "checked";} ?> >Female
    <br><br>
    
    <input type="submit" name="update" value="Update">
     
    
    </form>
   
    
</body>
</html>