<?php  

include 'connect.php';

$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name= $row['name'];
$email= $row['email'];
$modile= $row['modile'];
$password= $row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['modile'];
    $password=$_POST['password'];


    $sql="update `crud` set id=$id, name='$name',email='$email', modile='$mobile',password='$password'
    where id=$id"; 
    $result=mysqli_query($con,$sql);

    if($result){
        // echo "Data Update Successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name.." autocomplete="off";
                value=<?php echo $name; ?>
                >
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address.." autocomplete="off";
                value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile No:</label>
                <input type="number" name="modile" class="form-control" placeholder="Enter Your Mobile Number.." autocomplete="off";
                value=<?php echo $modile; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password..";
                value=<?php echo $password; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>