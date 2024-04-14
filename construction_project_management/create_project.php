<?php
// Include the database connection
include_once 'connection.php';

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form input values
  $pname = $_POST['pname'];
  $plocation = $_POST['plocation'];
  $start_date = $_POST['start_date'];
  $due_date = $_POST['due_date'];
  $expense = $_POST['expense'];

  // Prepare the SQL statement to insert a new project
  $stmt = $conn->prepare("INSERT INTO projects (pname, plocation, start_date, due_date, expense) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $pname, $plocation, $start_date, $due_date, $expense);

  // Execute the statement
  if ($stmt->execute()) {
    // Redirect back to the main projects table
    header("Location: projects.php");
    exit();
  } else {
    // Handle the error
    echo "Error: " . $stmt->error;
  }
}

// If the form has not been submitted yet, show the form
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Project</title>
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
    <h1>Create Project</h1>

    <form method="post">
      <label for="pname">Project Name:</label>
      <input type="text" id="pname" name="pname">

      <label for="plocation">Project Location:</label>
      <input type="text" id="plocation" name="plocation">

      <label for="start_date">Start Date:</label>
      <input type="date" id="start_date" name="start_date">

      <label for="due_date">Due Date:</label>
      <input type="date" id="due_date" name="due_date">

      <label for="expense">Expense:</label>
      <input type="text" id="expense" name="expense">

      <input type="submit" value="Create Project">
    </form>
  </div>
</body>
</html>
