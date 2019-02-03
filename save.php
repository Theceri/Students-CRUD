<?php
include 'database.php';
if (isset($_POST['first_name']))
{
    extract($_POST);
    $sql = "UPDATE `students` SET `first_name` = $first_name,`last_name` = $last_name,`reg_number` = $reg_number,`class` = $class WHERE `id` = $id";
    mysqli_query($con, $sql);
}

header("location: read.php");