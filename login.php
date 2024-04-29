<?php
session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="select * from `resdata` where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        //echo "login successfully";
        $login=1;
        $_SESSION['username']=$username;
        header('location:welcome.php');
    }else{
       // echo "invalid credentials";
       $invalid=1;
    }
}
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    if($login){
        echo "<div class='alert alert-success' role='alert'>
        login successfull
      </div>";
    }else{
        if($invalid){
            echo "<div class='alert alert-danger' role='alert'>
            invalid credentials
      </div>";
        }
    }
    ?>
</body>
</html>