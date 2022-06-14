<?php
include 'header.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM `users_table` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$sql = "UPDATE users_table SET id='$id', name='$name',email='$email', phone='$phone', password='$password' WHERE id=$id";

?>
<!-- singup from start -->
<div class="container">
    <?php
  
  if ($conn->query($sql) === TRUE) {
echo '<div class="alert alert-success" role="alert">New record update successfully</div>';
} else {
echo '<div class="alert alert-success" role="alert">New record update faild</div>';
};
};
  ?>
    <form action="" method="POST">


        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Your Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputphone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
            <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
    </form>

</div>
<!-- singup from End -->
</div>
</body>

</html>