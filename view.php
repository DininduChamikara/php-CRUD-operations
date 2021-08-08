<?php
include "config.php";

$sql = "Select * from users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Users</h2>

        <a class="btn btn-primary" style="float:right" href="create.php">Add New User</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php
                    while($row = $result->fetch_assoc()){
                ?>

                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['firstName']?></td>
                    <td><?php echo $row['lastName']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['gender']?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']?>">Edit</a>&nbsp;&nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>" >Delete</a></td>

                </tr>

                <?php
                    }
                ?>

            </tbody>

        </table>

    </div>
</body>
</html>