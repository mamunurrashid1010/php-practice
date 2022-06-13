<!DOCTYPE html>
<html>
<head>
    <title>PHP Practice</title>
</head>
<body>

<h3>PHP Regular Expression</h3><br>

    <?php
        /**
         * This is example of php regular expression.
         * PHP provides a variety of functions that allow you to use regular expressions.
            1.preg_match()
            2.preg_match_all()
            3.preg_replace()
         */

        # preg_match() function example
        echo "<h4>Regular Expression preg_match() example:</h4>";
        $text="hello world";
        $pattern="/world/i";
        $result=preg_match($pattern,$text);
        if($result==1)
            echo "found";
        else
            echo "not found";

        # preg_match() function example
        echo "<h4>Regular Expression preg_match_all() example:</h4>";
        $text="hello world, hello world, hello world";
        $pattern="/world/i";
        $count=preg_match_all($pattern,$text);
        if($count)
            echo "found: ".$count;
        else
            echo "not found";


    ?>

</body>
</html>
