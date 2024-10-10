<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Owjey's Company System. Input your details here to register!</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="age">Age</label> <input type="age" name="age"></p>
		<p><label for="email">Email</label> <input type="text" name="email"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="contactNumber">Contact Number</label> <input type="number" name="contactNumber"></p>
		<p><label for="registerDate">Register Date</label> <input type="date" name="registerDate"></p>
        <p><label for="registerTime">Register Time</label> <input type="time" name="registerTime"></p>
			<input type="submit" name="insertNewRegisterBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Register ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Age</th>
	    <th>Email</th>
	    <th>Gender</th>
	    <th>Contact Number</th>
	    <th>Register Date</th>
	    <th>Register Time</th>
	  </tr>

	  <?php $seeAllRegisterRecords = seeAllRegisterRecords($pdo); ?>
	  <?php foreach ($seeAllRegisterRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['register_id']; ?></td>
	  	<td><?php echo $row['firstName']; ?></td>
	  	<td><?php echo $row['lastName']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['contactNumber']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['registerDate']; ?></td>
	  	<td><?php echo $row['registerTime']; ?></td>
	  	<td>
	  		<a href="editstudent.php?student_id=<?php echo $row['register_id'];?>">Edit</a>
	  		<a href="deletestudent.php?student_id=<?php echo $row['register_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>