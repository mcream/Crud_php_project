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

        <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
            <?php endif ?>
            <?php $results = mysqli_query($database, "SELECT * FROM db"); ?>
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
        <?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="btn-success" >Edit</a>
			</td>
			<td>
				<a href="app.php?del=<?php echo $row['id']; ?>" class="btn-danger">Delete</a>
			</td>
		</tr>
        <?php } ?>

        <!-- records -->
        <tbody>
            <tr>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <!--<td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
                    <a href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
                </td>-->
            </tr>
        </tbody>
        </table>
        <form method="post" action="app.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <!-- Form for adding new records -->
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
            </div>  
            <?php if ($update == true): ?>
            <button type="submit" class="btn btn-success" name="update">Add and Edit</button>
            <?php else: ?>
            <button type="submit" class="btn btn-danger" name="save">Delete</button>
            <?php endif ?>
        </form>
    </div>
    

</body>
</html>