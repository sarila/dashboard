<!DOCTYPE html>
<html>
<head>
	<title>Insert Data on User</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	// String function md5 encryption
	$password=md5($_POST['password']);
	$email=$_POST['email'];
	$role=$_POST['role'];
	if(empty($username) && empty($password)  && empty($email) && empty($role) )
	{
		echo "<b>Fill up the Form Completely</b>";
	}
	elseif(empty($username))
	{
		echo "<b>Enter the Name</b>";
	}
	elseif(empty($password))
	{
		echo "<b>Enter the Password</b>";
	}
	elseif(empty($email))
	{
		echo "<b>Enter the Email</b>";
	}
	elseif(empty($role))
	{
		echo "<b>Enter the Role</b>";
	}
	else
	{
		include('connection.php');
		$input="INSERT INTO users(username,password,email,role,status) VALUES ('$username','$password','$email','$role',0)";
		$qry=mysqli_query($con,$input) or die(mysqli_error());
		if($qry)
		{
			echo "User Registered";
		}
		else
		{
			echo "Something Wrong";
		}
	}
}
?>
<form method="post" action="" name="frmRegister" enctype="multipart/form_data"><input type="text" name="username" placeholder="Username"><br/>
<input type="password" name="password" placeholder="Password"><br/>
<input type="email" name="email" placeholder="Email"><br/>
<input type="radio" name="role" value="1">Admin
<input type="radio" name="role" value="2" checked>User<br/>
<input type="submit" name="submit" value="Register"><br/>	
</form>
</body>
</html>