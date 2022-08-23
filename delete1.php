<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['delete1']))
    {   
        $id = $_POST['product_category_id'];

        $query = "DELETE FROM product_category WHERE product_category_id='$id'";

        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:product_category.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>