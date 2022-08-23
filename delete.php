<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['delete']))
    {   
        $id = $_POST['warehouse_id'];

        $query = "DELETE FROM warehouse WHERE warehouse_id='$id'";

        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:warehouse.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>