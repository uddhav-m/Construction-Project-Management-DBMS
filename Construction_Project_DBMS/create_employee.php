<?php
// Include the database connection
include_once 'connection.php';

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form input values
  $ename = $_POST['ename'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $pid = $_POST['pid'];

  // Prepare the SQL statement to insert a new employee
  $stmt = $conn->prepare("INSERT INTO employees (ename, phone, email, position, pid) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssi", $ename, $phone, $email, $position, $pid);

  // Execute the statement
  if ($stmt->execute()) {
    // Redirect back to the main employees table
    header("Location: employees.php");
    exit();
  } else {
    // Handle the error
    echo "Error: " . $stmt->error;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Employee</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    #container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    h1 {
      margin-top: 0;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type=text], input[type=date] {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <div id="container">
    <h1>Create Employee</h1>

    <form method="post">
      <label for="ename">Employee Name:</label>
      <input type="text" id="ename" name="ename">

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone">

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email">

      <label for="position">Position:</label>
      <input type="text" id="position" name="position">

      <label for="pid">Project ID:</label>
      <input type="number" id="pid" name="pid">

      <input type="submit" value="Create Employee">
    </form>
  </div>
</body>
</html>
