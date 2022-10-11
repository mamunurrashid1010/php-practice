<!--
    PHP MySQL
    Delete Data From Table Example
-->
<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "HRMS";

    # Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    # Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    # sql to delete a record from table
    $sql = "DELETE FROM Employees WHERE id=10";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>