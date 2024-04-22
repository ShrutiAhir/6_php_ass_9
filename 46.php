46 Write scritpt using mysqli_connect function.
<?php
$host = "localhost";
$username = "root";
$passwd = " ";
$dbname = "mydb";
//Creating a connection
$con = mysqli_connect($host, $username, $passwd, $dbname);
if($con){
print("Connection Established Successfully");
}else{
print("Connection Failed ");
}
?>

output:-

Connection Established Successfully
