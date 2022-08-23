<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['save']))
{
    $name = $_POST['variation_type_name'];
    $category_id =  $_POST['category_id'];
 $query    = "INSERT into `variation_type` (variation_type_name, category_id)
                     VALUES ('$name', '$category_id')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: variation_type.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>