<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $errors = [];

    if (strlen($username) <= 8) {
        $errors[] = "Username must be greater than 8 characters.";
    }

    if (strlen($password) <= 10) {
        $errors[] = "Password must be greater than 10 characters.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<p><a href='login.html'>Go Back</a></p>";
    } else {
        echo "<h2 style='color:green;'>Welcome, $username !!!</h2>";
    }
}
?>
