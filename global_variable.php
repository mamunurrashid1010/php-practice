<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Global Variable</h3><br>

    <?php
        /**
         * This is example of php global variable.
         * global variable are:
            $ GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            $_FILES
            $_ENV
            $_COOKIE
            $_SESSION
         */

        # globals variable example
        echo "<h4>globals varaiable</h4>";
        $x=100;
        $y=50;
        function sum(){
            $GLOBALS['result']=$GLOBALS['x']+$GLOBALS['y'];
        }
        sum();
        echo $result.'<br>';

        # $_SERVER example
        echo "<h4>Super global variable SERVER example:</h4>";
        echo $_SERVER['SERVER_NAME']."<br>";
        echo $_SERVER['HTTP_HOST']."<br>";
        echo $_SERVER['HTTP_REFERER']."<br>";
        echo $_SERVER['SERVER_PORT']."<br>";




    ?>

    <!-- $_REQUEST example -->
    <h4>Super global variable REQUEST example:</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

</body>
</html>
