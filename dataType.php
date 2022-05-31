<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Data Type Example</h3><br>

    <?php
        /**
         * This is example of php data type.
         * PHP supports the following data types:
            String
            Integer
            Float (floating point numbers - also called double)
            Boolean
            Array
            NULL
         */
        echo "<h4>String Data type:</h4>";
        $string="This is string data type.";
        echo $string;

        echo "<h4>Integer Data type:</h4>";
        $integer=120;
        var_dump($integer) ;

        echo "<h4>Float Data type:</h4>";
        $float=120.55;
        var_dump($float) ;

        echo "<h4>Boolean Data type:</h4>";
        $x=true;
        $y=false;
        var_dump($x) ;
        var_dump($y) ;

        echo "<h4>Array Data type:</h4>";
        $array= array('a','b','c');
        var_dump($array) ;

        echo "<h4>Null Data type:</h4>";
        $null= null;
        var_dump($null) ;
    ?>

</body>
</html>
