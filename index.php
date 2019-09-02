<?php 
    require_once('app.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($database, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$lname = $n['lname'];
			$fname = $n['fname'];
		}
	}
?>
<!doctype html>
<html>
<head>
    <title>CRUD by PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .request{
            margin: 0;
            padding: 20px;
            color: #666;
            background: #eee;
            width: 100%;
            text-align: center;
        }
    
    </style>
</head>
<body>
<!-- Container. Take all app in one place -->
    <!-- Table with added records to dbs -->
    <div class="conatiner">
        <div class="col-xl-12 request">
            <?php
            ?>
        </div>
    
            <table class="table">
        <thead class="thead-light">
            <tr>
            <!-- described columns -->
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Option</th>
            </tr>
        </thead>
        <!-- records -->
        <tbody>
            <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td></td>
            </tr>
            <tr>
            <td>Jacob</td>
            <td>Thornton</td>
            <td></td></td>
            </tr>
            <tr>
            <td>Larry</td>
            <td>the Bird</td>
            <td></td>
            </tr>
        </tbody>
        </table>
        <form action="app.php">
            <input type="hidden" name="id" value="">
        <!-- Form for adding new records -->
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" name="lname" placeholder="Enter last name">
            </div>  
            <?php if ($update == true): ?>
            <button type="submit" class="btn btn-success" name="upadate">Add and Edit</button>
            <?php else: ?>
            <button type="submit" class="btn btn-danger" name="save">Delete</button>
            <?php else: ?>
        </form>
    </div>
    

</body>
</html>