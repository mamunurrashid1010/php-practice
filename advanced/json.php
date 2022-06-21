<?php
    /*
     * This is an example of json using in php
     */

    # encode associative array to json object example
    echo "<h4>encode associative array to json object:</h4> <br>";
    # create a associative array
    $studenInfo=array('Hasan'=>10,'Noman'=>20,'Kamal'=>30,'Tusar'=>40);
    echo json_encode($studenInfo);


    # decode json object to associative array example
    echo "<h4>decode json object to associative array :</h4> <br>";
    $jsonObj='{"Peter":35,"Ben":37,"Joe":43}';
    print_r(json_decode($jsonObj));