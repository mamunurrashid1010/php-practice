<!--
    php MySQL
    Data insert into table example.
-->
<?php
    $serverNameame = "localhost";
    $userNameame = "root";
    $password = "";
    $dbname = "HRMS";

    # Create connection
    $connection = new mysqli($serverNameame, $userNameame, $password, $dbname);
    # Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql="INSERT INTO Employees (name,phone,address,designation) VALUES ('noman','018100012122','agrabad,ctg','IT Executive')";

    if ($connection->query($sql) === TRUE) {
        echo "Employee record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
?>