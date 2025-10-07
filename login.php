<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php
    $username = $password = "";
    $errors = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        if (strlen($username) <= 8) {
            $errors[] = "Username must be greater than 8 characters.";
        }
        if (strlen($password) <= 10) {
            $errors[] = "Password must be greater than 10 characters.";
        }
        if (empty($errors)) {
            echo "<h3 style='color:green;'>Welcome, $username !!!</h3>";
        } else {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }
    }
    ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
