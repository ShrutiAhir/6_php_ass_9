47 Write scritpt using mysqli_close function
<?php
//Creating a connection
$con = mysqli_connect("localhost", "root", "","mydb");
//Query to retrieve all the rows of employee table
mysqli_query($con, "SELECT * FORM employee");
//Error
$error = mysqli_error($con);
print("Error Occurred: ".$error);
//Closing the connection
mysqli_close($con);
?>
output:-

This will produce following result −
Error Occurred: You have an error in your SQL syntax; check the manual that corresponds to your
MySQL server version for the right syntax to use near 'FORM employee' at line 1


