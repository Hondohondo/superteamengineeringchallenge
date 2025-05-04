<?php include 'includes/header.php'; ?>
<main class="container" id="content">
    <h1 class="heading-one">Register</h1>
    <form action="register-process.php" method="post" class="register-form">
        <div>
            <label for="first-name">First Name:</label> <br>
            <input type="text" name="first-name" id="first-name">
        </div>
        <div>
            <label for="last-name">Last Name:</label> <br>
            <input type="text" name="last-name" id="last-name">
        </div>
        <div>
            <label for="email">Email:</label> <br>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label> <br>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="confirm-password">Confirm Password:</label> <br>
            <input type="password" name="confirm-password" id="confirm-password">
        </div>

        <input type="submit" value="Register">
    </form>
</main>
<?php include 'includes/footer.php';