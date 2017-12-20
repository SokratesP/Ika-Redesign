<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,"test");

if (mysqli_connect_errno()) {
  die('Could not connect:1 ');
}

$sql = 'CREATE Database test';
  $retval = mysqli_query($conn, $sql);

   if(mysqli_connect_errno() ) {
      die('Could not create database:2 ');
   }

echo "Database test_db created successfully\n";
#echo 'Connected successfully';
#mysql_select_db( 'test_db' );

$query_file = 'sql_quert.txt';

$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

mysqli_select_db($conn,'test');

$retval = mysqli_query( $conn ,$sql );

if (mysqli_connect_errno() ) {
  die('Could not create table: 3' );
}

echo "Table myusers created succesfully \n";

mysqli_close($conn);

?>
