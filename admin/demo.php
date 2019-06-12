
<!DOSTYPE HTML>
<html>
<head>
	<title>welcome to add student</title>
</head>
<body>

<h4><a href='logout.php' style="float:right; margin_righ:30px";>logout</a></h4>
<h4><a  href="admindash.php" style="float:left; margine_left:30px;">Back</a><h4>
<h1 align="center" border="1">welcome to admin dashbord</h1>
<form method="post" action="addstudent.php" enctype="multipart/form-date">
<table align="center" border="1" style="width:60%;margin-top:40px;">
	<tr>
		<th>roll no</th>
		<td><input type="text" name="rollno" placeholder="enter rollno" required></td>
	</tr>
	<tr>
		<th>full name</th>
		<td><input type="text" name="name" placeholder="enter name" required></td>
	</tr>
	<tr>
		<th>city</th>
		<td><input type="text" name="city" placeholder="enter city" required></td> 
	</tr>
	<tr>
		<th>contact no</th>
		<td><input type="text" name="contactno" placeholder="enter contact no" required></td>
	</tr>
	<tr>
		<th>standered</th>
		<td><input type="text" name="standered" placeholder="enter standered" required></td>
		
	</tr>
	
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		include('includes/dbh.php');
	$rollno= $_POST['rollno'];
	$name= $_POST['name'];
	$city = $_POST['city'];
	$contactno= $_POST['contactno'];
	$standered= $_POST['standered'];
	
	
	$qry="INSERT INTO `post`(`id`, `title`, `content`, `author`,`featur_image`) VALUES (`$rollno`,`$name`,`$city`,`$contactno`,`$standered`)";
	$run= mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
			alert('data inserted succesfully.');
			</script>
			<?php
		}
	}
?>

		

	