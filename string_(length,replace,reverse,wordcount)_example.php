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
            3. strrev()
            4. strpos()
            5. str_replace()
         */

        # string length
        echo "<h4>String Length:</h4>";
        $string="Hello World";
        echo $string."<br>Length: ".strlen($string);

        # string word count
        echo "<h4>String word count:</h4>";
        $string="Hello World";
        echo $string."<br>Count: ".str_word_count($string);

        # string reverse
        echo "<h4>String reverse:</h4>";
        $string="Hello World";
        echo $string."<br>Length: ".strrev($string);

        # The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
        echo "<h4>Text find:</h4>";
        $string="Hello World";
        echo $string."<br>".strpos($string,'World');

        # str_replace() function replaces some characters with some other characters in a string.
        echo "<h4>Replace text :</h4>";
        $string="Hello World";
        echo $string."<br>".str_replace('World','mamun',$string);
    ?>

</body>
</html>
