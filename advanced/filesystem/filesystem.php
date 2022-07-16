<?php
/*
 * This is a example of php filesystem.
 */

    $path="/contact/contact.php";

    # filename show
    echo basename($path);

    echo "<br>";

    #Show filename, but cut off file extension.
    echo basename($path,'.php');