<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body background="images/pic01.jpg">

<?php
include('inc_session.php');
?>
<div style="background-color: lightblue; text-align:center; font-family: Britannic Bold">
<h1>Dashboard</h1>
<a href="allusers.php">All Users</a>
<a href="logout.php">Logout</a>
</div>
Hello, <?php echo $_SESSION['username'];?>
<div style="background-color: pink; color: purple;">
	<h1>User</h1>
	<button><a href="userregister.php">Add</a></button>
	<button><a href="allusers.php">Display</a></button><br/>
	<h1>Category</h1>
	<button><a href="addcategory.php">Add</a> </button>
	<button><a href="allcategories.php">Display</a></button><br/>
	<h1>Post</h1>
	<button><a href="addpost">Add</a></button>
	<button><a href="viewpost">Viewpost</a></button><br/>
	<h1>Comment</h1>
	<button><a href="allcomments.php">Display</a></button><br/>
</div>
</body>
</html>