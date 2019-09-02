<?php
session_start();
// Connect with database
$database = mysqli_connect('localhost', 'root', '', 'project_php');

	// variables
	$fname = "";
	$lname = "";
	$id = 0;
    $update = false;
    
    if (isset($_POST['save'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];

		mysqli_query($database, "INSERT INTO db (fname, lname) VALUES ('$fname', '$lname')");
		$_SESSION['message'] = "Record has been saved";
		header('location: index.php');
	}

  if (isset($_POST['update'])) {
  	$id = $_POST['id'];
  	$fname = $_POST['fname'];
  	$lname = $_POST['lname'];

  	mysqli_query($database, "UPDATE db SET name='$name', lname='$lname' WHERE id=$id");
  	$_SESSION['message'] = "Record has been Updated";
  	header('location: index.php');
  }
  if (isset($_GET['del'])) {
  	$id = $_GET['del'];
  	mysqli_query($database, "DELETE FROM db WHERE id=$id");
  	$_SESSION['message'] = "Record has been deleted";
  	header('location: index.php');
  }