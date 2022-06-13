<?php
include 'connect.php';
if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $password=$_POST['password'];
$sql="INSERT INTO `users_table`(`name`, `email`, `phone`, `password`) VALUES ( '$name', '$email', ' $phone','$password')";
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Php Crud</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="display.php">PHP CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="display.php">Display</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- singup from start -->
        <div class="container">
            <form action="" method="POST">

                <div class="alert alert-success" role="alert">
                    <?php
                        if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                        } else {
                        echo "New record created faild";
                        };
                         ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Your Name</label>
                    <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputphone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" value="">
                    <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Sing Up</button>
            </form>

        </div>
        <!-- singup from End -->



    </div>
</body>

</html>