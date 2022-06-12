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

    <!-- $_POST example -->
    <h4>Super global variable POST example:</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        mobile: <input type="number" name="mobile">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        $mobile = $_POST['mobile'];

        echo $name."<br>";
        echo $mobile;
    }
    ?>


    <!-- $_GET example -->
    <h4>Super global variable GET example:</h4>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Demo: <input type="text" name="demoText">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $demoText = $_GET['demoText'];

        echo $demoText;

    }
    ?>

</body>
</html>
