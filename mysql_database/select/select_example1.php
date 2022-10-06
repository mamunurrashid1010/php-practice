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

    $sql = "SELECT id, name, designation FROM Employees";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        # output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["designation"]. "<br>";
        }
    } else {
        echo "Empty";
    }

    $conn->close();
?>