<?php
include 'header.php';
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$sql="INSERT INTO `users_table`(`name`, `email`, `phone`, `password`) VALUES ( '$name', '$email', ' $phone','$password')";
if ($conn->query($sql) === TRUE) {

?>
<!-- singup from start -->
<div class="container">
    <form action="" method="POST">

        <div class="alert alert-success" role="alert">
            <?php
            echo "New record created successfully";
            } else {
            echo "New record created faild";
            };
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