<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        #navbar{
          /*  border: 2px solid black;*/
    height: 203px;
    width: 100%;
    /*background: black;*/
    border-radius: 49px;
    margin-top: 30px;
        }
        .box-1{
           /* border: 2px solid gray;*/
    height: 165px;
    width: 200px;
    margin-left: 254px;
    position: absolute;
        }
        .box0{
         /*   border: 2px solid gray;*/
    height: 165px;
    width: 200px;
    margin-left: 29px;
    position: absolute;
        }
        .box{
           /* border: 2px solid gray;*/
    height: 165px;
    width: 200px;
    margin-left: 483px;
    position: absolute;
        }
        .box2{
            /*  border: 2px solid gray;*/
    height: 164px;
    width: 200px;
    margin-left: 708px;
    position: absolute;
        }
        .box3{
         /*   border: 2px solid gray;*/
    height: 165px;
    width: 200px;
    margin-left: 950px;
    position: absolute;
        }
        .box4{
        /*    border: 2px solid gray;*/
    /* padding: 20px; */
    margin-left: 1176px;
    height: 165px;
    width: 200px;
    position: absolute;
        }
        #navbar img{
            width: 158px;
    height: 142px;
    border-radius: 89px;
    margin-left: -36px;
    /*box-shadow: 1px 4px black;*/
        }
        #navbar h1{
            height: 20px;
    width: 30px;
    margin-top: -3px;
    margin-left: -10px;
    font-size: 24px;
    text-decoration: underline;
   /* box-shadow: 3px 2px 4px 6px gray;*/
        }
        #navbar h1{
         /*   border: 2px solid black;*/
    width: 112px;
    height: 26px;
    box-shadow: 3px 2px 4px 6px grey;
        }
        .box h1{
            margin-left: 10px;
        }
        .box2 h1{
            margin-left: 8px;
        }
        .box3 h1{
            padding-left: 20px;
        }
        .box4 h1{
            padding-left: 20px;
        }
        .City
        {
            width: 253px;
    height: 73px;
    margin-left: 639px;
    /* margin-bottom: 31px; */
    margin-top: 104px;
        }
        
        .City input{
            width: 200px;
            height: 20px;
        }
        #bd{
            background-image:url('plainBG.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .City button{
            width: 174px;
    height: 42px;
    border-radius: px;
    border-radius: 34px;
        }
        #loc{
            margin-left: 161px;
    margin-top: 62px;
        }
        #pin{
            margin-left: 162px;
    margin-top: 6px;
        }
        #sub{
            margin-left: 164px;
    margin-top: 38px;
        }
        .City input{
            height: 27px;
    width: 207px;
    border-radius: 31px;
    margin-top: -16px;
        }
        #motion{
            position: absolute;
    margin-top: -306px;
    margin-left: 816px;
    position: relative;
    animation-name: op;
    animation-duration: 5s;
    animation-fill-mode: alternate;
    animation-timing-function: ease-in;
        }
        @keyframes op {
            0%{
                left:-350px;
                opacity: 0.2;
            }
            5%{
                left:-330px;
                opacity: 0.2;
            }
            10%{
                left:-300px;
                opacity: 0.2;
            }
            20%{
                left:-250px;
                opacity: 0.4;
            }
            30%{
                left:-200px;
                opacity: 0.6;
            }
            40%{
                left:-150px;
                opacity: 0.2;
            }
            50%{
                left:-120px;
                opacity: 0.8;
            }
            60%{
                left:-100px;
                opacity: 0.6;
            }
            70%{
                left:-80px;
                opacity: 0.2;
            }
            80%{
                left:-60px;
                opacity: 0.8;
            }
            90%{
                left:-40px;
                opacity: 0.8;
            }
            100%{
                left:0px;
                opacity: 1;
            }
        }
        #motion img{
            height: 500px;
    width: 500px;
    border-radius: 20px;
        }
    </style>
<body id="bd">
    <div id="navbar">
        <div class="box-1">
            <img src="HYD.jpg" width="20px" height="20px">
            <h1>Hydrabad</h1>
        </div>
        <div class="box0">
            <img src="indiaGate.jpg" width="20px" height="20px">
            <h1>IndiaGate</h1>
        </div>
        <div class="box">
            <img src="goldenTemple.jpg" width="20px" height="20px">
            <h1>GoldenT</h1>
        </div>
        <div class="box2">
            <img src="jaipur.jpg" width="20px" height="20px">
            <h1>Jaipur</h1>
        </div>
        <div class="box3">
            <img src="mumbai.jpg" width="20px" height="20px">
            <h1>Mumbai</h1>
        </div>
        <div class="box4">
            <img src="Taj.jpg" width="20px" height="20px">
            <h1>Tajmahal</h1>
        </div>
    </div>
    <form action="search.php" method="POST">
    <div class ="City" id="loc">
        <h1>Enter your city :</h1>
        <input type="text" placeholder="city" name="location">
    </div>
    <div class ="City" id="pin">
        <h1>Enter your PIN:</h1>
        <input type="text" placeholder="PIN" name="pin">
    </div>
    <div class ="City" id="sub">
       <input type="submit" name="submit"> 
    </div>
    </form>
    <div id="motion">
        <img src="orderp2.jpg" alt="loading">
    </div>
  
</body>
</html>

