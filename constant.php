<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Constant</h3><br>

    <?php
        /**
         * This is example of php constant.
         */

        # constant example
        echo "<h4>constant example:</h4>";
        define("pi","3.1416");
        echo pi;

        # constant array example
        echo "<h4>constant array example:</h4>";
        define("cars",["toyota","BMW","Mahindra"]);
        echo cars[1];

    ?>

</body>
</html>
