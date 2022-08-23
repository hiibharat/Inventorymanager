<?php

include("db.php");
include("auth_session.php");



    if(isset($_POST['update3']))
    {   
       $product_item_id = $_GET['product_item_id'];
      $product_name = $_POST['product_name'];
    $category_id =  $_POST['category_id'];
    $product_desc=  $_POST['product_desc'];
     $product_master_sku=  $_POST['product_master_sku'];
        
        

        $query = "UPDATE products SET product_name ='$product_name', category_id='$category_id', product_desc ='$product_desc', product_master_sku='$product_master_sku' WHERE product_item_id='$product_item_id'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:products.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>