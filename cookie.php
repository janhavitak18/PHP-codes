
    <?php
    setcookie("user", "user1", time()+3600, "/");
    setcookie("name","john", time() +3600, "/");
    setcookie("name", "john2", time()+3600, "/");

        ?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE["user"])) {
            echo "Cookie named '" .$_COOKIE["user"]. "' it is not set";

        }
        else{
            echo "Cookie '" .$_COOKIE["user"] . "' is set <br>";
            echo "Value is: ".$_COOKIE["user"];
            print_r($_COOKIE);
        }
        ?>
    </body>
</html>
