<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of PHP POST method</title>
</head>
<body>
    <?php
    // if(isset($_POST["name"])){
    //     echo "<p>hi, ". $_POST["name"]."</p>";
    // }

    // new code ******
    $name="";
    $nameerr="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["name"])){
            $nameerr="Name is required";

        }
        else {
        $name = test_input($_POST["name"]);
        }

    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    ?> 
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <label for="inputName">Name: </label>
     <input type="name" name="name" id="inputName">
     <span  class="error"> <?php echo $nameerr ?> </span> 
     <input type="submit" value="Submit">
     </form>
</body>
<p>Output is: </p>
<?php
echo $name;
?>
</html>