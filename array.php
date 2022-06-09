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

        # array value print using loop
        function printValue($studentName){
            echo "<h4>array value print using loop:</h4>";
            foreach($studentName as $name){
                echo $name."<br>";
            }
        }

        # associative array
        function associativeArray(){
            echo "<h4>associative array:</h4>";
            $countryCode=array('bangladesh'=>100,'india'=>200,'pakistan'=>300,'nepal'=>400,'america'=>500);
            foreach ($countryCode as $key=>$cCode){
                echo $key."= ".$cCode."<br>";
            }
        }

        # multidimensional array
        function multidimensionalArray(){
            echo "<h4>multidimensional array:</h4>";
            $bikeStock=array(
                    array('Hornet',20),
                    array('Gixxer',10),
                    array('Fz',5),
            );

            for($row=0;$row<count($bikeStock);$row++){
                echo "<p><b>Row number: $row</b></p>";
                echo "<ul>";
                for($col=0;$col<count($bikeStock[$row]);$col++){
                    echo "<li>".$bikeStock[$row][$col]."</li>";
                }
                echo "</ul>";
            }
        }

        # array sorting to ascending order
        # sort() is a building function
        function arraySortToAscending(){
            echo "<h4>Array sorting to ascending order:</h4>";
            $result=[5,1,3,2,4];
            sort($result);
            echo "<pre>";
            print_r($result);
        }

        # array sorting to descending order
        # rsort() is a building function
        function arraySortToDescending(){
            echo "<h4>Array sorting to descending order:</h4>";
            $result=[5,1,3,2,4];
            rsort($result);
            echo "<pre>";
            print_r($result);
        }

        # associative array sorting to ascending order, according to the value.
        # asort() is a building function
        function associativeArraySortToAscending(){
            echo "<h4>Associative array sorting to ascending order, according to the value:</h4>";
            $result=['val1'=>5,'val2'=>3,'val3'=>1,'val4'=>4,'val5'=>2];
            asort($result);
            echo "<pre>";
            print_r($result);
        }

        # associative array sorting to ascending order, according to the key.
        # ksort() is a building function
        function associativeArrayKeySortToAscending(){
            echo "<h4>Associative array sorting to ascending order, according to the key:</h4>";
            $result=['val5'=>5,'val3'=>3,'val2'=>1,'val4'=>4,'val1'=>2];
            ksort($result);
            echo "<pre>";
            print_r($result);
        }

        # associative array sorting to descending order, according to the value.
        # arsort() is a building function
        function associativeArraySortToDescending(){
            echo "<h4>Associative array sorting to descending order, according to the value:</h4>";
            $result=['val1'=>5,'val2'=>3,'val3'=>1,'val4'=>4,'val5'=>2];
            arsort($result);
            echo "<pre>";
            print_r($result);
        }

        arrayExample($studentName);
        length($studentName);
        printValue($studentName);
        associativeArray();
        multidimensionalArray();
        arraySortToAscending();
        arraySortToDescending();
        associativeArraySortToAscending();
        associativeArrayKeySortToAscending();
        
        associativeArraySortToDescending();

    ?>

</body>
</html>
