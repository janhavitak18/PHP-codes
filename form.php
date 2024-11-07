<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $email = $gender  = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"]== "post") {
        $name = test_input($_POST["NAME"]);
        $email = test_input($_POST["EMAIL"]);
        $name = test_input($_POST["NAME"]);
        $name = test_input($_POST["NAME"]);
        $name = test_input($_POST["NAME"]);

    }
    ?>
</body>
</html>