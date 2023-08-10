<?php
 $con=mysqli_connect("localhost","root","","food");
  session_start();
if(isset($_POST['Logout']))
{
  
    session_destroy();
    header("location: Fpage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <style>
        div.header{
            font-family: poppins;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding: 0px 60px;
            background-color: #204969;
        }
    </style>
</head>
<body>
    <div class="header">
    <h1>Welcome to Admin Panel <?php echo $_SESSION["AdminLoginId"]?> </h1>
    <form method="POST">
    <button name="Logout" class="btn btn-light">Log Out</button>
    </form>
    </div>


    <div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">

        <table class="table text-center table-dark table-hover">
        
        <thead>
        <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">PayMode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query="SELECT * FROM `orderdetails`";
    $user_result=mysqli_query($con,$query);
    while($user_fetch=mysqli_fetch_assoc($user_result))
    {
        echo "
        <tr>
      <td >$user_fetch[Order_id]</th>
      <td>$user_fetch[Full_Name]</td>
      <td>$user_fetch[Phone_No]</td>
      <td>$user_fetch[Address]</td>
      <td>$user_fetch[Pay_Mode]</td>
      <td>
      
      

      <table class='table text-center table-dark table-hover'>
        
      <thead>
      <tr>
    <th scope='col'>Item Name</th>
    <th scope='col'>Price</th>
    <th scope='col'>Quantity</th>
    </tr>
</thead>
<tbody>
        ";
        
        $order_query="SELECT * FROM user_order WHERE Order_id='$user_fetch[Order_id]'";
        $order_result=mysqli_query($con,$order_query);
        //echo mysqli_num_rows($order_result);
        
        while($order_r=mysqli_fetch_assoc($order_result))
        {
          echo " <tr> <td>$order_r[Item_Name]</td> <td>$order_r[Price]</td>  <td>$order_r[Quantity]</td> </tr>     "; 
               
            
        }
        echo"
        </tbody>
        </table>
      </td>
      </tr>
        
        ";
    }
    ?>
    
    </tbody>
        </table>
        </div>
    </div>
</div>


</body>
</html>