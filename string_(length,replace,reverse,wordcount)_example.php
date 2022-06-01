<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP String Manipulate function</h3><br>

    <?php
        /**
         * This is example of php String different funtion to manipulate string.
         * string manipulate function:
            1. strlen()
            2. str_word_count()
         */

        # string length
        echo "<h4>String Length:</h4>";
        $string="Hello World";
        echo $string."<br>Length: ".strlen($string);

        # string word count
        echo "<h4>String word count:</h4>";
        $string="Hello World";
        echo $string."<br>Length: ".str_word_count($string);

    ?>

</body>
</html>
