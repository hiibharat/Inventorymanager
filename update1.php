<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['update1']))
    {   
        $id = $_POST['product_category_id'];
        
        $name = $_POST['product_category_name'];
        

        $query = "UPDATE product_category SET product_category_name ='$name' WHERE product_category_id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:product_category.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>