<!--
    PHP MySQL
    Update Example
-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "HRMS";

    # Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Employees SET name='Mr Kamal' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>