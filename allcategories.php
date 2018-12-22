<!DOCTYPE html>
<html>
<head>
	<title>All Categories</title>
</head>
<body>
	<div class="col-md-8" >
		<table align="left" cellpadding="10px">
			<thead>
				<tr>
					<td>ID</td>
					<td>Category Name</td>
					<td>status</td>
					<td>functions</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				//selecting all users
				$stm = "SELECT * FROM category";
				//making connection
				include('connection.php');
				//query
				$qry =mysqli_query($con,$stm);
				//fetching and printing data
				while ($row =mysqli_fetch_array($qry)) {
					echo "<tr>";
				 	echo "<td>" . $row['id']."</td>";
				 	echo "<td>" . $row['categoryname']."</td>";
				 	echo "<td>" . $row['status']."</td>";
				 	echo "<td> EDIT | DELETE </>";
				 	echo "</tr>";
				 } 
				?>
			</tbody>
			<tr>
				<td><button><a href="addcategory.php">Add categories</a></button></td>
			</tr>
		</table>
	</div>

</body>
</html>