<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script>
                    alert('Item already Added');
                    window.location.href='oldhotel.php'
                </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                print_r($_SESSION['cart']);
                echo "<script>
                    alert('Item Added');
                    window.location.href='oldhotel.php'
                </script>";
            }
        }
        else{
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
            echo "<script>
                    alert('Item Added');
                    window.location.href='oldhotel.php'
                </script>";
        }

    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);   //for removing
                $_SESSION['cart']=array_values($_SESSION['cart']);   //for rearranging array values after removal of perticular index
                echo "<script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
          //     print_r($_SESSION['cart']); 
                echo "<script>
                    window.location.href='mycart.php';
                    </script>";
            }
        }
    }
}
?>