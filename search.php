<?php
$db=new PDO("mysql:host=localhost;dbname=food;charset=utf8","root","");
if($_POST["pin"]=="" && $_POST["location"]=="")
{
    echo "<h2>NO results found</h2>";
    echo "<h2><a href='order2.php'>Exit</a></h2>";
}
else{
    $search=trim($_POST["pin"]);
    $query=$db->prepare("SELECT * FROM search WHERE pin like '%$search%'");
    $query->execute(array());
    $control=$query->fetchAll(PDO:: FETCH_OBJ);
    $count=$query->rowCount();
    if($count>0)
    {
        ?>
        <table style="font-size:32px;">
        <tr>
        <!--    <td>title</td>
            <td>Description</td> -->
        </tr>
        <?php
        foreach($control as $list){
            ?>
            <tr>
                <style>
                    
                    body{
                        background:url('Box3.jpg')no-repeat center center/cover;
                    }
                    h1{
                        margin: 16px;
                        color: white;
                        margin-left: 456px;
                    }
                    a{
                        background: #e0f2f1;
                                margin: 500px;
                                padding: 7px;
                                border: 2px solid #607d8b;
                                text-decoration: none;
                                 border-radius: 22px;
                            }
                           a:hover{
      border-radius: 22px;  
      color: white;
      background-color:green;
      
}
                </style>
                <h1 style="margin-left: 575px;"><?php echo $list->location;?></h1>
                <h1><?php echo $list->description?></h1>
                <td>
                    <?php
                    ?>
                        <?php
                    if($list->pin==12345)
                    {
                        ?>
                        <a href="hyd_city.html">Check restaurants</a>
                        <?php
                    }
                    ?>
                    <?php
                    if($list->pin==87660)
                    {
                        ?>
                        <a href="hyd_city.html">Check restaurants</a>
                        <?php
                    }
                    ?>
                    <?php
                    if($list->pin==999666)
                    {
                        ?>
                        <a href="VIZAG.htm" >Check restaurants</a>
                        <?php
                    }
                    ?>
                    <?php
                    if($list->pin==40405)
                    {
                        ?>
                        <a href="MUMBAI.htm">Check restaurants</a>
                        <?php
                    }
                    ?>
                    <?php
                    if($list->pin==421302)
                    {
                        ?>
                        <a href="JAIPUR_CITY.htm">Check restaurants</a>
                        <?php
                    }
                    ?>
                    <?php
                    if($list->pin==421305)
                    {
                        ?>
                        <a href="INDIAGATE.htm">Check restaurants</a>
                        <?php
                    }
                    ?>
                </td>
            </tr>
    <?php    } ?>
        </table>
    <?php }else{
        echo "<h2>NO results found</h2>";
        echo "<h2><a href='order2.php'>Exit</a></h2>";
    }
}
