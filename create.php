<?php
include 'database.php';
if (isset($_POST['first_name']))
{
    //var_dump($_POST);
    extract($_POST);
    $sql = "INSERT INTO `students`(`first_name`, `last_name`, `reg_number`, `class`) 
                             VALUES ('$first_name', '$last_name', $reg_num, $class)";
    mysqli_query($con, $sql);

//    if(mysqli_query($con, $sql)){
//        echo "record inserted";
//    }else{
//        echo mysqli_error($con);
//    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">userCRUD App</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="create.php">Add Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="read.php">View Students</a>
            </li>
        </ul>
    </div>
</nav>

<div class="row justify-content-center">
    <div class="col-5">
        <h2>Add Student</h2>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="email">First Name</label>
                <input type="text" name="first_name" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="email">Last Name</label>
                <input type="text" name="last_name" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Registration Number</label>
                <input type="number" name="reg_num" min="1" required class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Class</label>
                <input type="number" name="class" min="1" required class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>

</body>
</html>