<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
<body>

    <h3>PHP variable Example</h3><br>

    <?php

        # variable declaration with value
        $txt = "Hello world!";  //string value
        $x = 10;                //integer value
        $y = 5.5;               //float value

        # print
        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;

        #concatenation
        echo "<br>"."php concatenation example"."<br>";
        echo "Text:".$txt."Value X:".$x."Value Y:".$y;
    ?>

</body>
</html>
