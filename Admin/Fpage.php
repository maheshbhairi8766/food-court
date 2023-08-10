<?php
    $con=mysqli_connect("localhost","root","","food");

    if(mysqli_connect_error())
    {
        echo "Cannot Connected";
    }
    if(isset($_POST['Clicked']))
    {
        $uname=$_POST['AdminName'];
        $pass=$_POST['AdminPassword'];

    $query="select * from admin WHERE Admin_Name='".$uname."' AND Admin_Password='".$pass."' ";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: Admin Panel.php");
    }
    else
    {
        echo "<script>alert('Incorrect Password');</script>";
    }
    
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
   <div class="login-form">
    <h2>Member Login</h2>
    <form method="POST">
        <div class="input-field">
            <i class="fas fa fa-user"></i>
            <input type="text" placeholder="Username" name="AdminName">
        </div>
        <div class="input-field">
            <i class="fas fa fa-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword">
        </div>
        <button type="submit" name="Clicked" class="btn btn-success" style="margin-left:40px">Sign In</button>

        <div class="extra">
            <a href="#"></a>
        </div>
    </form>
   </div> 

</body>
</html>