<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

<?php
// Define variables and set to empty values
$name = "";
$names = "";

// Function to sanitize input
function test_input($data) {
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;
}

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["name"])) {
        $names = "Name is Required";
    } else {
        $name = test_input($_POST["name"]);
        
        // Check if name contains only letters and white spaces
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $names = "Only letters and white space allowed";
        }
    }
}
?>


<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span style="color:red">* <?php echo $names;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Display the name if there are no validation errors
if (!empty($name) && empty($names)) {
    echo "<h3>Your Input:</h3>";
    echo $name;
}
?>

</body>
</html>