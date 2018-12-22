<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS category(
id INT AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(50) NOT NULL,
status TINYINT(1) NOT NULL,
UNIQUE (Name),
)";
$qry=mysqli_query($con,$stmt) or die(mysqli_error());
if($qry)
{
	echo "Table Created Successfully for category";
}
else
{
	echo "Error Creating table or might exist";
}
?>