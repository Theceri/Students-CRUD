<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
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
    <div class="col-8">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>REGISTRATION NUMBER</th>
                <th>CLASS</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php
            include 'database.php';
            $sql = "select * from students";
            $results = mysqli_query($con, $sql);
            while ($students = mysqli_fetch_assoc($results)) //pulls one record at a time from the results and stores them in an associative array
            {
                extract($students); //create variable from an associative array *clarify this section because I haven't fully understood it re: mysqli_fetch_assoc [what are the keys and values for the associative array?] and extract() [what do the variables from the associative array look like?]
                echo "<tr>
                        <td>$id</td>
                        <td>$first_name</td>
                        <td>$last_name</td>
                        <td>$reg_number</td>
                        <td>$class</td>
                        <td><a href='update.php?id=$id' class='btn btn-primary'>Update</a></td>
                        <td><a href='delete.php?id=$id' class='btn btn-danger'>Delete</a></td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>