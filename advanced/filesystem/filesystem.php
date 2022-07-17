<?php
/*
 * This is a example of php filesystem.
 */

    $path="/contact/contact.php";

    # filename show
    echo basename($path);

    echo "<br>";

    #Show filename, but cut off file extension.
    echo basename($path,'.php')."<br>";

    # copy function
    echo copy("source.txt","target.txt")."<br>";

    # directory name
    echo "Directory name:<br>";
    echo dirname("c:/testweb/home.php") . "<br />";
    echo dirname("c:/testweb/home.php", 2) . "<br />";
    echo dirname("/testweb/home.php")."<br><br>";

    # file open
    echo "File open and close example:<br>";
    $file = fopen("testFile.txt","r");
    //Output lines until EOF is reached
    while(! feof($file)) {
        $line = fgets($file);
        echo $line. "<br>";
    }

    # file close
    fclose($file);

    # fgetc(), Returns a single character from an open file
    $file = fopen("testFile.txt","r");
    echo fgetc($file)."<br>";
    fclose($file);

    # fgets(), 	Returns a line from an open file
    $file = fopen("testFile.txt","r");
    echo fgets($file)."<br>";
    fclose($file);