47.Write scritpt using mysqli_close function
<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "mydb";
//Creating a connection
$con = mysqli_connect($host, $username, $passwd, $dbname);
//Closing the connection
$res = mysqli_close($con);
if($res){
print("Connection Closed");
?>
output:-

This will produce following result −
Connection Closed

