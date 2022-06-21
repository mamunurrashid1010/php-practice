<?php
    /*
     * This is an example of json using in php
     */

    # encode associative array to json object example
    echo "<h4>encode associative array to json object:</h4> <br>";
    # create a associative array
    $studenInfo=array('Hasan'=>10,'Noman'=>20,'Kamal'=>30,'Tusar'=>40);
    echo json_encode($studenInfo);


