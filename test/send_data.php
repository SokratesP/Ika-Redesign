<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

#$sql = "CREATE DATABASE myDB";
#if (mysqli_query($conn,$sql)) {
#  echo "Database created successfully";
#} else {
#  echo "Error cretaing database" . mysqli_error($conn);
#}
// $sql = "CREATE TABLE MyUsers (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// age int(6) UNSIGNED NOT NULL,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";
//
// if (mysqli_query($conn,$sql)) {
//     echo "Table MyUSers created successfully";
// } else {
//     echo "Error creating table: " .mysqli_error($conn);
// }

mysqli_query($conn,"INSERT INTO MyUSers(id,age,firstname,lastname,email)
VALUES ('$_POST[fName]','$_POST[lName]','$_POST[email]','$_POST[age]')");

$sql = "SELECT * FROM MyUSers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "emali" . $row["email"];
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
