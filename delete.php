<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql="DELETE FROM `users_table` WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header("location:display.php");
  //echo "Record deleted successfully";
}
}