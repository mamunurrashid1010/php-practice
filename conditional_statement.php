<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Conditional Statement</h3><br>

    <?php
        /**
         * This is example of php conditional statement.
         */

        # if condition example
        echo "<h4>If condition example:</h4>";
        $marks=67;
        if($marks<30)
        {
            echo "Fail";
        }

        # if else condition example
        echo "<h4>If else condition example:</h4>";
        $marks=67;
        if($marks<=30)
        {
            echo "Fail";
        }
        else
            echo "Passed";

        # if elseif else condition example
        echo "<h4>If elseif else condition example:</h4>";
        $marks=67;
        if($marks<=30)
            echo "Fail";
        elseif ($marks>30 && $marks<80)
            echo "grade-C";
        elseif ($marks>80 && $marks<90)
            echo "grade-B";
        elseif ($marks>90 && $marks<=100)
            echo "grade-A";
        else
            echo $marks;


    ?>

</body>
</html>
