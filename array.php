<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Array</h3><br>

    <?php
        /**
         * This is an example of php array.
         * There are 3 types of array
            1. Indexed Array
            2. Associative Array
            3. Multidimensional  Array
         */

        # array example
        $studentName=array('hasan','emon','rony','kamal','jamal');

        # array print
        function arrayExample($studentName){
            echo "<h4>array example:</h4>";
            echo $studentName[0]."<br>";
            echo $studentName[1]."<br>";
            echo $studentName[3]."<br>";
        }

        # array length count
        function length($studentName){
            echo "<h4>array Length:</h4>";
            echo count($studentName);
        }

        arrayExample($studentName);
        length($studentName);

    ?>

</body>
</html>
