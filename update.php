<?php
include 'database.php';
if (isset($_GET['id']))//Why did we use $_GET here instead of $_POST?
{
    $id = $_GET["id"];
    $sql = "select * from students where id=$id";
    $result = mysqli_query($con, $sql);
    $student = mysqli_fetch_assoc($result); //Fetches the student as an associative array, creates it from the result
    extract($student);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
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
        <h2>Edit Student Details</h2>
        <form action="save.php" method="post">
            <div class="form-group">
                <label for="email">First Name</label>
                <input type="text" name="first_name" value="<?= $first_name ?>" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="email">Last Name</label>
                <input type="text" name="last_name" value="<?= $last_name ?>" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Registration Number</label>
                <input type="number" name="reg_num" value="<?= $reg_num ?>" min="1" required class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Class</label>
                <input type="number" name="class" value="<?= $class ?>" min="1" required class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>

</body>
</html>