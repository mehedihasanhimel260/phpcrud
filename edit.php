<?php
include 'header.php';
?>
<!-- singup from start -->
<div class="container">
    <form action="post">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" id="email">Email address</label>
            <input type="email" class="form-control" value="">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputphone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" value="">
            <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Updated</button>
    </form>

</div>
<!-- singup from End -->



</div>
</body>

</html>