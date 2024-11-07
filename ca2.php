<?php

function sanitizeInput($input) {
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

$sanitizedComment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $comment = $_POST['comment'];
    $sanitizedComment = sanitizeInput($comment);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Comment Form</title>
</head>
<body>
    <h1>Leave a Comment</h1>

    <form action="ca2.php" method="post">
        <label for="comment">Your comment</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit comment">
    </form>

    <?php if (!empty($sanitizedComment)): ?>
        <h2>Sanitized Comment:</h2>
        <p><?php echo $sanitizedComment; ?></p>
    <?php endif; ?>
</body>
</html>