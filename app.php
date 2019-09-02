<?php
session_start();
// Connect with database
$database = mysqli_connect('localhost', 'root', '', 'project_php');

	// variables
	$fname = "";
	$lname = "";
	$id = 0;
	$update = false;