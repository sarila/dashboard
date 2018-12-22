<!DOCTYPE html>
<html>
<head>
	<title>Add categories</title>
</head>
<body>
	<?php
		if(isset($_POST['submit']))
	{
		$categoryname=$_POST['categoryname'];
		if(empty($categoryname))
		{
			echo "<b>Enter the Name of category</b>";
		}
		else
		{
			include('connection.php');
			$input="INSERT INTO category(categoryname,status) VALUES ('$categoryname',0)";
			$qry=mysqli_query($con,$input) or die(mysqli_error());
			if($qry)
			{
				echo "category added";
			}
			else
			{
				echo "Something Wrong";
			}
		}
	}
?>
<form method="post" name="addcategory" action="/addcategory.php">
	<fieldset>
		<legend>Add category</legend>
		Name:<input type="text" name="categoryname">
		Status: <input type="radio" name="status">active
				<input type="radio" name="status">deactive<br/>
		<input type="submit" name="submit" value="register">
	</fieldset> 
</form>

</body>
</html>