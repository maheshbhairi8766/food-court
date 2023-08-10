<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Food.php">Back</a>
                      </li>
                      <li class="nav-item">
                      <?php
                        $ct=0;
                        if(isset($_SESSION['cart']))
                        {
                            $ct=count($_SESSION['cart']);
                        }
                        ?>
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"><sup><?php echo $ct; ?><sup></i></a>
                      </li>
                      
                      <li class="nav-item">
                        <?php
                            $tl=0;
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $tl=$tl+$value['Price'];
                                }
                            }
                        ?>
                        <a class="nav-link disabled">Total <?php echo $tl; ?> /-</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                        ?>
                        <a href="mycart.php" class="btn btn-outline-success" >My cart(<?php echo $count; ?>)</a>
                    </form>
                  </div>
                </div>
              </nav>
</body>
</html>