<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['submit']))
{
    $product_name = $_POST['product_name'];
    $category_id =  $_POST['category_id'];
    $product_desc=  $_POST['product_desc'];
     $product_master_sku=  $_POST['product_master_sku'];


 $query    = "INSERT into `products` (product_name, category_id, product_desc, product_master_sku)
                     VALUES ('$product_name', '$category_id', '$product_desc', '$product_master_sku')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: products.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>