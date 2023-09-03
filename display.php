<?php  

include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Curd Operation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary" type=""><a class="text-light" href="user.php">
        Add User
        </a>
        </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S No:</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    $sql= "select * from `crud`";
    $result= (mysqli_query($con,$sql));

    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id= $row['id'];
            $name= $row['name'];
            $email= $row['email'];
            $modile= $row['modile'];
            $password= $row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$modile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
            <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
        </td>
          </tr>';
        }
    }

    ?>

   
  </tbody>
</table>
    </div>
</body>
</html>