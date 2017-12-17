<?php

#$conn = mysqli_connect("localhost","root","","test");
// Create connection
$conn = mysqli_connect("localhost","root","","test");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO myusers (username,passcode)
VALUES ('test1','1234')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
