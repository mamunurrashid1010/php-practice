<!--
    PHP MySQL Insert Multiple Records
-->
<?php

    $servername = "localhost";
    $username   = "username";
    $password   = "password";
    $dbname     = "HRMS";

    # Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    # Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Employees (name, email)
            VALUES ('John', 'john@example.com');";
    $sql .= "INSERT INTO Employees (name, email)
             VALUES ('Mary', 'mary@example.com');";
    $sql .= "INSERT INTO Employees (name, email)
             VALUES ('Julie', 'julie@example.com')";


    if ($conn->multi_query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>