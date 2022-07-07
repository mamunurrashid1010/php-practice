<?php
/*
 * This is example of Calendar different example
 * calender build in function
    1. cal_days_in_month()      //Get the number of days in a month for a specified year and calendar
 */

    echo "<h3>PHP Calender Example</h3>";

    # Get the number of days in a month for a specified year and calendar
    echo "Number of day in a month:<br>";
    $day=cal_days_in_month(CAL_GREGORIAN,2,2010);
    echo "There was $day days in  February 2010<br>";