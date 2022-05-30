<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
<body>

    <h3>PHP Output Example(echo/print)</h3><br>

    <?php
        # we can use echo or print to get output.
        # echo output
        echo "<h3>This is the example of echo output</h3>";
        echo "Hello World!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "-----------------------------------";

        # print output
        print "<h3>This is the example of print output</h3>";
        print "Hello World!<br>";
        print "I'm about to learn PHP!<br>";
        print "-----------------------------------";

        # print string type variable
        echo "<h3>This is the example of string variable print</h3>";
        $text1="Hello";
        $text2="World!";
        echo $text1." ".$text2;
    ?>

</body>
</html>
