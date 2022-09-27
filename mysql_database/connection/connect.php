<!--
    php mysql connection
    Method: MySQLi Object-Oriented
-->
<?php
    $servername="localhost";
    $username="root";
    $password="";

    // create connection
    $conn= new mysqli($servername,$username,$password);

    // connection check
    if($conn->connect_errno){
        die("Connection Failed: ".$conn->connect_errno);
    }
    else{
        echo "Connect successfully";
    }

    // close connection
    $conn->close();
?>