<<<<<<< HEAD
=======
<?php 
    require_once('app.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($database, "SELECT * FROM db WHERE id=$id");

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$lname = $n['lname'];
			$fname = $n['fname'];
		}
	}
?>
<!doctype html>
>>>>>>> 2c1c349... Final version. Count() was hushed up.
<html>
<head>
    <title>CRUD by PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
</body>
</html>