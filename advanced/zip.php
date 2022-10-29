<?php
    /*
     * php zip example
     */

    # -------------- open, read and close zip file ------------------
    // open zip
    $zip= zip_open("test.zip");
    // read
    zip_read($zip);
    // close zip
    zip_close($zip);