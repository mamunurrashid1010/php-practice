<!--
    PHP MySQL Get Last Inserted ID
-->
<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "HRMS";

    # Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    # Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "INSERT INTO Employees (name, phone, email)
            VALUES ('M.Kamal', '01670000000', 'm.kamal@example.com')";

    if ($connection->query($sql) === TRUE) {
        $last_insert_id = $connection->insert_id;
        echo "Record added successfully. Last inserted ID is: " . $last_insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    # connection close
    $connection->close();

?>