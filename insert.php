<?php

include("db.php");
include("auth_session.php");

    if(isset($_POST['save']))
{
    $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];

    $query  = "INSERT into `warehouse` (name, address, city)
                     VALUES ('$name', '$address', '$city')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: warehouse.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>