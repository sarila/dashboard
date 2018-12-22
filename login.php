<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<?php
session_start();
if(isset($_POST['login']))
{
$name=$_POST['name'];
$password=md5($_POST['password']);
$str="SELECT * FROM users WHERE username='$name' AND password='$password'";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($con,$str);
//counting the records
$rec=mysqli_num_rows($qry);
//counts the record in the database i.e only one username with same name //should be present(only one username so record=1)
if($rec==1)
{
	//Session is called where the login is success
	$_SESSION['sid']=md5(rand(1,9999));
	$_SESSION['username']=$name;
	$_SESSION['logintime']=time();
	header('Location: dashboard.php');
}
else
{
	echo "Unable to Login";
}
}
?>
<form method="post" action="" name="userLogin" enctype="multipart/form_data">
	<fieldset>
<legend>Login</legend>
<input type="text" name="name" placeholder="Username"><br/>
<input type="password" name="password" placeholder="Password"><br/>
<input type="submit" name="login" value="Login"><br/>
</fieldset>
</form>
</body>
</html>