<?php
$servername = "localhost";
$username = "root";
$password = "Cheese1984!";
$dbname = "login table";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql =
    'INSERT INTO \'login table\' (\'idlogin\', \'Login\', \'password\')
VALUES (\'1\', \'guest\', \'guestpassword\')';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
