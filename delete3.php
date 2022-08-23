<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['delete3']))
    {   
        $id = $_POST['product_item_id'];

        $query = "DELETE FROM products WHERE product_item_id='$id'";

        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:products.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>