<!doctype html>
<html>
<head>
    <title>CRUD by PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Container. Take all app in one place -->
    <!-- Table with added records to dbs -->
    <div class="conatiner">
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
        <form action="">
        <!-- Form for adding new records -->
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" placeholder="Enter last name">
            </div>

            <button type="submit" class="btn btn-success">Add and Edit</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    

</body>
</html>