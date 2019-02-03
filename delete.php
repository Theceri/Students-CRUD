<?php
include 'database.php';
if (isset($_GET['id'])) //If you click the button it has id in the url
{
    extract($_GET);
    $sql = "delete from students where id=$id";
    mysqli_query($con, $sql);
}

header("location: read.php");