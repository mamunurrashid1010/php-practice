<?php
    /*
     * This is an example of php file session.
     */

    # session start example
    session_start();

    # set session value
    $_SESSION['name']="mamun";
    $_SESSION['mobile']="01812555555";

    # print session value
    echo "Name :".$_SESSION['name']."<br>";
    echo "Mobile :".$_SESSION['mobile']."<br>";
    echo "<pre>";
    print_r($_SESSION);

    # overwrite session value
    $_SESSION['mobile']="0181000000";
    echo "Mobile :".$_SESSION['mobile']."<br>";

    # remove session all value
    session_unset();
    print_r($_SESSION);

    # destroy session
    session_destroy();