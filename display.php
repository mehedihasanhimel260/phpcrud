<?php
include 'header.php';
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $sql = "SELECT * FROM `users_table`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               echo '<tr>
                        <th scope="row">'. $row["id"]. " </th>
                        <td>". $row["name"]. "</td>
                        <td> " . $row["email"] . "</td>
                        <td>" . $row["phone"] .' </td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-outline-primary" href="edit.php?updateid='.$row["id"].'">Edit</a>
                                <a class="btn btn-outline-primary" href="delete.php?id='.$row["id"].'">Deleted</a>
                            </div>
                        </td>
                    </tr>' ;
                    }
                    }
                    ?>
        </tbody>
    </table>
</div>
</div>
</body>

</html>