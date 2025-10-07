<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>User Feedback</h2>
    <?php
    $name = $feedback = "";
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $feedback = trim($_POST["feedback"]);

        if (empty($name) || empty($feedback)) {
            $message = "<p style='color:red;'>Both fields are required.</p>";
        } else {
            $entry = "Name: " . $name . ", Feedback: " . $feedback . PHP_EOL;
            file_put_contents("feedback.txt", $entry, FILE_APPEND | LOCK_EX);
            $message = "<p style='color:green;'>Thank you! Your feedback has been submitted.</p>";
            $name = $feedback = "";
        }
    }
    echo $message;
    ?>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
        <br><br>

        <label for="feedback">Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="5" cols="40" required><?php echo htmlspecialchars($feedback); ?></textarea>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
