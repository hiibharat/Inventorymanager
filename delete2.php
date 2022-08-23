<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['delete2']))
    {   
        $id = $_POST['variation_type_id'];

        $query = "DELETE FROM variation_type WHERE variation_type_id='$id'";

        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:variation_type.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>