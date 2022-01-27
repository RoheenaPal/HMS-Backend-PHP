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
            <label for="contact">Contact Number</label>
            <input type="text" name="contact" reqired>
        </div>

        <div>
            <label for="father's name">Father's Name</label>
            <input type="text" name="father's name" reqired>
        </div>

        <div>
            <label for="mother's name">Mother's Name</label>
            <input type="text" name="mother's name" reqired>
        </div>
        
        <div>
            <label for="department">Department</label>
            <input type="text" name="department" reqired>
        </div>

        <div>
            <label for="year">Year</label>
            <input type="text" name="year" reqired>
        </div>



        <div>
            <label for="address">Permanent Address</label>
            <input type="text" name="address" reqired>
        </div>

        <div>
            <label for="blood group">Blood Group</label>
            <input type="text" name="blood group" reqired>
        </div>

        <div>
            <label for="identification">Image of candidate</label>
            <input type="image" name="identification" reqired>
        </div>

        <div>
            <label for="identity">ID Proof</label>
            <input type="image" name="identity" reqired>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="text" name="password" required>
        </div>

        <button type="submit">Submit</button>

        <p>Already a user? <a href="login.php"><b>Log In</b></a></p>
</form>

</body>
</html>