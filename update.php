<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['update']))
    {   
        $id = $_POST['warehouse_id'];
        
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city= $_POST['city'];

        $query = "UPDATE warehouse SET name='$name', address='$address', city='$city' WHERE warehouse_id='$id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:warehouse.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>