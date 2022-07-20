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
        }while($x<5);

        # for loop
        echo "<h4>for loop:</h4>";
        $i=1;
        for ($i=1; $i<=5; $i++){
            echo $i."<br>";
        }

        # foreach loop
        echo "<h4>foreach loop:</h4>";
        $colors = ["red", "green", "blue", "yellow"];
        foreach ($colors as $key=>$color) {
            echo "position $key value is: $color <br>";
        }

        # foreach loop associative array
        echo "<h4>foreach loop(associative array):</h4>";
        $marks = ["id"=>10, "Name"=>"hasan", "Marks"=>80];
        foreach ($marks as $key=>$mark) {
            echo " $key : $mark <br>";
        }

    ?>

</body>
</html>
