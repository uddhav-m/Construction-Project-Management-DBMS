<?php
include "connection.php";

if(isset($_POST['submit'])){
    $eid = $_POST['eid'];
    $ename = $_POST['ename'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $pid = $_POST['pid'];

    $sql = "UPDATE employees SET ename='$ename', phone='$phone', email='$email', position='$position', pid='$pid' WHERE eid='$eid'";

    if(mysqli_query($conn, $sql)){
        header("location: employees.php");
    } else{
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$eid = $_GET['id'];
$sql = "SELECT * FROM employees WHERE eid='$eid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            font-size: 36px;
            color: #333;
        }

        form {
            margin-top: 40px;
            width: 80%;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        form div {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
            color: #333;
            border: 1px solid #ccc;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #333;
        }

        button[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #444;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #444;
        }
    </style>
</head>
<body>
    <h1>Edit Employee</h1>
    <form method="POST">
        <input type="hidden" name="eid" value="<?php echo $row['eid']; ?>">
        <div>
            <label for="ename">Name:</label>
            <input type="text" name="ename" id="ename" value="<?php echo $row['ename']; ?>">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" value="<?php echo $row['position']; ?>">
        </div>
        <div>
            <label for="pid">Project ID:</label>
            <input type="text" name="pid" id="pid" value="<?php echo $row['pid']; ?>">
        </div>
        <button type="submit" name="submit">Update</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>
