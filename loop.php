<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Loop Example</h3><br>

    <?php
        /**
         * This is example of php Loop.
            1. while loop
         */

        # while loop
        echo "<h4>While loop:</h4>";
        $x=1;
        while ($x<=5){
            echo $x;
            $x++;
        }

        # do while loop
        echo "<h4>do while loop:</h4>";
        $x=10;
        do{
            echo $x."<br>";
        }while($x<5)
    ?>

</body>
</html>
