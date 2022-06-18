<?php
    /*
     * This is an example of php file operation.
     */

    # open a file example
    echo "file operation Example:<br>";
    $file=fopen("testFile.txt","r") or die('Unable to open');
    echo fgets($file);
    fclose($file);
