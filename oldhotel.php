<?php
    //include("manage_cart.php");
   //session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
         padding:0;
         margin:0;
         box-sizing:border-box;
          
        }
        body{
            background-color: #f3f3f3;
            font-family: 'poppins',sans-serif;
        }
        .heading
        {
            background-color:#cb202d;
            color: #ffffff;
            margin-bottom: 30px;
    padding: 30px 0;
grid-column: 1/-1;
text-align: center;
        }
        .heading>h1
        {
            font-weight: 400;
            font-size: 30px;
            letter-spacing: 10px;
            margin-bottom: 10px;

        }
        .heading>h3
        {
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 5px;
          
            
        }
        .menu
        {
            padding:0 10px 30px 10px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px,1fr));
            grid-gap: 20px 40px;
        }
        .food-items
        {
            display: grid;
            position: relative;
         grid-template-rows: auto 1fr; 
         border-radius: 15px;  
         box-shadow: 0 0 15px rgba(0,0,0,0.1);    
        }
    .food-items img
        {
        
            position: relative;
            height: 224px;
            width: 100%;
            border-radius: 15px 15px 0 0;

                }
                h1{
                    grid-column: 1/-1;
                    text-align: center;
                }
                .details
                {
                    padding: 20px 10px;
                    display: grid;
                    grid-row-gap: 15px;
                    grid-template-rows: auto 1fr 50px;



                }
                .details-sub
                {display:grid ;
                    grid-template-columns: auto auto;
                    
                }
                .details-sub>h5{
                    font-weight: 600;
                    font-size: 18px;
                }
                .price
                {
                    text-align: right;
                }
                .details>p{
                    color: #6f6f6f;
                    font-size: 15px;
                    line-height: 28px;
                    font-weight: 400;
                    align-self: stretch;
                    

                }
                .details>button{
                    background-color: #cb202d;
                    border: none;
                    color: #ffffff;
                    font-size: 16px;
                    font-weight: 600;
                    border-radius: 5px;
                    width: 180px;


                }
        </style>
        
</head>
<body>
    <div class="menu">
        <div class="heading">
            <h2><i>WELCOME TO</i></h2>
            <h1>BHOJANA PRIYA</h1>
            <h3>&mdash; MENU &mdash;</h3>
            <?php include ("navbarc.php"); ?>
        </div>
        <div>
        <form action="manage_cart.php" method="POST">
        <div class="food-items">
            <img src="paneer.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Panner Biryani</h5>
                    <h5 class="price"> ₹100 </h5>                
                    
                </div>
                <p> Paneer biryani is an Indian dish made with paneer, basmati rice, spices & herbs.</p>
                <button type="submit" name="Add_to_cart">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Panner Biryani" >
                <input type="hidden" name="Price" value="100" >
            </div>
        </div>
            </form>
            </div>
            <div>
            <form action="manage_cart.php" method="POST">
            <div class="food-items">
            <img src="veg_biryani.jpg">
            
            <div class="details">
                <div class="details-sub">
                    <h5>Veg Biryani</h5>
                    <h5 class="price">  ₹120 </h5>                
                    
                </div>
                <p> Vegetable biryani is an aromatic rice dish made with basmati rice, mix veggies, herbs & biryani spices.</p>
                <button type="submit" name="Add_to_cart">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Veg Biryani" >
                <input type="hidden" name="Price" value="120" >
            </div>
        </div>
            </form>
            </div>
            <div>
            <form action="manage_cart.php" method="POST">
        <div class="food-items">
            <img src="parotta.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5> Special Parotta</h5>
                    <h5 class="price">  ₹49</h5>                
                    
                </div>
                <p>Porotta is a Subcontinental layered flatbread made from Maida or Atta, alternatively known as flaky ribbon pancake.</p>
                <button type="submit" name="Add_to_cart">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Special Parotta" >
                <input type="hidden" name="Price" value="49" >
            </div>
        </div>
            </form>
            </div>
            <div>
            <form action="manage_cart.php" method="POST">
        <div class="food-items">
            <img src="dosa.jpg">
            <div class="details" >
                <div class="details-sub">
                    <h5>Spcial Dosa</h5>
                    <h5 class="price">  ₹39 </h5>                
                    
                </div>
                <p> In its most simple form, dosa is crispy and crepe-like and is a very popular street food in India.</p>
                <button type="submit" name="Add_to_cart">Add to cart</button>
                <input type="hidden" name="Item_Name" value="Special Dosa" >
                <input type="hidden" name="Price" value="39" >
            </div>
        </div>
            </form>
            </div>
            <div>
            <form action="manage_cart.php" method="POST">
        <div class="food-items">
            <img src="friedrice.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Fried Rice</h5>
                    <h5 class="price">  ₹79 </h5>                
                    
                </div>
                <p> Veg fried rice is flavourful rice tossed with vegetables and Chinese sauces. </p>
                <button type="submit" name="Add_to_cart">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Fried Rice" >
                <input type="hidden" name="Price" value="79" >
            </div>
        </div>
            </form>
            </div>
            <div>
            <form action="manage_cart.php" method="POST">
        <div class="food-items">
            <img src="idli.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Idli</h5>
                    <h5 class="price">  ₹39 </h5>                
                    
                </div>
                <p>  Idli is a soft, pillowy steamed savory cake made from rice and lentil batter.</p>
                <button type="submit" name="Add_to_cart">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Idli" >
                <input type="hidden" name="Price" value="39" >
            </div>
        </div>
            </form>
            </div>
        </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</body>
</html>