<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Construction Project Management</title>
    <style>
		body {
			background-image: url("https://www.teahub.io/photos/full/277-2774312_building-construction.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
    <style>
    body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #333;
        color: white;
    }

    .table {
        margin-top: 20px;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .table thead {
        background-color: #333;
        color: white;
    }

    .table th, .table td {
        padding: 10px;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .btn-add-project {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-add-project:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-edit {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-edit:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-delete {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-delete:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
<style>
.table {
  margin-top: 20px;
  padding: 0 10px;
}

.table th, .table td {
  vertical-align: middle;
}

.table th {
  background-color: #34495E ;
  color: #fff;
}

.table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>


  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Constuction DBMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projects.php">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="materials.php">Materials</a>
      </li>
      </ul>
    <ul class="navbar-nav float-right">
      <li class="nav-item">
        <a class="nav-link btn btn-primary" href="create_employee.php">Add New</a>
      </li>
    </ul>
  </div>
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Phone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Position</th>
      <th scope="col">Project ID</th>
      <th scope="col">Manage</th>
      </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $sql = "select *from employees";
    $result = $conn->query($sql);
    if(!$result){
        die("invalid query");
    }
    while($row=$result->fetch_assoc()){
        echo "<tr>";
  echo "<td>" . $row['eid'] . "</td>";
  echo "<td>" . $row['ename'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['position'] . "</td>";
  echo "<td>" . $row['pid'] . "</td>";
  echo "<td>";
  echo "<a class='btn btn-success' href='edit_employee.php?id=" . $row['eid'] . "'>Edit</a>";
  echo "<form action='delete_employee.php' method='POST' style='display: inline;'>
  <input type='hidden' name='eid' value='" . $row['eid'] . "'>
  <button class='btn btn-danger' type='submit'>Delete</button>
  </form>";
  echo "</td>";
  echo "</tr>";

    }
    ?>
   
  </tbody>
</table>


    
  </body>
</html>