<?php
include ('inc_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
</head>
<body>
	<div class="col-md-8" >
		<table align="left" cellpadding="10px">
			<thead>
				<tr>
					<td>User ID</td>
					<td>Username</td>
					<td>Email</td>
					<td>role</td>
					<td>status</td>
					<td>functions</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				//selecting all users
				$stm = "SELECT * FROM users";
				//making connection
				include('connection.php');
				//query
				$qry =mysqli_query($con,$stm);
				//fetching and printing data
				while ($row =mysqli_fetch_array($qry)) {
					echo "<tr>";
				 	echo "<td>" . $row['id']."</td>";
				 	echo "<td>" . $row['username']."</td>";
				 	echo "<td>" . $row['email']."</td>";
				 	echo "<td>" . $row['role']."</td>";
				 	echo "<td>" . $row['status']."</td>";
				 	echo "<td> EDIT | DELETE </>";
				 	echo "</tr>";
				 } 
				?>
			</tbody>
			<tr>
				<td><button><a href="userregister.php">Add users</a></button></td>
			</tr>
		</table>
	</div>
</body>
</html>

