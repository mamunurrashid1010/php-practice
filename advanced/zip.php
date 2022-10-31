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

    # -------------- zip open & Get name of directory entry------------------
    // open zip
    $zip = zip_open("test.zip");

    if ($zip) {
        while ($zip_entry = zip_read($zip)) {
            // Get name of directory entry
            echo "Name: " . zip_entry_name($zip_entry) . "<br>";
        }
        // close zip
        zip_close($zip);
    }

    # -------------- zip Get the file size of directory entry------------------

    $zip = zip_open("test.zip");

    if ($zip) {
        while ($zip_entry = zip_read($zip)) {
            // directory entry name
            echo "Name: " . zip_entry_name($zip_entry) . "<br>";
            // Get filesize
            echo "Filesize: " . zip_entry_filesize($zip_entry);
        }
        // close zip
        zip_close($zip);
    }