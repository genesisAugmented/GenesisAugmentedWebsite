<?php
include_once 'scripts/connect-to-mysqli.php';	

if(isset($_POST['primary']) && isset($_POST['secondary'])){
	
	$primary = $_POST['primary'];
	$secondary = $_POST['secondary'];
	$pathname = $_POST['pathname'];
	$backstory = $_POST['backstory'];
	
		
	$sql = mysqli_query($mysqli, "INSERT INTO creature_list(primary_name, secondary_name, path, backstory, date_added)
						VALUES('$primary','$secondary','$pathname','$backstory',now())") or die(mysqli_error($mysqli));
	
	header("Location: add_creature.php");
	exit();
}

?>

<html>
<head>
	<title>Admin - Add Unit</title>
</head>
<body>
	
	<form action="add_creature.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="primary" placeholder="Primary Name" />
		<br /><br />
		<input type="text" name="secondary" placeholder="Secondary Name" />
		<br /><br />
		<input type="text" name="pathname" placeholder="Image Name + extension" />
		<br /><br />
		<textarea name="backstory" cols="50" rows="10" placeholder="Backstory"></textarea>
		<br /><br />
		<input type="submit" value="Submit" />
	</form>
	
</body>
</html>