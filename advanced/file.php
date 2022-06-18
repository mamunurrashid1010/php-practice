<?php
    /*
     * This is an example of php file operation.
     */

    # open a file example
    echo "file operation Example:<br>";
    $file=fopen("testFile.txt","r") or die('Unable to open');
    echo fgets($file);
    fclose($file);

    # write a file example
    echo "<br>Write a file example:<br>";
    $file=fopen("testFile.txt","w") or die("Unable to open file");
    $text="Mamunur rashid\n";
    fwrite($file,$text);
    $text="B.Sc in CSE\n";
    fwrite($file,$text);

    echo fgets($file);
    fclose($file);

