<?php
 if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $number=$_POST["number"];
  $feedback=$_POST["message"];
  $address=$_POST["add"];
  $con=new mysqli("localhost","root","");
  if($con->connect_error)
   echo "connection not established";
  else{
    echo "success";
   $con->query("use food");
   $sql="insert into feedback values('$name','$email','$number','$feedback','address')";
   $con->query($sql);
   $con->close();
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and  (max-width:1300px)" href="phone.css">
   <!--cdn-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body>
        <nav id="Container">
            <div class="img">
                <img src="logo4.jpg" alt="zomato.com">
            </div>
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#service">services</a></li>
                <li><a href="#Client">client</a></li>
                <li><a href="#Contact">contact</a></li>
                <li><a href="#Contact">Santosh</a></li>
            </ul>
        </nav>
        <section id="Home">
            <h1>Welcome to my Foodcourt</h1>
            <p>FOOD COURT is a website designed primarily for use in the food delivary industry.Our proposed system is medium to order online food hassle free from restaurant a well as mess service.</p>
            <p>This system imporves the method of taking the order from customer.</p>
            <button class="btn"><a href="order2.php" style="text-decoration: none; color:wheat">Order now</a></button>
        </section>
        <section id="service">
            <h1 style="margin-left: 560px;">Our services</h1>
            <div id="Boxes">
            <div class="box" id="Box1">
                <img src="piza.jpg" alt="">
                <h2>OrderNow</h2>
                <p>Online ordering systems operate similarly to an online takeaway. Your customer orders online, completes their payment and can then get their food delivered or pick it up at your store.</p>
            </div>
            <div class="box" id="Box2">
                <img src="piza2.jpg" alt="">
                <h2>Bulk meal</h2>
                <p>food items offered in large quantities, which can be purchased in large, bulk lots or transferred from a bulk container into a smaller container for purchase.</p>
            </div>
            <div class="box" id="Box3">
                <img src="piza3.jpg" alt="">
                <h2>Fast delivery</h2>
                <p>The process generally consists of accepting the order; picking, packing, and shipping the items mentioned in the order; and finally tracking them until they get delivered</p>
            </div>
            </div>
        </section>
        <section id="Client">
            <h1>Our clients</h1>
            <div id="clients">
                <div><img src="cl1.jpg" alt="Error"></div>
                <div><img src="cl2.jpg" alt="Error"></div>
                <div><img src="cl3.jpg" alt="Error"></div>
                <div><img src="cl1.jpg" alt="Error"></div>
                <div><img src="cl2.jpg" alt="Error"></div>
            </div>
        </section>
        <section id="Contact">
            <h1>Contact Us</h1>
            <div class="contactus">
                <form method="POST">
                   <div>Name:<br><input type="text" name="name" placeholder="Enter your name"></div> 
                    <div>email:<br><input type="email"  name="email" placeholder="Enter your email"></div> 
                    <div>number:<br><input type="number" name="number"  placeholder="Enter your number"></div>
                    <div><div>Feedback:</div><textarea name="message" id="" cols="30" rows="10" placeholder="Enter feedback or message"></textarea></div>
                    <div><div>Address:</div><textarea name="add" id="" cols="30" rows="10" placeholder="Enter address"></textarea></div>
                    
                    <div><button class="btn" name="submit">Submit</button></div>
                </form>
            </div>
        </section>
        <footer>
            <div >
                 mahesh_m210686ca@nitc.ac.in <br>
                 pandranki_m210699ca@nitc.ac.in<br>
                 simranjeet_m210681ca@nitc.ac.in<br>
                 karan_m210687ca@nitc.ac.in
            </div>
        </footer>
    </body>
</html>