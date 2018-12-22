<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<style type="text/css">
		.error{
			color: red;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="error">
	<?php
if(isset($_POST['Insert']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$id=$_POST['id'];
$email=$_POST['email'];
$role=$_POST['role'];
$status=$_POST['status'];
if(empty($name) && empty($password) && empty($id) && empty($email) && empty($role) && empty($status) )
{
	echo "<b>Fill up the Form Completely</b>";
}
elseif(empty($name))
{
	echo "<b>Enter the Name</b>";
}
elseif(empty($password))
{
	echo "<b>Enter the Password</b>";
}
elseif(empty($id))
{
	echo "<b>Enter the ID</b>";
}
elseif(empty($email))
{
	echo "<b>Enter the Email</b>";
}
elseif(empty($role))
{
	echo "<b>Enter the Role</b>";
}
elseif(empty($status))
{
	echo "<b>Enter the Status</b>";
}
else
{
include('connection.php');
$input="INSERT INTO hehe(name,password,id,email,role,status) VALUES ('$name','$password','$id','$email','$role','$status')";
$qry=mysqli_query($con,$input);
if($qry)
{
	echo "Data Inserted";
}
else
{
	echo "Insert Error";
}
}
}
?>
</div>
	<form method="POST" name="DataInsert" action="">
		<fieldset>
			<legend>Fill the Form</legend>
				Name:<input type="text" name="name" value=<?php if(isset($name)) echo $name ?>>
				Password:<input type="text" name="password" value=<?php if(isset($password)) echo $password?>>
				Id:<input type="number" name="id" value=<?php if(isset($id)) echo $id?>>
				Email:<input type="text" name="email" value=<?php if(isset($email)) echo $email?>>
				Role:<input type="number" name="role" value=<?php if(isset($role)) echo $role?>>
				Status:<input type="number" name="status" value=<?php if(isset($status)) echo $status?>>
				<input type="submit" name="Insert" value="Submit">
		</fieldset>
	</form>
</body>
</html>