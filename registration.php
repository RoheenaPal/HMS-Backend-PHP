<?php include('server.php') ?>
<!doctype html>
<html>
    <head>
        <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="registration.php" method="post">

        <?php include('errors.php') ?>

        <div>
            <label for="username">Name</label>
            <input type="text" name="username" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="text" name="password" required>
        </div>

        <button type="submit">Submit</button>

        <p>Already a user?<a href="login.php"><b>Log In</b></a></p>
</form>

</body>
</html>