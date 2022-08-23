<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['update2']))
    {   
        $id = $_POST['variation_type_id'];
        $name = $_POST['variation_type_name'];
        $category_id =  $_POST['category_id'];
        
        

        $query = "UPDATE variation_type SET variation_type_name ='$name', category_id='$category_id' WHERE variation_type_id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:variation_type.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>