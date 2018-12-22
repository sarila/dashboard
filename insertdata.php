<?php
include('connection.php');
$input="INSERT INTO hehe(name,password,id,email,role,status) VALUES ('Laxmi','laxmi','5','laxmiman@gmail.com','4','1')";
$qry=mysqli_query($con,$input);
if($qry)
{
	echo "Data Inserted";
}
else
{
	echo "Insert Error";
}
?>
