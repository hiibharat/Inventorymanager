<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['save']))
{

    $org_id = 1;//org_id is hard coded - will be change in future

    $name = $_POST['product_category_name'];
 $query    = "INSERT into `product_category` (organization_id, product_category_name)
                     VALUES (1,'$name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: product_category.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>