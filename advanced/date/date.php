<?php
/*
 * This is example of php date
 */

    echo "<h3>PHP Date Example</h3>";

    # get today date
    echo "Today Date is: ". date('Y-m-d')."<br>";
    echo "Today Day is: ". date('d')."<br>";
    echo "Today Month is: ". date('m')."<br>";
    echo "Today Year is: ". date('Y')."<br><br>";

    # get time
    echo "Time : ". date('h:i:s A')."<br>";

    # get today day
    echo "Today Day is: ". date('l')."<br>";

    # number of day of a given month
    echo "Number of day this month: ". date('t')."<br>";


    echo localtime();